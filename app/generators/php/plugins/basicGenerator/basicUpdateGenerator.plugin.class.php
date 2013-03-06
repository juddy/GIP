<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_SIMPLE_DB_GENERATOR);
include_once(CLASS_SQL_ENGINE);
include_once(CLASS_SQL_ENGINE_UPDATE_GENERATOR);
?>
<? 
class basicUpdateGenerator extends commonSimpleDb
{
	
	function basicUpdateGenerator($arguments)
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
		$this->generateRetreiveFromForm("REQUEST");
		$this->generateUpdateSQL();
		$this->generateUserText();
		$this->appendWebFooter();
		return $this->getSourceCode();
	}
	
	
	
	function generateUpdateSQL()
	{
		$thisTable = $this->getTableObject();
		
		
		$thisSqlEngine = new  updateSQLGenerator($thisTable->getTableName(),$thisTable->getDatabase());
		$sql = $thisSqlEngine->constructSQL($thisTable);
		
		$code = "";
		$code .= "<?\n";
		$code .= "\$sql = \"".$sql."\";".$this->getLineEnder();
		$code .= "\$result = MYSQL_QUERY(\$sql);".$this->getLineEnder();
		$code .= "\n?>";
		
		$this->appendToCode($code);
	}
	
	function generateUserText()
	{
		$thisTable = $this->getTableObject();
		
		$code = "";
		$code .= LANG_SIMPLE_INSIDE_RECORD_UPDATED." <br><br>\n\n";
		
		$code .= $this->generateViewRecordTable();
		
		$listFileName = "list".ucfirst($thisTable->getTableName()).".php";
			
		$code .= "<br><br>";
		$code .= "<a href=\"".$listFileName."\">".LANG_SIMPLE_INSIDE_GO_BACK_TO_LIST."</a>\n";
		
		
		$this->appendToCode($code);
	}
	
}

?>
