<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
?>
<? 
class gipWebMainIndexGenerator extends commonGenieFramework
{

	function gipWebMainIndexGenerator($arguments)
	{
		$db = $arguments['db'];
		$table = $arguments['table'];
		
		$thisTable = new table($table,$db);
		$this->setTableObject($thisTable);
		$this->initializeGenieFramework();
		
	}


	function generate()
	{
		//$this->appendSuperHeader();
		//$this->appendWebHeader();		
		$this->generateIndex();
		//$this->appendWebFooter();
		
		return $this->getSourceCode();
	}


	function generateIndex()
	{
		$thisTable = $this->getTableObject();

		$code = "";

		$code .= "<table width=\"250\" cellspacing=\"0\" cellpadding=\"3\" bgcolor=\"#000066\">\n";
		$code .= "<tr>\n";
		$code .= "<td><table width=\"100%\" border=\"0\" cellspacing=\"0\" bgcolor=\"#FFFFFF\">\n";
		$code .= "<tr height=35>\n";
		$code .= "<td bgcolor=\"#FFFFFF\" align=left><h3>".LANG_BASIC_TABLE." ".strtoupper($thisTable->getTableName())."</h3></td>\n";
		$code .= "</tr>\n";
		$code .= "<tr height=20>\n";
		$code .= "<td><li><a href=\"./forms/".$thisTable->getTableName()."/enterNew".ucfirst($thisTable->getTableName()).".php\">".LANG_BASIC_ENTER." ".$thisTable->getTableName()."</a></li>\n";
		$code .= "<li><a href=\"./forms/".$thisTable->getTableName()."/listAll".ucfirst($thisTable->getTableName()).".php\">".LANG_BASIC_LIST_ALL." ".$thisTable->getTableName()."</a></li>\n";
		$code .= "<li><a href=\"./forms/".$thisTable->getTableName()."/powerSearch".ucfirst($thisTable->getTableName())."Form.php\">".LANG_BASIC_POWER_SEARCH." ".$thisTable->getTableName()."</a></li>\n";
		$code .= "<li><a href=\"./forms/".$thisTable->getTableName()."/crudGrid".ucfirst($thisTable->getTableName()).".php\">".LANG_BASIC_CRUD_GRID." ".LANG_BASIC_FOR." ".$thisTable->getTableName()."</a></li>\n";
				
		$code .= "</td>\n";		
		$code .= "</tr>\n";
		$code .= "<tr height=20>\n";
		$code .= "<td>&nbsp;</td>\n";
		$code .= "</tr>\n";		
		
		$code .= "</table></td>\n";
		$code .= "</tr>\n";
		$code .= "</table>\n";


		$this->appendToCode($code);
	}


	function generateUserText()
	{
		$thisTable = $this->getTableObject();

		$code = "";
		$code .= "<b><font color=red>".strtoupper($thisTable->getTableName())." ".LANG_BASIC_MENU."</b></font> <br>\n\n";

		$this->appendToCode($code);
	}

}

?>