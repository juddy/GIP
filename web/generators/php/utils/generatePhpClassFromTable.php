<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<?
   include_once(CLASS_PLUGIN_LOADER);
   include_once(CLASS_TABLE);
   
   $thisPlugInLoader = new plugInLoader();
   
   $thisDb = $_REQUEST['db'];
   $thisTable = $_REQUEST['table'];

   $tableObject = new table($thisTable,$thisDb);
  
   
   $arguments['variables'] = $tableObject->getFieldNameArray();
   $arguments['functions'] = array();
   $arguments['className'] = strtolower($thisTable).ucfirst(strtolower(NAME_DATA_CONTAINER));

   $generatedCode = $thisPlugInLoader->loadPlugIn(
                            PLUGIN_PHP_CLASS_GENERATOR_NAME,
                            PLUGIN_PHP_CLASS_GENERATOR_CLASS,
                            $arguments
                    );

   highlight_string($generatedCode);
   
?>