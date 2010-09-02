<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_NAME_VALUE_PAIR);
include_once(CLASS_WHERE_PAIR);
?>
<?

class sqlEngine extends table
{
	var $sqlStatement;
	var $nameValuePairs;
	var $wherePairs;
	var $fieldSeparator;
	var $fieldEnclosure;
	var $fieldEquality;
	var $fieldString;
	var $valueString;



	function sqlEngine($table,$db)
	{
		$this->setFieldSeparator(",");
		$this->setFieldEnclosure("'");
		$this->setFieldEquality(" = ");

		$this->table($table,$db);

		/*
		$thisNewPair = new nameValuePair();
		$thisNewPair->setPair("Name","Nilesh");
		$arrayPair[] = $thisNewPair;

		$thisNewPair1 = new nameValuePair();
		$thisNewPair1->setPair("Sex","Male");
		$arrayPair[] = $thisNewPair1;

		$thisWherePair = new wherePair();
		$thisWherePair->setPair("field1","dead");
		$thisWherePair->setSuffixCondition(" or ");

		$wherePairArray[] = $thisWherePair;

		$thisWherePair1 = new wherePair();
		$thisWherePair1->setPair("field2","not dead");
		$wherePairArray[] = $thisWherePair1;

		$this->setWherePairs($wherePairArray);
		$this->setNameValuePairs($arrayPair);
		*/

		$this->setSelectedTable("tableName");

	}

	function getSqlStatement()
	{
		return $this->sqlStatement;
	}

	function setSqlStatement($value)
	{
		$this->sqlStatement = $value;
	}

	function getNameValuePairs()
	{
		return $this->nameValuePairs;
	}

	function setNameValuePairs($value)
	{
		$this->nameValuePairs = $value;
	}

	function getWherePairs()
	{
		return $this->wherePairs;
	}

	function setWherePairs($value)
	{
		$this->wherePairs = $value;
	}

	function getFieldSeparator()
	{
		return $this->fieldSeparator;
	}

	function setFieldSeparator($value)
	{
		$this->fieldSeparator = $value;
	}

	function getFieldEnclosure()
	{
		return $this->fieldEnclosure;
	}

	function setFieldEnclosure($value)
	{
		$this->fieldEnclosure = $value;
	}

	function getFieldEquality()
	{
		return $this->fieldEquality;
	}

	function setFieldEquality($value)
	{
		$this->fieldEquality = $value;
	}

	function getFieldString()
	{
		return $this->fieldString;
	}

	function setFieldString($value)
	{
		$this->fieldString = $value;
	}

	function getValueString()
	{
		return $this->valueString;
	}

	function setValueString($value)
	{
		$this->valueString = $value;
	}




	function addNameValuePair($name,$value)
	{
		$thisPair = new nameValuePairObject($name,$value);
		$nameValueArray = $this->getNameValuePairs();

		$nameValueArray[] = $thisPair;
		$this->setNameValuePairs($nameValueArray);
	}


	function removeTrailingComma( $string ) {
		$string = substr( $string, 0, strlen( $string ) - 1 );

		return $string;
	}


	function appendToString($string,$value,$valueSeparator="")
	{

		if (is_array($value))
		{
			for ($a=0;$a<count($value);$a++)
			{
				$string .= $value[$a].$valueSeparator;
			}
		}
		else
		{
			$string .= $value.$valueSeparator;
		}

		return $string;
	}

	function getWhereString()
	{
		$wherePairArray = $this->getWherePairs();
		$thisWherePair = new wherePair();

		for ($b=0;$b<count($wherePairArray);$b++)
		{
			if ($b==0)
			{
				$tempWherePairString .= " WHERE ";
			}

			$thisWherePair = $wherePairArray[$b];

			$tempWherePairString .= $thisWherePair->getName().
			$this->getFieldEquality().
			$this->getFieldEnclosure().
			$thisWherePair->getValue().
			$this->getFieldEnclosure().
			$thisWherePair->getSuffixCondition();

		}

		return $tempWherePairString;
	}

	function constructSQL()
	{

	}

}

?>