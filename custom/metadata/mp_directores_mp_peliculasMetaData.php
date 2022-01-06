<?php
// created: 2021-12-29 11:40:06
$dictionary["mp_directores_mp_peliculas"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mp_directores_mp_peliculas' => 
    array (
      'lhs_module' => 'MP_directores',
      'lhs_table' => 'mp_directores',
      'lhs_key' => 'id',
      'rhs_module' => 'MP_peliculas',
      'rhs_table' => 'mp_peliculas',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mp_directores_mp_peliculas_c',
      'join_key_lhs' => 'mp_directores_mp_peliculasmp_directores_ida',
      'join_key_rhs' => 'mp_directores_mp_peliculasmp_peliculas_idb',
    ),
  ),
  'table' => 'mp_directores_mp_peliculas_c',
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
    'mp_directores_mp_peliculasmp_directores_ida' => 
    array (
      'name' => 'mp_directores_mp_peliculasmp_directores_ida',
      'type' => 'id',
    ),
    'mp_directores_mp_peliculasmp_peliculas_idb' => 
    array (
      'name' => 'mp_directores_mp_peliculasmp_peliculas_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_mp_directores_mp_peliculas_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_mp_directores_mp_peliculas_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mp_directores_mp_peliculasmp_directores_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_mp_directores_mp_peliculas_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mp_directores_mp_peliculasmp_peliculas_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'mp_directores_mp_peliculas_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mp_directores_mp_peliculasmp_peliculas_idb',
      ),
    ),
  ),
);