<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
?>
<? 
include_once(CLASS_SQL_ENGINE);

class insertSQLGenerator extends sqlEngine
{

	function insertSQLGenerator($table,$db)
	{
		$thisTable = new table($table,$db);

		$this->constructSQL($thisTable);
	}


	function constructSQL($thisTable)
	{
		$fields = $thisTable->getFieldNameArray();
        $fieldList = "";
		$valuesList = "";
		

		for ($a=0;$a<count($fields);$a++)
		{
			$fieldList .= $fields[$a]." , ";
			$valuesList .= "'\$".NAME_FORM_FIELD_PREFIX.ucfirst($fields[$a])."'"." , ";
		}

		$fieldList = $this->removeTrailingComma(rtrim(ltrim($fieldList)));
		$valuesList = $this->removeTrailingComma(rtrim(ltrim($valuesList)));

		$sql = "";
		$sql .= "INSERT INTO ".$thisTable->getTableName();
		$sql .= " (".$fieldList.")";
		$sql .= " VALUES ";
		$sql .= "(".$valuesList.")";

		return $sql;

	}


}

?>
