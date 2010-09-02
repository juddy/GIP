<? 
include_once("/GIP/app/settings/gipConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<? 
include_once(CLASS_FILESYSTEM_UTILS);
include_once(CLASS_TABLE);
include_once(CLASS_PLUGIN_LOADER);
include_once(CLASS_PHP_GENIE_UTILS_INDEX_BUILDER);
include_once(CLASS_PHP_GENIE_UTILS_COMMON_FILE_COPIER);

$thisPlugInLoader = new plugInLoader();

$arguments = array();
$thisGeneratePath = requestUtils::getRequestObject('generatePath');
$thisConfigFile = requestUtils::getRequestObject('configFile');
$thisGenDao = requestUtils::getRequestObject('genDao');
$thisGenManager = requestUtils::getRequestObject('genManager');
$thisInfoObject = requestUtils::getRequestObject('infoObject');
$thisManager = requestUtils::getRequestObject('manager');
$thisDao = requestUtils::getRequestObject('dao');
$thisConstants = requestUtils::getRequestObject('constants');
$thisCopyCommon = requestUtils::getRequestObject('copyCommon');
$thisFrontEnd = requestUtils::getRequestObject('frontEnd');
$thisLanguage = requestUtils::getRequestObject('language');
$thisTables = requestUtils::getRequestObject('tableName');

$thisDb = requestUtils::getRequestObject('db');
$thisTable = requestUtils::getRequestObject('table');

$headerText = requestUtils::getRequestObject('headerText');
$footerText = requestUtils::getRequestObject('footerText');

$tableSideBar = "";

$thisFileUtils = new fileSystemUtils();
$thisCommonFileCopier = new gipCommonFileCopier();


if ($thisConfigFile==".conf.php") { $thisConfigFile = DEFAULT_CONFIGURATION_FILE_NAME.".conf.php"; }


$arguments['db'] = $thisDb;
$mainIndexes = array();
echo "All Code will be generated in path <font color=red><b>".$thisGeneratePath."</b></font><br><br>";

$thisFileUtils->makeDirectoryRecursive($thisGeneratePath);
if ((!$thisFileUtils->doesDirectoryExists($thisGeneratePath)))
{
?>
The path that you have entered to be the root for your code Generation does not exist on your system. Code Genie cannot proceed. Please make sure that the directory <b><? echo $thisGeneratePath; ?></b> exists on the file System. <br><br>
<?php
exit;
}
else if (count($thisTables)==0)
{
?>
You did not select any tables for Auto Code Generation. You need to select at least one table. Please go back and choose again.
<?php
}
else
{

	if ($thisDb!="")
	{

		$projectRoot = $thisGeneratePath.FILE_SEPARATOR.$thisDb;

	}
	else
	{
		$altProjectRoot = date("DMdhi");
		$projectRoot = $thisGeneratePath.FILE_SEPARATOR."project".$altProjectRoot;
	}

	$thisFileUtils->makeDirectoryRecursive($projectRoot);

	$appDirectory = $projectRoot.FILE_SEPARATOR."app";
	$webDirectory = $projectRoot.FILE_SEPARATOR."web";
	$configDirectory = $projectRoot.FILE_SEPARATOR."config";
	$includeDirectory = $projectRoot.FILE_SEPARATOR."include";
	$indexDirectory = $webDirectory.FILE_SEPARATOR."index";


	$thisFileUtils->makeDirectoryRecursive($appDirectory);
	$thisFileUtils->makeDirectoryRecursive($webDirectory);
	$thisFileUtils->makeDirectoryRecursive($configDirectory);
	$thisFileUtils->makeDirectoryRecursive($includeDirectory);
	$thisFileUtils->makeDirectoryRecursive($indexDirectory);

	$thisCommonFileCopier->copyAppFiles($thisConfigFile,$appDirectory);
	$thisCommonFileCopier->copyWebFiles($thisConfigFile,$webDirectory,$thisConfigFile);
	$thisCommonFileCopier->copyConfigFiles($thisConfigFile,$configDirectory,$thisConfigFile);


	$appDaoDirectory = $appDirectory.FILE_SEPARATOR.DEFAULT_DIRECTORY_NAME_FOR_CRUD_CLASSES;
	$webFormDirectory = $webDirectory.FILE_SEPARATOR.DEFAULT_DIRECTORY_NAME_FOR_CRUD_FRONT_END;

	$thisFileUtils->makeDirectoryRecursive($appDaoDirectory);
	$thisFileUtils->makeDirectoryRecursive($webFormDirectory);



	if ($thisConstants == "y")
	{
		// Initializing Arguments
		$arguments = array();
		$arguments['table'] = $thisTables[0];
		$arguments['db'] = $thisDb;
		$arguments['siteRootPath'] = $projectRoot;
		$arguments['urlAddress'] = URL_ADDRESS."/generatedCode/framework/".$thisDb;


		$dbConstantsCode = $thisPlugInLoader->loadPlugIn(
		PLUGIN_PHP_GENIE_COMMONDB_GENERATOR_NAME,
		PLUGIN_PHP_GENIE_COMMONDB_GENERATOR_CLASS,
		$arguments
		);


		$dbConstantsFileName = "databaseConfiguration.inc.php";
		$thisFileUtils->writeContentsToFile($configDirectory,$dbConstantsFileName, $dbConstantsCode);

		$configurationFileCode = $thisPlugInLoader->loadPlugIn(
		PLUGIN_PHP_GENIE_CONFIGURATION_FILE_GENERATOR_NAME,
		PLUGIN_PHP_GENIE_CONFIGURATION_FILE_GENERATOR_CLASS,
		$arguments
		);
		$configurationFileName = $thisDb.".conf.php";
		$thisFileUtils->writeContentsToFile($includeDirectory,$configurationFileName, $configurationFileCode);


		$pageConstantsCode = $thisPlugInLoader->loadPlugIn(
		PLUGIN_PHP_GENIE_COMMONPAGES_GENERATOR_NAME,
		PLUGIN_PHP_GENIE_COMMONPAGES_GENERATOR_CLASS,
		$arguments
		);

		$pageConstantsFileName = "pageConstants.inc.php";
		$thisFileUtils->writeContentsToFile($configDirectory,$pageConstantsFileName,$pageConstantsCode);


		$classConstantsCode = $thisPlugInLoader->loadPlugIn(
		PLUGIN_PHP_GENIE_COMMON_CLASSES_GENERATOR_NAME,
		PLUGIN_PHP_GENIE_COMMON_CLASSES_GENERATOR_CLASS,
		$arguments
		);

		$classConstantsFileName = "classConstants.inc.php";
		$thisFileUtils->writeContentsToFile($configDirectory,$classConstantsFileName,$classConstantsCode);


	}


	for ($a=0;$a<count($thisTables);$a++)
	{

		$currentTable = $thisTables[$a];
		$arguments['table'] = $thisTables[$a];
		$arguments['db'] = $thisDb;



		$thisTable = new table($currentTable,$thisDb);
		$allFields = $thisTable->getFieldNameArray();

		echo "Generating Code for table <b>".$currentTable."</b>... <br><br>";

		$tableAppDirectory = $appDaoDirectory.FILE_SEPARATOR.$currentTable;
		$tableWebDirectory  = $webFormDirectory.FILE_SEPARATOR.$currentTable;


		$thisFileUtils->makeDirectoryRecursive($tableAppDirectory);
		$thisFileUtils->makeDirectoryRecursive($tableWebDirectory);



		if ($thisGenDao == "y")
		{

			// Initializing Arguments
			$arguments = array();
			$arguments['table'] = $thisTables[$a];
			$arguments['db'] = $thisDb;

			$genDaoCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_GENIE_APP_GENDAO_GENERATOR_NAME,
			PLUGIN_PHP_GENIE_APP_GENDAO_GENERATOR_CLASS,
			$arguments
			);

			$genDaoFileName = $currentTable."GenDAO.class.php";
			$thisFileUtils->writeContentsToFile($tableAppDirectory,$genDaoFileName,$genDaoCode);

		}

		if ($thisGenManager == "y")
		{

			// Initializing Arguments
			$arguments = array();
			$arguments['table'] = $thisTables[$a];
			$arguments['db'] = $thisDb;

			$genManagerCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_GENIE_APP_GENMANAGER_GENERATOR_NAME,
			PLUGIN_PHP_GENIE_APP_GENMANAGER_GENERATOR_CLASS,
			$arguments
			);

			$genManagerFileName = $currentTable."GenManager.class.php";
			$thisFileUtils->writeContentsToFile($tableAppDirectory,$genManagerFileName,$genManagerCode);

		}

		if ($thisInfoObject == "y")
		{
			// Initializing Arguments
			$arguments = array();
			$arguments['table'] = $thisTables[$a];
			$arguments['db'] = $thisDb;



			$genInfoCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_GENIE_APP_INFO_GENERATOR_NAME,
			PLUGIN_PHP_GENIE_APP_INFO_GENERATOR_CLASS,
			$arguments
			);


			$genInfoFileName = $currentTable."Info.class.php";
			$thisFileUtils->writeContentsToFile($tableAppDirectory,$genInfoFileName,$genInfoCode);
		}

		if ($thisManager == "y")
		{
			// Initializing Arguments
			$arguments = array();
			$arguments['table'] = $thisTables[$a];
			$arguments['db'] = $thisDb;

			$managerCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_GENIE_APP_MANAGER_GENERATOR_NAME,
			PLUGIN_PHP_GENIE_APP_MANAGER_GENERATOR_CLASS,
			$arguments
			);

			$managerFileName = $currentTable."Manager.class.php";
			$thisFileUtils->writeContentsToFile($tableAppDirectory,$managerFileName,$managerCode);

		}

		if ($thisDao == "y")
		{
			// Initializing Arguments
			$arguments = array();
			$arguments['table'] = $thisTables[$a];
			$arguments['db'] = $thisDb;

			$daoCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_GENIE_APP_DAO_GENERATOR_NAME,
			PLUGIN_PHP_GENIE_APP_DAO_GENERATOR_CLASS,
			$arguments
			);

			$daoFileName = $currentTable."DAO.class.php";
			$thisFileUtils->writeContentsToFile($tableAppDirectory,$daoFileName,$daoCode);
		}



		if ($thisFrontEnd == "y")
		{


			// Initializing Arguments
			$arguments = array();
			$arguments['table'] = $thisTables[$a];
			$arguments['db'] = $thisDb;
			$arguments['headerText'] = $headerText;
			$arguments['footerText'] = $footerText;


			$chosenFields = "";
			$fieldSize = "";
			$fieldType = "";
			$fieldLabel = "";

			for ($i=0;$i<count($allFields);$i++)
			{

				$fieldSize[$allFields[$i]] = 20;
				$fieldType[$allFields[$i]] = "text";
				$fieldLabel[$allFields[$i]] = ucfirst($allFields[$i])." : ";
				$chosenFields[] = $allFields[$i];
			}


			$arguments['chosenFields'] = $chosenFields;
			$arguments['fieldSize'] = $fieldSize;
			$arguments['fieldType'] = $fieldType;
			$arguments['label'] = $fieldLabel;
			$arguments['formType'] = "enter";


			$generatedCrudGridCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_GENIE_WEB_CRUD_GRID_GENERATOR_NAME,
			PLUGIN_PHP_GENIE_WEB_CRUD_GRID_GENERATOR_CLASS,
			$arguments
			);

			$generatedEnterFormCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_GENIE_WEB_ENTER_FORM_GENERATOR_NAME,
			PLUGIN_PHP_GENIE_WEB_ENTER_FORM_GENERATOR_CLASS,
			$arguments
			);




			$generatedInsertCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_GENIE_WEB_INSERT_GENERATOR_NAME,
			PLUGIN_PHP_GENIE_WEB_INSERT_GENERATOR_CLASS,
			$arguments
			);



			$generatedEditFormCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_GENIE_WEB_EDIT_FORM_GENERATOR_NAME,
			PLUGIN_PHP_GENIE_WEB_EDIT_FORM_GENERATOR_CLASS,
			$arguments
			);



			$generatedUpdateCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_GENIE_WEB_UPDATE_GENERATOR_NAME,
			PLUGIN_PHP_GENIE_WEB_UPDATE_GENERATOR_CLASS,
			$arguments
			);


			$generatedConfirmDeleteCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_GENIE_WEB_DELETE_CONFIRMATION_GENERATOR_NAME,
			PLUGIN_PHP_GENIE_WEB_DELETE_CONFIRMATION_GENERATOR_CLASS,
			$arguments
			);


			$generatedDeleteCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_GENIE_WEB_DELETE_GENERATOR_NAME,
			PLUGIN_PHP_GENIE_WEB_DELETE_GENERATOR_CLASS,
			$arguments
			);


			$generatedViewRecordCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_GENIE_WEB_VIEW_GENERATOR_NAME,
			PLUGIN_PHP_GENIE_WEB_VIEW_GENERATOR_CLASS,
			$arguments
			);

			$generatedListAllCode =  $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_GENIE_WEB_LISTALL_GENERATOR_NAME,
			PLUGIN_PHP_GENIE_WEB_LISTALL_GENERATOR_CLASS,
			$arguments
			);


			$generatedPowerSearchFormCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_GENIE_WEB_POWER_SEARCH_FORM_GENERATOR_NAME,
			PLUGIN_PHP_GENIE_WEB_POWER_SEARCH_FORM_GENERATOR_CLASS,
			$arguments
			);


			$generatedPowerSearchScriptCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_GENIE_WEB_POWER_SEARCH_SCRIPT_GENERATOR_NAME,
			PLUGIN_PHP_GENIE_WEB_POWER_SEARCH_SCRIPT_GENERATOR_CLASS,
			$arguments
			);


			$generatedIndexCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_GENIE_WEB_INDEX_GENERATOR_NAME,
			PLUGIN_PHP_GENIE_WEB_INDEX_GENERATOR_CLASS,
			$arguments
			);

			$newEnterFileName = "enterNew".ucfirst($arguments['table']).".php";
			$newInsertFileName = "insert".ucfirst($arguments['table']).".php";
			$newCrudGridFileName = "crudGrid".ucfirst($arguments['table']).".php";
			$newEditFileName = "edit".ucfirst($arguments['table']).".php";
			$newUpdateFileName = "update".ucfirst($arguments['table']).".php";
			$newConfirmDeleteFileName = "confirmDelete".ucfirst($arguments['table']).".php";
			$newDeleteFileName = "delete".ucfirst($arguments['table']).".php";

			$newViewFileName = "view".ucfirst($arguments['table']).".php";
			$newListAllFileName = "listAll".ucfirst($arguments['table']).".php";
			$newPowerSearchFormFileName = "powerSearch".ucfirst($arguments['table'])."Form.php";
			$newPowerSearchScriptFileName = "powerSearch".ucfirst($arguments['table']).".php";
			$indexFileName = "index".ucfirst($currentTable).".inc.php";

			$thisFileUtils->writeContentsToFile($tableWebDirectory,$newEnterFileName,$generatedEnterFormCode);
			$thisFileUtils->writeContentsToFile($tableWebDirectory,$newInsertFileName,$generatedInsertCode);
			$thisFileUtils->writeContentsToFile($tableWebDirectory,$newCrudGridFileName,$generatedCrudGridCode);

			$thisFileUtils->writeContentsToFile($tableWebDirectory,$newEditFileName,$generatedEditFormCode);
			$thisFileUtils->writeContentsToFile($tableWebDirectory,$newUpdateFileName,$generatedUpdateCode);
			$thisFileUtils->writeContentsToFile($tableWebDirectory,$newConfirmDeleteFileName,$generatedConfirmDeleteCode);
			$thisFileUtils->writeContentsToFile($tableWebDirectory,$newDeleteFileName,$generatedDeleteCode);
			$thisFileUtils->writeContentsToFile($tableWebDirectory,$newViewFileName,$generatedViewRecordCode);

			$thisFileUtils->writeContentsToFile($tableWebDirectory,$newListAllFileName,$generatedListAllCode);
			$thisFileUtils->writeContentsToFile($tableWebDirectory,$newPowerSearchFormFileName,$generatedPowerSearchFormCode);
			$thisFileUtils->writeContentsToFile($tableWebDirectory,$newPowerSearchScriptFileName,$generatedPowerSearchScriptCode);
			$thisFileUtils->writeContentsToFile($indexDirectory,$indexFileName,$generatedIndexCode);


			$mainIndexes[] .= "./index/".$indexFileName;

		}

		$col = 0;

		// Building Index Page for application
		$mainIndexFile = gipIndexBuilder::buildIndex($mainIndexes);
		$thisFileUtils->writeContentsToFile($webDirectory,"index.php",$mainIndexFile);



	}// end for a


	$thisCommonFileCopier-> replaceConfStringsInDirectories($projectRoot,$thisConfigFile);

} // end else errors

?>
<?
include_once(INC_SUPERFOOTER);
?>