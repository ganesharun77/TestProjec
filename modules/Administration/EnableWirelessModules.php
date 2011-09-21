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



require_once('modules/Administration/Forms.php');

global $mod_strings;
global $app_list_strings;
global $app_strings;
global $current_user;

if (!is_admin($current_user)) sugar_die("Unauthorized access to administration.");

global $theme;
global $currentModule;

require_once('modules/Configurator/Configurator.php');
$configurator = new Configurator();
$this->ss->assign('config', $configurator->config);

$enabled_modules = array();
$disabled_modules = array();
$blacklisted_modules = array('Project','ProjectTask','ProductTemplates','KBDocuments');

// replicate the essential part of the behavior of the private loadMapping() method in SugarController
foreach ( array ( '','custom/') as $prefix)
{
	if(file_exists($prefix.'include/MVC/Controller/wireless_module_registry.php')){
		require $prefix.'include/MVC/Controller/wireless_module_registry.php' ;
	}
}

foreach ( $wireless_module_registry as $e => $def )
{
	if( in_array($e,$blacklisted_modules, FALSE) )
	   continue;
	   
    $enabled_modules [ $e ] = empty($app_list_strings['moduleList'][$e]) ? (($e == "Employees") ? $app_strings['LBL_EMPLOYEES'] : $e) 
	                               : ( ($e == "Reports") ? $app_list_strings['moduleList'][$e] . '*' : $app_list_strings['moduleList'][$e] );
}
require_once('modules/ModuleBuilder/Module/StudioBrowser.php');
$browser = new StudioBrowser();
$browser->loadModules();

foreach ( $browser->modules as $e => $def)
{
	if( in_array($e,$blacklisted_modules, FALSE) )
	   continue;
	   
    if ( empty ( $enabled_modules [ $e ]))
		$disabled_modules [ $e ] = empty($app_list_strings['moduleList'][$e]) ? (($e == "Employees") ? $app_strings['LBL_EMPLOYEES'] : $e) : ($app_list_strings['moduleList'][$e]);
}

//Always make the reports module an option, not a studio enabled module so must be explicitly added.
if( !isset($enabled_modules['Reports']) )
{
    $disabled_modules['Reports'] = $app_list_strings['moduleList']['Reports'] . "*";
}

natcasesort($enabled_modules);
natcasesort($disabled_modules);

$json_enabled = array();
foreach($enabled_modules as $mod => $label)
{
    $json_enabled[] = array("module" => $mod, 'label' => $label);
}

$json_disabled = array();
foreach($disabled_modules as $mod => $label)
{
    $json_disabled[] = array("module" => $mod, 'label' => $label);
}

$this->ss->assign('enabled_modules', json_encode($json_enabled));
$this->ss->assign('disabled_modules', json_encode($json_disabled));
$this->ss->assign('mod', $GLOBALS['mod_strings']);
$this->ss->assign('APP', $GLOBALS['app_strings']);
$this->ss->assign('theme', $GLOBALS['theme']);

echo getClassicModuleTitle(
        "Administration", 
        array(
            "<a href='index.php?module=Administration&action=index'>{$mod_strings['LBL_MODULE_NAME']}</a>",
           translate('LBL_WIRELESS_MODULES_ENABLE')
           ), 
        false
        );
echo $this->ss->fetch('modules/Administration/templates/enableWirelessModules.tpl');


?>