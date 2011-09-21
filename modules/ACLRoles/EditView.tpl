{*

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




*}


<script>
{literal}
function set_focus(){
	document.getElementById('name').focus();
}
{/literal}
</script>

<form method='POST' name='EditView' action='index.php'>
<TABLE width='100%' border='0' cellpadding=0 cellspacing = 0 class="actionsContainer">
<tbody>
<tr>
<td>
<input type='hidden' name='record' value='{$ROLE.id}'>
<input type='hidden' name='module' value='ACLRoles'>
<input type='hidden' name='action' value='Save'>
<input type='hidden' name='isduplicate' value='{$ISDUPLICATE}'>
<input type='hidden' name='return_record' value='{$RETURN.record}'>
<input type='hidden' name='return_action' value='{$RETURN.action}'>
<input type='hidden' name='return_module' value='{$RETURN.module}'> &nbsp;
<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" id='save_button' accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="this.form.action.value='Save';return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" >
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}"   class='cancel_button' accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" type='submit' name='save' value="{$APP.LBL_CANCEL_BUTTON_LABEL}" class='button' onclick='document.EditView.action.value="{$RETURN.action}";document.EditView.module.value="{$RETURN.module}";document.EditView.record.value="{$RETURN.record}";document.EditView.submit();'>
</td>
</tr>
</tbody>
</table>
<TABLE width='100%' class="edit view"  border='0' cellpadding=0 cellspacing = 0  >
<TR>
<td scope="row" align='right'>{$MOD.LBL_NAME}:<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span></td><td >
<input id='name' name='name' type='text' value='{$ROLE.name}'>
</td><td>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr>
<td scope="row" align='right'>{$MOD.LBL_DESCRIPTION}:</td>
<td ><textarea name='description' cols="80" rows="8">{$ROLE.description}</textarea></td>
</tr>
</table>

</form>
<script type="text/javascript">
addToValidate('EditView', 'name', 'varchar', true, '{$MOD.LBL_NAME}');
</script>