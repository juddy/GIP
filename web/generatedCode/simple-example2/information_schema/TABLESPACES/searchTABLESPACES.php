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
$sqlQuery = "SELECT *  FROM TABLESPACES WHERE TABLESPACE_NAME like '%$thisKeyword%'  OR ENGINE like '%$thisKeyword%'  OR TABLESPACE_TYPE like '%$thisKeyword%'  OR LOGFILE_GROUP_NAME like '%$thisKeyword%'  OR EXTENT_SIZE like '%$thisKeyword%'  OR AUTOEXTEND_SIZE like '%$thisKeyword%'  OR MAXIMUM_SIZE like '%$thisKeyword%'  OR NODEGROUP_ID like '%$thisKeyword%'  OR TABLESPACE_COMMENT like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLESPACE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLESPACE_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ENGINE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ENGINE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLESPACE_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLESPACE_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LOGFILE_GROUP_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LOGFILE_GROUP_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EXTENT_SIZE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EXTENT_SIZE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=AUTOEXTEND_SIZE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>AUTOEXTEND_SIZE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=MAXIMUM_SIZE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>MAXIMUM_SIZE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NODEGROUP_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NODEGROUP_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLESPACE_COMMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLESPACE_COMMENT</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisTABLESPACE_NAME = MYSQL_RESULT($result,$i,"TABLESPACE_NAME");
	$thisENGINE = MYSQL_RESULT($result,$i,"ENGINE");
	$thisTABLESPACE_TYPE = MYSQL_RESULT($result,$i,"TABLESPACE_TYPE");
	$thisLOGFILE_GROUP_NAME = MYSQL_RESULT($result,$i,"LOGFILE_GROUP_NAME");
	$thisEXTENT_SIZE = MYSQL_RESULT($result,$i,"EXTENT_SIZE");
	$thisAUTOEXTEND_SIZE = MYSQL_RESULT($result,$i,"AUTOEXTEND_SIZE");
	$thisMAXIMUM_SIZE = MYSQL_RESULT($result,$i,"MAXIMUM_SIZE");
	$thisNODEGROUP_ID = MYSQL_RESULT($result,$i,"NODEGROUP_ID");
	$thisTABLESPACE_COMMENT = MYSQL_RESULT($result,$i,"TABLESPACE_COMMENT");
	$thisTABLESPACE_NAME = highlightSearchTerms($thisTABLESPACE_NAME, $thisKeyword, $highlightColor); 
	$thisENGINE = highlightSearchTerms($thisENGINE, $thisKeyword, $highlightColor); 
	$thisTABLESPACE_TYPE = highlightSearchTerms($thisTABLESPACE_TYPE, $thisKeyword, $highlightColor); 
	$thisLOGFILE_GROUP_NAME = highlightSearchTerms($thisLOGFILE_GROUP_NAME, $thisKeyword, $highlightColor); 
	$thisEXTENT_SIZE = highlightSearchTerms($thisEXTENT_SIZE, $thisKeyword, $highlightColor); 
	$thisAUTOEXTEND_SIZE = highlightSearchTerms($thisAUTOEXTEND_SIZE, $thisKeyword, $highlightColor); 
	$thisMAXIMUM_SIZE = highlightSearchTerms($thisMAXIMUM_SIZE, $thisKeyword, $highlightColor); 
	$thisNODEGROUP_ID = highlightSearchTerms($thisNODEGROUP_ID, $thisKeyword, $highlightColor); 
	$thisTABLESPACE_COMMENT = highlightSearchTerms($thisTABLESPACE_COMMENT, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisTABLESPACE_NAME; ?></TD>
		<TD><? echo $thisENGINE; ?></TD>
		<TD><? echo $thisTABLESPACE_TYPE; ?></TD>
		<TD><? echo $thisLOGFILE_GROUP_NAME; ?></TD>
		<TD><? echo $thisEXTENT_SIZE; ?></TD>
		<TD><? echo $thisAUTOEXTEND_SIZE; ?></TD>
		<TD><? echo $thisMAXIMUM_SIZE; ?></TD>
		<TD><? echo $thisNODEGROUP_ID; ?></TD>
		<TD><? echo $thisTABLESPACE_COMMENT; ?></TD>
	<TD><a href="editTABLESPACES.php?TABLESPACE_NAMEField=<? echo $thisTABLESPACE_NAME; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteTABLESPACES.php?TABLESPACE_NAMEField=<? echo $thisTABLESPACE_NAME; ?>">Delete</a></TD>
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