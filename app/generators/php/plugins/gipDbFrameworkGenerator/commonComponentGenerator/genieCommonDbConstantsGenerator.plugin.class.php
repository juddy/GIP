<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
include_once(CLASS_PHP_CODE_BEAUTIFIER);
?>
<? 
class gipCommonDbConstantsGenerator extends commonGenieFramework
{
	
	var $tablesArray;
	var $db;
	
	/**
	* @return returns value of variable $tablesArray
	* @desc getTablesArray : Getting value for variable $tablesArray
	*/
	function getTablesArray()
	{
		return $this->tablesArray;
	}
	
	/**
	* @param param : value to be saved in variable $tablesArray
	* @desc setTablesArray : Setting value for $tablesArray
	*/
	function setTablesArray($value)
	{
		$this->tablesArray = $value;
	}
	
	/**
	* @return returns value of variable $db
	* @desc getDb : Getting value for variable $db
	*/
	function getDb()
	{
		return $this->db;
	}
	
	/**
	* @param param : value to be saved in variable $db
	* @desc setDb : Setting value for $db
	*/
	function setDb($value)
	{
		$this->db = $value;
	}
	
	
	function gipCommonDbConstantsGenerator($arguments)
	{
		$db = $arguments['db'];
		$table = $arguments['table'];
		
		$thisDatabase = new database();
		$thisDatabase->useDatabase($db);
		$tables = $thisDatabase->getDbTables();
		
		$this->setDb($db);
		
		$this->setTablesArray($tables);
		
		$thisTable = new table($table,$db);
		$this->setTableObject($thisTable);
		
		
		$this->initializeGenieFramework();
		
	}
	
	function generate()
	{
		$this->appendSuperHeader();
		$code = "";
		$tables = $this->getTablesArray();
		
		
		$code .= $this->getCodeStarter();
		
		for ($a=0;$a<count($tables);$a++)
		{
			$thisTable = new table($tables[$a],$this->getDb());
			$fields = $thisTable->getFieldNameArray();
			
			$code .= $this->getLineEnder();
			$code .= "// ".$thisTable->getTableName()." Table".$this->getLineEnder();
			$code .= "define(\"TABLE_".strtoupper($tables[$a])."\",\"".$thisTable->getTableName()."\");".$this->getLineEnder();
			
			
			$code .= "// Primary Key for Table ".$thisTable->getTableName().$this->getLineEnder();		
			$code .= "define(\"FIELD_".strtoupper($tables[$a])."_PK\",\"".$thisTable->getPrimaryKey()."\");".$this->getLineEnder();

			$code .= "// Field Name Mapping for Table ".$thisTable->getTableName().$this->getLineEnder();		
			for($b=0;$b<count($fields);$b++)
			{
				$code .= "define(\"FIELD_".strtoupper($tables[$a])."_".strtoupper($fields[$b])."\",\"".$fields[$b]."\");".$this->getLineEnder();
			}
			
			$code .= "// Display Labels of Field for Table ".$thisTable->getTableName().$this->getLineEnder();
			
			for($c=0;$c<count($fields);$c++)
			{
				$code .= "define(\"LABEL_".strtoupper($tables[$a])."_".strtoupper($fields[$c])."\",\"".ucfirst(strtolower($fields[$c]))."\");".$this->getLineEnder();
			}
			
			$code .= $this->getLineEnder();
		}
		
		
		
		$code .= $this->getCodeEnder();
		
		$this->appendToCode($code);
		
		$beautifulCode = codeBeautifier::beautify($this->getSourceCode());
		
		return $beautifulCode;
		
	}
	
	
	
}

?>