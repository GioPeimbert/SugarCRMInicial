<?php
 // created: 2022-01-25 14:31:24
$layout_defs["E2_properties"]["subpanel_setup"]['mi_images_e2_properties'] = array (
  'order' => 100,
  'module' => 'MI_images',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MI_IMAGES_E2_PROPERTIES_FROM_MI_IMAGES_TITLE',
  'get_subpanel_data' => 'mi_images_e2_properties',
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
