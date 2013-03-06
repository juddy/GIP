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
$sqlQuery = "SELECT *  FROM CMS_ONLINE_URLNAME_MAPPINGS WHERE NAME like '%$thisKeyword%'  OR STRUCTURE_ID like '%$thisKeyword%'  OR STATE like '%$thisKeyword%'  OR DATE_CHANGED like '%$thisKeyword%'  OR LOCALE like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=STRUCTURE_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>STRUCTURE_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=STATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>STATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATE_CHANGED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATE_CHANGED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LOCALE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LOCALE</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisNAME = MYSQL_RESULT($result,$i,"NAME");
	$thisSTRUCTURE_ID = MYSQL_RESULT($result,$i,"STRUCTURE_ID");
	$thisSTATE = MYSQL_RESULT($result,$i,"STATE");
	$thisDATE_CHANGED = MYSQL_RESULT($result,$i,"DATE_CHANGED");
	$thisLOCALE = MYSQL_RESULT($result,$i,"LOCALE");
	$thisNAME = highlightSearchTerms($thisNAME, $thisKeyword, $highlightColor); 
	$thisSTRUCTURE_ID = highlightSearchTerms($thisSTRUCTURE_ID, $thisKeyword, $highlightColor); 
	$thisSTATE = highlightSearchTerms($thisSTATE, $thisKeyword, $highlightColor); 
	$thisDATE_CHANGED = highlightSearchTerms($thisDATE_CHANGED, $thisKeyword, $highlightColor); 
	$thisLOCALE = highlightSearchTerms($thisLOCALE, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisNAME; ?></TD>
		<TD><? echo $thisSTRUCTURE_ID; ?></TD>
		<TD><? echo $thisSTATE; ?></TD>
		<TD><? echo $thisDATE_CHANGED; ?></TD>
		<TD><? echo $thisLOCALE; ?></TD>
	<TD><a href="editCMS_ONLINE_URLNAME_MAPPINGS.php?NAMEField=<? echo $thisNAME; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteCMS_ONLINE_URLNAME_MAPPINGS.php?NAMEField=<? echo $thisNAME; ?>">Delete</a></TD>
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