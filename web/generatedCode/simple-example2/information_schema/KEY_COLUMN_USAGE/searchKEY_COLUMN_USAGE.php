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
$sqlQuery = "SELECT *  FROM KEY_COLUMN_USAGE WHERE CONSTRAINT_CATALOG like '%$thisKeyword%'  OR CONSTRAINT_SCHEMA like '%$thisKeyword%'  OR CONSTRAINT_NAME like '%$thisKeyword%'  OR TABLE_CATALOG like '%$thisKeyword%'  OR TABLE_SCHEMA like '%$thisKeyword%'  OR TABLE_NAME like '%$thisKeyword%'  OR COLUMN_NAME like '%$thisKeyword%'  OR ORDINAL_POSITION like '%$thisKeyword%'  OR POSITION_IN_UNIQUE_CONSTRAINT like '%$thisKeyword%'  OR REFERENCED_TABLE_SCHEMA like '%$thisKeyword%'  OR REFERENCED_TABLE_NAME like '%$thisKeyword%'  OR REFERENCED_COLUMN_NAME like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_CATALOG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_CATALOG</B>
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=COLUMN_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COLUMN_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ORDINAL_POSITION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ORDINAL_POSITION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=POSITION_IN_UNIQUE_CONSTRAINT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>POSITION_IN_UNIQUE_CONSTRAINT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=REFERENCED_TABLE_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>REFERENCED_TABLE_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=REFERENCED_TABLE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>REFERENCED_TABLE_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=REFERENCED_COLUMN_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>REFERENCED_COLUMN_NAME</B>
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
	$thisTABLE_CATALOG = MYSQL_RESULT($result,$i,"TABLE_CATALOG");
	$thisTABLE_SCHEMA = MYSQL_RESULT($result,$i,"TABLE_SCHEMA");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisCOLUMN_NAME = MYSQL_RESULT($result,$i,"COLUMN_NAME");
	$thisORDINAL_POSITION = MYSQL_RESULT($result,$i,"ORDINAL_POSITION");
	$thisPOSITION_IN_UNIQUE_CONSTRAINT = MYSQL_RESULT($result,$i,"POSITION_IN_UNIQUE_CONSTRAINT");
	$thisREFERENCED_TABLE_SCHEMA = MYSQL_RESULT($result,$i,"REFERENCED_TABLE_SCHEMA");
	$thisREFERENCED_TABLE_NAME = MYSQL_RESULT($result,$i,"REFERENCED_TABLE_NAME");
	$thisREFERENCED_COLUMN_NAME = MYSQL_RESULT($result,$i,"REFERENCED_COLUMN_NAME");
	$thisCONSTRAINT_CATALOG = highlightSearchTerms($thisCONSTRAINT_CATALOG, $thisKeyword, $highlightColor); 
	$thisCONSTRAINT_SCHEMA = highlightSearchTerms($thisCONSTRAINT_SCHEMA, $thisKeyword, $highlightColor); 
	$thisCONSTRAINT_NAME = highlightSearchTerms($thisCONSTRAINT_NAME, $thisKeyword, $highlightColor); 
	$thisTABLE_CATALOG = highlightSearchTerms($thisTABLE_CATALOG, $thisKeyword, $highlightColor); 
	$thisTABLE_SCHEMA = highlightSearchTerms($thisTABLE_SCHEMA, $thisKeyword, $highlightColor); 
	$thisTABLE_NAME = highlightSearchTerms($thisTABLE_NAME, $thisKeyword, $highlightColor); 
	$thisCOLUMN_NAME = highlightSearchTerms($thisCOLUMN_NAME, $thisKeyword, $highlightColor); 
	$thisORDINAL_POSITION = highlightSearchTerms($thisORDINAL_POSITION, $thisKeyword, $highlightColor); 
	$thisPOSITION_IN_UNIQUE_CONSTRAINT = highlightSearchTerms($thisPOSITION_IN_UNIQUE_CONSTRAINT, $thisKeyword, $highlightColor); 
	$thisREFERENCED_TABLE_SCHEMA = highlightSearchTerms($thisREFERENCED_TABLE_SCHEMA, $thisKeyword, $highlightColor); 
	$thisREFERENCED_TABLE_NAME = highlightSearchTerms($thisREFERENCED_TABLE_NAME, $thisKeyword, $highlightColor); 
	$thisREFERENCED_COLUMN_NAME = highlightSearchTerms($thisREFERENCED_COLUMN_NAME, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisCONSTRAINT_CATALOG; ?></TD>
		<TD><? echo $thisCONSTRAINT_SCHEMA; ?></TD>
		<TD><? echo $thisCONSTRAINT_NAME; ?></TD>
		<TD><? echo $thisTABLE_CATALOG; ?></TD>
		<TD><? echo $thisTABLE_SCHEMA; ?></TD>
		<TD><? echo $thisTABLE_NAME; ?></TD>
		<TD><? echo $thisCOLUMN_NAME; ?></TD>
		<TD><? echo $thisORDINAL_POSITION; ?></TD>
		<TD><? echo $thisPOSITION_IN_UNIQUE_CONSTRAINT; ?></TD>
		<TD><? echo $thisREFERENCED_TABLE_SCHEMA; ?></TD>
		<TD><? echo $thisREFERENCED_TABLE_NAME; ?></TD>
		<TD><? echo $thisREFERENCED_COLUMN_NAME; ?></TD>
	<TD><a href="editKEY_COLUMN_USAGE.php?CONSTRAINT_CATALOGField=<? echo $thisCONSTRAINT_CATALOG; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteKEY_COLUMN_USAGE.php?CONSTRAINT_CATALOGField=<? echo $thisCONSTRAINT_CATALOG; ?>">Delete</a></TD>
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