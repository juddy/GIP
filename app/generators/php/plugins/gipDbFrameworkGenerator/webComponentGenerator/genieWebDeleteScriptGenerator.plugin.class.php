<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
?>
<? 
class gipWebDeleteScriptGenerator extends commonGenieFramework
{

	function gipWebDeleteScriptGenerator($arguments)
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

		
		$this->buildGetInfoById();
		$this->generateDelete();
		$this->appendWebFooter();

		return $this->getSourceCode();
	}

	function generateDelete()
	{
		$thisTable = $this->getTableObject();

		$thisInfoName = "\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER));

		$code = "";
		$code .= $this->getCodeStarter();
		$code .= $this->getCodeTab()."\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_MANAGER))."->delete".ucfirst($thisTable->getTableName())."(".$thisInfoName.");".$this->getLineEnder();

		$code .= $this->getCodeEnder();
		$code .= $this->getLineEnder();
		$code .= "<br><b>".LANG_ADVANCED_RECORD_DELETED_PERMANENTLY."<br><br></b>";
		$code .= $this->getLineEnder();
		$this->buildBackToListAll();
		$this->appendToCode($code);


	}



}

?>