<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(PLUGIN_JAVA_COMMON_EJB_GENERATOR);
?>
<?
class ejbCrudGenerator extends commonEjbGenerator
{
	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc gipDAOInsertGenerator :  put function description here ...
	*/
	function ejbCrudGenerator ($arguments)
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
		$code .= "package ".$this->getPackageRoot().".common.util;\n";
		$code .= "import ".$this->getPackageRoot().".exception.SimsException;\n";
		$code .= "import ".$this->getPackageRoot().".util.ExceptionUtil;\n";
		$code .= "import ".$this->getPackageRoot().".common.object.TestFlag;\n";
		$code .= "import ".$this->getPackageRoot().".".$this->getTableName().".ejb.".$this->getTableName()."LocalHome;\n";
		$code .= "import ".$this->getPackageRoot().".".$this->getTableName().".ejb.".$this->getTableName()."Local;\n";
		$code .= "import ".$this->getPackageRoot().".".$this->getTableName().".util.".$this->getTableName()."Info;\n";
		$code .= "import javax.ejb.SessionContext;\n";
		//$code .= "import test.".$this->getPackageRoot().".lims.pepsyn.analog.ejb.Mock".$this->getTableName()."LocalHomeImpl;\n";

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
		$code = "";
		$code .= "/**\n";
		$code .= "* This method create a new ".$this->getTableName()." object.\n";
		$code .= "*\n";
		$code .= "* @param info object for ".$this->getTableName()."\n";
		$code .= "* @return the id for the newly created Object.\n";
		$code .= "*/\n";
		$code .= "public Integer createNew".$this->getTableName()."(".$this->getTableName()."Info info) throws SimsException {\n";
		$code .= "String errMsg = clsName + \".createNew".$this->getTableName()."(): \";\n";
		$code .= "".$this->getTableName()."Local local = null;\n";
		$code .= "Integer id = null;\n";
		$code .= "try {\n";
		$code .= "//Create ".$this->getTableName()." and return local object.\n";
		$code .= "local = this.createNew".$this->getTableName()."Local(info);\n";
		$code .= "id = local.getId();\n";
		$code .= "} catch (RuntimeException e) {\n";
		$code .= "ctx.setRollbackOnly();\n";
		$code .= "//Throw SimsWrapedException.\n";
		$code .= "ExceptionUtil.simsWrapedException(errMsg, e);\n";
		$code .= "}\n";
		$code .= "return id;\n";
		$code .= "}\n";
		return $code;

	}

	function generateCreateLocal()
	{
		$code = "";
		$code .= "/**\n";
		$code .= "* This method create a new ".$this->getTableName()." object and return a ".$this->getTableName()."Local object.\n";
		$code .= "*\n";
		$code .= "* @param info object for ".$this->getTableName()."\n";
		$code .= "* @return ".$this->getTableName()."Local Object.\n";
		$code .= "*/\n";
		$code .= "public ".$this->getTableName()."Local createNew".$this->getTableName()."Local(".$this->getTableName()."Info info) throws SimsException {\n";
		$code .= "String errMsg = clsName + \".createNew".$this->getTableName()."Local(): \";\n";
		$code .= "".$this->getTableName()."LocalHome localHome = null;\n";
		$code .= "".$this->getTableName()."Local local = null;\n";
		$code .= "try {\n";
		$code .= "//Find ".$this->getTableName()." Local home.\n";
		$code .= "localHome = (".$this->getTableName()."LocalHome) ServiceLocator.getInstance().getLocalHome(ref);\n";
		$code .= "//Create a new ".$this->getTableName()." object.\n";
		$code .= "local = localHome.create(info);\n";
		$code .= "} catch (SimsException se) {\n";
		$code .= "ctx.setRollbackOnly();\n";
		$code .= "//Propergate SimsException.\n";
		$code .= "throw se;\n";
		$code .= "} catch (Exception e) {\n";
		$code .= "ctx.setRollbackOnly();\n";
		$code .= "//Throw SimsWrapedException.\n";
		$code .= "ExceptionUtil.simsWrapedException(errMsg, e);\n";
		$code .= "}\n";
		$code .= "return local;\n";
		$code .= "}\n";
		return $code;
	}


	function generateGetLocal()
	{
		$code = "";
		$code .= "/**\n";
		$code .= "* Get ".$this->getTableName()." local object by id.\n";
		$code .= "*/\n";
		$code .= "public ".$this->getTableName()."Local get".$this->getTableName()."LocalById(Integer id) throws SimsException {\n";
		$code .= "String errMsg = clsName + \".get".$this->getTableName()."LocalById(): \";\n";
		$code .= "".$this->getTableName()."LocalHome localHome = null;\n";
		$code .= "".$this->getTableName()."Local local = null;\n";
		$code .= "try {\n";
		$code .= "//Find ".$this->getTableName()."Local local home.\n";
		$code .= "localHome = (".$this->getTableName()."LocalHome) ServiceLocator.getInstance().getLocalHome(ref);\n";
		$code .= "local = localHome.findByPrimaryKey(id);\n";
		$code .= "} catch (SimsException se) {\n";
		$code .= "//Propergate SimsException.\n";
		$code .= "throw se;\n";
		$code .= "} catch (Exception e) {\n";
		$code .= "//Throw SimsWrapedException.\n";
		$code .= "ExceptionUtil.simsWrapedException(errMsg, e);\n";
		$code .= "}\n";
		$code .= "//Address business rule--The Object had been deleted!\n";
		$code .= "if (local.getDeleted() == 0) {\n";
		$code .= "//Throw objectDeletedException.\n";
		$code .= "errMsg += \"This Object had been deleted! id-->\" + id;\n";
		$code .= "ExceptionUtil.objectDeletedException(errMsg);\n";
		$code .= "}\n";
		$code .= "return local;\n";
		$code .= "}\n";
		return $code;
	}

	function generateGet()
	{
		$code = "";
		$code .= "/**\n";
		$code .= "* Get ".$this->getTableName()."Info object by id.\n";
		$code .= "*\n";
		$code .= "* @param id for ".$this->getTableName()."\n";
		$code .= "* @return ".$this->getTableName()."Info object.\n";
		$code .= "*/\n";
		$code .= "public ".$this->getTableName()."Info get".$this->getTableName()."InfoById(Integer id) throws SimsException {\n";
		$code .= "String errMsg = clsName + \".get".$this->getTableName()."InfoById(): \";\n";
		$code .= "".$this->getTableName()."Local local = null;\n";
		$code .= "".$this->getTableName()."Info info = null;\n";
		$code .= "try {\n";
		$code .= "local = this.get".$this->getTableName()."LocalById(id);\n";
		$code .= "info = local.getAnalogInfo();\n";
		$code .= "} catch (RuntimeException e) {\n";
		$code .= "//Throw SimsWrapedException.\n";
		$code .= "ExceptionUtil.simsWrapedException(errMsg, e);\n";
		$code .= "}\n";
		$code .= "return info;\n";
		$code .= "}\n";
		return $code;
	}

	function generateDelete()
	{
		$code = "";
		$code .= "public void delete".$this->getTableName()."(Integer id) throws SimsException {\n";
		$code .= "String errMsg = clsName + \".delete".$this->getTableName()."(): \";\n";
		$code .= "".$this->getTableName()."Local local = null;\n";
		$code .= "try {\n";
		$code .= "local = this.get".$this->getTableName()."LocalById(id);\n";
		$code .= "//Delete this ".$this->getTableName().".\n";
		$code .= "local.setDeleted(0);\n";
		$code .= "//On Delete Cascading.\n";
		$code .= "} catch (RuntimeException e) {\n";
		$code .= "ctx.setRollbackOnly();\n";
		$code .= "//Throw SimsWrapedException.\n";
		$code .= "ExceptionUtil.simsWrapedException(errMsg, e);\n";
		$code .= "}\n";
		$code .= "}\n";
		$code .= "//----------- Developer defined finder methods related to ".$this->getTableName()." object ------------\n";
		$code .= "}\n";
		$code .= "";
		return $code;
	}

	function generateUpdate()
	{
		$code = "";
		$code .= "/**\n";
		$code .= "* This method update ".$this->getTableName()." object.\n";
		$code .= "*\n";
		$code .= "* @param info object for ".$this->getTableName()."\n";
		$code .= "*/\n";
		$code .= "public void update".$this->getTableName()."Info(".$this->getTableName()."Info info) throws SimsException {\n";
		$code .= "String errMsg = clsName + \".update".$this->getTableName()."Info(): \";\n";
		$code .= "".$this->getTableName()."Local local = null;\n";
		$code .= "try {\n";
		$code .= "local = this.get".$this->getTableName()."LocalById(info.getId());\n";
		$code .= "//You should call delete method we you want to delete.\n";
		$code .= "if (info.isDeleted()) {\n";
		$code .= "throw new SimsException(\"Please call delete method when you want to delete!\");\n";
		$code .= "}\n";
		$code .= "//Update..\n";
		$code .= "local.setAnalogInfo(info);\n";
		$code .= "} catch (SimsException se) {\n";
		$code .= "ctx.setRollbackOnly();\n";
		$code .= "//Propergate SimsException.\n";
		$code .= "throw se;\n";
		$code .= "} catch (RuntimeException e) {\n";
		$code .= "ctx.setRollbackOnly();\n";
		$code .= "//Throw SimsWrapedException.\n";
		$code .= "ExceptionUtil.simsWrapedException(errMsg, e);\n";
		$code .= "}\n";
		$code .= "}\n";
		return $code;
	}


	function generateCode()
	{




		$code .= "static private String pkgName = \"org.stjude.app.common.util\";\n";
		$code .= "static private String clsName = \"".$this->getTableName()."CRUD\";\n";
		$code .= "static public String className = pkgName + \".\" + clsName;\n";
		$code .= "private String ref;\n";
		$code .= "private SessionContext ctx;\n";

		$code .= "public ".$this->getTableName()."CRUD(SessionContext context) {\n";

		$code .= "ref = ".$this->getTableName()."LocalHome.localRef;\n";
		$code .= "if (TestFlag.isTest) {\n";
		$code .= "ref = Mock".$this->getTableName()."LocalHomeImpl.className;\n";
		$code .= "}\n";
		$code .= "ctx = context;\n";
		$code .= "}\n";
		$code .= "//----------- Basic CRUD Methods to dealwith ".$this->getTableName()." object ----------\n";


		$code .= $this->generateCreate();

		$code .= $this->generateGet();

		$code .= $this->generateUpdate();

		$code .= $this->generateCreateLocal();

		$code .= $this->generateGetLocal();

		$code .= $this->generateDelete();

		return $code;
	}


}

?>