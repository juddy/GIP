<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(PLUGIN_SQL_COMMON_GENERATOR);
include_once(CLASS_SQL_ENGINE);
include_once(CLASS_SQL_ENGINE_DELETE_GENERATOR);
?>
<? 
class SQLDeleteGenerator extends commonSqlGenerator 
{
	
	function SQLDeleteGenerator($arguments)
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

		$thisSqlEngine = new  deleteSQLGenerator($thisTable->getTableName(),$thisTable->getDatabase());
		$sql = $thisSqlEngine->constructSQL($thisTable);
		
		return $sql;
	}
	
	
}

?>