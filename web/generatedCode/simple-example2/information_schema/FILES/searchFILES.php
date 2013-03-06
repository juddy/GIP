<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
function highlightSearchTerms($fullText, $searchTerm, $bgcolor="#FFFF99")
{
	if (empty($searchTerm))
	{
		return $fullText;
	}
	else
	{
		$start_tag = "<span style=\"background-color: $bgcolor\">";
		$end_tag = "</span>";
		$highlighted_results = $start_tag . $searchTerm . $end_tag;
		return eregi_replace($searchTerm, $highlighted_results, $fullText);
	}
}

?>
<?php
$thisKeyword = $_REQUEST['keyword'];
?>
<?
$sqlQuery = "SELECT *  FROM FILES WHERE FILE_ID like '%$thisKeyword%'  OR FILE_NAME like '%$thisKeyword%'  OR FILE_TYPE like '%$thisKeyword%'  OR TABLESPACE_NAME like '%$thisKeyword%'  OR TABLE_CATALOG like '%$thisKeyword%'  OR TABLE_SCHEMA like '%$thisKeyword%'  OR TABLE_NAME like '%$thisKeyword%'  OR LOGFILE_GROUP_NAME like '%$thisKeyword%'  OR LOGFILE_GROUP_NUMBER like '%$thisKeyword%'  OR ENGINE like '%$thisKeyword%'  OR FULLTEXT_KEYS like '%$thisKeyword%'  OR DELETED_ROWS like '%$thisKeyword%'  OR UPDATE_COUNT like '%$thisKeyword%'  OR FREE_EXTENTS like '%$thisKeyword%'  OR TOTAL_EXTENTS like '%$thisKeyword%'  OR EXTENT_SIZE like '%$thisKeyword%'  OR INITIAL_SIZE like '%$thisKeyword%'  OR MAXIMUM_SIZE like '%$thisKeyword%'  OR AUTOEXTEND_SIZE like '%$thisKeyword%'  OR CREATION_TIME like '%$thisKeyword%'  OR LAST_UPDATE_TIME like '%$thisKeyword%'  OR LAST_ACCESS_TIME like '%$thisKeyword%'  OR RECOVER_TIME like '%$thisKeyword%'  OR TRANSACTION_COUNTER like '%$thisKeyword%'  OR VERSION like '%$thisKeyword%'  OR ROW_FORMAT like '%$thisKeyword%'  OR TABLE_ROWS like '%$thisKeyword%'  OR AVG_ROW_LENGTH like '%$thisKeyword%'  OR DATA_LENGTH like '%$thisKeyword%'  OR MAX_DATA_LENGTH like '%$thisKeyword%'  OR INDEX_LENGTH like '%$thisKeyword%'  OR DATA_FREE like '%$thisKeyword%'  OR CREATE_TIME like '%$thisKeyword%'  OR UPDATE_TIME like '%$thisKeyword%'  OR CHECK_TIME like '%$thisKeyword%'  OR CHECKSUM like '%$thisKeyword%'  OR STATUS like '%$thisKeyword%'  OR EXTRA like '%$thisKeyword%' ";
$result = MYSQL_QUERY($sqlQuery);
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
$highlightColor = "#FFFF99"; 

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
	$thisFILE_ID = highlightSearchTerms($thisFILE_ID, $thisKeyword, $highlightColor); 
	$thisFILE_NAME = highlightSearchTerms($thisFILE_NAME, $thisKeyword, $highlightColor); 
	$thisFILE_TYPE = highlightSearchTerms($thisFILE_TYPE, $thisKeyword, $highlightColor); 
	$thisTABLESPACE_NAME = highlightSearchTerms($thisTABLESPACE_NAME, $thisKeyword, $highlightColor); 
	$thisTABLE_CATALOG = highlightSearchTerms($thisTABLE_CATALOG, $thisKeyword, $highlightColor); 
	$thisTABLE_SCHEMA = highlightSearchTerms($thisTABLE_SCHEMA, $thisKeyword, $highlightColor); 
	$thisTABLE_NAME = highlightSearchTerms($thisTABLE_NAME, $thisKeyword, $highlightColor); 
	$thisLOGFILE_GROUP_NAME = highlightSearchTerms($thisLOGFILE_GROUP_NAME, $thisKeyword, $highlightColor); 
	$thisLOGFILE_GROUP_NUMBER = highlightSearchTerms($thisLOGFILE_GROUP_NUMBER, $thisKeyword, $highlightColor); 
	$thisENGINE = highlightSearchTerms($thisENGINE, $thisKeyword, $highlightColor); 
	$thisFULLTEXT_KEYS = highlightSearchTerms($thisFULLTEXT_KEYS, $thisKeyword, $highlightColor); 
	$thisDELETED_ROWS = highlightSearchTerms($thisDELETED_ROWS, $thisKeyword, $highlightColor); 
	$thisUPDATE_COUNT = highlightSearchTerms($thisUPDATE_COUNT, $thisKeyword, $highlightColor); 
	$thisFREE_EXTENTS = highlightSearchTerms($thisFREE_EXTENTS, $thisKeyword, $highlightColor); 
	$thisTOTAL_EXTENTS = highlightSearchTerms($thisTOTAL_EXTENTS, $thisKeyword, $highlightColor); 
	$thisEXTENT_SIZE = highlightSearchTerms($thisEXTENT_SIZE, $thisKeyword, $highlightColor); 
	$thisINITIAL_SIZE = highlightSearchTerms($thisINITIAL_SIZE, $thisKeyword, $highlightColor); 
	$thisMAXIMUM_SIZE = highlightSearchTerms($thisMAXIMUM_SIZE, $thisKeyword, $highlightColor); 
	$thisAUTOEXTEND_SIZE = highlightSearchTerms($thisAUTOEXTEND_SIZE, $thisKeyword, $highlightColor); 
	$thisCREATION_TIME = highlightSearchTerms($thisCREATION_TIME, $thisKeyword, $highlightColor); 
	$thisLAST_UPDATE_TIME = highlightSearchTerms($thisLAST_UPDATE_TIME, $thisKeyword, $highlightColor); 
	$thisLAST_ACCESS_TIME = highlightSearchTerms($thisLAST_ACCESS_TIME, $thisKeyword, $highlightColor); 
	$thisRECOVER_TIME = highlightSearchTerms($thisRECOVER_TIME, $thisKeyword, $highlightColor); 
	$thisTRANSACTION_COUNTER = highlightSearchTerms($thisTRANSACTION_COUNTER, $thisKeyword, $highlightColor); 
	$thisVERSION = highlightSearchTerms($thisVERSION, $thisKeyword, $highlightColor); 
	$thisROW_FORMAT = highlightSearchTerms($thisROW_FORMAT, $thisKeyword, $highlightColor); 
	$thisTABLE_ROWS = highlightSearchTerms($thisTABLE_ROWS, $thisKeyword, $highlightColor); 
	$thisAVG_ROW_LENGTH = highlightSearchTerms($thisAVG_ROW_LENGTH, $thisKeyword, $highlightColor); 
	$thisDATA_LENGTH = highlightSearchTerms($thisDATA_LENGTH, $thisKeyword, $highlightColor); 
	$thisMAX_DATA_LENGTH = highlightSearchTerms($thisMAX_DATA_LENGTH, $thisKeyword, $highlightColor); 
	$thisINDEX_LENGTH = highlightSearchTerms($thisINDEX_LENGTH, $thisKeyword, $highlightColor); 
	$thisDATA_FREE = highlightSearchTerms($thisDATA_FREE, $thisKeyword, $highlightColor); 
	$thisCREATE_TIME = highlightSearchTerms($thisCREATE_TIME, $thisKeyword, $highlightColor); 
	$thisUPDATE_TIME = highlightSearchTerms($thisUPDATE_TIME, $thisKeyword, $highlightColor); 
	$thisCHECK_TIME = highlightSearchTerms($thisCHECK_TIME, $thisKeyword, $highlightColor); 
	$thisCHECKSUM = highlightSearchTerms($thisCHECKSUM, $thisKeyword, $highlightColor); 
	$thisSTATUS = highlightSearchTerms($thisSTATUS, $thisKeyword, $highlightColor); 
	$thisEXTRA = highlightSearchTerms($thisEXTRA, $thisKeyword, $highlightColor); 

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
	<TD><a href="editFILES.php?FILE_IDField=<? echo $thisFILE_ID; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteFILES.php?FILE_IDField=<? echo $thisFILE_ID; ?>">Delete</a></TD>
	</TR>
<?
		$i++;

	} // end while loop
?>
</TABLE>
<?
} // end of if numberOfRows > 0 
 ?>

<?php
include_once("../common/footer.php");
?>