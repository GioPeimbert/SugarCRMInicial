<?php
 // created: 2021-12-29 16:40:20
$layout_defs["E1_candidates"]["subpanel_setup"]['e1_candidates_documents'] = array (
  'order' => 100,
  'module' => 'Documents',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_E1_CANDIDATES_DOCUMENTS_FROM_DOCUMENTS_TITLE',
  'get_subpanel_data' => 'e1_candidates_documents',
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
