<?  
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CLASS_TABLE);
?> 
<? 
/**

USER PLUGIN META-DATA : PLEASE FILL IN
<PLUGINNAME>helloTablePlugin</PLUGINNAME>
<DESCRIPTION>This plugin prints Hello Table !</DESCRIPTION>
<AUTHOR>Nilesh Dosooye</AUTHOR>
**/
class helloTablePlugin
{
	var $tableObject;


	function helloTablePlugin ($arguments="")
	{
		$db = $arguments['db'];
		$table = $arguments['table'];

		$thisTable = new table($table,$db); // Instantiating New Table Object	
		$this->tableObject = $thisTable;     // Setting table Object in Local variable		
	}

	function generate()
	{

		$thisTable = $this->tableObject;
		
		$code ="<h1>Hello ".$thisTable->getTableName()." !</h1>";
		// Returning Generated Code
		return $code;
	}


} // end of myDbPlugin class

?>