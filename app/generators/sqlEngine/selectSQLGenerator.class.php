<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
?>
<?
include_once(CLASS_SQL_ENGINE);

class selectSQLGenerator extends sqlEngine
{

	function selectSQLGenerator($table,$db,$selectedFieldsArray="",$orderByArray="",$orderDirection="",$startLimit="",$numOfRows="",$distinct="",$wherePk="")
	{
		$thisTable = new table($table,$db);
		$this->constructSQL($thisTable);
		$this->setLimitStart($startLimit);
		$this->setLimitEnd($numOfRows);

		if (strtolower($distinct=="distinct")) { $this->setDistinct("DISTINCT"); }

		if ($orderDirection!="")
		{
			$this->setOrderDirection($orderDirection);
		}
		else
		{
			$this->setOrderDirection(" DESC ");
		}

		if ($wherePk=="y")
		{

			$whereString = " WHERE ".$thisTable->getPrimaryKey()." = '\$".NAME_FORM_FIELD_PREFIX.ucfirst($thisTable->getPrimaryKey())."'";

		}
		else
		{
			$whereString="";
		}

		$this->setWhereString($whereString);

		if ($orderByArray!="") {


			if (is_array($orderByArray))
			{

				for ($a=0;$a<count($orderByArray);$a++)
				{
					$thisOrderBy .= $orderByArray[$a]." , ";
				}

				$thisOrderBy = $this->removeTrailingComma($thisOrderBy);

			}
			else
			{

				$thisOrderBy = $orderByArray;

			}

			$this->setOrderBy($thisOrderBy);
		}
		else
		{
			$this->setOrderBy("");
		}

		if ($selectedFieldsArray!="") {


			if (is_array($selectedFieldsArray))
			{

				for ($b=0;$b<count($selectedFieldsArray);$b++)
				{
					$thisSelectedFields .= $selectedFieldsArray[$b]." , ";
				}

				$thisSelectedFields = $this->removeTrailingComma($thisSelectedFields);

			}
			else {

				$thisSelectedFields = $selectedFieldsArray;
				$thisSelectedFields = $this->removeTrailingComma($thisSelectedFields);
			}

			$this->setSelectedFields($thisSelectedFields);


		}
		else
		{
			$this->setSelectedFields(" * ");
		}
	}


	// Variables
	var $distinct;		// comment for distinct
	var $selectedFields;		// comment for selectedFields
	var $orderBy;		// comment for orderByArray
	var $orderDirection;		// comment for orderDirection
	var $limitStart;		// comment for limitStart
	var $limitEnd;		// comment for limitEnd
	var $whereString;

	/**
	* @return returns value of variable $distinct
	* @desc getDistinct : Getting value for variable $distinct
	*/
	function getDistinct()
	{
		return $this->distinct;
	}

	/**
	* @param param : value to be saved in variable $distinct
	* @desc setDistinct : Setting value for $distinct
	*/
	function setDistinct($value)
	{
		$this->distinct = $value;
	}

	/**
	* @return returns value of variable $selectedFields
	* @desc getSelectedFields : Getting value for variable $selectedFields
	*/
	function getSelectedFields()
	{
		return $this->selectedFields;
	}

	/**
	* @param param : value to be saved in variable $selectedFields
	* @desc setSelectedFields : Setting value for $selectedFields
	*/
	function setSelectedFields($value)
	{
		$this->selectedFields = $value;
	}

	/**
	* @return returns value of variable $orderByArray
	* @desc getOrderByArray : Getting value for variable $orderByArray
	*/
	function getOrderBy()
	{
		return $this->orderBy;
	}

	/**
	* @param param : value to be saved in variable $orderByArray
	* @desc setOrderByArray : Setting value for $orderByArray
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
	* @return returns value of variable $limitStart
	* @desc getLimitStart : Getting value for variable $limitStart
	*/
	function getLimitStart()
	{
		return $this->limitStart;
	}

	/**
	* @param param : value to be saved in variable $limitStart
	* @desc setLimitStart : Setting value for $limitStart
	*/
	function setLimitStart($value)
	{
		$this->limitStart = $value;
	}

	/**
	* @return returns value of variable $limitEnd
	* @desc getLimitEnd : Getting value for variable $limitEnd
	*/
	function getLimitEnd()
	{
		return $this->limitEnd;
	}

	/**
	* @param param : value to be saved in variable $limitEnd
	* @desc setLimitEnd : Setting value for $limitEnd
	*/
	function setLimitEnd($value)
	{
		$this->limitEnd = $value;
	}

	/**
	* @return returns value of variable $whereString
	* @desc getWhereString : Getting value for variable $whereString
	*/
	function getWhereString()
	{
		return $this->whereString;
	}

	/**
	* @param param : value to be saved in variable $whereString
	* @desc setWhereString : Setting value for $whereString
	*/
	function setWhereString($value)
	{
		$this->whereString = $value;
	}



	function constructSQL($thisTable)
	{

		//	$tempWherePairString = $this->getWhereString();



		$sql = "SELECT ".$this->getDistinct()." ".$this->getSelectedFields()." FROM ".$thisTable->getTableName();



		$sql .= $this->getWhereString();


		if ($this->getOrderBy()!="")
		{
			$sql .= " ORDER BY ".$this->getOrderBy()." ".$this->getOrderDirection()." ";
		}

		if ($this->getLimitStart()!= "")
		{
			$sql .= " LIMIT ".$this->getLimitStart().",".$this->getLimitEnd()." ";
		}


		$this->setSqlStatement($sql);

		return $sql;
	}


}

?>
