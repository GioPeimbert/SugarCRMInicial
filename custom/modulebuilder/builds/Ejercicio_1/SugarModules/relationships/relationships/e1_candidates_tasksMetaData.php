<?php
// created: 2021-12-29 16:40:20
$dictionary["e1_candidates_tasks"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'e1_candidates_tasks' => 
    array (
      'lhs_module' => 'E1_candidates',
      'lhs_table' => 'e1_candidates',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'e1_candidates_tasks_c',
      'join_key_lhs' => 'e1_candidates_taskse1_candidates_ida',
      'join_key_rhs' => 'e1_candidates_taskstasks_idb',
    ),
  ),
  'table' => 'e1_candidates_tasks_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'e1_candidates_taskse1_candidates_ida' => 
    array (
      'name' => 'e1_candidates_taskse1_candidates_ida',
      'type' => 'id',
    ),
    'e1_candidates_taskstasks_idb' => 
    array (
      'name' => 'e1_candidates_taskstasks_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_e1_candidates_tasks_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_e1_candidates_tasks_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'e1_candidates_taskse1_candidates_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_e1_candidates_tasks_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'e1_candidates_taskstasks_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'e1_candidates_tasks_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'e1_candidates_taskstasks_idb',
      ),
    ),
  ),
);