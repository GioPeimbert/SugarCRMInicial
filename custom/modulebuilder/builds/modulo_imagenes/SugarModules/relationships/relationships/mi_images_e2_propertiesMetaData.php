<?php
// created: 2022-01-25 14:31:24
$dictionary["mi_images_e2_properties"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mi_images_e2_properties' => 
    array (
      'lhs_module' => 'E2_properties',
      'lhs_table' => 'e2_properties',
      'lhs_key' => 'id',
      'rhs_module' => 'MI_images',
      'rhs_table' => 'mi_images',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mi_images_e2_properties_c',
      'join_key_lhs' => 'mi_images_e2_propertiese2_properties_ida',
      'join_key_rhs' => 'mi_images_e2_propertiesmi_images_idb',
    ),
  ),
  'table' => 'mi_images_e2_properties_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'mi_images_e2_propertiese2_properties_ida' => 
    array (
      'name' => 'mi_images_e2_propertiese2_properties_ida',
      'type' => 'id',
    ),
    'mi_images_e2_propertiesmi_images_idb' => 
    array (
      'name' => 'mi_images_e2_propertiesmi_images_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_mi_images_e2_properties_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_mi_images_e2_properties_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mi_images_e2_propertiese2_properties_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_mi_images_e2_properties_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mi_images_e2_propertiesmi_images_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'mi_images_e2_properties_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mi_images_e2_propertiesmi_images_idb',
      ),
    ),
  ),
);