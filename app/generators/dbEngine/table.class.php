<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CLASS_DATABASE);
include_once(CLASS_FIELDINFO);
?>
<?


/**
* @desc this Object Respresents a field in a table
*/
class table extends database
{
	var $tableName ;
	// fieldInfoArray field from table
	var $fieldInfoArray;
	var $fieldNameArray;
	var $primaryKey;

	/**
	* @return returns value of variable $tableName
	* @desc getTableName : Getting value for variable $tableName
	*/
	function getTableName ()
	{
		return $this->tableName ;
	}

	/**
	* @param param : value to be saved in variable $tableName
	* @desc setTableName : Setting value for $tableName
	*/
	function setTableName ($value)
	{
		$this->tableName  = $value;
	}

	/**
	* @return returns value of variable $fieldInfoArray
	* @desc getFieldInfoArray : Getting value for variable $fieldInfoArray
	*/
	function getFieldInfoArray()
	{
		return $this->fieldInfoArray;
	}

	/**
	* @param param : value to be saved in variable $fieldInfoArray
	* @desc setFieldInfoArray : Setting value for $fieldInfoArray
	*/
	function setFieldInfoArray($value)
	{
		$this->fieldInfoArray = $value;
	}

	/**
	* @return returns value of variable $fieldNameArray
	* @desc getFieldNameArray : Getting value for variable $fieldNameArray
	*/
	function getFieldNameArray()
	{
		return $this->fieldNameArray;
	}

	/**
	* @param param : value to be saved in variable $fieldNameArray
	* @desc setFieldNameArray : Setting value for $fieldNameArray
	*/
	function setFieldNameArray($value)
	{
		$this->fieldNameArray = $value;
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

	function table($table,$db)
	{

		if ($table=="")
		{
			echo "<br><br><font color=red><b>".LANG_INTERNALS_TABLE_LOADER_ERROR."!</b><br><br>".LANG_INTERNALS_TABLE_NEED_TO_BE_CHOSEN."<br><br></font><font color=blue>".LANG_INTERNALS_PLEASE_SELECT_TABLE_AND_TRY_AGAIN."<br><br></font>";
			exit;
		}


		$this->setDatabase($db);
		$this->setTableName($table);

		if ($db!="")
		{
			$this->useDatabase($db);
		}
		else
		{
			$this->connect();
		}


		$this->initializeFieldsFromDb();


	}

	function initializeFieldsFromDb()
	{
		$thisSQLLayerFieldInfoArray = $this->getTableFieldsFromDatabase();
		$fieldInfoArrayKeys = array_keys($thisSQLLayerFieldInfoArray);

		$thisFieldInfo = new fieldInfo();
		$arrayOfFieldInfos = array();
		$thisFieldNameArray = array();



		for ($a=0;$a<count($fieldInfoArrayKeys);$a++)
		{
			$thisSQLLayerFieldInfo = $thisSQLLayerFieldInfoArray[$fieldInfoArrayKeys[$a]];
			$thisFieldInfo = $this->populateFieldInfo($thisFieldInfo,$thisSQLLayerFieldInfo);
			$arrayOfFieldInfos[] = $thisFieldInfo;

			$thisFieldNameArray[] = $thisFieldInfo->getFieldName();
		}

		if (count($thisFieldNameArray)>1)
		{

			if ($this->getPrimaryKey()=="")
			{
				$this->setPrimaryKey($thisFieldNameArray[0]);
			}
		}

		$this->setFieldInfoArray($arrayOfFieldInfos);
		$this->setFieldNameArray($thisFieldNameArray);
	}

	function populateFieldInfo($thisFieldInfo,$SQLLayerFieldInfo)
	{

		// NOT Every database has all the field meta data.. some have some.. others have others..
		if (method_exists($SQLLayerFieldInfo,"auto_increment"))
		{
			$thisFieldInfo->setAutoIncrement($SQLLayerFieldInfo->auto_increment);
		}
		else
		{
			$thisFieldInfo->setAutoIncrement(false);
		}

		
		if (method_exists($SQLLayerFieldInfo,"primary_key"))
		{
			$thisFieldInfo->setPrimaryKey($SQLLayerFieldInfo->primary_key);
		}
		else
		{
			$thisFieldInfo->setPrimaryKey(false);
		}



		if (method_exists($SQLLayerFieldInfo,"default_value"))
		{
			$thisFieldInfo->setDefaultValue($SQLLayerFieldInfo->default_value);
		}
		else
		{
			$thisFieldInfo->setDefaultValue("");
		}


		if (method_exists($SQLLayerFieldInfo,"type"))
		{
			$thisFieldInfo->setFieldDbType($SQLLayerFieldInfo->type);
		}
		else
		{
			$thisFieldInfo->setFieldDbType("Undefined Type");
		}

		if (method_exists($SQLLayerFieldInfo,"max_length"))
		{
			$thisFieldInfo->setFieldLength($SQLLayerFieldInfo->max_length);
		}
		else
		{
			$thisFieldInfo->setFieldLength("0");
		}


		$thisFieldInfo->setFieldName($SQLLayerFieldInfo->name);
		$thisFieldInfo->setFieldFormType("");
		$thisFieldInfo->setFieldLabel("");




		if ($thisFieldInfo->getPrimaryKey()==1)
		{
			$this->setPrimaryKey($thisFieldInfo->getFieldName());
		}

		return $thisFieldInfo;

	}



	function getTableFieldsFromDatabase()
	{

		// Returns ADODB FieldObject
		$tableFieldArray = $this->dbConn->MetaColumns($this->getTableName());

		
		return $tableFieldArray;
	}


}

?>