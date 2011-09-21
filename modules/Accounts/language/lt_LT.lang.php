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

	

$mod_strings = array (
  'LBL_PUSH_BILLING' => 'Naudoti veiklos',
  'LBL_PUSH_SHIPPING' => 'Naudoti registracijos',
  'LBL_CONTRACTS' => 'Sutartys',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Sutartys',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Prekės',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Pasiūlymai',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentai',
  'LNK_ACCOUNT_REPORTS' => 'Klientų ataskaitos',
  'LBL_CHARTS' => 'Grafikai',
  'LBL_DEFAULT' => 'Rodymas',
  'LBL_MISC' => 'Kita',
  'LBL_UTILS' => 'Įrankiai',
  'ACCOUNT_REMOVE_PROJECT_CONFIRM' => 'Ar Jūs tikrai norite išimti šį klientą iš projekto?',
  'ERR_DELETE_RECORD' => 'Privalote nurodyti įrašo numerį, kad būtų galima ištrinti klientą.',
  'LBL_ACCOUNT_INFORMATION' => 'Kliento informacija',
  'LBL_ACCOUNT_NAME' => 'Kliento vardas:',
  'LBL_ACCOUNT' => 'Klientas',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Priminimai',
  'LBL_ADDRESS_INFORMATION' => 'Adresas:',
  'LBL_ANNUAL_REVENUE' => 'Metinės pajamos:',
  'LBL_ANY_ADDRESS' => 'Kitas adresas:',
  'LBL_ANY_EMAIL' => 'Bet koks el. paštas:',
  'LBL_ANY_PHONE' => 'Bet koks telefonas:',
  'LBL_ASSIGNED_TO_NAME' => 'Atsakingas:',
  'LBL_ASSIGNED_TO_ID' => 'Atsakingas:',
  'LBL_BILLING_ADDRESS_CITY' => 'Registracijos adreso miestas:',
  'LBL_BILLING_ADDRESS_COUNTRY' => 'Registracijos adreso šalis:',
  'LBL_BILLING_ADDRESS_POSTALCODE' => 'Registracijos adreso pašto kodas:',
  'LBL_BILLING_ADDRESS_STATE' => 'Registracijos adreso rajonas:',
  'LBL_BILLING_ADDRESS_STREET_2' => 'Registracijos adreso gatvė 2',
  'LBL_BILLING_ADDRESS_STREET_3' => 'Registracijos adreso gatvė 3',
  'LBL_BILLING_ADDRESS_STREET_4' => 'Registracijos adreso gatvė 4',
  'LBL_BILLING_ADDRESS_STREET' => 'Registracijos adreso gatvė:',
  'LBL_BILLING_ADDRESS' => 'Registracijos adresas:',
  'LBL_BUG_FORM_TITLE' => 'Klientai',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Klaidos',
  'LBL_CALLS_SUBPANEL_TITLE' => 'Skambučiai',
  'LBL_CAMPAIGN_ID' => 'Kampanijos ID',
  'LBL_CASES_SUBPANEL_TITLE' => 'Aptarnavimai',
  'LBL_CITY' => 'Miestas:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktai',
  'LBL_COUNTRY' => 'Šalis:',
  'LBL_DATE_ENTERED' => 'Sukurta:',
  'LBL_DATE_MODIFIED' => 'Redaguota:',
  'LBL_MODIFIED_ID' => 'Redaguotojo Id',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Klientai',
  'LBL_DESCRIPTION_INFORMATION' => 'Pastabos',
  'LBL_DESCRIPTION' => 'Aprašymas:',
  'LBL_DUPLICATE' => 'Galimas kliento dubliavimasis',
  'LBL_EMAIL' => 'El. paštas:',
  'LBL_EMAIL_OPT_OUT' => 'Nesiųsti:',
  'LBL_EMPLOYEES' => 'Darbuotojai:',
  'LBL_FAX' => 'Faksas:',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',
  'LBL_HOMEPAGE_TITLE' => 'Mano klientai',
  'LBL_INDUSTRY' => 'Pramonės šaka:',
  'LBL_INVALID_EMAIL' => 'Neteisingas el. paštas:',
  'LBL_INVITEE' => 'Kontaktai',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Potencialūs kontaktai',
  'LBL_LIST_ACCOUNT_NAME' => 'Kliento vardas',
  'LBL_LIST_CITY' => 'Miestas',
  'LBL_LIST_CONTACT_NAME' => 'Kontakto vardas',
  'LBL_LIST_EMAIL_ADDRESS' => 'El. pašto adresas',
  'LBL_LIST_FORM_TITLE' => 'Klientų sąrašas',
  'LBL_LIST_PHONE' => 'Telefonas',
  'LBL_LIST_STATE' => 'Regionas',
  'LBL_LIST_WEBSITE' => 'Tinklapis',
  'LBL_MEETINGS_SUBPANEL_TITLE' => 'Susitikimai',
  'LBL_MEMBER_OF' => 'Narystė:',
  'LBL_MEMBER_ORG_FORM_TITLE' => 'Padaliniai',
  'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Padaliniai',
  'LBL_MODULE_NAME' => 'Klientai',
  'LBL_MODULE_TITLE' => 'Klientai: Pradžia',
  'LBL_MODULE_ID' => 'Klientai',
  'LBL_NAME' => 'Vardas:',
  'LBL_NEW_FORM_TITLE' => 'Naujas klientas',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Pardavimai',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Kitas el. paštas:',
  'LBL_OTHER_PHONE' => 'Kitas telefonas:',
  'LBL_OWNERSHIP' => 'Banko sąskaita:',
  'LBL_PARENT_ACCOUNT_ID' => 'Pagrindinio kliento ID',
  'LBL_PHONE_ALT' => 'Kitas telefonas:',
  'LBL_PHONE_FAX' => 'Telefonas faksas:',
  'LBL_PHONE_OFFICE' => 'Darbovietės telefonas:',
  'LBL_PHONE' => 'Telefonas:',
  'LBL_POSTAL_CODE' => 'Pašto kodas:',
  'LBL_PRODUCTS_TITLE' => 'Prekės',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektai',
  'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Kopijuoti į kontaktus',
  'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Kopijuoti...',
  'LBL_RATING' => 'Bankas:',
  'LBL_SAVE_ACCOUNT' => 'Saugoti klientą',
  'LBL_SEARCH_FORM_TITLE' => 'Kliento paieška',
  'LBL_SHIPPING_ADDRESS_CITY' => 'Veiklos adreso miestas:',
  'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Veiklos adreso šalis:',
  'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Veiklos adreso pašto kodas:',
  'LBL_SHIPPING_ADDRESS_STATE' => 'Veiklos adreso regionas:',
  'LBL_SHIPPING_ADDRESS_STREET_2' => 'Veiklos adreso gatvė 2',
  'LBL_SHIPPING_ADDRESS_STREET_3' => 'Veiklos adreso gatvė 3',
  'LBL_SHIPPING_ADDRESS_STREET_4' => 'Veiklos adreso gatvė 4',
  'LBL_SHIPPING_ADDRESS_STREET' => 'Veiklos adreso gatvė:',
  'LBL_SHIPPING_ADDRESS' => 'Veiklos adresas:',
  'LBL_SIC_CODE' => 'Įmonės kodas:',
  'LBL_STATE' => 'Rajonas:',
  'LBL_TASKS_SUBPANEL_TITLE' => 'Užduotys',
  'LBL_TEAMS_LINK' => 'Komandos',
  'LBL_TICKER_SYMBOL' => 'PVM mokėtojo kodas:',
  'LBL_TYPE' => 'Tipas:',
  'LBL_USERS_ASSIGNED_LINK' => 'Atsakingi',
  'LBL_USERS_CREATED_LINK' => 'Sukūrė',
  'LBL_USERS_MODIFIED_LINK' => 'Redagavo',
  'LBL_VIEW_FORM_TITLE' => 'Kliento peržiūra',
  'LBL_WEBSITE' => 'Tinklapis:',
  'LBL_CREATED_ID' => 'Sukūrėjo Id',
  'LBL_CAMPAIGNS' => 'Kampanijos',
  'LNK_ACCOUNT_LIST' => 'Klientai',
  'LNK_NEW_ACCOUNT' => 'Sukurti klientą',
  'LNK_IMPORT_ACCOUNTS' => 'Importuoti klientus',
  'MSG_DUPLICATE' => 'Įrašas, kurį dabar norite sukurti, gali dubliuotis su jau egzistuojančiais įrašais. Klientai su panašiais pavadinimais yra pateikti žemiau. <br> Paspauskite Išsaugoti, jei vis tiek norite sukurti šį klientą, arba paspauskite Atšaukti, kad grįžtumėte atgal nesukūrę kliento.',
  'MSG_SHOW_DUPLICATES' => 'Įrašas, kurį dabar norite sukurti, gali dubliuotis su jau egzistuojančiais įrašais. Klientai su panašiais pavadinimais yra pateikti žemiau. <br> Paspauskite Išsaugoti, jei vis tiek norite sukurti šį klientą, arba paspauskite Atšaukti, kad grįžtumėte atgal nesukūrę kliento.',
  'NTC_COPY_BILLING_ADDRESS' => 'Kopijuoti registracijos adresą į veiklos adresą',
  'NTC_COPY_BILLING_ADDRESS2' => 'Kopijuoti į veiklos adresą',
  'NTC_COPY_SHIPPING_ADDRESS' => 'Kopijuoti veiklos adresą į registracijos adresą',
  'NTC_COPY_SHIPPING_ADDRESS2' => 'Kopijuoti į registracijos adresą',
  'NTC_DELETE_CONFIRMATION' => 'Ar Jūs tikrai norite ištrinti šį įrašą?',
  'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Ar tikrai norite išimti šį įrašą?',
  'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => 'Ar tikrai norite išimti šį įrašą iš padalinių sąrašo?',
  'LBL_ASSIGNED_USER_NAME' => 'Atsakingas:',
  'LBL_PROSPECT_LIST' => 'Adresatų sąrašas',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Klientai',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektai',
);

