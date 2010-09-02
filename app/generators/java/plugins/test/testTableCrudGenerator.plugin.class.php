<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(PLUGIN_JAVA_COMMON_TEST_GENERATOR);
?>
<?
class testTableCrudGenerator extends commonTestGenerator
{
	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc genieDAOInsertGenerator :  put function description here ...
	*/
	function testTableCrudGenerator ($arguments)
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

		$this->appendToCode($this->generateCode());

		$this->appendToCode($this->generateFooter());


		return $this->getSourceCode();


	}


	function generateHeader()
	{
		$code = "";
		$code .= $this->generateCopyrightNotice();
		$code .= "public class ".$this->getTableName()."CRUD {\n\n";
		$code .= "//This class information.\n";

		return $code;

	}

	function generateImports()
	{
		$code = "";
		$code .= "package org.stjude.app.common.util;\n";
		$code .= "import org.stjude.common.exception.SimsException;\n";
		$code .= "import org.stjude.common.util.ExceptionUtil;\n";
		$code .= "import org.stjude.common.object.TestFlag;\n";
		$code .= "import ".$this->getPackageRoot().".".$this->getTableName().".ejb.".$this->getTableName()."LocalHome;\n";
		$code .= "import ".$this->getPackageRoot().".".$this->getTableName().".ejb.".$this->getTableName()."Local;\n";
		$code .= "import ".$this->getPackageRoot().".".$this->getTableName().".util.".$this->getTableName()."Info;\n";
		$code .= "import javax.ejb.SessionContext;\n";
		$code .= "import test.org.stjude.app.lims.pepsyn.analog.ejb.Mock".$this->getTableName()."LocalHomeImpl;\n";

		return $code;


	}

	function generateFooter()
	{
		$code = "";

		$code .= "\n}";

		return $code;
	}


	function generateCreate()
	{
		$code .= "package test.org.stjude.app.common.util;\n";
		$code .= "import org.stjude.common.util.LogManager;\n";
		$code .= "import org.stjude.common.exception.SimsException;\n";
		$code .= "import org.stjude.app.common.util.PepsynAnalogCRUD;\n";
		$code .= "import org.stjude.app.common.exception.ObjectDeletedException;\n";
		$code .= "import org.stjude.app.lims.pepsyn.analog.util.PepsynAnalogInfo;\n";
		$code .= "import test.org.stjude.app.common.testutil.TestDomainEJB;\n";
		$code .= "import test.org.stjude.app.common.testutil.MockSessionContext;\n";
		$code .= "/**\n";
		$code .= "* Created by Yingliang Du.\n";
		$code .= "* Date: Jul 9, 2004\n";
		$code .= "* Time: 2:10:50 PM\n";
		$code .= "* <p/>\n";
		$code .= "* Unit test class for PepsynAnalogCRUD.\n";
		$code .= "*/\n";
		$code .= "public class TestPepsynAnalogCRUD extends TestDomainEJB {\n";
		$code .= "//This class information.\n";
		$code .= "static private String pkgName = \"test.org.stjude.app.common.util\";\n";
		$code .= "static private String clsName = \"TestPepsynAnalogCRUD\";\n";
		$code .= "static public String className = pkgName + \".\" + clsName;\n";
		$code .= "//Resourse used in this test case.\n";
		$code .= "private PepsynAnalogCRUD delegate;\n";
		$code .= "/**\n";
		$code .= "* Constructs a test case with the given name.\n";
		$code .= "*/\n";
		$code .= "public TestPepsynAnalogCRUD(String name) {\n";
		$code .= "super(name);\n";
		$code .= "}\n";
		$code .= "/**\n";
		$code .= "* main method to run this test.\n";
		$code .= "*/\n";
		$code .= "public static void main(String[] args) {\n";
		$code .= "junit.swingui.TestRunner.main(new String[]{className});\n";
		$code .= "}\n";
		$code .= "/**\n";
		$code .= "* Sets up the fixture, for example, open a network connection.\n";
		$code .= "* This method is called before a test is executed.\n";
		$code .= "*/\n";
		$code .= "protected void setUp() {\n";
		$code .= "String errMsg = clsName + \".setUp(): \";\n";
		$code .= "//Initiate resource used in this test case.\n";
		$code .= "try {\n";
		$code .= "super.setUp();\n";
		$code .= "//Set mock controllerHome class name into ejbJndiName class.\n";
		$code .= "//Instantiate delegate class.\n";
		$code .= "delegate = new PepsynAnalogCRUD(new MockSessionContext());\n";
		$code .= "//---Init MockPepsynAnalog objects.\n";
		$code .= "this.initMockPepsynAnalog();\n";
		$code .= "} catch (Exception ex) {\n";
		$code .= "LogManager.error(errMsg);\n";
		$code .= "ex.printStackTrace();\n";
		$code .= "fail(errMsg + \"Unexpected Exception in test code: \" + ex.toString());\n";
		$code .= "}\n";
		$code .= "}\n";
		$code .= "/**\n";
		$code .= "* Tears down the fixture, for example, close a network connection.\n";
		$code .= "* This method is called after a test is executed.\n";
		$code .= "*/\n";
		$code .= "protected void tearDown() {\n";
		$code .= "// Write your code here\n";
		$code .= "}\n";
		$code .= "public void testGetPepsynAnalogInfoById() {\n";
		$code .= "String errMsg = clsName + \".testGetPepsynAnalogInfoById(): \";\n";
		$code .= "try {\n";
		$code .= "//^^^Prepare test condition.^^^\n";
		$code .= "//---Prepare mocks\n";
		$code .= "//---Prepare parameters.\n";
		$code .= "//^^^Verify conditions before calling business method.^^^\n";
		$code .= "//^^^Calling tested business method.^^^\n";
		$code .= "object = delegate.getPepsynAnalogInfoById(dummyId);\n";
		$code .= "//^^^Verify results.^^^\n";
		$code .= "//---\n";
		$code .= "assure = \"Object returned should not be NULL.\";\n";
		$code .= "assertNotNull(assure, object);\n";
		$code .= "//---\n";
		$code .= "assure = \"The returned object should be the instance of right class.\";\n";
		$code .= "assertTrue(assure, object instanceof PepsynAnalogInfo);\n";
		$code .= "} catch (SimsException se) {\n";
		$code .= "LogManager.error(errMsg);\n";
		$code .= "se.printStackTrace();\n";
		$code .= "fail(errMsg + \"Unexpected SimsException: \" + se.toString());\n";
		$code .= "} catch (Exception ex) {\n";
		$code .= "LogManager.error(errMsg);\n";
		$code .= "ex.printStackTrace();\n";
		$code .= "fail(errMsg + \"Unexpected Exception in test code: \" + ex.toString());\n";
		$code .= "}\n";
		$code .= "}\n";
		$code .= "public void testUpdatePepsynAnalogInfo() {\n";
		$code .= "String errMsg = clsName + \".testUpdatePepsynAnalogInfo(): \";\n";
		$code .= "try {\n";
		$code .= "//^^^Prepare test condition.^^^\n";
		$code .= "//---Prepare mocks\n";
		$code .= "//---Prepare parameters.\n";
		$code .= "pepsynAnalogInfo = new PepsynAnalogInfo();\n";
		$code .= "//TODO: Did not set id.\n";
		$code .= "pepsynAnalogInfo.setName(\"updated\");\n";
		$code .= "//^^^Verify conditions before calling business method.^^^\n";
		$code .= "//^^^Calling tested business method.^^^\n";
		$code .= "delegate.updatePepsynAnalogInfo(pepsynAnalogInfo);\n";
		$code .= "PepsynAnalogInfo info = delegate.getPepsynAnalogInfoById(dummyId);\n";
		$code .= "//^^^Verify results.^^^\n";
		$code .= "//---\n";
		$code .= "assure = \"This field should be updated!\";\n";
		$code .= "assertEquals(assure, pepsynAnalogInfo.getName(), info.getName());\n";
		$code .= "} catch (SimsException se) {\n";
		$code .= "LogManager.error(errMsg);\n";
		$code .= "se.printStackTrace();\n";
		$code .= "fail(errMsg + \"Unexpected SimsException: \" + se.toString());\n";
		$code .= "} catch (Exception ex) {\n";
		$code .= "LogManager.error(errMsg);\n";
		$code .= "ex.printStackTrace();\n";
		$code .= "fail(errMsg + \"Unexpected Exception in test code: \" + ex.toString());\n";
		$code .= "}\n";
		$code .= "}\n";
		$code .= "public void testCreatePepsynAnalogInfo() {\n";
		$code .= "String errMsg = clsName + \".testCreatePepsynAnalogInfo(): \";\n";
		$code .= "try {\n";
		$code .= "//^^^Prepare test condition.^^^\n";
		$code .= "//---Prepare mocks\n";
		$code .= "//---Prepare parameters.\n";
		$code .= "pepsynAnalogInfo = new PepsynAnalogInfo();\n";
		$code .= "pepsynAnalogInfo.setName(\"created\");\n";
		$code .= "//^^^Verify conditions before calling business method.^^^\n";
		$code .= "//^^^Calling tested business method.^^^\n";
		$code .= "id = delegate.createPepsynAnalogInfo(pepsynAnalogInfo);\n";
		$code .= "//^^^Verify results.^^^\n";
		$code .= "//---\n";
		$code .= "assure = \"Returned object id should not be NULL.\";\n";
		$code .= "assertNotNull(assure, id);\n";
		$code .= "PepsynAnalogInfo info = delegate.getPepsynAnalogInfoById(id);\n";
		$code .= "//---\n";
		$code .= "assure = \"Verify the value of a field created!\";\n";
		$code .= "assertEquals(assure, pepsynAnalogInfo.getName(), info.getName());\n";
		$code .= "} catch (SimsException se) {\n";
		$code .= "LogManager.error(errMsg);\n";
		$code .= "se.printStackTrace();\n";
		$code .= "fail(errMsg + \"Unexpected SimsException: \" + se.toString());\n";
		$code .= "} catch (Exception ex) {\n";
		$code .= "LogManager.error(errMsg);\n";
		$code .= "ex.printStackTrace();\n";
		$code .= "fail(errMsg + \"Unexpected Exception in test code: \" + ex.toString());\n";
		$code .= "}\n";
		$code .= "}\n";
		$code .= "/**\n";
		$code .= "* Only activate and deactivate is needed for lookup data.\n";
		$code .= "*/\n";
		$code .= "public void testActivatePepsynAnalog() {\n";
		$code .= "String errMsg = clsName + \".testActivatePepsynAnalog(): \";\n";
		$code .= "try {\n";
		$code .= "//^^^Prepare test condition.^^^\n";
		$code .= "//---Prepare mocks\n";
		$code .= "//---Prepare parameters.\n";
		$code .= "//^^^Verify conditions before calling business method.^^^\n";
		$code .= "//^^^Calling tested business method.^^^\n";
		$code .= "delegate.activatePepsynAnalog(dummyId);\n";
		$code .= "//^^^Verify results.^^^\n";
		$code .= "//---\n";
		$code .= "pepsynAnalogInfo = delegate.getPepsynAnalogInfoById(dummyId);\n";
		$code .= "assure = \"The object should have been activated.\";\n";
		$code .= "assertTrue(assure, pepsynAnalogInfo.isActive());\n";
		$code .= "} catch (SimsException se) {\n";
		$code .= "LogManager.error(errMsg);\n";
		$code .= "se.printStackTrace();\n";
		$code .= "fail(errMsg + \"Unexpected SimsException: \" + se.toString());\n";
		$code .= "} catch (Exception ex) {\n";
		$code .= "LogManager.error(errMsg);\n";
		$code .= "ex.printStackTrace();\n";
		$code .= "fail(errMsg + \"Unexpected Exception in test code: \" + ex.toString());\n";
		$code .= "}\n";
		$code .= "}\n";
		$code .= "/**\n";
		$code .= "* Only activate and deactivate is needed for lookup data.\n";
		$code .= "*/\n";
		$code .= "public void testDeactivatePepsynAnalog() {\n";
		$code .= "String errMsg = clsName + \".testDeactivatePepsynAnalog(): \";\n";
		$code .= "try {\n";
		$code .= "//^^^Prepare test condition.^^^\n";
		$code .= "//---Prepare mocks\n";
		$code .= "//---Prepare parameters.\n";
		$code .= "//^^^Verify conditions before calling business method.^^^\n";
		$code .= "//^^^Calling tested business method.^^^\n";
		$code .= "delegate.deactivatePepsynAnalog(dummyId);\n";
		$code .= "//^^^Verify results.^^^\n";
		$code .= "//---\n";
		$code .= "pepsynAnalogInfo = delegate.getPepsynAnalogInfoById(dummyId);\n";
		$code .= "assure = \"The object should have been deactivated.\";\n";
		$code .= "assertFalse(assure, pepsynAnalogInfo.isActive());\n";
		$code .= "} catch (SimsException se) {\n";
		$code .= "LogManager.error(errMsg);\n";
		$code .= "se.printStackTrace();\n";
		$code .= "fail(errMsg + \"Unexpected SimsException: \" + se.toString());\n";
		$code .= "} catch (Exception ex) {\n";
		$code .= "LogManager.error(errMsg);\n";
		$code .= "ex.printStackTrace();\n";
		$code .= "fail(errMsg + \"Unexpected Exception in test code: \" + ex.toString());\n";
		$code .= "}\n";
		$code .= "}\n";
		$code .= "public void testGetAllPepsynAnalogInfos() {\n";
		$code .= "String errMsg = clsName + \".testGetAllPepsynAnalogInfos(): \";\n";
		$code .= "try {\n";
		$code .= "//^^^Prepare test condition.^^^\n";
		$code .= "//---Prepare mocks\n";
		$code .= "//---Prepare parameters.\n";
		$code .= "//^^^Verify conditions before calling business method.^^^\n";
		$code .= "//^^^Calling tested business method.^^^\n";
		$code .= "results = delegate.getAllPepsynAnalogInfos();\n";
		$code .= "//^^^Verify results.^^^\n";
		$code .= "//---\n";
		$code .= "assure = \"Method should return a non-empty collection.\";\n";
		$code .= "assertNotNull(assure, results);\n";
		$code .= "assertTrue(assure, !results.isEmpty());\n";
		$code .= "} catch (SimsException se) {\n";
		$code .= "LogManager.error(errMsg);\n";
		$code .= "se.printStackTrace();\n";
		$code .= "fail(errMsg + \"Unexpected SimsException: \" + se.toString());\n";
		$code .= "} catch (Exception ex) {\n";
		$code .= "LogManager.error(errMsg);\n";
		$code .= "ex.printStackTrace();\n";
		$code .= "fail(errMsg + \"Unexpected Exception in test code: \" + ex.toString());\n";
		$code .= "}\n";
		$code .= "}\n";
		$code .= "public void testGetPepsynAnalogInfosByType() {\n";
		$code .= "String errMsg = clsName + \".testGetPepsynAnalogInfosByType(): \";\n";
		$code .= "try {\n";
		$code .= "//^^^Prepare test condition.^^^\n";
		$code .= "//---Prepare mocks\n";
		$code .= "//---Prepare parameters.\n";
		$code .= "//^^^Verify conditions before calling business method.^^^\n";
		$code .= "//^^^Calling tested business method.^^^\n";
		$code .= "results = delegate.getPepsynAnalogInfosByType(dummyIdStr);\n";
		$code .= "//^^^Verify results.^^^\n";
		$code .= "//---\n";
		$code .= "assure = \"Method should return a non-empty collection.\";\n";
		$code .= "assertNotNull(assure, results);\n";
		$code .= "assertTrue(assure, !results.isEmpty());\n";
		$code .= "} catch (SimsException se) {\n";
		$code .= "LogManager.error(errMsg);\n";
		$code .= "se.printStackTrace();\n";
		$code .= "fail(errMsg + \"Unexpected SimsException: \" + se.toString());\n";
		$code .= "} catch (Exception ex) {\n";
		$code .= "LogManager.error(errMsg);\n";
		$code .= "ex.printStackTrace();\n";
		$code .= "fail(errMsg + \"Unexpected Exception in test code: \" + ex.toString());\n";
		$code .= "}\n";
		$code .= "}\n";
		$code .= "/*\n";
		$code .= "public void testMethodTemp() {\n";
		$code .= "String errMsg = clsName + \".testMethodTemp(): \";\n";
		$code .= "try {\n";
		$code .= "//^^^Prepare test condition.^^^\n";
		$code .= "//---Prepare mocks\n";
		$code .= "//---Prepare parameters.\n";
		$code .= "//^^^Verify conditions before calling business method.^^^\n";
		$code .= "//^^^Calling tested business method.^^^\n";
		$code .= "throw new SimsException(\"Not implemented yet!\");\n";
		$code .= "//^^^Verify results.^^^\n";
		$code .= "}\n";
		$code .= "catch (SimsException se) {\n";
		$code .= "LogManager.error(errMsg);\n";
		$code .= "se.printStackTrace();\n";
		$code .= "fail(errMsg + \"Unexpected SimsException: \" + se.toString());\n";
		$code .= "}\n";
		$code .= "catch (Exception ex) {\n";
		$code .= "LogManager.error(errMsg);\n";
		$code .= "ex.printStackTrace();\n";
		$code .= "fail(errMsg + \"Unexpected Exception in test code: \" + ex.toString());\n";
		$code .= "}\n";
		$code .= "}\n";
		$code .= "*/\n";
		$code .= "}\n";
		$code .= "";


	}


}

?>