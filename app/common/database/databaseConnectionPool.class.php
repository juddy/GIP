<?php  
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CONFIG_FILE);
include_once(CLASS_ADODB);
include_once(CLASS_TEXT_ENCRYPTER);
?>
<?php   
/**
* @desc this Object Respresents the database and all its associated Tables
*/
class databaseConnectionPool
{
	// Variables
	var $databaseType;		// comment for databaseType
	var $databaseHost;		// comment for databaseHost
	var $databaseUserName;		// comment for databaseUserName
	var $databasePassword;		// comment for databasePassword
	var $databaseToUse;		// comment for databaseToUse
	var $dbConn;		// comment for dbConn



	/**
	* @return databaseObject
	* @desc Constructor Class tries to connect to database. Called when Instantiating a new Database Object. It tries to make a connection to the Database
	* @version 1.0 [2004-08-06]
	* @license GNU GPL License
	* @author Nilesh Dosooye
	* @copyright Copyright &copy; 2003, Nilesh Dosooye
	*/
	function databaseConnectionPool($dbType="",$dbHostName="",$dbUserName="",$dbPassword="")
	{

		if (($dbType!="") && ($dbHostName!="") && ($dbUserName!=""))
		{

			$this->dbConn = ADONewConnection($dbType);
			
			$database = "";
			
			if (!@$this->dbConn->Connect($dbHostName,$dbUserName,$dbPassword,$database))
			{
				$_SESSION['dbPassword'] = "";
				$_SESSION['dbSession'] = false;

				echo LANG_INTERNALS_CONNECTION_ERROR;
				echo "<a href=\"javascript:history.back()\">".LANG_BASIC_GO_BACK."</a>";;
                exit;

			}
			else
			{
				$this->setDbConnectionVariablesInSession($dbType,$dbHostName,$dbUserName,$dbPassword);
				$this->connect();
				echo LANG_INTERNALS_CONNECTION_SUCCESSFUL;

			}

		}
		else
		{


			// Tries to connect to the database Server Using default Values
			$this->connect();

		}


	}

	/**
	* @return void
	* @desc Sets the database connection parameters
	* @version 1.0 [2004-08-06]
	* @license GNU GPL License
	* @author Nilesh Dosooye
	* @copyright Copyright &copy; 2003, Nilesh Dosooye
	*/
	function setDatabaseConnectionVariables()
	{
		$this->setDatabaseType(DATABASE_SERVER_TO_USE);
		$this->setDatabaseHost(DATABASE_HOST);
		$this->setDatabasePassword(DATABASE_PASSWORD);
		$this->setDatabaseUserName(DATABASE_USER_NAME);
		//$this->setDatabaseToUse(DATABASE_NAME);

	}



	function setDbConnectionVariablesInSession($dbType,$dbHostName,$dbUserName,$dbPassword)
	{
		$thisEncrypter = new textEncrypter();
		$encryptedPassword = $thisEncrypter->encode($dbPassword);

		$_SESSION['dbSession'] = true;

		$_SESSION['dbUserName'] = $dbUserName;
		$_SESSION['dbType'] = $dbType;
		$_SESSION['dbHostName'] = $dbHostName;
		$_SESSION['dbPassword'] = $encryptedPassword;

	}

	function setDatabaseConnectionVariablesFromSession()
	{


		$dbUserName = $_SESSION['dbUserName'];
		$dbType = $_SESSION['dbType'];
		$dbHostName = $_SESSION['dbHostName'];
		$encDbPassword = $_SESSION['dbPassword'];


		$thisEncrypter = new textEncrypter();
		$unEncodedDbPassword = $thisEncrypter->decode($encDbPassword);


		$this->setDatabaseType($dbType);
		$this->setDatabaseHost($dbHostName);
		$this->setDatabasePassword($unEncodedDbPassword);
		$this->setDatabaseUserName($dbUserName);
		//$this->setDatabaseToUse(DATABASE_NAME);

	}


	/**
	* @return void
	* @desc This function tries to connect to the database using db specific code, as per function in "db"Functions.inc.php
	* @version 1.0 [2004-08-06]
	* @license GNU GPL License
	* @author Nilesh Dosooye
	* @copyright Copyright &copy; 2003, Nilesh Dosooye
	*/
	function connect($database="")
	{



		if ($_SESSION['dbSession'])
		{
			$this->setDatabaseConnectionVariablesFromSession();
		}
		else
		{
			// Setting Database Parameters
			$this->setDatabaseConnectionVariables();
		}


		$this->dbConn = ADONewConnection($this->getDatabaseType());

		$connectionResult = @$this->dbConn->Connect($this->getDatabaseHost(),$this->getDatabaseUserName(),$this->getDatabasePassword(),$database);


		if (!$connectionResult)
		{

			//echo "<font color=red><b>Connection Error</b></font> <br><br> Could not connect to the database with the information provided.<br><br>";

		}





		// Setting Fetch Mode to Associative Array Fetch
		// When executing sql.. it sends ['col1'] = value instead of ['1'] = value
		$this->dbConn->SetFetchMode(ADODB_FETCH_ASSOC);


		// ADD ERROR CHECKING HERE TO KNOW IF CONNECTED OR IF NOT.. THROW ERRORRR


		return $connectionResult;
	}



	/**
	* @return returns value of variable $databaseType
	* @desc getDatabaseType : Getting value for variable $databaseType
	*/
	function getDatabaseType()
	{
		return $this->databaseType;
	}

	/**
	* @param param : value to be saved in variable $databaseType
	* @desc setDatabaseType : Setting value for $databaseType
	*/
	function setDatabaseType($value)
	{
		$this->databaseType = $value;
	}

	/**
	* @return returns value of variable $databaseHost
	* @desc getDatabaseHost : Getting value for variable $databaseHost
	*/
	function getDatabaseHost()
	{
		return $this->databaseHost;
	}

	/**
	* @param param : value to be saved in variable $databaseHost
	* @desc setDatabaseHost : Setting value for $databaseHost
	*/
	function setDatabaseHost($value)
	{
		$this->databaseHost = $value;
	}

	/**
	* @return returns value of variable $databaseUserName
	* @desc getDatabaseUserName : Getting value for variable $databaseUserName
	*/
	function getDatabaseUserName()
	{
		return $this->databaseUserName;
	}

	/**
	* @param param : value to be saved in variable $databaseUserName
	* @desc setDatabaseUserName : Setting value for $databaseUserName
	*/
	function setDatabaseUserName($value)
	{
		$this->databaseUserName = $value;
	}

	/**
	* @return returns value of variable $databasePassword
	* @desc getDatabasePassword : Getting value for variable $databasePassword
	*/
	function getDatabasePassword()
	{
		return $this->databasePassword;
	}

	/**
	* @param param : value to be saved in variable $databasePassword
	* @desc setDatabasePassword : Setting value for $databasePassword
	*/
	function setDatabasePassword($value)
	{
		$this->databasePassword = $value;
	}

	/**
	* @return returns value of variable $databaseToUse
	* @desc getDatabaseToUse : Getting value for variable $databaseToUse
	*/
	function getDatabaseToUse()
	{
		return $this->databaseToUse;
	}

	/**
	* @param param : value to be saved in variable $databaseToUse
	* @desc setDatabaseToUse : Setting value for $databaseToUse
	*/
	function setDatabaseToUse($value)
	{
		$this->databaseToUse = $value;
	}

	/**
	* @return returns value of variable $dbConn
	* @desc getDbConn : Getting value for variable $dbConn
	*/
	function getDbConn()
	{
		return $this->dbConn;
	}

	/**
	* @param param : value to be saved in variable $dbConn
	* @desc setDbConn : Setting value for $dbConn
	*/
	function setDbConn($value)
	{
		$this->dbConn = $value;
	}

}

?>