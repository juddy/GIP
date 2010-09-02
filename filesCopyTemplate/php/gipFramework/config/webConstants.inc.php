<?
include_once("{APPLICATION_CONF_FILE}"); // This file should be put in the common include dir for PHP
?>
<?
/**
* @desc This constant file is to store all constants which are used in the front End.
* @version 1.0  [2004-08-03]
* @author Nilesh Dosooye
* @copyright Copyright &copy; 2003, Nilesh Dosooye
*/

// e.g define(WEB_PARAMETER,WEB_PATH.FILE_SEPARATOR."includeFileName.inc.php");

     define("WEB_COMMON_COMPONENT",WEB_PATH.FILE_SEPARATOR."common");
     define("PAGE_HEADER",WEB_COMMON_COMPONENT.FILE_SEPARATOR."commonHeader.php");
     define("PAGE_FOOTER",WEB_COMMON_COMPONENT.FILE_SEPARATOR."commonFooter.php");
     

     define("URL_STYLE_SHEET",URL_ADDRESS.WEB_SEPARATOR."common/styleSheet/style.css");
     define("URL_COMMON_JAVA_SCRIPT",URL_ADDRESS.WEB_SEPARATOR."common/javascript/commonJavaScript.js");
     define("URL_IMAGE_FOLDER",URL_ADDRESS.WEB_SEPARATOR."images");
     define("URL_JAVASCRIPT_VALIDATOR",URL_ADDRESS.WEB_SEPARATOR."common/javascript/formValidator/javascriptFormValidator.js");
     
     $today = date("Y-m-d");
     $dateTime = date("Y-m-d h:i:s");
     $userIpAddress=getenv("remote_addr");

     define("DEFAULT_ROWS_PER_PAGE","50");
     define("DEFAULT_SEARCH_CONDITION"," and ");
    
     define("ROW_COLOR1","#FFFFFF");
     define("ROW_COLOR2","#FFCCFF");

?>