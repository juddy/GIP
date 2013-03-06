<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<?
   include_once(CLASS_PLUGIN_LOADER);
   $thisPlugInLoader = new plugInLoader();
   
$variablesFromForm = rtrim(ltrim($_POST['variables']));
$functionsFromForm = rtrim(ltrim($_POST['functions']));
$className = rtrim(ltrim($_POST['className']));

$variableArray = explode("\n",$variablesFromForm);
$functionsArray = explode("\n",$functionsFromForm);   
   
   $arguments['variables'] = $variableArray;
   $arguments['functions'] = $functionsArray;
   $arguments['className'] = $className;

   $generatedCode = $thisPlugInLoader->loadPlugIn(
                            PLUGIN_PHP_CLASS_GENERATOR_NAME,
                            PLUGIN_PHP_CLASS_GENERATOR_CLASS,
                            $arguments
                    );

   highlight_string($generatedCode);
   
?>