<?  
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
?> 
<? 
/**

USER PLUGIN META-DATA : PLEASE FILL IN
<PLUGINNAME>myDbPlugin</PLUGINNAME>
<DESCRIPTION>This plugin is an example plugin which prints all the fields in a table.</DESCRIPTION>
<AUTHOR>Nilesh Dosooye</AUTHOR>
**/
class myDbPlugin
{
	var $tableObject;


	function myDbPlugin ($arguments="")
	{
		$db = $arguments['db'];
		$table = $arguments['table'];



		$thisTable = new table($table,$db); // Instantiating New Table Object
		

		
		$this->tableObject = $thisTable;     // Setting table Object in Local variable
	}

	function generate()
	{
		$thisTable = $this->tableObject;


		// The things you can get from $thisTable are
		$thisHostName       = $thisTable->getDatabaseHost();   // Database Server Address 
		$thisUserName       = $thisTable->getDbUserName();     // Database UserName being used
		$thisDbPassword     = $thisTable->getDbPassword();     // User password used to access database
		$thisDbName         = $thisTable->getDatabase();       // Database connected to


		$thisTableName      = $thisTable->getTableName();      // Name of the table Selected
		$thisTablesArray    = $thisTable->getDbTables();       // All Tables in Database

		$thisFieldNameArray = $thisTable->getFieldNameArray(); // Array with all fieldNames (Strings)
		$thisFieldInfoArray = $thisTable->getFieldInfoArray(); // Array of Fields with all meta data (fieldInfo Objects)
		$thisPrimaryKey     = $thisTable->getPrimaryKey();     // Primary Key of the current table


		$code = "";
		$code .= "You are connected to : ".$thisHostName."<br>\n";
		$code .= "You are connected as : ".$thisUserName."<br><br>\n";
		$code .= "Table Selected : ".$thisTableName."<br><br>\n";
		$code .= "<b>Fields</b><br><br>\n";



		for ($a=0;$a<count($thisFieldNameArray);$a++)
		{
			$thisFieldName = $thisFieldNameArray[$a];
			$code .= "Field ".$a." --> ".$thisFieldName."<br>\n";
		}


		// Returning Generated Code
		return $code;
	}


} // end of myDbPlugin class

?>