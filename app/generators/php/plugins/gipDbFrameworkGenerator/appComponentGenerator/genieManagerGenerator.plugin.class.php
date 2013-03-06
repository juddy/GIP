<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
include_once(CLASS_PHP_CODE_BEAUTIFIER);
?>
<? 
class gipManagerGenerator extends commonGenieFramework
{

	function gipManagerGenerator($arguments)
	{
		$db = $arguments['db'];
		$table = $arguments['table'];

		$thisTable = new table($table,$db);
		$this->setTableObject($thisTable);


		$this->initializeGenieFramework();

	}


	function generate()
	{
		$this->appendSuperHeader();
		$this->appendAppHeader();

		$code = "";
		$code .= "<?php\n";
		$code .= "include_once(CONFIG_FILE);\n";
		$code .= "include_once(CLASS_".strtoupper($this->getTableName())."_GENMANAGER);\n";
		$code .= "?>\n";

		$this->appendToCode($code);


		$this->appendToCode($this->generateManagerCode());


		$this->appendAppFooter();
		$this->appendSuperFoooter();

		$beautifulCode = codeBeautifier::beautify($this->getSourceCode());

		return $beautifulCode;
	}

	function generateManagerCode()
	{

		$generatedCode = "";
		$generatedCode .= "<?php \n";
		$generatedCode .= "// Class Representing the ".$this->getInfoName()." table \n";
		$generatedCode .= "// and DML operations on it from the database\n";
		$generatedCode .= "class ".$this->getTableName()."Manager extends ".$this->getTableName()."GenManager { \n\n";

		$generatedCode .= "\n // Put your customized Manager Code here \n";
		$generatedCode .= "// e.g function getCustomDataManager() { return \$customData; } \n\n\n";

		$generatedCode .= "} // end of ".$this->getTableName()."Manager Class\n\n";
		$generatedCode .= "?>";

		return $generatedCode;

	}

}

?>