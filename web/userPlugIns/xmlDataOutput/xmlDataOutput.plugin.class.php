<?  
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_DATABASE_QUERY);
include_once(CLASS_PHP_CODE_BEAUTIFIER);
?> 
<? 
/**

USER PLUGIN META-DATA : PLEASE FILL IN
<PLUGINNAME>xmlDataOutputPlugin</PLUGINNAME>
<DESCRIPTION>This plugin output the data in a database as XML.</DESCRIPTION>
<AUTHOR>Nilesh Dosooye</AUTHOR>
**/
class xmlDataOutputPlugin
{
	var $tableObject;


	function xmlDataOutputPlugin ($arguments="")
	{
		$db = $arguments['db'];
		$table = $arguments['table'];
		$thisTable = new table($table,$db); // Instantiating New Table Object
		$this->tableObject = $thisTable;     // Setting table Object in Local variable
	}

	function generate()
	{
		$thisTable = $this->tableObject;

		if ($thisTable->getDatabase()=="") { $dbName = "database"; } else { $dbName = $thisTable->getDatabase(); }
		
		$thisDatabaseQuery = new databaseQuery();
		$sql = "SELECT * FROM ".$thisTable->getTableName();
		$fieldNames = $thisTable->getFieldNameArray();

		$result = $thisDatabaseQuery->executeDirectQuery($sql);


		$code = "";
		$code .= "<?xml version=\"1.0\" ?>\n";

		$code .= "<".$dbName.">\n";
		while (!$result->EOF)
		{
			$code .= "\t<".$thisTable->getTableName().">\n";
			$fields = $result->fields;

			
			for ($a=0;$a<count($fieldNames);$a++)
			{
				$thisFieldName = $fieldNames[$a];
				$code .= "\t\t<".$thisFieldName.">";
				$code .= $fields[$thisFieldName];
				$code .= "</".$thisFieldName.">\n";

			}


			$code .= "\t</".$thisTable->getTableName().">\n";
			$result->MoveNext();

		} // end while
		$code .= "</".$dbName.">\n";
		
		highlight_string($code);
	
		exit;
        $code = "";
		// Returning Generated Code
		return $code;
	}


} // end of myDbPlugin class

?>