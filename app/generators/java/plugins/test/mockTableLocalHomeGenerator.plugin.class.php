<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(PLUGIN_JAVA_COMMON_TEST_GENERATOR);
?>
<?
class mockTableLocalHomeGenerator extends commonTestGenerator
{
	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc genieDAOInsertGenerator :  put function description here ...
	*/
	function mockTableLocalHomeGenerator ($arguments)
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

		$this->appendToCode($this->generateTestLocalHomeCode());

		$this->appendToCode($this->generateFooter());


		return $this->getSourceCode();


	}


	function generateHeader()
	{
		$code = "";
		$code .= $this->generateCopyrightNotice();
		$code .= "/**\n";
		$code .= "* Created by Yingliang Du.\n";
		$code .= "* Date: Jul 9, 2004\n";
		$code .= "* Time: 10:55:26 AM\n";
		$code .= "*\n";
		$code .= "* Comments on this class:\n";
		$code .= "* Mock object for ".$this->getTableName()."LocalHome.\n";
		$code .= "*/\n";	
		return $code;

	}

	function generateImports()
	{
		$code = "";
		
		$code .= "package test.org.stjude.app.lims.pepsyn.analog.ejb;\n";
		
		$code .= "import ".$this->getPackageRoot().".".$this->getTableName().".ejb.".$this->getTableName()."LocalHome;\n";
		$code .= "import ".$this->getPackageRoot().".".$this->getTableName().".ejb.".$this->getTableName()."Local;\n";
		$code .= "import ".$this->getPackageRoot().".".$this->getTableName().".util.".$this->getTableName()."Info;\n";
		
		$code .= "import javax.ejb.RemoveException;\n";
		$code .= "import javax.ejb.CreateException;\n";
		$code .= "import javax.ejb.FinderException;\n";
		$code .= "import java.util.Collection;\n";
		$code .= "import java.sql.SQLException;\n";
		
	
		

		return $code;


	}

	function generateFooter()
	{
		$code = "";

		return $code;
	}



	function generateTestLocalHomeCode()
	{

		$code = "";
		$code .= "public class Mock".$this->getTableName()."LocalHomeImpl implements ".$this->getTableName()."LocalHome {\n";
		$code .= "//This class information.\n";
		$code .= "static private String pkgName = \"test.org.stjude.app.lims.pepsyn.analog.ejb\";\n";
		$code .= "static private String clsName = \"Mock".$this->getTableName()."LocalHomeImpl\";\n";
		$code .= "static public String className = pkgName + \".\" + clsName;\n";
		$code .= "private ".$this->getTableName()."Local mockEJBLocal;\n";
		$code .= "private Collection mockEJBLocals;\n";
		$code .= "//Single Instance.\n";
		$code .= "private static Mock".$this->getTableName()."LocalHomeImpl _single;\n";
		$code .= "private Mock".$this->getTableName()."LocalHomeImpl() {\n";
		$code .= "}\n";
		$code .= "/**\n";
		$code .= "* Singleton Pattern.\n";
		$code .= "*/\n";
		$code .= "public static Mock".$this->getTableName()."LocalHomeImpl getInstance() {\n";
		$code .= "if (_single == null) {\n";
		$code .= "_single = new Mock".$this->getTableName()."LocalHomeImpl();\n";
		$code .= "}\n";
		$code .= "return _single;\n";
		$code .= "}\n";
		$code .= "//Setting mockLocal(s).\n";
		$code .= "public void setMockEJBLocal(".$this->getTableName()."Local mock) {\n";
		$code .= "this.mockEJBLocal = mock;\n";
		$code .= "}\n";
		$code .= "public void setMockEJBLocals(Collection mocks) {\n";
		$code .= "this.mockEJBLocals = mocks;\n";
		$code .= "}\n";
		$code .= "//***Methods from EJBLocalHome.\n";
		$code .= "public void remove(Object o) throws RemoveException {\n";
		$code .= "}\n";
		$code .= "//***Home business methods defined in localHome object.\n";
		$code .= "public ".$this->getTableName()."Local create() throws CreateException, SQLException {\n";
		$code .= "return mockEJBLocal;\n";
		$code .= "}\n";
		$code .= "public ".$this->getTableName()."Local findByPrimaryKey(Integer pk) throws FinderException {\n";
		$code .= "return mockEJBLocal;\n";
		$code .= "}\n";
		$code .= "public ".$this->getTableName()."Local create(".$this->getTableName()."Info info) throws CreateException, SQLException {\n";
		$code .= "//Real code--auto generated id; mock code--put id when init local.\n";
		$code .= "//Populate mock local with info param\n";
		$code .= "mockEJBLocal.set".$this->getTableName()."Info(info);\n";
		$code .= "//Return mock local object.\n";
		$code .= "return mockEJBLocal;\n";
		$code .= "}\n";
		$code .= "//***Developer defined finder/business methods.\n";
		$code .= "public Collection findAll() throws FinderException {\n";
		$code .= "return mockEJBLocals;\n";
		$code .= "}\n";
		$code .= "public Collection findByType(String typeId) throws FinderException {\n";
		$code .= "return mockEJBLocals;\n";
		$code .= "}\n";
		$code .= "}\n";

                              return $code;
	}	


}

?>