<?php
// created: 2022-01-13 15:50:21
$dictionary["e3_books_e3_authors"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'e3_books_e3_authors' => 
    array (
      'lhs_module' => 'E3_books',
      'lhs_table' => 'e3_books',
      'lhs_key' => 'id',
      'rhs_module' => 'E3_authors',
      'rhs_table' => 'e3_authors',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'e3_books_e3_authors_c',
      'join_key_lhs' => 'e3_books_e3_authorse3_books_ida',
      'join_key_rhs' => 'e3_books_e3_authorse3_authors_idb',
    ),
  ),
  'table' => 'e3_books_e3_authors_c',
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
    'e3_books_e3_authorse3_books_ida' => 
    array (
      'name' => 'e3_books_e3_authorse3_books_ida',
      'type' => 'id',
    ),
    'e3_books_e3_authorse3_authors_idb' => 
    array (
      'name' => 'e3_books_e3_authorse3_authors_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_e3_books_e3_authors_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_e3_books_e3_authors_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'e3_books_e3_authorse3_books_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_e3_books_e3_authors_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'e3_books_e3_authorse3_authors_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'e3_books_e3_authors_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'e3_books_e3_authorse3_authors_idb',
      ),
    ),
  ),
);