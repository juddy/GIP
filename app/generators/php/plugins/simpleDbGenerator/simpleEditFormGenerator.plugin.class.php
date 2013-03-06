<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_SIMPLE_DB_GENERATOR);
include_once(CLASS_SQL_ENGINE);
include_once(CLASS_SQL_ENGINE_INSERT_GENERATOR);
include_once(PLUGIN_PHP_SIMPLE_WEB_ENTER_FORM_GENERATOR_CLASS);
?>
<? 
class simpleEditFormGenerator extends simpleEnterFormGenerator
{
	
	function simpleEditFormGenerator($arguments)
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
		$this->generateInsertSQL();
		$this->generateRetreiveFromForm("POST");
		
		
		$this->appendWebFooter();
		
		return $this->getSourceCode();
		
	}
	

	
	function generateInsertSQL()
	{
		$thisTable = $this->getTableObject();
		
        $code = "";
		$thisSqlEngine = new  insertSQLGenerator($thisTable->getTableName(),$thisTable->getDatabase());
		$sql = $thisSqlEngine->constructSQL($thisTable);
		
		$code .= "<?\n";
		$code .= "\$sqlQuery = \"".$sql."\";".$this->getLineEnder();
		$code .= "\$result = MYSQL_QUERY(\$sqlQuery);".$this->getLineEnder();		
		$code .= "\n?>";
		
		$this->appendToCode($code);
	}
	
}

?>