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

/*********************************************************************************

 * Description:  TODO To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/


global $mod_strings, $app_strings;
global $mod_strings;
if(ACLController::checkAccess('Calls', 'edit', true))$module_menu[]=Array("index.php?module=Calls&action=EditView&return_module=Calls&return_action=DetailView", $mod_strings['LNK_NEW_CALL'],"CreateCalls");
if(ACLController::checkAccess('Meetings', 'edit', true))$module_menu[]=Array("index.php?module=Meetings&action=EditView&return_module=Meetings&return_action=DetailView", $mod_strings['LNK_NEW_MEETING'],"CreateMeetings");
if(ACLController::checkAccess('Tasks', 'edit', true))$module_menu[]=Array("index.php?module=Tasks&action=EditView&return_module=Tasks&return_action=DetailView", $mod_strings['LNK_NEW_TASK'],"CreateTasks");
if(ACLController::checkAccess('Notes', 'edit', true))$module_menu[]=Array("index.php?module=Notes&action=EditView&return_module=Notes&return_action=DetailView", $mod_strings['LNK_NEW_NOTE'],"CreateNotes");
if(ACLController::checkAccess('Calls', 'list', true))$module_menu[]=Array("index.php?module=Calls&action=index&return_module=Calls&return_action=DetailView", $mod_strings['LNK_CALL_LIST'],"Calls");
if(ACLController::checkAccess('Meetings', 'list', true))$module_menu[]=Array("index.php?module=Meetings&action=index&return_module=Meetings&return_action=DetailView", $mod_strings['LNK_MEETING_LIST'],"Meetings");
if(ACLController::checkAccess('Tasks', 'list', true))$module_menu[]=Array("index.php?module=Tasks&action=index&return_module=Tasks&return_action=DetailView", $mod_strings['LNK_TASK_LIST'],"Tasks");
if(ACLController::checkAccess('Notes', 'list', true))$module_menu[]=Array("index.php?module=Notes&action=index&return_module=Notes&return_action=DetailView", $mod_strings['LNK_NOTE_LIST'],"Notes");
if(ACLController::checkAccess('Calendar', 'list', true))$module_menu[]=Array("index.php?module=Calendar&action=index&view=day", $mod_strings['LNK_VIEW_CALENDAR'],"Calendar");
if(ACLController::checkAccess('Calls', 'import', true))$module_menu[]=Array("index.php?module=Import&action=Step1&import_module=Calls&return_module=Calls&return_action=index", $mod_strings['LNK_IMPORT_CALLS'],"Import", 'Calls');
if(ACLController::checkAccess('Meetings', 'import', true))$module_menu[]=Array("index.php?module=Import&action=Step1&import_module=Meetings&return_module=Meetings&return_action=index", $mod_strings['LNK_IMPORT_MEETINGS'],"Import", 'Meetings');
if(ACLController::checkAccess('Tasks', 'import', true))$module_menu[]=Array("index.php?module=Import&action=Step1&import_module=Tasks&return_module=Tasks&return_action=index", $mod_strings['LNK_IMPORT_TASKS'],"Import", 'Tasks');
if(ACLController::checkAccess('Notes', 'import', true))$module_menu[]=Array("index.php?module=Import&action=Step1&import_module=Notes&return_module=Notes&return_action=index", $mod_strings['LNK_IMPORT_NOTES'],"Import", 'Notes');
?>
