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
/*********************************************************************************

 * Description:  base form for account
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

class AccountFormBase{


function checkForDuplicates($prefix){
	require_once('include/formbase.php');

	$focus = BeanFactory::newBean('Accounts');
	$query = '';
	$baseQuery = 'select id, name, website, billing_address_city  from accounts where deleted!=1 and ';
	if(!empty($_POST[$prefix.'name'])){
            $query = $baseQuery ."  name like " . $focus->db->quoted($_POST[$prefix.'name']."%");
	}

	if(!empty($_POST[$prefix.'billing_address_city']) || !empty($_POST[$prefix.'shipping_address_city'])){

		$temp_query = '';
		if(!empty($_POST[$prefix.'billing_address_city'])){
			if(empty($temp_query)){
                    $temp_query =  "  billing_address_city like ".
                    $focus->db->quoted($_POST[$prefix.'billing_address_city']."%");
			}else {
                    $temp_query .= "or billing_address_city like ".
                    $focus->db->quoted($_POST[$prefix.'billing_address_city']."%");
			}
		}
		if(!empty($_POST[$prefix.'shipping_address_city'])){
			if(empty($temp_query)){
                    $temp_query = "  shipping_address_city like ".
                    $focus->db->quoted($_POST[$prefix.'shipping_address_city']."%");
			}else {
                    $temp_query .= "or shipping_address_city like ".
                    $focus->db->quoted($_POST[$prefix.'shipping_address_city']."%");
			}
		}
		if(empty($query)){
			$query .= $baseQuery;
		}else{
			$query .= ' AND ';
		}
		$query .=   ' ('. $temp_query . ' ) ';

	}

	if(!empty($query)){
		$rows = array();
		global $db;
		$result = $db->query($query);
		$i=-1;
		while(($row=$db->fetchByAssoc($result)) != null) {
			$i++;
			$rows[$i] = $row;
		}
		if ($i==-1) return null;

		return $rows;
	}
	return null;
}


function buildTableForm($rows, $mod='Accounts'){
	if(!ACLController::checkAccess('Accounts', 'edit', true)){
		return '';
	}
	global $action;
	if(!empty($mod)){
	global $current_language;
	$mod_strings = return_module_language($current_language, $mod);
	}else global $mod_strings;
	global $app_strings;
	$cols = sizeof($rows[0]) * 2 + 1;
	if ($action != 'ShowDuplicates')
	{
		$form = "<form action='index.php' method='post' id='dupAccounts'  name='dupAccounts'><input type='hidden' name='selectedAccount' value=''>";
		$form .= '<table width="100%"><tr><td>'.$mod_strings['MSG_DUPLICATE']. '</td></tr><tr><td height="20"></td></tr></table>';
		unset($_POST['selectedAccount']);
	}
	else
	{
		$form = '<table width="100%"><tr><td>'.$mod_strings['MSG_SHOW_DUPLICATES']. '</td></tr><tr><td height="20"></td></tr></table>';
	}

    if(isset($_POST['return_action']) && $_POST['return_action'] == 'SubPanelViewer') {
        $_POST['return_action'] = 'DetailView';
    }

    if(isset($_POST['return_action']) && $_POST['return_action'] == 'DetailView' && empty($_REQUEST['return_id'])) {
        unset($_POST['return_action']);
    }

	$form .= "<table width='100%' cellpadding='0' cellspacing='0' class='list view' border='0'><tr class='pagination'><td colspan='$cols'><table width='100%' cellspacing='0' cellpadding='0' border='0'><tr><td>";
	// handle buttons
	if ($action == 'ShowDuplicates') {
		$return_action = 'ListView'; // cn: bug 6658 - hardcoded return action break popup -> create -> duplicate -> cancel
		$return_action = (isset($_REQUEST['return_action']) && !empty($_REQUEST['return_action'])) ? $_REQUEST['return_action'] : $return_action;
		$form .= "<input type='hidden' name='selectedAccount' id='selectedAccount' value=''><input title='${app_strings['LBL_SAVE_BUTTON_TITLE']}' accessKey='${app_strings['LBL_SAVE_BUTTON_KEY']}' class='button' onclick=\"this.form.action.value='Save';\" type='submit' name='button' value='  ${app_strings['LBL_SAVE_BUTTON_LABEL']}  '>\n";

        if (!empty($_REQUEST['return_module']) && !empty($_REQUEST['return_action']) && !empty($_REQUEST['return_id']))
            $form .= "<input title='${app_strings['LBL_CANCEL_BUTTON_TITLE']}' accessKey='${app_strings['LBL_CANCEL_BUTTON_KEY']}' class='button' onclick=\"this.form.module.value='".$_REQUEST['return_module']."';this.form.action.value='".$_REQUEST['return_action']."';this.form.record.value='".$_REQUEST['return_id']."'\" type='submit' name='button' value='  ${app_strings['LBL_CANCEL_BUTTON_LABEL']}  '>";
        else if (!empty($_POST['return_module']) && !empty($_POST['return_action']))
            $form .= "<input title='${app_strings['LBL_CANCEL_BUTTON_TITLE']}' accessKey='${app_strings['LBL_CANCEL_BUTTON_KEY']}' class='button' onclick=\"this.form.module.value='".$_POST['return_module']."';this.form.action.value='". $_POST['return_action']."';\" type='submit' name='button' value='  ${app_strings['LBL_CANCEL_BUTTON_LABEL']}  '>";
        else
            $form .= "<input title='${app_strings['LBL_CANCEL_BUTTON_TITLE']}' accessKey='${app_strings['LBL_CANCEL_BUTTON_KEY']}' class='button' onclick=\"this.form.action.value='ListView';\" type='submit' type='submit' name='button' value='  ${app_strings['LBL_CANCEL_BUTTON_LABEL']}  '>";
	} else {
		$form .= "<input type='submit' class='button' name='ContinueAccount' value='${mod_strings['LNK_NEW_ACCOUNT']}'>\n";
	}
	$form .= "</td></tr></table></td></tr><tr>";
    if ($action != 'ShowDuplicates')
	{
		$form .= "<th> &nbsp;</th>";
	}
	require_once('include/formbase.php');

	$form .= getPostToForm();
	if(isset($rows[0])){
		foreach ($rows[0] as $key=>$value){
			if($key != 'id'){

					$form .= "<th>". $mod_strings[$mod_strings['db_'.$key]]. "</th>";
		}}

		$form .= "</tr>";
	}

	$rowColor = 'oddListRowS1';
	foreach($rows as $row){

		$form .= "<tr class='$rowColor'>";
		if ($action != 'ShowDuplicates')
		{
		$form .= "<td width='1%' nowrap><a href='javascript:void(0)' onclick='document.dupAccounts.selectedAccount.value=\"${row['id']}\"; document.dupAccounts.submit(); '>[${app_strings['LBL_SELECT_BUTTON_LABEL']}]</a>&nbsp;&nbsp;</td>\n";
		}
		foreach ($row as $key=>$value){
				if($key != 'id'){
                    if(isset($_POST['popup']) && $_POST['popup']==true){
                        $form .= "<td scope='row'><a  href='javascript:void(0)' onclick=\"window.opener.location='index.php?module=Accounts&action=DetailView&record=${row['id']}'\">$value</a></td>\n";
                    }
                    else
					    $form .= "<td><a target='_blank' href='index.php?module=Accounts&action=DetailView&record=${row['id']}'>$value</a></td>\n";

				}}

		if($rowColor == 'evenListRowS1'){
			$rowColor = 'oddListRowS1';
		}else{
			 $rowColor = 'evenListRowS1';
		}
		$form .= "</tr>";
	}
	$form .= "<tr class='pagination'><td colspan='$cols'><table width='100%' cellspacing='0' cellpadding='0' border='0'><tr><td>";

	// handle buttons
	if ($action == 'ShowDuplicates') {
		$return_action = 'ListView'; // cn: bug 6658 - hardcoded return action break popup -> create -> duplicate -> cancel
		$return_action = (isset($_REQUEST['return_action']) && !empty($_REQUEST['return_action'])) ? $_REQUEST['return_action'] : $return_action;
		$form .= "<input type='hidden' name='selectedAccount' id='selectedAccount' value=''><input title='${app_strings['LBL_SAVE_BUTTON_TITLE']}' accessKey='${app_strings['LBL_SAVE_BUTTON_KEY']}' class='button' onclick=\"this.form.action.value='Save';\" type='submit' name='button' value='  ${app_strings['LBL_SAVE_BUTTON_LABEL']}  '>\n";

        if (!empty($_REQUEST['return_module']) && !empty($_REQUEST['return_action']) && !empty($_REQUEST['return_id']))
            $form .= "<input title='${app_strings['LBL_CANCEL_BUTTON_TITLE']}' class='button' onclick=\"this.form.module.value='".$_REQUEST['return_module']."';this.form.action.value='".$_REQUEST['return_action']."';this.form.record.value='".$_REQUEST['return_id']."'\" type='submit' name='button' value='  ${app_strings['LBL_CANCEL_BUTTON_LABEL']}  '>";
        else if (!empty($_POST['return_module']) && !empty($_POST['return_action']))
            $form .= "<input title='${app_strings['LBL_CANCEL_BUTTON_TITLE']}' class='button' onclick=\"this.form.module.value='".$_POST['return_module']."';this.form.action.value='". $_POST['return_action']."';\" type='submit' name='button' value='  ${app_strings['LBL_CANCEL_BUTTON_LABEL']}  '>";
        else
            $form .= "<input title='${app_strings['LBL_CANCEL_BUTTON_TITLE']}'  class='button' onclick=\"this.form.action.value='ListView';\" type='submit' name='button' value='  ${app_strings['LBL_CANCEL_BUTTON_LABEL']}  '>";
	} else {
		$form .= "<input type='submit' class='button' name='ContinueAccount' value='${mod_strings['LNK_NEW_ACCOUNT']}'></form>\n";
	}
    $form .= "</td></tr></table></td></tr></table>";
	return $form;



}

function getForm($prefix, $mod='', $form=''){
	if(!ACLController::checkAccess('Accounts', 'edit', true)){
		return '';
	}
if(!empty($mod)){
	global $current_language;
	$mod_strings = return_module_language($current_language, $mod);
}else global $mod_strings;
global $app_strings;
$lbl_save_button_title = $app_strings['LBL_SAVE_BUTTON_TITLE'];
$lbl_save_button_key = $app_strings['LBL_SAVE_BUTTON_KEY'];
$lbl_save_button_label = $app_strings['LBL_SAVE_BUTTON_LABEL'];


$the_form = get_left_form_header($mod_strings['LBL_NEW_FORM_TITLE']);
$the_form .= <<<EOQ
		<form name="${prefix}AccountSave" onSubmit="return check_form('${prefix}AccountSave');" method="POST" action="index.php">
			<input type="hidden" name="${prefix}module" value="Accounts">
			<input type="hidden" name="${prefix}action" value="Save">
EOQ;
$the_form .= $this->getFormBody($prefix, $mod, $prefix."AccountSave");
$the_form .= <<<EOQ
		<p><input title="$lbl_save_button_title" accessKey="$lbl_save_button_key" class="button" type="submit" name="button" value="  $lbl_save_button_label  " ></p>
		</form>

EOQ;
$the_form .= get_left_form_footer();
$the_form .= get_validate_record_js();

return $the_form;
}


function getFormBody($prefix,$mod='', $formname=''){
	if(!ACLController::checkAccess('Accounts', 'edit', true)){
		return '';
	}
global $mod_strings;
$temp_strings = $mod_strings;
if(!empty($mod)){
	global $current_language;
	$mod_strings = return_module_language($current_language, $mod);
}
	global $app_strings;
global $current_user;

$lbl_required_symbol = $app_strings['LBL_REQUIRED_SYMBOL'];
$lbl_account_name = $mod_strings['LBL_ACCOUNT_NAME'];
$lbl_phone = $mod_strings['LBL_PHONE'];
$lbl_website = $mod_strings['LBL_WEBSITE'];
$lbl_save_button_title = $app_strings['LBL_SAVE_BUTTON_TITLE'];
$lbl_save_button_key = $app_strings['LBL_SAVE_BUTTON_KEY'];
$lbl_save_button_label = $app_strings['LBL_SAVE_BUTTON_LABEL'];
$user_id = $current_user->id;

	$form = <<<EOQ
			<p><input type="hidden" name="record" value="">
			<input type="hidden" name="email1" value="">
			<input type="hidden" name="email2" value="">
			<input type="hidden" name="assigned_user_id" value='${user_id}'>
			<input type="hidden" name="action" value="Save">
EOQ;
if(SugarACL::checkField('Accounts', 'name', 'edit', array("owner_override" => true))) {
	$form .= "$lbl_account_name&nbsp;<span class='required'>$lbl_required_symbol</span><br><input name='name' type='text' value=''><br>";
}
if(SugarACL::checkField('Accounts', 'phone_office', 'edit', array("owner_override" => true))) {
	$form .= "$lbl_phone<br><input name='phone_office' type='text' value=''><br>";
}
if(SugarACL::checkField('Accounts', 'website', 'edit', array("owner_override" => true))) {
		$form .= "$lbl_website<br><input name='website' type='text' value='http://'><br>";
}
$form .='</p>';



$javascript = new javascript();
$javascript->setFormName($formname);
$javascript->setSugarBean(BeanFactory::newBean('Accounts'));
$javascript->addRequiredFields($prefix);
$form .=$javascript->getScript();
$mod_strings = $temp_strings;
return $form;
}


function handleSave($prefix,$redirect=true, $useRequired=false){


	require_once('include/formbase.php');

	$focus = BeanFactory::newBean('Accounts');

	if($useRequired &&  !checkRequired($prefix, array_keys($focus->required_fields))){
		return null;
	}
	$focus = populateFromPost($prefix, $focus);

	if (isset($GLOBALS['check_notify'])) {
		$check_notify = $GLOBALS['check_notify'];
	}
	else {
		$check_notify = FALSE;
	}

	if (empty($_POST['record']) && empty($_POST['dup_checked'])) {
		$duplicateAccounts = $this->checkForDuplicates($prefix);
		if(isset($duplicateAccounts)){
			$location='module=Accounts&action=ShowDuplicates';
			$get = '';

			// Bug 25311 - Add special handling for when the form specifies many-to-many relationships
			if(isset($_POST['relate_to']) && !empty($_POST['relate_to'])) {
				$get .= '&Accountsrelate_to='.$_POST['relate_to'];
			}
			if(isset($_POST['relate_id']) && !empty($_POST['relate_id'])) {
				$get .= '&Accountsrelate_id='.$_POST['relate_id'];
			}

			//add all of the post fields to redirect get string
			foreach ($focus->column_fields as $field)
			{
				if (!empty($focus->$field) && !is_object($focus->$field))
				{
					$get .= "&Accounts$field=".urlencode($focus->$field);
				}
			}

			foreach ($focus->additional_column_fields as $field)
			{
				if (!empty($focus->$field))
				{
					$get .= "&Accounts$field=".urlencode($focus->$field);
				}
			}


			if($focus->hasCustomFields()) {
				foreach($focus->field_defs as $name=>$field) {
					if (!empty($field['source']) && $field['source'] == 'custom_fields')
					{
						$get .= "&Accounts$name=".urlencode($focus->$name);
					}
				}
			}



			$emailAddress = BeanFactory::newBean('EmailAddresses');
			$get .= $emailAddress->getFormBaseURL($focus);

			$get .= get_teams_url('Accounts');


			//create list of suspected duplicate account id's in redirect get string
			$i=0;
			foreach ($duplicateAccounts as $account)
			{
				$get .= "&duplicate[$i]=".$account['id'];
				$i++;
			}

			//add return_module, return_action, and return_id to redirect get string
			$urlData = array('return_module' => 'Accounts', 'return_action' => '');
			foreach (array('return_module', 'return_action', 'return_id', 'popup', 'create') as $var) {
			    if (!empty($_POST[$var])) {
			        $urlData[$var] = $_POST[$var];
			    }
			}
			$get .= "&".http_build_query($urlData);

			$_SESSION['SHOW_DUPLICATES'] = $get;
            if (!empty($_POST['to_pdf'])) {
                $location .= '&to_pdf='.urlencode($_POST['to_pdf']);
            }
            header("Location: index.php?$location");
		}
	}
	if(!$focus->ACLAccess('Save')){
		ACLController::displayNoAccess(true);
		sugar_cleanup(true);
	}

	$focus->save($check_notify);
    $return_id = $focus->id;

	$GLOBALS['log']->debug("Saved record with id of ".$return_id);


    if (!empty($_POST['is_ajax_call']) && $_POST['is_ajax_call'] == '1') {
        $json = getJSONobj();
        echo $json->encode(array('status' => 'success',
                                 'get' => ''));
   	 	$trackerManager = TrackerManager::getInstance();
        $timeStamp = TimeDate::getInstance()->nowDb();
        if($monitor = $trackerManager->getMonitor('tracker')){
	        $monitor->setValue('team_id', $GLOBALS['current_user']->getPrivateTeamID());
	        $monitor->setValue('action', 'detailview');
	        $monitor->setValue('user_id', $GLOBALS['current_user']->id);
	        $monitor->setValue('module_name', 'Accounts');
	        $monitor->setValue('date_modified', $timeStamp);
	        $monitor->setValue('visible', 1);

	        if (!empty($this->bean->id)) {
	            $monitor->setValue('item_id', $return_id);
	            $monitor->setValue('item_summary', $focus->get_summary_text());
	        }
			$trackerManager->saveMonitor($monitor, true, true);
		}
        return null;
    }

    if (isset($_POST['popup']) && $_POST['popup'] == 'true') {
	    $urlData = array("query" => true, "name" => $focus->name, "module" => 'Accounts', 'action' => 'Popup');
    	if (!empty($_POST['return_module'])) {
    	    $urlData['module'] = $_POST['return_module'];
    	}
        if (!empty($_POST['return_action'])) {
    	    $urlData['action'] = $_POST['return_action'];
    	}
    	foreach (array('return_id', 'popup', 'create', 'to_pdf') as $var) {
    	    if (!empty($_POST[$var])) {
    	        $urlData[$var] = $_POST[$var];
    	    }
    	}
		header("Location: index.php?".http_build_query($urlData));
		return;
	}
	if($redirect){
		handleRedirect($return_id,'Accounts');
	}else{
		return $focus;
	}
}


}
?>
