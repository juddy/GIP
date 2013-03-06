<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_SIMPLE_DB_GENERATOR);
include_once(CLASS_SQL_ENGINE);
include_once(CLASS_SQL_ENGINE_INSERT_GENERATOR);
include_once(CLASS_SQL_ENGINE_SELECT_GENERATOR);
?>
<? 
class simpleMainIndexGenerator extends commonSimpleDb
{

	function simpleMainIndexGenerator($arguments)
	{
		$db = $arguments['db'];
		$table = $arguments['table'];


		$headerText = $arguments['headerText'];
		$footerText = $arguments['footerText'];
		$this->setHeaderText($headerText);
		$this->setFooterText($footerText);


		$thisTable = new table($table,$db);
		$this->setTableObject($thisTable);

		$this->initializeSimpleDbFramework();

	}


	function generate()
	{
		$this->generateIndex();
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
		$code .= "<td>\n";
		
		$code .= "<table cellspacing=0 cellpadding=0 border=0>\n";	
		$code .= "<tr>\n";	
		$code .= "<td width=20>\n";	
		$code .= "&nbsp;\n";	
		$code .= "</td>\n";	
		$code .= "<td>\n";	
		
		
		$code .= "<li><a href=\"./".$thisTable->getTableName()."/enterNew".ucfirst($thisTable->getTableName()).".php\">".LANG_BASIC_ENTER." ".LANG_BASIC_NEW." ".$thisTable->getTableName()."</a></li>\n";
		$code .= "<li><a href=\"./".$thisTable->getTableName()."/list".ucfirst($thisTable->getTableName()).".php\">".LANG_BASIC_LIST_ALL." ".$thisTable->getTableName()."</a></li>\n";
		$code .= "<li><a href=\"./".$thisTable->getTableName()."/search".ucfirst($thisTable->getTableName())."Form.php\">".LANG_BASIC_POWER_SEARCH." ".$thisTable->getTableName()."</a></li>\n";
		$code .= "<li><a href=\"./".$thisTable->getTableName()."/listGrid".ucfirst($thisTable->getTableName()).".php\">".LANG_BASIC_CRUD_GRID." ".LANG_BASIC_FOR." ".$thisTable->getTableName()."</a></li>\n";
				
		$code .= "</td>\n";	
		$code .= "</tr>\n";	
		$code .= "</table>\n";	
		
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
		$code .= "<b><font color=red>".strtoupper($thisTable->getTableName())." Menu</b></font> <br>\n\n";

		$this->appendToCode($code);
	}

}

?>
