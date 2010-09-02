<? 
include_once("/GIP/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
?>
<?
class gipDAOInsertGenerator extends commonGenieFramework
{


	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc gipDAOInsertGenerator :  put function description here ...
	*/
	function gipDAOInsertGenerator ($arguments)
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

		$this->generateInsertDao();

		return $this->getSourceCode();


	}

	function generateInsertDao() {

		$thisTable = $this->getTableObject();
		$fieldNameArray = $thisTable->getFieldNameArray();

		$code = "";
		$returnComment = "returns the insert Id of the inserted Row or false on error ";
		$paramComment = "a populated instance of object - (".$this->getInfoName().")";
		$descComment = "Inserts a new  row in the table populated from parameters of (".$this->getInfoName()." object ";
		$comments = $this->getComments($returnComment,$paramComment,$descComment);
		$code .= $comments;

		if (GENERATE_FOR_PHP5)
		{
			//$code .= "protected ";
		}

		$code .= "function create".ucfirst($this->getTableName())."(";
		
		// Generating Object Type passed for php5
		if (GENERATE_FOR_PHP5)
		{
			$code .= $this->getInfoName()." ";
		}
	
		
		$code .= "\$this".ucfirst($this->getInfoName()).") \n";
		$code .= "{ \n\n";

		// Build SQL Query code only if more than 1 field present
		if (count($fieldNameArray)>0)
		{

			$code .= "   // Building SQL Statement for Inserting New ".ucfirst($this->getInfoName()).") \n";
			$code .= "   \$sql = \"\"; \n";
			$code .= "   \$sql .= \"INSERT INTO \".TABLE_".strtoupper($this->getTableName())."; \n";
			$code .= "   \$sql .= \"(";

			$elementCount = 0;
			$keys = $fieldNameArray;

			for ($a = 0; $a < count($keys); $a++) {

				$code .= "\".FIELD_".strtoupper($this->getTableName())."_".strtoupper($keys[$a]).".\"";

				if ($a != (count($keys)-1)) {
					$code .= " , ";
				}
				$elementCount = $elementCount + 1;

				if ($elementCount >= $this->getElementsPerLine()) {
					$elementCount = 0;
					$code .= "\";\n";
					$code .= "   \$sql .= \"";

				}


			}

			$code .= ")\"; \n";

			$code .= "   \$sql .= \" VALUES \"; \n";
			$code .= "   \$sql .= \"(";

			$elementCount = 0;
			for ($a = 0; $a < count($keys); $a++) {


				$code .= "'\".\$this".ucfirst($this->getInfoName())."->get".ucfirst($keys[$a])."().\"'";

				if ($a != (count($keys)-1)) {
					$code .= " , ";
				}

				if ($elementCount >= $this->getElementsPerLine()) {
					$elementCount = 0;
					$code .= "\";\n";
					$code .= "   \$sql .= \"";

				}


				$elementCount = $elementCount + 1;
			}

			$code .= ")\"; \n\n";

			$code .= "         // Executing Query \n";
			$code .= "         \$thisDatabaseQuery = new databaseQuery(); \n";
			$code .= "         \$thisDatabaseQuery->setSqlQuery(\$sql); \n";
			$code .= "         \$result = \$thisDatabaseQuery->executeQuery(); \n\n";

			$code .= "         // Query could not execute. There was an error \n";
			$code .= "         if (\$result == false) { \n\n";
			$code .= "                 // if Error occured in Application, handle error. \n";
			$code .= "                 \$thisError = new errorHandler();\n";
			$code .= "                 \$thisError->setUserErrorMessage(\"A fatal error has occured while this application was trying to do some operation on the database.\");\n";
			$code .= "                 \$thisError->setProgramErrorMessage(\"Error occured when trying to do insert on the ".ucfirst($this->getTableName())." Table. The SQL Query was : \".\$sql);\n";
			$code .= "                 \$thisError->setErrorPage(\$_SERVER['PHP_SELF']);\n";
			$code .= "                 //overiding application settings and quiting program on this error \n";
			$code .= "                 \$thisError->setQuitProgram(true);\n";
			$code .= "                 \$thisError->handleError();\n";
			$code .= "                 return false; \n";
			$code .= "         }\n";
			$code .= "         // Query Execution was successful -- Return Insert Id\n";
			$code .= "         else \n";
			$code .= "         {\n";
			$code .= "         // Finding the Insert Id of the Inserted Row\n";
			$code .= "         return \$thisDatabaseQuery->returnLastInsertId(); \n\n";
			$code .= "         } \n\n";


		} // end of fields > 0

		$code .= "} \n\n";


		$this->appendToCode($code);
	}



}

?>