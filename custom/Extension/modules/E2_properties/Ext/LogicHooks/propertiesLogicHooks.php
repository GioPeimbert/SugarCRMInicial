<?php

$hook_version = 1;

$hook_array['before_save'][] = array(
    1, //Orden en el que se ejecutará el hook
    'Se crearán los registros en el módulo de imágenes', //Descripción de lo que hará
    'custom/modules/E2_properties/Classes/Properties_Hooks.php', //Path donde se encuentra la clase que contiene la lógica
    'PropertiesHooks', //Nombre de la clase
    'setImages', //Nombre del método
);

?>