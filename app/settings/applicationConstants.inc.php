<?

include_once("/pcg/app/settings/genieConfiguration.inc.php");

define("APPLICATION_NAME","phpCodeGenie");
define("APPLICATION_VERSION","3.0 Beta");
define("APPLICATION_VERSION_NUMBER","3.0.2");

// Default Values for Login Screen
define("DEFAULT_HOSTNAME","localhost");
define("DEFAULT_USER_NAME","root");


// Use tree to show databases and tables or not in left frame
// set to true or false 
define("SHOW_DB_TREE_LIST",false);

// Default Connection Settings
// if the HAVE AUTHENTICATION is set to false
// You can have phpCodeGenie always use the same account/password
// I.e.. you wont need to login anymore.. I would not reccomend it as its not secure
define("HAVE_AUTHENTICATION",true);  // true or false

// If you have set the HAVE_AUTHENTICATION to false, put parameters it should use to log in automatically
define("DATABASE_SERVER_TO_USE","mysql");
define("DATABASE_HOST", "hc-dev2.dev");
define("DATABASE_USER_NAME","root");
define("DATABASE_PASSWORD","Password");


if (substr(PHP_OS, 0, 3) == 'WIN') {
	define('OS_WINDOWS', true);
	define('OS_UNIX',    false);
} else {
	define('OS_WINDOWS', false);
	define('OS_UNIX',    true);
}

// REQUEST OR GET OR POST
define("DEFAULT_RETREIVE_METHOD","REQUEST");

// In RDBMS sysems where there is no notion of databases.. this file is used as conf file name
// when generating apps
define("DEFAULT_CONFIGURATION_FILE_NAME","defaultConfiguration");

define("DEFAULT_DIRECTORY_NAME_FOR_CRUD_CLASSES","crudClasses");
define("DEFAULT_DIRECTORY_NAME_FOR_CRUD_FRONT_END","forms");

// ALL IN UPPPER CASE
define("NAME_PAGE_PREFIX","PAGE");
define("NAME_CLASS_PREFIX","CLASS");
define("NAME_MANAGER","MANAGER");
define("NAME_DAO","DAO");
define("NAME_DATA_CONTAINER","INFO");
define("NAME_SEPARATOR","_");

define("NAME_WEB_ENTER","enter");
define("NAME_WEB_INSERT","insert");
define("NAME_WEB_DELETE","delete");
define("NAME_WEB_CONFIRM_DELETE","confirmDelete");
define("NAME_WEB_EDIT","edit");
define("NAME_WEB_UPDATE","update");
define("NAME_WEB_SEARCH","search");
define("NAME_WEB_POWER_SEARCH","powerSearch");
define("NAME_FORM_FIELD_SUFFIX","Field");
define("NAME_FORM_FIELD_PREFIX","this");

define("DB_COMMAND_QUERY","MYSQL_QUERY");
define("DB_COMMAND_NUMROWS","MYSQL_NUMROWS");
define("DB_COMMAND_GET_RESULT","MYSQL_RESULT");
define("DB_COMMAND_LAST_INSERT_ID","MYSQL_LAST_INSERTID");

define("GENERATED_CODE_DEFAULT_PATH",WEB_PATH.FILE_SEPARATOR."generatedCode");
define("GENERATED_FRAMEWORK_CODE_PATH",GENERATED_CODE_DEFAULT_PATH.FILE_SEPARATOR."framework");
define("GENERATED_SIMPLE_CODE_PATH",GENERATED_CODE_DEFAULT_PATH.FILE_SEPARATOR."simple");

define("FILES_TO_COPY_TEMPLATE_COMPONENT",SITE_PATH.FILE_SEPARATOR."filesCopyTemplate");
define("FILES_TO_COPY_FOR_PHP_COMPONENT",FILES_TO_COPY_TEMPLATE_COMPONENT.FILE_SEPARATOR."php");
define("FILES_TO_COPY_PHP_TEMPLATE_SIMPLE",FILES_TO_COPY_FOR_PHP_COMPONENT.FILE_SEPARATOR."simple");
define("FILES_TO_COPY_PHP_TEMPLATE_FRAMEWORK",FILES_TO_COPY_FOR_PHP_COMPONENT.FILE_SEPARATOR."genieFramework");

define("USER_PLUGINS_DIRECTORY",WEB_PATH.FILE_SEPARATOR."userPlugIns");

// set to true or false
// if set to true, all SQLs that will be run from application will be printed on screen
define("DEBUG_PRINT_SQL",false);
define("DEBUG_PRINT_COUNT_SQL",false);

// Set this to true if you want PCG Framework generated Code used php5 methods (more strict oop)
// Set to true or false
define("GENERATE_FOR_PHP5",false);


?>