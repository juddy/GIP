<?

/**
* @desc This file contains all the pages used by the system. No pages are hardcoded. All physical page locations are saved in variables in this files
* @version 1.0 [2003-09-27]
* @author Nilesh Dosooye
* @copyright Copyright &copy; 2003", Nilesh Dosooye
*/

include_once("/pcg/app/settings/genieConfiguration.inc.php");



define("PAGE_MAIN_PAGE",URL_ADDRESS.WEB_SEPARATOR."index.php");
define("PAGE_INVOKE_GENIE",URL_ADDRESS.WEB_SEPARATOR."common".WEB_SEPARATOR."invokeGenie.php");
define("PAGE_LOGOUT_GENIE",URL_ADDRESS.WEB_SEPARATOR."common".WEB_SEPARATOR."byebyeGenie.php");
define("PAGE_AUTHOR_BIO",URL_ADDRESS.WEB_SEPARATOR."common".WEB_SEPARATOR."authorBio.php");


define("PAGE_FRAME_COMPONENT",URL_ADDRESS.WEB_SEPARATOR."frames");

define("PAGE_FRAME_GENCHOOSER_COMPONENT",PAGE_FRAME_COMPONENT.WEB_SEPARATOR."genChooser");
define("PAGE_FRAME_LEFTBAR_COMPONENT",PAGE_FRAME_COMPONENT.WEB_SEPARATOR."leftFrame");
define("PAGE_FRAME_MAINWINDOW_COMPONENT",PAGE_FRAME_COMPONENT.WEB_SEPARATOR."mainWindow");
define("PAGE_FRAME_TOPBAR_COMPONENT",PAGE_FRAME_COMPONENT.WEB_SEPARATOR."topbar");

define("PAGE_FRAME_LEFT_BAR",PAGE_FRAME_LEFTBAR_COMPONENT.WEB_SEPARATOR."leftBar.php");
define("PAGE_FRAME_LEFT_DB_CHOOSER",PAGE_FRAME_LEFTBAR_COMPONENT.WEB_SEPARATOR."databaseChooser.php");
define("PAGE_FRAME_LEFT_GEN_CHOOSER",PAGE_FRAME_LEFTBAR_COMPONENT.WEB_SEPARATOR."genChooser.php");
define("PAGE_FRAME_TOP_BAR",PAGE_FRAME_TOPBAR_COMPONENT.WEB_SEPARATOR."topBar.php");

define("PAGE_FRAME_RIGHT_MAIN_GENERATOR",PAGE_FRAME_MAINWINDOW_COMPONENT.WEB_SEPARATOR."mainGenerator.php");
define("PAGE_FRAME_RIGHT_MAINDESCRIPTION",PAGE_FRAME_MAINWINDOW_COMPONENT.WEB_SEPARATOR."mainDescription.php");

define("PAGE_FRAME_RIGHT_GEN_CHOOSER",PAGE_FRAME_GENCHOOSER_COMPONENT.WEB_SEPARATOR."genChooser.php");

define("PAGE_FORMS_COMPONENT",URL_ADDRESS.WEB_SEPARATOR."forms");
define("PAGE_ASSOCIATE_DBFIELDS_WITH_FORMTYPE",PAGE_FORMS_COMPONENT.WEB_SEPARATOR."associateDbFieldWithFormType.php");

define("PAGE_GENERATORS_COMPONENT",URL_ADDRESS.WEB_SEPARATOR."generators");


define("PAGE_GENERATOR_PHP_COMPONENT",PAGE_GENERATORS_COMPONENT.WEB_SEPARATOR."php");
define("PAGE_GENERATOR_JAVA_COMPONENT",PAGE_GENERATORS_COMPONENT.WEB_SEPARATOR."java");
define("PAGE_GENERATOR_SQL_COMPONENT",PAGE_GENERATORS_COMPONENT.WEB_SEPARATOR."sql");


// SourceForge Pages
define("PAGE_SOURCEFORGE_PROJECT_HOMEPAGE_URL","http://phpcodegenie.sourceforge.net/");     
define("PAGE_SOURCEFORGE_PROJECT_URL","http://sourceforge.net/projects/phpcodegenie/");
define("PAGE_SOURCEFORGE_DOWNLOAD_URL","http://sourceforge.net/project/showfiles.php?group_id=71968&release_id=135331");
define("PAGE_SOURCEFORGE_DONATE_URL","http://sourceforge.net/donate/index.php?group_id=71968");     
define("PAGE_SOURCEFORGE_PCG3_HELP_FORUM_URL","http://sourceforge.net/forum/forum.php?forum_id=397705");
define("PAGE_SOURCEFORGE_FEEDBACK_URL","http://phpcodegenie.sourceforge.net/feedBackForm.php");
define("PAGE_SOURCEFORGE_PLUGIN_DEVELOPMENT_URL","http://phpcodegenie.sourceforge.net/pluginDevelopment.php");
define("PAGE_SOURCEFORGE_SUBMIT_A_BUG_URL","http://sourceforge.net/tracker/?func=add&group_id=71968&atid=532956");
define("PAGE_SOURCEFORGE_SUBMIT_A_DOCUMENTATION_URL","http://sourceforge.net/docman/new.php?group_id=71968");
define("PAGE_SOURCEFORGE_STATS_URL","http://sourceforge.net/project/stats/?group_id=71968");
define("PAGE_UPDATE_SERVER1_URL","http://phpcodegenie.sourceforge.net/uf/uf1.php");
define("PAGE_UPDATE_SERVER2_URL","http://phpcodegenie.sourceforge.net/uf/uf2.php");
define("PAGE_DEMO_URL","http://phpcodegenie.sourceforge.net/pcg/web/");
define("PAGE_SOURCEFORGE_WHAT_IS_PCG_URL","http://phpcodegenie.sourceforge.net/pcgFramework.php?print=y");


// GENIE FRAMEWORK GENERATORS

define("PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT",PAGE_GENERATOR_PHP_COMPONENT.WEB_SEPARATOR."genieFramework");


define("PAGE_GENERATOR_PHP_GFRAMEWORK_CHOOSE_FIELDS_FOR_ENTER_FORM",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkChooseFieldsForEnterForm.php");
define("PAGE_GENERATOR_PHP_GFRAMEWORK_ENTER_FORM",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkEnterFormGenerator.php");
define("PAGE_GENERATOR_PHP_GFRAMEWORK_INSERT_SCRIPT",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkInsertScriptGenerator.php");

define("PAGE_GENERATOR_PHP_GFRAMEWORK_EDIT_FORM",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkEditFormGenerator.php");
define("PAGE_GENERATOR_PHP_GFRAMEWORK_UPDATE_SCRIPT",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkUpdateScriptGenerator.php");

define("PAGE_GENERATOR_PHP_GFRAMEWORK_DELETE_SCRIPT",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkDeleteScriptGenerator.php");
define("PAGE_GENERATOR_PHP_GFRAMEWORK_DELETE_CONFIRMATION_SCRIPT",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkDeleteConfirmationScriptGenerator.php");

define("PAGE_GENERATOR_PHP_GFRAMEWORK_POWER_SEARCH_FORM",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkPowerSearchFormGenerator.php");
define("PAGE_GENERATOR_PHP_GFRAMEWORK_POWER_SEARCH_SCRIPT_SCRIPT",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkPowerSearchScriptGenerator.php");

define("PAGE_GENERATOR_PHP_GFRAMEWORK_VIEW_ONE_RECORD",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkViewOneRecordScriptGenerator.php");
define("PAGE_GENERATOR_PHP_GFRAMEWORK_LIST_ALL_RECORDS",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkListAllRecordsScriptGenerator.php");
define("PAGE_GENERATOR_PHP_GFRAMEWORK_CRUD_GRID_GENERATOR",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkCrudGridGenerator.php");


define("PAGE_GENERATOR_PHP_GFRAMEWORK_GENERATE_GENMANAGER_CODE",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkGenManagerCodeGenerator.php");
define("PAGE_GENERATOR_PHP_GFRAMEWORK_GENERATE_GENDAO_CODE",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkGenDAOCodeGenerator.php");

define("PAGE_GENERATOR_PHP_GFRAMEWORK_GENERATE_MANAGER_CODE",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkManagerCodeGenerator.php");
define("PAGE_GENERATOR_PHP_GFRAMEWORK_GENERATE_DAO_CODE",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkDAOCodeGenerator.php");
define("PAGE_GENERATOR_PHP_GFRAMEWORK_GENERATE_INFO_CODE",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkInfoClassGenerator.php");

define("PAGE_GENERATOR_PHP_GFRAMEWORK_CHOOSE_WHAT_TO_GENERATE",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkChooseWhatToGenerate.php");
define("PAGE_GENERATOR_PHP_GFRAMEWORK_PROCESS_WHAT_TO_GENERATE",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkProcessWhatToGenerate.php");

define("PAGE_GENERATOR_PHP_GFRAMEWORK_GENERATE_ENTIRE_GFRAMEWORK",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."generateEntireFramework.php");

// Simple PHP Db
define("PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT",PAGE_GENERATOR_PHP_COMPONENT.WEB_SEPARATOR."simpleDb");

define("PAGE_GENERATOR_PHP_SIMPLE_INSERT_SCRIPT",PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT.WEB_SEPARATOR."simpleInsertScriptGenerator.php");
define("PAGE_GENERATOR_PHP_SIMPLE_UPDATE_SCRIPT",PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT.WEB_SEPARATOR."simpleUpdateScriptGenerator.php");
define("PAGE_GENERATOR_PHP_SIMPLE_DELETE_SCRIPT",PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT.WEB_SEPARATOR."simpleDeleteScriptGenerator.php");
define("PAGE_GENERATOR_PHP_SIMPLE_DELETE_CONFIRMATION_SCRIPT",PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT.WEB_SEPARATOR."simpleDeleteConfirmationScriptGenerator.php");
define("PAGE_GENERATOR_PHP_SIMPLE_VIEW_ONE_RECORD_SCRIPT",PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT.WEB_SEPARATOR."simpleViewOneRecordScriptGenerator.php");
define("PAGE_GENERATOR_PHP_SIMPLE_EDIT_FORM",PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT.WEB_SEPARATOR."simpleEditFormGenerator.php");
define("PAGE_GENERATOR_PHP_SIMPLE_ENTER_FORM",PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT.WEB_SEPARATOR."simpleEnterFormGenerator.php");
define("PAGE_GENERATOR_PHP_SIMPLE_LISTER_SCRIPT",PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT.WEB_SEPARATOR."simpleListerScriptGenerator.php");
define("PAGE_GENERATOR_PHP_SIMPLE_CRUD_GRID_SCRIPT",PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT.WEB_SEPARATOR."simpleCrudGridScriptGenerator.php");

define("PAGE_GENERATOR_PHP_SIMPLE_SEARCH_BY_KEYWORD_FORM",PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT.WEB_SEPARATOR."simpleSearchByKeywordFormScriptGenerator.php");
define("PAGE_GENERATOR_PHP_SIMPLE_SEARCH_BY_KEYWORD_SCRIPT",PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT.WEB_SEPARATOR."simpleSearchByKeywordScriptGenerator.php");

define("PAGE_GENERATOR_PHP_SIMPLE_POWER_SEARCH_FORM",PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT.WEB_SEPARATOR."simplePowerSearchFormGenerator.php");
define("PAGE_GENERATOR_PHP_SIMPLE_POWER_SEARCH_SCRIPT",PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT.WEB_SEPARATOR."simplePowerSearchScriptGenerator.php");
define("PAGE_GENERATOR_PHP_SIMPLE_MAIN_INDEX",PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT.WEB_SEPARATOR."simpleMainIndexGenerator.php");

define("PAGE_GENERATOR_PHP_SIMPLE_CHOOSEFIELDS_FOR_ENTER",PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT.WEB_SEPARATOR."chooseFieldsForEnterForm.php");
define("PAGE_GENERATOR_PHP_SIMPLE_CHOOSEFIELDS_FOR_EDIT",PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT.WEB_SEPARATOR."chooseFieldsForEditForm.php");

define("PAGE_GENERATOR_PHP_SIMPLE_CHOOSE_WHAT_TO_GENERATE",PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT.WEB_SEPARATOR."chooseWhatToGenerate.php");
define("PAGE_GENERATOR_PHP_SIMPLE_PROCESS_WHAT_TO_GENERATE",PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT.WEB_SEPARATOR."processWhatToGenerate.php");

define("PAGE_GENERATOR_PHP_SIMPLE_GENERATE_ALL_CODE",PAGE_GENERATOR_PHP_SIMPLEGENERATOR_COMPONENT.WEB_SEPARATOR."generateAllCode.php");



// COMMON PHP
define("PAGE_GENERATOR_PHP_COMMON_FRAMEWORK_COMPONENT",PAGE_GENERATOR_PHP_GENIEFRAMEWORK_COMPONENT.WEB_SEPARATOR."common");
define("PAGE_GENERATOR_PHP_GFRAMEWORK_COMMON_DB",PAGE_GENERATOR_PHP_COMMON_FRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkCommonDbConstantsGenerator.php");
define("PAGE_GENERATOR_PHP_GFRAMEWORK_COMMON_PAGE",PAGE_GENERATOR_PHP_COMMON_FRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkCommonPageConstantsGenerator.php");
define("PAGE_GENERATOR_PHP_GFRAMEWORK_COMMON_CLASS",PAGE_GENERATOR_PHP_COMMON_FRAMEWORK_COMPONENT.WEB_SEPARATOR."frameworkCommonClassConstantsGenerator.php");


// php Utils
define("PAGE_GENERATOR_PHP_UTILS_COMPONENT",PAGE_GENERATOR_PHP_COMPONENT.WEB_SEPARATOR."utils");

define("PAGE_PHP_CLASS_MAKER_FORM",PAGE_GENERATOR_PHP_UTILS_COMPONENT.WEB_SEPARATOR."phpClassMakerForm.php");
define("PAGE_GENERATE_PHP_CLASS",PAGE_GENERATOR_PHP_UTILS_COMPONENT.WEB_SEPARATOR."generatePhpClass.php");
define("PAGE_GENERATE_PHP_CLASS_FROM_TABLE",PAGE_GENERATOR_PHP_UTILS_COMPONENT.WEB_SEPARATOR."generatePhpClassFromTable.php");


// User Plugins
define("PAGE_USER_PLUGINS_COMPONENT",URL_ADDRESS.WEB_SEPARATOR."userPlugIns");
define("PAGE_PLUGIN_SCAN_FOR_PLUGINS",PAGE_USER_PLUGINS_COMPONENT.WEB_SEPARATOR."scanForPlugIns.php");
define("PAGE_PLUGIN_RUN_PLUGIN",PAGE_USER_PLUGINS_COMPONENT.WEB_SEPARATOR."runUserPlugIn.php");


?>