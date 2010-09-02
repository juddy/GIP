<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
?>
<?

/**
* @desc this Object Respresents a field in a table
*/
class fieldInfo
{
	// Variables
	var $fieldName;		// comment for fieldName
	var $fieldLabel;		// comment for fieldLabel
	var $fieldDbType;		// comment for fieldDbType
	var $fieldFormType;		// comment for fieldFormType
	var $fieldLength;		// comment for fieldLength
	var $primaryKey;		// comment for primaryKey
	var $autoIncrement;		// comment for autoIncrement
	var $defaultValue;		// comment for defaultValue
	
	/**
	* @return returns value of variable $fieldName
	* @desc getFieldName : Getting value for variable $fieldName
	*/
	function getFieldName()
	{
		return $this->fieldName;
	}
	
	/**
	* @param param : value to be saved in variable $fieldName
	* @desc setFieldName : Setting value for $fieldName
	*/
	function setFieldName($value)
	{
		$this->fieldName = $value;
	}
	
	/**
	* @return returns value of variable $fieldLabel
	* @desc getFieldLabel : Getting value for variable $fieldLabel
	*/
	function getFieldLabel()
	{
		return $this->fieldLabel;
	}
	
	/**
	* @param param : value to be saved in variable $fieldLabel
	* @desc setFieldLabel : Setting value for $fieldLabel
	*/
	function setFieldLabel($value)
	{
		$this->fieldLabel = $value;
	}
	
	/**
	* @return returns value of variable $fieldDbType
	* @desc getFieldDbType : Getting value for variable $fieldDbType
	*/
	function getFieldDbType()
	{
		return $this->fieldDbType;
	}
	
	/**
	* @param param : value to be saved in variable $fieldDbType
	* @desc setFieldDbType : Setting value for $fieldDbType
	*/
	function setFieldDbType($value)
	{
		$this->fieldDbType = $value;
	}
	
	/**
	* @return returns value of variable $fieldFormType
	* @desc getFieldFormType : Getting value for variable $fieldFormType
	*/
	function getFieldFormType()
	{
		return $this->fieldFormType;
	}
	
	/**
	* @param param : value to be saved in variable $fieldFormType
	* @desc setFieldFormType : Setting value for $fieldFormType
	*/
	function setFieldFormType($value)
	{
		$this->fieldFormType = $value;
	}
	
	/**
	* @return returns value of variable $fieldLength
	* @desc getFieldLength : Getting value for variable $fieldLength
	*/
	function getFieldLength()
	{
		return $this->fieldLength;
	}
	
	/**
	* @param param : value to be saved in variable $fieldLength
	* @desc setFieldLength : Setting value for $fieldLength
	*/
	function setFieldLength($value)
	{
		$this->fieldLength = $value;
	}
	
	/**
	* @return returns value of variable $primaryKey
	* @desc getPrimaryKey : Getting value for variable $primaryKey
	*/
	function getPrimaryKey()
	{
		return $this->primaryKey;
	}
	
	/**
	* @param param : value to be saved in variable $primaryKey
	* @desc setPrimaryKey : Setting value for $primaryKey
	*/
	function setPrimaryKey($value)
	{
		$this->primaryKey = $value;
	}
	
	/**
	* @return returns value of variable $autoIncrement
	* @desc getAutoIncrement : Getting value for variable $autoIncrement
	*/
	function getAutoIncrement()
	{
		return $this->autoIncrement;
	}
	
	/**
	* @param param : value to be saved in variable $autoIncrement
	* @desc setAutoIncrement : Setting value for $autoIncrement
	*/
	function setAutoIncrement($value)
	{
		$this->autoIncrement = $value;
	}
	
	/**
	* @return returns value of variable $defaultValue
	* @desc getDefaultValue : Getting value for variable $defaultValue
	*/
	function getDefaultValue()
	{
		return $this->defaultValue;
	}
	
	/**
	* @param param : value to be saved in variable $defaultValue
	* @desc setDefaultValue : Setting value for $defaultValue
	*/
	function setDefaultValue($value)
	{
		$this->defaultValue = $value;
	}
	
}

?>