<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_SIMPLE_DB_GENERATOR);
include_once(CLASS_SQL_ENGINE);
include_once(CLASS_SQL_ENGINE_SELECT_GENERATOR);
include_once(CLASS_SQL_ENGINE_SELECT_KEYWORD_GENERATOR);
include_once(PLUGIN_PHP_SIMPLE_WEB_LISTER_GENERATOR_CLASS);


?>
<? 
class simplePowerSearchGenerator extends simpleListerGenerator
{

	function simplePowerSearchGenerator($arguments)
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
		$this->generateHighlightStringFunction();
		$this->generateGetFromForm();
		$this->generatePowerSearchSQL();
		$this->generateWhileLoopToGetData();
		$this->appendWebFooter();
		return $this->getSourceCode();
	}



	function generatePowerSearchSQL()
	{
		$thisTable = $this->getTableObject();


		$thisSqlEngine = new selectKeywordGenerator($thisTable->getTableName(),$thisTable->getDatabase());
		$sql = $thisSqlEngine->constructSQL($thisTable);

		$code = "";
		$code .= "<?\n";
		$code .= "\$sqlQuery = \"".$sql."\";".$this->getLineEnder();
		$code .= "\$result = MYSQL_QUERY(\$sqlQuery);".$this->getLineEnder();
		$code .= "\$numberOfRows = MYSQL_NUM_ROWS(\$result);\n";
		$code .= "\n?>";

		$this->appendToCode($code);
	}

	function generateGetFromForm()
	{

		$code = "";
		$code .= $this->getCodeStarter();
		$code .= "\$thisKeyword = \$_REQUEST['keyword'];\n";
		$code .= $this->getCodeEnder();

		$this->appendToCode($code);
	}

	function generateHighlightStringFunction()
	{
		$code = "";
		$code .= "<?\n";
		$code .= "function highlightSearchTerms(\$fullText, \$searchTerm, \$bgcolor=\"#FFFF99\")\n";
		$code .= "{\n";
		$code .= "\tif (empty(\$searchTerm))\n";
		$code .= "\t{\n";
		$code .= "\t\treturn \$fullText;\n";
		$code .= "\t}\n";
		$code .= "\telse\n";
		$code .= "\t{\n";
		$code .= "\t\t\$start_tag = \"<span style=\\\"background-color: \$bgcolor\\\">\";\n";
		$code .= "\t\t\$end_tag = \"</span>\";\n";
		$code .= "\t\t\$highlighted_results = \$start_tag . \$searchTerm . \$end_tag;\n";
		$code .= "\t\treturn eregi_replace(\$searchTerm, \$highlighted_results, \$fullText);\n";
		$code .= "\t}\n";
		$code .= "}\n";
		$code .= "\n?>";

		$this->appendToCode($code);
	}

	function generateWhileLoopToGetData()
	{

		$code = "";
		$code .= "<?\n";
		$code .= "if (\$numberOfRows==0) {  \n?>\n\n";
		$code .= " Sorry. No records found !!\n\n";
		$code .= "<?\n}\n";
		$code .= "else if (\$numberOfRows>0) {\n\n";
		$code .= $this->getCodeTab()."\$i=0;\n";
		$code .= "?>\n";


		$code .= $this->generateTableHeader();


		$code .= "<?\n";

		$code .= "\$highlightColor = \"#FFFF99\"; \n\n";

		$code .= $this->getCodeTab()."while (\$i<\$numberOfRows)\n";
		$code .= $this->getCodeTab()."{\n\n";

		$code .= $this->getCodeTab().$this->getCodeTab()."if ((\$i%2)==0) { \$bgColor = \"#FFFFFF\"; } else { \$bgColor = \"#C0C0C0\"; }\n\n";


		$code .= $this->generateGetDataFromDbForOneRow();

		$code .= "\n?>\n";

		$code .= $this->generateTableDataRow();


		$code .= "<?\n";


		$code .= $this->getCodeTab().$this->getCodeTab()."\$i++;\n\n";
		$code .= $this->getCodeTab()."} // end while loop\n";
		$code .= "?>\n";

		$code .= $this->generateTableFooter();

		$code .= "<?\n} // end of if numberOfRows > 0 \n ?>\n";

		$this->appendToCode($code);
	}

	function generateGetDataFromDbForOneRow()
	{

		$retrieveFromDbMethhodCall = "MYSQL_RESULT";

		$thisTable = $this->getTableObject();
		$fieldNameArray = $thisTable->getFieldNameArray();

		$code = "";

		for ($a=0;$a<count($fieldNameArray);$a++)
		{
			$fieldName = $fieldNameArray[$a];
			$code .= $this->getCodeTab();
			$code .= "\$".NAME_FORM_FIELD_PREFIX.ucfirst($fieldName)." = ".$retrieveFromDbMethhodCall."(\$result,\$i,\"".$fieldName."\");".$this->getLineEnder();

		}

		for ($a=0;$a<count($fieldNameArray);$a++)
		{
			$fieldName = $fieldNameArray[$a];
			$code .= $this->getCodeTab();
			$code .= "\$".NAME_FORM_FIELD_PREFIX.ucfirst($fieldName)." = highlightSearchTerms(\$".NAME_FORM_FIELD_PREFIX.ucfirst($fieldName).", \$thisKeyword, \$highlightColor); \n";

		}


		return $code;
	}

}



?>