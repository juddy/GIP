<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_SIMPLE_DB_GENERATOR);
include_once(CLASS_SQL_ENGINE);
include_once(CLASS_SQL_ENGINE_INSERT_GENERATOR);
include_once(CLASS_SQL_ENGINE_SELECT_GENERATOR);
?>
<? 
class simplePowerSearchFormGenerator extends commonSimpleDb
{
	
	function simplePowerSearchFormGenerator($arguments)
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
		$this->appendSuperHeader();
		$this->appendWebHeader();

		$this->buildSearchForm();

		$this->appendWebFooter();
		return $this->getSourceCode();
	}
	
	
	function buildSearchForm()
	{
		$thisTable = $this->getTableObject();
		
		$code = "";
		
		$code .= "<h2>".LANG_SIMPLE_INSIDE_POWER_SEARCH." ".ucfirst($thisTable->getTableName())."</h2>".$this->getLineEnder();
		$code .= LANG_SIMPLE_INSIDE_POWER_SEARCH_DESC1." ".ucfirst($thisTable->getTableName())." ".LANG_SIMPLE_INSIDE_POWER_SEARCH_DESC2."<br><br>".$this->getLineEnder();
		
		$code .= "<form name=\"".strtolower($thisTable->getTableName()).ucfirst(NAME_WEB_POWER_SEARCH)."Form\" method=\"POST\" action=\"search".ucfirst(strtolower($thisTable->getTableName())).".php\">".$this->getLineEnder();
		
		
		
		$code .= "<table cellspacing=\"2\" cellpadding=\"2\" border=\"0\" width=\"500\">".$this->getLineEnder();
		
		$code .= "<tr>".$this->getLineEnder();
		$code .= "<td align=right><font color=red><b>".LANG_BASIC_KEYWORD." : </font></b>   </td>".$this->getLineEnder();
		$code .= "<td><input type=\"text\" name=\"keyword\" value=\"\"></td>".$this->getLineEnder();
		$code .= "</tr>".$this->getLineEnder();
		
		$code .= "<tr>".$this->getLineEnder();
		$code .= "<td> &nbsp;    </td>".$this->getLineEnder();
		$code .= "<td>".LANG_SIMPLE_INSIDE_POWER_SEARCH_DESC1."</td>".$this->getLineEnder();
		$code .= "</tr>".$this->getLineEnder();
		
		$code .= "</table>".$this->getLineEnder();
		$code .= "<input type=\"submit\" name=\"submit".NAME_WEB_POWER_SEARCH.ucfirst($thisTable->getTableName())."Form\" value=\"".ucfirst(strtolower(LANG_SIMPLE_INSIDE_POWER_SEARCH))."  ".ucfirst($thisTable->getTableName())."\">".$this->getLineEnder();
		$code .= "<input type=\"reset\" name=\"resetForm\" value=\"".LANG_BASIC_CLEAR_FORM."\">".$this->getLineEnder();
		
		
		$code .= "</form>".$this->getLineEnder();
		$this->appendToCode($code);
	}
	
}

?>
