<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
?>
<?
include_once(CLASS_SQL_ENGINE);

class updateSQLGenerator extends sqlEngine
{

	function updateSQLGenerator($table,$db)
	{
		$thisTable = new table($table,$db);

		$this->constructSQL($thisTable);



	}



	function constructSQL($thisTable)
	{
		$fields = $thisTable->getFieldNameArray();

		$fieldList = "";
		
		for ($a=0;$a<count($fields);$a++)
		{
			$fieldList .= $fields[$a]." = '\$".NAME_FORM_FIELD_PREFIX.ucfirst($fields[$a])."'"." , ";
		}

		$fieldList = $this->removeTrailingComma(rtrim(ltrim($fieldList)));


		$whereString = " WHERE ".$thisTable->getPrimaryKey()." = '\$".NAME_FORM_FIELD_PREFIX.ucfirst($thisTable->getPrimaryKey())."'";;


		$sql = "UPDATE ".$thisTable->getTableName()." SET ".$fieldList;

		$sql .= $whereString;


		$this->setSqlStatement($sql);

		return $sql;
	}

}
?>