<?php  
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CONFIG_FILE);
include_once(CLASS_DATABASE_CONNECTION_POOL);
include_once(CLASS_ERROR_HANDLER);
?>
<?php  
class databaseQuery extends databaseConnectionPool
{

	// Variables
	var $sqlQuery;		// comment for sqlQuery
	var $start;		// comment for start
	var $limit;		// comment for limit
	var $orderBy;		// comment for orderBy
	var $orderDirection;		// comment for orderDirection

	var $resultSet;

	var $currentRows;		// comment for currentRows
	var $totalRows;		// comment for totalRows


	/**
	* @return returns value of variable $sqlQuery
	* @desc getSqlQuery : Getting value for variable $sqlQuery
	*/
	function getSqlQuery()
	{
		return $this->sqlQuery;
	}

	/**
	* @param param : value to be saved in variable $sqlQuery
	* @desc setSqlQuery : Setting value for $sqlQuery
	*/
	function setSqlQuery($value)
	{
		$this->sqlQuery = $value;
	}

	/**
	* @return returns value of variable $start
	* @desc getStart : Getting value for variable $start
	*/
	function getStart()
	{
		return $this->start;
	}

	/**
	* @param param : value to be saved in variable $start
	* @desc setStart : Setting value for $start
	*/
	function setStart($value)
	{
		$this->start = $value;
	}

	/**
	* @return returns value of variable $limit
	* @desc getLimit : Getting value for variable $limit
	*/
	function getLimit()
	{
		return $this->limit;
	}

	/**
	* @param param : value to be saved in variable $limit
	* @desc setLimit : Setting value for $limit
	*/
	function setLimit($value)
	{
		$this->limit = $value;
	}

	/**
	* @return returns value of variable $orderBy
	* @desc getOrderBy : Getting value for variable $orderBy
	*/
	function getOrderBy()
	{
		return $this->orderBy;
	}

	/**
	* @param param : value to be saved in variable $orderBy
	* @desc setOrderBy : Setting value for $orderBy
	*/
	function setOrderBy($value)
	{
		$this->orderBy = $value;
	}

	/**
	* @return returns value of variable $orderDirection
	* @desc getOrderDirection : Getting value for variable $orderDirection
	*/
	function getOrderDirection()
	{
		return $this->orderDirection;
	}

	/**
	* @param param : value to be saved in variable $orderDirection
	* @desc setOrderDirection : Setting value for $orderDirection
	*/
	function setOrderDirection($value)
	{
		$this->orderDirection = $value;
	}

	/**
	* @return returns value of variable $resultSet
	* @desc getResultSet : Getting value for variable $resultSet
	*/
	function getResultSet()
	{
		return $this->resultSet;
	}

	/**
	* @param param : value to be saved in variable $resultSet
	* @desc setResultSet : Setting value for $resultSet
	*/
	function setResultSet($value)
	{
		$this->resultSet = $value;
	}



	/**
	* @return returns value of variable $currentRows
	* @desc getCurrentRows : Getting value for variable $currentRows
	*/
	function getCurrentRows()
	{
		return $this->currentRows;
	}

	/**
	* @param param : value to be saved in variable $currentRows
	* @desc setCurrentRows : Setting value for $currentRows
	*/
	function setCurrentRows($value)
	{
		$this->currentRows = $value;
	}

	/**
	* @return returns value of variable $totalRows
	* @desc getTotalRows : Getting value for variable $totalRows
	*/
	function getTotalRows()
	{
		return $this->totalRows;
	}

	/**
	* @param param : value to be saved in variable $totalRows
	* @desc setTotalRows : Setting value for $totalRows
	*/
	function setTotalRows($value)
	{
		$this->totalRows = $value;
	}


	/**
	* @desc This is the constructor Object. It initializes the connection to the database
	* @version 1.0 [2004-08-06]
	* @license GNU GPL License
	* @author Nilesh Dosooye
	* @copyright Copyright &copy; 2003, Nilesh Dosooye
	*/
	function databaseQuery()
	{
		// Testing for getting all
		$this->setStart(0);
		$this->setLimit(0);

		$this->connect();

	}

	/**
	* @desc Checks which flags are checked and builds appropriate sql query
	* @version 1.0 [2004-08-06]
	* @license GNU GPL License
	* @author Nilesh Dosooye
	* @copyright Copyright &copy; 2003, Nilesh Dosooye
	*/
	function buildQuery()
	{
		if ($this->getOrderBy()!="")
		{
			$newQuery = $this->getSqlQuery()." ".$this->getOrderBy();

			if ($this->getOrderDirection()!="")
			{
				$newQuery .= " ".$this->getOrderDirection();
			}

			$this->setSqlQuery($newQuery);

		}

	}



	/**
	* @return true if successful or false on failure
	* @param a populated instance of object - (accounttypeinfo)
	* @desc this function executes a query and return true if successful or false on failure
	* @version 1.0 [2004-08-06]
	* @license GNU GPL License
	* @author Nilesh Dosooye
	* @copyright Copyright &copy; 2003, Nilesh Dosooye
	*/
	function executeQuery()
	{

		$this->dbConn->SetFetchMode(ADODB_FETCH_ASSOC);

		// Building Query  -- addint order, limit etc...
		$this->buildQuery();

		if (DEBUG_PRINT_SQL)
		{
		     $timeNow = date("h:i:s a");	
		     echo "<b>SQL Query</b> (<font color=red>".$timeNow."</font>)--><font color=blue>".$this->getSqlQuery()."</font><br>";
		}

		// If limit is not set, then just return all rows
		if (($this->getStart()==0) && ($this->getLimit()==0))
		{
			$result = $this->dbConn->Execute($this->getSqlQuery());
		}
		// if limit is set, return only requested rows
		else
		{

			if ($this->getStart()=="") { $this->setStart("0"); }
			if ($this->getLimit()=="") { $this->setLimit(DEFAULT_ROWS_PER_PAGE); }			
			
			$result = $this->dbConn->SelectLimit($this->getSqlQuery(),$this->getLimit(),$this->getStart());
		}



		if ($result==false)
		{
			$thisError = new errorHandler();
			$thisError->setUserErrorMessage(LANG_INTERNALS_DB_ERROR_ON_QUERY);
			$thisError->setProgramErrorMessage("SQL : ".$this->getSqlQuery()." ...".LANG_BASIC_ERROR." : ".$this->dbConn->ErrorMsg());
			$thisError->setErrorPage($_SERVER['PHP_SELF']);
			$thisError->handleError();

			return false;

		}
		else
		{     // Setting ResultSet
		$this->setResultSet($result);
		return true;
		}

	}

	function executeDirectQuery($query)
	{

		$this->dbConn->SetFetchMode(ADODB_FETCH_ASSOC);
		
		if (DEBUG_PRINT_SQL)
		{
		     $timeNow = date("h:i:s a");	
		     echo "<b>Direct SQL Query</b> (<font color=red>".$timeNow."</font>)--><font color=blue>".$query."</font><br>";
		}		
		
		$result = $this->dbConn->Execute($query);



		if ($result==false)
		{
			$thisError = new errorHandler();
			$thisError->setUserErrorMessage(LANG_INTERNALS_DB_ERROR_ON_QUERY);
			$thisError->setProgramErrorMessage("SQL : ".$this->getSqlQuery()." ... ".LANG_BASIC_ERROR." : ".$this->dbConn->ErrorMsg());
			$thisError->setErrorPage($_SERVER['PHP_SELF']);
			$thisError->handleError();

			return false;

		}
		else
		{
			return $result;
		}

	}

	/**
	* @return a number representing the total number of result rows in a query
	* @desc counts the total number of rows for a query..
	* @version 1.0 [2004-08-06]
	* @license GNU GPL License
	* @author Nilesh Dosooye
	* @copyright Copyright &copy; 2003, Nilesh Dosooye
	*/
	function countResultSet()
	{

		// count only if query is a select query
		if (strtoupper(substr($this->getSqlQuery(),0,6)) != "SELECT")
		{

			$this->setTotalRows("1");
			return true;
		}
		else
		{


			// Break query into two parts on 'from' pivot
			list($select,$conditions)=explode(" FROM ",$this->getSqlQuery());

			// replace select fields items by count(*) to find total num of resultsets
			$newQuery = "select count(*) as total from ".$conditions;

		if (DEBUG_PRINT_COUNT_SQL)
		{
		     $timeNow = date("h:i:s");	
		     echo "<b>Original SQL Query (before count)--></b><font color=green>".$this->getSqlQuery()."</font><br>";		     
		     echo "<b>Count SQL Query</b> (<font color=red>".$timeNow."</font>)--><font color=green>".$newQuery."</font><br>";
		}	
		
			$result = $this->dbConn->Execute($newQuery);

			if ($result==false)
			{
				$thisError = new errorHandler();
				$thisError->setUserErrorMessage(LANG_INTERNALS_DB_ERROR_ON_COUNT_QUERY);
				$thisError->setProgramErrorMessage($this->dbConn->ErrorMsg());
				$thisError->setErrorPage($_SERVER['PHP_SELF']);
				$thisError->handleError();

				return false;
			}
			else
			{
				//$result->MoveNext();


				// Returning ResultSet
				$totalNumberOfRows = $result->fields['total'];
				$this->setTotalRows($totalNumberOfRows);

				return true;
			}

		}
	}


	/**
	* @return int
	* @desc returns the insertId of the last insert statement
	* @version 1.0 [2004-08-06]
	* @license GNU GPL License
	* @author Nilesh Dosooye
	* @copyright Copyright &copy; 2003, Nilesh Dosooye
	*/
	function returnLastInsertId()
	{
		$lastInsertId =  $this->dbConn->Insert_ID();

		return $lastInsertId;
	}




	/**
	* @desc Begins an ADODB Smart Transaction
	* @version 1.0 [2004-08-06]
	* @license GNU GPL License
	* @author Nilesh Dosooye
	* @copyright Copyright &copy; 2003, Nilesh Dosooye
	*/
	function startSmartTransaction()
	{

		return $this->dbConn->StartTrans();
	}



	/**
	* @desc Completes ADODB Smart Transaction
	* @version 1.0 [2004-08-06]
	* @license GNU GPL License
	* @author Nilesh Dosooye
	* @copyright Copyright &copy; 2003, Nilesh Dosooye
	*/
	function completeSmartTransaction()
	{
		return $this->dbConn->CompleteTrans();
	}



	// ***** OLD STYLE TRANSACTION *********
	/**
	* @desc Begins Ordinary Transaction
	* @version 1.0 [2004-08-06]
	* @license GNU GPL License
	* @author Nilesh Dosooye
	* @copyright Copyright &copy; 2003, Nilesh Dosooye
	*/
	function beginTransaction()
	{
		$this->dbConn->BeginTrans();
	}


	/**
	* @desc Rolls Back Ordinary Transaction
	* @version 1.0 [2004-08-06]
	* @license GNU GPL License
	* @author Nilesh Dosooye
	* @copyright Copyright &copy; 2003, Nilesh Dosooye
	*/
	function rollBackTransaction()
	{
		$this->dbConn->RollbackTrans();
	}


	/**
	* @desc Commits Ordinary Transaction
	* @version 1.0 [2004-08-06]
	* @license GNU GPL License
	* @author Nilesh Dosooye
	* @copyright Copyright &copy; 2003, Nilesh Dosooye
	*/
	function commitTransaction()
	{
		$this->dbConn->CommitTrans();
	}

	/**
	* @desc Get an array of all the fields in a table
	* @version 1.0 [2004-08-06]
	* @license GNU GPL License
	* @author Nilesh Dosooye
	* @copyright Copyright &copy; 2003, Nilesh Dosooye
	*/
	function getTableFields($table)
	{
		return  $this->dbConn->MetaColumnNames($table);
	}

	/**
	* @desc Get an array of all the Databases
	* @version 1.0 [2004-08-06]
	* @license GNU GPL License
	* @author Nilesh Dosooye
	* @copyright Copyright &copy; 2003, Nilesh Dosooye
	*/
	function getDatabases()
	{
		if (($this->getDatabaseType()=="mysql") || ($this->getDatabaseType()=="odbc") || ($this->getDatabaseType()=="ado"))
		{
		          return  $this->dbConn->MetaDatabases();
		}
		else
		{
              return "";
		}

	}


	/**
	* @desc Get Tables for a particular Database
	* @version 1.0 [2004-08-06]
	* @license GNU GPL License
	* @author Nilesh Dosooye
	* @copyright Copyright &copy; 2003, Nilesh Dosooye
	*/
	function getTables()
	{

		return  $this->dbConn->MetaTables();
	}

	/**
	* @desc chooses database and makes it current
	* @version 1.0 [2004-08-06]
	* @license GNU GPL License
	* @author Nilesh Dosooye
	* @copyright Copyright &copy; 2003, Nilesh Dosooye
	*/
	function useDatabase($databaseName)
	{


		return  $this->connect($databaseName);
	}


}

?>