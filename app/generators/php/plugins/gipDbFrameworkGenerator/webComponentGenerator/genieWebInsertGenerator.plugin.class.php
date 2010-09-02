<? 
include_once("/GIP/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
?>
<? 
class gipWebInsertGenerator extends commonGenieFramework
{
	
	function gipWebInsertGenerator($arguments)
	{
		$db = $arguments['db'];
		$table = $arguments['table'];
		
		$thisTable = new table($table,$db);
		$this->setTableObject($thisTable);
		
		
		$this->initializeGenieFramework();
		
	}
	
	
	function generate()
	{
		$this->appendSuperHeader();
		$this->appendWebHeader();

		$this->generateRetreiveFromForm("POST");
		$this->generateSetInfoAndInsert();
		$this->generateViewInfoTable();

		$this->buildBackToListAll();
		$this->appendWebFooter();
		
		return $this->getSourceCode();
		
	}
	
	function generateSetInfoAndInsert($thisInfoName="",$fieldPrefix="")
	{
		
		$thisTable = $this->getTableObject();
		
		if ($thisInfoName=="")
		{
			$thisInfoName = "\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER));
		}
		
		if ($fieldPrefix=="")
		{
		    $fieldPrefix = "this";	
		}		
		
		$code = "";
		$code .= $this->getCodeStarter();
		$code .= $this->getCodeTab().$thisInfoName." = new ".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."();".$this->getLineEnder();
        $this->appendToCode($code);
		
		$this->generateSetFieldsIntoInfo($thisInfoName,$fieldPrefix);
		
		$code = "";
		$code .= $this->getCodeTab()."\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_MANAGER))." = new ".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_MANAGER))."();".$this->getLineEnder();
		$code .= $this->getCodeTab()."\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_MANAGER))."->create".ucfirst($thisTable->getTableName())."(".$thisInfoName.");".$this->getLineEnder();
		
		$code .= $this->getCodeEnder();
		
		$code .= "<h2>".LANG_BASIC_NEW." ".LANG_BASIC_RECORD." ".LANG_BASIC_INSERTED." ".LANG_BASIC_IN." ".LANG_BASIC_TABLE." ".$thisTable->getTableName()." </h2>";
		
		$this->appendToCode($code);
	}
	
}

?>