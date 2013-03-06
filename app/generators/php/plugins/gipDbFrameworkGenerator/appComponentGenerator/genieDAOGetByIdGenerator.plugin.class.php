<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
?>
<?
class gipDAOGetByIdGenerator extends commonGenieFramework
{


	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc gipDAOInsertGenerator :  put function description here ...
	*/
	function gipDAOGetByIdGenerator ($arguments)
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

		$this->generateGetByIdCode();

		return $this->getSourceCode();


	}

	function generateGetByIdCode()
	{

		$thisTable = $this->getTableObject();
		$fieldNameArray = $thisTable->getFieldNameArray();


		$code = "";


		$returnComment = "returns a populated instance of class (".$this->getInfoName().") if found in db";
		$paramComment = "a populated instance of object - (".$this->getInfoName().")";
		$descComment = "Searches and return a populated instance of (".$this->getInfoName().") object ";
		$comments = $this->getComments($returnComment,$paramComment,$descComment);

		$code .= $comments;

		$primaryKey = $thisTable->getPrimaryKey();

		if (GENERATE_FOR_PHP5)
		{
			//$code .= "protected ";
		}

		$code .= "function get".ucfirst($this->getTableName())."ByPK(\$pkValue) \n";
		$code .= "{ \n\n";
		$code .= "   // Searches for the info object with the passed id \n";


		// Build SQL Query code only if more than 1 field present
		if (count($fieldNameArray)>0)
		{

			$code .= "   \$searchItems[] = new searchItem(FIELD_".strtoupper($this->getTableName())."_".strtoupper($primaryKey).",\$pkValue); \n\n";

			$code .= "   \$dbResultsInfo =  \$this->search".ucfirst($this->getTableName())."(\$searchItems); \n";
			$code .= "   \$resultsArray =  \$dbResultsInfo->getResultsArray(); \n\n";

			$code .= "     // return false if no rows in resultSet \n";
			$code .= "    if (count(\$resultsArray)==0) \n";
			$code .= "    { \n\n";
			$code .= "           return false;	 \n\n";
			$code .= "     } \n";
			$code .= "     // if getById returns more than 1 row.. there could be something wrong.. deal with it accordingly \n";
			$code .= "     else if (count(\$resultsArray)>1) \n";
			$code .= "     {  \n";
			$code .= "                 // if Error occured in Application, handle error. \n";
			$code .= "                 \$thisError = new errorHandler();\n";

			$code .= "                 //NOTICE : Change to accomodate your business rules \n";
			$code .= "                 //overiding application settings emailing admin about this duplicate id issue and sending user the first id \n";
			$code .= "                 \$thisError->setQuitProgram(true);\n";
			$code .= "                 \$thisError->setDisplayError(true);\n";
			$code .= "                 \$thisError->setEmailAdmin(true);\n";

			$code .= "                 \$thisError->setUserErrorMessage(\"An error  has occured while this application was trying to do some operation on the database. \");\n";
			$code .= "                 \$thisError->setProgramErrorMessage(\"Should get only one row of data. Program retreived more than row--> \".count(\$resultsArray).\" Error Occured when trying to get Info by Id on Table -->".ucfirst($this->getTableName())." ID --> : \".\$pkValue);\n";
			$code .= "                 \$thisError->setErrorPage(\$_SERVER['PHP_SELF']);\n";
			$code .= "                 \$thisError->handleError();\n";
			$code .= "                 return false; \n";
			$code .= "                 // return \$resultsArray[0]; \n";

			$code .= "       } \n";
			$code .= "       // If resultset contains only one row by id.. then return that info object\n";
			$code .= "      else if (count(\$resultsArray==1)) \n";
			$code .= "     { \n";
			$code .= "               return \$resultsArray[0]; \n";
			$code .= "     } \n";

		} // end of fieldCount > 1

		$code .= "   \n\n";
		$code .= "} \n\n";


		$this->appendToCode($code);
	}

}

?>