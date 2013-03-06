<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(PLUGIN_SQL_COMMON_GENERATOR);
include_once(CLASS_SQL_ENGINE);
include_once(CLASS_SQL_ENGINE_INSERT_GENERATOR);
include_once(CLASS_DATABASE_QUERY);
?>
<? 
class populatedInsertGenerator extends commonSqlGenerator
{

	function populatedInsertGenerator($arguments)
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

		$fieldNames = $thisTable->getFieldNameArray();

		$query = "select  *  from ".$thisTable->getTableName();

		$thisDatabaseQuery = new databaseQuery();
		$adodbResults = $thisDatabaseQuery->executeDirectQuery($query);
		echo "<pre>";
		//print_r($adodbResults);
		echo "</pre>";

		$sql = "";
		$allSql = "";
		$sqlFields = "";
		$sqlValues = "";


		for ($a=0;$a<count($fieldNames);$a++)
		{
			$sqlFields .= $fieldNames[$a].",";
		}

		$sqlFields = $this->removeTrailingComma($sqlFields);



		while (!$adodbResults->EOF)
		{
			$sql = "";
			$sqlValues = "";
			
			$sql .= "INSERT INTO ".$thisTable->getTableName()." (";
			$sql .= $sqlFields;
			$sql .= ") VALUES (";

			for ($a=0;$a<count($fieldNames);$a++)
			{
				$sqlValues .= "'".$adodbResults->fields[$fieldNames[$a]]."',";
			}

			$sqlValues = $this->removeTrailingComma($sqlValues);
			$sql .= $sqlValues;
			$sql .= ");\n";

			
			$allSql .= $sql;
			$adodbResults->MoveNext();
		}



		return $allSql;

	}

	function removeTrailingComma( $string ) {

		$string = rtrim(ltrim($string));

		$string = substr( $string, 0, strlen( $string ) - 1 );

		return $string;
	}

}
?>