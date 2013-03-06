<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
include_once(CLASS_PHP_CODE_BEAUTIFIER);
?>
<? 
class gipCommonClassConstantsGenerator extends commonGenieFramework
{

	var $tablesArray;

	/**
	* @return returns value of variable $tablesArray
	* @desc getTablesArray : Getting value for variable $tablesArray
	*/
	function getTablesArray()
	{
		return $this->tablesArray;
	}

	/**
	* @param param : value to be saved in variable $tablesArray
	* @desc setTablesArray : Setting value for $tablesArray
	*/
	function setTablesArray($value)
	{
		$this->tablesArray = $value;
	}




	function gipCommonClassConstantsGenerator($arguments)
	{
		$db = $arguments['db'];
		$table = $arguments['table'];

		$thisDatabase = new database();
		$thisDatabase->useDatabase($db);
		$tables = $thisDatabase->getDbTables();

		$this->setTablesArray($tables);

		$thisTable = new table($table,$db);
		$this->setTableObject($thisTable);

		$this->initializeGenieFramework();

	}

	function generate()
	{
		$this->appendSuperHeader();

		$this->generateTableClassLocations();


		$beautifulCode = codeBeautifier::beautify($this->getSourceCode());

		return $beautifulCode;

	}

	function generateTableClassLocations()
	{

		$code = "";
		$tables = $this->getTablesArray();

		$code .= $this->getCodeStarter();
		$code .= $this->getLineEnder();
		$code .= "// APP\n";
		$code .= "define(\"COMMON_COMPONENT\",APP_PATH.FILE_SEPARATOR.\"common\");\n";
		$code .= "define(\"DATABASE_COMPONENT\",COMMON_COMPONENT.FILE_SEPARATOR.\"database\");\n";
		$code .= "define(\"ERROR_HANDLING_COMPONENT\",COMMON_COMPONENT.FILE_SEPARATOR.\"errorHandler\");\n";
		$code .= "define(\"UTILS_COMPONENT\",COMMON_COMPONENT.FILE_SEPARATOR.\"utils\");\n";
		$code .= "define(\"LIB_COMPONENT\",APP_PATH.FILE_SEPARATOR.\"lib\");\n\n";
		$code .= "// Common Classes Location Location\n";
		$code .= "define(\"CLASS_EMAIL\",LIB_COMPONENT.FILE_SEPARATOR.\"htmlMimeMail-2.5.1\".FILE_SEPARATOR.\"htmlMimeMail.php\");\n";
		$code .= "define(\"CLASS_ADODB\",LIB_COMPONENT.FILE_SEPARATOR.\"adodb\".FILE_SEPARATOR.\"adodb.inc.php\");\n";
		$code .= "define(\"CLASS_DATABASE_CONNECTION_POOL\",DATABASE_COMPONENT.FILE_SEPARATOR.\"databaseConnectionPool.class.php\");\n";
		$code .= "define(\"CLASS_DATABASE_QUERY\",DATABASE_COMPONENT.FILE_SEPARATOR.\"databaseQuery.class.php\");\n";
		$code .= "define(\"CLASS_DATABASE_RESULTS_INFO\",DATABASE_COMPONENT.FILE_SEPARATOR.\"databaseResultsInfo.class.php\");\n";
		$code .= "define(\"CLASS_DATABASE_UTILS\",DATABASE_COMPONENT.FILE_SEPARATOR.\"databaseUtils.class.php\");\n\n";
		$code .= "// UTILITIES\n";
		$code .= "define(\"CLASS_ERROR_HANDLER\",ERROR_HANDLING_COMPONENT.FILE_SEPARATOR.\"errorHandler.class.php\");\n";
		$code .= "define(\"CLASS_TEXT_ENCRYPTER\",UTILS_COMPONENT.FILE_SEPARATOR.\"textEncrypter\".FILE_SEPARATOR.\"textEncrypter.class.php\");\n";
		$code .= "define(\"CLASS_REQUEST_UTILS\",UTILS_COMPONENT.FILE_SEPARATOR.\"requestUtils\".FILE_SEPARATOR.\"requestUtils.class.php\");\n";
		
		$code .= "define(\"CLASS_PAGE_TIMER\",UTILS_COMPONENT.FILE_SEPARATOR.\"pageTimer\".FILE_SEPARATOR.\"pageTimer.class.php\");\n";
		$code .= "define(\"CLASS_DATE_UTILS\",UTILS_COMPONENT.FILE_SEPARATOR.\"dateUtils\".FILE_SEPARATOR.\"dateUtils.class.php\");\n";
		$code .= "define(\"CLASS_IP_FUNCTIONS\",UTILS_COMPONENT.FILE_SEPARATOR.\"ipAddress\".FILE_SEPARATOR.\"ipFunctions.class.php\");\n";
		$code .= "define(\"CLASS_GEOGRAPHICAL_DROP_DOWN\",UTILS_COMPONENT.FILE_SEPARATOR.\"dropDowns\".FILE_SEPARATOR.\"geographicDropDown.class.php\");\n";
		$code .= "define(\"CLASS_PASSWORD_GENERATOR\",UTILS_COMPONENT.FILE_SEPARATOR.\"passwordGenerator\".FILE_SEPARATOR.\"passwordGenerator.class.php\");\n";
		$code .= "define(\"CLASS_TURING_IMAGE_GENERATOR\",UTILS_COMPONENT.FILE_SEPARATOR.\"turingImageGenerator\".FILE_SEPARATOR.\"turingImage.class.php\");\n";
			$code .= "define(\"CLASS_DATA_GRID\",UTILS_COMPONENT.FILE_SEPARATOR.\"dataGrid\".FILE_SEPARATOR.\"dataGrid.class.php\");\n";
		$code .= "define(\"CLASS_RESULTS_PAGER\",UTILS_COMPONENT.FILE_SEPARATOR.\"resultsPager\".FILE_SEPARATOR.\"resultsPager.class.php\");\n\n";
		$code .= "// SEARCH UTILS\n";
		$code .= "define(\"SEARCH_UTIL_COMPONENT\",COMMON_COMPONENT.FILE_SEPARATOR.\"search\");\n";
		$code .= "// searchInfo Classes Location\n";
		$code .= "define(\"CLASS_SEARCH_ITEM\",SEARCH_UTIL_COMPONENT.FILE_SEPARATOR.\"searchItem.class.php\");\n";
		$code .= "define(\"CLASS_SEARCH_UTILS\",SEARCH_UTIL_COMPONENT.FILE_SEPARATOR.\"searchUtils.class.php\");\n\n";




		$code .= "define(\"APPLICATION_CLASSES_COMPONENT\",APP_PATH.FILE_SEPARATOR.\"".DEFAULT_DIRECTORY_NAME_FOR_CRUD_CLASSES."\");\n\n";


		for ($a=0;$a<count($tables);$a++)
		{

			$code .= "// ***********************".strtoupper($tables[$a])." COMPONENT ****************************".$this->getLineEnder();
			$code .= "define(\"".strtoupper($tables[$a])."_COMPONENT\",APPLICATION_CLASSES_COMPONENT.FILE_SEPARATOR.\"".$tables[$a]."\");".$this->getLineEnder();
			$code .= "// ".$tables[$a]." classes location ".$this->getLineEnder();
			$code .= "define(\"CLASS_".strtoupper($tables[$a])."_INFO\",".strtoupper($tables[$a])."_COMPONENT.FILE_SEPARATOR.\"".$tables[$a]."Info.class.php\");".$this->getLineEnder();
			$code .= "define(\"CLASS_".strtoupper($tables[$a])."_GENDAO\",".strtoupper($tables[$a])."_COMPONENT.FILE_SEPARATOR.\"".$tables[$a]."GenDAO.class.php\");".$this->getLineEnder();
			$code .= "define(\"CLASS_".strtoupper($tables[$a])."_DAO\",".strtoupper($tables[$a])."_COMPONENT.FILE_SEPARATOR.\"".$tables[$a]."DAO.class.php\");".$this->getLineEnder();
			$code .= "define(\"CLASS_".strtoupper($tables[$a])."_GENMANAGER\",".strtoupper($tables[$a])."_COMPONENT.FILE_SEPARATOR.\"".$tables[$a]."GenManager.class.php\");".$this->getLineEnder();
			$code .= "define(\"CLASS_".strtoupper($tables[$a])."_MANAGER\",".strtoupper($tables[$a])."_COMPONENT.FILE_SEPARATOR.\"".$tables[$a]."Manager.class.php\");".$this->getLineEnder();
			$code .= $this->getLineEnder();
		}



		$code .= $this->getCodeEnder();

		$this->appendToCode($code);

	}

}

?>