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
$sqlQuery = "SELECT *  FROM CMS_SUBSCRIPTION WHERE PRINCIPAL_ID like '%$thisKeyword%'  OR STRUCTURE_ID like '%$thisKeyword%'  OR DATE_DELETED like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRINCIPAL_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRINCIPAL_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=STRUCTURE_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>STRUCTURE_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATE_DELETED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATE_DELETED</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisPRINCIPAL_ID = MYSQL_RESULT($result,$i,"PRINCIPAL_ID");
	$thisSTRUCTURE_ID = MYSQL_RESULT($result,$i,"STRUCTURE_ID");
	$thisDATE_DELETED = MYSQL_RESULT($result,$i,"DATE_DELETED");
	$thisPRINCIPAL_ID = highlightSearchTerms($thisPRINCIPAL_ID, $thisKeyword, $highlightColor); 
	$thisSTRUCTURE_ID = highlightSearchTerms($thisSTRUCTURE_ID, $thisKeyword, $highlightColor); 
	$thisDATE_DELETED = highlightSearchTerms($thisDATE_DELETED, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisPRINCIPAL_ID; ?></TD>
		<TD><? echo $thisSTRUCTURE_ID; ?></TD>
		<TD><? echo $thisDATE_DELETED; ?></TD>
	<TD><a href="editCMS_SUBSCRIPTION.php?PRINCIPAL_IDField=<? echo $thisPRINCIPAL_ID; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteCMS_SUBSCRIPTION.php?PRINCIPAL_IDField=<? echo $thisPRINCIPAL_ID; ?>">Delete</a></TD>
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