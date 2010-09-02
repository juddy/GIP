<?
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_SIMPLE_DB_GENERATOR);
include_once(CLASS_SQL_ENGINE);
include_once(CLASS_SQL_ENGINE_SELECT_GENERATOR);
?>
<? 
class simpleListerGenerator extends commonSimpleDb
{

	function simpleListerGenerator($arguments)
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
		$this->generateSelectSQL();

		$this->generateWhileLoopToGetData();


		//$this->generateUserText();

		$this->appendWebFooter();
		return $this->getSourceCode();
	}



	function generateSelectSQL()
	{
		$thisTable = $this->getTableObject();

		$thisSqlEngine = new  selectSQLGenerator($thisTable->getTableName(),$thisTable->getDatabase()," * ");

		$sql = $thisSqlEngine->constructSQL($thisTable);

		$code = "";
		$code .= "<?\n";

		$code .= "\$initStartLimit = 0;\n";
		$code .= "\$limitPerPage = 10;\n\n";

		$code .= "\$startLimit = \$_REQUEST['startLimit'];\n";
		$code .= "\$numberOfRows = \$_REQUEST['rows'];\n";
		$code .= "\$sortBy = \$_REQUEST['sortBy'];\n";
		$code .= "\$sortOrder = \$_REQUEST['sortOrder'];\n\n";

		$code .= "if (\$startLimit==\"\")\n";
		$code .= "{\n";
		$code .= "\t\t\$startLimit = \$initStartLimit;\n";
		$code .= "}\n\n";

		$code .= "if (\$numberOfRows==\"\")\n";
		$code .= "{\n";
		$code .= "\t\t\$numberOfRows = \$limitPerPage;\n";
		$code .= "}\n\n";

		$code .= "if (\$sortOrder==\"\")\n";
		$code .= "{\n";
		$code .= "\t\t\$sortOrder  = \"DESC\";\n";
		$code .= "}\n";

		$code .= "if (\$sortOrder == \"DESC\") { \$newSortOrder = \"ASC\"; } else  { \$newSortOrder = \"DESC\"; }\n";


		$code .= "\$limitQuery = \" LIMIT \".\$startLimit.\",\".\$numberOfRows;\n";
		$code .= "\$nextStartLimit = \$startLimit + \$limitPerPage;\n";
		$code .= "\$previousStartLimit = \$startLimit - \$limitPerPage;\n\n";

		$code .= "if (\$sortBy!=\"\")\n";
		$code .= "{\n";
		$code .= "\t\t\$orderByQuery = \" ORDER BY \".\$sortBy.\" \".\$sortOrder;\n";
		$code .= "}\n";
		$code .= "\n\n";

		$code .= "\$sql = \"".$sql."\".\$orderByQuery.\$limitQuery;".$this->getLineEnder();
		$code .= "\$result = MYSQL_QUERY(\$sql);".$this->getLineEnder();
		$code .= "\$numberOfRows = MYSQL_NUM_ROWS(\$result);\n\n";

		$code .= "\n?>";

		$this->appendToCode($code);
	}

	function generateUserText()
	{

		$code = "";
		$code .= "A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>\n\n";

		// $code .= $this->generateViewRecordTable();

		$this->appendToCode($code);
	}

	function generateWhileLoopToGetData()
	{

		$code = "";
		$code .= "<?\n";
		$code .= "if (\$numberOfRows==0) {  \n?>\n\n";
		$code .= LANG_SIMPLE_INSIDE_SORRY_NO_RECORDS_FOUND."\n\n";
		$code .= "<?\n}\n";
		$code .= "else if (\$numberOfRows>0) {\n\n";
		$code .= $this->getCodeTab()."\$i=0;\n";
		$code .= "?>\n";


		$code .= $this->generatePageNavigator();
		
		$code .= $this->generateTableHeader();


		$code .= "<?\n";
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

		
		$code .= $this->generatePageNavigator();		
		$code .= "<?\n} // end of if numberOfRows > 0 \n ?>\n";

		$this->appendToCode($code);
	}

	function generateTableDataRow()
	{
		$thisTable = $this->getTableObject();
		$fieldNames = $thisTable->getFieldNameArray();

		$code = "";

		$code .= $this->getCodeTab()."<TR BGCOLOR=\"<? echo \$bgColor; ?>\">\n";

		for ($a=0;$a<count($fieldNames);$a++)
		{
			$code .= $this->getCodeTab().$this->getCodeTab()."<TD>";
			$code .= "<? echo \$".NAME_FORM_FIELD_PREFIX.ucfirst($fieldNames[$a])."; ?>";
			$code .= "</TD>\n";
		}

		$code .= $this->getCodeTab()."<TD><a href=\"edit".ucfirst($thisTable->getTableName()).".php?".$thisTable->getPrimaryKey()."Field=<? echo \$this".ucfirst($thisTable->getPrimaryKey())."; ?>\">Edit</a></TD>\n";
		$code .= $this->getCodeTab()."<TD><a href=\"confirmDelete".ucfirst($thisTable->getTableName()).".php?".$thisTable->getPrimaryKey()."Field=<? echo \$this".ucfirst($thisTable->getPrimaryKey())."; ?>\">Delete</a></TD>\n";

		$code .= $this->getCodeTab()."</TR>\n";

		return $code;

	}

	function generateTableHeader()
	{
		$thisTable = $this->getTableObject();
		$fieldNames = $thisTable->getFieldNameArray();

		$code = "";

		$code = "<TABLE CELLSPACING=\"0\" CELLPADDING=\"3\" BORDER=\"0\" WIDTH=\"100%\">\n";

		$code .= $this->getCodeTab()."<TR>\n";

		for ($a=0;$a<count($fieldNames);$a++)
		{
			$code .= $this->getCodeTab().$this->getCodeTab()."<TD>\n";
			$code .= $this->getCodeTab().$this->getCodeTab().$this->getCodeTab()."<a href=\"<? echo \$PHP_SELF; ?>?sortBy=".$fieldNames[$a]."&sortOrder=<? echo \$newSortOrder; ?>&startLimit=<? echo \$startLimit; ?>&rows=<? echo \$limitPerPage; ?>\">\n";
			$code .= $this->getCodeTab().$this->getCodeTab().$this->getCodeTab().$this->getCodeTab()."<B>".ucfirst($fieldNames[$a])."</B>\n";
			$code .= $this->getCodeTab().$this->getCodeTab().$this->getCodeTab()."</a>\n";
			$code .= "</TD>\n";
		}

		$code .= $this->getCodeTab()."</TR>\n";

		return $code;

	}

	function generateTableFooter()
	{
		$code = "";

		$code .= "</TABLE>\n";

		return $code;

	}


	function generatePageNavigator()
	{


		$code = "";
		$code .= "\n\n<br>\n";


		$code .= "<?\n";
		$code .= "if (\$_REQUEST['startLimit'] != \"\")\n";
		$code .= "{\n";
		$code .= "?>\n\n";
		$code .= "<a href=\"<? echo  \$_SERVER['PHP_SELF']; ?>?startLimit=<? echo \$previousStartLimit; ?>&limitPerPage=<? echo \$limitPerPage; ?>&sortBy=<? echo \$sortBy; ?>&sortOrder=<? echo \$sortOrder; ?>\">Previous <? echo \$limitPerPage; ?> Results</a>....\n";
		$code .= "<? } ?>\n";

		$code .= "<?\n";
		$code .= "if (\$numberOfRows == \$limitPerPage)\n";
		$code .= "{\n";
		$code .= "?>\n";
		$code .= "<a href=\"<? echo \$_SERVER['PHP_SELF']; ?>?startLimit=<? echo \$nextStartLimit; ?>&limitPerPage=<? echo \$limitPerPage; ?>&sortBy=<? echo \$sortBy; ?>&sortOrder=<? echo \$sortOrder; ?>\">Next <? echo \$limitPerPage; ?> Results</a>\n";
		$code .= "<? } ?>\n";

		$code .= "\n<br><br>\n";
		
		// Returning Generated Code
		return $code;
	}

}

?>