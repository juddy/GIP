<? 
include_once("/GIP/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
include_once(CLASS_PHP_CODE_BEAUTIFIER);
?>
<? 
class gipCommonPageConstantsGenerator extends commonGenieFramework
{

	var $tablesArray;
	var $db;

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

	/**
	* @return returns value of variable $db
	* @desc getDb : Getting value for variable $db
	*/
	function getDb()
	{
		return $this->db;
	}

	/**
	* @param param : value to be saved in variable $db
	* @desc setDb : Setting value for $db
	*/
	function setDb($value)
	{
		$this->db = $value;
	}

	function gipCommonPageConstantsGenerator($arguments)
	{
		$db = $arguments['db'];
		$table = $arguments['table'];

		$thisDatabase = new database();
		$thisDatabase->useDatabase($db);
		$tables = $thisDatabase->getDbTables();

		$this->setDb($db);

		$this->setTablesArray($tables);

		$thisTable = new table($table,$db);
		$this->setTableObject($thisTable);


		$this->initializeGenieFramework();

	}

	function generate()
	{
		$this->appendSuperHeader();
		$this->generateHtmlConstants();

		$this->generatePageConstants();

		$beautifulCode = codeBeautifier::beautify($this->getSourceCode());

		return $beautifulCode;

	}


	function generateHtmlConstants()
	{

		$code = "";

		$code .= $this->getCodeStarter();
		$code .= $this->getLineEnder();

		$code .= "// HTML PAGES\n";
		$code .= "define(\"PAGE_HTML_MAIN_INDEX_PAGE\",URL_ADDRESS.WEB_SEPARATOR.\"index.php\");\n";
		$code .= "define(\"PAGE_HTML_COMPONENT\",URL_ADDRESS.WEB_SEPARATOR.\"html\");\n";
		$code .= "define(\"PAGE_HTML_ABOUT_US\",PAGE_HTML_COMPONENT.WEB_SEPARATOR.\"about.php\");\n";
		$code .= "define(\"PAGE_HTML_CONTACT_US\",PAGE_HTML_COMPONENT.WEB_SEPARATOR.\"contactUs.php\");\n";
		$code .= "define(\"PAGE_HTML_MAIL_CONTACT\",PAGE_HTML_COMPONENT.WEB_SEPARATOR.\"mailContact.php\");\n";
		$code .= "define(\"PAGE_HTML_FAQS\",PAGE_HTML_COMPONENT.WEB_SEPARATOR.\"faq.php\");\n";
		$code .= "define(\"PAGE_HTML_COPYRIGHT\",PAGE_HTML_COMPONENT.WEB_SEPARATOR.\"copyright.php\");\n";

		$code .= $this->getLineEnder();
		$code .= $this->getCodeEnder();

		$this->appendToCode($code);

	}

	function generatePageConstants()
	{

		$code = "";
		$tables = $this->getTablesArray();


		$code .= $this->getCodeStarter();
		$code .= $this->getLineEnder();

		for ($a=0;$a<count($tables);$a++)
		{


			$code .= "// ".strtoupper($tables[$a])." PAGES COMPONENT \n";
			$code .= "define(\"PAGE_".strtoupper($tables[$a])."_COMPONENT\",URL_ADDRESS.WEB_SEPARATOR.\"forms\".WEB_SEPARATOR.\"".$tables[$a]."\");".$this->getLineEnder();

			$code .= $this->getLineEnder();
			$code .= "define(\"PAGE_ENTER_".strtoupper($tables[$a])."\",PAGE_".strtoupper($tables[$a])."_COMPONENT.WEB_SEPARATOR.\"enter".ucfirst($tables[$a])."Form.php\");".$this->getLineEnder();
			$code .= "define(\"PAGE_INSERT_".strtoupper($tables[$a])."\",PAGE_".strtoupper($tables[$a])."_COMPONENT.WEB_SEPARATOR.\"insert".ucfirst($tables[$a]).".php\");".$this->getLineEnder();
			$code .= "define(\"PAGE_EDIT_".strtoupper($tables[$a])."\",PAGE_".strtoupper($tables[$a])."_COMPONENT.WEB_SEPARATOR.\"edit".ucfirst($tables[$a])."Form.php\");".$this->getLineEnder();
			$code .= "define(\"PAGE_UPDATE_".strtoupper($tables[$a])."\",PAGE_".strtoupper($tables[$a])."_COMPONENT.WEB_SEPARATOR.\"update".ucfirst($tables[$a]).".php\");".$this->getLineEnder();
			$code .= "define(\"PAGE_LIST_ALL_".strtoupper($tables[$a])."\",PAGE_".strtoupper($tables[$a])."_COMPONENT.WEB_SEPARATOR.\"listAll".ucfirst($tables[$a]).".php\");".$this->getLineEnder();
			$code .= "define(\"PAGE_VIEW_".strtoupper($tables[$a])."\",PAGE_".strtoupper($tables[$a])."_COMPONENT.WEB_SEPARATOR.\"view".ucfirst($tables[$a]).".php\");".$this->getLineEnder();
			$code .= "define(\"PAGE_CONFIRM_DELETE_".strtoupper($tables[$a])."\",PAGE_".strtoupper($tables[$a])."_COMPONENT.WEB_SEPARATOR.\"confirmDelete".ucfirst($tables[$a]).".php\");".$this->getLineEnder();
			$code .= "define(\"PAGE_DELETE_".strtoupper($tables[$a])."\",PAGE_".strtoupper($tables[$a])."_COMPONENT.WEB_SEPARATOR.\"delete".ucfirst($tables[$a]).".php\");".$this->getLineEnder();
			$code .= "define(\"PAGE_POWERSEARCH_FORM_FOR_".strtoupper($tables[$a])."\",PAGE_".strtoupper($tables[$a])."_COMPONENT.WEB_SEPARATOR.\"powerSearch".ucfirst($tables[$a])."Form.php\");".$this->getLineEnder();
			$code .= "define(\"PAGE_POWERSEARCH_".strtoupper($tables[$a])."\",PAGE_".strtoupper($tables[$a])."_COMPONENT.WEB_SEPARATOR.\"powerSearch".ucfirst($tables[$a]).".php\");".$this->getLineEnder();


			$code .= $this->getLineEnder();
			$code .= $this->getLineEnder();
		}



		$code .= $this->getCodeEnder();

		$this->appendToCode($code);

	}


}

?>