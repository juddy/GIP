<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
?>
<? 
include_once(CLASS_SQL_ENGINE);

class deleteSQLGenerator extends sqlEngine
{

	function deleteSQLGenerator($table,$db)
	{
		$thisTable = new table($table,$db);
		$this->constructSQL($thisTable);
	}


	function constructSQL($thisTable)
	{

		$whereString = " WHERE ".$thisTable->getPrimaryKey()." = '\$".NAME_FORM_FIELD_PREFIX.ucfirst($thisTable->getPrimaryKey())."'";;

		$sql = "DELETE FROM ".$thisTable->getTableName().$whereString;
		$this->setSqlStatement($sql);

		return $sql;
	}


}

?>
