<?php
// created: 2021-12-29 16:40:20
$dictionary["Task"]["fields"]["e1_candidates_tasks"] = array (
  'name' => 'e1_candidates_tasks',
  'type' => 'link',
  'relationship' => 'e1_candidates_tasks',
  'source' => 'non-db',
  'module' => 'E1_candidates',
  'bean_name' => 'E1_candidates',
  'side' => 'right',
  'vname' => 'LBL_E1_CANDIDATES_TASKS_FROM_TASKS_TITLE',
  'id_name' => 'e1_candidates_taskse1_candidates_ida',
  'link-type' => 'one',
);
$dictionary["Task"]["fields"]["e1_candidates_tasks_name"] = array (
  'name' => 'e1_candidates_tasks_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_E1_CANDIDATES_TASKS_FROM_E1_CANDIDATES_TITLE',
  'save' => true,
  'id_name' => 'e1_candidates_taskse1_candidates_ida',
  'link' => 'e1_candidates_tasks',
  'table' => 'e1_candidates',
  'module' => 'E1_candidates',
  'rname' => 'name',
);
$dictionary["Task"]["fields"]["e1_candidates_taskse1_candidates_ida"] = array (
  'name' => 'e1_candidates_taskse1_candidates_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_E1_CANDIDATES_TASKS_FROM_TASKS_TITLE_ID',
  'id_name' => 'e1_candidates_taskse1_candidates_ida',
  'link' => 'e1_candidates_tasks',
  'table' => 'e1_candidates',
  'module' => 'E1_candidates',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
