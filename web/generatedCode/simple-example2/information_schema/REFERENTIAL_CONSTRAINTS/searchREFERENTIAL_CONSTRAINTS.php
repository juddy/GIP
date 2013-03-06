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
$sqlQuery = "SELECT *  FROM REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_CATALOG like '%$thisKeyword%'  OR CONSTRAINT_SCHEMA like '%$thisKeyword%'  OR CONSTRAINT_NAME like '%$thisKeyword%'  OR UNIQUE_CONSTRAINT_CATALOG like '%$thisKeyword%'  OR UNIQUE_CONSTRAINT_SCHEMA like '%$thisKeyword%'  OR UNIQUE_CONSTRAINT_NAME like '%$thisKeyword%'  OR MATCH_OPTION like '%$thisKeyword%'  OR UPDATE_RULE like '%$thisKeyword%'  OR DELETE_RULE like '%$thisKeyword%'  OR TABLE_NAME like '%$thisKeyword%'  OR REFERENCED_TABLE_NAME like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=UNIQUE_CONSTRAINT_CATALOG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>UNIQUE_CONSTRAINT_CATALOG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=UNIQUE_CONSTRAINT_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>UNIQUE_CONSTRAINT_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=UNIQUE_CONSTRAINT_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>UNIQUE_CONSTRAINT_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=MATCH_OPTION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>MATCH_OPTION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=UPDATE_RULE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>UPDATE_RULE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DELETE_RULE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DELETE_RULE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=REFERENCED_TABLE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>REFERENCED_TABLE_NAME</B>
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
	$thisUNIQUE_CONSTRAINT_CATALOG = MYSQL_RESULT($result,$i,"UNIQUE_CONSTRAINT_CATALOG");
	$thisUNIQUE_CONSTRAINT_SCHEMA = MYSQL_RESULT($result,$i,"UNIQUE_CONSTRAINT_SCHEMA");
	$thisUNIQUE_CONSTRAINT_NAME = MYSQL_RESULT($result,$i,"UNIQUE_CONSTRAINT_NAME");
	$thisMATCH_OPTION = MYSQL_RESULT($result,$i,"MATCH_OPTION");
	$thisUPDATE_RULE = MYSQL_RESULT($result,$i,"UPDATE_RULE");
	$thisDELETE_RULE = MYSQL_RESULT($result,$i,"DELETE_RULE");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisREFERENCED_TABLE_NAME = MYSQL_RESULT($result,$i,"REFERENCED_TABLE_NAME");
	$thisCONSTRAINT_CATALOG = highlightSearchTerms($thisCONSTRAINT_CATALOG, $thisKeyword, $highlightColor); 
	$thisCONSTRAINT_SCHEMA = highlightSearchTerms($thisCONSTRAINT_SCHEMA, $thisKeyword, $highlightColor); 
	$thisCONSTRAINT_NAME = highlightSearchTerms($thisCONSTRAINT_NAME, $thisKeyword, $highlightColor); 
	$thisUNIQUE_CONSTRAINT_CATALOG = highlightSearchTerms($thisUNIQUE_CONSTRAINT_CATALOG, $thisKeyword, $highlightColor); 
	$thisUNIQUE_CONSTRAINT_SCHEMA = highlightSearchTerms($thisUNIQUE_CONSTRAINT_SCHEMA, $thisKeyword, $highlightColor); 
	$thisUNIQUE_CONSTRAINT_NAME = highlightSearchTerms($thisUNIQUE_CONSTRAINT_NAME, $thisKeyword, $highlightColor); 
	$thisMATCH_OPTION = highlightSearchTerms($thisMATCH_OPTION, $thisKeyword, $highlightColor); 
	$thisUPDATE_RULE = highlightSearchTerms($thisUPDATE_RULE, $thisKeyword, $highlightColor); 
	$thisDELETE_RULE = highlightSearchTerms($thisDELETE_RULE, $thisKeyword, $highlightColor); 
	$thisTABLE_NAME = highlightSearchTerms($thisTABLE_NAME, $thisKeyword, $highlightColor); 
	$thisREFERENCED_TABLE_NAME = highlightSearchTerms($thisREFERENCED_TABLE_NAME, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisCONSTRAINT_CATALOG; ?></TD>
		<TD><? echo $thisCONSTRAINT_SCHEMA; ?></TD>
		<TD><? echo $thisCONSTRAINT_NAME; ?></TD>
		<TD><? echo $thisUNIQUE_CONSTRAINT_CATALOG; ?></TD>
		<TD><? echo $thisUNIQUE_CONSTRAINT_SCHEMA; ?></TD>
		<TD><? echo $thisUNIQUE_CONSTRAINT_NAME; ?></TD>
		<TD><? echo $thisMATCH_OPTION; ?></TD>
		<TD><? echo $thisUPDATE_RULE; ?></TD>
		<TD><? echo $thisDELETE_RULE; ?></TD>
		<TD><? echo $thisTABLE_NAME; ?></TD>
		<TD><? echo $thisREFERENCED_TABLE_NAME; ?></TD>
	<TD><a href="editREFERENTIAL_CONSTRAINTS.php?CONSTRAINT_CATALOGField=<? echo $thisCONSTRAINT_CATALOG; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteREFERENTIAL_CONSTRAINTS.php?CONSTRAINT_CATALOGField=<? echo $thisCONSTRAINT_CATALOG; ?>">Delete</a></TD>
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