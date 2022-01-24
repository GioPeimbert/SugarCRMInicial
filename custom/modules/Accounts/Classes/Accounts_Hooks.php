<?php

class AccountsHooks{

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

    public function setNewCalls($bean = null, $event = null, $args = null){

        if(!$args['isUpdate']){

            //$rel_name = 'account_calls';
            $url_api = 'https://fakerestapi.azurewebsites.net/api/v1/Activities';

            $GLOBALS['log']->fatal("CREACIÓN DE NUEVA CUENTA");

            $calls = $this->getNewCallsFromAPI($url_api);

            $GLOBALS['log']->fatal("TAMAÑO DE LLAMADAS: ".count($calls));

            foreach($calls as $call){

                $beanCall = BeanFactory::newBean('Calls');

                //Le inyectamos información al registro creado

                $beanCall->new_with_id = true;

                $beanCall->id = intval($call['id']);
                $beanCall->name = $call['title'];

                $GLOBALS['log']->fatal("FECHA: ".$call['dueDate']);

                $arrayDate = explode("T",$call['dueDate']);

                $originalHour = explode(".",$arrayDate[1])[0];
                $arrayHour = explode(":",$originalHour);
                $arrayHour[0] = intval($arrayHour[0]) + 6;
                if(intval($arrayHour[0])>24){
                    $difference = intval($arrayHour[0])-24;
                    $arrayHour[0] = $difference;
                }
                $modifiedHour = implode(":", $arrayHour);

                $GLOBALS['log']->fatal("HORA ORIGINAL: ".$originalHour);
                $GLOBALS['log']->fatal("HORA MODIFICADA: ".$modifiedHour);

                $dateTime = $arrayDate[0]." ".$modifiedHour;

                $GLOBALS['log']->fatal("DATE TIME: ".$dateTime);

                $beanCall->date_start = $dateTime;
                $beanCall->ent_verification_chk_c = $call['completed'];
                $beanCall->parent_type = 'Accounts';
                $beanCall->parent_id = $bean->id;

                $beanCall->save();

                $GLOBALS['log']->fatal("ID DE LA LLAMADA: ".$beanCall->id);
                $GLOBALS['log']->fatal("FECHA GUARDADA: ".$beanCall->date_start);

                $GLOBALS['log']->fatal("TAREA AGREGADA------");

                /*
                //Asignamos el registro de llamada a la cuenta nueva
                if($bean->load_relationship($rel_name)){

                    $bean->$rel_name->add($beanCall->id);

                    $GLOBALS['log']->fatal("CUENTA CREADA");

                }else{
                    $GLOBALS['log']->fatal("NO EXISTE LA RELACIÓN");
                }*/

            }

        }
        
    }

}

?>