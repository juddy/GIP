<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
include_once(CLASS_PLUGIN_LOADER);
include_once(CLASS_PHP_CODE_BEAUTIFIER);
?>
<? 
class gipGenDaoGenerator extends commonGenieFramework
{

	function gipGenDaoGenerator($arguments)
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
		$this->appendToCode($this->getGenDaoHeader());
		$this->appendToCode($this->getGeneratedClassCode());

		$this->appendAppFooter();
		$this->appendSuperFoooter();

		$beautifulCode = codeBeautifier::beautify($this->getSourceCode());

		return $beautifulCode;


	}



	function getGeneratedClassCode()
	{

		$thisTable = $this->getTableObject();
		$arguments = array();
		$arguments['db'] = $thisTable->getDatabase();
		$arguments['table'] = $thisTable->getTableName();


		$thisPlugInLoader = new plugInLoader();




		$generatedInsertCode = $thisPlugInLoader->loadPlugIn(
		PLUGIN_PHP_GENIE_APP_DAO_INSERT_GENERATOR_NAME,
		PLUGIN_PHP_GENIE_APP_DAO_INSERT_GENERATOR_CLASS,
		$arguments
		);



		$generatedUpdateCode = $thisPlugInLoader->loadPlugIn(
		PLUGIN_PHP_GENIE_APP_DAO_UPDATE_GENERATOR_NAME,
		PLUGIN_PHP_GENIE_APP_DAO_UPDATE_GENERATOR_CLASS,
		$arguments
		);


		$generatedDeleteCode = $thisPlugInLoader->loadPlugIn(
		PLUGIN_PHP_GENIE_APP_DAO_DELETE_GENERATOR_NAME,
		PLUGIN_PHP_GENIE_APP_DAO_DELETE_GENERATOR_CLASS,
		$arguments
		);



		$generatedGetByIdCode = $thisPlugInLoader->loadPlugIn(
		PLUGIN_PHP_GENIE_APP_DAO_GETBYID_GENERATOR_NAME,
		PLUGIN_PHP_GENIE_APP_DAO_GETBYID_GENERATOR_CLASS,
		$arguments
		);

		$generatedPopulateIntoInfoCode = $thisPlugInLoader->loadPlugIn(
		PLUGIN_PHP_GENIE_APP_DAO_POPULATEINTOINFO_GENERATOR_NAME,
		PLUGIN_PHP_GENIE_APP_DAO_POPULATEINTOINFO_GENERATOR_CLASS,
		$arguments
		);

		$generatedSearchCode = $thisPlugInLoader->loadPlugIn(
		PLUGIN_PHP_GENIE_APP_DAO_SEARCH_GENERATOR_NAME,
		PLUGIN_PHP_GENIE_APP_DAO_SEARCH_GENERATOR_CLASS,
		$arguments
		);

		//$searchByKeywordCode = $this->generateSearchByKeywordDao();


		$generatedCode = "";
		$generatedCode .= "\n<?php \n";
		$generatedCode .= "// Class Representing the ".$this->getInfoName()." table \n";
		$generatedCode .= "// and DML operations on it from the database\n\n";

		if (GENERATE_FOR_PHP5)
		{
			$generatedCode .= "abstract ";
		}


		$generatedCode .= "class ".$this->getTableName()."GenDAO { \n\n";
		$generatedCode .= $generatedInsertCode.$this->getLineEnder().$this->getLineEnder();
		$generatedCode .= $generatedUpdateCode.$this->getLineEnder().$this->getLineEnder();
		$generatedCode .= $generatedDeleteCode.$this->getLineEnder().$this->getLineEnder();
		$generatedCode .= $generatedSearchCode.$this->getLineEnder().$this->getLineEnder();

		$generatedCode .= $generatedGetByIdCode.$this->getLineEnder().$this->getLineEnder();
		$generatedCode .= $generatedPopulateIntoInfoCode.$this->getLineEnder().$this->getLineEnder();


		$generatedCode .= "} // end of ".$this->getTableName()."GenDAO Class\n\n";
		$generatedCode .= "?>";


		return $generatedCode;

	}

}

?>