<?php
 // created: 2021-12-29 16:40:20
$layout_defs["E1_candidates"]["subpanel_setup"]['e1_candidates_tasks'] = array (
  'order' => 100,
  'module' => 'Tasks',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_E1_CANDIDATES_TASKS_FROM_TASKS_TITLE',
  'get_subpanel_data' => 'e1_candidates_tasks',
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
