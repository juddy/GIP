<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
include_once(CLASS_PHP_CODE_BEAUTIFIER);
?>
<? 
class gipConfigurationFileGenerator extends commonGenieFramework
{

	var $tablesArray;
	var $db;
	var $siteRoot;
	var $urlAddress;

	/**
	* @return returns value of variable $tablesArray
	* @desc getTablesArray : Getting value for variable $tablesArray
	*/
	function getTablesArray()
	{
		return $this->tablesArray;
	}

	/**
	* @param param : value to be saved in variable $tablesArray
	* @desc setTablesArray : Setting value for $tablesArray
	*/
	function setTablesArray($value)
	{
		$this->tablesArray = $value;
	}

	/**
	* @return returns value of variable $db
	* @desc getDb : Getting value for variable $db
	*/
	function getDb()
	{
		return $this->db;
	}

	/**
	* @param param : value to be saved in variable $db
	* @desc setDb : Setting value for $db
	*/
	function setDb($value)
	{
		$this->db = $value;
	}

	/**
	* @return returns value of variable $siteRoot
	* @desc getSiteRoot : Getting value for variable $siteRoot
	*/
	function getSiteRoot ()
	{
		return $this->siteRoot;
	}

	/**
	* @param param : value to be saved in variable $siteRoot
	* @desc setSiteRoot : Setting value for $siteRoot
	*/
	function setSiteRoot($value)
	{
		$this->siteRoot  = $value;
	}

	/**
	* @return returns value of variable $urlAddress
	* @desc getUrlAddress : Getting value for variable $urlAddress
	*/
	function getUrlAddress()
	{
		return $this->urlAddress;
	}

	/**
	* @param param : value to be saved in variable $urlAddress
	* @desc setUrlAddress : Setting value for $urlAddress
	*/
	function setUrlAddress($value)
	{
		$this->urlAddress = $value;
	}




	function gipConfigurationFileGenerator($arguments)
	{
		$db = $arguments['db'];
		$table = $arguments['table'];

		$siteRoot = $arguments['siteRootPath'];
		$urlAddress = $arguments['urlAddress'];


		$this->setSiteRoot($siteRoot);
		$this->setUrlAddress($urlAddress);
		$this->setDb($db);

		$thisTable = new table($table,$db);
		$this->setTableObject($thisTable);


		$this->initializeGenieFramework();


	}

	function generate()
	{

		$code = "";

		if ($_SESSION['dbSession'])
		{

			$dbUserName = $_SESSION['dbUserName'];
			$dbType = $_SESSION['dbType'];
			$dbHostName = $_SESSION['dbHostName'];
			$encDbPassword = $_SESSION['dbPassword'];


			$thisEncrypter = new textEncrypter();
			$dbPassword = $thisEncrypter->decode($encDbPassword);

		}
		else
		{
			$dbUserName = DATABASE_USER_NAME;
			$dbType = DATABASE_SERVER_TO_USE;
			$dbHostName = DATABASE_HOST;
			$dbPassword = DATABASE_PASSWORD;
		}


		if (FILE_SEPARATOR=="\\") { $fileSeparator = "\\\\"; } else { $fileSeparator = FILE_SEPARATOR; }

		$code .= "<?\n";
		$code .= "/*\n";
		$code .= "This is the main Configuration file for your gip generated application.\n\n";
		$code .= "This file need to put in the include directory of php or you need to add the directory where this file is located to the php include path list\n\n";
		$code .= "Please change the configuration below when moving to a new server.\n\n";
		$code .= "*/\n\n";
		$code .= "// Web Address (URL) of your Website\n";
		$code .= "define(\"URL_ROOT_ADDRESS\",\"".$this->getUrlAddress()."\");\n";
		$code .= "define(\"URL_ADDRESS\",URL_ROOT_ADDRESS.\"/web\");\n\n";
		$code .= "// Location of your Source code (absolute Paths)\n";
		$code .= "define(\"SITE_PATH\",\"".$this->getSiteRoot()."\");             // no trailing slashes (e.g windows : c:\server\myWebsite, *nix : /usr/local/apache/myWebsite)\n";
		$code .= "define(\"FILE_SEPARATOR\", \"".$fileSeparator."\");       // Different OS use different File Separators (e.g windows : \\, *nix : / )\n";
		$code .= "define(\"WEB_SEPARATOR\",\"/\");                        // Just in case url token separator change at some point in time :)\n\n";
		$code .= "// Database Configuration\n";
		$code .= "define(\"DATABASE_SERVER_TO_USE\",\"".$dbType."\");            // Adodb Database Type to use (e.g mysql, oracle, postgres..)\n";
		$code .= "define(\"DATABASE_HOST\", \"".$dbHostName."\");                    // Address of your database server (could be hostname or ipaddress)\n";
		$code .= "define(\"DATABASE_USER_NAME\",\"".$dbUserName."\");           // User to connect to database as\n";
		$code .= "define(\"DATABASE_PASSWORD\",\"".$dbPassword."\");             // Password to connect to database\n";
		$code .= "define(\"DATABASE_NAME\",\"".$this->getDb()."\");                     // Database Name (for oraclle, that'll be empty)\n\n";
		$code .= "// Application Basic Paths - DO NOT CHANGE THESE\n";
		$code .= "define(\"APP_PATH\",SITE_PATH.FILE_SEPARATOR.\"app\");\n";
		$code .= "define(\"WEB_PATH\",SITE_PATH.FILE_SEPARATOR.\"web\");\n";
		$code .= "define(\"CONFIG_COMPONENT\",SITE_PATH.FILE_SEPARATOR.\"config\");\n";
		$code .= "define(\"CONFIG_FILE\",CONFIG_COMPONENT.FILE_SEPARATOR.\"configuration.inc.php\");\n\n";
		$code .= "?>";


		$this->appendToCode($code);


		return $this->getSourceCode();

	}



}

?>