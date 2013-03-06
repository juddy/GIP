<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
?>
<? 
include_once(CLASS_SQL_ENGINE);

class createSQLGenerator extends sqlEngine
{

	function createSQLGenerator($table,$db)
	{
		$thisTable = new table($table,$db);
		$this->constructSQL($thisTable);
	}


	function constructSQL($thisTable)
	{
		$fieldInfos = $thisTable->getFieldInfoArray();
	
		$fieldValues = "";
		$sql = "";
		$sql .= "CREATE TABLE ".$thisTable->getTableName()." ( \n";
		
		for ($a=0;$a<count($fieldInfos);$a++)
		{
			$thisFieldInfo = $fieldInfos[$a];


			$fieldValues .= $thisFieldInfo->getFieldName()." ".$thisFieldInfo->getFieldDbType()."(".$thisFieldInfo->getFieldLength()."),\n";
		}
		$fieldValues = $this->removeTrailingComma(rtrim(ltrim($fieldValues)));
		
		$sql .= $fieldValues."\n";
		
		$sql .= ")\n";

		return $sql;

	}


}

?>