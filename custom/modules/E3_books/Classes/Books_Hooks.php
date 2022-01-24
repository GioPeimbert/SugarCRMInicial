<?php

class BooksHooks{

    private function getNewCallsFromAPI($url, $oauthtoken = '', $type = 'GET', $arguments = array(), $encodeData = true, $returnHeaders = false){

        $type = strtoupper($type);
        if ($type == 'GET') {
            $url .= "?" . http_build_query($arguments);
        }
        //$url .= "?" . http_build_query('access_token=bbd6aea9-c264-4b45-b4d3-c7941f2af9e');
        $curl_request = curl_init($url);
        if ($type == 'POST') {
            curl_setopt($curl_request, CURLOPT_CUSTOMREQUEST, 'POST');
        } elseif ($type == 'PUT') {
            curl_setopt($curl_request, CURLOPT_CUSTOMREQUEST, "PUT");
        } elseif ($type == 'DELETE') {
            curl_setopt($curl_request, CURLOPT_CUSTOMREQUEST, "DELETE");
        }
        curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
        curl_setopt($curl_request, CURLOPT_HEADER, $returnHeaders);
        curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);
        if (!empty($arguments) && $type !== 'GET') {
            if ($encodeData) {
                //encode the arguments as JSON
                $arguments = json_encode($arguments);
            }
            curl_setopt($curl_request, CURLOPT_POSTFIELDS, $arguments);
            curl_setopt($curl_request, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'authorization:'.$oauthtoken
            ));
        }
        $result = curl_exec($curl_request);
        if ($returnHeaders) {
            //set headers from response
            list($headers, $content) = explode("\r\n\r\n", $result, 2);
            foreach (explode("\r\n", $headers) as $header) {
                header($header);
            }
            //return the nonheader data
            return trim($content);
        }
        curl_close($curl_request);
        //decode the response from JSON
        $response = json_decode($result,true);
        return $response;

    }

    public function getAutorsBook($bean = null, $event = null, $args = null){

        $GLOBALS['log']->fatal("----------------------");

        if(!$args['isUpdate'] ){
            $GLOBALS['log']->fatal("REGISTRO NUEVO LIBRO");

            //Libro nuevo
            if($bean->tct_titulo_txf != 'Título no encontrado'){
                $GLOBALS['log']->fatal("LIBRO EXISTENTE");

                $rel_name = "e3_books_e3_authors";
                $url_api = "https://fakerestapi.azurewebsites.net/api/v1/Authors/authors/books/".$bean->tct_id_libro_txf;

                $authors = $this->getNewCallsFromAPI($url_api);
                $GLOBALS['log']->fatal("TAMAÑO DE AUTORES: ".count($authors));

                if(count($authors)>0){

                    foreach($authors as $author){

                        $GLOBALS['log']->fatal("ID AUTOR: ".$author['id']);
                        $GLOBALS['log']->fatal("PRIMER NOMBRE: ".$author['firstName']);
                        $GLOBALS['log']->fatal("APELLIDO: ".$author['lastName']);
                        $GLOBALS['log']->fatal("ID LIBRO: ".$author['idBook']);

                        $beanAuthor = BeanFactory::newBean("E3_authors");

                        $beanAuthor->tct_id_autor_txf = $author['id'];
                        $beanAuthor->tct_id_libro_txf = $author['idBook'];
                        $beanAuthor->name = $author['firstName']." ".$author['lastName'];
                        $beanAuthor->tct_nombre_txf = $author['firstName'];
                        $beanAuthor->tct_apellido_txf = $author['lastName'];

                        //Guardamos al autor
                        $beanAuthor->save();

                        $id_author = $beanAuthor->id;
                        $GLOBALS['log']->fatal("ID AUTOR CREADO POR SUGAR: ".$id_author);
                        $bean->load_relationship($rel_name);
                        $bean->$rel_name->add($id_author);

                        $GLOBALS['log']->fatal("AUTOR CREADO");

                    }

                }

            }else{
                $GLOBALS['log']->fatal('NO SE PUEDE REGISTRAR UN LIBRO NO ENCONTRADO');
                $error_message = 'No se puede registrar un libro no encontrado';
                throw new SugarApiExceptionMissingParameter($error_message);
            }
        }
    }
    
}

?>