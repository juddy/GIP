<? 
include_once("/GIP/app/settings/gipConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<?
   include_once(CLASS_PLUGIN_LOADER);
   $thisPlugInLoader = new plugInLoader();
   $arguments = array();
   $arguments['db'] = $_SESSION['db'];
   $arguments['table'] = $_SESSION['table'];

   $generatedCode = $thisPlugInLoader->loadPlugIn(
                            PLUGIN_PHP_GENIE_COMMONPAGES_GENERATOR_NAME,
                            PLUGIN_PHP_GENIE_COMMONPAGES_GENERATOR_CLASS,
                            $arguments
                    );

   highlight_string($generatedCode);
   
?>