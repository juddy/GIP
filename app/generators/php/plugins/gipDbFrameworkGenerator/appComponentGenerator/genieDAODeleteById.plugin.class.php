<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
?>
<?
class gipDAODeleteByIdGenerator extends commonGenieFramework
{


	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc gipDAOInsertGenerator :  put function description here ...
	*/
	function gipDAODeleteByIdGenerator ($arguments)
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
		$this->generateDeleteByIdDao();

		return $this->getSourceCode();


	}

	function generateDeleteByIdDao() {

		$thisTable = $this->getTableObject();
		$fieldNameArray = $thisTable->getFieldNameArray();


		$returnComment = "returns true if delete if successful or false if failure ";
		$paramComment = "a populated instance of object - (".$this->getInfoName().")";
		$descComment = "Delete database table row from parameters of (".$this->getInfoName().") object ";
		$comments = $this->getComments($returnComment,$paramComment,$descComment);


		$code = "";
		$code .= $comments;

		$keys = $fieldNameArray;

		if (GENERATE_FOR_PHP5)
		{
			//$code .= "protected ";
		}

		$code .= "function delete".ucfirst($this->getTableName())."(\$id) \n";
		$code .= "{ \n\n";


		// Build SQL Query code only if more than 1 field present
		if (count($fieldNameArray)>0)
		{


			$code .= "   // Building SQL Statement for Inserting New ".ucfirst($this->getInfoName())." \n";
			$code .= "   \$sql = \"\"; \n";
			$code .= "   \$sql .= \"DELETE FROM \".".$this->getTableName()."; \n";
			$code .= "   \$sql .= \" WHERE \";\n";
			$code .= "   \$sql .= \"".$keys[0]." = '\$id' \"; \n";

			$code .= "\n\n";




			$code .= "         // Executing Query \n";
			$code .= "         \$thisDatabaseQuery = new databaseQuery(); \n";
			$code .= "         \$thisDatabaseQuery->setSqlQuery(\$sql); \n";
			$code .= "         \$result = \$thisDatabaseQuery->executeQuery(); \n\n";

			$code .= "         // Query could not execute. There was an error \n";
			$code .= "         if (\$result == false) { \n";

			$code .= "                 // if Error occured in Application, handle error. \n";
			$code .= "                 \$thisError = new errorHandler();\n";
			$code .= "                 \$thisError->setUserErrorMessage(\"A fatal error has occured while this application was trying to do some operation on the database.\");\n";
			$code .= "                 \$thisError->setProgramErrorMessage(\"Error Occured when trying to do delete on ".ucfirst($this->getTableName())." SQL Query : \".\$sql);\n";
			$code .= "                 \$thisError->setErrorPage(\$_SERVER['PHP_SELF']);\n";
			$code .= "                 //overiding application settings and quiting program on this error \n";
			$code .= "                 \$thisError->setQuitProgram(true);\n";
			$code .= "                 \$thisError->handleError();\n";
			$code .= "                 return false; \n";


			$code .= "         }\n";
			$code .= "         // Query Execution was successful\n";
			$code .= "         else \n";
			$code .= "         {\n";
			$code .= "                 return true; \n";
			$code .= "         } \n\n";

		} // end of fieldCount>1

		$code .= "   \n\n";

		$code .= "} \n\n";

		$this->appendToCode($code);
	}

}

?>