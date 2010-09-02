<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_SIMPLE_DB_GENERATOR);
include_once(CLASS_SQL_ENGINE);
include_once(CLASS_SQL_ENGINE_SELECT_GENERATOR);
?>
<? 
class simpleDeleteConfirmationGenerator extends commonSimpleDb
{
	
	function simpleDeleteConfirmationGenerator($arguments)
	{
		$db = $arguments['db'];
		$table = $arguments['table'];
		
		
		$headerText = $arguments['headerText'];
		$footerText = $arguments['footerText'];
		$this->setHeaderText($headerText);
		$this->setFooterText($footerText);		
				
		
		$thisTable = new table($table,$db);
		$this->setTableObject($thisTable);
		
		$this->initializeSimpleDbFramework();
		
	}
	
	
	function generate()
	{
		$this->appendSuperHeader();
		$this->appendWebHeader();
		$this->appendToCode($this->generateGetDataFromDbForOneRowOOnPage());
		//$this->generateRetreiveFromForm("REQUEST");
		//$this->generateSelectOneRecordSQL();
		$this->generateUserText();
		$this->generateConfirmDeleteForm();
		
		$this->appendWebFooter();
		return $this->getSourceCode();
	}
	
	
	
	function generateSelectOneRecordSQL()
	{
		$thisTable = $this->getTableObject();
		
		
		$thisSqlEngine = new  insertSQLGenerator($thisTable->getTableName(),$thisTable->getDatabase());
		$sql = $thisSqlEngine->constructSQL($thisTable);
		
		$code = "";
		$code .= "<?\n";
		$code .= "\$sqlQuery = \"".$sql."\";".$this->getLineEnder();
		$code .= "\$result = MYSQL_QUERY(\$sqlQuery);".$this->getLineEnder();
		$code .= "\n?>";
		
		$this->appendToCode($code);
	}
	
	function generateUserText()
	{
		$thisTable = $this->getTableObject();
		
		$code = "";
		$code .= "<h2>".LANG_SIMPLE_INSIDE_CONFIRM_DELETION."</h2><br><br>\n\n";
		
        $code .= $this->generateViewRecordTable();		

        
        
		$this->appendToCode($code);
	}
	
	function generateConfirmDeleteForm()
	{
		$thisTable = $this->getTableObject();
		
		$code = "";

		$code .= "<h3>".LANG_SIMPLE_INSIDE_CONFIRM_DELETION_DESC."</h3><br><br>".$this->getLineEnder();		
		$code .= "<form name=\"".strtolower($thisTable->getTableName()).ucfirst(NAME_WEB_ENTER)."Form\" method=\"POST\" action=\"delete".ucfirst($thisTable->getTableName()).".php\">".$this->getLineEnder();
		$code .= "<input type=\"hidden\" name=\"".NAME_FORM_FIELD_PREFIX.ucfirst($thisTable->getPrimaryKey()).NAME_FORM_FIELD_SUFFIX."\" value=\"<? echo \$this".ucfirst($thisTable->getPrimaryKey())."; ?>\">".$this->getLineEnder();		

		$code .= "<input type=\"submit\" name=\"submitConfirmDelete".ucfirst($thisTable->getTableName())."Form\" value=\"".LANG_BASIC_DELETE." ".LANG_BASIC_FROM.ucfirst($thisTable->getTableName())."\">".$this->getLineEnder();		
		$code .= "<input type=\"button\" name=\"cancel\" value=\"".LANG_BASIC_GO_BACK."\" onClick=\"javascript:history.back();\">".$this->getLineEnder();		

		$code .= "</form>".$this->getLineEnder();
		
		$this->appendToCode($code);	
	}
	
}

?>