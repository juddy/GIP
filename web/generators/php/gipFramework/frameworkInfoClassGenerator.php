<? 
include_once("/GIP/app/settings/gipConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<?
   include_once(CLASS_PLUGIN_LOADER);
   include_once(CLASS_TABLE);
   
   $thisPlugInLoader = new plugInLoader();

   $arguments = array();

   $thisDb = requestUtils::getRequestObject('db');
   $thisTable = requestUtils::getRequestObject('table');

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