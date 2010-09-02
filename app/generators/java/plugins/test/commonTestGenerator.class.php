<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(PLUGIN_JAVA_COMMON_GENERATOR);
?>
<?
class commonTestGenerator extends commonJavaGenerator
{


	function commonTestGenerator()
	{

	}





	function getEjbCommonImports()
	{
		$code = "";


		return $code;
	}

	function getEjbCommonPackage()
	{
		$code = "";


		return $code;
	}

	function changeBooleanFieldTypeToInt($fieldTypeArray)
	{
		$arrayKeys = array_keys($fieldTypeArray);

		for ($a=0;$a<count($arrayKeys);$a++)
		{
			$thisType = $fieldTypeArray[$arrayKeys[$a]];

			if ($thisType == "boolean") { $fieldTypeArray[$arrayKeys[$a]] = "int"; }

		}

		return $fieldTypeArray;

	}

}

?>