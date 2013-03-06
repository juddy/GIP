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
$sqlQuery = "SELECT *  FROM EVENTS WHERE EVENT_CATALOG like '%$thisKeyword%'  OR EVENT_SCHEMA like '%$thisKeyword%'  OR EVENT_NAME like '%$thisKeyword%'  OR DEFINER like '%$thisKeyword%'  OR TIME_ZONE like '%$thisKeyword%'  OR EVENT_BODY like '%$thisKeyword%'  OR EVENT_DEFINITION like '%$thisKeyword%'  OR EVENT_TYPE like '%$thisKeyword%'  OR EXECUTE_AT like '%$thisKeyword%'  OR INTERVAL_VALUE like '%$thisKeyword%'  OR INTERVAL_FIELD like '%$thisKeyword%'  OR SQL_MODE like '%$thisKeyword%'  OR STARTS like '%$thisKeyword%'  OR ENDS like '%$thisKeyword%'  OR STATUS like '%$thisKeyword%'  OR ON_COMPLETION like '%$thisKeyword%'  OR CREATED like '%$thisKeyword%'  OR LAST_ALTERED like '%$thisKeyword%'  OR LAST_EXECUTED like '%$thisKeyword%'  OR EVENT_COMMENT like '%$thisKeyword%'  OR ORIGINATOR like '%$thisKeyword%'  OR CHARACTER_SET_CLIENT like '%$thisKeyword%'  OR COLLATION_CONNECTION like '%$thisKeyword%'  OR DATABASE_COLLATION like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_CATALOG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_CATALOG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DEFINER&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DEFINER</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TIME_ZONE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TIME_ZONE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_BODY&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_BODY</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_DEFINITION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_DEFINITION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EXECUTE_AT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EXECUTE_AT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INTERVAL_VALUE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INTERVAL_VALUE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INTERVAL_FIELD&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INTERVAL_FIELD</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SQL_MODE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SQL_MODE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=STARTS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>STARTS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ENDS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ENDS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=STATUS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>STATUS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ON_COMPLETION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ON_COMPLETION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CREATED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CREATED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LAST_ALTERED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LAST_ALTERED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LAST_EXECUTED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LAST_EXECUTED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_COMMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_COMMENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ORIGINATOR&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ORIGINATOR</B>
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

	$thisEVENT_CATALOG = MYSQL_RESULT($result,$i,"EVENT_CATALOG");
	$thisEVENT_SCHEMA = MYSQL_RESULT($result,$i,"EVENT_SCHEMA");
	$thisEVENT_NAME = MYSQL_RESULT($result,$i,"EVENT_NAME");
	$thisDEFINER = MYSQL_RESULT($result,$i,"DEFINER");
	$thisTIME_ZONE = MYSQL_RESULT($result,$i,"TIME_ZONE");
	$thisEVENT_BODY = MYSQL_RESULT($result,$i,"EVENT_BODY");
	$thisEVENT_DEFINITION = MYSQL_RESULT($result,$i,"EVENT_DEFINITION");
	$thisEVENT_TYPE = MYSQL_RESULT($result,$i,"EVENT_TYPE");
	$thisEXECUTE_AT = MYSQL_RESULT($result,$i,"EXECUTE_AT");
	$thisINTERVAL_VALUE = MYSQL_RESULT($result,$i,"INTERVAL_VALUE");
	$thisINTERVAL_FIELD = MYSQL_RESULT($result,$i,"INTERVAL_FIELD");
	$thisSQL_MODE = MYSQL_RESULT($result,$i,"SQL_MODE");
	$thisSTARTS = MYSQL_RESULT($result,$i,"STARTS");
	$thisENDS = MYSQL_RESULT($result,$i,"ENDS");
	$thisSTATUS = MYSQL_RESULT($result,$i,"STATUS");
	$thisON_COMPLETION = MYSQL_RESULT($result,$i,"ON_COMPLETION");
	$thisCREATED = MYSQL_RESULT($result,$i,"CREATED");
	$thisLAST_ALTERED = MYSQL_RESULT($result,$i,"LAST_ALTERED");
	$thisLAST_EXECUTED = MYSQL_RESULT($result,$i,"LAST_EXECUTED");
	$thisEVENT_COMMENT = MYSQL_RESULT($result,$i,"EVENT_COMMENT");
	$thisORIGINATOR = MYSQL_RESULT($result,$i,"ORIGINATOR");
	$thisCHARACTER_SET_CLIENT = MYSQL_RESULT($result,$i,"CHARACTER_SET_CLIENT");
	$thisCOLLATION_CONNECTION = MYSQL_RESULT($result,$i,"COLLATION_CONNECTION");
	$thisDATABASE_COLLATION = MYSQL_RESULT($result,$i,"DATABASE_COLLATION");
	$thisEVENT_CATALOG = highlightSearchTerms($thisEVENT_CATALOG, $thisKeyword, $highlightColor); 
	$thisEVENT_SCHEMA = highlightSearchTerms($thisEVENT_SCHEMA, $thisKeyword, $highlightColor); 
	$thisEVENT_NAME = highlightSearchTerms($thisEVENT_NAME, $thisKeyword, $highlightColor); 
	$thisDEFINER = highlightSearchTerms($thisDEFINER, $thisKeyword, $highlightColor); 
	$thisTIME_ZONE = highlightSearchTerms($thisTIME_ZONE, $thisKeyword, $highlightColor); 
	$thisEVENT_BODY = highlightSearchTerms($thisEVENT_BODY, $thisKeyword, $highlightColor); 
	$thisEVENT_DEFINITION = highlightSearchTerms($thisEVENT_DEFINITION, $thisKeyword, $highlightColor); 
	$thisEVENT_TYPE = highlightSearchTerms($thisEVENT_TYPE, $thisKeyword, $highlightColor); 
	$thisEXECUTE_AT = highlightSearchTerms($thisEXECUTE_AT, $thisKeyword, $highlightColor); 
	$thisINTERVAL_VALUE = highlightSearchTerms($thisINTERVAL_VALUE, $thisKeyword, $highlightColor); 
	$thisINTERVAL_FIELD = highlightSearchTerms($thisINTERVAL_FIELD, $thisKeyword, $highlightColor); 
	$thisSQL_MODE = highlightSearchTerms($thisSQL_MODE, $thisKeyword, $highlightColor); 
	$thisSTARTS = highlightSearchTerms($thisSTARTS, $thisKeyword, $highlightColor); 
	$thisENDS = highlightSearchTerms($thisENDS, $thisKeyword, $highlightColor); 
	$thisSTATUS = highlightSearchTerms($thisSTATUS, $thisKeyword, $highlightColor); 
	$thisON_COMPLETION = highlightSearchTerms($thisON_COMPLETION, $thisKeyword, $highlightColor); 
	$thisCREATED = highlightSearchTerms($thisCREATED, $thisKeyword, $highlightColor); 
	$thisLAST_ALTERED = highlightSearchTerms($thisLAST_ALTERED, $thisKeyword, $highlightColor); 
	$thisLAST_EXECUTED = highlightSearchTerms($thisLAST_EXECUTED, $thisKeyword, $highlightColor); 
	$thisEVENT_COMMENT = highlightSearchTerms($thisEVENT_COMMENT, $thisKeyword, $highlightColor); 
	$thisORIGINATOR = highlightSearchTerms($thisORIGINATOR, $thisKeyword, $highlightColor); 
	$thisCHARACTER_SET_CLIENT = highlightSearchTerms($thisCHARACTER_SET_CLIENT, $thisKeyword, $highlightColor); 
	$thisCOLLATION_CONNECTION = highlightSearchTerms($thisCOLLATION_CONNECTION, $thisKeyword, $highlightColor); 
	$thisDATABASE_COLLATION = highlightSearchTerms($thisDATABASE_COLLATION, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisEVENT_CATALOG; ?></TD>
		<TD><? echo $thisEVENT_SCHEMA; ?></TD>
		<TD><? echo $thisEVENT_NAME; ?></TD>
		<TD><? echo $thisDEFINER; ?></TD>
		<TD><? echo $thisTIME_ZONE; ?></TD>
		<TD><? echo $thisEVENT_BODY; ?></TD>
		<TD><? echo $thisEVENT_DEFINITION; ?></TD>
		<TD><? echo $thisEVENT_TYPE; ?></TD>
		<TD><? echo $thisEXECUTE_AT; ?></TD>
		<TD><? echo $thisINTERVAL_VALUE; ?></TD>
		<TD><? echo $thisINTERVAL_FIELD; ?></TD>
		<TD><? echo $thisSQL_MODE; ?></TD>
		<TD><? echo $thisSTARTS; ?></TD>
		<TD><? echo $thisENDS; ?></TD>
		<TD><? echo $thisSTATUS; ?></TD>
		<TD><? echo $thisON_COMPLETION; ?></TD>
		<TD><? echo $thisCREATED; ?></TD>
		<TD><? echo $thisLAST_ALTERED; ?></TD>
		<TD><? echo $thisLAST_EXECUTED; ?></TD>
		<TD><? echo $thisEVENT_COMMENT; ?></TD>
		<TD><? echo $thisORIGINATOR; ?></TD>
		<TD><? echo $thisCHARACTER_SET_CLIENT; ?></TD>
		<TD><? echo $thisCOLLATION_CONNECTION; ?></TD>
		<TD><? echo $thisDATABASE_COLLATION; ?></TD>
	<TD><a href="editEVENTS.php?EVENT_CATALOGField=<? echo $thisEVENT_CATALOG; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteEVENTS.php?EVENT_CATALOGField=<? echo $thisEVENT_CATALOG; ?>">Delete</a></TD>
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