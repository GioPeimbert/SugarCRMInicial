<?php
// created: 2022-01-25 14:31:24
$dictionary["MI_images"]["fields"]["mi_images_e2_properties"] = array (
  'name' => 'mi_images_e2_properties',
  'type' => 'link',
  'relationship' => 'mi_images_e2_properties',
  'source' => 'non-db',
  'module' => 'E2_properties',
  'bean_name' => 'E2_properties',
  'side' => 'right',
  'vname' => 'LBL_MI_IMAGES_E2_PROPERTIES_FROM_MI_IMAGES_TITLE',
  'id_name' => 'mi_images_e2_propertiese2_properties_ida',
  'link-type' => 'one',
);
$dictionary["MI_images"]["fields"]["mi_images_e2_properties_name"] = array (
  'name' => 'mi_images_e2_properties_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MI_IMAGES_E2_PROPERTIES_FROM_E2_PROPERTIES_TITLE',
  'save' => true,
  'id_name' => 'mi_images_e2_propertiese2_properties_ida',
  'link' => 'mi_images_e2_properties',
  'table' => 'e2_properties',
  'module' => 'E2_properties',
  'rname' => 'name',
);
$dictionary["MI_images"]["fields"]["mi_images_e2_propertiese2_properties_ida"] = array (
  'name' => 'mi_images_e2_propertiese2_properties_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_MI_IMAGES_E2_PROPERTIES_FROM_MI_IMAGES_TITLE_ID',
  'id_name' => 'mi_images_e2_propertiese2_properties_ida',
  'link' => 'mi_images_e2_properties',
  'table' => 'e2_properties',
  'module' => 'E2_properties',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);