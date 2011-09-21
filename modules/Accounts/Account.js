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
function open_contact_popup(module_name,width,height,initial_filter,close_popup,hide_clear_button,popup_request_data,popup_mode,create,metadata)
{window.document.popup_request_data=popup_request_data;window.document.close_popup=close_popup;URL='index.php?mode=MultiSelect&'
+'module='+module_name
+'&action=ContactAddressPopup';if(initial_filter!='')
{URL+='&query=true'+initial_filter;}
if(hide_clear_button)
{URL+='&hide_clear_button=true';}
windowName='popup_window';windowFeatures='width='+width
+',height='+height
+',resizable=1,scrollbars=1';if(popup_mode==''&&popup_mode=='undefined'){popup_mode='single';}
URL+='&mode='+popup_mode;if(create==''&&create=='undefined'){create='false';}
URL+='&create='+create;if(metadata!=''&&metadata!='undefined'){URL+='&metadata='+metadata;}
win=window.open(URL,windowName,windowFeatures);if(window.focus)
{win.focus();}
return win;}
function set_focus(){document.getElementById('name').focus();}