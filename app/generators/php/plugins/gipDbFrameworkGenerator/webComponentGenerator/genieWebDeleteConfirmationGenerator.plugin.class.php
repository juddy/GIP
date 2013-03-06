<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
?>
<? 
class gipWebDeleteConfirmationGenerator extends commonGenieFramework
{

	function gipWebDeleteConfirmationGenerator($arguments)
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
                               
		$code = "";
		$code .= "<h2>".LANG_ADVANCED_CONFIRM_DELETE."</h2>".$this->getLineEnder();
		$code .= LANG_ADVANCED_CONFIRM_DELETE_DESC.$this->getLineEnder();
		$this->appendToCode($code);		
		

		$this->buildGetInfoById();
		$this->generateViewInfoTable();

		$this->buildConfirmDeleteForm();

		$this->appendWebFooter();

		return $this->getSourceCode();

	}


	function buildConfirmDeleteForm()
	{

		$thisTable = $this->getTableObject();


		$code = "";

		$code .= "<h3>".LANG_ADVANCED_CONFIRM_DELETE_ARE_YOU_SURE.ucfirst($thisTable->getTableName()).", ".LANG_ADVANCED_CONFIRM_DELETE_PRESS_BUTTON."</h3><br><br>".$this->getLineEnder();
		$code .= "<form name=\"".strtolower($thisTable->getTableName()).ucfirst(NAME_WEB_ENTER)."Form\" method=\"POST\" action=\"<? echo ".NAME_PAGE_PREFIX.NAME_SEPARATOR.strtoupper(NAME_WEB_DELETE).NAME_SEPARATOR.strtoupper($thisTable->getTableName())."; ?>\">".$this->getLineEnder();
		$code .= "<input type=\"hidden\" name=\"".$thisTable->getPrimaryKey()."\" value=\"<? echo \$this".ucfirst($thisTable->getPrimaryKey())."; ?>\">".$this->getLineEnder();

		$code .= "<input type=\"submit\" name=\"submitConfirmDelete".ucfirst($thisTable->getTableName())."Form\" value=\"".ucfirst(strtolower(LANG_BASIC_DELETE))." ".LANG_BASIC_FROM." ".ucfirst($thisTable->getTableName())."\">".$this->getLineEnder();
		$code .= "<input type=\"button\" name=\"cancel\" value=\"".LANG_BASIC_GO_BACK."\" onClick=\"javascript:history.back();\">".$this->getLineEnder();

		$code .= "</form>".$this->getLineEnder();

		$this->appendToCode($code);
	}


}

?>