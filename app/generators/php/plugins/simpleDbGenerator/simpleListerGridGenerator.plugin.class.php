<?
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_SIMPLE_DB_GENERATOR);
include_once(CLASS_SQL_ENGINE);
include_once(CLASS_SQL_ENGINE_SELECT_GENERATOR);
include_once(CLASS_SQL_ENGINE_UPDATE_GENERATOR);
include_once(CLASS_SQL_ENGINE_DELETE_GENERATOR);
include_once(CLASS_SQL_ENGINE_INSERT_GENERATOR);
?>
<? 
class simpleListerGridGenerator extends commonSimpleDb
{

	function simpleListerGridGenerator($arguments)
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


		$code .= "";
		$code .= "\$this".ucfirst($thisTable->getPrimaryKey())."FromForm = \$_REQUEST['".NAME_FORM_FIELD_PREFIX.ucfirst($thisTable->getPrimaryKey()).NAME_FORM_FIELD_SUFFIX."'];\n";
		$code .= "\$thisAction = \$_REQUEST['action'];\n";
		$code .= "if (\$thisAction==\"Update\")\n";
		$code .= "{\n";

		$thisUpdateSqlEngine = new  updateSQLGenerator($thisTable->getTableName(),$thisTable->getDatabase());
		$sqlUpdate = $thisUpdateSqlEngine->constructSQL($thisTable);

		$code .= $this->getRetreiveFromFormCode("REQUEST");
		$code .= "\t\$sqlUpdate = \"".$sqlUpdate."\";".$this->getLineEnder();
		$code .= "\t\$resultUpdate = MYSQL_QUERY(\$sqlUpdate);".$this->getLineEnder();

		$code .= "\techo \"<b>Record with Id \".\$this".ucfirst($thisTable->getPrimaryKey())."FromForm.\" has been Updated<br></b>\";\n";

		$code .= "\t\$this".ucfirst($thisTable->getPrimaryKey())."FromForm = \"\";\n";

		$code .= "}\n\n";
		
		
		$code .= "if (\$thisAction==\"Insert\")\n";
		$code .= "{\n";

		$thisInsertSqlEngine = new  insertSQLGenerator($thisTable->getTableName(),$thisTable->getDatabase());
		$sqlInsert = $thisInsertSqlEngine->constructSQL($thisTable);
		
		$code .= $this->getRetreiveFromFormCode("REQUEST");
		$code .= "\t\$sqlInsert = \"".$sqlInsert."\";".$this->getLineEnder();
		$code .= "\t\$resultInsert = MYSQL_QUERY(\$sqlInsert);".$this->getLineEnder();
		
		$code .= "\techo \"<b>Record has been inserted in Database<br></b>\";\n";

		$code .= "\t\$this".ucfirst($thisTable->getPrimaryKey())."FromForm = \"\";\n";

		$code .= "}\n\n";		
		
		
		$code .= "if (\$thisAction==\"Delete\")\n";
		$code .= "{\n";

		$thisDeleteSqlEngine = new  deleteSQLGenerator($thisTable->getTableName(),$thisTable->getDatabase());
		$sqlDelete = $thisDeleteSqlEngine->constructSQL($thisTable);

		$code .= $this->getRetreiveFromFormCode("REQUEST");
		$code .= "\t\$sqlDelete = \"".$sqlDelete."\";".$this->getLineEnder();
		$code .= "\t\$resultDelete = MYSQL_QUERY(\$sqlDelete);\n".$this->getLineEnder();

		$code .= "\techo \"<b>Record with Id \".\$this".ucfirst($thisTable->getPrimaryKey())."FromForm.\" has been Deleted<br></b>\";\n";

		$code .= "\t\$this".ucfirst($thisTable->getPrimaryKey())."FromForm = \"\";\n";
		$code .= "}\n\n";


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
		$thisTable = $this->getTableObject();

		$code = "";
		$code .= "A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>\n\n";

		// $code .= $this->generateViewRecordTable();

		$this->appendToCode($code);
	}

	function generateWhileLoopToGetData()
	{
		$thisTable = $this->getTableObject();

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



       $code .= $this->getEnterDataRowCode();


		$code .= "<?\n";
		$code .= $this->getCodeTab()."while (\$i<\$numberOfRows)\n";
		$code .= $this->getCodeTab()."{\n\n";

		$code .= $this->getCodeTab().$this->getCodeTab()."if ((\$i%2)==0) { \$bgColor = \"#FFFFFF\"; } else { \$bgColor = \"#C0C0C0\"; }\n\n";


		$code .= $this->generateGetDataFromDbForOneRow();

		$code .= "if (\$this".ucfirst($thisTable->getPrimaryKey())."FromForm == \$this".ucfirst($thisTable->getPrimaryKey()).")\n";
		$code .= "{\n";

		$code .= "\n?>\n";

		$code .= $this->getEditTableDataRowCode();

		$code .= "\n<?\n} else { \n?>\n";

		$code .= $this->generateTableDataRow();

		$code .= "\n<?\n}\n?>\n";

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

		$code .= $this->getCodeTab()."<TD><a href=\"<? echo \$_SERVER['PHP_SELF']; ?>?action=Edit&".NAME_FORM_FIELD_PREFIX.ucfirst($thisTable->getPrimaryKey()).NAME_FORM_FIELD_SUFFIX."=<? echo \$this".ucfirst($thisTable->getPrimaryKey())."; ?>\">".LANG_BASIC_EDIT."</a></TD>\n";
		$code .= $this->getCodeTab()."<TD><a href=\"<? echo \$_SERVER['PHP_SELF']; ?>?action=Delete&".NAME_FORM_FIELD_PREFIX.ucfirst($thisTable->getPrimaryKey()).NAME_FORM_FIELD_SUFFIX."=<? echo \$this".ucfirst($thisTable->getPrimaryKey())."; ?>\">".LANG_BASIC_DELETE."</a></TD>\n";

		$code .= $this->getCodeTab()."</TR>\n";

		return $code;

	}


	function getEnterDataRowCode()
	{
		$thisTable = $this->getTableObject();
		$fieldNames = $thisTable->getFieldNameArray();

		$code = "";

		$code .= "<?\n";
		$code .= "if (\$thisAction==\"EnterNew\")\n";
		$code .= "{\n";
		$code .= "?>\n";
		$code .= "<FORM NAME=\"insertForm\" METHOD=\"POST\" ACTION=\"<? echo \$_SERVER['PHP_SELF']; ?>\">\n";
		$code .= "<input type=\"hidden\" name=\"action\" value=\"Insert\">\n";
		$code .= "<input type=\"hidden\" name=\"".NAME_FORM_FIELD_PREFIX.ucfirst($thisTable->getPrimaryKey()).NAME_FORM_FIELD_SUFFIX."\" value=\"<? echo \$this".ucfirst($thisTable->getPrimaryKey())."; ?>\">\n";
		$code .= "\t<TR BGCOLOR=\"#FF6666\">\n";



		for ($a=0;$a<count($fieldNames);$a++)
		{
			$code .= $this->getCodeTab().$this->getCodeTab()."<TD>";
			$code .= "<input type\"text\" name=\"".NAME_FORM_FIELD_PREFIX.ucfirst($fieldNames[$a]).NAME_FORM_FIELD_SUFFIX."\" value=\"\">";
			$code .= "</TD>\n";
		}

		$code .= $this->getCodeTab()."<TD COLSPAN=2><input type=\"submit\" name=\"Insert\" Value=\"".LANG_BASIC_INSERT." ".LANG_BASIC_RECORD."\"> </TD>\n";

		$code .= $this->getCodeTab()."</TR>\n";

		$code .= "</FORM>\n";

		$code .= "\n<?\n } \n?>\n";

		return $code;

	}



	function getEditTableDataRowCode()
	{
		$thisTable = $this->getTableObject();
		$fieldNames = $thisTable->getFieldNameArray();

		$code = "";

		$code .= "<FORM NAME=\"editForm\" METHOD=\"POST\" ACTION=\"<? echo \$_SERVER['PHP_SELF']; ?>\">\n";
		$code .= "<input type=\"hidden\" name=\"action\" value=\"Update\">\n";
		$code .= "<input type=\"hidden\" name=\"".NAME_FORM_FIELD_PREFIX.ucfirst($thisTable->getPrimaryKey()).NAME_FORM_FIELD_SUFFIX."\" value=\"<? echo \$this".ucfirst($thisTable->getPrimaryKey())."; ?>\">\n";


		$code .= $this->getCodeTab()."<TR BGCOLOR=\"<? echo \$bgColor; ?>\">\n";

		for ($a=0;$a<count($fieldNames);$a++)
		{
			$code .= $this->getCodeTab().$this->getCodeTab()."<TD>";
			$code .= "<input type\"text\" name=\"".NAME_FORM_FIELD_PREFIX.ucfirst($fieldNames[$a]).NAME_FORM_FIELD_SUFFIX."\" value=\"<? echo \$".NAME_FORM_FIELD_PREFIX.ucfirst($fieldNames[$a])."; ?>\">";
			$code .= "</TD>\n";
		}

		$code .= $this->getCodeTab()."<TD COLSPAN=2><input type=\"button\" name=\"Save\" Value=\"".LANG_BASIC_SAVE."\" onClick=\"this.form.submit();\"> </TD>\n";

		$code .= $this->getCodeTab()."</TR>\n";

		$code .= "</FORM>\n";
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

		$code .= "<FORM NAME=\"insertForm\" METHOD=\"POST\" ACTION=\"<? echo \$_SERVER['PHP_SELF']; ?>\">\n";
		$code .= "<input type=\"hidden\" name=\"action\" value=\"EnterNew\">\n";
		$code .= "<input type=\"Submit\" name=\"submit\" value=\"".LANG_BASIC_INSERT." ".LANG_BASIC_NEW." ".LANG_BASIC_RECORD."\">\n";
		$code .= "</FORM>\n";

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
