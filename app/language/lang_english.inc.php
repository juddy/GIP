<?
define("LANG_BASIC_DATABASES","Databases");
define("LANG_BASIC_DATABASE","Database");
define("LANG_BASIC_ACTIVE","Active");
define("LANG_BASIC_TABLE","Table");
define("LANG_BASIC_LICENSE","License");
define("LANG_BASIC_INSTALL","Install");
define("LANG_BASIC_README","README");
define("LANG_BASIC_DOWNLOAD","Download");
define("LANG_BASIC_BY","by");
define("LANG_BASIC_TO","to");
define("LANG_BASIC_IN","in");
define("LANG_BASIC_FOR","for");
define("LANG_BASIC_DATABASE_TYPE","Database Type");
define("LANG_BASIC_USER","User");
define("LANG_BASIC_GENERATOR","Generator");
define("LANG_BASIC_GENERATE","Generate");
define("LANG_BASIC_TYPE","Type");
define("LANG_BASIC_ERROR","Error");
define("LANG_BASIC_HEADER","Header");
define("LANG_BASIC_FOOTER","Footer");
define("LANG_BASIC_LANGUAGE","Language");
define("LANG_BASIC_PATH","Path");
define("LANG_BASIC_LOGOUT","Logout");
define("LANG_BASIC_CHOSEN","Chosen");
define("LANG_BASIC_INTRODUCTION","Introduction");
define("LANG_BASIC_DESCRIPTION","Description");
define("LANG_BASIC_AUTHOR","Author");
define("LANG_BASIC_RUN","Run");
define("LANG_BASIC_NONE_SELECTED","None Selected");
define("LANG_BASIC_ENTER","Enter");
define("LANG_BASIC_EDIT","Edit");
define("LANG_BASIC_SAVE","Save");
define("LANG_BASIC_VIEW","View");
define("LANG_BASIC_FIELD","Field");
define("LANG_BASIC_RECORD","Record");
define("LANG_BASIC_ROW","Row");
define("LANG_BASIC_NEW","New");

define("LANG_BASIC_CRUD_GRID","CRUD Grid");
define("LANG_BASIC_INSERT","Insert");
define("LANG_BASIC_INSERTED","Inserted");
define("LANG_BASIC_UPDATE","Update");
define("LANG_BASIC_LIST","List");
define("LANG_BASIC_LIST_ALL","List All");
define("LANG_BASIC_DELETE","Delete");
define("LANG_BASIC_SEARCH","Search");
define("LANG_BASIC_POWER_SEARCH","Power Search");
define("LANG_BASIC_GO_BACK","Go Back");
define("LANG_BASIC_KEYWORD","Keyword");
define("LANG_BASIC_ANONYMOUS","Anonymous");
define("LANG_BASIC_NOT_AVAILABLE","Not Available");
define("LANG_BASIC_MENU","Menu");
define("LANG_BASIC_PROJECT","Project");
define("LANG_BASIC_PAGE","Page");
define("LANG_BASIC_CLEAR_FORM","Clear Form");
define("LANG_BASIC_FROM"," from ");

define("LANG_BASIC_TRANSLATE","Translate");
define("LANG_BASIC_IN_YOUR_LANGUAGE","in your language");

define("LANG_DESC_WHAT_IS_IT","Given any database schema, tables within, list of fields and properties, one ought to be able to build any kind of database backed applications in any programming language. The basic operations that a database backed application will have are usually the same - Create Records, Retreive Records, Update Records, Delete Records (CRUD). <br><br> GIP attempts to generate a basic set of PHP code to provide a 'stub' to work from. The core database access code and scripts are usually the same for most applications. Rather than spending a lot of time wring this common code, we can spend more time on customizing the logic and resources of our applications.<br> GIP requires you to design your tables gip can generate code for reading and writing to the database, the html forms to enter or edit data in the database, scripts to list data, scripts to delete data, search forms, search scripts among others.<br><br>GIP was designed with the novice user in mind as well as the experienced PHP programmer wanting to build a complex application.");

define("LANG_DESC_INSTRUCTIONS","Please choose a Database and a Table from the left ");

define("LANG_DESC_PROJECT_PAGE","Project Page");
define("LANG_DESC_DONATE_TO_PROJECT","Donate to this Project");
define("LANG_DESC_SUBMIT_BUG","Found a Bug in GIP? Submit it here !");
define("LANG_DESC_SUBMIT_DOCUMENTATION","Wrote a piece of Documentation for GIP? Submit it here");
define("LANG_DESC_GIVE_FEEDBACK","Give us your feedback on GIP");

define("LANG_LOGIN_INVOKE_GENIE","Welcome to GIP");
define("LANG_LOGIN_GENIE_FLAVOR","Database Flavor");
define("LANG_LOGIN_DB_HOSTNAME","Datatabase HostName (IP or Hostname)");
define("LANG_LOGIN_DB_USER_NAME","Database Username");
define("LANG_LOGIN_DB_PASSWORD","Database Password");
define("LANG_LOGIN_RUB_LAMP","Connect");
define("LANG_LOGIN_RUB_LAMP_DESC","Provide parameters above and click start");


define("LANG_GEN_CHOOSER_BEGINNING_PROGRAMMERS","Beginning Programmers");
define("LANG_GEN_CHOOSER_ADVANCED_PROGRAMMERS","Advanced Users");
define("LANG_GEN_CHOOSER_FULLAPP_GENERATOR","Full Application Generation");
define("LANG_GEN_CHOOSER_USER_PLUGIN_GENERATOR","GIP User Plug Ins");
define("LANG_GEN_CHOOSER_UTILS_GENERATOR","Utilities");

define("LANG_SG_SIMPLE_GENERATOR","Simple Generator");
define("LANG_SG_SIMPLE_GENERATOR_DESC","This generator generates simple php code to access a database and do the basic (CRUD) operations on it.");

define("LANG_AG_ADVANCED_GENERATOR","Advanced Generator");
define("LANG_AG_ADVANCED_GENERATOR_DESC","The advanced generator generates code for the GIP Framework. The GIP framework maps every table to a class with getters and setters on each field. These classes are just containers. They do not contain logic. There are DAO Classes which deal with all the CRUD operation on these container classes. The front end of your applicaitons access the DAO Classes through Delegate Classes with interact with the DAO. That's the GIP Framework in a nutshell, but there's a lot more to it. Read the documentation to find out more.");
define("LANG_AG_ADVANCED_GENERATOR_DIAGRAM","GIP Framework in a NutShell Diagram");
define("LANG_FAG_FULLAPP_GENERATOR","Full Application Generator");
define("LANG_FAG_FULLAPP_GENERATOR_DESC","Desc here..");

define("LANG_UP_USER_PLUGINS","User PlugIns");
define("LANG_UP_USER_PLUGINS_DESC","GIP allows you to write your own generator plugin and drop it in here. Read the docs on specifications of a GIP plugin and after you write your plugin, just drop them in the userPlugIns directory for them to show up here.");

define("LANG_UG_UTILS_GENERATOR","Utilities Generator");
define("LANG_UG_UTILS_GENERATOR_DESC","There are many routine tasks that web developers have to do often. Rather than spending time to do these tedious manual repetitive work, having tools do them for us is much more fun. As I find these boring tasks in my daily routines, I have tried to build small utilities for them to do these for me. I hope they will help you as well.");

define("LANG_ACTIVE_DATABASE","Active Database");
define("LANG_ACTIVE_TABLE","Active Table");

// SIMPLE GENERATOR


define("LANG_SIMPLE_NO_TABLE_SELECTED","No Table Selected. Please choose a table from the left side panel for individual table code Generation.");
define("LANG_SIMPLE_GENERATE_ALL_CODE_LINK","Generate ALL Application Code for full database and Save to Disk ");

define("LANG_SIMPLE_FORM_MAKER","Code GIP Form Maker  ");
define("LANG_SIMPLE_FORM_MAKER_DESC","This utility will build a form for you from a MySQL Database Table. You can choose which form element you want for each field in your database. The form element names will be named the same name as your field with '\$stringToAppendToField' appended to the end. This utility will build source code for the form and show you a preview of how it looks like. Use it in conjunction with the Insert Builder to have a complete automated way to insert data to your database.");

define("LANG_SIMPLE_INSERT_BUILDER","Insert Query Builder");
define("LANG_SIMPLE_INSERT_BUILDER_DESC","This utility will build a MySQL insert query for you from a MySQL Database Table. Used in conjuntion with the Form Maker, the Insert Query Buiilder will generate your insert statement for all fields in your MySQL Database. The variable names used to build the insert query will have the same name as the fields with '\$stringToAppendToField' appended at the end.");

define("LANG_SIMPLE_DATABASE_LISTER","Database Lister");
define("LANG_SIMPLE_DATABASE_LISTER_DESC","This utility will generate code for you that will list every row with all of its fields in your MySQL Database Table. Each alternate row will be differently color coded and also will have Edit and Delete Buttons. The Edit Button should be used in conjunction with the Update Form Builder.");

define("LANG_SIMPLE_CRUD_GRID","All in One CRUD Grid");
define("LANG_SIMPLE_CRUD_GRID_DESC","This utility will generate code that will have all the CRUD operation in it on the same page.");



define("LANG_SIMPLE_EDIT_FORM_MAKER","Edit/Update Form Builder");
define("LANG_SIMPLE_EDIT_FORM_MAKER_DESC","This utility will generate code to build a form for you from which you can update existing data. From other preexisting scripts, such as the one generated from Database Lister, you will need to pass the Primary Key of your table to this script which will in turn get all the data and pre-populate your form for you for Editing. Use it in conjunction with the Update Query Maker to do the updates on your data. Use the code generated by the Update Query Maker, as the Form Action Script.");


define("LANG_SIMPLE_UPDATE_MAKER","Update Maker");
define("LANG_SIMPLE_UPDATE_MAKER_DESC","This utility will generate code to update data in your MySQL Database. Use it as the Form Action script, of the Edit/Update Form maker.");

define("LANG_SIMPLE_VIEW_MAKER","View Maker");
define("LANG_SIMPLE_VIEW_MAKER_DESC","This utility will generate code for a view details page for a record.");

define("LANG_SIMPLE_DELETE_CONFIRMATION_MAKER","Delete Confirmation Maker");
define("LANG_SIMPLE_DELETE_CONFIRMATION_MAKER_DESC","This utility will generate code to show user the record they want to delete and ask for their confirmation before deleting it.");

define("LANG_SIMPLE_DELETE_SCRIPT_MAKER","Delete Script Maker");
define("LANG_SIMPLE_DELETE_SCRIPT_MAKER_DESC","This utility will generate code to delete a record after the confirmation page.");


define("LANG_SIMPLE_SEARCH_FORM_MAKER","Search Form Maker");
define("LANG_SIMPLE_SEARCH_FORM_MAKER_DESC","This utility will generate code for a Search Form.");

define("LANG_SIMPLE_SEARCH_SCRIPT_MAKER","Search Script Maker");
define("LANG_SIMPLE_SEARCH_SCRIPT_MAKER_DESC","This utility will generate the script that will search the database.");

define("LANG_SIMPLE_GENERATE_AND_SAVE_ALL","GENERATE AND SAVE ALL CODE ");
define("LANG_SIMPLE_GENERATE_AND_SAVE_ALL_DESC","Generate All Code for this application  ");


define("LANG_SIMPLE_FORM_MAKER_CHOOSE_FIELDS","Choose Fields to build Form for ");
define("LANG_SIMPLE_FORM_MAKER_CHECK_BOXES","Please check the boxes that you want for the Data Entry form for Table ");
define("LANG_SIMPLE_FORM_MAKER_FIELD_NAME","Field Name");
define("LANG_SIMPLE_FORM_MAKER_FORM_LABEL","Form Label");
define("LANG_SIMPLE_FORM_MAKER_INCLUDE","Include");
define("LANG_SIMPLE_FORM_MAKER_ELEMENT_TYPE","Form Element Type");
define("LANG_SIMPLE_FORM_MAKER_SIZE","Size");
define("LANG_SIMPLE_FORM_MAKER_GENERATE_FORM","Generate Form");

// Lang inside simple generated Code
define("LANG_SIMPLE_INSIDE_NEW_RECORD_INSERTED","A new record has been inserted in the database. Here is the information that has been inserted :-");
define("LANG_SIMPLE_INSIDE_SORRY_NO_RECORDS_FOUND","Sorry. No records found !!");
define("LANG_SIMPLE_INSIDE_RECORD_UPDATED","Record  has been updated in the database. Here is the updated information :-");
define("LANG_SIMPLE_INSIDE_GO_BACK_TO_LIST","Go Back to List All Records");

define("LANG_SIMPLE_INSIDE_VIEW_RECORD","View Record");
define("LANG_SIMPLE_INSIDE_CONFIRM_DELETION","Confirm Record Deletion");
define("LANG_SIMPLE_INSIDE_CONFIRM_DELETION_DESC","If you are sure you want to delete the above record, please press the delete button below.");
define("LANG_SIMPLE_INSIDE_RECORD_DELETED","Record  has been deleted from database. Here is the deleted record :-");
define("LANG_SIMPLE_INSIDE_POWER_SEARCH","Power Search");
define("LANG_SIMPLE_INSIDE_POWER_SEARCH_DESC1","The power search will search every field in the ");
define("LANG_SIMPLE_INSIDE_POWER_SEARCH_DESC2","table, for a match to your keyword. The power searches entire strings or parts of your string. ");
define("LANG_SIMPLE_INSIDE_POWER_SEARCH_DESC3","Please put in any keyword you want to search by.");

// Lang inside advanced generated code
define("LANG_ADVANCED_CONFIRM_DELETE","Delete Confirmation");
define("LANG_ADVANCED_CONFIRM_DELETE_DESC","Is this the record that you want to delete?");
define("LANG_ADVANCED_CONFIRM_DELETE_ARE_YOU_SURE","If you are sure you want to delete the above record from ");
define("LANG_ADVANCED_CONFIRM_DELETE_PRESS_BUTTON"," please press the delete button below.");
define("LANG_ADVANCED_RECORD_DELETED_PERMANENTLY","Your record has been permanently deleted.");
define("LANG_ADVANCED_POWER_SEARCH_DESC1","The power search will search every field in the ");
define("LANG_ADVANCED_POWER_SEARCH_DESC2"," table, for a match to your keyword. The power searches entire strings or parts of your string. ");
define("LANG_ADVANCED_POWER_SEARCH_DESC3","Please put in any keyword you want to search by.");
define("LANG_ADVANCED_UPDATE_DESC","The information that you entered has been successfully updated. Below is your updated Record.");
define("LANG_ADVANCED_ERROR_RECORD_NOT_FOUND","Error - Could not find record with Id --> ");
define("LANG_ADVANCED_NO_RECORDS_FOUND","Sorry, no records were found for table ");
define("LANG_ADVANCED_NO_RECORDS_FOUND_FOR_SEARCH","Sorry, no records were found for your Search Term ");

// ADVANCED GENERATOR
define("LANG_ADVANCED_NO_TABLE_SELECTED","No Table Selected. Please choose a table from the left side panel for individual code Generation. If you want to generate all CRUD Code for this table, click on the link below.");
define("LANG_ADVANCED_GENERATE_ALL_CODE_LINK","Generate All CRUD Code for all tables from this Database for GIP Framework and Save to Disk ");



// GIP PLUGINS MAIN PAGE
define("LANG_GIP_PLUGIN_SCAN_PLUGINS","SCAN FOR GIP PLUGINS ");
define("LANG_GIP_PLUGIN_SCAN_PLUGINS_DESC","This tool will scan in the plugin Directory for all GIP Plugins and allow you to run them.");


// UTILITIES GENERATOR MAIN PAGE
define("LANG_UTILITIES_PHP_CLASS_MAKER","PHP Class Maker ");
define("LANG_UTILITIES_PHP_CLASS_MAKER_DESC","This tool allows you to enter variables you want to use in class, function names you want and it generates the for a php class. For each variable you input, it will also build the getter and setter methods for it.  ");

define("LANG_UTILITIES_BUILD_CLASS_FROM_TABLE","Build PHP Class from Table ");
define("LANG_UTILITIES_BUILD_CLASS_FROM_TABLE_DESC","This tool builds the code for a php class with the fields from your chosen table being the class variables, with getter and setter methods on each of them.  ");

define("LANG_UTILITIES_STYLE_SHEET_VIEWER","phpStyleSheet Viewer ");
define("LANG_UTILITIES_STYLE_SHEET_VIEWER_DESC","Tool to preview CSS Styles");

define("LANG_UTILITIES_GENERATE_GENERATOR","Generate a Generator  ");
define("LANG_UTILITIES_GENERATE_GENERATOR_DESC","Builds the code for a GIP plugin class for you. This utility converts the text or code you want to generate to GIP generated code. Read the tutorial on GIP Plugin Development to know more.  ");

define("LANG_UTILITIES_HTML_FORM_EXTRACTOR","HTML FORM Extractor ");
define("LANG_UTILITIES_HTML_FORM_EXTRACTOR_DESC","This tool scans an html document and looks for all your form elements and builds get Statements (e.g \$_POST['formElement'])  for them to be used in the script your form forwards to. ");

define("LANG_UTILITIES_JAVA_EJB_GENERATOR","Java EJB, CRUD and Test Code Generator ");
define("LANG_UTILITIES_JAVA_EJB_GENERATOR_DESC","Tool to generate EJBs, CRUD and Test methods on them in Java ");

define("LANG_UTILITIES_SQL_GENERATOR","SQL Generator ");
define("LANG_UTILITIES_SQL_GENERATOR_DESC","This tool create INSERT statements for data in your database. I built this plugin for backup purposes and table original data recreation. ");

define("LANG_UTILITIES_NONSENSE_GENERATOR","NonSense Generator ");
define("LANG_UTILITIES_NONSENSE_GENERATOR_DESC","This is an open source tool that generates filler texts for your webpages and other things, you might need filler text that kind of make sense.");
define("LANG_UTILITIES_NONSENSE_GENERATOR_GENERATE_MORE_NONSENSE","Generate More NonSense");



// UTILS GENERATE A GENERATOR
define("LANG_UTILITIES_GEN_GENERATOR_TITLE","Generate a Generator  ");
define("LANG_UTILITIES_GEN_GENERATOR_SUB_TITLE","Who came first? The generator or the generator of the generator?");
define("LANG_UTILITIES_GEN_GENERATOR_TEXT1","Its easy to build a code generation plugin for GIP. Basically Code Generation is all about string manipulation. You want to process some input in some way and output it embedded in another piece of String.");
define("LANG_UTILITIES_GEN_GENERATOR_TEXT2","This 'Generate a Generator' tool will build a skeleton code GIP plugin class that you can easily modify to generate your code. For example if you have an html page or some piece of code in any language that you want GIP to generate, just paste the entire page contents in the text box below and click generate and you will have a basic skeleton plugin class you can work on. ");
define("LANG_UTILITIES_GEN_GENERATOR_CLASS_NAME","Generator Class Name");
define("LANG_UTILITIES_GEN_GENERATOR_ENTER_CODE","Enter Code  ");
define("LANG_UTILITIES_GEN_GENERATOR_GENERATE_PLUGIN","Generate Plugin ");

// UTILS LANGUAGE FILE BUILDER
define("LANG_UTILITIES_LANG_FILE_BUILDER","GIP NEW Language File Builder ");
define("LANG_UTILITIES_LANG_FILE_BUILDER_DESC","This tool provides you with an easy interface to build a new language file for GIP.");


// UTILS HTML FORM EXTRACTOR
define("LANG_UTILITIES_HTML_FORM_EXT_TITLE","HTML FORM Extractor ");
define("LANG_UTILITIES_HTML_FORM_EXT_DESC","This tool scans an html document and looks for all your form elements and builds get Statements (e.g \$_POST['formElement'])  for them to be used in the script your form forwards to.");
define("LANG_UTILITIES_HTML_FORM_ENTER_CODE","Enter Code to scan and retreive form elements in the textbox below :");
define("LANG_UTILITIES_HTML_FORM_EXT_EXTRACT_FORM_ELEMENTS","Extract Form Elements");

// ADVANCED GENERATOR MAIN PAGE
define("LANG_AGEN_APP_COMPONENT_GENERATOR","App Component Generator");
define("LANG_AGEN_CLASS_MAKER","Class Maker");
define("LANG_AGEN_CLASS_MAKER_DESC","Object Maker From Table ");

define("LANG_AGEN_TABLE_GEN_MANAGER_GENERATOR","Table GenManager Generator");
define("LANG_AGEN_TABLE_MANAGER_GENERATOR","Table Manager Generator");
define("LANG_AGEN_TABLE_GEN_MANAGER_GENERATOR_DESC","Table Manager Class Generator ");


define("LANG_AGEN_GEN_DAO_GENERATOR","GenDAO Generator");
define("LANG_AGEN_DAO_GENERATOR","DAO Generator");
define("LANG_AGEN_GEN_DAO_GENERATOR_DESC","DAO Generator ");


define("LANG_AGEN_COMMON_COMPONENT_GENERATOR","Common Component Generator");
define("LANG_AGEN_CLASS_CONSTANTS_GENERATOR","Class Constants");
define("LANG_AGEN_CLASS_CONSTANTS_GENERATOR_DESC","Every classes for every tables is defined in this code, with full paths to them.");

define("LANG_AGEN_PAGE_CONSTANTS_GENERATOR","Page Constants");
define("LANG_AGEN_PAGE_CONSTANTS_GENERATOR_DESC","Every pages that the GIP application will have is defined in here with full URL Address. ");

define("LANG_AGEN_DB_CONSTANTS_GENERATOR","Database Constants");
define("LANG_AGEN_DB_CONSTANTS_GENERATOR_DESC","Every Table and Fields being referenced in a GIP application is defined in this Code. They are mapped to constants that we use in the GIP application.");

define("LANG_AGEN_WEB_COMPONENT_GENERATOR","Web Component Generator");


define("LANG_AGEN_WEB_GEN_CHOOSE_FIELDS_FOR_ENTER_FORM","Enter Form Generator");
define("LANG_AGEN_WEB_GEN_ENTER_FORM","Enter Form Generator");
define("LANG_AGEN_WEB_GEN_ENTER_FORM_DESC","");

define("LANG_AGEN_WEB_GEN_INSERT_SCRIPT","Generate Insert Script (GIP Framework) ");
define("LANG_AGEN_WEB_GEN_INSERT_SCRIPT_DESC","");

define("LANG_AGEN_WEB_GEN_EDIT_FORM","Generate Edit Form (GIP Framework) ");
define("LANG_AGEN_WEB_GEN_EDIT_FORM_DESC","");

define("LANG_AGEN_WEB_GEN_UPDATE_SCRIPT","Generate Update Script (GIP Framework) ");
define("LANG_AGEN_WEB_GEN_UPDATE_SCRIPT_DESC","");

define("LANG_AGEN_WEB_GEN_DELETE_CONFIRMATION_SCRIPT","Generate Delete Confirmation Page");
define("LANG_AGEN_WEB_GEN_DELETE_CONFIRMATION_SCRIPT_DESC","");

define("LANG_AGEN_WEB_GEN_DELETE_SCRIPT","Generate Delete Script");
define("LANG_AGEN_WEB_GEN_DELETE_SCRIPT_DESC","");

define("LANG_AGEN_WEB_GEN_VIEW_SCRIPT","Generate View Record");
define("LANG_AGEN_WEB_GEN_VIEW_SCRIPT_DESC","");

define("LANG_AGEN_WEB_GEN_LIST_ALL_SCRIPT","Generate List All Records Script");
define("LANG_AGEN_WEB_GEN_LIST_ALL_SCRIPT_DESC","");

define("LANG_AGEN_WEB_GEN_CRUD_GRID_SCRIPT","Generate CRUD Grid Script");
define("LANG_AGEN_WEB_GEN_CRUD_GRID_SCRIPT_DESC","");

define("LANG_AGEN_WEB_GEN_POWER_SEARCH_FORM","Generate Power Search Form");
define("LANG_AGEN_WEB_GEN_POWER_SEARCH_FORM_DESC","");

define("LANG_AGEN_WEB_GEN_POWER_SEARCH_SCRIPT","Generate Power Search Script");
define("LANG_AGEN_WEB_GEN_POWER_SEARCH_SCRIPT_DESC","");


// PHP CLASS MAKER
define("LANG_UTILS_PCM_PHP_CLASS_MAKER","PHP Class Maker");
define("LANG_UTILS_PCM_PHP_CLASS_MAKER_DESC","This tool builds a php class from your input parameters.");
define("LANG_UTILS_PCM_CLASS_NAME","Class Name");
define("LANG_UTILS_PCM_CLASS_VARIABLES","Class Variables");
define("LANG_UTILS_PCM_CLASS_MEMBER_FUNCTIONS","Member Functions ");
define("LANG_UTILS_PCM_POPULATE_FORM_WITH_INPUT","Populate Form with sample Input");
define("LANG_UTILS_PCM_GENERATE_CLASS_CODE","Generate PHP Class Code");


// Generate all headers
define("LANG_GALL_SIMPLE_CHOOSE_SCHEMA","You need to choose a database schema first to be able to generate code for it. You have not chosen any. Auto Generation cannot proceed. Please choose a database first and then retry autogeneration. ");
define("LANG_GALL_SIMPLE_DESC","");
define("LANG_GALL_SIMPLE_GEN_AND_SAVE_ALL","Generate and Save Simple Code for All Tables for Database ");
define("LANG_GALL_SIMPLE_CHOOSE_SETTINGS_FOR_AUTO_GEN","Please choose settings for Auto Generation.");
define("LANG_GALL_SIMPLE_CHOOSE_SETTINGS_FOR_AUTO_GEN","Please choose settings for Auto Generation.");
define("LANG_GALL_SIMPLE_SELECT_PATH","Put the path that you want the generated code in. Make sure that apache has permission to write to it.");
define("LANG_GALL_SIMPLE_CHOOSE_MODULES","Please choose the modules that you want to be generated.");
define("LANG_GALL_SIMPLE_GENERATE_BUTTON","Generate and Save All Code");


// GENERATE ALL ADVANCED
define("LANG_GALL_ADV_HEADER","GIP Framework Generate All Code");
define("LANG_GALL_ADV_DESC","xxx");
define("LANG_GALL_ADV_CHOOSE_SETTINGS_FOR_AUTO_GEN","Please choose settings for Auto Generation.");
define("LANG_GALL_ADV_CONFIG_FILE","Config File");
define("LANG_GALL_ADV_CONFIG_FILE_DESC","Put the config file to include and use.");
define("LANG_GALL_ADV_SELECT_PATH","Put the path that you want the generated code in. Make sure that apache has permission to write to it.");
define("LANG_GALL_ADV_CHOOSE_MODULES","Please choose the modules that you want to be generated.");
define("LANG_GALL_ADV_GENERATE_BUTTON","Generate and Save All Code");


// USER PLUGINS
define("LANG_UPLUGINS_FOUND_IN","Plugins Found in ");
define("LANG_UPLUGINS_PLUGIN_NAME","Plugin Name");
define("LANG_UPLUGINS_BELOW_IS_OUTPUT","Below is the output of the plugin");
define("LANG_UPLUGINS_LEARN_HOW_TO_WRITE_YOUR_OWN_PGIN","Learn how to write your own GIP Plugin");
define("LANG_UPLUGINS_NO_PLUGINS_FOUND","No Plugins Found");


// ENGINE INTERNALS

define("LANG_INTERNALS_CONNECTION_SUCCESSFUL","connection to database successful..");
define("LANG_INTERNALS_CONNECTION_ERROR","<font color=red><b>Connection Error</b></font> <br><br> Could not connect to the database with the information provided.<br><br>");
define("LANG_INTERNALS_DB_ERROR_ON_QUERY","A Database Error Occured while executing Query ");
define("LANG_INTERNALS_DB_ERROR_ON_COUNT_QUERY","A Database Error Occured while counting result Rows ");

define("LANG_INTERNALS_ERROR_OCCURED_IN","Error has occured in  ");
define("LANG_INTERNALS_ERROR_PAGE","Error Page ");
define("LANG_INTERNALS_PROGRAM_ERROR_MESSAGE","Program Error Message  ");
define("LANG_INTERNALS_USER_ERROR_MESSAGE","User Error Message ");
define("LANG_INTERNALS_ERROR_IN","Error in  ");
define("LANG_INTERNALS_PLEASE_TRY_AGAIN","Please try again later  ");
define("LANG_INTERNALS_STOPPED_HERE"," has stopped at this Page. Please Try again.");

define("LANG_INTERNALS_TABLE_LOADER_ERROR","Table Loader Error");
define("LANG_INTERNALS_TABLE_NEED_TO_BE_CHOSEN","A Table  need to selected to instantiate a Table Object. Table was somehow null in this case.");
define("LANG_INTERNALS_PLEASE_SELECT_TABLE_AND_TRY_AGAIN","Please select a table and try again.");

define("LANG_INTERNALS_FRAMES_NEEDED","Sorry, You need a frames enabled browser to use this application.");
define("LANG_INTERNALS_FRAMES_NEEDED_DESC","Your browser does not seem to support frames !");

?>
