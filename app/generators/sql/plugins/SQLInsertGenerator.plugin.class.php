<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(PLUGIN_SQL_COMMON_GENERATOR);
include_once(CLASS_SQL_ENGINE);
include_once(CLASS_SQL_ENGINE_INSERT_GENERATOR);
?>
<? 
class SQLInsertGenerator extends commonSqlGenerator 
{
	
	function SQLInsertGenerator($arguments)
	{
		$db = $arguments['db'];
		$table = $arguments['table'];

		
		$thisTable = new table($table,$db);
		$this->setTableObject($thisTable);
		
		$this->initializeSimpleDbFramework();
		
	}
	
	
	function generate()
	{
		$thisTable = $this->getTableObject();

		$thisSqlEngine = new  insertSQLGenerator($thisTable->getTableName(),$thisTable->getDatabase());
		$sql = $thisSqlEngine->constructSQL($thisTable);
		
		return $sql;
	}
	
	
}

?>