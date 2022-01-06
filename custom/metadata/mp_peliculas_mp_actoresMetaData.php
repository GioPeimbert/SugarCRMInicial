<?php
// created: 2021-12-29 11:40:06
$dictionary["mp_peliculas_mp_actores"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'mp_peliculas_mp_actores' => 
    array (
      'lhs_module' => 'MP_peliculas',
      'lhs_table' => 'mp_peliculas',
      'lhs_key' => 'id',
      'rhs_module' => 'MP_actores',
      'rhs_table' => 'mp_actores',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mp_peliculas_mp_actores_c',
      'join_key_lhs' => 'mp_peliculas_mp_actoresmp_peliculas_ida',
      'join_key_rhs' => 'mp_peliculas_mp_actoresmp_actores_idb',
    ),
  ),
  'table' => 'mp_peliculas_mp_actores_c',
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
    'mp_peliculas_mp_actoresmp_peliculas_ida' => 
    array (
      'name' => 'mp_peliculas_mp_actoresmp_peliculas_ida',
      'type' => 'id',
    ),
    'mp_peliculas_mp_actoresmp_actores_idb' => 
    array (
      'name' => 'mp_peliculas_mp_actoresmp_actores_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_mp_peliculas_mp_actores_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_mp_peliculas_mp_actores_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mp_peliculas_mp_actoresmp_peliculas_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_mp_peliculas_mp_actores_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mp_peliculas_mp_actoresmp_actores_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'mp_peliculas_mp_actores_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mp_peliculas_mp_actoresmp_peliculas_ida',
        1 => 'mp_peliculas_mp_actoresmp_actores_idb',
      ),
    ),
  ),
);