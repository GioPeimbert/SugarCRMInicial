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
  'key' => 'MP',
  'author' => 'Geovanny',
  'description' => 'Se encuentran módulos creados para probar y practicar con sugarCRM',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Modulos_prueba',
  'published_date' => '2021-12-29 17:40:04',
  'type' => 'module',
  'version' => 1640799605,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Modulos_prueba',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'MP_actores',
      'class' => 'MP_actores',
      'path' => 'modules/MP_actores/MP_actores.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'MP_directores',
      'class' => 'MP_directores',
      'path' => 'modules/MP_directores/MP_directores.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'MP_peliculas',
      'class' => 'MP_peliculas',
      'path' => 'modules/MP_peliculas/MP_peliculas.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/mp_directores_mp_peliculas_MP_directores.php',
      'to_module' => 'MP_directores',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/mp_peliculas_mp_actores_MP_actores.php',
      'to_module' => 'MP_actores',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/mp_peliculas_mp_actores_MP_peliculas.php',
      'to_module' => 'MP_peliculas',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/mp_directores_mp_peliculasMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/mp_peliculas_mp_actoresMetaData.php',
    ),
  ),
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/MP_actores',
      'to' => 'modules/MP_actores',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/MP_directores',
      'to' => 'modules/MP_directores',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/MP_peliculas',
      'to' => 'modules/MP_peliculas',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'bg_BG',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'cs_CZ',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'da_DK',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'de_DE',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'el_EL',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'es_ES',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'fr_FR',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'he_IL',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'hu_HU',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'hr_HR',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'it_it',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'lt_LT',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'ja_JP',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'ko_KR',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'lv_LV',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'nb_NO',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'nl_NL',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'pl_PL',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'pt_PT',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'ro_RO',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'ru_RU',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'sv_SE',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'th_TH',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'tr_TR',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'zh_TW',
    ),
    26 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'zh_CN',
    ),
    27 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'pt_BR',
    ),
    28 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'ca_ES',
    ),
    29 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'en_UK',
    ),
    30 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'sr_RS',
    ),
    31 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'sk_SK',
    ),
    32 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'sq_AL',
    ),
    33 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'et_EE',
    ),
    34 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'es_LA',
    ),
    35 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'fi_FI',
    ),
    36 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'ar_SA',
    ),
    37 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_directores.php',
      'to_module' => 'MP_directores',
      'language' => 'uk_UA',
    ),
    38 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'en_us',
    ),
    39 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'bg_BG',
    ),
    40 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'cs_CZ',
    ),
    41 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'da_DK',
    ),
    42 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'de_DE',
    ),
    43 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'el_EL',
    ),
    44 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'es_ES',
    ),
    45 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'fr_FR',
    ),
    46 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'he_IL',
    ),
    47 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'hu_HU',
    ),
    48 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'hr_HR',
    ),
    49 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'it_it',
    ),
    50 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'lt_LT',
    ),
    51 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'ja_JP',
    ),
    52 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'ko_KR',
    ),
    53 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'lv_LV',
    ),
    54 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'nb_NO',
    ),
    55 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'nl_NL',
    ),
    56 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'pl_PL',
    ),
    57 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'pt_PT',
    ),
    58 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'ro_RO',
    ),
    59 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'ru_RU',
    ),
    60 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'sv_SE',
    ),
    61 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'th_TH',
    ),
    62 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'tr_TR',
    ),
    63 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'zh_TW',
    ),
    64 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'zh_CN',
    ),
    65 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'pt_BR',
    ),
    66 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'ca_ES',
    ),
    67 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'en_UK',
    ),
    68 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'sr_RS',
    ),
    69 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'sk_SK',
    ),
    70 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'sq_AL',
    ),
    71 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'et_EE',
    ),
    72 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'es_LA',
    ),
    73 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'fi_FI',
    ),
    74 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'ar_SA',
    ),
    75 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'uk_UA',
    ),
    76 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'en_us',
    ),
    77 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'bg_BG',
    ),
    78 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'cs_CZ',
    ),
    79 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'da_DK',
    ),
    80 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'de_DE',
    ),
    81 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'el_EL',
    ),
    82 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'es_ES',
    ),
    83 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'fr_FR',
    ),
    84 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'he_IL',
    ),
    85 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'hu_HU',
    ),
    86 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'hr_HR',
    ),
    87 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'it_it',
    ),
    88 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'lt_LT',
    ),
    89 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'ja_JP',
    ),
    90 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'ko_KR',
    ),
    91 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'lv_LV',
    ),
    92 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'nb_NO',
    ),
    93 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'nl_NL',
    ),
    94 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'pl_PL',
    ),
    95 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'pt_PT',
    ),
    96 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'ro_RO',
    ),
    97 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'ru_RU',
    ),
    98 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'sv_SE',
    ),
    99 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'th_TH',
    ),
    100 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'tr_TR',
    ),
    101 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'zh_TW',
    ),
    102 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'zh_CN',
    ),
    103 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'pt_BR',
    ),
    104 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'ca_ES',
    ),
    105 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'en_UK',
    ),
    106 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'sr_RS',
    ),
    107 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'sk_SK',
    ),
    108 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'sq_AL',
    ),
    109 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'et_EE',
    ),
    110 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'es_LA',
    ),
    111 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'fi_FI',
    ),
    112 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'ar_SA',
    ),
    113 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_peliculas.php',
      'to_module' => 'MP_peliculas',
      'language' => 'uk_UA',
    ),
    114 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'en_us',
    ),
    115 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'bg_BG',
    ),
    116 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'cs_CZ',
    ),
    117 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'da_DK',
    ),
    118 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'de_DE',
    ),
    119 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'el_EL',
    ),
    120 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'es_ES',
    ),
    121 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'fr_FR',
    ),
    122 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'he_IL',
    ),
    123 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'hu_HU',
    ),
    124 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'hr_HR',
    ),
    125 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'it_it',
    ),
    126 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'lt_LT',
    ),
    127 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'ja_JP',
    ),
    128 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'ko_KR',
    ),
    129 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'lv_LV',
    ),
    130 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'nb_NO',
    ),
    131 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'nl_NL',
    ),
    132 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'pl_PL',
    ),
    133 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'pt_PT',
    ),
    134 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'ro_RO',
    ),
    135 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'ru_RU',
    ),
    136 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'sv_SE',
    ),
    137 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'th_TH',
    ),
    138 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'tr_TR',
    ),
    139 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'zh_TW',
    ),
    140 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'zh_CN',
    ),
    141 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'pt_BR',
    ),
    142 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'ca_ES',
    ),
    143 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'en_UK',
    ),
    144 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'sr_RS',
    ),
    145 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'sk_SK',
    ),
    146 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'sq_AL',
    ),
    147 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'et_EE',
    ),
    148 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'es_LA',
    ),
    149 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'fi_FI',
    ),
    150 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'ar_SA',
    ),
    151 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/MP_actores.php',
      'to_module' => 'MP_actores',
      'language' => 'uk_UA',
    ),
    152 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    153 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/es_LA.lang.php',
      'to_module' => 'application',
      'language' => 'es_LA',
    ),
  ),
  'sidecar' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/mp_directores_mp_peliculas_MP_directores.php',
      'to_module' => 'MP_directores',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/mp_directores_mp_peliculas_MP_directores.php',
      'to_module' => 'MP_directores',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/mp_peliculas_mp_actores_MP_actores.php',
      'to_module' => 'MP_actores',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/mp_peliculas_mp_actores_MP_peliculas.php',
      'to_module' => 'MP_peliculas',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/mp_peliculas_mp_actores_MP_actores.php',
      'to_module' => 'MP_actores',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/mp_peliculas_mp_actores_MP_peliculas.php',
      'to_module' => 'MP_peliculas',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/mp_directores_mp_peliculas_MP_directores.php',
      'to_module' => 'MP_directores',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/mp_directores_mp_peliculas_MP_peliculas.php',
      'to_module' => 'MP_peliculas',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/mp_peliculas_mp_actores_MP_actores.php',
      'to_module' => 'MP_actores',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/mp_peliculas_mp_actores_MP_peliculas.php',
      'to_module' => 'MP_peliculas',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
  'wireless_subpanels' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/mp_directores_mp_peliculas_MP_directores.php',
      'to_module' => 'MP_directores',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/mp_peliculas_mp_actores_MP_actores.php',
      'to_module' => 'MP_actores',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/mp_peliculas_mp_actores_MP_peliculas.php',
      'to_module' => 'MP_peliculas',
    ),
  ),
  'image_dir' => '<basepath>/icons',
);