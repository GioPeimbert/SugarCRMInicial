<?php
// created: 2021-12-29 11:40:06
$dictionary["MP_peliculas"]["fields"]["mp_directores_mp_peliculas"] = array (
  'name' => 'mp_directores_mp_peliculas',
  'type' => 'link',
  'relationship' => 'mp_directores_mp_peliculas',
  'source' => 'non-db',
  'module' => 'MP_directores',
  'bean_name' => 'MP_directores',
  'side' => 'right',
  'vname' => 'LBL_MP_DIRECTORES_MP_PELICULAS_FROM_MP_PELICULAS_TITLE',
  'id_name' => 'mp_directores_mp_peliculasmp_directores_ida',
  'link-type' => 'one',
);
$dictionary["MP_peliculas"]["fields"]["mp_directores_mp_peliculas_name"] = array (
  'name' => 'mp_directores_mp_peliculas_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MP_DIRECTORES_MP_PELICULAS_FROM_MP_DIRECTORES_TITLE',
  'save' => true,
  'id_name' => 'mp_directores_mp_peliculasmp_directores_ida',
  'link' => 'mp_directores_mp_peliculas',
  'table' => 'mp_directores',
  'module' => 'MP_directores',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["MP_peliculas"]["fields"]["mp_directores_mp_peliculasmp_directores_ida"] = array (
  'name' => 'mp_directores_mp_peliculasmp_directores_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_MP_DIRECTORES_MP_PELICULAS_FROM_MP_PELICULAS_TITLE_ID',
  'id_name' => 'mp_directores_mp_peliculasmp_directores_ida',
  'link' => 'mp_directores_mp_peliculas',
  'table' => 'mp_directores',
  'module' => 'MP_directores',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
