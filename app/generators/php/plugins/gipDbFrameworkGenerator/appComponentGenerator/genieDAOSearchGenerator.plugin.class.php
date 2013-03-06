<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
?>
<?
class gipDAOSearchGenerator extends commonGenieFramework
{


	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc gipDAOInsertGenerator :  put function description here ...
	*/
	function gipDAOSearchGenerator ($arguments)
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

		$this->generateSearchCode();

		return $this->getSourceCode();


	}

	function generateSearchCode()
	{

		$returnComment = "returns a populated instance of (".$this->getInfoName().") which it populates from an ADODB ResultSet ";
		$paramComment = "an adodb ResultSet";
		$descComment = "Populates all matching fields of (".$this->getInfoName().") object from a resultSet";
		$comments = $this->getComments($returnComment,$paramComment,$descComment);

		$code = "";
		$code .= $comments;

		if (GENERATE_FOR_PHP5)
		{
			//$code .= "protected ";
		}

		$code .= "function search".ucfirst($this->getTableName())."(\$searchItems=\"\",\$start=\"\",\$limit=\"\",\$fieldsToReturn=\"\",\n";
		$code .= "                                                  \$sortByField=\"\",\$sortOrder=\"\")\n";
		$code .= "{ \n\n";



		$code .= "		\$thisSearchUtils = new searchUtils();\n\n";

		$code .= "		\$thisSearchUtils->setSearchItems(\$searchItems);\n";
		$code .= "		\$thisSearchUtils->setStart(\$start);\n";
		$code .= "		\$thisSearchUtils->setLimit(\$limit);\n";
		$code .= "		\$thisSearchUtils->setFieldsToReturn(\$fieldsToReturn);\n";
		$code .= "		\$thisSearchUtils->setOrderByField(\$sortByField);\n";
		$code .= "		\$thisSearchUtils->setOrderDirection(\$sortOrder);\n";
		$code .= "		\$thisSearchUtils->setTable(TABLE_".strtoupper($this->getTableName()).");\n";




		$code .= "		\$sql = \$thisSearchUtils->getSearchSQL();\n\n";

		$code .= "         // Executing Query \n";
		$code .= "         \$thisDatabaseQuery = new databaseQuery(); \n";
		$code .= "         \$thisDatabaseQuery->setSqlQuery(\$sql); \n";
		$code .= "         \$thisDatabaseQuery->setStart(\$start);\n";
		$code .= "         \$thisDatabaseQuery->setLimit(\$limit); \n";
		$code .= "         \$result = \$thisDatabaseQuery->executeQuery(); \n\n";
		$code .= "          \$thisDatabaseResultsInfo = new databaseResultsInfo(); \n\n";
		
		$code .= "\t\tif (\$result==false)\n";
		$code .= "\t\t{\n\n";
		$code .= "\t\t\treturn \$thisDatabaseResultsInfo;\n\n";
		$code .= "\t\t}\n";
		$code .= "\t\telse\n";
		$code .= "\t\t{\n\n";

		$code .= "     // Getting ResultSet from Query\n";
		$code .= "     \$resultSet = \$thisDatabaseQuery->getResultSet();\n";
		$code .= "     \$this".ucfirst($this->getInfoName())."Array = array(); \n";
		$code .= "     \$this".ucfirst($this->getInfoName())." = new ".$this->getInfoName()."();\n\n";
		$code .= "     while (!\$resultSet->EOF) \n";
		$code .= "     { \n\n";

		$code .= "           \$this".ucfirst($this->getInfoName())." = \$this->populate".ucfirst($this->getInfoName())."FromResultSet(\$resultSet);\n";
		$code .= "           \$this".ucfirst($this->getInfoName())."Array[] = \$this".ucfirst($this->getInfoName()).";\n\n";
		$code .= "           \$resultSet->MoveNext(); \n\n";

		$code .= "     } // end while \n\n";



		$code .= "     \$thisDatabaseResultsInfo->setResultsArray( \$this".ucfirst($this->getInfoName())."Array);\n";
		$code .= "     \$thisDatabaseResultsInfo->setTotalNumberOfRows(\$thisDatabaseQuery->getTotalRows());\n";
		$code .= "     \$thisDatabaseResultsInfo->setStart(\$thisDatabaseQuery->getStart());\n";
		$code .= "     \$thisDatabaseResultsInfo->setLimit(\$thisDatabaseQuery->getLimit());\n";
		$code .= "     \$thisDatabaseResultsInfo->setSortedBy(\$thisSearchUtils->getOrderByField());\n";
		$code .= "     \$thisDatabaseResultsInfo->setSortOrder(\$thisSearchUtils->getOrderDirection());\n\n";

		$code .= "\t\treturn \$thisDatabaseResultsInfo;\n\n";

		$code .= "\t} // End of if result != false \n\n";

		$code .= "}// End Function \n\n";

		$this->appendToCode($code);
	}

}

?>