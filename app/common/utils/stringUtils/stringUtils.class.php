<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_FILESYSTEM_UTILS);
?>
<?
class stringUtils
{

	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc replace :  put function description here ...
	*/
	function replaceAndGetNewString($originalString,$replacementsPairs)
	{
			
		$numberOfReplacements = count($replacementsPairs);

		for ($a=0;$a<$numberOfReplacements;$a++)
		{
		
			$thisReplaceMentPair = $replacementsPairs[$a];
			$originalString = str_replace( $thisReplaceMentPair->getValue1(),$thisReplaceMentPair->getValue2(),$originalString);
		}

		return $originalString;
	}

	
	function replaceStringInFileAndReturnString($fullFileName,$replacementPairs)
	{

		$fileString = fileSystemUtils::getStringFromFile($fullFileName);
		$newString = stringUtils::replaceAndGetNewString($fileString,$replacementPairs);

		return $newString;
	}
	
	function replaceStringInFileAndSaveFile($fullFileName,$replacementPairs)
	{

		$fileString = fileSystemUtils::getStringFromFile($fullFileName);
			
		$newString = stringUtils::replaceAndGetNewString($fileString,$replacementPairs);

		return fileSystemUtils::saveStringInFile($fullFileName,$newString);
		

	}	


	function removeTrailingComma( $string ) {

		$string = $this->stripString($string);

		$string = substr( $string, 0, strlen( $string ) - 1 );

		return $string;
	}

	function stripString($string)
	{
		return rtrim(ltrim($string));
	}
}

?> 
