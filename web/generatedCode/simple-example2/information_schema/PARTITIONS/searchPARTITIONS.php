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
$sqlQuery = "SELECT *  FROM PARTITIONS WHERE TABLE_CATALOG like '%$thisKeyword%'  OR TABLE_SCHEMA like '%$thisKeyword%'  OR TABLE_NAME like '%$thisKeyword%'  OR PARTITION_NAME like '%$thisKeyword%'  OR SUBPARTITION_NAME like '%$thisKeyword%'  OR PARTITION_ORDINAL_POSITION like '%$thisKeyword%'  OR SUBPARTITION_ORDINAL_POSITION like '%$thisKeyword%'  OR PARTITION_METHOD like '%$thisKeyword%'  OR SUBPARTITION_METHOD like '%$thisKeyword%'  OR PARTITION_EXPRESSION like '%$thisKeyword%'  OR SUBPARTITION_EXPRESSION like '%$thisKeyword%'  OR PARTITION_DESCRIPTION like '%$thisKeyword%'  OR TABLE_ROWS like '%$thisKeyword%'  OR AVG_ROW_LENGTH like '%$thisKeyword%'  OR DATA_LENGTH like '%$thisKeyword%'  OR MAX_DATA_LENGTH like '%$thisKeyword%'  OR INDEX_LENGTH like '%$thisKeyword%'  OR DATA_FREE like '%$thisKeyword%'  OR CREATE_TIME like '%$thisKeyword%'  OR UPDATE_TIME like '%$thisKeyword%'  OR CHECK_TIME like '%$thisKeyword%'  OR CHECKSUM like '%$thisKeyword%'  OR PARTITION_COMMENT like '%$thisKeyword%'  OR NODEGROUP like '%$thisKeyword%'  OR TABLESPACE_NAME like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=PARTITION_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PARTITION_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SUBPARTITION_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SUBPARTITION_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PARTITION_ORDINAL_POSITION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PARTITION_ORDINAL_POSITION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SUBPARTITION_ORDINAL_POSITION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SUBPARTITION_ORDINAL_POSITION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PARTITION_METHOD&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PARTITION_METHOD</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SUBPARTITION_METHOD&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SUBPARTITION_METHOD</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PARTITION_EXPRESSION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PARTITION_EXPRESSION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SUBPARTITION_EXPRESSION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SUBPARTITION_EXPRESSION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PARTITION_DESCRIPTION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PARTITION_DESCRIPTION</B>
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=PARTITION_COMMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PARTITION_COMMENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NODEGROUP&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NODEGROUP</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLESPACE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLESPACE_NAME</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisTABLE_CATALOG = MYSQL_RESULT($result,$i,"TABLE_CATALOG");
	$thisTABLE_SCHEMA = MYSQL_RESULT($result,$i,"TABLE_SCHEMA");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisPARTITION_NAME = MYSQL_RESULT($result,$i,"PARTITION_NAME");
	$thisSUBPARTITION_NAME = MYSQL_RESULT($result,$i,"SUBPARTITION_NAME");
	$thisPARTITION_ORDINAL_POSITION = MYSQL_RESULT($result,$i,"PARTITION_ORDINAL_POSITION");
	$thisSUBPARTITION_ORDINAL_POSITION = MYSQL_RESULT($result,$i,"SUBPARTITION_ORDINAL_POSITION");
	$thisPARTITION_METHOD = MYSQL_RESULT($result,$i,"PARTITION_METHOD");
	$thisSUBPARTITION_METHOD = MYSQL_RESULT($result,$i,"SUBPARTITION_METHOD");
	$thisPARTITION_EXPRESSION = MYSQL_RESULT($result,$i,"PARTITION_EXPRESSION");
	$thisSUBPARTITION_EXPRESSION = MYSQL_RESULT($result,$i,"SUBPARTITION_EXPRESSION");
	$thisPARTITION_DESCRIPTION = MYSQL_RESULT($result,$i,"PARTITION_DESCRIPTION");
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
	$thisPARTITION_COMMENT = MYSQL_RESULT($result,$i,"PARTITION_COMMENT");
	$thisNODEGROUP = MYSQL_RESULT($result,$i,"NODEGROUP");
	$thisTABLESPACE_NAME = MYSQL_RESULT($result,$i,"TABLESPACE_NAME");
	$thisTABLE_CATALOG = highlightSearchTerms($thisTABLE_CATALOG, $thisKeyword, $highlightColor); 
	$thisTABLE_SCHEMA = highlightSearchTerms($thisTABLE_SCHEMA, $thisKeyword, $highlightColor); 
	$thisTABLE_NAME = highlightSearchTerms($thisTABLE_NAME, $thisKeyword, $highlightColor); 
	$thisPARTITION_NAME = highlightSearchTerms($thisPARTITION_NAME, $thisKeyword, $highlightColor); 
	$thisSUBPARTITION_NAME = highlightSearchTerms($thisSUBPARTITION_NAME, $thisKeyword, $highlightColor); 
	$thisPARTITION_ORDINAL_POSITION = highlightSearchTerms($thisPARTITION_ORDINAL_POSITION, $thisKeyword, $highlightColor); 
	$thisSUBPARTITION_ORDINAL_POSITION = highlightSearchTerms($thisSUBPARTITION_ORDINAL_POSITION, $thisKeyword, $highlightColor); 
	$thisPARTITION_METHOD = highlightSearchTerms($thisPARTITION_METHOD, $thisKeyword, $highlightColor); 
	$thisSUBPARTITION_METHOD = highlightSearchTerms($thisSUBPARTITION_METHOD, $thisKeyword, $highlightColor); 
	$thisPARTITION_EXPRESSION = highlightSearchTerms($thisPARTITION_EXPRESSION, $thisKeyword, $highlightColor); 
	$thisSUBPARTITION_EXPRESSION = highlightSearchTerms($thisSUBPARTITION_EXPRESSION, $thisKeyword, $highlightColor); 
	$thisPARTITION_DESCRIPTION = highlightSearchTerms($thisPARTITION_DESCRIPTION, $thisKeyword, $highlightColor); 
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
	$thisPARTITION_COMMENT = highlightSearchTerms($thisPARTITION_COMMENT, $thisKeyword, $highlightColor); 
	$thisNODEGROUP = highlightSearchTerms($thisNODEGROUP, $thisKeyword, $highlightColor); 
	$thisTABLESPACE_NAME = highlightSearchTerms($thisTABLESPACE_NAME, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisTABLE_CATALOG; ?></TD>
		<TD><? echo $thisTABLE_SCHEMA; ?></TD>
		<TD><? echo $thisTABLE_NAME; ?></TD>
		<TD><? echo $thisPARTITION_NAME; ?></TD>
		<TD><? echo $thisSUBPARTITION_NAME; ?></TD>
		<TD><? echo $thisPARTITION_ORDINAL_POSITION; ?></TD>
		<TD><? echo $thisSUBPARTITION_ORDINAL_POSITION; ?></TD>
		<TD><? echo $thisPARTITION_METHOD; ?></TD>
		<TD><? echo $thisSUBPARTITION_METHOD; ?></TD>
		<TD><? echo $thisPARTITION_EXPRESSION; ?></TD>
		<TD><? echo $thisSUBPARTITION_EXPRESSION; ?></TD>
		<TD><? echo $thisPARTITION_DESCRIPTION; ?></TD>
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
		<TD><? echo $thisPARTITION_COMMENT; ?></TD>
		<TD><? echo $thisNODEGROUP; ?></TD>
		<TD><? echo $thisTABLESPACE_NAME; ?></TD>
	<TD><a href="editPARTITIONS.php?TABLE_CATALOGField=<? echo $thisTABLE_CATALOG; ?>">Edit</a></TD>
	<TD><a href="confirmDeletePARTITIONS.php?TABLE_CATALOGField=<? echo $thisTABLE_CATALOG; ?>">Delete</a></TD>
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