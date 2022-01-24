<?php

$hook_version = 1;

$hook_array['before_save'][] = array(
    1, //Orden en el que se ejecutará el hook
    'Se calcula el valor de total de tareas y promedio cuando se agrega una nueva tarea', //Descripción de lo que hará
    'custom/modules/Tasks/Classes/Tasks_Hooks.php', //Path donde se encuentra la clase que contiene la lógica
    'TasksHooks', //Nombre de la clase
    'setTotalAndAverageCandidateModule', //Nombre del método
);

?>