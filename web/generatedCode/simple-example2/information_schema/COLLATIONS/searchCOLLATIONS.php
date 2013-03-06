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
$sqlQuery = "SELECT *  FROM COLLATIONS WHERE COLLATION_NAME like '%$thisKeyword%'  OR CHARACTER_SET_NAME like '%$thisKeyword%'  OR ID like '%$thisKeyword%'  OR IS_DEFAULT like '%$thisKeyword%'  OR IS_COMPILED like '%$thisKeyword%'  OR SORTLEN like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=COLLATION_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COLLATION_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CHARACTER_SET_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CHARACTER_SET_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=IS_DEFAULT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>IS_DEFAULT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=IS_COMPILED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>IS_COMPILED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SORTLEN&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SORTLEN</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisCOLLATION_NAME = MYSQL_RESULT($result,$i,"COLLATION_NAME");
	$thisCHARACTER_SET_NAME = MYSQL_RESULT($result,$i,"CHARACTER_SET_NAME");
	$thisID = MYSQL_RESULT($result,$i,"ID");
	$thisIS_DEFAULT = MYSQL_RESULT($result,$i,"IS_DEFAULT");
	$thisIS_COMPILED = MYSQL_RESULT($result,$i,"IS_COMPILED");
	$thisSORTLEN = MYSQL_RESULT($result,$i,"SORTLEN");
	$thisCOLLATION_NAME = highlightSearchTerms($thisCOLLATION_NAME, $thisKeyword, $highlightColor); 
	$thisCHARACTER_SET_NAME = highlightSearchTerms($thisCHARACTER_SET_NAME, $thisKeyword, $highlightColor); 
	$thisID = highlightSearchTerms($thisID, $thisKeyword, $highlightColor); 
	$thisIS_DEFAULT = highlightSearchTerms($thisIS_DEFAULT, $thisKeyword, $highlightColor); 
	$thisIS_COMPILED = highlightSearchTerms($thisIS_COMPILED, $thisKeyword, $highlightColor); 
	$thisSORTLEN = highlightSearchTerms($thisSORTLEN, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisCOLLATION_NAME; ?></TD>
		<TD><? echo $thisCHARACTER_SET_NAME; ?></TD>
		<TD><? echo $thisID; ?></TD>
		<TD><? echo $thisIS_DEFAULT; ?></TD>
		<TD><? echo $thisIS_COMPILED; ?></TD>
		<TD><? echo $thisSORTLEN; ?></TD>
	<TD><a href="editCOLLATIONS.php?COLLATION_NAMEField=<? echo $thisCOLLATION_NAME; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteCOLLATIONS.php?COLLATION_NAMEField=<? echo $thisCOLLATION_NAME; ?>">Delete</a></TD>
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