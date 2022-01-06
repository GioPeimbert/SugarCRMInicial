<?php
$popupMeta = array (
    'moduleMain' => 'MP_peliculas',
    'varName' => 'MP_peliculas',
    'orderBy' => 'mp_peliculas.name',
    'whereClauses' => array (
  'name' => 'mp_peliculas.name',
),
    'searchInputs' => array (
  0 => 'mp_peliculas_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => 10,
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'GENERAL_DATE_C' => 
  array (
    'readonly_formula' => '',
    'readonly' => false,
    'type' => 'date',
    'label' => 'LBL_GENERAL_DATE',
    'width' => 10,
    'default' => true,
  ),
),
);
