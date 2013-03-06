<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisFILE_IDFromForm = $_REQUEST['thisFILE_IDField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisFILE_ID = addslashes($_REQUEST['thisFILE_IDField']);
	$thisFILE_NAME = addslashes($_REQUEST['thisFILE_NAMEField']);
	$thisFILE_TYPE = addslashes($_REQUEST['thisFILE_TYPEField']);
	$thisTABLESPACE_NAME = addslashes($_REQUEST['thisTABLESPACE_NAMEField']);
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisLOGFILE_GROUP_NAME = addslashes($_REQUEST['thisLOGFILE_GROUP_NAMEField']);
	$thisLOGFILE_GROUP_NUMBER = addslashes($_REQUEST['thisLOGFILE_GROUP_NUMBERField']);
	$thisENGINE = addslashes($_REQUEST['thisENGINEField']);
	$thisFULLTEXT_KEYS = addslashes($_REQUEST['thisFULLTEXT_KEYSField']);
	$thisDELETED_ROWS = addslashes($_REQUEST['thisDELETED_ROWSField']);
	$thisUPDATE_COUNT = addslashes($_REQUEST['thisUPDATE_COUNTField']);
	$thisFREE_EXTENTS = addslashes($_REQUEST['thisFREE_EXTENTSField']);
	$thisTOTAL_EXTENTS = addslashes($_REQUEST['thisTOTAL_EXTENTSField']);
	$thisEXTENT_SIZE = addslashes($_REQUEST['thisEXTENT_SIZEField']);
	$thisINITIAL_SIZE = addslashes($_REQUEST['thisINITIAL_SIZEField']);
	$thisMAXIMUM_SIZE = addslashes($_REQUEST['thisMAXIMUM_SIZEField']);
	$thisAUTOEXTEND_SIZE = addslashes($_REQUEST['thisAUTOEXTEND_SIZEField']);
	$thisCREATION_TIME = addslashes($_REQUEST['thisCREATION_TIMEField']);
	$thisLAST_UPDATE_TIME = addslashes($_REQUEST['thisLAST_UPDATE_TIMEField']);
	$thisLAST_ACCESS_TIME = addslashes($_REQUEST['thisLAST_ACCESS_TIMEField']);
	$thisRECOVER_TIME = addslashes($_REQUEST['thisRECOVER_TIMEField']);
	$thisTRANSACTION_COUNTER = addslashes($_REQUEST['thisTRANSACTION_COUNTERField']);
	$thisVERSION = addslashes($_REQUEST['thisVERSIONField']);
	$thisROW_FORMAT = addslashes($_REQUEST['thisROW_FORMATField']);
	$thisTABLE_ROWS = addslashes($_REQUEST['thisTABLE_ROWSField']);
	$thisAVG_ROW_LENGTH = addslashes($_REQUEST['thisAVG_ROW_LENGTHField']);
	$thisDATA_LENGTH = addslashes($_REQUEST['thisDATA_LENGTHField']);
	$thisMAX_DATA_LENGTH = addslashes($_REQUEST['thisMAX_DATA_LENGTHField']);
	$thisINDEX_LENGTH = addslashes($_REQUEST['thisINDEX_LENGTHField']);
	$thisDATA_FREE = addslashes($_REQUEST['thisDATA_FREEField']);
	$thisCREATE_TIME = addslashes($_REQUEST['thisCREATE_TIMEField']);
	$thisUPDATE_TIME = addslashes($_REQUEST['thisUPDATE_TIMEField']);
	$thisCHECK_TIME = addslashes($_REQUEST['thisCHECK_TIMEField']);
	$thisCHECKSUM = addslashes($_REQUEST['thisCHECKSUMField']);
	$thisSTATUS = addslashes($_REQUEST['thisSTATUSField']);
	$thisEXTRA = addslashes($_REQUEST['thisEXTRAField']);

	$sqlUpdate = "UPDATE FILES SET FILE_ID = '$thisFILE_ID' , FILE_NAME = '$thisFILE_NAME' , FILE_TYPE = '$thisFILE_TYPE' , TABLESPACE_NAME = '$thisTABLESPACE_NAME' , TABLE_CATALOG = '$thisTABLE_CATALOG' , TABLE_SCHEMA = '$thisTABLE_SCHEMA' , TABLE_NAME = '$thisTABLE_NAME' , LOGFILE_GROUP_NAME = '$thisLOGFILE_GROUP_NAME' , LOGFILE_GROUP_NUMBER = '$thisLOGFILE_GROUP_NUMBER' , ENGINE = '$thisENGINE' , FULLTEXT_KEYS = '$thisFULLTEXT_KEYS' , DELETED_ROWS = '$thisDELETED_ROWS' , UPDATE_COUNT = '$thisUPDATE_COUNT' , FREE_EXTENTS = '$thisFREE_EXTENTS' , TOTAL_EXTENTS = '$thisTOTAL_EXTENTS' , EXTENT_SIZE = '$thisEXTENT_SIZE' , INITIAL_SIZE = '$thisINITIAL_SIZE' , MAXIMUM_SIZE = '$thisMAXIMUM_SIZE' , AUTOEXTEND_SIZE = '$thisAUTOEXTEND_SIZE' , CREATION_TIME = '$thisCREATION_TIME' , LAST_UPDATE_TIME = '$thisLAST_UPDATE_TIME' , LAST_ACCESS_TIME = '$thisLAST_ACCESS_TIME' , RECOVER_TIME = '$thisRECOVER_TIME' , TRANSACTION_COUNTER = '$thisTRANSACTION_COUNTER' , VERSION = '$thisVERSION' , ROW_FORMAT = '$thisROW_FORMAT' , TABLE_ROWS = '$thisTABLE_ROWS' , AVG_ROW_LENGTH = '$thisAVG_ROW_LENGTH' , DATA_LENGTH = '$thisDATA_LENGTH' , MAX_DATA_LENGTH = '$thisMAX_DATA_LENGTH' , INDEX_LENGTH = '$thisINDEX_LENGTH' , DATA_FREE = '$thisDATA_FREE' , CREATE_TIME = '$thisCREATE_TIME' , UPDATE_TIME = '$thisUPDATE_TIME' , CHECK_TIME = '$thisCHECK_TIME' , CHECKSUM = '$thisCHECKSUM' , STATUS = '$thisSTATUS' , EXTRA = '$thisEXTRA'  WHERE FILE_ID = '$thisFILE_ID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisFILE_IDFromForm." has been Updated<br></b>";
	$thisFILE_IDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisFILE_ID = addslashes($_REQUEST['thisFILE_IDField']);
	$thisFILE_NAME = addslashes($_REQUEST['thisFILE_NAMEField']);
	$thisFILE_TYPE = addslashes($_REQUEST['thisFILE_TYPEField']);
	$thisTABLESPACE_NAME = addslashes($_REQUEST['thisTABLESPACE_NAMEField']);
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisLOGFILE_GROUP_NAME = addslashes($_REQUEST['thisLOGFILE_GROUP_NAMEField']);
	$thisLOGFILE_GROUP_NUMBER = addslashes($_REQUEST['thisLOGFILE_GROUP_NUMBERField']);
	$thisENGINE = addslashes($_REQUEST['thisENGINEField']);
	$thisFULLTEXT_KEYS = addslashes($_REQUEST['thisFULLTEXT_KEYSField']);
	$thisDELETED_ROWS = addslashes($_REQUEST['thisDELETED_ROWSField']);
	$thisUPDATE_COUNT = addslashes($_REQUEST['thisUPDATE_COUNTField']);
	$thisFREE_EXTENTS = addslashes($_REQUEST['thisFREE_EXTENTSField']);
	$thisTOTAL_EXTENTS = addslashes($_REQUEST['thisTOTAL_EXTENTSField']);
	$thisEXTENT_SIZE = addslashes($_REQUEST['thisEXTENT_SIZEField']);
	$thisINITIAL_SIZE = addslashes($_REQUEST['thisINITIAL_SIZEField']);
	$thisMAXIMUM_SIZE = addslashes($_REQUEST['thisMAXIMUM_SIZEField']);
	$thisAUTOEXTEND_SIZE = addslashes($_REQUEST['thisAUTOEXTEND_SIZEField']);
	$thisCREATION_TIME = addslashes($_REQUEST['thisCREATION_TIMEField']);
	$thisLAST_UPDATE_TIME = addslashes($_REQUEST['thisLAST_UPDATE_TIMEField']);
	$thisLAST_ACCESS_TIME = addslashes($_REQUEST['thisLAST_ACCESS_TIMEField']);
	$thisRECOVER_TIME = addslashes($_REQUEST['thisRECOVER_TIMEField']);
	$thisTRANSACTION_COUNTER = addslashes($_REQUEST['thisTRANSACTION_COUNTERField']);
	$thisVERSION = addslashes($_REQUEST['thisVERSIONField']);
	$thisROW_FORMAT = addslashes($_REQUEST['thisROW_FORMATField']);
	$thisTABLE_ROWS = addslashes($_REQUEST['thisTABLE_ROWSField']);
	$thisAVG_ROW_LENGTH = addslashes($_REQUEST['thisAVG_ROW_LENGTHField']);
	$thisDATA_LENGTH = addslashes($_REQUEST['thisDATA_LENGTHField']);
	$thisMAX_DATA_LENGTH = addslashes($_REQUEST['thisMAX_DATA_LENGTHField']);
	$thisINDEX_LENGTH = addslashes($_REQUEST['thisINDEX_LENGTHField']);
	$thisDATA_FREE = addslashes($_REQUEST['thisDATA_FREEField']);
	$thisCREATE_TIME = addslashes($_REQUEST['thisCREATE_TIMEField']);
	$thisUPDATE_TIME = addslashes($_REQUEST['thisUPDATE_TIMEField']);
	$thisCHECK_TIME = addslashes($_REQUEST['thisCHECK_TIMEField']);
	$thisCHECKSUM = addslashes($_REQUEST['thisCHECKSUMField']);
	$thisSTATUS = addslashes($_REQUEST['thisSTATUSField']);
	$thisEXTRA = addslashes($_REQUEST['thisEXTRAField']);

	$sqlInsert = "INSERT INTO FILES (FILE_ID , FILE_NAME , FILE_TYPE , TABLESPACE_NAME , TABLE_CATALOG , TABLE_SCHEMA , TABLE_NAME , LOGFILE_GROUP_NAME , LOGFILE_GROUP_NUMBER , ENGINE , FULLTEXT_KEYS , DELETED_ROWS , UPDATE_COUNT , FREE_EXTENTS , TOTAL_EXTENTS , EXTENT_SIZE , INITIAL_SIZE , MAXIMUM_SIZE , AUTOEXTEND_SIZE , CREATION_TIME , LAST_UPDATE_TIME , LAST_ACCESS_TIME , RECOVER_TIME , TRANSACTION_COUNTER , VERSION , ROW_FORMAT , TABLE_ROWS , AVG_ROW_LENGTH , DATA_LENGTH , MAX_DATA_LENGTH , INDEX_LENGTH , DATA_FREE , CREATE_TIME , UPDATE_TIME , CHECK_TIME , CHECKSUM , STATUS , EXTRA ) VALUES ('$thisFILE_ID' , '$thisFILE_NAME' , '$thisFILE_TYPE' , '$thisTABLESPACE_NAME' , '$thisTABLE_CATALOG' , '$thisTABLE_SCHEMA' , '$thisTABLE_NAME' , '$thisLOGFILE_GROUP_NAME' , '$thisLOGFILE_GROUP_NUMBER' , '$thisENGINE' , '$thisFULLTEXT_KEYS' , '$thisDELETED_ROWS' , '$thisUPDATE_COUNT' , '$thisFREE_EXTENTS' , '$thisTOTAL_EXTENTS' , '$thisEXTENT_SIZE' , '$thisINITIAL_SIZE' , '$thisMAXIMUM_SIZE' , '$thisAUTOEXTEND_SIZE' , '$thisCREATION_TIME' , '$thisLAST_UPDATE_TIME' , '$thisLAST_ACCESS_TIME' , '$thisRECOVER_TIME' , '$thisTRANSACTION_COUNTER' , '$thisVERSION' , '$thisROW_FORMAT' , '$thisTABLE_ROWS' , '$thisAVG_ROW_LENGTH' , '$thisDATA_LENGTH' , '$thisMAX_DATA_LENGTH' , '$thisINDEX_LENGTH' , '$thisDATA_FREE' , '$thisCREATE_TIME' , '$thisUPDATE_TIME' , '$thisCHECK_TIME' , '$thisCHECKSUM' , '$thisSTATUS' , '$thisEXTRA' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisFILE_IDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisFILE_ID = addslashes($_REQUEST['thisFILE_IDField']);
	$thisFILE_NAME = addslashes($_REQUEST['thisFILE_NAMEField']);
	$thisFILE_TYPE = addslashes($_REQUEST['thisFILE_TYPEField']);
	$thisTABLESPACE_NAME = addslashes($_REQUEST['thisTABLESPACE_NAMEField']);
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisLOGFILE_GROUP_NAME = addslashes($_REQUEST['thisLOGFILE_GROUP_NAMEField']);
	$thisLOGFILE_GROUP_NUMBER = addslashes($_REQUEST['thisLOGFILE_GROUP_NUMBERField']);
	$thisENGINE = addslashes($_REQUEST['thisENGINEField']);
	$thisFULLTEXT_KEYS = addslashes($_REQUEST['thisFULLTEXT_KEYSField']);
	$thisDELETED_ROWS = addslashes($_REQUEST['thisDELETED_ROWSField']);
	$thisUPDATE_COUNT = addslashes($_REQUEST['thisUPDATE_COUNTField']);
	$thisFREE_EXTENTS = addslashes($_REQUEST['thisFREE_EXTENTSField']);
	$thisTOTAL_EXTENTS = addslashes($_REQUEST['thisTOTAL_EXTENTSField']);
	$thisEXTENT_SIZE = addslashes($_REQUEST['thisEXTENT_SIZEField']);
	$thisINITIAL_SIZE = addslashes($_REQUEST['thisINITIAL_SIZEField']);
	$thisMAXIMUM_SIZE = addslashes($_REQUEST['thisMAXIMUM_SIZEField']);
	$thisAUTOEXTEND_SIZE = addslashes($_REQUEST['thisAUTOEXTEND_SIZEField']);
	$thisCREATION_TIME = addslashes($_REQUEST['thisCREATION_TIMEField']);
	$thisLAST_UPDATE_TIME = addslashes($_REQUEST['thisLAST_UPDATE_TIMEField']);
	$thisLAST_ACCESS_TIME = addslashes($_REQUEST['thisLAST_ACCESS_TIMEField']);
	$thisRECOVER_TIME = addslashes($_REQUEST['thisRECOVER_TIMEField']);
	$thisTRANSACTION_COUNTER = addslashes($_REQUEST['thisTRANSACTION_COUNTERField']);
	$thisVERSION = addslashes($_REQUEST['thisVERSIONField']);
	$thisROW_FORMAT = addslashes($_REQUEST['thisROW_FORMATField']);
	$thisTABLE_ROWS = addslashes($_REQUEST['thisTABLE_ROWSField']);
	$thisAVG_ROW_LENGTH = addslashes($_REQUEST['thisAVG_ROW_LENGTHField']);
	$thisDATA_LENGTH = addslashes($_REQUEST['thisDATA_LENGTHField']);
	$thisMAX_DATA_LENGTH = addslashes($_REQUEST['thisMAX_DATA_LENGTHField']);
	$thisINDEX_LENGTH = addslashes($_REQUEST['thisINDEX_LENGTHField']);
	$thisDATA_FREE = addslashes($_REQUEST['thisDATA_FREEField']);
	$thisCREATE_TIME = addslashes($_REQUEST['thisCREATE_TIMEField']);
	$thisUPDATE_TIME = addslashes($_REQUEST['thisUPDATE_TIMEField']);
	$thisCHECK_TIME = addslashes($_REQUEST['thisCHECK_TIMEField']);
	$thisCHECKSUM = addslashes($_REQUEST['thisCHECKSUMField']);
	$thisSTATUS = addslashes($_REQUEST['thisSTATUSField']);
	$thisEXTRA = addslashes($_REQUEST['thisEXTRAField']);

	$sqlDelete = "DELETE FROM FILES WHERE FILE_ID = '$thisFILE_ID'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisFILE_IDFromForm." has been Deleted<br></b>";
	$thisFILE_IDFromForm = "";
}

$initStartLimit = 0;
$limitPerPage = 10;

$startLimit = $_REQUEST['startLimit'];
$numberOfRows = $_REQUEST['rows'];
$sortBy = $_REQUEST['sortBy'];
$sortOrder = $_REQUEST['sortOrder'];

if ($startLimit=="")
{
		$startLimit = $initStartLimit;
}

if ($numberOfRows=="")
{
		$numberOfRows = $limitPerPage;
}

if ($sortOrder=="")
{
		$sortOrder  = "DESC";
}
if ($sortOrder == "DESC") { $newSortOrder = "ASC"; } else  { $newSortOrder = "DESC"; }
$limitQuery = " LIMIT ".$startLimit.",".$numberOfRows;
$nextStartLimit = $startLimit + $limitPerPage;
$previousStartLimit = $startLimit - $limitPerPage;

if ($sortBy!="")
{
		$orderByQuery = " ORDER BY ".$sortBy." ".$sortOrder;
}


$sql = "SELECT   * FROM FILES".$orderByQuery.$limitQuery;
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);


?>
<?
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?
}
else if ($numberOfRows>0) {

	$i=0;
?>


<br>
<?
if ($_REQUEST['startLimit'] != "")
{
?>

<a href="<? echo  $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $previousStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Previous <? echo $limitPerPage; ?> Results</a>....
<? } ?>
<?
if ($numberOfRows == $limitPerPage)
{
?>
<a href="<? echo $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $nextStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Next <? echo $limitPerPage; ?> Results</a>
<? } ?>

<br><br>
<TABLE CELLSPACING="0" CELLPADDING="3" BORDER="0" WIDTH="100%">
	<TR>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=FILE_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>FILE_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=FILE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>FILE_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=FILE_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>FILE_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLESPACE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLESPACE_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_CATALOG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_CATALOG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LOGFILE_GROUP_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LOGFILE_GROUP_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LOGFILE_GROUP_NUMBER&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LOGFILE_GROUP_NUMBER</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ENGINE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ENGINE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=FULLTEXT_KEYS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>FULLTEXT_KEYS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DELETED_ROWS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DELETED_ROWS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=UPDATE_COUNT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>UPDATE_COUNT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=FREE_EXTENTS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>FREE_EXTENTS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TOTAL_EXTENTS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TOTAL_EXTENTS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EXTENT_SIZE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EXTENT_SIZE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INITIAL_SIZE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INITIAL_SIZE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=MAXIMUM_SIZE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>MAXIMUM_SIZE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=AUTOEXTEND_SIZE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>AUTOEXTEND_SIZE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CREATION_TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CREATION_TIME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LAST_UPDATE_TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LAST_UPDATE_TIME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LAST_ACCESS_TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LAST_ACCESS_TIME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RECOVER_TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RECOVER_TIME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TRANSACTION_COUNTER&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TRANSACTION_COUNTER</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=VERSION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>VERSION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ROW_FORMAT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ROW_FORMAT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_ROWS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_ROWS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=AVG_ROW_LENGTH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>AVG_ROW_LENGTH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATA_LENGTH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATA_LENGTH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=MAX_DATA_LENGTH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>MAX_DATA_LENGTH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INDEX_LENGTH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INDEX_LENGTH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATA_FREE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATA_FREE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CREATE_TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CREATE_TIME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=UPDATE_TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>UPDATE_TIME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CHECK_TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CHECK_TIME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CHECKSUM&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CHECKSUM</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=STATUS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>STATUS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EXTRA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EXTRA</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisFILE_IDField" value="<? echo $thisFILE_ID; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisFILE_IDField" value=""></TD>
		<TD><input type"text" name="thisFILE_NAMEField" value=""></TD>
		<TD><input type"text" name="thisFILE_TYPEField" value=""></TD>
		<TD><input type"text" name="thisTABLESPACE_NAMEField" value=""></TD>
		<TD><input type"text" name="thisTABLE_CATALOGField" value=""></TD>
		<TD><input type"text" name="thisTABLE_SCHEMAField" value=""></TD>
		<TD><input type"text" name="thisTABLE_NAMEField" value=""></TD>
		<TD><input type"text" name="thisLOGFILE_GROUP_NAMEField" value=""></TD>
		<TD><input type"text" name="thisLOGFILE_GROUP_NUMBERField" value=""></TD>
		<TD><input type"text" name="thisENGINEField" value=""></TD>
		<TD><input type"text" name="thisFULLTEXT_KEYSField" value=""></TD>
		<TD><input type"text" name="thisDELETED_ROWSField" value=""></TD>
		<TD><input type"text" name="thisUPDATE_COUNTField" value=""></TD>
		<TD><input type"text" name="thisFREE_EXTENTSField" value=""></TD>
		<TD><input type"text" name="thisTOTAL_EXTENTSField" value=""></TD>
		<TD><input type"text" name="thisEXTENT_SIZEField" value=""></TD>
		<TD><input type"text" name="thisINITIAL_SIZEField" value=""></TD>
		<TD><input type"text" name="thisMAXIMUM_SIZEField" value=""></TD>
		<TD><input type"text" name="thisAUTOEXTEND_SIZEField" value=""></TD>
		<TD><input type"text" name="thisCREATION_TIMEField" value=""></TD>
		<TD><input type"text" name="thisLAST_UPDATE_TIMEField" value=""></TD>
		<TD><input type"text" name="thisLAST_ACCESS_TIMEField" value=""></TD>
		<TD><input type"text" name="thisRECOVER_TIMEField" value=""></TD>
		<TD><input type"text" name="thisTRANSACTION_COUNTERField" value=""></TD>
		<TD><input type"text" name="thisVERSIONField" value=""></TD>
		<TD><input type"text" name="thisROW_FORMATField" value=""></TD>
		<TD><input type"text" name="thisTABLE_ROWSField" value=""></TD>
		<TD><input type"text" name="thisAVG_ROW_LENGTHField" value=""></TD>
		<TD><input type"text" name="thisDATA_LENGTHField" value=""></TD>
		<TD><input type"text" name="thisMAX_DATA_LENGTHField" value=""></TD>
		<TD><input type"text" name="thisINDEX_LENGTHField" value=""></TD>
		<TD><input type"text" name="thisDATA_FREEField" value=""></TD>
		<TD><input type"text" name="thisCREATE_TIMEField" value=""></TD>
		<TD><input type"text" name="thisUPDATE_TIMEField" value=""></TD>
		<TD><input type"text" name="thisCHECK_TIMEField" value=""></TD>
		<TD><input type"text" name="thisCHECKSUMField" value=""></TD>
		<TD><input type"text" name="thisSTATUSField" value=""></TD>
		<TD><input type"text" name="thisEXTRAField" value=""></TD>
	<TD COLSPAN=2><input type="submit" name="Insert" Value="Insert Record"> </TD>
	</TR>
</FORM>

<?
 } 
?>
<?
	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisFILE_ID = MYSQL_RESULT($result,$i,"FILE_ID");
	$thisFILE_NAME = MYSQL_RESULT($result,$i,"FILE_NAME");
	$thisFILE_TYPE = MYSQL_RESULT($result,$i,"FILE_TYPE");
	$thisTABLESPACE_NAME = MYSQL_RESULT($result,$i,"TABLESPACE_NAME");
	$thisTABLE_CATALOG = MYSQL_RESULT($result,$i,"TABLE_CATALOG");
	$thisTABLE_SCHEMA = MYSQL_RESULT($result,$i,"TABLE_SCHEMA");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisLOGFILE_GROUP_NAME = MYSQL_RESULT($result,$i,"LOGFILE_GROUP_NAME");
	$thisLOGFILE_GROUP_NUMBER = MYSQL_RESULT($result,$i,"LOGFILE_GROUP_NUMBER");
	$thisENGINE = MYSQL_RESULT($result,$i,"ENGINE");
	$thisFULLTEXT_KEYS = MYSQL_RESULT($result,$i,"FULLTEXT_KEYS");
	$thisDELETED_ROWS = MYSQL_RESULT($result,$i,"DELETED_ROWS");
	$thisUPDATE_COUNT = MYSQL_RESULT($result,$i,"UPDATE_COUNT");
	$thisFREE_EXTENTS = MYSQL_RESULT($result,$i,"FREE_EXTENTS");
	$thisTOTAL_EXTENTS = MYSQL_RESULT($result,$i,"TOTAL_EXTENTS");
	$thisEXTENT_SIZE = MYSQL_RESULT($result,$i,"EXTENT_SIZE");
	$thisINITIAL_SIZE = MYSQL_RESULT($result,$i,"INITIAL_SIZE");
	$thisMAXIMUM_SIZE = MYSQL_RESULT($result,$i,"MAXIMUM_SIZE");
	$thisAUTOEXTEND_SIZE = MYSQL_RESULT($result,$i,"AUTOEXTEND_SIZE");
	$thisCREATION_TIME = MYSQL_RESULT($result,$i,"CREATION_TIME");
	$thisLAST_UPDATE_TIME = MYSQL_RESULT($result,$i,"LAST_UPDATE_TIME");
	$thisLAST_ACCESS_TIME = MYSQL_RESULT($result,$i,"LAST_ACCESS_TIME");
	$thisRECOVER_TIME = MYSQL_RESULT($result,$i,"RECOVER_TIME");
	$thisTRANSACTION_COUNTER = MYSQL_RESULT($result,$i,"TRANSACTION_COUNTER");
	$thisVERSION = MYSQL_RESULT($result,$i,"VERSION");
	$thisROW_FORMAT = MYSQL_RESULT($result,$i,"ROW_FORMAT");
	$thisTABLE_ROWS = MYSQL_RESULT($result,$i,"TABLE_ROWS");
	$thisAVG_ROW_LENGTH = MYSQL_RESULT($result,$i,"AVG_ROW_LENGTH");
	$thisDATA_LENGTH = MYSQL_RESULT($result,$i,"DATA_LENGTH");
	$thisMAX_DATA_LENGTH = MYSQL_RESULT($result,$i,"MAX_DATA_LENGTH");
	$thisINDEX_LENGTH = MYSQL_RESULT($result,$i,"INDEX_LENGTH");
	$thisDATA_FREE = MYSQL_RESULT($result,$i,"DATA_FREE");
	$thisCREATE_TIME = MYSQL_RESULT($result,$i,"CREATE_TIME");
	$thisUPDATE_TIME = MYSQL_RESULT($result,$i,"UPDATE_TIME");
	$thisCHECK_TIME = MYSQL_RESULT($result,$i,"CHECK_TIME");
	$thisCHECKSUM = MYSQL_RESULT($result,$i,"CHECKSUM");
	$thisSTATUS = MYSQL_RESULT($result,$i,"STATUS");
	$thisEXTRA = MYSQL_RESULT($result,$i,"EXTRA");
if ($thisFILE_IDFromForm == $thisFILE_ID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisFILE_IDField" value="<? echo $thisFILE_ID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisFILE_IDField" value="<? echo $thisFILE_ID; ?>"></TD>
		<TD><input type"text" name="thisFILE_NAMEField" value="<? echo $thisFILE_NAME; ?>"></TD>
		<TD><input type"text" name="thisFILE_TYPEField" value="<? echo $thisFILE_TYPE; ?>"></TD>
		<TD><input type"text" name="thisTABLESPACE_NAMEField" value="<? echo $thisTABLESPACE_NAME; ?>"></TD>
		<TD><input type"text" name="thisTABLE_CATALOGField" value="<? echo $thisTABLE_CATALOG; ?>"></TD>
		<TD><input type"text" name="thisTABLE_SCHEMAField" value="<? echo $thisTABLE_SCHEMA; ?>"></TD>
		<TD><input type"text" name="thisTABLE_NAMEField" value="<? echo $thisTABLE_NAME; ?>"></TD>
		<TD><input type"text" name="thisLOGFILE_GROUP_NAMEField" value="<? echo $thisLOGFILE_GROUP_NAME; ?>"></TD>
		<TD><input type"text" name="thisLOGFILE_GROUP_NUMBERField" value="<? echo $thisLOGFILE_GROUP_NUMBER; ?>"></TD>
		<TD><input type"text" name="thisENGINEField" value="<? echo $thisENGINE; ?>"></TD>
		<TD><input type"text" name="thisFULLTEXT_KEYSField" value="<? echo $thisFULLTEXT_KEYS; ?>"></TD>
		<TD><input type"text" name="thisDELETED_ROWSField" value="<? echo $thisDELETED_ROWS; ?>"></TD>
		<TD><input type"text" name="thisUPDATE_COUNTField" value="<? echo $thisUPDATE_COUNT; ?>"></TD>
		<TD><input type"text" name="thisFREE_EXTENTSField" value="<? echo $thisFREE_EXTENTS; ?>"></TD>
		<TD><input type"text" name="thisTOTAL_EXTENTSField" value="<? echo $thisTOTAL_EXTENTS; ?>"></TD>
		<TD><input type"text" name="thisEXTENT_SIZEField" value="<? echo $thisEXTENT_SIZE; ?>"></TD>
		<TD><input type"text" name="thisINITIAL_SIZEField" value="<? echo $thisINITIAL_SIZE; ?>"></TD>
		<TD><input type"text" name="thisMAXIMUM_SIZEField" value="<? echo $thisMAXIMUM_SIZE; ?>"></TD>
		<TD><input type"text" name="thisAUTOEXTEND_SIZEField" value="<? echo $thisAUTOEXTEND_SIZE; ?>"></TD>
		<TD><input type"text" name="thisCREATION_TIMEField" value="<? echo $thisCREATION_TIME; ?>"></TD>
		<TD><input type"text" name="thisLAST_UPDATE_TIMEField" value="<? echo $thisLAST_UPDATE_TIME; ?>"></TD>
		<TD><input type"text" name="thisLAST_ACCESS_TIMEField" value="<? echo $thisLAST_ACCESS_TIME; ?>"></TD>
		<TD><input type"text" name="thisRECOVER_TIMEField" value="<? echo $thisRECOVER_TIME; ?>"></TD>
		<TD><input type"text" name="thisTRANSACTION_COUNTERField" value="<? echo $thisTRANSACTION_COUNTER; ?>"></TD>
		<TD><input type"text" name="thisVERSIONField" value="<? echo $thisVERSION; ?>"></TD>
		<TD><input type"text" name="thisROW_FORMATField" value="<? echo $thisROW_FORMAT; ?>"></TD>
		<TD><input type"text" name="thisTABLE_ROWSField" value="<? echo $thisTABLE_ROWS; ?>"></TD>
		<TD><input type"text" name="thisAVG_ROW_LENGTHField" value="<? echo $thisAVG_ROW_LENGTH; ?>"></TD>
		<TD><input type"text" name="thisDATA_LENGTHField" value="<? echo $thisDATA_LENGTH; ?>"></TD>
		<TD><input type"text" name="thisMAX_DATA_LENGTHField" value="<? echo $thisMAX_DATA_LENGTH; ?>"></TD>
		<TD><input type"text" name="thisINDEX_LENGTHField" value="<? echo $thisINDEX_LENGTH; ?>"></TD>
		<TD><input type"text" name="thisDATA_FREEField" value="<? echo $thisDATA_FREE; ?>"></TD>
		<TD><input type"text" name="thisCREATE_TIMEField" value="<? echo $thisCREATE_TIME; ?>"></TD>
		<TD><input type"text" name="thisUPDATE_TIMEField" value="<? echo $thisUPDATE_TIME; ?>"></TD>
		<TD><input type"text" name="thisCHECK_TIMEField" value="<? echo $thisCHECK_TIME; ?>"></TD>
		<TD><input type"text" name="thisCHECKSUMField" value="<? echo $thisCHECKSUM; ?>"></TD>
		<TD><input type"text" name="thisSTATUSField" value="<? echo $thisSTATUS; ?>"></TD>
		<TD><input type"text" name="thisEXTRAField" value="<? echo $thisEXTRA; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisFILE_ID; ?></TD>
		<TD><? echo $thisFILE_NAME; ?></TD>
		<TD><? echo $thisFILE_TYPE; ?></TD>
		<TD><? echo $thisTABLESPACE_NAME; ?></TD>
		<TD><? echo $thisTABLE_CATALOG; ?></TD>
		<TD><? echo $thisTABLE_SCHEMA; ?></TD>
		<TD><? echo $thisTABLE_NAME; ?></TD>
		<TD><? echo $thisLOGFILE_GROUP_NAME; ?></TD>
		<TD><? echo $thisLOGFILE_GROUP_NUMBER; ?></TD>
		<TD><? echo $thisENGINE; ?></TD>
		<TD><? echo $thisFULLTEXT_KEYS; ?></TD>
		<TD><? echo $thisDELETED_ROWS; ?></TD>
		<TD><? echo $thisUPDATE_COUNT; ?></TD>
		<TD><? echo $thisFREE_EXTENTS; ?></TD>
		<TD><? echo $thisTOTAL_EXTENTS; ?></TD>
		<TD><? echo $thisEXTENT_SIZE; ?></TD>
		<TD><? echo $thisINITIAL_SIZE; ?></TD>
		<TD><? echo $thisMAXIMUM_SIZE; ?></TD>
		<TD><? echo $thisAUTOEXTEND_SIZE; ?></TD>
		<TD><? echo $thisCREATION_TIME; ?></TD>
		<TD><? echo $thisLAST_UPDATE_TIME; ?></TD>
		<TD><? echo $thisLAST_ACCESS_TIME; ?></TD>
		<TD><? echo $thisRECOVER_TIME; ?></TD>
		<TD><? echo $thisTRANSACTION_COUNTER; ?></TD>
		<TD><? echo $thisVERSION; ?></TD>
		<TD><? echo $thisROW_FORMAT; ?></TD>
		<TD><? echo $thisTABLE_ROWS; ?></TD>
		<TD><? echo $thisAVG_ROW_LENGTH; ?></TD>
		<TD><? echo $thisDATA_LENGTH; ?></TD>
		<TD><? echo $thisMAX_DATA_LENGTH; ?></TD>
		<TD><? echo $thisINDEX_LENGTH; ?></TD>
		<TD><? echo $thisDATA_FREE; ?></TD>
		<TD><? echo $thisCREATE_TIME; ?></TD>
		<TD><? echo $thisUPDATE_TIME; ?></TD>
		<TD><? echo $thisCHECK_TIME; ?></TD>
		<TD><? echo $thisCHECKSUM; ?></TD>
		<TD><? echo $thisSTATUS; ?></TD>
		<TD><? echo $thisEXTRA; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisFILE_IDField=<? echo $thisFILE_ID; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisFILE_IDField=<? echo $thisFILE_ID; ?>">Delete</a></TD>
	</TR>

<?
}
?>
<?
		$i++;

	} // end while loop
?>
</TABLE>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="EnterNew">
<input type="Submit" name="submit" value="Insert New Record">
</FORM>


<br>
<?
if ($_REQUEST['startLimit'] != "")
{
?>

<a href="<? echo  $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $previousStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Previous <? echo $limitPerPage; ?> Results</a>....
<? } ?>
<?
if ($numberOfRows == $limitPerPage)
{
?>
<a href="<? echo $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $nextStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Next <? echo $limitPerPage; ?> Results</a>
<? } ?>

<br><br>
<?
} // end of if numberOfRows > 0 
 ?>

<?php
include_once("../common/footer.php");
?>