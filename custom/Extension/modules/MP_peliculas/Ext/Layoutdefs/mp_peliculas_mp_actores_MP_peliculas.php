<?php
 // created: 2021-12-29 11:40:06
$layout_defs["MP_peliculas"]["subpanel_setup"]['mp_peliculas_mp_actores'] = array (
  'order' => 100,
  'module' => 'MP_actores',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MP_PELICULAS_MP_ACTORES_FROM_MP_ACTORES_TITLE',
  'get_subpanel_data' => 'mp_peliculas_mp_actores',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
