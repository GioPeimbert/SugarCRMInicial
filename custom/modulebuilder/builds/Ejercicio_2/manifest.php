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

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  'built_in_version' => '11.0.2',
  'acceptable_sugar_versions' => 
  array (
    0 => '',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'ENT',
    1 => 'ULT',
  ),
  'readme' => '',
  'key' => 'E2',
  'author' => 'Geovanny',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Ejercicio_2',
  'published_date' => '2022-01-04 20:07:24',
  'type' => 'module',
  'version' => 1641326845,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Ejercicio_2',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'E2_properties',
      'class' => 'E2_properties',
      'path' => 'modules/E2_properties/E2_properties.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/E2_properties',
      'to' => 'modules/E2_properties',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/es_LA.lang.php',
      'to_module' => 'application',
      'language' => 'es_LA',
    ),
  ),
  'image_dir' => '<basepath>/icons',
);