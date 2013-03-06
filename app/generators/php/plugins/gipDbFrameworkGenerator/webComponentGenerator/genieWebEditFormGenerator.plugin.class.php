<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
?>
<? 
class gipWebEditFormGenerator extends commonGenieFramework
{
	
	function gipWebEditFormGenerator($arguments)
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
		
		$this->buildGetInfoById();
		$this->buildEditForm();
		
		$this->appendWebFooter();
		
		return $this->getSourceCode();
		
	}
	
	

	
	function buildEditForm()
	{
		$thisTable = $this->getTableObject();
		$fieldNameArray = $thisTable->getFieldNameArray();
		
		$code = "";

		$code .= "<h2>".LANG_BASIC_EDIT." ".$thisTable->getTableName()."</h2>".$this->getLineEnder();		
		$code .= "<form name=\"".strtolower($thisTable->getTableName()).ucfirst(NAME_WEB_EDIT)."Form\" method=\"POST\" action=\"<? echo ".NAME_PAGE_PREFIX.NAME_SEPARATOR.strtoupper(NAME_WEB_UPDATE).NAME_SEPARATOR.strtoupper($thisTable->getTableName())."; ?>\">".$this->getLineEnder();		
		$code .= "<table cellspacing=\"8\" cellpadding=\"0\" border=\"0\">".$this->getLineEnder();
		for ($a=0;$a<count($fieldNameArray);$a++)
		{
			$fieldName = $fieldNameArray[$a];
			$code .= $this->getCodeTab()."<tr valign=\"top\" height=\"20\">".$this->getLineEnder();
			
			$code .= $this->getCodeTab().$this->getCodeTab();
			$code .= "<td align=\"right\"> <b> <? echo LABEL_".strtoupper($thisTable->getTableName())."_".strtoupper($fieldName)."; ?> : </b> </td>".$this->getLineEnder();
			
			$code .= $this->getCodeTab().$this->getCodeTab();
			$code .= "<td> <input type=\"textfield\" name=\"".NAME_FORM_FIELD_PREFIX.ucfirst($fieldName).NAME_FORM_FIELD_SUFFIX."\" value=\"<? echo \$this".ucfirst($thisTable->getTableName()).ucfirst(strtolower(NAME_DATA_CONTAINER))."->get".ucfirst($fieldName)."(); ?>\" size=\"20\"> </td>".$this->getLineEnder();
			$code .= $this->getCodeTab()."</tr>".$this->getLineEnder();
		}
		$code .= "</table>".$this->getLineEnder();
		
		$code .= "<input type=\"submit\" name=\"submitEdit".ucfirst($thisTable->getTableName())."Form\" value=\"".ucfirst(strtolower(NAME_WEB_UPDATE))." ".ucfirst($thisTable->getTableName())."\">".$this->getLineEnder();		
		$code .= "<input type=\"reset\" name=\"resetForm\" value=\"Clear Form Values\">".$this->getLineEnder();		
		
		$code .= "</form>".$this->getLineEnder();		
		
		$this->appendToCode($code);
	}
	
	
	
}

?>