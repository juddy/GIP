<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_SIMPLE_DB_GENERATOR);
include_once(CLASS_SQL_ENGINE);
include_once(CLASS_SQL_ENGINE_DELETE_GENERATOR);
?>
<? 
class basicDeleteGenerator extends commonSimpleDb
{
	
	function basicDeleteGenerator($arguments)
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
		$this->generateDeleteSQL();
		$this->generateUserText();
		$this->appendWebFooter();
		return $this->getSourceCode();
	}
	
	
	
	function generateDeleteSQL()
	{
		$thisTable = $this->getTableObject();
		
		
		$thisSqlEngine = new  deleteSQLGenerator($thisTable->getTableName(),$thisTable->getDatabase());
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
		
		$code = "";
		$code .= LANG_SIMPLE_INSIDE_RECORD_DELETED."<br><br>\n\n";
		
		$code .= $this->generateViewRecordTable();

		
		$this->appendToCode($code);
	}
	
}

?>
