<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(PLUGIN_JAVA_COMMON_EJB_GENERATOR);
?>
<?
class ejbLocalHomeGenerator extends commonEjbGenerator
{

	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc gipDAOInsertGenerator :  put function description here ...
	*/
	function ejbLocalHomeGenerator ($arguments)
	{
		$db = $arguments['db'];
		$table = $arguments['table'];

		$this->setFieldTypes($this->changeBooleanFieldTypeToInt($arguments['fieldTypes']));
		$this->setFieldLabels($arguments['fieldLabels']);
		$this->setPackageRoot($_REQUEST['packageRoot']);

		$thisTable = new table($table,$db);
		$this->setTableObject($thisTable);
	}

	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc generate :  put function description here ...
	*/
	function generate()
	{

		$this->appendToCode($this->generateImports());
		$this->appendToCode($this->generateCopyrightNotice());
		$this->appendToCode($this->generateHeader());
		$this->appendToCode($this->generateContents());
		$this->appendToCode($this->generateFooter());

		return $this->getSourceCode();


	}


	function generateImports()
	{
		$code = "";
		$code .= "package ".$this->getPackageRoot().".".$this->getTableName().".ejb;\n";

		$code .= "import javax.ejb.EJBLocalHome;\n";
		$code .= "import javax.ejb.FinderException;\n";
		$code .= "import javax.ejb.CreateException;\n";
		$code .= "import java.sql.SQLException;\n";
		$code .= "import ".$this->getPackageRoot().".".$this->getTableName().".util.".$this->getTableName()."Info;\n";


		return $code;

	}

	function generateHeader()
	{
		$code ="";
		$code .= "public interface ".$this->getTableName()."LocalHome extends EJBLocalHome {";

		return $code;
	}

	function generateFooter()
	{
		$code = "";

		$code .= "\n}";

		return $code;
	}

	function generateContents()
	{
		$code = "";
		$code .= "//Deployment local reference to this entity bean.\n";
		$code .= "static public final String localRef = \"ejb/".$this->getTableName()."LocalRef\";\n";
		$code .= "".$this->getTableName()."Local create() throws CreateException, SQLException ;\n";
		$code .= "".$this->getTableName()."Local findByPrimaryKey(java.lang.Integer pk) throws FinderException;\n";
		$code .= "".$this->getTableName()."Local create(".$this->getTableName()."Info param) throws CreateException, SQLException;\n";

		return $code;
	}

}

?>