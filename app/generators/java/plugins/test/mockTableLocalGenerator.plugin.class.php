<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(PLUGIN_JAVA_COMMON_TEST_GENERATOR);
?>
<?
class mockTableLocalGenerator extends commonTestGenerator
{
	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc gipDAOInsertGenerator :  put function description here ...
	*/
	function mockTableLocalGenerator($arguments)
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
		$this->appendToCode($this->generateHeader());

		$this->appendToCode($this->generateTestLocalCode());

		$this->appendToCode($this->generateFooter());


		return $this->getSourceCode();


	}


	function generateHeader()
	{
		$code = "";
		$code .= $this->generateCopyrightNotice();
		return $code;

	}

	function generateImports()
	{
		$code = "";

		$code .= "package test.org.stjude.app.lims.pepsyn.analog.ejb;\n";

		$code .= "import ".$this->getPackageRoot().".".$this->getTableName().".ejb.".$this->getTableName()."LocalHome;\n";
		$code .= "import ".$this->getPackageRoot().".".$this->getTableName().".ejb.".$this->getTableName()."Local;\n";
		$code .= "import ".$this->getPackageRoot().".".$this->getTableName().".util.".$this->getTableName()."Info;\n";

		$code .= "package test.org.stjude.app.lims.pepsyn.analog.ejb;\n";
		$code .= "import test.org.stjude.app.common.testutil.MockLocalImpl;\n";
		$code .= "import org.stjude.app.lims.pepsyn.analog.ejb.PepsynAnalogLocal;\n";
		$code .= "import org.stjude.app.lims.pepsyn.analog.util.PepsynAnalogInfo;\n";




		return $code;


	}

	function generateFooter()
	{
		$code = "";

		return $code;
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


	function generateSetIntoInfo()
	{
		$fieldNames = $this->getFieldsArray();
		$fieldTypes = $this->getFieldTypes();
		$fieldLabels = $this->getFieldLabels();

		$code = "";

		for ($a=0;$a<count($fieldNames);$a++)
		{
			
			
			$code .= $this->getCodeTab()."info.set".$fieldLabels[$fieldNames[$a]]."(this.get".$fieldLabels[$fieldNames[$a]]."());\n";
		}

		$code .= "\n";

		return  $code;
	}	
	
	function generateGetInfo()
	{
		$code = "";
		$code .= "public ".$this->getTableName()."Info get".$this->getTableName()."Info() {\n";
		$code .= "".$this->getTableName()."Info info = new ".$this->getTableName()."Info();\n";
		$code .= "//Populate info object.\n";

		$code .= "info.setId(this.getId());\n";
		$code .= "info.setName(this.getName());\n";
		$code .= "info.setCharge(this.getCharge());\n";
		$code .= "info.setMolWt(this.getMolWt());\n";
		$code .= "info.setSubstValue(this.getSubstValue());\n";
		$code .= "info.setType(this.getType());\n";
		$code .= "info.setActive(this.getActive()==0 ? true:false);\n";
		$code .= "//Return info object.\n";
		$code .= "return info;\n";
		$code .= "}\n";

		return $code;
	}

	function generateSetInfo()
	{
		$code = "";
		$code .= "public void set".$this->getTableName()."Info(".$this->getTableName()." info) {\n";
		$code .= "//Populate DB with info.\n";
		$code .= "this.setCharge(info.getCharge());\n";
		$code .= "this.setMolWt(info.getMolWt());\n";
		$code .= "this.setSubstValue(info.getSubstValue());\n";
		$code .= "this.setName(info.getName());\n";
		$code .= "this.setType(info.getType());\n";
		$code .= "this.setActive(info.isActive() ? 0:-1);\n";
		$code .= "}\n";

		return $code;
	}

	function generateTestLocalCode()
	{

		$code = "";
		$code .= "public class MockPepsynAnalogLocalImpl extends MockLocalImpl implements ".$this->getTableName()."Local {\n";

		$code .= $this->generateVariables();

		$code .= "//###Methods that dealwith info object and/or relationship###.\n";


		$code .= "//###Getting/Setting methods for attributes in this bean###.\n";
		$code .= "public Integer getId() {\n";
		$code .= "return id;\n";
		$code .= "}\n";
		$code .= "public void setId(Integer id) {\n";
		$code .= "this.id = id;\n";
		$code .= "}\n";
		$code .= "public String getType() {\n";
		$code .= "return type;\n";
		$code .= "}\n";
		$code .= "public void setType(String type) {\n";
		$code .= "this.type = type;\n";
		$code .= "}\n";
		$code .= "public String getName() {\n";
		$code .= "return name;\n";
		$code .= "}\n";
		$code .= "public void setName(String name) {\n";
		$code .= "this.name = name;\n";
		$code .= "}\n";
		$code .= "public double getCharge() {\n";
		$code .= "return charge;\n";
		$code .= "}\n";
		$code .= "public void setCharge(double charge) {\n";
		$code .= "this.charge = charge;\n";
		$code .= "}\n";
		$code .= "public double getMolWt() {\n";
		$code .= "return molWt;\n";
		$code .= "}\n";
		$code .= "public void setMolWt(double molWt) {\n";
		$code .= "this.molWt = molWt;\n";
		$code .= "}\n";
		$code .= "public double getSubstValue() {\n";
		$code .= "return substValue;\n";
		$code .= "}\n";
		$code .= "public void setSubstValue(double substValue) {\n";
		$code .= "this.substValue = substValue;\n";
		$code .= "}\n";
		$code .= "public int getActive() {\n";
		$code .= "return active;\n";
		$code .= "}\n";
		$code .= "public void setActive(int active) {\n";
		$code .= "this.active = active;\n";
		$code .= "}\n";
		$code .= "}\n";

		return $code;
	}


}

?>