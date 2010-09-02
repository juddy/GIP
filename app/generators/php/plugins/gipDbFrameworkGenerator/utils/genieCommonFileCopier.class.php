<? 
include_once("/GIP/app/settings/gipConfiguration.inc.php");
include_once(CLASS_FILESYSTEM_UTILS);
include_once(CLASS_PAIR);
?>
<?
class gipCommonFileCopier
{


	function copyAppFiles($configurationFileName,$projectAppRoot)
	{
		$commonAppLocation = FILES_TO_COPY_PHP_TEMPLATE_FRAMEWORK.FILE_SEPARATOR."app";
		fileSystemUtils::xcopy($commonAppLocation,$projectAppRoot);

	}

	function copyWebFiles($configurationFileName,$projectWebRoot)
	{
		$commonWebLocation =FILES_TO_COPY_PHP_TEMPLATE_FRAMEWORK.FILE_SEPARATOR."web";
		fileSystemUtils::xcopy($commonWebLocation,$projectWebRoot);

	}

	function copyConfigFiles($configurationFileName,$projectConfigRoot)
	{
		$commonConfigLocation = FILES_TO_COPY_PHP_TEMPLATE_FRAMEWORK.FILE_SEPARATOR."config";
		fileSystemUtils::xcopy($commonConfigLocation,$projectConfigRoot);

		//$replacementPairs = "";
		//$replacementPairs[] = new pair("{APPLICATION_NAME}",$appName);
		//fileSystemUtils::xReplaceStringInFiles($rootDirectory,$replacementPairs);

	}

	function replaceConfStringsInDirectories($rootDirectory,$configFileName)
	{
		
		$configPath = $rootDirectory.FILE_SEPARATOR."config";
		$appPath = $rootDirectory.FILE_SEPARATOR."app";
		$appCommonPath = $appPath.FILE_SEPARATOR."common";
		$commonDbPath = $appCommonPath.FILE_SEPARATOR."database";
		$commonSearchPath = $appCommonPath.FILE_SEPARATOR."search";
		$commonWebPath = $rootDirectory.FILE_SEPARATOR."web".FILE_SEPARATOR."common";
		$commonWebHtmlPath = $rootDirectory.FILE_SEPARATOR."web".FILE_SEPARATOR."html";		
		
		$filesToChange = "";
		
		$filesToChange[] = $configPath.FILE_SEPARATOR."applicationConstants.inc.php";
		$filesToChange[] = $configPath.FILE_SEPARATOR."configuration.inc.php";
		$filesToChange[] = $configPath.FILE_SEPARATOR."webConstants.inc.php";
		$filesToChange[] = $configPath.FILE_SEPARATOR."webIncludes.inc.php";
										
		$filesToChange[] = $commonDbPath.FILE_SEPARATOR."databaseConnectionPool.class.php";
		$filesToChange[] = $commonDbPath.FILE_SEPARATOR."databaseQuery.class.php";
		//$filesToChange[] = $commonDbPath.FILE_SEPARATOR." databaseUtils.class.php";
		
		$filesToChange[] = $commonSearchPath.FILE_SEPARATOR."searchUtils.class.php";						
		$filesToChange[] = $commonWebPath.FILE_SEPARATOR."commonHeader.php";
		$filesToChange[] = $commonWebPath.FILE_SEPARATOR."commonFooter.php";		
		$filesToChange[] = $rootDirectory.FILE_SEPARATOR."web".FILE_SEPARATOR."index.php";
		
		
		$filesToChange[] = $commonWebHtmlPath.FILE_SEPARATOR."about.php";
		$filesToChange[] = $commonWebHtmlPath.FILE_SEPARATOR."contactUs.php";
		$filesToChange[] = $commonWebHtmlPath.FILE_SEPARATOR."copyright.php";
		$filesToChange[] = $commonWebHtmlPath.FILE_SEPARATOR."faq.php";								
		$filesToChange[] = $commonWebHtmlPath.FILE_SEPARATOR."mailContact.php";			
		
		$replacementPairs = "";
		$replacementPairs[] = new pair("{APPLICATION_CONF_FILE}",$configFileName);
			
		for ($a=0;$a<count($filesToChange);$a++)
		{
		     stringUtils::replaceStringInFileAndSaveFile($filesToChange[$a],$replacementPairs);	
		}
		      
		
		$replacementPairs = "";
		list($dbName,$junk) = explode(".",$configFileName);
		$dbName = strtoupper($dbName);
		$file = $configPath.FILE_SEPARATOR."applicationConstants.inc.php";
		$replacementPairs[] = new pair("{APPLICATION_NAME}",$dbName." GIP");
        stringUtils::replaceStringInFileAndSaveFile($file,$replacementPairs);	  
		      
		/*
		
		TAKING TOO MUCH TIME TO PARSE EVERYTHING AND REPLACE
		SO COMMENTED OUT and replace only in a few files..
		
		if (OS_UNIX)
		{

		$commandToRun = "find . -print | egrep \"*\.php\" | xargs perl -pi -e 's/{APPLICATION_CONF_FILE}/".$configFileName."/g'";
		echo $commandToRun;
			
		}
		else
		{

			$replacementPairs = "";
			$replacementPairs[] = new pair("{APPLICATION_CONF_FILE}",$configFileName);

			fileSystemUtils::xReplaceStringInFiles($rootDirectory,$replacementPairs);
		}
		*/
	}

	function replaceApplicationRootForSimpleGen($rootDirectory,$rootURL)
	{
		
		$commonPath = $rootDirectory.FILE_SEPARATOR."common";
	
		
		$filesToChange = "";
		
		$filesToChange[] = $commonPath.FILE_SEPARATOR."footer.php";
		$filesToChange[] = $commonPath.FILE_SEPARATOR."header.php";

		
		$replacementPairs = "";
		$replacementPairs[] = new pair("{APPLICATION_ROOT}",$rootURL);
			
		for ($a=0;$a<count($filesToChange);$a++)
		{
		     stringUtils::replaceStringInFileAndSaveFile($filesToChange[$a],$replacementPairs);	
		}

	}	
	
}

?>