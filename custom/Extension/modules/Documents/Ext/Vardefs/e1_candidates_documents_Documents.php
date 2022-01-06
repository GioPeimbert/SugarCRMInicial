<?php
// created: 2021-12-29 16:40:20
$dictionary["Document"]["fields"]["e1_candidates_documents"] = array (
  'name' => 'e1_candidates_documents',
  'type' => 'link',
  'relationship' => 'e1_candidates_documents',
  'source' => 'non-db',
  'module' => 'E1_candidates',
  'bean_name' => 'E1_candidates',
  'side' => 'right',
  'vname' => 'LBL_E1_CANDIDATES_DOCUMENTS_FROM_DOCUMENTS_TITLE',
  'id_name' => 'e1_candidates_documentse1_candidates_ida',
  'link-type' => 'one',
);
$dictionary["Document"]["fields"]["e1_candidates_documents_name"] = array (
  'name' => 'e1_candidates_documents_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_E1_CANDIDATES_DOCUMENTS_FROM_E1_CANDIDATES_TITLE',
  'save' => true,
  'id_name' => 'e1_candidates_documentse1_candidates_ida',
  'link' => 'e1_candidates_documents',
  'table' => 'e1_candidates',
  'module' => 'E1_candidates',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["e1_candidates_documentse1_candidates_ida"] = array (
  'name' => 'e1_candidates_documentse1_candidates_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_E1_CANDIDATES_DOCUMENTS_FROM_DOCUMENTS_TITLE_ID',
  'id_name' => 'e1_candidates_documentse1_candidates_ida',
  'link' => 'e1_candidates_documents',
  'table' => 'e1_candidates',
  'module' => 'E1_candidates',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
