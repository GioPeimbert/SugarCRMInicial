<?php

$hook_version = 1;

$hook_array['before_save'][] = array(
    1, //Orden en el que se ejecutará el hook
    'Se obtienen los Autores que del libro ingresado', //Descripción de lo que hará
    'custom/modules/E3_books/Classes/Books_Hooks.php', //Path donde se encuentra la clase que contiene la lógica
    'BooksHooks', //Nombre de la clase
    'getAutorsBook', //Nombre del método
);

?>