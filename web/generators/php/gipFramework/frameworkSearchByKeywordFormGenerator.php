<? 
include_once("/GIP/app/settings/gipConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<?
   include_once(CLASS_PLUGIN_LOADER);
   $thisPlugInLoader = new plugInLoader();
   $arguments = array();
   $arguments['db'] = requestUtils::getRequestObject('db');
   $arguments['table'] = requestUtils::getRequestObject('table');

   $generatedCode = $thisPlugInLoader->loadPlugIn(
                            PLUGIN_PHP_GENIE_WEB_INSERT_GENERATOR_NAME,
                            PLUGIN_PHP_GENIE_WEB_INSERT_GENERATOR_CLASS,
                            $arguments
                    );

   highlight_string($generatedCode);
   
?>