<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
?>
<?
   include_once(CLASS_PLUGIN_LOADER);
   $thisPlugInLoader = new plugInLoader();
   
   // Building Arguments Array to pass to Plugin
   $arguments['db'] = $_REQUEST['db'];
   $arguments['table'] = $_REQUEST['table'];

   // Loading and Getting the generated Code from the plugin
   $generatedCode = $thisPlugInLoader->loadPlugIn("myDbPlugin",
                                                  "./myDbPlugin.class.php",
							                       $arguments
                                                  );
												  
   // I preffer highlight_string($generatedCode) if its php code
   echo $generatedCode; 
   
?>