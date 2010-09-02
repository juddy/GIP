<?
class commonJavaGenerator
{

	// Variables
	// codeTab  field from table
	var $codeTab ;
	// lineEnder  field from table
	var $lineEnder ;
	// Variables
	// tableObject  field from table
	var $tableObject ;
	// code field from table
	var $sourceCode;
	var $tableName ;
	var $fieldsArray;
	var $fieldLabels ;
	var $fieldTypes;
	var $packageRoot;

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
		$this->setTableName(strtolower($value->getTableName()));
		$this->setFieldsArray($value->getFieldNameArray());
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
	* @return returns value of variable $tableName
	* @desc getTableName : Getting value for variable $tableName
	*/
	function getTableName ()
	{
		return $this->tableName ;
	}

	/**
	* @param param : value to be saved in variable $tableName
	* @desc setTableName : Setting value for $tableName
	*/
	function setTableName ($value)
	{
		$this->tableName = $value;
	}

	/**
	* @return returns value of variable $fieldsArray
	* @desc getFieldsArray : Getting value for variable $fieldsArray
	*/
	function getFieldsArray()
	{
		return $this->fieldsArray;
	}

	/**
	* @param param : value to be saved in variable $fieldsArray
	* @desc setFieldsArray : Setting value for $fieldsArray
	*/
	function setFieldsArray($value)
	{
		$this->fieldsArray = $value;
	}

	/**
	* @return returns value of variable $fieldLabels
	* @desc getFieldLabels : Getting value for variable $fieldLabels
	*/
	function getFieldLabels ()
	{
		return $this->fieldLabels ;
	}

	/**
	* @param param : value to be saved in variable $fieldLabels
	* @desc setFieldLabels : Setting value for $fieldLabels
	*/
	function setFieldLabels ($value)
	{
		$this->fieldLabels = $value;
	}

	/**
	* @return returns value of variable $fieldTypes
	* @desc getFieldTypes : Getting value for variable $fieldTypes
	*/
	function getFieldTypes()
	{
		return $this->fieldTypes;
	}

	/**
	* @param param : value to be saved in variable $fieldTypes
	* @desc setFieldTypes : Setting value for $fieldTypes
	*/
	function setFieldTypes($value)
	{
		$this->fieldTypes = $value;
	}

	/**
	* @return returns value of variable $packageRoot
	* @desc getPackageRoot : Getting value for variable $packageRoot
	*/
	function getPackageRoot()
	{
		return $this->packageRoot;
	}

	/**
	* @param param : value to be saved in variable $packageRoot
	* @desc setPackageRoot : Setting value for $packageRoot
	*/
	function setPackageRoot($value)
	{
		$this->packageRoot = $value;
	}


	function initializeCommonJavaFramework()
	{
		$this->setConfigurationFile($configurationFile);

		$this->setCodeTab("\t\t");
		$this->setLineEnder("\n");
		$this->setSourceCode("");

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

	function renameToJava($fieldName)
	{
		$newFieldName = ucfirst(strtolower($fieldName));
		return $newFieldName;
	}

	function generateCopyrightNotice()
	{
		$code = "";

		$code .= "/**\n";
		$code .= "* @(#) Copyright (c) 2004\n";
		$code .= "* Put copyright statement here\n";
		$code .= "*/\n";

		return $code;

	}


	function generateGet($fieldName,$fieldType="String")
	{
		$code = "";

		if ($fieldType==="boolean")
		{
			$code .= $this->getCodeTab()."public ".$fieldType." is".ucfirst($fieldName)."() {\n";
			$code .= $this->getCodeTab().$this->getCodeTab()."return ".$fieldName.";\n";
			$code .= $this->getCodeTab()."}\n";
		}
		else
		{

			$code .= $this->getCodeTab()."public ".$fieldType." get".ucfirst($fieldName)."() {\n";
			$code .= $this->getCodeTab().$this->getCodeTab()."return ".$fieldName.";\n";
			$code .= $this->getCodeTab()."}\n";

		}
		return $code;


	}

	
	function generateSet($fieldName,$fieldType="String")
	{

		$code = "";

		$code .= $this->getCodeTab()."public void set".ucfirst($fieldName)."(".$fieldType." ".$fieldName.") {\n";
		$code .= $this->getCodeTab().$this->getCodeTab()."this.".$fieldName." = ".$fieldName.";\n";
		$code .= $this->getCodeTab()."}\n";
		$code .= "";

		return $code;
	}
	
	
	function generateGetSignature($fieldName,$fieldType="String")
	{
		$code = "";
		$code .= $this->getCodeTab()."".$fieldType." get".ucfirst($fieldName)."();\n";
		return $code;
	}

	
	function generateSetSignature($fieldName,$fieldType="String")
	{

		$code = "";
		$code .= $this->getCodeTab()."void set".ucfirst($fieldName)."(".$fieldType." ".$fieldName.");\n";
		return $code;
	}
}

?>