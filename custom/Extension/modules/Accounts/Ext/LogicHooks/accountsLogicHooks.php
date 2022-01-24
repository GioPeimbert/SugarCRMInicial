<?php

$hook_version = 1;

$hook_array['before_save'][] = array(
    1, //Orden en el que se ejecutará el hook
    'Se asignan llamadas a la cuenta creada, consumuiendo una api REST', //Descripción de lo que hará
    'custom/modules/Accounts/Classes/Accounts_Hooks.php', //Path donde se encuentra la clase que contiene la lógica
    'AccountsHooks', //Nombre de la clase
    'setNewCalls', //Nombre del método
);

?>