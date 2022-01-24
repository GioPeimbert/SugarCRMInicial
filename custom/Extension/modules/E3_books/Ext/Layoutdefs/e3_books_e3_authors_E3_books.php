<?php
 // created: 2022-01-13 15:50:21
$layout_defs["E3_books"]["subpanel_setup"]['e3_books_e3_authors'] = array (
  'order' => 100,
  'module' => 'E3_authors',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_E3_BOOKS_E3_AUTHORS_FROM_E3_AUTHORS_TITLE',
  'get_subpanel_data' => 'e3_books_e3_authors',
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
