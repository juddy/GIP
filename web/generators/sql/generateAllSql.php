<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<?
include_once(CLASS_PLUGIN_LOADER);
include_once(CLASS_PHP_CODE_BEAUTIFIER);


$thisCodeBeautifier = new codeBeautifier();
$thisPlugInLoader = new plugInLoader();

$arguments['db'] = $_REQUEST['db'];
$arguments['table'] = $_REQUEST['table'];

/*
$insertSQL = $thisPlugInLoader->loadPlugIn(
PLUGIN_SQL_INSERT_GENERATOR_NAME,
PLUGIN_SQL_INSERT_GENERATOR_CLASS,
$arguments
);


echo "<h2>Insert SQL</h2>";
$thisCodeBeautifier->printBeautifulSQL($insertSQL);
echo "<hr>";


$updateSQL = $thisPlugInLoader->loadPlugIn(
PLUGIN_SQL_UPDATE_GENERATOR_NAME,
PLUGIN_SQL_UPDATE_GENERATOR_CLASS,
$arguments
);


echo "<h2>Update SQL</h2>";
$thisCodeBeautifier->printBeautifulSQL($updateSQL);
echo "<hr>";

$deleteSQL = $thisPlugInLoader->loadPlugIn(
PLUGIN_SQL_DELETE_GENERATOR_NAME,
PLUGIN_SQL_DELETE_GENERATOR_CLASS,
$arguments
);


echo "<h2>Delete SQL</h2>";
$thisCodeBeautifier->printBeautifulSQL($deleteSQL);
echo "<hr>";

$selectSQL = $thisPlugInLoader->loadPlugIn(
PLUGIN_SQL_SELECT_GENERATOR_NAME,
PLUGIN_SQL_SELECT_GENERATOR_CLASS,
$arguments
);


echo "<h2>Select SQL</h2>";
$thisCodeBeautifier->printBeautifulSQL($selectSQL);
echo "<hr>";



$createSQL = $thisPlugInLoader->loadPlugIn(
PLUGIN_SQL_CREATE_GENERATOR_NAME,
PLUGIN_SQL_CREATE_GENERATOR_CLASS,
$arguments
);


echo "<h2>Create SQL</h2>";
$thisCodeBeautifier->printBeautifulSQL($createSQL);

echo "<hr>";
*/
$populatedInsert = $thisPlugInLoader->loadPlugIn(
PLUGIN_SQL_POPULATED_INSERT_GENERATOR_NAME,
PLUGIN_SQL_POPULATED_INSERT_GENERATOR_CLASS,
$arguments
);


echo "<h2>Insert SQL Statements for all rows in your Table</h2>";
$thisCodeBeautifier->printBeautifulSQL($populatedInsert );

//echo "<hr>";


?>