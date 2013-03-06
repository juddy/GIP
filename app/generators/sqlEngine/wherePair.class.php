<?

class wherePair extends nameValuePair
{
	var $suffixCondition;
	
	function getSuffixCondition()
	{
		return $this->suffixCondition;
	}
	
	function setSuffixCondition($value)
	{
		$this->suffixCondition = $value;
	}
	
}

?>