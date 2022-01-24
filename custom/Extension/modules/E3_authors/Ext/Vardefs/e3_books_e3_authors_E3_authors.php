<?php
// created: 2022-01-13 15:50:21
$dictionary["E3_authors"]["fields"]["e3_books_e3_authors"] = array (
  'name' => 'e3_books_e3_authors',
  'type' => 'link',
  'relationship' => 'e3_books_e3_authors',
  'source' => 'non-db',
  'module' => 'E3_books',
  'bean_name' => 'E3_books',
  'side' => 'right',
  'vname' => 'LBL_E3_BOOKS_E3_AUTHORS_FROM_E3_AUTHORS_TITLE',
  'id_name' => 'e3_books_e3_authorse3_books_ida',
  'link-type' => 'one',
);
$dictionary["E3_authors"]["fields"]["e3_books_e3_authors_name"] = array (
  'name' => 'e3_books_e3_authors_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_E3_BOOKS_E3_AUTHORS_FROM_E3_BOOKS_TITLE',
  'save' => true,
  'id_name' => 'e3_books_e3_authorse3_books_ida',
  'link' => 'e3_books_e3_authors',
  'table' => 'e3_books',
  'module' => 'E3_books',
  'rname' => 'name',
);
$dictionary["E3_authors"]["fields"]["e3_books_e3_authorse3_books_ida"] = array (
  'name' => 'e3_books_e3_authorse3_books_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_E3_BOOKS_E3_AUTHORS_FROM_E3_AUTHORS_TITLE_ID',
  'id_name' => 'e3_books_e3_authorse3_books_ida',
  'link' => 'e3_books_e3_authors',
  'table' => 'e3_books',
  'module' => 'E3_books',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
