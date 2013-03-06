<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(PLUGIN_JAVA_COMMON_EJB_GENERATOR);
?>
<?
class ejbGenerator extends commonEjbGenerator
{
	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc gipDAOInsertGenerator :  put function description here ...
	*/
	function ejbGenerator ($arguments)
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
		$this->appendToCode($this->generateEjbHeader());
		$this->appendToCode($this->generateCommonEjbFunctions());

		$this->appendToCode($this->generateAbstractFields());
		$this->appendToCode($this->generateEjbCreate());
		$this->appendToCode($this->generateGetInfo());
		$this->appendToCode($this->generateSetInfo());

		$this->appendToCode($this->generateEjbFooter());




		return $this->getSourceCode();


	}

	function generateEjbHeader()
	{
		$code = "";
		$code .= $this->generateCopyrightNotice();
		$code .= "abstract public class ".$this->getTableName()." implements EntityBean {\n";


		return $code;

	}

	function generateImports()
	{
		$code = "";
		$code .= "package ".$this->getPackageRoot().".".$this->getTableName().".ejb;\n";
		$code .= "import javax.ejb.EntityBean;\n";
		$code .= "import javax.ejb.EntityContext;\n";
		$code .= "import javax.ejb.CreateException;\n";
		$code .= "import java.sql.SQLException;\n";
		$code .= "import ".$this->getPackageRoot().".".$this->getTableName().".util.".$this->getTableName()."Info;\n";

		return $code;


	}

	function generateEjbFooter()
	{
		$code = "";

		$code .= "\n}";

		return $code;
	}

	function generateCommonEjbFunctions()
	{
		$code = "";

		$code .= "private EntityContext ctx;\n";
		$code .= "public void setEntityContext(EntityContext context) {\n";
		$code .= "ctx = context;\n";
		$code .= "}\n";
		$code .= "public void unsetEntityContext() {\n";
		$code .= "ctx = null;\n";
		$code .= "}\n";
		$code .= "public void ejbActivate() {\n";
		$code .= "}\n";
		$code .= "public void ejbPassivate() {\n";
		$code .= "}\n";
		$code .= "public void ejbRemove() {\n";
		$code .= "}\n";
		$code .= "public void ejbStore() {\n";
		$code .= "}\n";
		$code .= "public void ejbLoad() {\n";
		$code .= "}\n";
		$code .= "public Integer ejbCreate() throws CreateException, SQLException {\n";
		$code .= "// Write your code here\n";
		$code .= "return null;\n";
		$code .= "}\n";
		$code .= "public void ejbPostCreate() throws CreateException, SQLException {\n";
		$code .= "// Write your code here\n";
		$code .= "}\n";
		$code .= "public void ejbPostCreate(PepsynAnalogInfo param) throws CreateException, SQLException {\n";
		$code .= "// Write your code here\n";
		$code .= "}\n";

		return $code;
	}

	function generateAbstractFields()
	{
		$fieldNames = $this->getFieldsArray();
		$fieldTypes = $this->getFieldTypes();
		$fieldLabels = $this->getFieldLabels();

		$code = "";

		for ($a=0;$a<count($fieldNames);$a++)
		{	
			$code .= "public abstract ".$fieldTypes[$fieldNames[$a]]." get".ucfirst($fieldLabels[$fieldNames[$a]])."();\n\n";
		}

		$code .= "\n\n";

		return $code;
	}

	function generateEjbCreate()
	{
		$code = "";
		$code .= "public Integer ejbCreate(".$this->getTableName()."Info param) throws CreateException, SQLException {\n";
		$code .= "//Set attributes.\n";
		$code .= "this.set".ucfirst($this->getTableName())."Info(param);\n";
		$code .= "return null;\n";
		$code .= "}\n";

		return $code;
	}

	function generateGetInfo()
	{
		$fieldNames = $this->getFieldsArray();
		$fieldTypes = $this->getFieldTypes();
		$fieldLabels = $this->getFieldLabels();

		$code = "";
		$code .= "public ".$this->getTableName()."Info get".ucfirst($this->getTableName())."Info() {\n";
		$code .= "".$this->getTableName()."Info info = new ".$this->getTableName()."Info();\n";
		$code .= "//Populate info object.\n";

		for ($a=0;$a<count($fieldNames);$a++)
		{
			$code .= "info.set".ucfirst($fieldLabels[$fieldNames[$a]])."(this.get".ucfirst($fieldLabels[$fieldNames[$a]])."());\n";
		}

		$code .= "//Return info object.\n";
		$code .= "return info;\n";
		$code .= "}\n";
		$code .= "";

		return $code;
	}

	function generateSetInfo()
	{
		$fieldNames = $this->getFieldsArray();
		$fieldTypes = $this->getFieldTypes();
		$fieldLabels = $this->getFieldLabels();

		$code = "";
		$code .= "public void set".$this->getTableName()."Info(".$this->getTableName()."Info info) {\n";
		$code .= "//Populate DB with info.\n";

		for ($a=0;$a<count($fieldNames);$a++)
		{
			$code .= "this.set".ucfirst($fieldLabels[$fieldNames[$a]])."(info.get".ucfirst($fieldLabels[$fieldNames[$a]])."());\n";
		}

		$code .= "}\n";
		$code .= "";

		return $code;
	}



}

?>