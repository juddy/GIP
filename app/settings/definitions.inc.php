<?
     /**
      * @desc This configuration file include all necessary files that is needed by the system. It is called in all pages.
      * @version 1.0 [2003-09-27]
      * @author Nilesh Dosooye
      * @copyright Copyright &copy; 2003, Nilesh Dosooye
     */

     include_once("/pcg/app/settings/genieConfiguration.inc.php");  // This file should be put in the common include dir for PHP
      
     // Constants file used by the application general
     include_once(CONFIG_COMPONENT.FILE_SEPARATOR."applicationConstants.inc.php");     
     
     // As there's no package structure yet in PHP (12/03/2003)
     // We will definite every class paths in this file
     include_once(CONFIG_COMPONENT.FILE_SEPARATOR."classDefinitions.inc.php");     
     
     // All front end related constants - header, footer, style sheet, results etc.. 
     include_once(CONFIG_COMPONENT.FILE_SEPARATOR."webConstants.inc.php");  
     
     // includes from web pages.. includes need relative paths rather then http address
     include_once(CONFIG_COMPONENT.FILE_SEPARATOR."webIncludes.inc.php");  
     
     // All front end related constants - header, footer, style sheet, results etc.. 
     include_once(CONFIG_COMPONENT.FILE_SEPARATOR."pageConstants.inc.php");  
     
     // Generator PlugIns 
     include_once(CONFIG_COMPONENT.FILE_SEPARATOR."plugins.inc.php");  
          
     // Tools 
     include_once(CONFIG_COMPONENT.FILE_SEPARATOR."toolsConstants.inc.php");  

     // Language File
     include_once(LANGUAGE_FILE);      
     
?>