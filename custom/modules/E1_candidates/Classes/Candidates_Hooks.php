<?php

class CandidatesHooks{

    public function getCurrentAge($bean = null, $event = null, $args = null){

        if(!$bean->ent_isnewtask_chk_c){
            $GLOBALS['log']->fatal("FECHA: ".$bean->ent_birthday_dat);

            $birthday = new DateTime($bean->ent_birthday_dat);
            $today = new DateTime();
            
            $age = $today->diff($birthday);

            $GLOBALS['log']->fatal("EDAD: ".$age->y);

            $bean->ent_age_int = $age->y;
        }

    }

    public function createNewTaskWithSubject($bean = null, $event = null, $args = null){

        //Es nuevo candidato
        if(!$bean->fetched_row){
            //Nombre de la relación entre candidatos y tareas
            $rel_name = "e1_candidates_tasks";

            //Cración de tarea
            $beanTask = BeanFactory::newBean("Tasks");
            $beanTask->name = "Validación de registro";
            $beanTask->status = "In Progress";

            //Asignación de candidato a tarea
            $beanTask->parent_id = $bean->id;
            $beanTask->parent_type = "E1_candidates";

            //Guardamos la tarea
            $beanTask->save();

            $task_id = $beanTask->id;
            $GLOBALS['log']->fatal("ID TAREA: ".$task_id);

            //Asignación de tarea a candidato
            $bean->load_relationship($rel_name);
            $bean->$rel_name->add($task_id);

            $GLOBALS['log']->fatal("TAREA CREADA");
        }

    }

    public function calculateTotalAndAverageTasksWhenSaveOrEdit($bean = null, $event = null, $args = null){
        
        $GLOBALS['log']->fatal("VALOR BANDERA: ".$bean->ent_isnewtask_chk_c);
        //No es tarea agregada
        if(!$bean->ent_isnewtask_chk_c){
            $total = 0.0;

            //Nombre de la relación entre candidatos y tareas
            $rel_name = "e1_candidates_tasks";

            $bean->load_relationship($rel_name);

            //Traemos las tareas relacionadas al candidado
            $candidateTasks = $bean->$rel_name->getBeans();
            $GLOBALS['log']->fatal("TOTAL DE TAREAS: ".count($candidateTasks));

            //Establecemos valor a campo 'Total de tareas'
            $bean->ent_counttask_int = count($candidateTasks);

            //Obtenemos la suma del valor de las tareas asignadas al candidato
            foreach($candidateTasks as $candidateTask){
                $GLOBALS['log']->fatal("VALOR TAREA: ".$candidateTask->ent_taskvalue_dec_c);
                $total = $total + $candidateTask->ent_taskvalue_dec_c;
            }

            $GLOBALS['log']->fatal("SUMA: ".$total);

            //Establecemos valor al campo promedio
            $bean->ent_averagetask_dec = $total/count($candidateTasks);
        }else{

            $GLOBALS['log']->fatal("SE APAGA BANDERA");

            $bean->ent_isnewtask_chk_c = false;
        }

    }
    
}

?>