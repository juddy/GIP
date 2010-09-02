<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_SIMPLE_DB_GENERATOR);
include_once(CLASS_SQL_ENGINE);
include_once(CLASS_SQL_ENGINE_INSERT_GENERATOR);
include_once(CLASS_HTML_FORM_ELEMENT_BUILDER);
include_once(CLASS_SQL_ENGINE_SELECT_GENERATOR);
?>
<? 
class simpleEnterFormGenerator extends commonSimpleDb
{

	function simpleEnterFormGenerator($arguments)
	{
		$db = $arguments['db'];
		$table = $arguments['table'];


		$this->setChosenFields($arguments['chosenFields']);
		$this->setFieldSizeArray($arguments['fieldSize']);
		$this->setFieldTypeArray($arguments['fieldType']);
		$this->setFieldLabelArray($arguments['label']);
		$this->setFormType($arguments['formType']);

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

		if ($this->getFormType()=="edit")
		{
			$this->appendToCode($this->generateGetDataFromDbForOneRowOOnPage());
		}

		$this->generateEnterForm();

		$this->appendWebFooter();

		return $this->getSourceCode();

	}



	function generateEnterForm()
	{
		$thisTable = $this->getTableObject();

		$thisHtmlFormBuilder = new htmlFormElementBuilder();

		if ($this->getFormType()=="enter")
		{   
			$actionName = LANG_BASIC_ENTER; $scriptName = "insertNew"; 
		}
		else if ($this->getFormType()=="edit") 
		{   
			$actionName = LANG_BASIC_UPDATE; $scriptName = "update"; 
		}

		$code = "";

		$code .= "<h2>".$actionName." ".ucfirst($thisTable->getTableName())."</h2>".$this->getLineEnder();
		$code .= "<form name=\"".strtolower($thisTable->getTableName()).ucfirst($actionName)."Form\" method=\"POST\" action=\"".$scriptName.ucfirst(strtolower($thisTable->getTableName())).".php\">".$this->getLineEnder().$this->getLineEnder();
		$code .= "<table cellspacing=\"2\" cellpadding=\"2\" border=\"0\" width=\"100%\">".$this->getLineEnder();


		$chosenFields = $this->getChosenFields();
		$fieldSizes = $this->getFieldSizeArray();
		$fieldTypes = $this->getFieldTypeArray();
		$fieldLabels = $this->getFieldLabelArray();

		for ($a=0;$a<count($chosenFields);$a++)
		{
			$fieldName = $chosenFields[$a];

			if ($this->getFormType()=="enter")
			{   
				$defaultValue = ""; 
			}
			else if ($this->getFormType()=="edit") 
			{   
				$defaultValue = "<? echo \$this".ucfirst($fieldName)."; ?>"; 
			}


			$code .= $this->getCodeTab()."<tr valign=\"top\" height=\"20\">".$this->getLineEnder();

			$code .= $this->getCodeTab().$this->getCodeTab();
			$code .= "<td align=\"right\"> <b> ".$fieldLabels[$fieldName]." </b> </td>".$this->getLineEnder();

			$code .= $this->getCodeTab().$this->getCodeTab();
			$code .= "<td> ";
			$code .= rtrim(ltrim($thisHtmlFormBuilder->buildAndPrintFormElement($fieldTypes[$fieldName],NAME_FORM_FIELD_PREFIX.ucfirst($fieldName).NAME_FORM_FIELD_SUFFIX,$defaultValue,$fieldSizes[$fieldName])));
			$code .= "  </td> ";
			$code .= $this->getLineEnder();
			$code .= $this->getCodeTab()."</tr>".$this->getLineEnder();
		}
		$code .= "</table>".$this->getLineEnder().$this->getLineEnder();
		$code .= "<input type=\"submit\" name=\"submit".ucfirst($actionName).ucfirst($thisTable->getTableName())."Form\" value=\"".ucfirst($actionName)." ".ucfirst($thisTable->getTableName())."\">".$this->getLineEnder();
		$code .= "<input type=\"reset\" name=\"resetForm\" value=\"".LANG_BASIC_CLEAR_FORM."\">".$this->getLineEnder().$this->getLineEnder();


		$code .= "</form>".$this->getLineEnder();
		$this->appendToCode($code);
	}





	// Variables
	var $chosenFields ;
	var $fieldSizeArray ;
	var $fieldTypeArray;
	var $fieldLabelArray;
	var $formType;

	/**
	* @return returns value of variable $chosenFields
	* @desc getChosenFields : Getting value for variable $chosenFields
	*/
	function getChosenFields ()
	{
		return $this->chosenFields ;
	}

	/**
	* @param param : value to be saved in variable $chosenFields
	* @desc setChosenFields : Setting value for $chosenFields
	*/
	function setChosenFields ($value)
	{
		$this->chosenFields  = $value;
	}

	/**
	* @return returns value of variable $fieldSizeArray
	* @desc getFieldSizeArray : Getting value for variable $fieldSizeArray
	*/
	function getFieldSizeArray ()
	{
		return $this->fieldSizeArray ;
	}

	/**
	* @param param : value to be saved in variable $fieldSizeArray
	* @desc setFieldSizeArray : Setting value for $fieldSizeArray
	*/
	function setFieldSizeArray ($value)
	{
		$this->fieldSizeArray  = $value;
	}

	/**
	* @return returns value of variable $fieldTypeArray
	* @desc getFieldTypeArray : Getting value for variable $fieldTypeArray
	*/
	function getFieldTypeArray()
	{
		return $this->fieldTypeArray;
	}

	/**
	* @param param : value to be saved in variable $fieldTypeArray
	* @desc setFieldTypeArray : Setting value for $fieldTypeArray
	*/
	function setFieldTypeArray($value)
	{
		$this->fieldTypeArray = $value;
	}
	/**
	* @return returns value of variable $fieldLabelArray
	* @desc getFieldLabelArray : Getting value for variable $fieldLabelArray
	*/
	function getFieldLabelArray()
	{
		return $this->fieldLabelArray;
	}

	/**
	* @param param : value to be saved in variable $fieldLabelArray
	* @desc setFieldLabelArray : Setting value for $fieldLabelArray
	*/
	function setFieldLabelArray($value)
	{
		$this->fieldLabelArray = $value;
	}

	/**
	* @return returns value of variable $formType
	* @desc getFormType : Getting value for variable $formType
	*/
	function getFormType()
	{
		return $this->formType;
	}

	/**
	* @param param : value to be saved in variable $formType
	* @desc setFormType : Setting value for $formType
	*/
	function setFormType($value)
	{
		$this->formType = $value;
	}


}

?>