<?
include_once("{APPLICATION_CONF_FILE}"); // This file should be put in the common include dir for PHP
?>
<?
     /**
      * @desc This configuration file include all necessary files that is needed by the system. It is called in all pages.
      * @version 1.0  [2004-08-03]
      * @author Nilesh Dosooye
      * @copyright Copyright &copy; 2003, Nilesh Dosooye
     */

     
     
     // set to true or false depending on whehter you want to know the time it took 
     // to execute the page show up at the bottom of the page
     define("HAVE_PAGE_TIMER",true);

     // Database Configuration Parameters
     // Connection Settings, Table and Field Constants
     include_once(CONFIG_COMPONENT.FILE_SEPARATOR."databaseConfiguration.inc.php"); 

     // Constants file used by the application general
     include_once(CONFIG_COMPONENT.FILE_SEPARATOR."applicationConstants.inc.php");     
     
     // As there's no package structure yet in PHP (12/03/2003)
     // We will definite every class paths in this file
     include_once(CONFIG_COMPONENT.FILE_SEPARATOR."classConstants.inc.php");     
     
     // All front end related constants - header, footer, style sheet, results etc.. 
     include_once(CONFIG_COMPONENT.FILE_SEPARATOR."webConstants.inc.php");  
     
     // includes from web pages.. includes need relative paths rather then http address
     include_once(CONFIG_COMPONENT.FILE_SEPARATOR."webIncludes.inc.php");  
     
     // All front end related constants - header, footer, style sheet, results etc.. 
     include_once(CONFIG_COMPONENT.FILE_SEPARATOR."pageConstants.inc.php");  
     
 ?>