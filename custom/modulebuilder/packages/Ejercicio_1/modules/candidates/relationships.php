<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$relationships = array (
  'e1_candidates_documents' => 
  array (
    'rhs_label' => 'Documentos',
    'lhs_label' => 'Candidatos',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'E1_candidates',
    'rhs_module' => 'Documents',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'e1_candidates_documents',
  ),
  'e1_candidates_tasks' => 
  array (
    'rhs_label' => 'Tareas',
    'lhs_label' => 'Candidatos',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'E1_candidates',
    'rhs_module' => 'Tasks',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'e1_candidates_tasks',
  ),
);