<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/en/msa/master_subscription_agreement_11_April_2011.pdf
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2011 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/





global $mod_strings;
global $app_list_strings;
global $app_strings;
global $theme;

global $current_user;

if (!is_admin($current_user)) sugar_die("Unauthorized access to administration.");

global $db;
if(empty($db)) {
	
	$db = DBManagerFactory::getInstance();
}

echo getClassicModuleTitle(
        "Administration", 
        array(
            "<a href='index.php?module=Administration&action=index'>{$mod_strings['LBL_MODULE_NAME']}</a>",
           translate('LBL_DIAGNOSTIC_TITLE')
           ), 
        false
        );

global $currentModule;

$GLOBALS['log']->info("Administration Diagnostic");

$sugar_smarty = new Sugar_Smarty();
$sugar_smarty->assign("MOD", $mod_strings);
$sugar_smarty->assign("APP", $app_strings);

if($db->dbType != 'mysql') {
	$sugar_smarty->assign("NO_MYSQL_MESSAGE", "<tr><td class=\"dataLabel\"><slot><font color=red>".
										$mod_strings['LBL_DIAGNOSTIC_NO_MYSQL'].
									  "</font></slot></td></tr><tr><td>&nbsp;</td></tr>");
	$sugar_smarty->assign("MYSQL_CAPABLE", "");
	$sugar_smarty->assign("MYSQL_CAPABLE_CHECKBOXES",
				  "<script type=\"text/javascript\" language=\"Javascript\"> ".
				  "document.Diagnostic.mysql_dumps.disabled=true;".
				  "document.Diagnostic.mysql_schema.disabled=true;".
				  "document.Diagnostic.mysql_info.disabled=true;".
				  "</script>"
				  );
}
else {
	$sugar_smarty->assign("NO_MYSQL_MESSAGE", "");
	$sugar_smarty->assign("MYSQL_CAPABLE", "checked");
	$sugar_smarty->assign("MYSQL_CAPABLE_CHECKBOXES", "");
}

$sugar_smarty->assign("RETURN_MODULE", "Administration");
$sugar_smarty->assign("RETURN_ACTION", "index");

$sugar_smarty->assign("MODULE", $currentModule);
$sugar_smarty->assign("PRINT_URL", "index.php?".$GLOBALS['request_string']);


$sugar_smarty->assign("ADVANCED_SEARCH_PNG", SugarThemeRegistry::current()->getImage('advanced_search','alt="'.$app_strings['LNK_ADVANCED_SEARCH'].'"  border="0"'));
$sugar_smarty->assign("BASIC_SEARCH_PNG", SugarThemeRegistry::current()->getImage('basic_search','alt="'.$app_strings['LNK_BASIC_SEARCH'].'"  border="0"'));

$sugar_smarty->display("modules/Administration/Diagnostic.tpl");
