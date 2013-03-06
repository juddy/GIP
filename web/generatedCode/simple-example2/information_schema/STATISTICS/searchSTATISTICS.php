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
$sqlQuery = "SELECT *  FROM STATISTICS WHERE TABLE_CATALOG like '%$thisKeyword%'  OR TABLE_SCHEMA like '%$thisKeyword%'  OR TABLE_NAME like '%$thisKeyword%'  OR NON_UNIQUE like '%$thisKeyword%'  OR INDEX_SCHEMA like '%$thisKeyword%'  OR INDEX_NAME like '%$thisKeyword%'  OR SEQ_IN_INDEX like '%$thisKeyword%'  OR COLUMN_NAME like '%$thisKeyword%'  OR COLLATION like '%$thisKeyword%'  OR CARDINALITY like '%$thisKeyword%'  OR SUB_PART like '%$thisKeyword%'  OR PACKED like '%$thisKeyword%'  OR NULLABLE like '%$thisKeyword%'  OR INDEX_TYPE like '%$thisKeyword%'  OR COMMENT like '%$thisKeyword%'  OR INDEX_COMMENT like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=NON_UNIQUE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NON_UNIQUE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INDEX_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INDEX_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INDEX_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INDEX_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SEQ_IN_INDEX&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SEQ_IN_INDEX</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COLUMN_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COLUMN_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COLLATION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COLLATION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CARDINALITY&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CARDINALITY</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SUB_PART&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SUB_PART</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PACKED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PACKED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NULLABLE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NULLABLE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INDEX_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INDEX_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COMMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COMMENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INDEX_COMMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INDEX_COMMENT</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisTABLE_CATALOG = MYSQL_RESULT($result,$i,"TABLE_CATALOG");
	$thisTABLE_SCHEMA = MYSQL_RESULT($result,$i,"TABLE_SCHEMA");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisNON_UNIQUE = MYSQL_RESULT($result,$i,"NON_UNIQUE");
	$thisINDEX_SCHEMA = MYSQL_RESULT($result,$i,"INDEX_SCHEMA");
	$thisINDEX_NAME = MYSQL_RESULT($result,$i,"INDEX_NAME");
	$thisSEQ_IN_INDEX = MYSQL_RESULT($result,$i,"SEQ_IN_INDEX");
	$thisCOLUMN_NAME = MYSQL_RESULT($result,$i,"COLUMN_NAME");
	$thisCOLLATION = MYSQL_RESULT($result,$i,"COLLATION");
	$thisCARDINALITY = MYSQL_RESULT($result,$i,"CARDINALITY");
	$thisSUB_PART = MYSQL_RESULT($result,$i,"SUB_PART");
	$thisPACKED = MYSQL_RESULT($result,$i,"PACKED");
	$thisNULLABLE = MYSQL_RESULT($result,$i,"NULLABLE");
	$thisINDEX_TYPE = MYSQL_RESULT($result,$i,"INDEX_TYPE");
	$thisCOMMENT = MYSQL_RESULT($result,$i,"COMMENT");
	$thisINDEX_COMMENT = MYSQL_RESULT($result,$i,"INDEX_COMMENT");
	$thisTABLE_CATALOG = highlightSearchTerms($thisTABLE_CATALOG, $thisKeyword, $highlightColor); 
	$thisTABLE_SCHEMA = highlightSearchTerms($thisTABLE_SCHEMA, $thisKeyword, $highlightColor); 
	$thisTABLE_NAME = highlightSearchTerms($thisTABLE_NAME, $thisKeyword, $highlightColor); 
	$thisNON_UNIQUE = highlightSearchTerms($thisNON_UNIQUE, $thisKeyword, $highlightColor); 
	$thisINDEX_SCHEMA = highlightSearchTerms($thisINDEX_SCHEMA, $thisKeyword, $highlightColor); 
	$thisINDEX_NAME = highlightSearchTerms($thisINDEX_NAME, $thisKeyword, $highlightColor); 
	$thisSEQ_IN_INDEX = highlightSearchTerms($thisSEQ_IN_INDEX, $thisKeyword, $highlightColor); 
	$thisCOLUMN_NAME = highlightSearchTerms($thisCOLUMN_NAME, $thisKeyword, $highlightColor); 
	$thisCOLLATION = highlightSearchTerms($thisCOLLATION, $thisKeyword, $highlightColor); 
	$thisCARDINALITY = highlightSearchTerms($thisCARDINALITY, $thisKeyword, $highlightColor); 
	$thisSUB_PART = highlightSearchTerms($thisSUB_PART, $thisKeyword, $highlightColor); 
	$thisPACKED = highlightSearchTerms($thisPACKED, $thisKeyword, $highlightColor); 
	$thisNULLABLE = highlightSearchTerms($thisNULLABLE, $thisKeyword, $highlightColor); 
	$thisINDEX_TYPE = highlightSearchTerms($thisINDEX_TYPE, $thisKeyword, $highlightColor); 
	$thisCOMMENT = highlightSearchTerms($thisCOMMENT, $thisKeyword, $highlightColor); 
	$thisINDEX_COMMENT = highlightSearchTerms($thisINDEX_COMMENT, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisTABLE_CATALOG; ?></TD>
		<TD><? echo $thisTABLE_SCHEMA; ?></TD>
		<TD><? echo $thisTABLE_NAME; ?></TD>
		<TD><? echo $thisNON_UNIQUE; ?></TD>
		<TD><? echo $thisINDEX_SCHEMA; ?></TD>
		<TD><? echo $thisINDEX_NAME; ?></TD>
		<TD><? echo $thisSEQ_IN_INDEX; ?></TD>
		<TD><? echo $thisCOLUMN_NAME; ?></TD>
		<TD><? echo $thisCOLLATION; ?></TD>
		<TD><? echo $thisCARDINALITY; ?></TD>
		<TD><? echo $thisSUB_PART; ?></TD>
		<TD><? echo $thisPACKED; ?></TD>
		<TD><? echo $thisNULLABLE; ?></TD>
		<TD><? echo $thisINDEX_TYPE; ?></TD>
		<TD><? echo $thisCOMMENT; ?></TD>
		<TD><? echo $thisINDEX_COMMENT; ?></TD>
	<TD><a href="editSTATISTICS.php?TABLE_CATALOGField=<? echo $thisTABLE_CATALOG; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteSTATISTICS.php?TABLE_CATALOGField=<? echo $thisTABLE_CATALOG; ?>">Delete</a></TD>
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