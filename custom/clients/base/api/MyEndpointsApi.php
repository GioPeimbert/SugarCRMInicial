<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class MyEndpointsApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            //GET
            'MyGetEndpoint' => array(
                //request type
                'reqType' => 'GET',

                //set authentication
                'noLoginRequired' => false,

                //endpoint path
                'path' => array('Authors', '?'),

                //endpoint variables
                'pathVars' => array('methodName','idAuthor'),

                //method to call
                'method' => 'getAuthors',

                //short help string to be displayed in the help documentation
                'shortHelp' => 'Se consume el servicio de fakerestapi, para obtener la información del autor, según el ID ingresado',

                //long help to be displayed in the help documentation
                'longHelp' => '',
            ),
            'GetEndpointAuthorsBook' => array(
                //request type
                'reqType' => 'GET',

                //set authentication
                'noLoginRequired' => false,

                //endpoint path
                'path' => array('Books', '?'),

                //endpoint variables
                'pathVars' => array('methodName','idBook'),

                //method to call
                'method' => 'getBook',

                //short help string to be displayed in the help documentation
                'shortHelp' => 'Se consume el servicio de fakerestapi, para obtener la información del libro, según el ID ingresado',

                //long help to be displayed in the help documentation
                'longHelp' => '',
            ),
            'GetMatchStates' => array(
                //request type
                'reqType' => 'GET',

                //set authentication
                'noLoginRequired' => false,

                //endpoint path
                'path' => array('States', '?'),

                //endpoint variables
                'pathVars' => array('methodName','state'),

                //method to call
                'method' => 'getState',

                //short help string to be displayed in the help documentation
                'shortHelp' => 'Se consume el servicio de Wiggot, para obtener los estados que podrían coincidir con la busqueda del ususario',

                //long help to be displayed in the help documentation
                'longHelp' => '',
            ),
            'GetMatchMunicipalities' => array(
                //request type
                'reqType' => 'GET',

                //set authentication
                'noLoginRequired' => false,

                //endpoint path
                'path' => array('Municipality', '?','?'),

                //endpoint variables
                'pathVars' => array('methodName','state','municipality'),

                //method to call
                'method' => 'getMunicipalities',

                //short help string to be displayed in the help documentation
                'shortHelp' => 'Se consume el servicio de Wiggot, para obtener los municipios o delegaciones que podrían coincidir con la busqueda del ususario',

                //long help to be displayed in the help documentation
                'longHelp' => '',
            ),
            'GetMatchColonies' => array(
                //request type
                'reqType' => 'GET',

                //set authentication
                'noLoginRequired' => false,

                //endpoint path
                'path' => array('Colony', '?','?','?'),

                //endpoint variables
                'pathVars' => array('methodName','state','municipality','colony'),

                //method to call
                'method' => 'getColonies',

                //short help string to be displayed in the help documentation
                'shortHelp' => 'Se consume el servicio de Wiggot, para obtener las colonias que podrían coincidir con la busqueda del ususario',

                //long help to be displayed in the help documentation
                'longHelp' => '',
            ),
        );
    }

    /**
     * Method to be used for my MyEndpoint/GetExample endpoint
     */
    public function getAuthors($api, $args)
    {
        $GLOBALS['log']->fatal('ID LIBRO: '.$args['idAuthor']);

        $url_api = 'https://fakerestapi.azurewebsites.net/api/v1/Authors/'.$args['idAuthor'];

        $author = $this->getInformationFromAPI($url_api);

        $GLOBALS['log']->fatal('INFORMACIÓN DEL AUTOR SELECCIONADO: '.$author);

        return $author;
    }

    public function getBook($api, $args)
    {
        $GLOBALS['log']->fatal('ID LIBBRO: '.$args['idBook']);

        $url_api = 'https://fakerestapi.azurewebsites.net/api/v1/Books/'.$args['idBook'];

        $book = $this->getInformationFromAPI($url_api);

        $GLOBALS['log']->fatal('INFORMACIÓN DEL AUTOR SELECCIONADO: '.$book);

        return $book;

    }

    public function getState($api, $args)
    {

        $GLOBALS['log']->fatal('------------------');
        $GLOBALS['log']->fatal('PALABRA A BUSCAR: '.$args['state']);

        //Obtenemos el token
        $url_login = 'https://wiggot.com/api/v2.0.2/user/login';
        $credentials = ["email"=>"estrategia.digital@saoindustries.com","password"=>"SAOIndustries_W"];

        $info_login = $this->getInformationFromAPI($url_login,'','POST',$credentials);

        $GLOBALS['log']->fatal('INFORMACIÓN OBTENIDA: '.$info_login['token']);

        //Obtenemos los estados que coinciden 
        $url_api = 'https://wiggot.com/api/v2.0.2/autocomplete/state/'.$args['state'];

        $states = $this->getInformationFromAPI($url_api,$info_login['token']);

        return $states;

    }

    public function getMunicipalities($api, $args)
    {

        $GLOBALS['log']->fatal('------------------');
        $GLOBALS['log']->fatal('PALABRA A BUSCAR: '.$args['municipality']);

        //Obtenemos el token
        $url_login = 'https://wiggot.com/api/v2.0.2/user/login';
        $credentials = ["email"=>"estrategia.digital@saoindustries.com","password"=>"SAOIndustries_W"];

        $info_login = $this->getInformationFromAPI($url_login,'','POST',$credentials);

        $GLOBALS['log']->fatal('INFORMACIÓN OBTENIDA: '.$info_login['token']);

        //Obtenemos los estados que coinciden 
        $url_api = 'https://wiggot.com/api/v2.0.2/autocomplete/state/'.$args['state'].'/city/'.$args['municipality'];

        $municipalities = $this->getInformationFromAPI($url_api,$info_login['token']);

        return $municipalities;

    }

    public function getColonies($api, $args)
    {

        $GLOBALS['log']->fatal('------------------');
        $GLOBALS['log']->fatal('PALABRA A BUSCAR: '.$args['colony']);

        //Obtenemos el token
        $url_login = 'https://wiggot.com/api/v2.0.2/user/login';
        $credentials = ["email"=>"estrategia.digital@saoindustries.com","password"=>"SAOIndustries_W"];

        $info_login = $this->getInformationFromAPI($url_login,'','POST',$credentials);

        $GLOBALS['log']->fatal('INFORMACIÓN OBTENIDA: '.$info_login['token']);

        //Obtenemos los estados que coinciden 
        $url_api = 'https://wiggot.com/api/v2.0.2/autocomplete/state/'.$args['state'].'/city/'.$args['municipality'].'/neighborhood/'.$args['colony'];

        $colonies = $this->getInformationFromAPI($url_api,$info_login['token']);

        return $colonies;

    }

    private function getInformationFromAPI($url, $oauthtoken = '', $type = 'GET', $arguments = array(), $encodeData = true, $returnHeaders = false){

        $GLOBALS['log']->fatal('TOKEN: '.$oauthtoken);

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
        curl_setopt($curl_request, CURLOPT_HTTPHEADER, array(
            'Authorization:'.$oauthtoken
        ));
        if (!empty($arguments) && $type !== 'GET') {
            if ($encodeData) {
                //encode the arguments as JSON
                $arguments = json_encode($arguments);
            }
            curl_setopt($curl_request, CURLOPT_POSTFIELDS, $arguments);
            curl_setopt($curl_request, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    //'authorization:'.$oauthtoken
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

}

?>