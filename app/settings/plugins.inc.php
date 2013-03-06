<?
   
      define("PLUGIN_GENERATORS_COMPONENT",APP_PATH.FILE_SEPARATOR."generators");

      // PHP PLUGINS
      include_once("phpPlugins.inc.php");      
      
      // JAVA PLUGINS
      include_once("javaPlugins.inc.php");
      
      // SQL PLUGINS
      include_once("sqlPlugins.inc.php");      
      
     
      define("PLUGIN_ADVANCED_INSERT","mysql");
      define("PLUGIN_ADVANCED_INSERT_PATH","mysql");      

?>