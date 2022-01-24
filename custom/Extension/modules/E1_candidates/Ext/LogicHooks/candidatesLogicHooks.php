<?php

$hook_version = 1;

$hook_array['before_save'][] = array(
    1, //Orden en el que se ejecutará el hook
    'Se calcula de manera automática la edad del candidato', //Descripción de lo que hará
    'custom/modules/E1_candidates/Classes/Candidates_Hooks.php', //Path donde se encuentra la clase que contiene la lógica
    'CandidatesHooks', //Nombre de la clase
    'getCurrentAge', //Nombre del método
);

$hook_array['before_save'][] = array(
    2,
    'Se asigna una tarea al candidato con asunto específico',
    'custom/modules/E1_candidates/Classes/Candidates_Hooks.php',
    'CandidatesHooks',
    'createNewTaskWithSubject',
);

$hook_array['before_save'][] = array(
    3,
    'Se calcula el valor de total de tareas y promedio',
    'custom/modules/E1_candidates/Classes/Candidates_Hooks.php',
    'CandidatesHooks',
    'calculateTotalAndAverageTasksWhenSaveOrEdit',
);

?>