<? 
class commonSimpleDb
{

	// Variables
	// configurationFile  field from table
	var $configurationFile ;
	// codeStarter  field from table
	var $codeStarter ;
	// codeEnder  field from table
	var $codeEnder ;
	// codeTab  field from table
	var $codeTab ;
	// lineEnder  field from table
	var $lineEnder ;
	// Variables
	// tableObject  field from table
	var $tableObject ;
	// code field from table
	var $sourceCode;
	var $headerText ;
	var $footerText;



	/**
	* @return returns value of variable $configurationFile
	* @desc getConfigurationFile : Getting value for variable $configurationFile
	*/
	function getConfigurationFile ()
	{
		return $this->configurationFile ;
	}

	/**
	* @param param : value to be saved in variable $configurationFile
	* @desc setConfigurationFile : Setting value for $configurationFile
	*/
	function setConfigurationFile ($value)
	{
		$this->configurationFile  = $value;
	}


	/**
	* @return returns value of variable $codeStarter
	* @desc getCodeStarter : Getting value for variable $codeStarter
	*/
	function getCodeStarter ()
	{
		return $this->codeStarter ;
	}

	/**
	* @param param : value to be saved in variable $codeStarter
	* @desc setCodeStarter : Setting value for $codeStarter
	*/
	function setCodeStarter ($value)
	{
		$this->codeStarter  = $value;
	}

	/**
	* @return returns value of variable $codeEnder
	* @desc getCodeEnder : Getting value for variable $codeEnder
	*/
	function getCodeEnder ()
	{
		return $this->codeEnder ;
	}

	/**
	* @param param : value to be saved in variable $codeEnder
	* @desc setCodeEnder : Setting value for $codeEnder
	*/
	function setCodeEnder ($value)
	{
		$this->codeEnder  = $value;
	}

	/**
	* @return returns value of variable $codeTab
	* @desc getCodeTab : Getting value for variable $codeTab
	*/
	function getCodeTab ()
	{
		return $this->codeTab ;
	}

	/**
	* @param param : value to be saved in variable $codeTab
	* @desc setCodeTab : Setting value for $codeTab
	*/
	function setCodeTab ($value)
	{
		$this->codeTab  = $value;
	}

	/**
	* @return returns value of variable $lineEnder
	* @desc getLineEnder : Getting value for variable $lineEnder
	*/
	function getLineEnder ()
	{
		return $this->lineEnder ;
	}

	/**
	* @param param : value to be saved in variable $lineEnder
	* @desc setLineEnder : Setting value for $lineEnder
	*/
	function setLineEnder ($value)
	{
		$this->lineEnder  = $value;
	}


	/**
	* @return returns value of variable $tableObject
	* @desc getTableObject : Getting value for variable $tableObject
	*/
	function getTableObject ()
	{
		return $this->tableObject ;
	}

	/**
	* @param param : value to be saved in variable $tableObject
	* @desc setTableObject : Setting value for $tableObject
	*/
	function setTableObject ($value)
	{
		$this->tableObject  = $value;
	}

	/**
	* @return returns value of variable $code
	* @desc getCode : Getting value for variable $code
	*/
	function getSourceCode()
	{
		return $this->sourceCode;
	}

	/**
	* @param param : value to be saved in variable $code
	* @desc setCode : Setting value for $code
	*/
	function setSourceCode($value)
	{
		$this->sourceCode = $value;
	}

	/**
	* @return returns value of variable $headerText
	* @desc getHeaderText : Getting value for variable $headerText
	*/
	function getHeaderText ()
	{
		return $this->headerText ;
	}

	/**
	* @param param : value to be saved in variable $headerText
	* @desc setHeaderText : Setting value for $headerText
	*/
	function setHeaderText ($value)
	{
		$this->headerText  = $value;
	}

	/**
	* @return returns value of variable $footerText
	* @desc getFooterText : Getting value for variable $footerText
	*/
	function getFooterText()
	{
		return $this->footerText;
	}

	/**
	* @param param : value to be saved in variable $footerText
	* @desc setFooterText : Setting value for $footerText
	*/
	function setFooterText($value)
	{
		$this->footerText = $value;
	}


	function initializeSimpleDbFramework($configurationFile="")
	{

		if ($configurationFile=="")
		{
			$thisT = $this->getTableObject();
			$configurationFile = strtolower($thisT->getDatabase()).".conf.inc.php";
		}

		$this->setConfigurationFile($configurationFile);

		$this->setCodeStarter("<?php\n");
		$this->setCodeEnder("?>");
		$this->setCodeTab("\t");
		$this->setLineEnder("\n");
		$this->setSourceCode("");

	}


	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc buildWebHeader :  put function description here ...
	*/
	function appendWebHeader ()
	{
		$code = "";
		$code .= $this->getCodeStarter();

		if ($this->getHeaderText()=="")
		{

			$code .= $this->getCodeTab()."include_once(\"dbConnection.php\");".$this->getLineEnder();
			$code .= $this->getCodeTab()."include_once(\"header.php\");".$this->getLineEnder();

		}
		else
		{
			$code .= stripslashes($this->getHeaderText()).$this->getLineEnder();
		}

		$code .= $this->getCodeEnder();


		$this->appendToCode($code);
	}


	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc buildWebFooter :  put function description here ...
	*/
	function appendWebFooter ()
	{
		$code = "";
		$code .=  $this->getCodeStarter();

		if ($this->getFooterText()=="")
		{
			$code .= $this->getCodeTab()."include_once(\"footer.php\");".$this->getLineEnder();
		}
		else {
			$code .= stripslashes($this->getFooterText()).$this->getLineEnder();
		}

		$code .= $this->getCodeEnder();
		$this->appendToCode($code);
	}

	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc buildSuperHeader :  put function description here ...
	*/
	function appendSuperHeader ()
	{

	}

	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc buildSuperFoooter :  put function description here ...
	*/
	function appendSuperFoooter ()
	{
		// Write Function Code Here


	}

	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc appendToCode :  put function description here ...
	*/
	function appendToCode ($code)
	{
		$newCode = $this->getSourceCode().$code.$this->getLineEnder();;

		$this->setSourceCode($newCode);

	}

	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc prependToCode :  put function description here ...
	*/
	function prependToCode ($code)
	{
		$newCode = $code.$this->getLineEnder().$this->getSourceCode();

		$this->setSourceCode($newCode);
	}


	function generateGetDataFromDbForOneRowOOnPage()
	{
		$thisTable = $this->getTableObject();

		$code = "";
		$code .= "<?php\n";
		$code .= "\$this".ucfirst($thisTable->getPrimaryKey())." = \$_REQUEST['".$thisTable->getPrimaryKey().NAME_FORM_FIELD_SUFFIX."']\n";
		$code .= "?>\n";

		$thisSqlEngine = new  selectSQLGenerator($thisTable->getTableName(),$thisTable->getDatabase()," * ","","","","","","y");


		$sql = $thisSqlEngine->constructSQL($thisTable);
		$code .= "<?php\n";
		$code .= "\$sql = \"".$sql."\";".$this->getLineEnder();
		$code .= "\$result = MYSQL_QUERY(\$sql);".$this->getLineEnder();
		$code .= "\$numberOfRows = MYSQL_NUMROWS(\$result);\n";

		$code .= "if (\$numberOfRows==0) {  \n?>\n\n";
		$code .= LANG_SIMPLE_INSIDE_SORRY_NO_RECORDS_FOUND."\n\n";
		$code .= "<?php\n}\n";
		$code .= "else if (\$numberOfRows>0) {\n\n";
		$code .= $this->getCodeTab()."\$i=0;\n";

		$code .= $this->generateGetDataFromDbForOneRow();
		$code .= "\n}\n";
		$code .= "?>\n";



		return $code;
	}


	function generateRetreiveFromForm($requestMethod="")
	{
		$code = "";
		$code .= $this->getCodeStarter();
		$code .= $this->getRetreiveFromFormCode($requestMethod);
		$code .= $this->getCodeEnder();

		$this->appendToCode($code);
	}


	function getRetreiveFromFormCode($requestMethod="")
	{
		$code = "";

		if ($requestMethod=="")
		{
			$requestMethod = DEFAULT_RETREIVE_METHOD;
		}

		$thisTable = $this->getTableObject();
		$fieldNameArray = $thisTable->getFieldNameArray();

		$code .= "\t// Retreiving Form Elements from Form\n";

		for ($a=0;$a<count($fieldNameArray);$a++)
		{
			$fieldName = $fieldNameArray[$a];
			$code .= $this->getCodeTab();
			$code .= "\$".NAME_FORM_FIELD_PREFIX.ucfirst($fieldName)." = addslashes(\$_".$requestMethod."['".NAME_FORM_FIELD_PREFIX.ucfirst($fieldName).NAME_FORM_FIELD_SUFFIX."']);".$this->getLineEnder();

		}

		$code .= "\n";

		return $code;

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



		return $code;
	}

	function generateViewRecordTable()
	{
		$thisTable = $this->getTableObject();

		$code = "";

		$fields = $thisTable->getFieldNameArray();

		$code .= "<table>\n";
		for ($a=0;$a<count($fields);$a++)
		{
			$code .= "<tr height=\"30\">\n";
			$code .= "\t<td align=\"right\"><b>";
			$code .= ucfirst($fields[$a])." : ";
			$code .= "</b></td>\n";
			$code .= "\t<td>";
			$code .= "<? echo \$".NAME_FORM_FIELD_PREFIX.ucfirst($fields[$a])."; ?>";

			$code .= "</td>\n";
			$code .= "</tr>\n";

		}
		$code .="</table>\n";

		return $code;
	}


}


?>