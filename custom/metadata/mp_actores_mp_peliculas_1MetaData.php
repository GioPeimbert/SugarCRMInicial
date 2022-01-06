<?php
// created: 2021-12-28 16:58:44
$dictionary["mp_actores_mp_peliculas_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'mp_actores_mp_peliculas_1' => 
    array (
      'lhs_module' => 'MP_actores',
      'lhs_table' => 'mp_actores',
      'lhs_key' => 'id',
      'rhs_module' => 'MP_peliculas',
      'rhs_table' => 'mp_peliculas',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mp_actores_mp_peliculas_1_c',
      'join_key_lhs' => 'mp_actores_mp_peliculas_1mp_actores_ida',
      'join_key_rhs' => 'mp_actores_mp_peliculas_1mp_peliculas_idb',
    ),
  ),
  'table' => 'mp_actores_mp_peliculas_1_c',
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
    'mp_actores_mp_peliculas_1mp_actores_ida' => 
    array (
      'name' => 'mp_actores_mp_peliculas_1mp_actores_ida',
      'type' => 'id',
    ),
    'mp_actores_mp_peliculas_1mp_peliculas_idb' => 
    array (
      'name' => 'mp_actores_mp_peliculas_1mp_peliculas_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_mp_actores_mp_peliculas_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_mp_actores_mp_peliculas_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mp_actores_mp_peliculas_1mp_actores_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_mp_actores_mp_peliculas_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mp_actores_mp_peliculas_1mp_peliculas_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'mp_actores_mp_peliculas_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mp_actores_mp_peliculas_1mp_actores_ida',
        1 => 'mp_actores_mp_peliculas_1mp_peliculas_idb',
      ),
    ),
  ),
);