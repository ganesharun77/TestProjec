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




$dictionary['ACLAction'] = array('table' => 'acl_actions', 'comment' => 'Determine the allowable actions available to users'
                               ,'fields' => array (
  'id' =>
  array (
    'name' => 'id',
    'vname' => 'LBL_ID',
    'required'=>true,
    'type' => 'id',
    'reportable'=>false,
    'comment' => 'Unique identifier'
  ),
   'date_entered' =>
  array (
    'name' => 'date_entered',
    'vname' => 'LBL_DATE_ENTERED',
    'type' => 'datetime',
    'required'=>true,
    'comment' => 'Date record created'
  ),
  'date_modified' =>
  array (
    'name' => 'date_modified',
    'vname' => 'LBL_DATE_MODIFIED',
    'type' => 'datetime',
    'required'=>true,
    'comment' => 'Date record last modified'
  ),
    'modified_user_id' =>
  array (
    'name' => 'modified_user_id',
    'rname' => 'user_name',
    'id_name' => 'modified_user_id',
    'vname' => 'LBL_MODIFIED',
    'type' => 'assigned_user_name',
    'table' => 'modified_user_id_users',
    'isnull' => 'false',
    'dbType' => 'id',
    'required'=> false,
    'len' => 36,
    'reportable'=>true,
    'comment' => 'User who last modified record'
  ),
    'created_by' =>
  array (
    'name' => 'created_by',
    'rname' => 'user_name',
    'id_name' => 'created_by',
    'vname' => 'LBL_CREATED',
    'type' => 'assigned_user_name',
    'table' => 'created_by_users',
    'isnull' => 'false',
    'dbType' => 'id',
    'len' => 36,
    'comment' => 'User ID who created record'
  ),
   'name' =>
  array (
    'name' => 'name',
    'type' => 'varchar',
    'vname' => 'LBL_NAME',
    'len' => 150,
    'comment' => 'Name of the allowable action (view, list, delete, edit)'
  ),
   'category' =>
  array (
    'name' => 'category',
    'vname' => 'LBL_CATEGORY',
    'type' => 'varchar',
	'len' =>100,
    'reportable'=>true,
    'comment' => 'Category of the allowable action (usually the name of a module)'
  ),
    'acltype' =>
  array (
    'name' => 'acltype',
    'vname' => 'LBL_TYPE',
    'type' => 'varchar',
	'len' =>100,
    'reportable'=>true,
    'comment' => 'Specifier for Category, usually "module"'
  ),
  'aclaccess' =>
  array (
    'name' => 'aclaccess',
    'vname' => 'LBL_ACCESS',
    'type' => 'int',
    'len'=>3,
    'reportable'=>true,
    'comment' => 'Number specifying access priority; highest access "wins"'
  ),
  'deleted' =>
  array (
    'name' => 'deleted',
    'vname' => 'LBL_DELETED',
    'type' => 'bool',
    'reportable'=>false,
    'comment' => 'Record deletion indicator'
  ),
  'roles' =>
  array (
  	'name' => 'roles',
    'type' => 'link',
    'relationship' => 'acl_roles_actions',
    'source'=>'non-db',
	'vname'=>'LBL_USERS',
  ),
),
'indices' => array (
       array('name' =>'aclactionid', 'type' =>'primary', 'fields'=>array('id')),
       array('name' =>'idx_aclaction_id_del', 'type' =>'index', 'fields'=>array('id', 'deleted')),
       array('name' =>'idx_category_name', 'type' =>'index', 'fields'=>array('category', 'name')),                                                   )

                            );
?>