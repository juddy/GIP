<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
?>
<? 
class gipWebListAllGenerator extends commonGenieFramework
{
	
	function gipWebListAllGenerator($arguments)
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
		$this->generateListAll();
		
		$this->appendWebFooter();
		
		return $this->getSourceCode();
		
	}
	
	function generateListAll()
	{
		
		$thisTable = $this->getTableObject();
		
		$code = "";
		
		$code .= "<?\n\n";
		$code .= "include_once(CLASS_RESULTS_PAGER);\n\n";
		
		$code .= "\$thisSortBy = isset(\$_REQUEST['sortBy']) ?  \$_REQUEST['newGenType'] : \"\";\n";
		$code .= "\$thisSortOrder = isset(\$_REQUEST['sortOrder']) ?  \$_REQUEST['sortOrder'] : \"\";\n";
		$code .= "\$thisStart = isset(\$_REQUEST['s']) ?  \$_REQUEST['s'] : \"\";\n";
		$code .= "\$thisLimit = isset(\$_REQUEST['l']) ?  \$_REQUEST['l'] : \"\";\n";
		
		$code .= "if (\$thisSortOrder==\"\")\n";
		$code .= "{\n";
		$code .= "\t\t\$thisSortOrder = \" DESC \";\n";
		$code .= "}\n\n";
		$code .= "if (\$thisStart==\"\")\n";
		$code .= "{\n";
		$code .= "\t\t\$thisStart = 0;\n";
		$code .= "}\n\n";
		$code .= "if (\$thisLimit==\"\")\n";
		$code .= "{\n";
		$code .= "\t\t\$thisLimit = DEFAULT_ROWS_PER_PAGE;\n";
		$code .= "}\n\n";
		$code .= "?>\n";
		
		$code .= $this->getCodeStarter();
		
		$code .= $this->getCodeTab()."\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_MANAGER))." = new ".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_MANAGER))."();".$this->getLineEnder();
		$code .= $this->getCodeTab()."\$this".ucfirst($thisTable->getTableName())."ResultsInfo = \$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_MANAGER))."->getAll".ucfirst($thisTable->getTableName())."(\$thisStart,\$thisLimit,\$thisSortBy,\$thisSortOrder);".$this->getLineEnder();
		$code .= $this->getCodeTab()."\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."Array = \$this".ucfirst($thisTable->getTableName())."ResultsInfo->getResultsArray();".$this->getLineEnder().$this->getLineEnder();
		
		$code .= "if (count(\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."Array)==0)\n";
		$code .= $this->getCodeTab()."{\n";
		$code .= "?>\n";
		$code .= $this->getCodeTab().$this->getCodeTab()."<h2>".LANG_ADVANCED_NO_RECORDS_FOUND." ".ucfirst($thisTable->getTableName()).".</h2>\n";
		$code .= "<?\n";
		$code .= $this->getCodeTab()."}\n";
		$code .= "else\n";
		$code .= "{\n";
		
		$code .= $this->getCodeTab()."\$delimeterToAdd = \"?\"; \n";
		$code .= $this->getCodeTab()."\$totalNumberOfRows = \$this".ucfirst($thisTable->getTableName())."ResultsInfo->getTotalNumberOfRows();\n";
		$code .= $this->getCodeTab()."\$thisResultsPager = new resultsPager(\$thisStart,\$thisLimit,\$totalNumberOfRows,PAGE_LIST_ALL_".strtoupper($thisTable->getTableName()).".\$delimeterToAdd);\n";
		$code .= $this->getCodeTab()."\$thisResultsPager->buildPager();\n";
		
		$code .= $this->getCodeEnder();
		
		$code .= "<TABLE CELLPADDING=\"4\" CELLSPACING=\"0\" BORDER=\"0\" ID=\"table".ucfirst($thisTable->getTableName())."Id\" WIDTH=\"100%\">".$this->getLineEnder();
		$code .= $this->getRowHeader();
		
		$code .= $this->getCodeStarter();
		
		$code .= $this->getCodeTab()."for (\$a=0;\$a<count(\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."Array);\$a++)".$this->getLineEnder();
		$code .= $this->getCodeTab()."{".$this->getLineEnder();
		$code .= $this->getCodeTab().$this->getCodeTab()."\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))." = \$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."Array[\$a];".$this->getLineEnder();
		
		$code .= $this->getCodeTab().$this->getCodeTab()."if ((\$a%2)==0) { \$rowBgColor = ROW_COLOR1; } else { \$rowBgColor = ROW_COLOR2; }\n";
		
		$code .= $this->getCodeEnder();
		$this->appendToCode($code);
		
		
		$this->generateOneRow("y","y","y");
		
		$code = "";
		$code .= $this->getCodeStarter();
		$code .= $this->getCodeTab()."} // end of loop for \$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."Array".$this->getLineEnder();
		
		
		$code .= $this->getCodeEnder();
		$code .= $this->getLineEnder();
		$code .= "</TABLE>".$this->getLineEnder();
		
		$code .= $this->getCodeStarter();
		$code .= "} // end of else if count(\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."Array) == 0 \n";
		$code .= $this->getCodeEnder();
		
		$this->appendToCode($code);
	}
	
	
	
	
}

?>