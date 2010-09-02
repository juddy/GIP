<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(PLUGIN_JAVA_COMMON_EJB_GENERATOR);
?>
<?
class ejbBeanGenerator extends commonEjbGenerator
{
	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc genieDAOInsertGenerator :  put function description here ...
	*/
	function ejbBeanGenerator ($arguments)
	{
		$db = $arguments['db'];
		$table = $arguments['table'];

		$this->setFieldTypes($arguments['fieldTypes']);
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

		$this->appendToCode($this->generateBeanHeader());
		$this->appendToCode($this->generateVariables());
		$this->appendToCode($this->generateGetAndSet());
		$this->appendToCode($this->generateBeanFooter());

		return $this->getSourceCode();


	}


	function generateVariables()
	{
		$fieldNames = $this->getFieldsArray();
		$fieldTypes = $this->getFieldTypes();
		$fieldLabels = $this->getFieldLabels();

		$code = "";

		for ($a=0;$a<count($fieldNames);$a++)
		{
			$code .= $this->getCodeTab()."private ".$fieldTypes[$fieldNames[$a]]." ".$fieldLabels[$fieldNames[$a]].";\n";
		}

		$code .= "\n";

		return  $code;


	}

	function generateBeanHeader()
	{

		$code = "";
		$code .= "package ".$this->getPackageRoot().".".$this->getTableName().".util;\n";
		$code .= "import java.io.Serializable;\n";
		$code .= $this->generateCopyrightNotice();
		$code .= "public class ".$this->getTableName()."Info implements Serializable {\n\n";
		$code .= "";

		return $code;
	}

	function generateBeanFooter()
	{
		$code = "\n}";

		return $code;
	}

	function generateGetAndSet()
	{
		$fieldNames = $this->getFieldsArray();
		$fieldTypes = $this->getFieldTypes();
		$fieldLabels = $this->getFieldLabels();


		$code = "";

		for ($a=0;$a<count($fieldNames);$a++)
		{

			$code .= $this->generateGet($fieldLabels[$fieldNames[$a]],$fieldTypes[$fieldNames[$a]]);
			$code .= "\n";
			$code .= $this->generateSet($fieldLabels[$fieldNames[$a]],$fieldTypes[$fieldNames[$a]]);
			$code .= "\n";

		}

		$code .= "\n";

		return $code;

	}



}

?>