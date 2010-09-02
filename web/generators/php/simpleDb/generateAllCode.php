<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<?
include_once(CLASS_DATABASE_QUERY);
include_once(CLASS_PLUGIN_LOADER);
$thisPlugInLoader = new plugInLoader();
$thisDbQuery = new databaseQuery();

   $arguments = array();
   $arguments['headerText'] = "";
   $arguments['footerText'] = "";
   
$arguments['db'] = requestUtils::getRequestObject('db');


$thisDbQuery->useDatabase(requestUtils::getRequestObject('db'));
$allTables = $thisDbQuery->getTables();

for ($a=0;$a<count($allTables);$a++)
{

	$arguments['table'] = $allTables[$a];
	echo "<h2>".$arguments['table']."</h2>";

	$generatedInsertCode = $thisPlugInLoader->loadPlugIn(
	PLUGIN_PHP_SIMPLE_WEB_INSERT_GENERATOR_NAME,
	PLUGIN_PHP_SIMPLE_WEB_INSERT_GENERATOR_CLASS,
	$arguments
	);


	$generatedDeleteCode = $thisPlugInLoader->loadPlugIn(
	PLUGIN_PHP_SIMPLE_WEB_DELETE_GENERATOR_NAME,
	PLUGIN_PHP_SIMPLE_WEB_DELETE_GENERATOR_CLASS,
	$arguments
	);


	$generatedUpdateCode = $thisPlugInLoader->loadPlugIn(
	PLUGIN_PHP_SIMPLE_WEB_UPDATE_GENERATOR_NAME,
	PLUGIN_PHP_SIMPLE_WEB_UPDATE_GENERATOR_CLASS,
	$arguments
	);


	$generatedListerCode = $thisPlugInLoader->loadPlugIn(
	PLUGIN_PHP_SIMPLE_WEB_LISTER_GENERATOR_NAME,
	PLUGIN_PHP_SIMPLE_WEB_LISTER_GENERATOR_CLASS,
	$arguments
	);



	highlight_string($generatedInsertCode);
	echo "<hr>";

	highlight_string($generatedDeleteCode);
	echo "<hr>";

	highlight_string($generatedUpdateCode);
	echo "<hr>";

	highlight_string($generatedListerCode);
	echo "<hr>";

}

?>