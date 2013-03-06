<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<?
include_once(CLASS_PLUGIN_LOADER);
include_once(CLASS_PHP_CODE_BEAUTIFIER);



$thisCodeBeautifier = new codeBeautifier();
$thisPlugInLoader = new plugInLoader();

$fieldNames= $_REQUEST['fieldNames'];

for ($a=0;$a<count($fieldNames);$a++)
{
	$fieldTypes[$fieldNames[$a]] = $_REQUEST["fieldType".$fieldNames[$a]];
	$fieldLabels[$fieldNames[$a]] = $_REQUEST["label".$fieldNames[$a]];
}

$arguments['db'] = $_REQUEST['db'];
$arguments['table'] = $_REQUEST['table'];
$arguments['fieldTypes'] = $fieldTypes;
$arguments['fieldLabels'] = $fieldLabels;
$arguments['packageRoot'] = $_REQUEST['packageRoot'];


$generatedCode = $thisPlugInLoader->loadPlugIn(
PLUGIN_JAVA_EJB_BEAN_GENERATOR_NAME,
PLUGIN_JAVA_EJB_BEAN_GENERATOR_CLASS,
$arguments
);


echo "<h2>EJB INFO Bean</h2>";

$thisCodeBeautifier->printBeautifulJavaCode($generatedCode);


echo "<hr>";

$generatedCode1 = $thisPlugInLoader->loadPlugIn(
PLUGIN_JAVA_EJB_GENERATOR_NAME,
PLUGIN_JAVA_EJB_GENERATOR_CLASS,
$arguments
);

echo "<h2>EJB</h2>";

$thisCodeBeautifier->printBeautifulJavaCode($generatedCode1);


echo "<hr>";

$generatedCode2 = $thisPlugInLoader->loadPlugIn(
PLUGIN_JAVA_EJB_LOCAL_GENERATOR_NAME,
PLUGIN_JAVA_EJB_LOCAL_GENERATOR_CLASS,
$arguments
);

echo "<h2>EJB LOCAL</h2>";

$thisCodeBeautifier->printBeautifulJavaCode($generatedCode2);


echo "<hr>";


echo "<h2>EJB LOCAL HOME</h2>";

$generatedCode3 = $thisPlugInLoader->loadPlugIn(
PLUGIN_JAVA_EJB_LOCAL_HOME_GENERATOR_NAME,
PLUGIN_JAVA_EJB_LOCAL_HOME_GENERATOR_CLASS,
$arguments
);


$thisCodeBeautifier->printBeautifulJavaCode($generatedCode3);


echo "<hr>";

echo "<h2>TABLE CRUD</h2>";

$generatedCode4 = $thisPlugInLoader->loadPlugIn(
PLUGIN_JAVA_EJB_CRUD_GENERATOR_NAME,
PLUGIN_JAVA_EJB_CRUD_GENERATOR_CLASS,
$arguments
);


$thisCodeBeautifier->printBeautifulJavaCode($generatedCode4);


//$thisCodeBeautifier->printBeautifulJavaCode($generatedCode5);

?>