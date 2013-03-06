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
$sqlQuery = "SELECT *  FROM TRIGGERS WHERE TRIGGER_CATALOG like '%$thisKeyword%'  OR TRIGGER_SCHEMA like '%$thisKeyword%'  OR TRIGGER_NAME like '%$thisKeyword%'  OR EVENT_MANIPULATION like '%$thisKeyword%'  OR EVENT_OBJECT_CATALOG like '%$thisKeyword%'  OR EVENT_OBJECT_SCHEMA like '%$thisKeyword%'  OR EVENT_OBJECT_TABLE like '%$thisKeyword%'  OR ACTION_ORDER like '%$thisKeyword%'  OR ACTION_CONDITION like '%$thisKeyword%'  OR ACTION_STATEMENT like '%$thisKeyword%'  OR ACTION_ORIENTATION like '%$thisKeyword%'  OR ACTION_TIMING like '%$thisKeyword%'  OR ACTION_REFERENCE_OLD_TABLE like '%$thisKeyword%'  OR ACTION_REFERENCE_NEW_TABLE like '%$thisKeyword%'  OR ACTION_REFERENCE_OLD_ROW like '%$thisKeyword%'  OR ACTION_REFERENCE_NEW_ROW like '%$thisKeyword%'  OR CREATED like '%$thisKeyword%'  OR SQL_MODE like '%$thisKeyword%'  OR DEFINER like '%$thisKeyword%'  OR CHARACTER_SET_CLIENT like '%$thisKeyword%'  OR COLLATION_CONNECTION like '%$thisKeyword%'  OR DATABASE_COLLATION like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=TRIGGER_CATALOG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TRIGGER_CATALOG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TRIGGER_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TRIGGER_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TRIGGER_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TRIGGER_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_MANIPULATION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_MANIPULATION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_OBJECT_CATALOG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_OBJECT_CATALOG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_OBJECT_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_OBJECT_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_OBJECT_TABLE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_OBJECT_TABLE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACTION_ORDER&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACTION_ORDER</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACTION_CONDITION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACTION_CONDITION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACTION_STATEMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACTION_STATEMENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACTION_ORIENTATION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACTION_ORIENTATION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACTION_TIMING&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACTION_TIMING</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACTION_REFERENCE_OLD_TABLE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACTION_REFERENCE_OLD_TABLE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACTION_REFERENCE_NEW_TABLE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACTION_REFERENCE_NEW_TABLE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACTION_REFERENCE_OLD_ROW&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACTION_REFERENCE_OLD_ROW</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACTION_REFERENCE_NEW_ROW&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACTION_REFERENCE_NEW_ROW</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CREATED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CREATED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SQL_MODE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SQL_MODE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DEFINER&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DEFINER</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CHARACTER_SET_CLIENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CHARACTER_SET_CLIENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COLLATION_CONNECTION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COLLATION_CONNECTION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATABASE_COLLATION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATABASE_COLLATION</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisTRIGGER_CATALOG = MYSQL_RESULT($result,$i,"TRIGGER_CATALOG");
	$thisTRIGGER_SCHEMA = MYSQL_RESULT($result,$i,"TRIGGER_SCHEMA");
	$thisTRIGGER_NAME = MYSQL_RESULT($result,$i,"TRIGGER_NAME");
	$thisEVENT_MANIPULATION = MYSQL_RESULT($result,$i,"EVENT_MANIPULATION");
	$thisEVENT_OBJECT_CATALOG = MYSQL_RESULT($result,$i,"EVENT_OBJECT_CATALOG");
	$thisEVENT_OBJECT_SCHEMA = MYSQL_RESULT($result,$i,"EVENT_OBJECT_SCHEMA");
	$thisEVENT_OBJECT_TABLE = MYSQL_RESULT($result,$i,"EVENT_OBJECT_TABLE");
	$thisACTION_ORDER = MYSQL_RESULT($result,$i,"ACTION_ORDER");
	$thisACTION_CONDITION = MYSQL_RESULT($result,$i,"ACTION_CONDITION");
	$thisACTION_STATEMENT = MYSQL_RESULT($result,$i,"ACTION_STATEMENT");
	$thisACTION_ORIENTATION = MYSQL_RESULT($result,$i,"ACTION_ORIENTATION");
	$thisACTION_TIMING = MYSQL_RESULT($result,$i,"ACTION_TIMING");
	$thisACTION_REFERENCE_OLD_TABLE = MYSQL_RESULT($result,$i,"ACTION_REFERENCE_OLD_TABLE");
	$thisACTION_REFERENCE_NEW_TABLE = MYSQL_RESULT($result,$i,"ACTION_REFERENCE_NEW_TABLE");
	$thisACTION_REFERENCE_OLD_ROW = MYSQL_RESULT($result,$i,"ACTION_REFERENCE_OLD_ROW");
	$thisACTION_REFERENCE_NEW_ROW = MYSQL_RESULT($result,$i,"ACTION_REFERENCE_NEW_ROW");
	$thisCREATED = MYSQL_RESULT($result,$i,"CREATED");
	$thisSQL_MODE = MYSQL_RESULT($result,$i,"SQL_MODE");
	$thisDEFINER = MYSQL_RESULT($result,$i,"DEFINER");
	$thisCHARACTER_SET_CLIENT = MYSQL_RESULT($result,$i,"CHARACTER_SET_CLIENT");
	$thisCOLLATION_CONNECTION = MYSQL_RESULT($result,$i,"COLLATION_CONNECTION");
	$thisDATABASE_COLLATION = MYSQL_RESULT($result,$i,"DATABASE_COLLATION");
	$thisTRIGGER_CATALOG = highlightSearchTerms($thisTRIGGER_CATALOG, $thisKeyword, $highlightColor); 
	$thisTRIGGER_SCHEMA = highlightSearchTerms($thisTRIGGER_SCHEMA, $thisKeyword, $highlightColor); 
	$thisTRIGGER_NAME = highlightSearchTerms($thisTRIGGER_NAME, $thisKeyword, $highlightColor); 
	$thisEVENT_MANIPULATION = highlightSearchTerms($thisEVENT_MANIPULATION, $thisKeyword, $highlightColor); 
	$thisEVENT_OBJECT_CATALOG = highlightSearchTerms($thisEVENT_OBJECT_CATALOG, $thisKeyword, $highlightColor); 
	$thisEVENT_OBJECT_SCHEMA = highlightSearchTerms($thisEVENT_OBJECT_SCHEMA, $thisKeyword, $highlightColor); 
	$thisEVENT_OBJECT_TABLE = highlightSearchTerms($thisEVENT_OBJECT_TABLE, $thisKeyword, $highlightColor); 
	$thisACTION_ORDER = highlightSearchTerms($thisACTION_ORDER, $thisKeyword, $highlightColor); 
	$thisACTION_CONDITION = highlightSearchTerms($thisACTION_CONDITION, $thisKeyword, $highlightColor); 
	$thisACTION_STATEMENT = highlightSearchTerms($thisACTION_STATEMENT, $thisKeyword, $highlightColor); 
	$thisACTION_ORIENTATION = highlightSearchTerms($thisACTION_ORIENTATION, $thisKeyword, $highlightColor); 
	$thisACTION_TIMING = highlightSearchTerms($thisACTION_TIMING, $thisKeyword, $highlightColor); 
	$thisACTION_REFERENCE_OLD_TABLE = highlightSearchTerms($thisACTION_REFERENCE_OLD_TABLE, $thisKeyword, $highlightColor); 
	$thisACTION_REFERENCE_NEW_TABLE = highlightSearchTerms($thisACTION_REFERENCE_NEW_TABLE, $thisKeyword, $highlightColor); 
	$thisACTION_REFERENCE_OLD_ROW = highlightSearchTerms($thisACTION_REFERENCE_OLD_ROW, $thisKeyword, $highlightColor); 
	$thisACTION_REFERENCE_NEW_ROW = highlightSearchTerms($thisACTION_REFERENCE_NEW_ROW, $thisKeyword, $highlightColor); 
	$thisCREATED = highlightSearchTerms($thisCREATED, $thisKeyword, $highlightColor); 
	$thisSQL_MODE = highlightSearchTerms($thisSQL_MODE, $thisKeyword, $highlightColor); 
	$thisDEFINER = highlightSearchTerms($thisDEFINER, $thisKeyword, $highlightColor); 
	$thisCHARACTER_SET_CLIENT = highlightSearchTerms($thisCHARACTER_SET_CLIENT, $thisKeyword, $highlightColor); 
	$thisCOLLATION_CONNECTION = highlightSearchTerms($thisCOLLATION_CONNECTION, $thisKeyword, $highlightColor); 
	$thisDATABASE_COLLATION = highlightSearchTerms($thisDATABASE_COLLATION, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisTRIGGER_CATALOG; ?></TD>
		<TD><? echo $thisTRIGGER_SCHEMA; ?></TD>
		<TD><? echo $thisTRIGGER_NAME; ?></TD>
		<TD><? echo $thisEVENT_MANIPULATION; ?></TD>
		<TD><? echo $thisEVENT_OBJECT_CATALOG; ?></TD>
		<TD><? echo $thisEVENT_OBJECT_SCHEMA; ?></TD>
		<TD><? echo $thisEVENT_OBJECT_TABLE; ?></TD>
		<TD><? echo $thisACTION_ORDER; ?></TD>
		<TD><? echo $thisACTION_CONDITION; ?></TD>
		<TD><? echo $thisACTION_STATEMENT; ?></TD>
		<TD><? echo $thisACTION_ORIENTATION; ?></TD>
		<TD><? echo $thisACTION_TIMING; ?></TD>
		<TD><? echo $thisACTION_REFERENCE_OLD_TABLE; ?></TD>
		<TD><? echo $thisACTION_REFERENCE_NEW_TABLE; ?></TD>
		<TD><? echo $thisACTION_REFERENCE_OLD_ROW; ?></TD>
		<TD><? echo $thisACTION_REFERENCE_NEW_ROW; ?></TD>
		<TD><? echo $thisCREATED; ?></TD>
		<TD><? echo $thisSQL_MODE; ?></TD>
		<TD><? echo $thisDEFINER; ?></TD>
		<TD><? echo $thisCHARACTER_SET_CLIENT; ?></TD>
		<TD><? echo $thisCOLLATION_CONNECTION; ?></TD>
		<TD><? echo $thisDATABASE_COLLATION; ?></TD>
	<TD><a href="editTRIGGERS.php?TRIGGER_CATALOGField=<? echo $thisTRIGGER_CATALOG; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteTRIGGERS.php?TRIGGER_CATALOGField=<? echo $thisTRIGGER_CATALOG; ?>">Delete</a></TD>
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