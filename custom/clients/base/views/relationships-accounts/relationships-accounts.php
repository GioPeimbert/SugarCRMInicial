<?php

$viewdefs['base']['view']['relationships-accounts'] = array(
 'dashlets' => array(
 array(
 'label' => 'Información',
 'description' => 'Se muestran las llamadas, reuniones y tareas relacionadas al módulo cuentas',
 'config' => array(
            ),
 'preview' => array(
            ),
 'filter' => array(
     'module' => array(
         'Accounts'
     ),
     'view' => array(
         'record'
     )
            )
        ),
    ),
);