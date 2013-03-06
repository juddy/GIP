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
$sqlQuery = "SELECT *  FROM TABLE_CONSTRAINTS WHERE CONSTRAINT_CATALOG like '%$thisKeyword%'  OR CONSTRAINT_SCHEMA like '%$thisKeyword%'  OR CONSTRAINT_NAME like '%$thisKeyword%'  OR TABLE_SCHEMA like '%$thisKeyword%'  OR TABLE_NAME like '%$thisKeyword%'  OR CONSTRAINT_TYPE like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=CONSTRAINT_CATALOG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CONSTRAINT_CATALOG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CONSTRAINT_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CONSTRAINT_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CONSTRAINT_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CONSTRAINT_NAME</B>
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=CONSTRAINT_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CONSTRAINT_TYPE</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisCONSTRAINT_CATALOG = MYSQL_RESULT($result,$i,"CONSTRAINT_CATALOG");
	$thisCONSTRAINT_SCHEMA = MYSQL_RESULT($result,$i,"CONSTRAINT_SCHEMA");
	$thisCONSTRAINT_NAME = MYSQL_RESULT($result,$i,"CONSTRAINT_NAME");
	$thisTABLE_SCHEMA = MYSQL_RESULT($result,$i,"TABLE_SCHEMA");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisCONSTRAINT_TYPE = MYSQL_RESULT($result,$i,"CONSTRAINT_TYPE");
	$thisCONSTRAINT_CATALOG = highlightSearchTerms($thisCONSTRAINT_CATALOG, $thisKeyword, $highlightColor); 
	$thisCONSTRAINT_SCHEMA = highlightSearchTerms($thisCONSTRAINT_SCHEMA, $thisKeyword, $highlightColor); 
	$thisCONSTRAINT_NAME = highlightSearchTerms($thisCONSTRAINT_NAME, $thisKeyword, $highlightColor); 
	$thisTABLE_SCHEMA = highlightSearchTerms($thisTABLE_SCHEMA, $thisKeyword, $highlightColor); 
	$thisTABLE_NAME = highlightSearchTerms($thisTABLE_NAME, $thisKeyword, $highlightColor); 
	$thisCONSTRAINT_TYPE = highlightSearchTerms($thisCONSTRAINT_TYPE, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisCONSTRAINT_CATALOG; ?></TD>
		<TD><? echo $thisCONSTRAINT_SCHEMA; ?></TD>
		<TD><? echo $thisCONSTRAINT_NAME; ?></TD>
		<TD><? echo $thisTABLE_SCHEMA; ?></TD>
		<TD><? echo $thisTABLE_NAME; ?></TD>
		<TD><? echo $thisCONSTRAINT_TYPE; ?></TD>
	<TD><a href="editTABLE_CONSTRAINTS.php?CONSTRAINT_CATALOGField=<? echo $thisCONSTRAINT_CATALOG; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteTABLE_CONSTRAINTS.php?CONSTRAINT_CATALOGField=<? echo $thisCONSTRAINT_CATALOG; ?>">Delete</a></TD>
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