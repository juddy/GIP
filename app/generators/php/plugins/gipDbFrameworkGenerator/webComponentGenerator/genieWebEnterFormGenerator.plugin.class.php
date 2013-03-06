<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
?>
<? 
class gipWebEnterFormGenerator extends commonGenieFramework
{



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
	
	function gipWebEnterFormGenerator($arguments)
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
		
		$thisTable = new table($table,$db);
		$this->setTableObject($thisTable);


		$this->initializeGenieFramework();

	}

	function generate()
	{
		$this->appendSuperHeader();
		$this->appendWebHeader();

		$this->buildInputForm();

		$this->appendWebFooter();

		return $this->getSourceCode();

	}

	function buildInputForm()
	{
		$thisTable = $this->getTableObject();
        $chosenFields = $this->getChosenFields();
		
		$code = "";

		$code .= "<h2>".LANG_BASIC_ENTER." ".ucfirst($thisTable->getTableName())."</h2>".$this->getLineEnder();
		$code .= "<form name=\"".strtolower($thisTable->getTableName()).ucfirst(NAME_WEB_ENTER)."Form\" method=\"POST\" action=\"<? echo ".NAME_PAGE_PREFIX.NAME_SEPARATOR.strtoupper(NAME_WEB_INSERT).NAME_SEPARATOR.strtoupper($thisTable->getTableName())."; ?>\">".$this->getLineEnder();
		$code .= "<table cellspacing=\"2\" cellpadding=\"2\" border=\"0\">".$this->getLineEnder();
		
		for ($a=0;$a<count($chosenFields);$a++)
		{
			$fieldName = $chosenFields[$a];
		
		

			$code .= $this->getCodeTab()."<tr valign=\"top\" height=\"20\">".$this->getLineEnder();

			$code .= $this->getCodeTab().$this->getCodeTab();
			$code .= "<td align=\"right\"> <b> <? echo LABEL_".strtoupper($thisTable->getTableName())."_".strtoupper($fieldName)."; ?> : </b> </td>".$this->getLineEnder();

			$code .= $this->getCodeTab().$this->getCodeTab();
			$code .= "<td> <input type=\"textfield\" name=\"".NAME_FORM_FIELD_PREFIX.ucfirst($fieldName).NAME_FORM_FIELD_SUFFIX."\" value=\"\" size=\"20\"> </td>".$this->getLineEnder();
			$code .= $this->getCodeTab()."</tr>".$this->getLineEnder();
		}

		$code .= $this->getCodeTab();
		$code .= "<tr>\n";
		$code .= $this->getCodeTab();
		$code .= "<td colspan=2>\n";
		$code .= $this->getCodeTab().$this->getCodeTab();
		$code .= "<br><input type=\"submit\" name=\"submitEnter".ucfirst($thisTable->getTableName())."Form\" value=\"".ucfirst(strtolower(LANG_BASIC_INSERT))." ".ucfirst($thisTable->getTableName())."\">".$this->getLineEnder();
		$code .= $this->getCodeTab().$this->getCodeTab();
		$code .= "<input type=\"reset\" name=\"resetForm\" value=\"".LANG_BASIC_CLEAR_FORM."\">".$this->getLineEnder();
		$code .= $this->getCodeTab();
		$code .= "</td>\n";
		$code .= $this->getCodeTab();
		$code .= "</tr>\n";

		$code .= "</table>".$this->getLineEnder();


		$code .= "</form>".$this->getLineEnder();
		$this->appendToCode($code);
	}


}

?>