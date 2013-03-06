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
$sqlQuery = "SELECT *  FROM CMS_USER_PUBLISH_LIST WHERE USER_ID like '%$thisKeyword%'  OR STRUCTURE_ID like '%$thisKeyword%'  OR DATE_CHANGED like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=STRUCTURE_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>STRUCTURE_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATE_CHANGED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATE_CHANGED</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisUSER_ID = MYSQL_RESULT($result,$i,"USER_ID");
	$thisSTRUCTURE_ID = MYSQL_RESULT($result,$i,"STRUCTURE_ID");
	$thisDATE_CHANGED = MYSQL_RESULT($result,$i,"DATE_CHANGED");
	$thisUSER_ID = highlightSearchTerms($thisUSER_ID, $thisKeyword, $highlightColor); 
	$thisSTRUCTURE_ID = highlightSearchTerms($thisSTRUCTURE_ID, $thisKeyword, $highlightColor); 
	$thisDATE_CHANGED = highlightSearchTerms($thisDATE_CHANGED, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisUSER_ID; ?></TD>
		<TD><? echo $thisSTRUCTURE_ID; ?></TD>
		<TD><? echo $thisDATE_CHANGED; ?></TD>
	<TD><a href="editCMS_USER_PUBLISH_LIST.php?USER_IDField=<? echo $thisUSER_ID; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteCMS_USER_PUBLISH_LIST.php?USER_IDField=<? echo $thisUSER_ID; ?>">Delete</a></TD>
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