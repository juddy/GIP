<? 
include_once("/GIP/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
?>
<?
class gipDAOPopulateIntoInfoGenerator extends commonGenieFramework
{


	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc gipDAOInsertGenerator :  put function description here ...
	*/
	function gipDAOPopulateIntoInfoGenerator ($arguments)
	{

		$db = $arguments['db'];
		$table = $arguments['table'];

		$thisTable = new table($table,$db);
		$this->setTableObject($thisTable);


		$this->initializeGenieFramework();

	}

	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc generate :  put function description here ...
	*/
	function generate()
	{
		$this->generatePopulateFromResultSet();

		return $this->getSourceCode();


	}

	function generatePopulateFromResultSet()
	{

		$thisTable = $this->getTableObject();
		$fieldNameArray = $thisTable->getFieldNameArray();

		$returnComment = "returns a populated instance of (".$this->getInfoName().") which it populates from an ADODB ResultSet ";
		$paramComment = "an adodb ResultSet";
		$descComment = "Populates all matching fields of (".$this->getInfoName().") object from a resultSet";
		$comments = $this->getComments($returnComment,$paramComment,$descComment);

		$code = "";
		$code .= $comments;

		if (GENERATE_FOR_PHP5)
		{
			$code .= "protected ";
		}

		$code .= "function populate".ucfirst($this->getInfoName())."FromResultSet(\$result) \n";
		$code .= "{ \n\n";


		$code .= "           \$this".ucfirst($this->getInfoName())." = new ".$this->getInfoName()."();\n\n";

		for ($a = 0; $a < count($fieldNameArray); $a++) {

			$code .= "           \$this".ucfirst($this->getInfoName())."->set".ucfirst($fieldNameArray[$a])."(\$result->fields[FIELD_".strtoupper($this->getTableName())."_".strtoupper($fieldNameArray[$a])."]); \n";
		}

		$code .= "\n           return \$this".ucfirst($this->getInfoName()).";\n\n";

		$code .= "} // End Function populate \n";


		$this->appendToCode($code);
	}

}

?>