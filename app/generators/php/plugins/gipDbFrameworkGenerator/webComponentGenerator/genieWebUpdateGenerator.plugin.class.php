<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
?>
<? 
class gipWebUpdateGenerator extends commonGenieFramework
{
	
	function gipWebUpdateGenerator($arguments)
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
		$this->buildGetInfoById(true);
		$this->appendToCode($this->getSetInfoAndUpdate());
		$this->generateViewInfoTable();
		$this->buildBackToListAll();
		$this->appendWebFooter();
		
		return $this->getSourceCode();
		
	}
	

	
}

?>