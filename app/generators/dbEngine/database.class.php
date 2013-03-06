<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_ADODB);
include_once(CLASS_TEXT_ENCRYPTER);
?>
<? 
/**
* @desc this Object Respresents the database and all its associated Tables
*/
class database
{

	var $databaseHost;      // Database HostName to connect to
	var $database;          // Database to use
	var $tables;            // All Tables in that database
	var $selectedTable;     // Selected Table (change To Table(s)
	var $dbUserName;        // Database User Name
	var $dbPassword;        // Database Password
	var $databaseType;      // Database Type
	var $dbConn;

	/**
	* @return databaseObject
	* @desc Class Constructor. Called when Instantiating a new Database Object. It tries to make a connection to the Database
	*/
	function database()
	{

		$this->setConnectionParameters();

		//$this->setDatabase($globalDatabaseName);

		$this->connect();

	}

	function setConnectionParameters()
	{
		if (HAVE_AUTHENTICATION)
		{

			$dbUserName = $_SESSION['dbUserName'];
			$dbType = $_SESSION['dbType'];
			$dbHostName = $_SESSION['dbHostName'];
			$encDbPassword = $_SESSION['dbPassword'];

			$thisEncrypter = new textEncrypter();
			$unEncodedDbPassword = $thisEncrypter->decode($encDbPassword);


			$this->setDatabaseType($dbType);
			$this->setDatabaseHost($dbHostName);
			$this->setDbPassword($unEncodedDbPassword);
			$this->setDbUserName($dbUserName);

		}
		else
		{
			$this->setDatabaseType(DATABASE_SERVER_TO_USE);
			$this->setDatabaseHost(DATABASE_HOST);
			$this->setDbPassword(DATABASE_PASSWORD);
			$this->setDbUserName(DATABASE_USER_NAME);
		}


	}


	/**
	* @return void
	* @desc This function tries to connect to the database using db specific code, as per function in "db"Functions.inc.php
	*/
	function connect()
	{
		$this->setConnectionParameters();
		$this->dbConn = ADONewConnection($this->getDatabaseType());
		$this->dbConn->Connect($this->getDatabaseHost(),$this->getDbUserName(),$this->getDbPassword(),$this->getDatabase());
	}

	function useDatabase($databaseName)
	{
		$this->setDatabase($databaseName);
		$this->connect();
	}

	function getDatabase()
	{
		return $this->database;
	}

	function setDatabase($value)
	{
		$this->database = $value;
	}

	function getDbTables()
	{
		return  $this->dbConn->MetaTables();
	}

	function getTables()
	{
		return $this->tables;
	}

	function setTables($value)
	{
		$this->tables = $value;
	}

	function getSelectedTable()
	{
		return $this->selectedTable;
	}

	function setSelectedTable($value)
	{
		$this->selectedTable = $value;
	}

	function getDbUserName()
	{
		return $this->dbUserName;
	}

	function setDbUserName($value)
	{
		$this->dbUserName = $value;
	}

	function getDbPassword()
	{
		return $this->dbPassword;
	}

	function setDbPassword($value)
	{
		$this->dbPassword = $value;
	}

	function getDatabaseType()
	{
		return $this->databaseType;
	}

	function setDatabaseType($value)
	{
		$this->databaseType = $value;
	}


	function getDatabaseHost()
	{
		return $this->databaseHost;
	}

	function setDatabaseHost($value)
	{
		$this->databaseHost = $value;
	}

	function getDbConn()
	{
		return $this->dbConn;
	}

	function setDbConn($value)
	{
		$this->dbConn = $value;
	}

}

?>
