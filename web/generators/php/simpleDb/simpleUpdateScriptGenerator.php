<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<?
   include_once(CLASS_PLUGIN_LOADER);
   $thisPlugInLoader = new plugInLoader();
   
   $arguments = array();
   $arguments['db'] = requestUtils::getRequestObject('db');
   $arguments['table'] = requestUtils::getRequestObject('table');
   $arguments['headerText'] = "";
   $arguments['footerText'] = "";
   
   $generatedCode = $thisPlugInLoader->loadPlugIn(
                            PLUGIN_PHP_SIMPLE_WEB_UPDATE_GENERATOR_NAME,
                            PLUGIN_PHP_SIMPLE_WEB_UPDATE_GENERATOR_CLASS,
                            $arguments
                    );

   highlight_string($generatedCode);
   
?>