<? 
class commonGenieFramework
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
	
	var $elementsPerLine;
	var $infoName;
	var $tableName;
	
	
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
	* @return returns value of variable $elementsPerLine
	* @desc getElementsPerLine : Getting value for variable $elementsPerLine
	*/
	function getElementsPerLine()
	{
		return $this->elementsPerLine;
	}
	
	/**
	* @param param : value to be saved in variable $elementsPerLine
	* @desc setElementsPerLine : Setting value for $elementsPerLine
	*/
	function setElementsPerLine($value)
	{
		$this->elementsPerLine = $value;
	}
	
	/**
	* @return returns value of variable $infoName
	* @desc getInfoName : Getting value for variable $infoName
	*/
	function getInfoName()
	{
		return $this->infoName;
	}
	
	/**
	* @param param : value to be saved in variable $infoName
	* @desc setInfoName : Setting value for $infoName
	*/
	function setInfoName($value)
	{
		$this->infoName = $value;
	}
	
	/**
	* @return returns value of variable $tableName
	* @desc getTableName : Getting value for variable $tableName
	*/
	function getTableName()
	{
		return $this->tableName;
	}
	
	/**
	* @param param : value to be saved in variable $tableName
	* @desc setTableName : Setting value for $tableName
	*/
	function setTableName($value)
	{
		$this->tableName = $value;
	}
	
	function initializeGenieFramework($configurationFile="")
	{
		
		if ($configurationFile=="")
		{
			$thisT = $this->getTableObject();
			
			if ($thisT->getDatabase()!="")
			{
				$confFileName = strtolower($thisT->getDatabase());
			}
			else
			{
				$confFileName = DEFAULT_CONFIGURATION_FILE_NAME;
			}
			
			$configurationFile = $confFileName.".conf.php";
		}
		
		$this->setConfigurationFile($configurationFile);
		
		$this->setCodeStarter("<?php\n\n");
		$this->setCodeEnder("\n?>\n");
		$this->setCodeTab("\t");
		$this->setLineEnder("\n");
		$this->setSourceCode("");
		$this->setTableName($thisT->getTableName());
		$this->setInfoName(ucfirst($thisT->getTableName())."Info");
		$this->setElementsPerLine(2);
		
		
		
	}
	
	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc buildAppHeader :  put function description here ...
	*/
	function buildAppHeader ()
	{
		// Write Function Code Here
		
		
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
		$code .= $this->getCodeTab()."include_once(CONFIG_FILE);".$this->getLineEnder();
		$code .= $this->getCodeTab()."\$needAuth = true;       // set to true if this page needs authentication".$this->getLineEnder();
		$code .= $this->getCodeTab()."\$showHeader = true;     // set to true if you want the header to show on this page".$this->getLineEnder();
		$code .= $this->getCodeTab()."include_once(PAGE_HEADER);".$this->getLineEnder();
		
		
		$thisTable = $this->getTableObject();
		$tableName = $thisTable->getTableName();
		
		$code .= $this->getCodeTab()."include_once(".NAME_CLASS_PREFIX.NAME_SEPARATOR.strtoupper($tableName).NAME_SEPARATOR.NAME_MANAGER.");".$this->getLineEnder();
		$code .= "\n";
		$code .= $this->getCodeEnder();
		
		
		$this->appendToCode($code);
	}
	
	
	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc buildAppFooter :  put function description here ...
	*/
	function appendAppHeader()
	{
		
		
	}
	
	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc buildAppFooter :  put function description here ...
	*/
	function appendAppFooter ()
	{
		
		
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
		$code .= $this->getCodeTab()."include_once(PAGE_FOOTER);".$this->getLineEnder();
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
		$this->appendToCode($this->getCodeStarter().$this->getCodeTab().
		"include_once(\"".$this->getConfigurationFile()."\");".$this->getLineEnder().
		$this->getCodeEnder());
		
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
		$newCode = $this->getSourceCode().$code;
		
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
	
	function generateRetreiveFromForm($requestMethod="")
	{
		
		$code = "";
		$code .= $this->getCodeStarter();
		$code .= $this->getCodeToRetreiveFromForm($requestMethod);
		$code .= $this->getCodeEnder();
		$this->appendToCode($code);
	}
	
	
	function getCodeToRetreiveFromForm($requestMethod="")
	{
		if ($requestMethod=="")
		{
			$requestMethod = "REQUEST";
		}
		
		$code = "";
		
		$thisTable = $this->getTableObject();
		$fieldNameArray = $thisTable->getFieldNameArray();
		
		
		// $code .= "\t\$thisRequestUtils = new requestUtils();\n";
		
		for ($a=0;$a<count($fieldNameArray);$a++)
		{
			$fieldName = $fieldNameArray[$a];
			$code .= $this->getCodeTab();
			$code .= "\$this".ucfirst($fieldName)." = requestUtils::getRequestObject('".NAME_FORM_FIELD_PREFIX.ucfirst($fieldName).NAME_FORM_FIELD_SUFFIX."');".$this->getLineEnder();
			
		}
		
		$code .= "\n";
		
		return $code;
	}

	function buildGetInfoById($noGetId="")
	{
		
		$thisTable = $this->getTableObject();
		$code = $this->getGetInfoById($noGetId);

		$this->appendToCode($code);
	}	
	
	function getGetInfoById($noGetId="")
	{
		
		$thisTable = $this->getTableObject();
		
		$code = "";
		$code .= $this->getCodeStarter();
		
		
		if (!$noGetId)
		{
		   $code .= $this->getCodeTab()."\$this".ucfirst($thisTable->getPrimaryKey())." = requestUtils::getRequestObject('".$thisTable->getPrimaryKey()."');".$this->getLineEnder();
		}
		
		$code .= $this->getCodeTab()."\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_MANAGER))." = new ".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_MANAGER))."();".$this->getLineEnder();
		$code .= $this->getCodeTab()."\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))." = \$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_MANAGER))."->get".ucfirst($thisTable->getTableName())."ByPK(\$this".ucfirst($thisTable->getPrimaryKey()).");".$this->getLineEnder();
		
		$code .= $this->getCodeTab()."if (\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))." == false)\n";
		$code .= $this->getCodeTab()."{\n";
		$code .= "?>\n";
		$code .= LANG_ADVANCED_ERROR_RECORD_NOT_FOUND." <? echo \$this".ucfirst($thisTable->getPrimaryKey())."; ?>\n";
		$code .= "<?php\n";
		$code .= $this->getCodeTab().$this->getCodeTab()."exit;\n";
		$code .= $this->getCodeTab()."}\n";
		$code .= "?>\n";
		
	    return $code;
	}
	
	function buildBackToListAll()
	{
		$thisTable = $this->getTableObject();
		
		$linkToGoTo = "listAll".ucfirst($thisTable->getTableName()).".php";
		
		$code = "";
		$code .= "<br>";
		$code .= "<a href=\"".$linkToGoTo."\">".LANG_BASIC_GO_BACK." ".LANG_BASIC_TO." ".LANG_BASIC_LIST_ALL." ".$thisTable->getTableName()."</a>".$this->getLineEnder();
		$code .= "<br>";
		
		$this->appendToCode($code);	
		
	}
	
	function buildBackButton()
	{
		$code = "";
		$code .= "<input type=\"button\" name=\"cancel\" value=\"".LANG_BASIC_GO_BACK."\" onClick=\"javascript:history.back();\">".$this->getLineEnder();
		
		$this->appendToCode($code);
		
	}
	
	
	function generateViewInfoTable()
	{
		
		$thisTable = $this->getTableObject();
		$fieldNameArray = $thisTable->getFieldNameArray();
		$code = "";
		$code .= "<table cellspacing=5 cellpadding=0 border=0>".$this->getLineEnder();
		for ($a=0;$a<count($fieldNameArray);$a++)
		{
			$fieldName = $fieldNameArray[$a];
			$code .= $this->getCodeTab()."<tr>".$this->getLineEnder();
			
			$code .= $this->getCodeTab().$this->getCodeTab();
			$code .= "<td align=right> <b> <? echo LABEL_".strtoupper($thisTable->getTableName())."_".strtoupper($fieldName)."; ?> : </b> </td>".$this->getLineEnder();
			
			$code .= $this->getCodeTab().$this->getCodeTab();
			$code .= "<td> <? echo \$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."->get".ucfirst($fieldName)."(); ?> </td>".$this->getLineEnder();
			$code .= $this->getCodeTab()."</tr>".$this->getLineEnder();
		}
		$code .= "</table>".$this->getLineEnder();
		
		$this->appendToCode($code);
	}
	
	function generateSetFieldsIntoInfo($thisInfoName="",$fieldPrefix="")
	{
		
		$code = $this->getSetFieldsIntoInfo($thisInfoName,$fieldPrefix);
		
		$this->appendToCode($code);
	}
	
	
	function getSetFieldsIntoInfo($thisInfoName="",$fieldPrefix="")
	{
		
		$thisTable = $this->getTableObject();
		$code = "";
		
		if ($thisInfoName=="")
		{
			$thisInfoName = "\$this".ucfirst($thisTable->getTableName())."Info";
		}
		
		if ($fieldPrefix=="")
		{
			$fieldPrefix = "this";
		}
		
		$fieldNameArray = $thisTable->getFieldNameArray();
		
		for ($a=0;$a<count($fieldNameArray);$a++)
		{
			$fieldName = $fieldNameArray[$a];
			$code .= $this->getCodeTab();
			$code .= $thisInfoName."->set".ucfirst($fieldName)."(\$".$fieldPrefix.ucfirst($fieldName).");".$this->getLineEnder();
			
		}
		
		$code .= $this->getLineEnder();
		
		return $code;
	}
	
	
	function getManagerClassName($prefix="",$suffix="",$delimeter="")
	{
		if ($delimeter=="") { $delimeter = "_"; }
		if ($prefix=="") { $prefix = "CLASS"; }
		if ($suffix=="") { $suffix = "MANAGER"; }
		
		$className = $prefix.$delimeter.strtoupper($this->getTableName()).$delimeter.$suffix;
		
		return $className;
	}
	
	function getDaoClassName($prefix="",$suffix="",$delimeter="")
	{
		if ($delimeter=="") { $delimeter = "_"; }
		if ($prefix=="") { $prefix = "CLASS"; }
		if ($suffix=="") { $suffix = "DAO"; }
		
		$className = $prefix.$delimeter.strtoupper($this->getTableName()).$delimeter.$suffix;
		
		return $className;
	}
	
	function getInfoClassName($prefix="",$suffix="",$delimeter="")
	{
		if ($delimeter=="") { $delimeter = "_"; }
		if ($prefix=="") { $prefix = "CLASS"; }
		if ($suffix=="") { $suffix = "INFO"; }
		
		$className = $prefix.$delimeter.strtoupper($this->getTableName()).$delimeter.$suffix;
		
		return $className;
	}
	
	
	
	function getComments($return="",$param="",$desc="") {
		
		$today = date("Y-m-d");
		$year = date("Y");
		
		$code = "";
		$code .= "/** \n";
		$code .= "* @return ".$return." \n";
		$code .= "* @param ".$param." \n";
		$code .= "* @desc ".$desc."\n";
		
		$code .= "* @generationDate ".$today."\n";
		$code .= "* @version 1.0\n";
		$code .= "* @license GNU GPL License \n";
		$code .= "* @author Nilesh Dosooye <opensource@weboot.com> \n";
		$code .= "* @copyright Copyright &copy; ".$year.", Nilesh Dosooye \n";
		$code .= "*/ \n";
		
		return $code;
		
	}
	
	function getGenManagerHeader()
	{
		$code = "";
		$code .= "<?php\n";
		$code .= "include_once(CONFIG_FILE);\n";
		$code .= "include_once(CLASS_".strtoupper($this->getTableName())."_INFO);\n";
		$code .= "include_once(CLASS_".strtoupper($this->getTableName())."_GENDAO);\n";
		$code .= "include_once(CLASS_".strtoupper($this->getTableName())."_DAO);\n";
		$code .= "include_once(CLASS_DATABASE_RESULTS_INFO);\n";
		$code .= "?>";
		
		return $code;
	}
	
	function getGenDaoHeader()
	{
		$code = "";
		$code .= "<?php\n";
		$code .= "include_once(CONFIG_FILE);\n";
		$code .= "include_once(CLASS_DATABASE_QUERY);\n";
		$code .= "include_once(CLASS_".strtoupper($this->getTableName())."_INFO);\n";
		$code .= "include_once(CLASS_DATABASE_QUERY);\n";
		$code .= "include_once(CLASS_SEARCH_UTILS);\n";
		$code .= "?>";
		
		return $code;
	}
	
	function generateOneRow($edit="",$delete="",$view="")
	{
		$thisTable = $this->getTableObject();
		$code = "";
		
		
		$fields = $thisTable->getFieldNameArray();
		
		$code .= "<TR BGCOLOR=\"<? echo \$rowBgColor; ?>\" VALIGN=\"TOP\">".$this->getLineEnder();
		for ($a=0; $a<count($fields);$a++)
		{
			
			$code .= $this->getCodeTab()."<TD>".$this->getLineEnder();
			
			$code .= $this->getCodeTab().$this->getCodeTab()."<? echo \$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."->get".ucfirst($fields[$a])."(); ?>".$this->getLineEnder();
			$code .= $this->getCodeTab().$this->getCodeTab()."&nbsp;".$this->getLineEnder();
			
			$code .= $this->getCodeTab()."</TD>".$this->getLineEnder();
			
			
		}
		
		
		if ($edit=="y")
		{
			$code .= $this->getCodeTab()."<TD>".$this->getLineEnder();
			
			$code .= $this->getCodeTab().$this->getCodeTab()."<a href=\"edit".ucfirst($thisTable->getTableName()).".php?<? echo FIELD_".strtoupper($thisTable->getTableName())."_PK; ?>=<? echo \$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."->get".ucfirst($thisTable->getPrimaryKey())."(); ?>\">".LANG_BASIC_EDIT."</a>".$this->getLineEnder();
			$code .= $this->getCodeTab().$this->getCodeTab()."&nbsp;".$this->getLineEnder();
			
			$code .= $this->getCodeTab()."</TD>".$this->getLineEnder();
		}
		
		if ($delete=="y")
		{
			$code .= $this->getCodeTab()."<TD>".$this->getLineEnder();
			
			$code .= $this->getCodeTab().$this->getCodeTab()."<a href=\"confirmDelete".ucfirst($thisTable->getTableName()).".php?<? echo FIELD_".strtoupper($thisTable->getTableName())."_PK; ?>=<? echo \$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."->get".ucfirst($thisTable->getPrimaryKey())."(); ?>\">".LANG_BASIC_DELETE."</a>".$this->getLineEnder();
			$code .= $this->getCodeTab().$this->getCodeTab()."&nbsp;".$this->getLineEnder();
			
			$code .= $this->getCodeTab()."</TD>".$this->getLineEnder();
		}
		
		if ($view=="y")
		{
			$code .= $this->getCodeTab()."<TD>".$this->getLineEnder();
			
			$code .= $this->getCodeTab().$this->getCodeTab()."<a href=\"view".ucfirst($thisTable->getTableName()).".php?<? echo FIELD_".strtoupper($thisTable->getTableName())."_PK; ?>=<? echo \$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."->get".ucfirst($thisTable->getPrimaryKey())."(); ?>\">".LANG_BASIC_VIEW."</a>".$this->getLineEnder();
			$code .= $this->getCodeTab().$this->getCodeTab()."&nbsp;".$this->getLineEnder();
			
			$code .= $this->getCodeTab()."</TD>".$this->getLineEnder();
		}
		
		
		$code .= "</TR>".$this->getLineEnder();
		
		$this->appendToCode($code);
	}
	
	function getRowHeader()
	{
		$thisTable = $this->getTableObject();
		$code = "";
		
		$fields = $thisTable->getFieldNameArray();
		
		$code .= "<TR>".$this->getLineEnder();
		for ($a=0; $a<count($fields);$a++)
		{
			
			$code .= $this->getCodeTab()."<TD>".$this->getLineEnder();
			
			$code .= $this->getCodeTab().$this->getCodeTab()."<b><? echo LABEL_".strtoupper($thisTable->getTableName())."_".strtoupper($fields[$a])."; ?></b>".$this->getLineEnder();
			
			$code .= $this->getCodeTab()."</TD>".$this->getLineEnder();
		}
		$code .= "</TR>".$this->getLineEnder();
		
		return $code;
	}
	
	function generateRowHeader()
	{
		$code = $this->getRowHeader();
		$this->appendToCode($code);
	}
	
	
	function getSetInfoAndUpdate($thisInfoName="",$fieldPrefix="")
	{
		$thisTable = $this->getTableObject();
		
		if ($thisInfoName=="")
		{
			$thisInfoName = "\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER));
		}
		
		if ($fieldPrefix=="")
		{
			$fieldPrefix = "this";
		}
		
		$code = "";
		$code .= $this->getCodeStarter();
		$code .= $this->getSetFieldsIntoInfo($thisInfoName,$fieldPrefix);
		$code .= $this->getCodeTab()."\$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_MANAGER))."->update".ucfirst($thisTable->getTableName())."(".$thisInfoName.");".$this->getLineEnder();
		
		$code .= $this->getCodeEnder();
		$code .= $this->getLineEnder();
		$code .= "<br><b>".LANG_ADVANCED_UPDATE_DESC."<br><br></b>";
		$code .= $this->getLineEnder();
		
		return $code;
		
		
	}
}
	
?>