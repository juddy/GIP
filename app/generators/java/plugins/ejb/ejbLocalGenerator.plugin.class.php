<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(PLUGIN_JAVA_COMMON_EJB_GENERATOR);
?>
<?
class ejbLocalGenerator extends commonEjbGenerator
{

	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc gipDAOInsertGenerator :  put function description here ...
	*/
	function ejbLocalGenerator ($arguments)
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
		$code .= "import javax.ejb.EJBLocalObject;\n";
		$code .= "import java.lang.Integer;\n";
		$code .= "import java.lang.String;\n";
		$code .= "import ".$this->getPackageRoot().".".$this->getTableName().".util.".$this->getTableName()."Info;\n";


		return $code;

	}

	function generateHeader()
	{
		$code ="";
		$code .= "public interface ".$this->getTableName()."Local extends EJBLocalObject {\n";

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
		$fieldNames = $this->getFieldsArray();
		$fieldTypes = $this->getFieldTypes();
		$fieldLabels = $this->getFieldLabels();
		
		$code = "";
			
		for ($a=0;$a<count($fieldNames);$a++)
		{
		      $code .= $this->generateGetSignature($fieldLabels[$fieldNames[$a]],$fieldTypes[$fieldNames[$a]]);
		      $code .="\n";
		      
		      $code .= $this->generateSetSignature($fieldLabels[$fieldNames[$a]],$fieldTypes[$fieldNames[$a]]);
		      $code .="\n";		      	
		}

		return $code;
	}
	

}

?>