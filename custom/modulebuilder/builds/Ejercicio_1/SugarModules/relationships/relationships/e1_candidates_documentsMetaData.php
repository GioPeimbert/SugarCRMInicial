<?php
// created: 2021-12-29 16:40:20
$dictionary["e1_candidates_documents"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'e1_candidates_documents' => 
    array (
      'lhs_module' => 'E1_candidates',
      'lhs_table' => 'e1_candidates',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'e1_candidates_documents_c',
      'join_key_lhs' => 'e1_candidates_documentse1_candidates_ida',
      'join_key_rhs' => 'e1_candidates_documentsdocuments_idb',
    ),
  ),
  'table' => 'e1_candidates_documents_c',
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
    'e1_candidates_documentse1_candidates_ida' => 
    array (
      'name' => 'e1_candidates_documentse1_candidates_ida',
      'type' => 'id',
    ),
    'e1_candidates_documentsdocuments_idb' => 
    array (
      'name' => 'e1_candidates_documentsdocuments_idb',
      'type' => 'id',
    ),
    'document_revision_id' => 
    array (
      'name' => 'document_revision_id',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_e1_candidates_documents_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_e1_candidates_documents_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'e1_candidates_documentse1_candidates_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_e1_candidates_documents_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'e1_candidates_documentsdocuments_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'e1_candidates_documents_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'e1_candidates_documentsdocuments_idb',
      ),
    ),
  ),
);