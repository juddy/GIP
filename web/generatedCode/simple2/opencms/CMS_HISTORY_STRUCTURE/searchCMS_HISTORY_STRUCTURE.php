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
$sqlQuery = "SELECT *  FROM CMS_HISTORY_STRUCTURE WHERE PUBLISH_TAG like '%$thisKeyword%'  OR VERSION like '%$thisKeyword%'  OR STRUCTURE_ID like '%$thisKeyword%'  OR RESOURCE_ID like '%$thisKeyword%'  OR PARENT_ID like '%$thisKeyword%'  OR RESOURCE_PATH like '%$thisKeyword%'  OR STRUCTURE_STATE like '%$thisKeyword%'  OR DATE_RELEASED like '%$thisKeyword%'  OR DATE_EXPIRED like '%$thisKeyword%'  OR STRUCTURE_VERSION like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=PUBLISH_TAG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PUBLISH_TAG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=VERSION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>VERSION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=STRUCTURE_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>STRUCTURE_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RESOURCE_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RESOURCE_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PARENT_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PARENT_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RESOURCE_PATH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RESOURCE_PATH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=STRUCTURE_STATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>STRUCTURE_STATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATE_RELEASED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATE_RELEASED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATE_EXPIRED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATE_EXPIRED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=STRUCTURE_VERSION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>STRUCTURE_VERSION</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisPUBLISH_TAG = MYSQL_RESULT($result,$i,"PUBLISH_TAG");
	$thisVERSION = MYSQL_RESULT($result,$i,"VERSION");
	$thisSTRUCTURE_ID = MYSQL_RESULT($result,$i,"STRUCTURE_ID");
	$thisRESOURCE_ID = MYSQL_RESULT($result,$i,"RESOURCE_ID");
	$thisPARENT_ID = MYSQL_RESULT($result,$i,"PARENT_ID");
	$thisRESOURCE_PATH = MYSQL_RESULT($result,$i,"RESOURCE_PATH");
	$thisSTRUCTURE_STATE = MYSQL_RESULT($result,$i,"STRUCTURE_STATE");
	$thisDATE_RELEASED = MYSQL_RESULT($result,$i,"DATE_RELEASED");
	$thisDATE_EXPIRED = MYSQL_RESULT($result,$i,"DATE_EXPIRED");
	$thisSTRUCTURE_VERSION = MYSQL_RESULT($result,$i,"STRUCTURE_VERSION");
	$thisPUBLISH_TAG = highlightSearchTerms($thisPUBLISH_TAG, $thisKeyword, $highlightColor); 
	$thisVERSION = highlightSearchTerms($thisVERSION, $thisKeyword, $highlightColor); 
	$thisSTRUCTURE_ID = highlightSearchTerms($thisSTRUCTURE_ID, $thisKeyword, $highlightColor); 
	$thisRESOURCE_ID = highlightSearchTerms($thisRESOURCE_ID, $thisKeyword, $highlightColor); 
	$thisPARENT_ID = highlightSearchTerms($thisPARENT_ID, $thisKeyword, $highlightColor); 
	$thisRESOURCE_PATH = highlightSearchTerms($thisRESOURCE_PATH, $thisKeyword, $highlightColor); 
	$thisSTRUCTURE_STATE = highlightSearchTerms($thisSTRUCTURE_STATE, $thisKeyword, $highlightColor); 
	$thisDATE_RELEASED = highlightSearchTerms($thisDATE_RELEASED, $thisKeyword, $highlightColor); 
	$thisDATE_EXPIRED = highlightSearchTerms($thisDATE_EXPIRED, $thisKeyword, $highlightColor); 
	$thisSTRUCTURE_VERSION = highlightSearchTerms($thisSTRUCTURE_VERSION, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisPUBLISH_TAG; ?></TD>
		<TD><? echo $thisVERSION; ?></TD>
		<TD><? echo $thisSTRUCTURE_ID; ?></TD>
		<TD><? echo $thisRESOURCE_ID; ?></TD>
		<TD><? echo $thisPARENT_ID; ?></TD>
		<TD><? echo $thisRESOURCE_PATH; ?></TD>
		<TD><? echo $thisSTRUCTURE_STATE; ?></TD>
		<TD><? echo $thisDATE_RELEASED; ?></TD>
		<TD><? echo $thisDATE_EXPIRED; ?></TD>
		<TD><? echo $thisSTRUCTURE_VERSION; ?></TD>
	<TD><a href="editCMS_HISTORY_STRUCTURE.php?PUBLISH_TAGField=<? echo $thisPUBLISH_TAG; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteCMS_HISTORY_STRUCTURE.php?PUBLISH_TAGField=<? echo $thisPUBLISH_TAG; ?>">Delete</a></TD>
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