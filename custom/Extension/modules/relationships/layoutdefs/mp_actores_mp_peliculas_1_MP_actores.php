<?php
 // created: 2021-12-28 16:58:44
$layout_defs["MP_actores"]["subpanel_setup"]['mp_actores_mp_peliculas_1'] = array (
  'order' => 100,
  'module' => 'MP_peliculas',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MP_ACTORES_MP_PELICULAS_1_FROM_MP_PELICULAS_TITLE',
  'get_subpanel_data' => 'mp_actores_mp_peliculas_1',
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
