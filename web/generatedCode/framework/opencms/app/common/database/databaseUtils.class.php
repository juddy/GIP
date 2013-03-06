<?php  
include_once("{APPLICATION_CONF_FILE}");
include_once(CONFIG_FILE);
include_once(CLASS_DATABASE_CONNECTION_POOL);
include_once(CLASS_ERROR_HANDLER);

class databaseUtils
{
	
	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc genericGet($key,$compareField,$returnField,$table) :  put function description here ...
	*/
	function genericGet($key,$compareField,$returnField,$table)
	{
		global $db;
		
		// Query to get $returnfield data based on $key
		$query = "select $returnField from $table where $compareField='$key'";
		
		
		$thisDatabaseQuery = new databaseQuery();
		$thisDatabaseQuery->setSqlQuery($query);
		$thisDatabaseQuery->executeQuery();
		
		$result = $thisDatabaseQuery->getResultSet();
		
		if ($result==false)
		{
			handleError("A Database Error Occured ",$db->ErrorMsg(),$_SERVER['PHP_SELF'],'y','y');
		}
		else
		{
			if ($result->RowCount()==0)
			{
				return("");
			}
			else if ($result->RowCount()>0)
			{
				return($result->fields[$returnField]);
			}
		}
		
		
	}
	
	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc buildDropDown($idField,$labelField,$tableName,$conditionField="",$conditionValue="",$labelField2 = "") :  put function description here ...
	*/
	function buildDropDown($idField,$labelField,$tableName,$conditionField="",$conditionValue="",$labelField2 = "")
	{
		global $db;
		
		if ($labelField2!="") { $lab2 = ", $labelField2"; } else {$lab2 = ""; }
		
		if ($conditionField!="") { $whereClause = " where $conditionField='$conditionValue' "; }
		
		$querydrop = "select $idField,$labelField $lab2 from $tableName $whereClause ";
		$thisDatabaseQuery = new databaseQuery();
		$thisDatabaseQuery->setSqlQuery($querydrop);
		$thisDatabaseQuery->executeQuery();
		
		$result = $thisDatabaseQuery->getResultSet();
		
		if ($result==false)
		{
			$thisError = new errorHandler();
			$thisError->setUserErrorMessage("An Error Occured while trying to build drop down box from database");
			$thisError->setProgramErrorMessage("An Error Occured while trying to build drop down box from database in function buildDropDown()".$querydrop);
			$thisError->handleError();
		}
		else
		{
			if ($result->RowCount()==0)
			{
				return("");
			}
			else if ($result->RowCount()>0)
			{
				
				while (! $result->EOF)
				{
					$id = $result->fields[$idField];
					$label = $result->fields[$labelField];
					
					if ($labelField2!="") { $label2 = $result->fields[$labelField2];  }
					
					echo "<option value=\"$id\">$label";
					if ($labelField2!="") { echo " $label2 ";  }
					echo "</option>";
					
					$result->MoveNext();
				}
				
			}
		}
		
	}

	
}

?>