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
use Sugarcrm\Sugarcrm\Entitlements\SubscriptionManager;

$readableProductNames =
    getReadableProductNames(SubscriptionManager::instance()->getUserSubscriptions($GLOBALS['current_user']));
$readableProductNames = urlencode(implode(',', $readableProductNames));

$url = 'https://www.sugarcrm.com/crm/product_doc.php?edition=' . $GLOBALS['sugar_flavor'] . '&version=' .
    $GLOBALS['sugar_version'] . '&lang=' . $GLOBALS['current_language'] . '&module=Connectors&route=Google' .
    $readableProductNames;

$connector_strings = array(
    'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">' .
        'Зареєструйте свій екземпляр Sugar у Google, щоб увімкнути конфігурацію облікових записів Google для використання в Sugar. ' .
        'Див. <a href="https://www.sugarcrm.com/crm/product_doc.php?edition={$flavor}&version={$version}&lang={$lang}&module=Connectors&route=Google" target=\'_blank\'>' .
        '\' target=\'_blank\'>документацію про з’єднувачі</a>, щоб дізнатися більше.</td></tr></table>',
    'oauth2_client_id' => 'Ідентифікатор клієнта',
    'oauth2_client_secret' => 'Секретний ключ клієнта',
);
