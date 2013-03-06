<?
include_once("{APPLICATION_CONF_FILE}");
?>
<?
/**
* @desc This file constants used by the application
* @version 1.0  [2004-08-03]
* @author Nilesh Dosooye
* @copyright Copyright &copy; 2003, Nilesh Dosooye
*/

define("TRUE_PARM","y");
define("FALSE_PARM","n");

define("MAX_UPLOAD_SIZE","50000");

define("APPLICATION_NAME","{APPLICATION_NAME}");
define("APPLICATION_VERSION","{APPLICATION_VERSION}");
define("APPLICATION_ADMIN_EMAIL","{ADMINSITRATOR_EMAIL}");
define("APPLICATION_FROM_EMAIL","{FROM_EMAIL}");


define("ERROR_HANDLER_SEND_ADMIN_EMAIL_ON_ERROR",true);
define("ERROR_HANDLER_DISPLAY_ERROR_TO_USER",true);
define("ERROR_HANDLER_QUIT_PROGRAM_ON_ERROR",true);
define("ERROR_HANDLER_LOG_TO_FILE",true);
define("ERROR_HANDLER_LOG_FILE","error.txt");

define("DEBUG_PRINT_SQL",false);
define("DEBUG_PRINT_COUNT_SQL",false);

define("ALLOW_HTML_TAGS_IN_POST_GET_REQUESTS",false);

?>