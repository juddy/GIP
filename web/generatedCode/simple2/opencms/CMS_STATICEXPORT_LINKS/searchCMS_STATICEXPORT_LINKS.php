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
$sqlQuery = "SELECT *  FROM CMS_STATICEXPORT_LINKS WHERE LINK_ID like '%$thisKeyword%'  OR LINK_RFS_PATH like '%$thisKeyword%'  OR LINK_TYPE like '%$thisKeyword%'  OR LINK_PARAMETER like '%$thisKeyword%'  OR LINK_TIMESTAMP like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=LINK_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LINK_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LINK_RFS_PATH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LINK_RFS_PATH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LINK_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LINK_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LINK_PARAMETER&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LINK_PARAMETER</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LINK_TIMESTAMP&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LINK_TIMESTAMP</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisLINK_ID = MYSQL_RESULT($result,$i,"LINK_ID");
	$thisLINK_RFS_PATH = MYSQL_RESULT($result,$i,"LINK_RFS_PATH");
	$thisLINK_TYPE = MYSQL_RESULT($result,$i,"LINK_TYPE");
	$thisLINK_PARAMETER = MYSQL_RESULT($result,$i,"LINK_PARAMETER");
	$thisLINK_TIMESTAMP = MYSQL_RESULT($result,$i,"LINK_TIMESTAMP");
	$thisLINK_ID = highlightSearchTerms($thisLINK_ID, $thisKeyword, $highlightColor); 
	$thisLINK_RFS_PATH = highlightSearchTerms($thisLINK_RFS_PATH, $thisKeyword, $highlightColor); 
	$thisLINK_TYPE = highlightSearchTerms($thisLINK_TYPE, $thisKeyword, $highlightColor); 
	$thisLINK_PARAMETER = highlightSearchTerms($thisLINK_PARAMETER, $thisKeyword, $highlightColor); 
	$thisLINK_TIMESTAMP = highlightSearchTerms($thisLINK_TIMESTAMP, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisLINK_ID; ?></TD>
		<TD><? echo $thisLINK_RFS_PATH; ?></TD>
		<TD><? echo $thisLINK_TYPE; ?></TD>
		<TD><? echo $thisLINK_PARAMETER; ?></TD>
		<TD><? echo $thisLINK_TIMESTAMP; ?></TD>
	<TD><a href="editCMS_STATICEXPORT_LINKS.php?LINK_IDField=<? echo $thisLINK_ID; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteCMS_STATICEXPORT_LINKS.php?LINK_IDField=<? echo $thisLINK_ID; ?>">Delete</a></TD>
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