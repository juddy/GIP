<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CLASS_STRING_UTILS);
include_once(CLASS_PAIR);
?>
<?
class commonObjectCopier {

	function getReplacedConnectionFileForSimpleApp($arguments="")
	{
		$rootFolder = FILES_TO_COPY_PHP_TEMPLATE_SIMPLE;
		$rootCommon = $rootFolder.FILE_SEPARATOR."common";

		if ($arguments!="")
		{
			$thisDb = $arguments['db'];
		}

		if (HAVE_AUTHENTICATION)
		{


			$dbUserName = $_SESSION['dbUserName'];
			$dbHostName = $_SESSION['dbHostName'];
			$encDbPassword = $_SESSION['dbPassword'];


			$thisEncrypter = new textEncrypter();
			$unEncodedDbPassword = $thisEncrypter->decode($encDbPassword);
		}
		else
		{
			$dbUserName = DATABASE_USER_NAME;
			$dbHostName = DATABASE_HOST;
			$unEncodedDbPassword = DATABASE_PASSWORD;


		}

		// DB CONNECTION FILE TO REPLACE
		$replacePair = array();
		$replacePair[] = new pair("{DB_HOST}",$dbHostName);
		$replacePair[] = new pair("{DB_USER}",$dbUserName);
		$replacePair[] = new pair("{DB_PASSWORD}",$unEncodedDbPassword);
		$replacePair[] = new pair("{DB_NAME}",$thisDb);

		$dbConnectionFileName = $rootCommon.FILE_SEPARATOR."dbConnection.php";
		$newDbConnectionText = stringUtils::replaceStringInFileAndReturnString($dbConnectionFileName,$replacePair);

		return $newDbConnectionText;
	}



	function copyObjectsForGenieFramework($rootFolder,$parameters)
	{

	}

}

?>