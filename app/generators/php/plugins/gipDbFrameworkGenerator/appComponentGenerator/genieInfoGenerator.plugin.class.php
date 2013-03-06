<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
include_once(CLASS_PLUGIN_LOADER);
include_once(CLASS_PHP_CODE_BEAUTIFIER);
?>
<? 
class gipInfoGenerator extends commonGenieFramework
{

	function gipInfoGenerator($arguments)
	{
		$db = $arguments['db'];
		$table = $arguments['table'];

		$thisTable = new table($table,$db);
		$this->setTableObject($thisTable);


		$this->initializeGenieFramework();

	}


	function generate()
	{

		$thisPlugInLoader = new plugInLoader();

		$thisTable = $this->getTableObject();

		$arguments = "";
		$arguments['db'] = $thisTable->getDatabase();
		$arguments['table'] = $thisTable->getTableName();

		$arguments['variables'] = $thisTable->getFieldNameArray();
		$arguments['functions'] = array();
		$arguments['className'] = strtolower($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER));

		$generatedCode = $thisPlugInLoader->loadPlugIn(
		PLUGIN_PHP_CLASS_GENERATOR_NAME,
		PLUGIN_PHP_CLASS_GENERATOR_CLASS,
		$arguments
		);

		$this->appendToCode($generatedCode);


		$beautifulCode = codeBeautifier::beautify($this->getSourceCode());

		return $beautifulCode;
	}



}

?>