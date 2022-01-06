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
  'mp_directores_mp_peliculas' => 
  array (
    'rhs_label' => 'Películas',
    'lhs_label' => 'Directores',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'MP_directores',
    'rhs_module' => 'MP_peliculas',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'mp_directores_mp_peliculas',
  ),
);