<?php 
 //WARNING: The contents of this file are auto-generated



$layout_defs['Contacts']['subpanel_setup']['securitygroups'] = array(
	'top_buttons' => array(array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'SecurityGroups', 'mode' => 'MultiSelect'),),
	'order' => 900,
	'sort_by' => 'name',
	'sort_order' => 'asc',
	'module' => 'SecurityGroups',
	'refresh_page'=>1,
	'subpanel_name' => 'default',
	'get_subpanel_data' => 'SecurityGroups',
	'add_subpanel_data' => 'securitygroup_id',
	'title_key' => 'LBL_SECURITYGROUPS_SUBPANEL_TITLE',
);





/**
 * sps_contactsLayoutdefs.php
 * @author SalesAgility <support@salesagility.com>
 * Date: 27/01/14
 */


$layout_defs["Contacts"]["subpanel_setup"]["history"]['searchdefs'] =
array (
    'collection' =>
        array (
            'name' => 'collection',
            'label' => 'LBL_COLLECTION_TYPE',
            'type' => 'enum',
            'options' => $GLOBALS['app_list_strings']['collection_temp_list'],
            'default' => true,
            'width' => '10%',
        ),
    'name' =>
        array (
            'name' => 'name',
            'default' => true,
            'width' => '10%',
        ),
    'current_user_only' =>
        array (
            'name' => 'current_user_only',
            'label' => 'LBL_CURRENT_USER_FILTER',
            'type' => 'bool',
            'default' => true,
            'width' => '10%',
        ),
    'date_modified' =>
        array (
            'name' => 'date_modified',
            'default' => true,
            'width' => '10%',
        ),
);

$layout_defs["Contacts"]["subpanel_setup"]["history"]['top_buttons'][] = array('widget_class' => 'SubPanelTopFilterButton');

/**
 * Advanced OpenSales, Advanced, robust set of sales modules.
 * @package Advanced OpenSales for SugarCRM
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author SalesAgility <info@salesagility.com>
 */

$layout_defs["Contacts"]["subpanel_setup"]["contact_aos_quotes"] = array (
  'order' => 100,
  'module' => 'AOS_Quotes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'AOS_Quotes',
  'get_subpanel_data' => 'aos_quotes',
);

$layout_defs["Contacts"]["subpanel_setup"]["contact_aos_invoices"] = array (
  'order' => 100,
  'module' => 'AOS_Invoices',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'AOS_Invoices',
  'get_subpanel_data' => 'aos_invoices',
);

$layout_defs["Contacts"]["subpanel_setup"]["contact_aos_contracts"] = array (
  'order' => 100,
  'module' => 'AOS_Contracts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'AOS_Contracts',
  'get_subpanel_data' => 'aos_contracts',
);



 // created: 2013-04-15 12:13:27
$layout_defs["Contacts"]["subpanel_setup"]['fp_events_contacts'] = array (
  'order' => 100,
  'module' => 'FP_events',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE',
  'get_subpanel_data' => 'fp_events_contacts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

?>