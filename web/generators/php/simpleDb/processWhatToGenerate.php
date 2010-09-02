<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<? 
include_once(CLASS_FILESYSTEM_UTILS);
include_once(CLASS_TABLE);
include_once(CLASS_PLUGIN_LOADER);
include_once(CLASS_COMMON_OBJECT_COPIER);
include_once(CLASS_PHP_GENIE_UTILS_COMMON_FILE_COPIER);

$thisPlugInLoader = new plugInLoader();
$thisCommonFileCopier = new genieCommonFileCopier();

$arguments = array();
$thisGeneratePath = requestUtils::getRequestObject('generatePath');
$thisConfigFile = requestUtils::getRequestObject('configFile');
$thisGenEnter = requestUtils::getRequestObject('enter');
$thisGenEdit = requestUtils::getRequestObject('edit');
$thisGenDelete = requestUtils::getRequestObject('delete');
$thisGenList = requestUtils::getRequestObject('lister');
$thisGenSearch = requestUtils::getRequestObject('search');
$thisGenView = requestUtils::getRequestObject('viewRecord');
$thisCopyCommon = requestUtils::getRequestObject('copyCommon');
$thisGenIndex = "y";
$thisLanguage = requestUtils::getRequestObject('language');
$thisTables = requestUtils::getRequestObject('tableName');

$headerText = requestUtils::getRequestObject('headerText');
$footerText = requestUtils::getRequestObject('footerText');

$headerText ="include_once(\"../common/dbConnection.php\");\ninclude_once(\"../common/header.php\");";
$footerText ="include_once(\"../common/footer.php\");";


$thisDb = requestUtils::getRequestObject('db');
$thisTable = requestUtils::getRequestObject('table');

$thisFileUtils = new fileSystemUtils();

$arguments['db'] = requestUtils::getRequestObject('db');

echo "Generated Code Root : <b>$thisGeneratePath </b> <br><br>";

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

	$projectRoot = $thisGeneratePath.FILE_SEPARATOR.$thisDb;
	$rootUrl = URL_ADDRESS."/generatedCode/simple/".$thisDb;
	$thisFileUtils->makeDirectoryRecursive($projectRoot);


	$indexDirectory = $projectRoot.FILE_SEPARATOR."index";
	$thisFileUtils->makeDirectoryRecursive($indexDirectory);
	$mainIndex = "";

	if ($thisCopyCommon=="y")
	{

		$commonDirectory = $projectRoot.FILE_SEPARATOR."common";
		$thisFileUtils->makeDirectoryRecursive($commonDirectory);

		$htmlDirectory = $projectRoot.FILE_SEPARATOR."html";
		$thisFileUtils->makeDirectoryRecursive($htmlDirectory);		
		
		$arguments = "";
		$arguments['db'] = requestUtils::getRequestObject('db');
		$arguments['headerText'] = $headerText;
		$arguments['footerText'] = $footerText;

		$thisFileUtils->copyAllFilesFromPathToPath(FILES_TO_COPY_PHP_TEMPLATE_SIMPLE.FILE_SEPARATOR."common",$commonDirectory);
		$thisFileUtils->copyAllFilesFromPathToPath(FILES_TO_COPY_PHP_TEMPLATE_SIMPLE.FILE_SEPARATOR."html",$htmlDirectory);

		
		$thisCommobObjectCopier = new commonObjectCopier();
		$connectionCode = $thisCommobObjectCopier->getReplacedConnectionFileForSimpleApp($arguments);

		$connectionFileName = "dbConnection.php";
		$thisFileUtils->writeContentsToFile($commonDirectory,$connectionFileName, $connectionCode);

		echo "Copying common files to common Location...<br><br>";

	}

	for ($a=0;$a<count($thisTables);$a++)
	{
		$currentTable = $thisTables[$a];
		$arguments = "";
		$arguments['table'] = $thisTables[$a];
		$arguments['db'] = requestUtils::getRequestObject('db');
		$arguments['headerText'] = $headerText;
		$arguments['footerText'] = $footerText;

		$thisTable = new table($currentTable,$thisDb);
		$allFields = $thisTable->getFieldNameArray();

		echo "Generating Code for table <font color=red><b>".strtoupper($currentTable)."</b></font>... <br><br>";
		echo "<ul>";

		// Setting Generated Table Code Root Directory
		$currentDirectory = $projectRoot.FILE_SEPARATOR.$currentTable;

		// Making Root Directory
		$thisFileUtils->makeDirectoryRecursive($currentDirectory);




		if ($thisGenEnter=="y")
		{

			// Initializing Arguments
			$arguments = "";
			$arguments['table'] = $thisTables[$a];
			$arguments['db'] = requestUtils::getRequestObject('db');
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

			$generatedEnterCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_SIMPLE_WEB_ENTER_FORM_GENERATOR_NAME,
			PLUGIN_PHP_SIMPLE_WEB_ENTER_FORM_GENERATOR_CLASS,
			$arguments
			);


			$generatedInsertCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_SIMPLE_WEB_INSERT_GENERATOR_NAME,
			PLUGIN_PHP_SIMPLE_WEB_INSERT_GENERATOR_CLASS,
			$arguments
			);

			$insertFileName = "insertNew".ucfirst($currentTable).".php";
			$thisFileUtils->writeContentsToFile($currentDirectory,$insertFileName,$generatedInsertCode);

			$enterFileName = "enterNew".ucfirst($currentTable).".php";
			$thisFileUtils->writeContentsToFile($currentDirectory,$enterFileName,$generatedEnterCode);


			echo "<li>Generating <font color=blue><b>Enter Form</b></font> for ".$currentTable."</li>";
			echo "<li>Generating <font color=blue><b>Insert Script</b></font> for ".$currentTable."</li>";

		}

		if ($thisGenDelete=="y")
		{


			$arguments = "";
			$arguments['table'] = $thisTables[$a];
			$arguments['db'] = requestUtils::getRequestObject('db');
			$arguments['headerText'] = $headerText;
			$arguments['footerText'] = $footerText;

			$generatedConfirmDeleteCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_SIMPLE_WEB_DELETE_CONFIRMATION_GENERATOR_NAME,
			PLUGIN_PHP_SIMPLE_WEB_DELETE_CONFIRMATION_GENERATOR_CLASS,
			$arguments
			);

			$generatedDeleteCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_SIMPLE_WEB_DELETE_GENERATOR_NAME,
			PLUGIN_PHP_SIMPLE_WEB_DELETE_GENERATOR_CLASS,
			$arguments
			);

			$deleteFileName = "delete".ucfirst($currentTable).".php";
			$thisFileUtils->writeContentsToFile($currentDirectory,$deleteFileName,$generatedDeleteCode);

			$confirmDeleteFileName = "confirmDelete".ucfirst($currentTable).".php";
			$thisFileUtils->writeContentsToFile($currentDirectory,$confirmDeleteFileName,$generatedConfirmDeleteCode);

			echo "<li>Generating <font color=blue><b>Delete Confirmation Form</b></font> for ".$currentTable."</li>";
			echo "<li>Generating <font color=blue><b>Delete Script</b></font> for ".$currentTable."</li>";

		}

		if ($thisGenEdit=="y")
		{

			// Initializing Arguments
			$arguments = "";
			$arguments['table'] = $thisTables[$a];
			$arguments['db'] = requestUtils::getRequestObject('db');
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
			$arguments['formType'] = "edit";

			$generatedEditCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_SIMPLE_WEB_ENTER_FORM_GENERATOR_NAME,
			PLUGIN_PHP_SIMPLE_WEB_ENTER_FORM_GENERATOR_CLASS,
			$arguments
			);

			$generatedUpdateCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_SIMPLE_WEB_UPDATE_GENERATOR_NAME,
			PLUGIN_PHP_SIMPLE_WEB_UPDATE_GENERATOR_CLASS,
			$arguments
			);

			$editFileName = "edit".ucfirst($currentTable).".php";
			$thisFileUtils->writeContentsToFile($currentDirectory,$editFileName,$generatedEditCode);

			$updateFileName = "update".ucfirst($currentTable).".php";
			$thisFileUtils->writeContentsToFile($currentDirectory,$updateFileName,$generatedUpdateCode);

			echo "<li>Generating <font color=blue><b>Edit Form</b></font> for ".$currentTable."</li>";
			echo "<li>Generating <font color=blue><b>Update Script</b></font> for ".$currentTable."</li>";

		}

		if ($thisGenList=="y")
		{

			$arguments = "";
			$arguments['table'] = $thisTables[$a];
			$arguments['db'] = requestUtils::getRequestObject('db');
			$arguments['headerText'] = $headerText;
			$arguments['footerText'] = $footerText;

			$generatedListerCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_SIMPLE_WEB_LISTER_GENERATOR_NAME,
			PLUGIN_PHP_SIMPLE_WEB_LISTER_GENERATOR_CLASS,
			$arguments
			);

			$generatedListerGridCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_SIMPLE_WEB_LISTER_GRID_GENERATOR_NAME,
			PLUGIN_PHP_SIMPLE_WEB_LISTER_GRID_GENERATOR_CLASS,
			$arguments
			);			
			
			$listFileName = "list".ucfirst($currentTable).".php";
			$thisFileUtils->writeContentsToFile($currentDirectory,$listFileName,$generatedListerCode);

			$listGridFileName = "listGrid".ucfirst($currentTable).".php";
			$thisFileUtils->writeContentsToFile($currentDirectory,$listGridFileName,$generatedListerGridCode);
			
			
			echo "<li>Generating <font color=blue><b>List All Script</b></font> for ".$currentTable."</li>";
			echo "<li>Generating <font color=blue><b>CRUD GRID</b></font> for ".$currentTable."</li>";


		}

		if ($thisGenSearch=="y")
		{
			$arguments = "";
			$arguments['table'] = $thisTables[$a];
			$arguments['db'] = requestUtils::getRequestObject('db');
			$arguments['headerText'] = $headerText;
			$arguments['footerText'] = $footerText;

			$generatedSearchFormCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_SIMPLE_WEB_POWER_SEARCH_FORM_GENERATOR_NAME,
			PLUGIN_PHP_SIMPLE_WEB_POWER_SEARCH_FORM_GENERATOR_CLASS,
			$arguments
			);
			$generatedSearchScriptCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_SIMPLE_WEB_POWER_SEARCH_SCRIPT_GENERATOR_NAME,
			PLUGIN_PHP_SIMPLE_WEB_POWER_SEARCH_SCRIPT_GENERATOR_CLASS,
			$arguments
			);

			$searchFormFileName = "search".ucfirst($currentTable)."Form.php";
			$thisFileUtils->writeContentsToFile($currentDirectory,$searchFormFileName,$generatedSearchFormCode);

			$searchScriptFileName = "search".ucfirst($currentTable).".php";
			$thisFileUtils->writeContentsToFile($currentDirectory,$searchScriptFileName,$generatedSearchScriptCode);

			echo "<li>Generating <font color=blue><b>Power Search Form</b></font> for ".$currentTable."</li>";
			echo "<li>Generating <font color=blue><b>Power Search Script</b></font> for ".$currentTable."</li>";

		}

		if ($thisGenView=="y")
		{
			$arguments = "";
			$arguments['table'] = $thisTables[$a];
			$arguments['db'] = requestUtils::getRequestObject('db');
			$arguments['headerText'] = $headerText;
			$arguments['footerText'] = $footerText;

			$generatedViewCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_SIMPLE_WEB_VIEW_RECORD_GENERATOR_NAME,
			PLUGIN_PHP_SIMPLE_WEB_VIEW_RECORD_GENERATOR_CLASS,
			$arguments
			);

			$viewFileName = "view".ucfirst($currentTable).".php";
			$thisFileUtils->writeContentsToFile($currentDirectory,$viewFileName,$generatedViewCode);

			echo "<li>Generating <font color=blue><b>View One Record</b></font> for ".$currentTable."</li>";

		}

		if ($thisGenIndex=="y")
		{
			$arguments = "";
			$arguments['table'] = $thisTables[$a];
			$arguments['db'] = requestUtils::getRequestObject('db');
			$arguments['headerText'] = $headerText;
			$arguments['footerText'] = $footerText;

			$generatedIndexCode = $thisPlugInLoader->loadPlugIn(
			PLUGIN_PHP_SIMPLE_MAIN_INDEX_GENERATOR_NAME,
			PLUGIN_PHP_SIMPLE_MAIN_INDEX_GENERATOR_CLASS,
			$arguments
			);

			$indexFileName = "index".ucfirst($currentTable).".inc.php";
			$thisFileUtils->writeContentsToFile($indexDirectory,$indexFileName,$generatedIndexCode);

			$mainIndexes[] .= "./index/".$indexFileName;

		}


		echo "</ul>";

	}// end for a


	$col = 0;
	$mainIndexFile = "";
	$mainIndexFile = "<? include_once(\"common/header.php\"); ?>\n\n";


	$mainIndexFile .= "<table cellspacing=10 cellpadding=9>\n";
	$mainIndexFile .= "\t<tr>\n";

	for ($x=0;$x<count($mainIndexes);$x++)
	{
		$col = $col + 1;

		$mainIndexFile .= "\t\t<td>\n";
		$mainIndexFile .= "\t\t\t<? include_once(\"".$mainIndexes[$x]."\"); ?>\n";
		$mainIndexFile .= "\t\t</td>\n";
		if ($col>2)
		{
			$col = 0;
			$mainIndexFile .= "\t</tr>\n";
			$mainIndexFile .= "\t<tr>\n";
		}
	}
	
	$mainIndexFile .= "\t</tr>\n";
	$mainIndexFile .= "</table>\n";
	$mainIndexFile .= "<? include_once(\"common/footer.php\"); ?>\n\n";
	
	$thisFileUtils->writeContentsToFile($projectRoot,"index.php",$mainIndexFile);

} // end else errors

	$thisCommonFileCopier-> replaceApplicationRootForSimpleGen($projectRoot,$rootUrl);

include_once(INC_SUPERFOOTER);

?>