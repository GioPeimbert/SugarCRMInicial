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

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Veseluma pārbaude',
    'LBL_MODULE_NAME_SINGULAR' => 'Veseluma pārbaude',
    'LBL_MODULE_TITLE' => 'Veseluma pārbaude',
    'LBL_LOGFILE' => 'Logfails',
    'LBL_BUCKET' => 'Bloks',
    'LBL_FLAG' => 'Karogs',
    'LBL_LOGMETA' => 'Metadatu logs',
    'LBL_ERROR' => 'Kļūda',

    // Failure handling in SugarBPM upgraders
    'LBL_PA_UNSERIALIZE_DATA_FAILURE' => 'Sērializētos datus nevarēja atserializēt',
    'LBL_PA_UNSERIALIZE_OBJECT_FAILURE' => 'Sērializētos datus nevarēja atserializēt, jo tajos ir atsauces uz objektiem vai klasēm',

    'LBL_SCAN_101_LOG' => '%s ir studio vēsture',
    'LBL_SCAN_102_LOG' => '%s ir paplāšinājumi: %s',
    'LBL_SCAN_103_LOG' => '%s ir pielāgoti mainīgie',
    'LBL_SCAN_104_LOG' => '%s ir pielāgoti formu izkārtojumi',
    'LBL_SCAN_105_LOG' => '%s ir pielāgoti skatu izkārtojumi',

    'LBL_SCAN_201_LOG' => '%s nav bāzes moduļi',

    'LBL_SCAN_301_LOG' => '%s darbosies kā BWC moduļi',
    'LBL_SCAN_302_LOG' => 'Nezināmi failu skatījumi — %s nav MB modulis',
    'LBL_SCAN_303_LOG' => 'Aizpildītas veidlapas fails %s — %s nav MB modelis',
    'LBL_SCAN_304_LOG' => 'Unknown file %s - %s is not MB module',
    'LBL_SCAN_305_LOG' => 'Bad vardefs - key %s, name %s',
    'LBL_SCAN_306_LOG' => 'Bad vardefs - relate field %s has empty `module`',
    'LBL_SCAN_307_LOG' => 'Bad vardefs - link %s refers to invalid relationship',
    'LBL_SCAN_308_LOG' => 'Mainīgo definīciju HTML funkcija %s',
    'LBL_SCAN_309_LOG' => '%s bojāta md5',
    'LBL_SCAN_310_LOG' => 'Nezināms fails %s/%s',
    'LBL_SCAN_311_LOG' => 'Mainīgo definīciju HTML funkcija %s $module modulī %s laukam',
    'LBL_SCAN_312_LOG' => 'Bad vardefs - &#39;name&#39; field type is invalid &#39;%s&#39;, module - &#39;%s&#39;',
    'LBL_SCAN_313_LOG' => 'Atrasts dir %s paplašinājums — %s nav MB modulis',
    'LBL_SCAN_314_LOG' => "Bad vardefs - multienum field &#39;%s&#39; with options list &#39;%s&#39; keys contain incompatible characters - &#39;{%s}&#39;",

    'LBL_SCAN_401_LOG' => 'Atrasta pārdevēja failu iekļaušana failiem, kas nodoti pārdevējam:'. PHP_EOL .'%s',
    'LBL_SCAN_402_LOG' => 'Bojāts modulis %s — neatrodas beanList un filesystem',
    'LBL_SCAN_403_LOG' => 'Atrasta īpaša Sugar failu iekļaušana:' . PHP_EOL .'%s',
    'LBL_SCAN_520_LOG' => 'Logic hook after_ui_frame detected',
    'LBL_SCAN_521_LOG' => 'Logic hook after_ui_footer detected',
//    'LBL_SCAN_405_LOG' => 'Incompatible Integration - %s %s',
    'LBL_SCAN_406_LOG' => '%s has custom views',
    'LBL_SCAN_407_LOG' => '%s has custom views',
    'LBL_SCAN_408_LOG' => '%s tika atrastas pielāgotās izveides darbību komponentes. Šīs komponentes tiks kopētas un modificētas, lai paplašinātu izveides komponenti atjaunināšanas laikā',
    'LBL_SCAN_519_LOG' => 'Atrasts paplašinājums dir %s',
    'LBL_SCAN_518_LOG' => 'Found customCode %s in %s',
    'LBL_SCAN_410_LOG' => 'Maks. lauku skaits — %s atrasti vairāk nekā %s lauki (%s)',
    'LBL_SCAN_522_LOG' => 'Found &#39;get_subpanel_data&#39; with &#39;function:&#39; value in %s',
    'LBL_SCAN_412_LOG' => 'Nederīga apkšpaneļa saite %s zem %s',
    'LBL_SCAN_413_LOG' => 'Unknown widget class detected: %s for %s',
    'LBL_SCAN_414_LOG' => 'Nezināmos laukus apstrādā CRYS-36, tādēļ šeit vairs nav pārbaužu',
    'LBL_SCAN_415_LOG' => 'Bojāts hook (aizķeres) fails %s: %s',
    'LBL_SCAN_523_LOG' => 'By-ref parametrs hook (aizķeres) faila %s funkcijā %s',
    'LBL_SCAN_417_LOG' => 'Nesaderīgs modulis %s',
    'LBL_SCAN_418_LOG' => 'Found subpanel with link to non-existing module: %s',
    'LBL_SCAN_419_LOG' => 'Bad vardefs - key %s, name %s',
    'LBL_SCAN_420_LOG' => 'Bad vardefs - relate field %s has empty `module`',
    'LBL_SCAN_421_LOG' => 'Bad vardefs - link %s refers to invalid relationship',
    'LBL_SCAN_422_LOG' => 'Moduļa %s failā %s ir cita moduļa %s definīcija',
    'LBL_SCAN_525_LOG' => 'Mainīgo definīciju HTML funkcija %s',
    'LBL_SCAN_423_LOG' => 'Bad vardefs - %s refers to bad subfield %s',
    'LBL_SCAN_424_LOG' => 'Iekļautais HTML atrasts %s %s rindā',
    'LBL_SCAN_425_LOG' => 'Atrasts "echo" %s %s rindā',
    'LBL_SCAN_426_LOG' => 'Atrasts "print" %s %s rindā',
    'LBL_SCAN_427_LOG' => 'Atrasts "die/exit" %s %s rindā',
    'LBL_SCAN_428_LOG' => 'Atrasts "print_r" %s %s rindā',
    'LBL_SCAN_429_LOG' => 'Atrasts "var_dump" %s %s rindā',
    'LBL_SCAN_430_LOG' => 'Atrasta izvades buferizācija (%s) %s %s rindā',
    'LBL_SCAN_451_LOG' => 'AuthN kods ir dzēsts, tā vietā izmantojiet \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate. Faili, kas izmanto dzēsto kodu: ' . PHP_EOL . '%s',
    'LBL_SCAN_524_LOG' => 'Vardef HTML funkcija %s modulī %s laukam %s',
    'LBL_SCAN_432_LOG' => 'Bad vardefs - &#39;name&#39; field type is invalid &#39;%s&#39;, module - &#39;%s&#39;',
    'LBL_SCAN_526_LOG' => "Bad vardefs - multienum field &#39;%s&#39; with options list &#39;%s&#39; keys contain incompatible characters - &#39;{%s}&#39;",
    'LBL_SCAN_527_LOG' => "Tabulas nosaukums %s bean objektā neatbilst tabulas atribūtam %s/vardefs.php",
    'LBL_SCAN_528_LOG' => '%s moduļa laukam %s ir nepareiza display_default vērtība',
    'LBL_SCAN_529_LOG' => '%s: %s %s failā %s rindā',
    'LBL_SCAN_530_LOG' => 'Trūkst pielāgota faila: %s',
    'LBL_SCAN_531_LOG' => 'Novecojis datubāzes draiveris: %s',
    'LBL_SCAN_532_LOG' => 'A class in %s calls its stock parent&#39;s constructor as %s::%s()',
    'LBL_SCAN_533_LOG' => 'A class in %s calls its custom parent&#39;s constructor as %s::%s()',
    'LBL_SCAN_534_LOG' => 'Neatbalstits datu bāzes draiveris: %s',
    'LBL_SCAN_535_LOG' => 'Unsupported method call: %s() in %s on line %s',
    'LBL_SCAN_536_LOG' => 'Unsupported property access: $%s in %s on line %s',
    'LBL_SCAN_433_LOG' => 'Atrasti pielāgoti elastīgās meklēšanas faili %s',
    'LBL_SCAN_434_LOG' => 'Atrasts masīva funkciju lietojums $_SESSION laikā failos: %s',
    'LBL_SCAN_435_LOG' => 'Klase SugarSession tika izdzēsta no API, tās vietā izmantojiet Sugarcrm\Sugarcrm\Session\SessionStorage. Faili ar novecojušu kodu: ' . PHP_EOL . '%s',
    'LBL_SCAN_550_LOG' => 'Use of removed Sidecar app.date APIs in %s',
    'LBL_SCAN_551_LOG' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_560_LOG' => 'custom/modules/Quotes/quotes.js VAR saturēt pielāgojumus, kas nav savietojami ar jaunajiem piedāvājumiem.',
    'LBL_SCAN_561_LOG' => 'custom/modules/Quotes/EditView.js VAR saturēt pielāgojumus, kas nav savietojami ar jaunajiem piedāvājumiem.',
    'LBL_SCAN_562_LOG' => 'Use of removed Sidecar app.view.invokeParent method in %s',
    'LBL_SCAN_570_LOG' => 'E-pastu nederīgs statuss un tips: statuss=%s, tips=%s',
    'LBL_SCAN_571_LOG' => 'Novecojušam failam ir pielāgojumi: %s',
    'LBL_SCAN_572_LOG' => 'Pielāgotajam failam ir nosaukuma konflikts: %s',
    'LBL_SCAN_573_LOG' => 'Pielāgotajam palīdzības failam ir nosaukuma konflikts: %s',
    'LBL_SCAN_574_LOG' => 'E-pastu apakšpanelis atrodas pielāgotajā direktorijā: %s',
    'LBL_SCAN_575_LOG' => 'Kontaktu apakšpanelis e-pastiem ir jāmaina, lai varētu uzmantot kontaktu arhivēto e-pastu apakšpaneli: %s',
    'LBL_SCAN_576_LOG' => 'Noteikti apvalka pielāgojumi: `%s`. Galīgais apvalka rezultāts var neatbilst ieplānotajam, pārbaudiet apvalka pielāgojumus.',
    'LBL_SCAN_580_LOG' => 'Removed jQuery function(s) detected in: `%s`.',
    'LBL_SCAN_585_LOG' => 'Atklāts aizliegts paziņojums `%s`: %s',

    'LBL_SCAN_501_LOG' => 'Trūkstošs fails: %s',
    'LBL_SCAN_502_LOG' => 'md5 nesaderība ar %s, paredzēts %s',
    'LBL_SCAN_503_LOG' => 'Pielāgots modulis ar tādu pašu nosaukumu kā jaunajam Sugar7 modulim: %s',
    'LBL_SCAN_504_LOG' => 'Modulī %s trūkst lauka veida: %s',
    'LBL_SCAN_505_LOG' => '%s lauka veida maiņa %s: no %s uz %s',
    'LBL_SCAN_506_LOG' => '$this lietojums %s',
    'LBL_SCAN_507_LOG' => 'Bad vardefs - %s refers to bad subfield %s',
    'LBL_SCAN_508_LOG' => 'Iekļautais HTML atrasts %s %s rindā',
    'LBL_SCAN_509_LOG' => 'Atrasts "echo" %s %s rindā',
    'LBL_SCAN_510_LOG' => 'Atrasts "print" %s %s rindā',
    'LBL_SCAN_511_LOG' => 'Atrasts "die/exit" %s %s rindā',
    'LBL_SCAN_512_LOG' => 'Atrasts "print_r" %s %s rindā',
    'LBL_SCAN_513_LOG' => 'Atrasts "var_dump" %s %s rindā',
    'LBL_SCAN_514_LOG' => 'Atrasta izvades buferizācija (%s) %s %s rindā',
    'LBL_SCAN_515_LOG' => 'Skripta kļūda: %s',
    'LBL_SCAN_516_LOG' => 'Atsauces uz iepriekš izdzēstajiem failiem atrastas: %s',
    'LBL_SCAN_517_LOG' => 'Nesaderīga integrācija — %s %s',
    'LBL_SCAN_540_LOG' => 'Nesaderīgu integrācijas datu atiestatīšana — %s %s',
    'LBL_SCAN_541_LOG' => 'Nederīga SugarBPM serializēšana - %s nederīga serializēšana(s) %s kolonnā %s tabulā:  %s.',
    'LBL_SCAN_542_LOG' => 'Nederīgu SugarBPM lauku izmantošana - %s nederīgs lauks(i) izmantots %s.',
    'LBL_SCAN_545_LOG' => 'SugarBPM daļēji nobloķēja lauku grupu - lauks %4$s ir nobloķēts grupā %s procesa definīcijā %s modulim %s.',
    'LBL_SCAN_546_LOG' => 'Custom Knowledge Base TinyMCE config',
    'LBL_SCAN_547_LOG' => 'Izdzēstā`resetLoadFlag`paraksta izmantošana %s',
    'LBL_SCAN_548_LOG' => 'Novecojušās `initButtons` metodes izmantošana %s',
    'LBL_SCAN_549_LOG' => 'Izdzēstā `getField` paraksta izmantošana %s',
    'LBL_SCAN_552_LOG' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_LOG' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_LOG' => 'Sidecar controller %s extends from removed Sidecar controller',

    'LBL_SCAN_901_LOG' => 'Instance jau atjaunināta uz Sugar 7',
    'LBL_SCAN_903_LOG' => 'Neatbalstīta atjauninātāja versija. Uzinstalējiet atbilstošu SugarUpgradeWizardPrereq paku',
    'LBL_SCAN_904_LOG' => 'moduleList virknēs atrastas NULL vērtības. Fails: %s, Moduļi: %s',
    'LBL_SCAN_999_LOG' => 'Nezināma problēma, konsultējieties ar atbalstu',

    'LBL_SCAN_101_TITLE' => '%s ir studio vēsture',
    'LBL_SCAN_102_TITLE' => '%s ir paplāšinājumi: %s',
    'LBL_SCAN_103_TITLE' => '%s ir pielāgoti mainīgie',
    'LBL_SCAN_104_TITLE' => '%s ir pielāgoti formu izkārtojumi',
    'LBL_SCAN_105_TITLE' => '%s ir pielāgoti skatu izkārtojumi',

    'LBL_SCAN_201_TITLE' => '%s nav bāzes moduļi',

    'LBL_SCAN_301_TITLE' => '%s darbosies kā BWC moduļi',
    'LBL_SCAN_302_TITLE' => 'Nezināmi failu skatījumi — %s nav MB modulis',
    'LBL_SCAN_303_TITLE' => 'Aizpildītas veidlapas fails %s — %s nav MB modelis',
    'LBL_SCAN_304_TITLE' => 'Unknown file %s - %s is not MB module',
    'LBL_SCAN_305_TITLE' => 'Bad vardefs - key %s, name %s',
    'LBL_SCAN_306_TITLE' => 'Bad vardefs - relate field %s has empty `module`',
    'LBL_SCAN_307_TITLE' => 'Bad vardefs - link %s refers to invalid relationship',
    'LBL_SCAN_308_TITLE' => 'Mainīgo definīciju HTML funkcija %s',
    'LBL_SCAN_309_TITLE' => '%s bojāta md5',
    'LBL_SCAN_310_TITLE' => 'Nezināms fails %s/%s',
    'LBL_SCAN_311_TITLE' => 'Mainīgo definīciju HTML funkcija %s $module modulī %s laukam',
    'LBL_SCAN_312_TITLE' => 'Bad vardefs - &#39;name&#39; field type is invalid &#39;%s&#39;, module - &#39;%s&#39;',
    'LBL_SCAN_313_TITLE' => 'Atrasts dir %s paplašinājums — %s nav MB modulis',

    'LBL_SCAN_401_TITLE' => 'Atrasta pārdevēja failu iekļaušana failiem, kas nodoti pārdevējam:'. PHP_EOL .'%s',
    'LBL_SCAN_402_TITLE' => 'Bojāts modulis %s — neatrodas beanList un filesystem',
    'LBL_SCAN_403_TITLE' => 'Atrasta īpaša Sugar failu iekļaušana:' . PHP_EOL .'%s',
    'LBL_SCAN_520_TITLE' => 'Logic hook after_ui_frame detected',
    'LBL_SCAN_521_TITLE' => 'Logic hook after_ui_footer detected',
//    'LBL_SCAN_405_TITLE' => 'Incompatible Integration - %s %s',
    'LBL_SCAN_406_TITLE' => '%s has custom views',
    'LBL_SCAN_407_TITLE' => '%s has custom views',
    'LBL_SCAN_408_TITLE' => 'Tika atrastas pielāgotās izveides darbību komponentes, kas vairs netiek atbalstītas.',
    'LBL_SCAN_519_TITLE' => 'Atrasts paplašinājums dir %s',
    'LBL_SCAN_518_TITLE' => 'Found customCode %s in %s',
    'LBL_SCAN_410_TITLE' => 'Maks. lauku skaits — %s atrasti vairāk nekā %s lauki (%s)',
    'LBL_SCAN_522_TITLE' => 'Found &#39;get_subpanel_data&#39; with &#39;function:&#39; value in %s',
    'LBL_SCAN_412_TITLE' => 'Nederīga apkšpaneļa saite %s zem %s',
    'LBL_SCAN_413_TITLE' => 'Unknown widget class detected: %s for %s',
    'LBL_SCAN_414_TITLE' => 'Nezināmos laukus apstrādā CRYS-36, tādēļ šeit vairs nav pārbaužu',
    'LBL_SCAN_415_TITLE' => 'Bojāts hook (aizķeres) fails %s: %s',
    'LBL_SCAN_523_TITLE' => 'By-ref parametrs hook (aizķeres) faila %s funkcijā %s',
    'LBL_SCAN_417_TITLE' => 'Nesaderīgs modulis %s',
    'LBL_SCAN_418_TITLE' => 'Found subpanel with link to non-existing module: %s',
    'LBL_SCAN_419_TITLE' => 'Bad vardefs - key %s, name %s',
    'LBL_SCAN_420_TITLE' => 'Bad vardefs - relate field %s has empty `module`',
    'LBL_SCAN_421_TITLE' => 'Bad vardefs - link %s refers to invalid relationship',
    'LBL_SCAN_422_TITLE' => 'Modulī %s ir cita moduļa definīcija',
    'LBL_SCAN_525_TITLE' => 'Mainīgo definīciju HTML funkcija %s',
    'LBL_SCAN_423_TITLE' => 'Bad vardefs - %s refers to bad subfield %s',
    'LBL_SCAN_424_TITLE' => 'Iekļautais HTML atrasts %s %s rindā',
    'LBL_SCAN_425_TITLE' => 'Atrasts "echo" %s %s rindā',
    'LBL_SCAN_426_TITLE' => 'Atrasts "print" %s %s rindā',
    'LBL_SCAN_427_TITLE' => 'Atrasts "die/exit" %s %s rindā',
    'LBL_SCAN_428_TITLE' => 'Atrasts "print_r" %s %s rindā',
    'LBL_SCAN_429_TITLE' => 'Atrasts "var_dump" %s %s rindā',
    'LBL_SCAN_430_TITLE' => 'Atrasta izvades buferizācija (%s) %s %s rindā',
    'LBL_SCAN_451_TITLE' => 'AuthN kods ir dzēsts, tā vietā izmantojiet \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate. Faili, kas izmanto dzēsto kodu: ' . PHP_EOL . '%s',
    'LBL_SCAN_524_TITLE' => 'Vardef HTML funkcija %s modulī %s laukam %s',
    'LBL_SCAN_432_TITLE' => 'Bad vardefs - &#39;name&#39; field type is invalid &#39;%s&#39;, module - &#39;%s&#39;',
    'LBL_SCAN_433_TITLE' => 'Atrasti pielāgoti elastīgās meklēšanas faili %s',
    'LBL_SCAN_434_TITLE' => 'Atrasts masīva funkciju lietojums $_SESSION laikā failos: %s',
    'LBL_SCAN_435_TITLE' => 'Atrasta izdzēstās SugarSession klases izmantošana',
    'LBL_SCAN_550_TITLE' => 'Use of removed Sidecar app.date APIs in %s',
    'LBL_SCAN_551_TITLE' => 'Use of removed Sidecar Bean APIs in %s',

    'LBL_SCAN_501_TITLE' => 'Trūkstošs fails: %s',
    'LBL_SCAN_502_TITLE' => 'md5 nesaderība ar %s, paredzēts %s',
    'LBL_SCAN_503_TITLE' => 'Pielāgots modulis ar tādu pašu nosaukumu kā jaunajam Sugar7 modulim: %s',
    'LBL_SCAN_504_TITLE' => 'Modulī %s trūkst lauka veida: %s',
    'LBL_SCAN_505_TITLE' => '%s lauka veida maiņa %s: no %s uz %s',
    'LBL_SCAN_506_TITLE' => '$this lietojums %s',
    'LBL_SCAN_507_TITLE' => 'Bad vardefs - %s refers to bad subfield %s',
    'LBL_SCAN_508_TITLE' => 'Iekļautais HTML atrasts %s %s rindā',
    'LBL_SCAN_509_TITLE' => 'Atrasts "echo" %s %s rindā',
    'LBL_SCAN_510_TITLE' => 'Atrasts "print" %s %s rindā',
    'LBL_SCAN_511_TITLE' => 'Atrasts "die/exit" %s %s rindā',
    'LBL_SCAN_512_TITLE' => 'Atrasts "print_r" %s %s rindā',
    'LBL_SCAN_513_TITLE' => 'Atrasts "var_dump" %s %s rindā',
    'LBL_SCAN_514_TITLE' => 'Atrasta izvades buferizācija (%s) %s %s rindā',
    'LBL_SCAN_515_TITLE' => 'Skripta kļūda: %s',
    'LBL_SCAN_517_TITLE' => 'Nesaderīga integrācija — %s %s',
    'LBL_SCAN_526_TITLE' => "Bad vardefs - multienum field &#39;%s&#39; with options list &#39;%s&#39; keys contain incompatible characters - &#39;{%s}&#39;",
    'LBL_SCAN_528_TITLE' => '%s moduļa laukam %s ir nepareiza display_default vērtība',
    'LBL_SCAN_529_TITLE' => '%s: %s %s failā %s rindā',
    'LBL_SCAN_530_TITLE' => 'Trūkst pielāgota faila: %s',
    'LBL_SCAN_531_TITLE' => 'Novecojis datubāzes draiveris: %s',
    'LBL_SCAN_532_TITLE' => 'Stock parent PHP4 constructor call in %s',
    'LBL_SCAN_533_TITLE' => 'Custom parent PHP4 constructor call in %s',
    'LBL_SCAN_534_TITLE' => 'Neatbalstits datu bāzes draiveris: %s',
    'LBL_SCAN_535_TITLE' => 'Unsupported method call: %s()',
    'LBL_SCAN_536_TITLE' => 'Unsupported property access: $%s',
    'LBL_SCAN_540_TITLE' => 'Nesaderīgu integrācijas datu atiestatīšana — %s %s',
    'LBL_SCAN_541_TITLE' => 'Nederīga SugarBPM serializēšana - %s nederīga serializēšana(s) %s kolonnā %s tabulā: %s',
    'LBL_SCAN_542_TITLE' => 'Nederīgu SugarBPM lauku izmantošana - %s nederīgs lauks(i) izmantots %s.',
    'LBL_SCAN_545_TITLE' => 'SugarBPM daļēji nobloķēja lauku grupu - modulis %3$s: grupa %s ir daļēji nobloķēta procesa definīcijā %s.',
    'LBL_SCAN_546_TITLE' => 'Custom Knowledge Base TinyMCE config',
    'LBL_SCAN_547_TITLE' => 'Izdzēstā`resetLoadFlag`paraksta izmantošana %s',
    'LBL_SCAN_548_TITLE' => 'Novecojušās `initButtons` metodes izmantošana %s',
    'LBL_SCAN_549_TITLE' => 'Izdzēstā `getField` paraksta izmantošana %s',
    'LBL_SCAN_552_TITLE' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_TITLE' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_TITLE' => 'Sidecar controller %s extends from removed Sidecar controller',
    'LBL_SCAN_570_TITLE' => 'E-pastos atrastas negaidītas vērtības',
    'LBL_SCAN_571_TITLE' => 'Pielāgotais fails satur kodu, kas ir novecojis',
    'LBL_SCAN_572_TITLE' => 'Pastāv nosaukuma konflikts ar pielāgoto failu',
    'LBL_SCAN_573_TITLE' => 'Pastāv nosaukuma konflikts ar pielāgoto palīdzības failu',
    'LBL_SCAN_574_TITLE' => 'E-pastu apakšpanelim ir pielāgojumi',
    'LBL_SCAN_575_TITLE' => 'Kontaktu apakšpanelim e-pastos ir pielāgojumi',
    'LBL_SCAN_576_TITLE' => 'Noteikti apvalka pielāgojumi',
    'LBL_SCAN_580_TITLE' => 'Removed jQuery function(s) detected',
    'LBL_SCAN_585_TITLE' => 'Atklāti aizliegti paziņojumi',

    'LBL_SCAN_901_TITLE' => 'Instance jau atjaunināta uz Sugar 7',
    'LBL_SCAN_903_TITLE' => 'Neatbalstīta atjauninātāja versija',
    'LBL_SCAN_904_TITLE' => 'moduleList virknēs atrastas NULL vērtības',
    'LBL_SCAN_999_TITLE' => 'Nezināma problēma, konsultējieties ar atbalstu',

    'LBL_SCAN_101_DESCR' => 'Jūsu instancē ir identificēti Studio pielāgojumi. Mēs nesaskatām potenciālas problēmas šajos pielāgojumos un jūsu pielāgojumi ir atjaunināmi uz Sugar7.',
    'LBL_SCAN_102_DESCR' => 'Jūsu instancē ir identificēti Studio pielāgojumi. Mēs nesaskatām potenciālas problēmas šajos pielāgojumos un jūsu pielāgojumi ir atjaunināmi uz Sugar7.',
    'LBL_SCAN_103_DESCR' => 'Jūsu instancē ir identificēti Studio pielāgojumi. Mēs nesaskatām potenciālas problēmas šajos pielāgojumos un jūsu pielāgojumi ir atjaunināmi uz Sugar7.',
    'LBL_SCAN_104_DESCR' => 'Jūsu instancē ir identificēti Studio pielāgojumi. Mēs nesaskatām potenciālas problēmas šajos pielāgojumos un jūsu pielāgojumi ir atjaunināmi uz Sugar7.',
    'LBL_SCAN_105_DESCR' => 'Jūsu instancē ir identificēti Studio pielāgojumi. Mēs nesaskatām potenciālas problēmas šajos pielāgojumos un jūsu pielāgojumi ir atjaunināmi uz Sugar7.',

    'LBL_SCAN_201_DESCR' => 'Jūsu instancē ir identificēti Studio pielāgojumi. Mēs nesaskatām potenciālas problēmas šajos pielāgojumos un jūsu pielāgojumi ir atjaunināmi uz Sugar7.',

    'LBL_SCAN_301_DESCR' => 'Daži pielāgojumi tika atrasti un netika atjaunināti uz Sugar7. Modulis (%s) būs pieejams Sugar7, bet darbosies iepriekšējās versijas savietojamības režīmā.',
    'LBL_SCAN_302_DESCR' => 'Nezināmu failu skaiti tika atrasti un netika atjaunināti uz Sugar7. Modulis (%s) būs pieejams Sugar7, bet darbosies iepriekšējās versijas savietojamības režīmā.',
    'LBL_SCAN_303_DESCR' => 'Aizpildīti formu faili tika atrasti un netika atjaunināti uz Sugar7. Modulis (%s) būs pieejams Sugar7, bet darbosies iepriekšējās versijas savietojamības režīmā.',
    'LBL_SCAN_304_DESCR' => 'Nezināmi faili (%s)  tika atrasti un netika atjaunināti uz Sugar7. Modulis (%s) būs pieejams Sugar7, bet darbosies iepriekšējās versijas savietojamības režīmā.',
    'LBL_SCAN_305_DESCR' => 'Nederīgi vardefs(%s: %s)  tika atrasti un netika atjaunināti uz Sugar7. Pielāgojumi būs pieejams Sugar7, bet darbosies iepriekšējās versijas savietojamības režīmā.',
    'LBL_SCAN_306_DESCR' => 'Nederīgi vardefs  tika atrasti un netika atjaunināti uz Sugar7. Pielāgojumi būs pieejams Sugar7, bet darbosies iepriekšējās versijas savietojamības režīmā.',
    'LBL_SCAN_307_DESCR' => 'Nederīgi vardefs tika atrasti un netika atjaunināti uz Sugar7. Pielāgojumi būs pieejams Sugar7, bet darbosies iepriekšējās versijas savietojamības režīmā.',
    'LBL_SCAN_308_DESCR' => 'Daži pielāgojumi tika atrasti un netika atjaunināti uz Sugar7. Modulis (%s) būs pieejams Sugar7, bet darbosies iepriekšējās versijas savietojamības režīmā.',
    'LBL_SCAN_309_DESCR' => 'md5 hash %s neatbilst sākotnējam failam.  Iespējams fails ir mainīts un netiks atjaunināts uz Sugar7',
    'LBL_SCAN_310_DESCR' => 'Nezināmi skatu faili  (%s)  tika atrasti un netika atjaunināti uz Sugar7. Modulis (%s) būs pieejams Sugar7, bet darbosies iepriekšējās versijas savietojamības režīmā..',
    'LBL_SCAN_311_DESCR' => 'Daži pielāgojumi tika atrasti un netika atjaunināti uz Sugar7. Modulis (%s) būs pieejams Sugar7, bet darbosies iepriekšējās versijas savietojamības režīmā.',
    'LBL_SCAN_312_DESCR' => 'Nederīgi vardefs tika atrasti un netika atjaunināti uz Sugar7. Nederīgs vardefs: &#39;name&#39; lauka tips nav derīgs &#39;%s&#39; modulim &#39;%s&#39;.  Pielāgojumi būs pieejams Sugar7, bet darbosies iepriekšējās versijas savietojamības režīmā.',
    'LBL_SCAN_313_DESCR' => 'Ir atrasts paplašinājumu katalogs — %s nav Module Builder modulis. Modulis būs pieejams arī turpmāk, bet darbosies tikai iepriekšējās versijas savietojamības režīmā.',

    'LBL_SCAN_401_DESCR' => 'Customized file includes a file that has been moved to the vendor directory.  We have attempted to take the corrective action and no further action is needed.',
    'LBL_SCAN_402_DESCR' => 'Bojāts modulis %s — neatrodas beanList un filesystem',
    'LBL_SCAN_403_DESCR' => 'Sugar 7 daži no Sugar failiem ir mainījuši savu atrašanās vietu. Mums ir jāizlabo to ietveršanas ceļi.',
    'LBL_SCAN_520_DESCR' => 'Šis logic hook vairs netiek atbalstīts Sugar 7',
    'LBL_SCAN_521_DESCR' => 'Šis logic hook vairs netiek atbalstīts Sugar 7',
//    'LBL_SCAN_405_DESCR' => 'Package detected which has been blacklisted as not supported in Sugar 7',
    'LBL_SCAN_406_DESCR' => 'Stock Sugar modulī ir neatbalstīti klientu skati custom/modules/%s/views. Atjaunināšanas laikā šie pielāgoto skatu failu tiks pārvietoti uz atspējoto direktoriju',
    'LBL_SCAN_407_DESCR' => 'Stock Sugar module has custom views in modules/%s/views',
    'LBL_SCAN_408_DESCR' => '%s tika atrastas pielāgotās izveides darbību komponentes. Šīs komponentes tiks kopētas un modificētas, lai paplašinātu izveides komponenti atjaunināšanas laikā',
    'LBL_SCAN_519_DESCR' => 'Standarta Sugar modulī ir viens no paplašinājumiem, kuru atjaunināšanu mēs neatbalstām, piemēram, pielāgotā pārsūtīšana, piekļuves vadība, Javascript, utt.',
    'LBL_SCAN_518_DESCR' => 'Mainīgo definīcijās ir lietotāja customCode definīcijas, ko mēs nevaram konvertēt',
    'LBL_SCAN_410_DESCR' => 'Skatā ir pārāk daudz lauku',
    'LBL_SCAN_522_DESCR' => 'Apakšpaneļa datus iegūst funkcija, un mēs pagaidām neatbalstām tās atjaunināšanu.',
    'LBL_SCAN_412_DESCR' => 'Apakšpanelī ir atsauce uz neeksistējošu vai nepareizi definētu saiti',
    'LBL_SCAN_413_DESCR' => 'Laukā ir atsauce uz logrīka klases nosaukumu, kam nav atbilstoša logrīka klases faila',
    'LBL_SCAN_414_DESCR' => 'Nezināmos laukus apstrādā CRYS-36, tādēļ šeit vairs nav pārbaužu',
    'LBL_SCAN_415_DESCR' => 'Logic hook norāda uz neesošu failu',
    'LBL_SCAN_523_DESCR' => 'Vecais logic hook fails izmanto parametru apstiprināšanu ar atsaucēm, kā rezultātā var tikt attēloti kļūdu paziņojumi (un līdz ar to sabojāt REST)',
    'LBL_SCAN_417_DESCR' => 'Atklātas moduļu barotnes un iFrames, kas, iespējams, vairs neeksistē',
    'LBL_SCAN_418_DESCR' => 'Apakšpanelis norāda uz neesošu moduli',
    'LBL_SCAN_419_DESCR' => 'Mainīgo definīcijas atslēga neatbilst mainīgo definīcijas nosaukumam',
    'LBL_SCAN_420_DESCR' => 'Mainīgo definīcijā ir saistītie lauki ar atsauci uz relāciju, ko nevar pienācīgi ielādēt',
    'LBL_SCAN_421_DESCR' => 'Mainīgo definīcijā ir saites lauks, ko nevar pareizi ielādēt',
    'LBL_SCAN_422_DESCR' => 'Moduļa %s failā %s ir cita moduļa %s definīcija',
    'LBL_SCAN_525_DESCR' => 'Mainīgo definīcija definē enum, kas ir Sugar7 neatbalstītas HTML funkcijas rezultāts',
    'LBL_SCAN_423_DESCR' => 'Mainīgo definīcija ir definēta kā apvienoti lauki ar apakšlaukiem, un viens no šiem apakšlaukiem patiesībā neeksistē',
    'LBL_SCAN_424_DESCR' => 'Failā ir iekļauts HTML',
    'LBL_SCAN_425_DESCR' => 'Kods satur šādu izvades funkciju',
    'LBL_SCAN_426_DESCR' => 'Kods satur šādu izvades funkciju',
    'LBL_SCAN_427_DESCR' => 'Kods satur šādu izvades funkciju',
    'LBL_SCAN_428_DESCR' => 'Kods satur šādu izvades funkciju. Piezīme, funkcija print_r(..., true) ir atļauta.',
    'LBL_SCAN_429_DESCR' => 'Kods satur šādu izvades funkciju',
    'LBL_SCAN_430_DESCR' => 'Kods satur šādu izvades funkciju',
    'LBL_SCAN_451_DESCR' => 'AuthN kods ir dzēsts, tā vietā izmantojiet \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate',
    'LBL_SCAN_524_DESCR' => 'Lauks ir definēts kā funkciju veidojošs HTML un to nevar automātiski konvertēt (mēs zinām, kā konvertēt dažus standarta laukus, piemēram, e-pastu un valūtu)',
    'LBL_SCAN_432_DESCR' => 'Field &#39;name&#39; has a type other than name, fullname, varchar or id',
    'LBL_SCAN_433_DESCR' => 'Atrasti pielāgoti elastīgās meklēšanas faili %s',
    'LBL_SCAN_434_DESCR' => 'Atrasts masīva funkciju lietojums $_SESSION laikā failos: %s',
    'LBL_SCAN_550_DESCR' => 'Use of removed Sidecar app.date APIs in %s, this code will be migrated by upgrade scripts',
    'LBL_SCAN_551_DESCR' => 'Use of removed Sidecar Bean APIs in %s, this code will be migrated by upgrade scripts',

    'LBL_SCAN_501_DESCR' => 'Viens no bāzes failiem instancē nav atrodams',
    'LBL_SCAN_502_DESCR' => 'Viens no bāzes failiem ir modificēts šajā instalācijā',
    'LBL_SCAN_503_DESCR' => 'Pielāgotajam modulim ir tāds pats nosaukums kā vienam no jaunajiem Sugar moduļiem',
    'LBL_SCAN_504_DESCR' => 'Mainīgo definīcijas lauka definīcijā ir izlaists veids',
    'LBL_SCAN_505_DESCR' => 'Ne-blob lauka veids ir mainīts uz blob lauka veidu. Tas nav atļauts, jo blob veidus nevar indeksēt, un, iespējams, ir filtri, kas balstās uz šī lauka indeksēšanu.',
    'LBL_SCAN_506_DESCR' => '$this tiek izmantots metadatu failā. Tā kā Sugar7 ielādē metadatu failu citā kontekstā, tas nedarbotos.',
    'LBL_SCAN_507_DESCR' => 'Mainīgo definīcija ir definēta kā apvienoti lauki ar apakšlaukiem, un viens no šiem apakšlaukiem patiesībā neeksistē',
    'LBL_SCAN_508_DESCR' => 'Failā ir iekļauts HTML',
    'LBL_SCAN_509_DESCR' => 'Kods satur šādu izvades funkciju',
    'LBL_SCAN_510_DESCR' => 'Kods satur šādu izvades funkciju',
    'LBL_SCAN_511_DESCR' => 'Kods satur šādu izvades funkciju',
    'LBL_SCAN_512_DESCR' => 'Kods satur šādu izvades funkciju. Piezīme, funkcija print_r(..., true) ir atļauta.',
    'LBL_SCAN_513_DESCR' => 'Kods satur šādu izvades funkciju',
    'LBL_SCAN_514_DESCR' => 'Kods satur šādu izvades funkciju',
    'LBL_SCAN_515_DESCR' => 'Pārbaudes skripta darbība neizdevās. Tas nozīmē, ka instaScannerMeta.phpnce, iespējams, ir bojāts PHP kods, ko skripts mēģināja ielādēt.',
    'LBL_SCAN_517_DESCR' => 'Ir atklāta pakotne, kas Sugar 7 ir atzīmēta kā neatbalstīta',
    'LBL_SCAN_526_DESCR' => "Šajā sarakstā ir vienuma nosaukuma vērtības, kas neļauj veikt atjaunināšanu.",
    'LBL_SCAN_528_DESCR' => 'Datuma/datuma un laika/laika lauks ar nepareizu display_default vērtību, piemēram, -none-',
    'LBL_SCAN_529_DESCR' => 'PHP kļūdu var izraisīt tulks, kad atklāta nepareiza php sintakse vai izpildlaika kodu problēmas.',
    'LBL_SCAN_530_DESCR' => 'Instancē nav viena no pielāgotajiem failiem, bet to izmanto pielāgots kods.',
    'LBL_SCAN_531_DESCR' => 'Datubāzes %s draiveris ir novecojis. Tā vietā var izmantot %s.',
    'LBL_SCAN_532_DESCR' => 'A class declared in %s calls its stock parent&#39;s constructor as %s::%s()',
    'LBL_SCAN_533_DESCR' => 'A class declared in %s calls its custom parent&#39;s constructor as %s::%s()',
    'LBL_SCAN_534_DESCR' => 'Datubāzes %s draiveris vairs netiek atbalstīts. Tā vietā var izmantot %s.',
    'LBL_SCAN_535_DESCR' => 'A call to unsupported method %s() found in %s on line %d',
    'LBL_SCAN_536_DESCR' => 'Access to an unsupported property $%s found in %s on line %d',
    'LBL_SCAN_540_DESCR' => 'Ir atklāta pakotne, ko mērķa Sugar versija neatbalsta. Pirms atjaunināšanas šīs pakotnes ir jāatinstalē UN jāizdzēš. Jāņem vērā, ka šo pakotņu atinstalēšanas rezultātā tiks dzēstas pakotnes veidotās tabulas un dati, kā arī pakotnes moduļu lietojums.',
    'LBL_SCAN_541_DESCR' => 'Jūsu Procesu pārvaldības tabulās tika atklāti dati, kurus nevar serializēt vai konvertēt',
    'LBL_SCAN_542_DESCR' => 'Invalid fields have been found in your Process Management Business Rules and/or Actions. These fields must be removed from Business Rules and/or Actions in order to upgrade.',
    'LBL_SCAN_545_DESCR' => 'Grupas lauks ir daļēji nobloķēts procesa definīcijā. Šie lauki ir jāatbloķē procesa definīcijā, lai varētu turpināt atjaunināšanu.',
    'LBL_SCAN_546_DESCR' => 'Cannot migrate custom TinyMCE config in Knowledge Base module. '
        . 'The "tinyConfig" parameter in %s file will be emptied. '
        . 'If you have any TinyMCE customizations there you should save them before upgrade '
        . 'and add after upgrade manually.',
    'LBL_SCAN_547_DESCR' => 'Izdzēstā`resetLoadFlag`paraksta izmantošana %s',
    'LBL_SCAN_548_DESCR' => 'Novecojušās `initButtons` metodes izmantošana %s',
    'LBL_SCAN_549_DESCR' => 'Izdzēstā `getField` paraksta izmantošana %s',
    'LBL_SCAN_552_DESCR' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_DESCR' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_DESCR' => 'Sidecar controller %s extends from removed Sidecar controller',

    'LBL_SCAN_901_DESCR' => 'Instance jau atjaunināta uz Sugar 7',
    'LBL_SCAN_903_DESCR' => 'Neatbalstīta atjauninātāja versija. Uzinstalējiet atbilstošu SugarUpgradeWizardPrereq paku',
    'LBL_SCAN_904_DESCR' => 'Fails: %s, Moduļi: %s',
    'LBL_SCAN_999_DESCR' => 'Nezināma problēma, konsultējieties ar atbalstu',

    'LBL_SCAN_577_TITLE' => 'Nesaderīga datubāzes salīdzināšana',
    'LBL_SCAN_577_LOG' => "Salīdzināšana '%s' nav saderīga ar '%s' kodējumu",
    'LBL_SCAN_577_DESCR' => "Izvēlieties citu salīdzināšanu savos lokalizācijas iestatījumos vai dzēsiet konfigurāciju 'dbconfigoption.collation', lai izmantotu noklusējuma salīdzināšanu.",

    'LBL_SCAN_578_TITLE' => 'Nevar izdzēst pagaidu datubāzes tabulu: %s',
    'LBL_SCAN_578_LOG' => 'Nevar izdzēst pagaidu datubāzes tabulu: %s',
    'LBL_SCAN_578_DESCR' => 'Pagaidu tabulu, kas izveidota rakstzīmju kopas pārveides drošai pārbaudei, neizdevās izdzēst atjaunināšanas laikā, tāpēc tā būs jāizdzēš manuāli',

    'LBL_SCAN_579_TITLE' => 'Nevar veikt rakstzīmju kopas/salīdzināšanas konversiju: (%s) tabulā: %s',
    'LBL_SCAN_579_LOG' => 'Nevar veikt rakstzīmju kopas/salīdzināšanas konversiju: (%s) tabulā: %s',
);
