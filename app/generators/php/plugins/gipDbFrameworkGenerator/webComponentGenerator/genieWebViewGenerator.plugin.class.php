<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
?>
<? 
class gipWebViewGenerator extends commonGenieFramework
{
	
	function gipWebViewGenerator($arguments)
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
		$thisTable = $this->getTableObject();
				
	
		$this->buildGetInfoById();
		
		$code = "";

		$code .= "<h2>".LANG_BASIC_VIEW." ".$thisTable->getTableName()." ".LANG_BASIC_RECORD."</h2>".$this->getLineEnder();
		$this->appendToCode($code);
		
		$this->generateViewInfoTable();
		$this->buildBackToListAll();
		
		$this->appendWebFooter();
		
		return $this->getSourceCode();
		
	}
	
	
	
}

?>