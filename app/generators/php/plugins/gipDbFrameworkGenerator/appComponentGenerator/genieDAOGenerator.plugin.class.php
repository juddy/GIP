<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
include_once(CLASS_PHP_CODE_BEAUTIFIER);
?>
<? 
class gipDAOGenerator extends commonGenieFramework
{

	function gipDAOGenerator($arguments)
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
		$code .= "include_once(CLASS_".strtoupper($this->getTableName())."_GENDAO);\n";
		$code .= "?>\n";

		$this->appendToCode($code);


		$this->appendToCode($this->generateDaoCode());


		$this->appendAppFooter();
		$this->appendSuperFoooter();

		$beautifulCode = codeBeautifier::beautify($this->getSourceCode());

		return $beautifulCode;
	}

	function generateDaoCode()
	{

		$generatedCode = "";
		$generatedCode .= "<?php \n";
		$generatedCode .= "// Class Representing the ".$this->getInfoName()." table \n";
		$generatedCode .= "// and DML operations on it from the database\n";
		$generatedCode .= "class ".$this->getTableName()."DAO extends ".$this->getTableName()."GenDAO { \n\n";

		$generatedCode .= "\n // Put your customized DAO Code here \n";
		$generatedCode .= "// e.g function getCustomDataDao() { return \$customData; } \n\n\n";

		$generatedCode .= "} // end of ".$this->getTableName()."DAO Class\n\n";
		$generatedCode .= "?>";

		return $generatedCode;

	}

}

?>