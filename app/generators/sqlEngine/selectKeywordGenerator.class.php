<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
?>
<?
include_once(CLASS_SQL_ENGINE);

class selectKeywordGenerator extends sqlEngine
{
	
	// Variables
	var $whereString;
	
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
	
	
	function selectKeywordGenerator($table,$db,$selectedFieldsArray="",$orderByArray="",$orderDirection="",$startLimit="",$numOfRows="",$distinct="",$wherePk="")
	{
		$thisTable = new table($table,$db);
		$fieldNames = $thisTable->getFieldNameArray();
		
		$whereString = " WHERE ";
		
		$fieldCount = count($fieldNames);
		
		for ($c=0;$c<$fieldCount;$c++)
		{
			$whereString .= $fieldNames[$c]." like '%\$thisKeyword%' ";
			
			if ($c!=($fieldCount-1))
			{
				
				$whereString .= " OR ";
				
			}
		}
		
		
		
		
		$this->setWhereString($whereString);
		$this->constructSQL($thisTable);
		
	}
	
	
	
	
	
	function constructSQL($thisTable)
	{
		
		//	$tempWherePairString = $this->getWhereString();
		
		
		
		$sql = "SELECT *  FROM ".$thisTable->getTableName();
		
		
		
		$sql .= $this->getWhereString();
		
		
		
		$this->setSqlStatement($sql);
		
		return $sql;
	}
	
	
}

?>
