<? 
include_once("/GIP/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
?>
<? 
class gipWebCrudGridGenerator extends commonGenieFramework
{

	function gipWebCrudGridGenerator($arguments)
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

	function generateCRUDCode()
	{

		$thisTable = $this->getTableObject();

		$code = "";
		$code .= "<?\n";


		$code .= "";
		$code .= "\$this".ucfirst($thisTable->getPrimaryKey())."FromForm = \$_REQUEST['".NAME_FORM_FIELD_PREFIX.ucfirst($thisTable->getPrimaryKey()).NAME_FORM_FIELD_SUFFIX."'];\n";
		$code .= "\$thisAction = \$_REQUEST['action'];\n";

		// ENTER NEW ACTION
		$code .= "if (\$thisAction==\"EnterNew\")\n";
		$code .= "{\n";

		$code .= $this->getCodeTab()."\$enterNew = true;\n";

		$code .= "\n} // end of EDIT \n\n";


		// EDIT ACTION
		$code .= "if (\$thisAction==\"Edit\")\n";
		$code .= "{\n";

		$code .= $this->getCodeTab()."\$this".ucfirst($thisTable->getPrimaryKey())." = requestUtils::getRequestObject('".$thisTable->getPrimaryKey()."');".$this->getLineEnder();
		$code .= $this->getCodeTab()."\$activeEditId = \$this".ucfirst($thisTable->getPrimaryKey()).";".$this->getLineEnder();

		$code .= "\n} // end of EDIT \n\n";


		// UPDATE ACTION
		$code .= "if (\$thisAction==\"Update\")\n";
		$code .= "{\n";


		$code .= $this->getCodeToRetreiveFromForm("REQUEST");
		$code .= "\n?>\n";

		$code .= $this->getGetInfoById(true);

		$code .= $this->getSetInfoAndUpdate();

		$code .= "\n\n<?php\n";
		$code .= "} // end of UPDATE \n\n";

		// INSERT ACTION
		$code .= "if (\$thisAction==\"Insert\")\n";
		$code .= "{\n";

		$infoName = "\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER));


		$code .= $this->getCodeToRetreiveFromForm("REQUEST");

		$code .= $this->getCodeTab().$infoName." = new ".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."();".$this->getLineEnder();
		$code .= $this->getSetFieldsIntoInfo($infoName,$fieldPrefix);

		$code .= $this->getCodeTab()."\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_MANAGER))." = new ".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_MANAGER))."();".$this->getLineEnder();
		$code .= $this->getCodeTab()."\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_MANAGER))."->create".ucfirst($thisTable->getTableName())."(".$infoName.");".$this->getLineEnder();

		$code .= $this->getCodeEnder();

		$code .= "<h2>".LANG_BASIC_NEW." ".LANG_BASIC_RECORD." ".LANG_BASIC_INSERTED." ".LANG_BASIC_IN." ".LANG_BASIC_TABLE." ".$thisTable->getTableName()." </h2>";

		$code .= "\n\n<?php\n";
		$code .= "} // END OF INSERT \n\n";


		// DELETE ACTION
		$code .= "if (\$thisAction==\"Delete\")\n";
		$code .= "{\n";
		$code .= "?>\n";

		$code .= $this->getGetInfoById();

		$thisInfoName = "\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER));

		$code .= "\n<?\n\n";
		$code .= $this->getCodeTab()."\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_MANAGER))."->delete".ucfirst($thisTable->getTableName())."(".$thisInfoName.");".$this->getLineEnder();

		$code .= $this->getCodeEnder();
		$code .= $this->getLineEnder();
		$code .= "<br><b>".LANG_ADVANCED_RECORD_DELETED_PERMANENTLY."<br><br></b>";
		$code .= $this->getLineEnder();

		$code .= "\n\n<?php\n";
		$code .= "} // END OF DELETE \n\n";




		$code .= "\n?>";

		return $code;





	}

	function generateGetDataFromForm()
	{

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

		return $code;
	}

	function generateListAll()
	{

		$thisTable = $this->getTableObject();

		$code = "";
		$code .= $this->generateCRUDCode();
		$code .= $this->generateGetDataFromForm();

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
		$code .= $this->getEnterNewRecordButton();
		$code .= "<TABLE CELLPADDING=\"4\" CELLSPACING=\"0\" BORDER=\"1\" ID=\"table".ucfirst($thisTable->getTableName())."Id\" WIDTH=\"100%\">".$this->getLineEnder();
		$code .= $this->getRowHeader();

		$code .= $this->getCodeStarter();

		$code .= $this->getCodeTab()."for (\$a=0;\$a<count(\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."Array);\$a++)".$this->getLineEnder();
		$code .= $this->getCodeTab()."{".$this->getLineEnder();
		$code .= $this->getCodeTab()."\$activeEdit = false;".$this->getLineEnder();
		$code .= $this->getCodeTab().$this->getCodeTab()."\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))." = \$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."Array[\$a];".$this->getLineEnder();

		$code .= $this->getCodeTab().$this->getCodeTab()."if ((\$a%2)==0) { \$rowBgColor = ROW_COLOR1; } else { \$rowBgColor = ROW_COLOR2; }\n";

		$code .= $this->getCodeTab().$this->getCodeTab()."if (\$activeEditId == \$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."->get".ucfirst($thisTable->getPrimaryKey())."()) { \$rowBgColor = \"blue\"; \$activeEdit=true; }\n";

		$code .= $this->getCodeEnder();
		$code .= $this->getCodeForOneRow(false);

		$code .= $this->getCodeStarter();
		$code .= $this->getCodeTab()."} // end of loop for \$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."Array".$this->getLineEnder();

		$code .= "if (\$enterNew) { ?>\n";

		$code .= $this->getCodeForOneRow(true);

		$code .= "<? } ?>";

		$code .= $this->getLineEnder();
		$code .= "</TABLE>".$this->getLineEnder();

		$code .= $this->getCodeStarter();
		$code .= "} // end of else if count(\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."Array) == 0 \n";
 
		
		$code .= $this->getCodeEnder();

		$code .= $this->getEnterNewRecordButton();
		
		$this->appendToCode($code);
	}


	function getCodeForOneRow($new)
	{
		$thisTable = $this->getTableObject();
		$code = "";


		$fields = $thisTable->getFieldNameArray();

		if (!$new)
		{
			$code .= "<? if (\$activeEdit) { \n ?>\n";
			$code .= $this->getCodeTab()."<form name=\"editGrid\" method=\"post\" action=\"<? echo \$_SERVER['PHP_SELF']; ?>\">\n";
			$code .= "<? } \n ?>\n";
		}
		else
		{

			$code .= "<a name=\"enterNew\"></a>\n";
			$code .= $this->getCodeTab()."<form name=\"enterGrid\" method=\"post\" action=\"<? echo \$_SERVER['PHP_SELF']; ?>\">\n";

		}


		$code .= "<TR BGCOLOR=\"";

		if (!$new)
		{
			$code .= "<? echo \$rowBgColor; ?>";
		} else {
			$code .= "green";
		}


		$code .= "\" VALIGN=\"TOP\">".$this->getLineEnder();
		for ($a=0; $a<count($fields);$a++)
		{

			if (!$new)
			{

				$code .= "<? if (!\$activeEdit) { \n ?>\n";

				$code .= $this->getCodeTab()."<TD>".$this->getLineEnder();
				$code .= $this->getCodeTab().$this->getCodeTab()."<? echo \$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."->get".ucfirst($fields[$a])."(); ?>".$this->getLineEnder();
				$code .= $this->getCodeTab().$this->getCodeTab()."&nbsp;".$this->getLineEnder();
				$code .= $this->getCodeTab()."</TD>".$this->getLineEnder();

				$code .= "<? } else { \n ?>\n";


				$code .= $this->getCodeTab()."<TD>".$this->getLineEnder();
				$code .= $this->getCodeTab().$this->getCodeTab()."<INPUT TYPE=\"text\" NAME=\"".NAME_FORM_FIELD_PREFIX.ucfirst($fields[$a]).NAME_FORM_FIELD_SUFFIX."\" VALUE=\"<? echo \$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."->get".ucfirst($fields[$a])."(); ?>\">".$this->getLineEnder();
				$code .= $this->getCodeTab().$this->getCodeTab()."&nbsp;".$this->getLineEnder();
				$code .= $this->getCodeTab()."</TD>".$this->getLineEnder();

				$code .= "<? } ?>\n";
			}
			else
			{

				$code .= $this->getCodeTab()."<TD>".$this->getLineEnder();
				$code .= $this->getCodeTab().$this->getCodeTab()."<INPUT TYPE=\"text\" NAME=\"".NAME_FORM_FIELD_PREFIX.ucfirst($fields[$a]).NAME_FORM_FIELD_SUFFIX."\" VALUE=\"\">".$this->getLineEnder();
				$code .= $this->getCodeTab().$this->getCodeTab()."&nbsp;".$this->getLineEnder();
				$code .= $this->getCodeTab()."</TD>".$this->getLineEnder();

			}
		}


		if (!$new)
		{
			$code .= "<? if (!\$activeEdit) { \n ?>\n";

			$code .= $this->getCodeTab()."<TD>".$this->getLineEnder();

			$code .= $this->getCodeTab().$this->getCodeTab()."<a href=\"<? echo \$_SERVER['PHP_SELF']; ?>?action=Edit&<? echo FIELD_".strtoupper($thisTable->getTableName())."_PK; ?>=<? echo \$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."->get".ucfirst($thisTable->getPrimaryKey())."(); ?>\">".LANG_BASIC_EDIT."</a>";
			$code .= $this->getCodeTab().$this->getCodeTab()."&nbsp;".$this->getLineEnder();

			$code .= $this->getCodeTab()."</TD>".$this->getLineEnder();
			$code .= $this->getCodeTab()."<TD>".$this->getLineEnder();

			$code .= $this->getCodeTab().$this->getCodeTab()."<a href=\"<? echo \$_SERVER['PHP_SELF']; ?>?action=Delete&<? echo FIELD_".strtoupper($thisTable->getTableName())."_PK; ?>=<? echo \$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."->get".ucfirst($thisTable->getPrimaryKey())."(); ?>\">".LANG_BASIC_DELETE."</a>";
			$code .= $this->getCodeTab().$this->getCodeTab()."&nbsp;".$this->getLineEnder();

			$code .= $this->getCodeTab()."</TD>".$this->getLineEnder();

			$code .= "<? } else { \n ?>\n";


			$code .= "<TD COLSPAN=2>";

			$code .= "<INPUT TYPE=\"hidden\" NAME=\"action\" VALUE=\"Update\">\n";
			$code .= "<INPUT TYPE=\"submit\" NAME=\"Submit\" VALUE=\"Update\">\n";


			$code .= "</TD>";
			$code .= "<? } ?>";
		}
		else
		{



			$code .= "<TD COLSPAN=2>";

			$code .= "<INPUT TYPE=\"hidden\" NAME=\"action\" VALUE=\"Insert\">\n";
			$code .= "<INPUT TYPE=\"submit\" NAME=\"Submit\" VALUE=\"Insert New Record\">\n";


			$code .= "</TD>";

		}


		$code .= "</TR>".$this->getLineEnder();

		if (!$new)
		{
			$code .= "<? if (\$activeEdit) { \n ?>\n";
			$code .= $this->getCodeTab()."</FORM>\n";
			$code .= "<? } \n ?>\n";
		}
		else
		{
			$code .= $this->getCodeTab()."</FORM>\n";
		}



		return $code;
	}
	
	function getEnterNewRecordButton()
	{
            $code = "";
            $code .= "<? if(!\$enterNew) { ?>\n";
        
            
            $code .= "<br>";
            $code .= "<FORM ACTION=\"<? echo \$_SERVER['PHP_SELF']; ?>#enterNew\" METHOD=\"POST\">\n";
            $code .= "<INPUT NAME=\"submit\" TYPE=\"SUBMIT\" VALUE=\"Add New Record\">\n";
            $code .= "<INPUT NAME=\"action\" TYPE=\"HIDDEN\" VALUE=\"EnterNew\">\n";            
            $code .= "</FORM>\n";
            $code .= "<br>\n";
            
            $code .= "<? } ?>\n";

            // Returning Generated Code
            return $code;
	}

}

?>