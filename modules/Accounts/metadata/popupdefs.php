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

$popupMeta = array(
	'moduleMain' => 'Account',
	'varName' => 'ACCOUNT',
	'orderBy' => 'name',
	'whereClauses' => array(
		'name' => 'accounts.name',
		'billing_address_city' => 'accounts.billing_address_city',
		'phone_office' => 'accounts.phone_office'
	),
	'searchInputs' => array('name', 'billing_address_city', 'phone_office'),
	'create' => array(
		'formBase' => 'AccountFormBase.php',
		'formBaseClass' => 'AccountFormBase',
		'getFormBodyParams' => array('','','AccountSave'),
		'createButton' => $mod_strings['LNK_NEW_ACCOUNT']
	),
	'listviewdefs' => array(
		'NAME' => array(
			'width' => '40', 
			'label' => 'LBL_LIST_ACCOUNT_NAME', 
			'link' => true,	
			'default' => true,								        
		),
	    'BILLING_ADDRESS_STREET' => array(
			'width' => '10', 
			'label' => 'LBL_BILLING_ADDRESS_STREET',
			'default' => false,										        
		),		
		'BILLING_ADDRESS_CITY' => array(
			'width' => '10', 
			'label' => 'LBL_LIST_CITY',
			'default' => true,										        
		),
		'BILLING_ADDRESS_STATE' => array(
        	'width' => '7', 
        	'label' => 'LBL_STATE',
        	'default' => true,									        	
		),
        'BILLING_ADDRESS_COUNTRY' => array(
	        'width' => '10', 
	        'label' => 'LBL_COUNTRY',
	        'default' => true,
		),
	    'BILLING_ADDRESS_POSTALCODE' => array(
			'width' => '10', 
			'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
			'default' => false,										        
		),	
	    'SHIPPING_ADDRESS_STREET' => array(
			'width' => '10', 
			'label' => 'LBL_SHIPPING_ADDRESS_STREET',
			'default' => false,										        
		),		
		'SHIPPING_ADDRESS_CITY' => array(
			'width' => '10', 
			'label' => 'LBL_LIST_CITY',
			'default' => false,										        
		),
		'SHIPPING_ADDRESS_STATE' => array(
        	'width' => '7', 
        	'label' => 'LBL_STATE',
        	'default' => false,									        	
		),
        'SHIPPING_ADDRESS_COUNTRY' => array(
	        'width' => '10', 
	        'label' => 'LBL_COUNTRY',
	        'default' => false,
		),
	    'SHIPPING_ADDRESS_POSTALCODE' => array(
			'width' => '10', 
			'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
			'default' => false,										        
		),			
		'ASSIGNED_USER_NAME' => array(
	        'width' => '2', 
	        'label' => 'LBL_LIST_ASSIGNED_USER',
	        'default' => true,
		),
	    'PHONE_OFFICE' => array(
		    'width' => '10', 
			'label' => 'LBL_LIST_PHONE',
		    'default' => false
		),		
	),
	'searchdefs'   => array(
	 	'name', 
		'billing_address_city', 
		'billing_address_state',
		'billing_address_country',
		array(
			'name' => 'assigned_user_id', 
			'label'=>'LBL_ASSIGNED_TO', 
			'type' => 'enum', 
			'function' => array('name' => 'get_user_array', 'params' => array(false))
		),
	)
);
?>
