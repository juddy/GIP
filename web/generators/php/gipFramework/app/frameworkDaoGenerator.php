<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<?
   include_once(CLASS_PLUGIN_LOADER);
   $thisPlugInLoader = new plugInLoader();
   $arguments = array();
   $arguments['db'] = $_SESSION['db'];
   $arguments['table'] = $_SESSION['table'];

   $generatedCode = $thisPlugInLoader->loadPlugIn(
                            PPLUGIN_PHP_GENIE_APP_DAO_INSERT_GENERATOR_NAME,
                            PLUGIN_PHP_GENIE_APP_DAO_INSERT_GENERATOR_CLASS,
                            $arguments
                    );

   highlight_string($generatedCode);
   
?>