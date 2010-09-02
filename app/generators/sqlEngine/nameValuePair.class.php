<?

class nameValuePair
{

	// Variables
	var $name;		// comment for name
	var $value;		// comment for value


	/**
	* @return returns value of variable $name
	* @desc getName : Getting value for variable $name
	*/
	function getName()
	{
		return $this->name;
	}

	/**
	* @param param : value to be saved in variable $name
	* @desc setName : Setting value for $name
	*/
	function setName($value)
	{
		$this->name = $value;
	}

	/**
	* @return returns value of variable $value
	* @desc getValue : Getting value for variable $value
	*/
	function getValue()
	{
		return $this->value;
	}

	/**
	* @param param : value to be saved in variable $value
	* @desc setValue : Setting value for $value
	*/
	function setValue($value)
	{
		$this->value = $value;
	}


	function nameValuePair($thisName,$thisValue)
	{
		$this->setName($thisName);
		$this->setValue($thisValue);

	}

}
?>