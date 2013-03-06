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
$sqlQuery = "SELECT *  FROM SCHEMATA WHERE CATALOG_NAME like '%$thisKeyword%'  OR SCHEMA_NAME like '%$thisKeyword%'  OR DEFAULT_CHARACTER_SET_NAME like '%$thisKeyword%'  OR DEFAULT_COLLATION_NAME like '%$thisKeyword%'  OR SQL_PATH like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=CATALOG_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CATALOG_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SCHEMA_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SCHEMA_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DEFAULT_CHARACTER_SET_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DEFAULT_CHARACTER_SET_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DEFAULT_COLLATION_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DEFAULT_COLLATION_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SQL_PATH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SQL_PATH</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisCATALOG_NAME = MYSQL_RESULT($result,$i,"CATALOG_NAME");
	$thisSCHEMA_NAME = MYSQL_RESULT($result,$i,"SCHEMA_NAME");
	$thisDEFAULT_CHARACTER_SET_NAME = MYSQL_RESULT($result,$i,"DEFAULT_CHARACTER_SET_NAME");
	$thisDEFAULT_COLLATION_NAME = MYSQL_RESULT($result,$i,"DEFAULT_COLLATION_NAME");
	$thisSQL_PATH = MYSQL_RESULT($result,$i,"SQL_PATH");
	$thisCATALOG_NAME = highlightSearchTerms($thisCATALOG_NAME, $thisKeyword, $highlightColor); 
	$thisSCHEMA_NAME = highlightSearchTerms($thisSCHEMA_NAME, $thisKeyword, $highlightColor); 
	$thisDEFAULT_CHARACTER_SET_NAME = highlightSearchTerms($thisDEFAULT_CHARACTER_SET_NAME, $thisKeyword, $highlightColor); 
	$thisDEFAULT_COLLATION_NAME = highlightSearchTerms($thisDEFAULT_COLLATION_NAME, $thisKeyword, $highlightColor); 
	$thisSQL_PATH = highlightSearchTerms($thisSQL_PATH, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisCATALOG_NAME; ?></TD>
		<TD><? echo $thisSCHEMA_NAME; ?></TD>
		<TD><? echo $thisDEFAULT_CHARACTER_SET_NAME; ?></TD>
		<TD><? echo $thisDEFAULT_COLLATION_NAME; ?></TD>
		<TD><? echo $thisSQL_PATH; ?></TD>
	<TD><a href="editSCHEMATA.php?CATALOG_NAMEField=<? echo $thisCATALOG_NAME; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteSCHEMATA.php?CATALOG_NAMEField=<? echo $thisCATALOG_NAME; ?>">Delete</a></TD>
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