<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
?>
<?
class gipDAOUpdateGenerator extends commonGenieFramework
{


	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc gipDAOInsertGenerator :  put function description here ...
	*/
	function gipDAOUpdateGenerator ($arguments)
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


		$this->generateUpdateDao();


		return $this->getSourceCode();


	}

	function generateUpdateDao() {

		$thisTable = $this->getTableObject();
		$fieldNameArray = $thisTable->getFieldNameArray();

		$returnComment = "returns true if update if successful or false if failure ";
		$paramComment = "a populated instance of object - (".$this->getInfoName().")";
		$descComment = "Updates database table row from parameters of (".$this->getInfoName().") object ";
		$comments = $this->getComments($returnComment,$paramComment,$descComment);

		$code = "";
		$code .= $comments;


		if (GENERATE_FOR_PHP5)
		{
			//$code .= "protected ";
		}

		$code .= "function update".ucfirst($this->getTableName())."(";
		
		// Generating Object Type passed for php5
		if (GENERATE_FOR_PHP5)
		{
			$code .= $this->getInfoName()." ";
		}
		
		
		$code .= "\$this".ucfirst($this->getInfoName()).",\$thisSearchItems=\"\") \n";
		$code .= "{ \n\n";


		// Build SQL Query code only if more than 1 field present
		if (count($fieldNameArray)>0)
		{

			$code .= "   // Building SQL Statement for Inserting New ".$this->getInfoName()." \n";
			$code .= "   \$sql = \"\"; \n";
			$code .= "   \$sql .= \"UPDATE \".TABLE_".strtoupper($this->getTableName())."; \n";
			$code .= "   \$sql .= \" SET \";\n";

			$keys = $fieldNameArray;

			for ($a = 0; $a < count($keys); $a++) {

				$code .= "   \$sql .=  FIELD_".strtoupper($this->getTableName())."_".strtoupper($keys[$a]).".\" = '\".\$this".ucfirst($this->getInfoName())."->get".ucfirst($keys[$a])."().\"'";


				if ($a != (count($keys)-1)) {
					$code .= " , ";
				}

				$code .= "\"; \n";

			}

			$code .= "   \$sql .= \" WHERE \".FIELD_".strtoupper($this->getTableName())."_PK.\"  = '\".\$this".ucfirst($this->getInfoName())."->get".ucfirst($keys[0])."().\"'\";\n";

			$code .= "\n\n";





			$code .= "         // Executing Query \n";
			$code .= "         \$thisDatabaseQuery = new databaseQuery(); \n";
			$code .= "         \$thisDatabaseQuery->setSqlQuery(\$sql); \n";
			$code .= "         \$result = \$thisDatabaseQuery->executeQuery(); \n\n";

			$code .= "         // Query could not execute. There was an error \n";
			$code .= "         if (\$result == false) { \n\n";

			$code .= "                 // if Error occured in Application, handle error. \n";
			$code .= "                 \$thisError = new errorHandler();\n";
			$code .= "                 \$thisError->setUserErrorMessage(\"A fatal error has occured while this application was trying to do some operation on the database. \");\n";
			$code .= "                 \$thisError->setProgramErrorMessage(\"Error Occured when trying to do update on ".ucfirst($this->getTableName())." SQL Query : \".\$sql);\n";
			$code .= "                 \$thisError->setErrorPage(\$_SERVER['PHP_SELF']);\n";
			$code .= "                 //overiding application settings and quiting program on this error \n";
			$code .= "                 \$thisError->setQuitProgram(true);\n";
			$code .= "                 \$thisError->handleError();\n";
			$code .= "                 return false; \n";

			$code .= "         }\n";
			$code .= "         // Query Execution was successful\n";
			$code .= "         else\n ";
			$code .= "         {\n";
			$code .= "                 return true; \n";
			$code .= "         } \n\n";

		} // end of fieldCount > 1

		$code .= "   \n\n";

		$code .= "} \n\n";

		$this->appendToCode($code);
	}


}

?>