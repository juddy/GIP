<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(PLUGIN_SQL_COMMON_GENERATOR);
include_once(CLASS_SQL_ENGINE);
include_once(CLASS_SQL_ENGINE_SELECT_GENERATOR);
?>
<? 
class SQLSelectGenerator extends commonSqlGenerator 
{
	
	function SQLSelectGenerator($arguments)
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

		
		
		

		$thisSqlEngine = new  selectSQLGenerator($thisTable->getTableName(),$thisTable->getDatabase(),$thisTable->getFieldNameArray());
		$sql = $thisSqlEngine->constructSQL($thisTable);
		
		return $sql;
	}
	
	
}

?>