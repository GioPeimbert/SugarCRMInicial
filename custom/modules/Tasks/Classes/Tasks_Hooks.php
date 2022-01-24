<?php

class TasksHooks{

    public function setTotalAndAverageCandidateModule($bean = null, $event = null, $args = null){

        $rel_name = "e1_candidates_tasks";
        $total = 0.0;

        $GLOBALS['log']->fatal("CREACIÓN DE NUEVA TAREA");

        $id_candidate = $bean->e1_candidates_taskse1_candidates_ida;

        $GLOBALS['log']->fatal("ID Candidato: ".$id_candidate);

        $beanCandidate = BeanFactory::getBean('E1_candidates',$id_candidate);

        if($beanCandidate->load_relationship($rel_name)){

            $candidateTasks = $beanCandidate->$rel_name->getBeans();

            if(!empty($candidateTasks)){

                $totalTasks = count($candidateTasks);

                //Es nueva tarea
                if(!$bean->fetched_row){

                    $GLOBALS['log']->fatal("ES NUEVA TAREA");

                    $totalTasks = count($candidateTasks)+1;

                    $beanCandidate->ent_counttask_int = $totalTasks;

                }

                $GLOBALS['log']->fatal("TOTAL DE TAREAS: ".$beanCandidate->ent_counttask_int);

                foreach($candidateTasks as $candidateTask){
                    $GLOBALS['log']->fatal("VALOR TAREA: ".$candidateTask->ent_taskvalue_dec_c);
                    $total = $total + $candidateTask->ent_taskvalue_dec_c;
                }
                
                //Es nueva tarea
                if(!$bean->fetched_row){

                    $total = $total + $bean->ent_taskvalue_dec_c;

                }

                $GLOBALS['log']->fatal("SUMA: ".$total);

                //Establecemos valor al campo promedio
                $beanCandidate->ent_averagetask_dec = $total/$totalTasks;
                $beanCandidate->ent_isnewtask_chk_c = True;

                $beanCandidate->save();

            }else{
                $GLOBALS['log']->fatal("NO EXISTEN TAREAS RELACIONADAS");
            }

        }

    }

}

?>