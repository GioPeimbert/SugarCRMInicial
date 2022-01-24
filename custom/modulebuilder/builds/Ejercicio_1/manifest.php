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
  'key' => 'E1',
  'author' => 'Geovanny',
  'description' => 'Ejercicio práctico candidatos',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Ejercicio_1',
  'published_date' => '2021-12-29 22:40:19',
  'type' => 'module',
  'version' => 1640817620,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Ejercicio_1',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'E1_candidates',
      'class' => 'E1_candidates',
      'path' => 'modules/E1_candidates/E1_candidates.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/e1_candidates_documents_E1_candidates.php',
      'to_module' => 'E1_candidates',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/e1_candidates_tasks_E1_candidates.php',
      'to_module' => 'E1_candidates',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/e1_candidates_documentsMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/e1_candidates_tasksMetaData.php',
    ),
  ),
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/E1_candidates',
      'to' => 'modules/E1_candidates',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'bg_BG',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'cs_CZ',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'da_DK',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'de_DE',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'el_EL',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'es_ES',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'fr_FR',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'he_IL',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'hu_HU',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'hr_HR',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'it_it',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'lt_LT',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'ja_JP',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'ko_KR',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'lv_LV',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'nb_NO',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'nl_NL',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'pl_PL',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'pt_PT',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'ro_RO',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'ru_RU',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'sv_SE',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'th_TH',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'tr_TR',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'zh_TW',
    ),
    26 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'zh_CN',
    ),
    27 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'pt_BR',
    ),
    28 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'ca_ES',
    ),
    29 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'en_UK',
    ),
    30 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'sr_RS',
    ),
    31 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'sk_SK',
    ),
    32 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'sq_AL',
    ),
    33 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'et_EE',
    ),
    34 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'es_LA',
    ),
    35 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'fi_FI',
    ),
    36 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'ar_SA',
    ),
    37 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'uk_UA',
    ),
    38 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_us',
    ),
    39 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'bg_BG',
    ),
    40 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'cs_CZ',
    ),
    41 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'da_DK',
    ),
    42 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'de_DE',
    ),
    43 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'el_EL',
    ),
    44 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'es_ES',
    ),
    45 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'fr_FR',
    ),
    46 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'he_IL',
    ),
    47 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'hu_HU',
    ),
    48 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'hr_HR',
    ),
    49 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'it_it',
    ),
    50 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'lt_LT',
    ),
    51 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'ja_JP',
    ),
    52 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'ko_KR',
    ),
    53 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'lv_LV',
    ),
    54 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'nb_NO',
    ),
    55 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'nl_NL',
    ),
    56 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'pl_PL',
    ),
    57 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'pt_PT',
    ),
    58 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'ro_RO',
    ),
    59 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'ru_RU',
    ),
    60 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'sv_SE',
    ),
    61 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'th_TH',
    ),
    62 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'tr_TR',
    ),
    63 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'zh_TW',
    ),
    64 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'zh_CN',
    ),
    65 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'pt_BR',
    ),
    66 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'ca_ES',
    ),
    67 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_UK',
    ),
    68 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'sr_RS',
    ),
    69 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'sk_SK',
    ),
    70 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'sq_AL',
    ),
    71 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'et_EE',
    ),
    72 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'es_LA',
    ),
    73 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'fi_FI',
    ),
    74 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'ar_SA',
    ),
    75 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'uk_UA',
    ),
    76 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'en_us',
    ),
    77 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'bg_BG',
    ),
    78 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'cs_CZ',
    ),
    79 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'da_DK',
    ),
    80 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'de_DE',
    ),
    81 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'el_EL',
    ),
    82 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'es_ES',
    ),
    83 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'fr_FR',
    ),
    84 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'he_IL',
    ),
    85 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'hu_HU',
    ),
    86 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'hr_HR',
    ),
    87 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'it_it',
    ),
    88 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'lt_LT',
    ),
    89 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'ja_JP',
    ),
    90 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'ko_KR',
    ),
    91 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'lv_LV',
    ),
    92 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'nb_NO',
    ),
    93 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'nl_NL',
    ),
    94 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'pl_PL',
    ),
    95 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'pt_PT',
    ),
    96 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'ro_RO',
    ),
    97 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'ru_RU',
    ),
    98 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'sv_SE',
    ),
    99 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'th_TH',
    ),
    100 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'tr_TR',
    ),
    101 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'zh_TW',
    ),
    102 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'zh_CN',
    ),
    103 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'pt_BR',
    ),
    104 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'ca_ES',
    ),
    105 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'en_UK',
    ),
    106 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'sr_RS',
    ),
    107 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'sk_SK',
    ),
    108 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'sq_AL',
    ),
    109 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'et_EE',
    ),
    110 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'es_LA',
    ),
    111 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'fi_FI',
    ),
    112 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'ar_SA',
    ),
    113 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/E1_candidates.php',
      'to_module' => 'E1_candidates',
      'language' => 'uk_UA',
    ),
    114 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'en_us',
    ),
    115 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'bg_BG',
    ),
    116 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'cs_CZ',
    ),
    117 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'da_DK',
    ),
    118 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'de_DE',
    ),
    119 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'el_EL',
    ),
    120 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'es_ES',
    ),
    121 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'fr_FR',
    ),
    122 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'he_IL',
    ),
    123 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'hu_HU',
    ),
    124 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'hr_HR',
    ),
    125 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'it_it',
    ),
    126 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'lt_LT',
    ),
    127 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'ja_JP',
    ),
    128 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'ko_KR',
    ),
    129 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'lv_LV',
    ),
    130 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'nb_NO',
    ),
    131 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'nl_NL',
    ),
    132 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'pl_PL',
    ),
    133 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'pt_PT',
    ),
    134 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'ro_RO',
    ),
    135 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'ru_RU',
    ),
    136 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'sv_SE',
    ),
    137 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'th_TH',
    ),
    138 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'tr_TR',
    ),
    139 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'zh_TW',
    ),
    140 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'zh_CN',
    ),
    141 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'pt_BR',
    ),
    142 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'ca_ES',
    ),
    143 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'en_UK',
    ),
    144 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'sr_RS',
    ),
    145 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'sk_SK',
    ),
    146 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'sq_AL',
    ),
    147 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'et_EE',
    ),
    148 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'es_LA',
    ),
    149 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'fi_FI',
    ),
    150 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
      'language' => 'ar_SA',
    ),
    151 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Tasks.php',
      'to_module' => 'Tasks',
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
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/e1_candidates_documents_E1_candidates.php',
      'to_module' => 'E1_candidates',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/e1_candidates_tasks_E1_candidates.php',
      'to_module' => 'E1_candidates',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/e1_candidates_documents_E1_candidates.php',
      'to_module' => 'E1_candidates',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/e1_candidates_tasks_E1_candidates.php',
      'to_module' => 'E1_candidates',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/e1_candidates_documents_E1_candidates.php',
      'to_module' => 'E1_candidates',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/e1_candidates_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/e1_candidates_tasks_E1_candidates.php',
      'to_module' => 'E1_candidates',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/e1_candidates_tasks_Tasks.php',
      'to_module' => 'Tasks',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
        'Documents' => 'e1_candidates_documents_name',
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
        'Tasks' => 'e1_candidates_tasks_name',
      ),
    ),
  ),
  'wireless_subpanels' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/e1_candidates_documents_E1_candidates.php',
      'to_module' => 'E1_candidates',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/e1_candidates_tasks_E1_candidates.php',
      'to_module' => 'E1_candidates',
    ),
  ),
  'image_dir' => '<basepath>/icons',
);