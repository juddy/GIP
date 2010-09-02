<?php
include_once("priceOutConf.inc.php");
include_once(CONFIG_FILE);
include_once(CLASS_DATABASE_QUERY);
include_once(CLASS_SEARCH_ITEM);
?>
<? 
class searchUtils
{
	
	// Variables
	// fieldToSearch  field from table
	var $searchItems;
	// start  field from table
	var $start ;
	// limit  field from table
	var $limit ;
	// fieldsToReturn  field from table
	var $fieldsToReturn ;
	// orderByField  field from table
	var $orderByField ;
	// orderDirection  field from table
	var $orderDirection ;
	// searchCondition  field from table
	var $searchOperand ;
	// table  field from table
	var $table ;
	//  field from table
	var $sql;
	
	
	/**
	* @return returns value of variable $fieldToSearch
	* @desc getFieldToSearch : Getting value for variable $fieldToSearch
	*/
	function getSearchItems()
	{
		return $this->searchItems;
	}
	
	/**
	* @param param : value to be saved in variable $fieldToSearch
	* @desc setFieldToSearch : Setting value for $fieldToSearch
	*/
	function setSearchItems($value)
	{
		$this->searchItems  = $value;
	}
	
	
	/**
	* @return returns value of variable $start
	* @desc getStart : Getting value for variable $start
	*/
	function getStart ()
	{
		return $this->start ;
	}
	
	/**
	* @param param : value to be saved in variable $start
	* @desc setStart : Setting value for $start
	*/
	function setStart ($value)
	{
		$this->start  = $value;
	}
	
	/**
	* @return returns value of variable $limit
	* @desc getLimit : Getting value for variable $limit
	*/
	function getLimit ()
	{
		return $this->limit ;
	}
	
	/**
	* @param param : value to be saved in variable $limit
	* @desc setLimit : Setting value for $limit
	*/
	function setLimit ($value)
	{
		$this->limit  = $value;
	}
	
	/**
	* @return returns value of variable $fieldsToReturn
	* @desc getFieldsToReturn : Getting value for variable $fieldsToReturn
	*/
	function getFieldsToReturn ()
	{
		return $this->fieldsToReturn ;
	}
	
	/**
	* @param param : value to be saved in variable $fieldsToReturn
	* @desc setFieldsToReturn : Setting value for $fieldsToReturn
	*/
	function setFieldsToReturn ($value)
	{
		$this->fieldsToReturn  = $value;
	}
	
	/**
	* @return returns value of variable $orderByField
	* @desc getOrderByField : Getting value for variable $orderByField
	*/
	function getOrderByField ()
	{
		return $this->orderByField ;
	}
	
	/**
	* @param param : value to be saved in variable $orderByField
	* @desc setOrderByField : Setting value for $orderByField
	*/
	function setOrderByField ($value)
	{
		$this->orderByField  = $value;
	}
	
	/**
	* @return returns value of variable $orderDirection
	* @desc getOrderDirection : Getting value for variable $orderDirection
	*/
	function getOrderDirection ()
	{
		return $this->orderDirection ;
	}
	
	/**
	* @param param : value to be saved in variable $orderDirection
	* @desc setOrderDirection : Setting value for $orderDirection
	*/
	function setOrderDirection ($value)
	{
		$this->orderDirection  = $value;
	}
	
	/**
	* @return returns value of variable $searchCondition
	* @desc getSearchCondition : Getting value for variable $searchCondition
	*/
	function getSearchOperand ()
	{
		return $this->searchOperand;
	}
	
	/**
	* @param param : value to be saved in variable $searchCondition
	* @desc setSearchCondition : Setting value for $searchCondition
	*/
	function setSearchOperand($value)
	{
		$this->searchOperand  = $value;
	}
	
	
	/**
	* @return returns value of variable $table
	* @desc getTable : Getting value for variable $table
	*/
	function getTable ()
	{
		return $this->table ;
	}
	
	/**
	* @param param : value to be saved in variable $table
	* @desc setTable : Setting value for $table
	*/
	function setTable ($value)
	{
		$this->table  = $value;
	}
	
	
	/**
	* @return returns value of variable $sql
	* @desc getSql : Getting value for variable $sql
	*/
	function getSql()
	{
		return $this->sql;
	}
	
	/**
	* @param param : value to be saved in variable $sql
	* @desc setSql : Setting value for $sql
	*/
	function setSql($value)
	{
		$this->sql = $value;
	}
	
	
	function buildSearchSQL()
	{
		
		$searchItemsList = $this->getSearchItems();
		
		
		if ($this->getFieldsToReturn()=="")
		{
			$this->setFieldsToReturn(" * ");
		}
		
		if ($this->getSearchOperand()=="")
		{
			$this->setSearchOperand(" and ");
		}
		
		if ($this->getOrderDirection()=="")
		{
			
			$this->setOrderDirection(" desc ");
		}
		
        $sqlBuffer = "";
        		
		$sqlBuffer .= "SELECT ";
		$sqlBuffer .= " ".$this->getFieldsToReturn()." ";
		$sqlBuffer .= " FROM ".$this->getTable();
		
        $whereString = buildWhereString($searchItemsList);

        $sqlBuffer .= $whereString;
		
		if ($this->getOrderByField()!="")
		{
			
			$sqlBuffer .= " order by ";
			$sqlBuffer .= " ".$this->getOrderByField()." ";
			$sqlBuffer .= " ".$this->getOrderDirection()." ";
			
		}
		
		
		$this->setSql($sqlBuffer);
		
	}
	
	function buildSearchByKeywordSQL()
	{
		$thisSearchItems = $this->getSearchItems();
		
		
		if (!is_array($thisSearchItems))
		{
			$newArray[] = $thisSearchItems;
			$thisSearchItems = $newArray;
		}
		
		$searchOperator = " like ";
		$searchOperand = " or ";
		
		if ($this->getFieldsToReturn()=="")
		{
			$this->setFieldsToReturn(" * ");
		}
		
		
		if ($this->getOrderDirection()=="")
		{
			$this->setOrderDirection(" desc ");
		}
		
		
		$sqlBuffer .= "SELECT ";
		$sqlBuffer .= " ".$this->getFieldsToReturn()." ";
		$sqlBuffer .= " FROM ".$this->getTable();
		
		
		
		$sqlBuffer .= " WHERE ";
		$sqlBuffer .= "(";
		
		for ($p=0; $p<count($thisSearchItems); $p++)
		{
			
			$thisSearchItem = $thisSearchItems[$p];
			
			
			$fieldList = $thisSearchItem->getSearchField();
			$keywords = $thisSearchItem->getSearchValues();
			$keyword = $keywords[0];
			
			
			
			$sqlBuffer .= "(";
			$sqlBuffer .= $fieldList." ".$searchOperator." '%".$keyword."%' ";
			$sqlBuffer .= ")";
			
			
			
			if ($p!=(count($thisSearchItems)-1))
			{
				$sqlBuffer .= " ".$searchOperand." ";
			}
			
		}// end p
		$sqlBuffer .= ")";
		
		
		
		if ($this->getOrderByField()!="")
		{
			
			$sqlBuffer .= " order by ";
			$sqlBuffer .= " ".$this->getOrderByField()." ";
			$sqlBuffer .= " ".$this->getOrderDirection()." ";
			
		}
		
		
		$this->setSql($sqlBuffer);
		
	}
	



	function getSearchSQL()
	{
		$this->buildSearchSQL();
		
		return $this->getSql();
		
	}
	
	function getSearchByKeywordSQL()
	{
		$this->buildSearchByKeywordSQL();
		
		return $this->getSql();
		
	}
	
	
	
	function countReturnRows()
	{
		
		$this->buildSearchSQL();
		
		$query = new databaseQuery();
		$query->setSqlQuery($this->getSql());
		
		//$result = $query->getDbConn()->Execute($newQuery);
		$result = $query->countResultSet();
		
		
		if ($result==false)
		{
			$thisError = new errorHandler();
			$thisError->setUserErrorMessage("A Database Error Occured while counting result Rows ");
			$thisError->setProgramErrorMessage($this->dbConn->ErrorMsg());
			$thisError->setErrorPage($_SERVER['PHP_SELF']);
			$thisError->handleError();
			
			return 0;
		}
		else
		{
			return $query->getTotalRows();
		}
		
		
	}
	
	
    function buildWhereString($searchItemsList)
    {

		
		if (!is_array($searchItemsList))
		{
			$newArray[] = $searchItemsList;
			$searchItemsList = $newArray;
		}

		$conditionNum = 0;
		$sqlBuffer = "";
		
		if ($searchItemsList!="")
		{
			
			if ($searchItemsList[0]!="")
			{
				
				if (count($searchItemsList)>0)
				{
					$sqlBuffer .= " WHERE ";
					
					
					$sqlBuffer .= "(";
					
					for ($a=0; $a<count($searchItemsList); $a++)
					{
					
						
						$thisSearchItem = $searchItemsList[$a];
						
						$searchValues = $thisSearchItem->getSearchValues();
					
						$sqlBuffer .= $thisSearchItem->getPrefix();	
						
						
						if ($conditionNum!=0)
						{
							$sqlBuffer .= " ".$thisSearchItem->getOuterOperand()." ";
						}
						
						$sqlBuffer .= "(";
						for ($b=0; $b<count($searchValues); $b++)
						{
							
							if ($b!=0)
							{
								$sqlBuffer .= " ".$thisSearchItem->getInnerOperand()." ";
							}
							
							
							$sqlBuffer .=   $thisSearchItem->getSearchField()." ".$thisSearchItem->getSearchCondition()." '".$searchValues[$b]."'";
							
							
							$conditionNum = $conditionNum + 1;
						} // end for b
						$sqlBuffer .= ")";
						
						$sqlBuffer .= $thisSearchItem->getSuffix();
						
					} // end for a
					
					$sqlBuffer .= ")";
					
				} // end if count>0
				
			}
		} // end of searchItemList!=null
		

         return $sqlBuffer;
	}

}

?>