<? 
include_once("/GIP/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
?>
<? 
class gipWebPowerSearchScriptGenerator extends commonGenieFramework
{
	
	function gipWebPowerSearchScriptGenerator($arguments)
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
		
		$this->buildSearchScript();
		
		$this->appendWebFooter();
		
		return $this->getSourceCode();
		
	}
	
	function buildSearchScript()
	{
		$thisTable = $this->getTableObject();
		$fieldNameArray = $thisTable->getFieldNameArray();
		
		$code = "";
		$code .= "<?php\n\n";
		
		$code .= "\$thisSortBy = isset(\$_REQUEST['sortBy']) ?  \$_REQUEST['newGenType'] : \"\";\n";
		$code .= "\$thisSortOrder = isset(\$_REQUEST['sortOrder']) ?  \$_REQUEST['sortOrder'] : \"\";\n";
		$code .= "\$thisStart = isset(\$_REQUEST['s']) ?  \$_REQUEST['s'] : \"\";\n";
		$code .= "\$thisLimit = isset(\$_REQUEST['l']) ?  \$_REQUEST['l'] : \"\";\n\n";
		
		
		$code .= "\$thisKeyword = addslashes(rtrim(ltrim(\$_REQUEST['keyword'])));\n";
		$code .= "\$searchKey = \"%\".\$thisKeyword.\"%\";\n\n";
		
		for ($a=0;$a<count($fieldNameArray);$a++)
		{
			$code .= "\$searchItems[] = new searchItem(FIELD_".strtoupper($this->getTableName())."_".strtoupper($fieldNameArray[$a]).",\$searchKey,\" like \",\" OR \");\n";
		}
		
		$code .= "\n";
		$code .= $this->getCodeTab()."\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_MANAGER))." = new ".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_MANAGER))."();".$this->getLineEnder();
		$code .= $this->getCodeTab()."\$this".ucfirst($thisTable->getTableName())."ResultsInfo = \$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_MANAGER))."->search".ucfirst($thisTable->getTableName())."(\$searchItems,\$thisStart,\$thisLimit,\"\",\$thisSortBy,\$thisSortOrder);".$this->getLineEnder();
		$code .= $this->getCodeTab()."\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."Array = \$this".ucfirst($thisTable->getTableName())."ResultsInfo->getResultsArray();".$this->getLineEnder().$this->getLineEnder();
		
		$code .= "if (count(\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."Array)==0)\n";
		$code .= $this->getCodeTab()."{\n";
		$code .= "?>\n";
		$code .= $this->getCodeTab().$this->getCodeTab()."<h2>".LANG_ADVANCED_NO_RECORDS_FOUND_FOR_SEARCH." '<? echo \$thisKeyword; ?>'</h2>\n";
		$code .= "<?\n";
		$code .= $this->getCodeTab()."}\n";
		$code .= "else\n";
		$code .= "{\n";
		
		
		$code .= "\n?>\n";
		
		
		
		$code .= "<TABLE CELLPADDING=\"4\" CELLSPACING=\"0\" BORDER=\"0\" ID=\"table".ucfirst($thisTable->getTableName())."Id\" WIDTH=\"100%\">".$this->getLineEnder();
		$this->appendToCode($code);
		$this->generateRowHeader();
		
		$code = "";
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