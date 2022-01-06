<?php
 // created: 2021-12-28 14:54:46
$layout_defs["MP_Peliculas"]["subpanel_setup"]['mp_peliculas_mp_actores_1'] = array (
  'order' => 100,
  'module' => 'MP_Actores',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MP_PELICULAS_MP_ACTORES_1_FROM_MP_ACTORES_TITLE',
  'get_subpanel_data' => 'mp_peliculas_mp_actores_1',
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
