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
$sqlQuery = "SELECT *  FROM CMS_REWRITES WHERE ID like '%$thisKeyword%'  OR ALIAS_MODE like '%$thisKeyword%'  OR PATTERN like '%$thisKeyword%'  OR REPLACEMENT like '%$thisKeyword%'  OR SITE_ROOT like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ALIAS_MODE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ALIAS_MODE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PATTERN&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PATTERN</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=REPLACEMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>REPLACEMENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SITE_ROOT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SITE_ROOT</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisID = MYSQL_RESULT($result,$i,"ID");
	$thisALIAS_MODE = MYSQL_RESULT($result,$i,"ALIAS_MODE");
	$thisPATTERN = MYSQL_RESULT($result,$i,"PATTERN");
	$thisREPLACEMENT = MYSQL_RESULT($result,$i,"REPLACEMENT");
	$thisSITE_ROOT = MYSQL_RESULT($result,$i,"SITE_ROOT");
	$thisID = highlightSearchTerms($thisID, $thisKeyword, $highlightColor); 
	$thisALIAS_MODE = highlightSearchTerms($thisALIAS_MODE, $thisKeyword, $highlightColor); 
	$thisPATTERN = highlightSearchTerms($thisPATTERN, $thisKeyword, $highlightColor); 
	$thisREPLACEMENT = highlightSearchTerms($thisREPLACEMENT, $thisKeyword, $highlightColor); 
	$thisSITE_ROOT = highlightSearchTerms($thisSITE_ROOT, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisID; ?></TD>
		<TD><? echo $thisALIAS_MODE; ?></TD>
		<TD><? echo $thisPATTERN; ?></TD>
		<TD><? echo $thisREPLACEMENT; ?></TD>
		<TD><? echo $thisSITE_ROOT; ?></TD>
	<TD><a href="editCMS_REWRITES.php?IDField=<? echo $thisID; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteCMS_REWRITES.php?IDField=<? echo $thisID; ?>">Delete</a></TD>
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