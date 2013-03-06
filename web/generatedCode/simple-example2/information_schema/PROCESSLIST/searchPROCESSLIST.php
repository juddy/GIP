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
$sqlQuery = "SELECT *  FROM PROCESSLIST WHERE ID like '%$thisKeyword%'  OR USER like '%$thisKeyword%'  OR HOST like '%$thisKeyword%'  OR DB like '%$thisKeyword%'  OR COMMAND like '%$thisKeyword%'  OR TIME like '%$thisKeyword%'  OR STATE like '%$thisKeyword%'  OR INFO like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=HOST&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>HOST</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DB&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DB</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COMMAND&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COMMAND</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TIME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=STATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>STATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INFO&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INFO</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisID = MYSQL_RESULT($result,$i,"ID");
	$thisUSER = MYSQL_RESULT($result,$i,"USER");
	$thisHOST = MYSQL_RESULT($result,$i,"HOST");
	$thisDB = MYSQL_RESULT($result,$i,"DB");
	$thisCOMMAND = MYSQL_RESULT($result,$i,"COMMAND");
	$thisTIME = MYSQL_RESULT($result,$i,"TIME");
	$thisSTATE = MYSQL_RESULT($result,$i,"STATE");
	$thisINFO = MYSQL_RESULT($result,$i,"INFO");
	$thisID = highlightSearchTerms($thisID, $thisKeyword, $highlightColor); 
	$thisUSER = highlightSearchTerms($thisUSER, $thisKeyword, $highlightColor); 
	$thisHOST = highlightSearchTerms($thisHOST, $thisKeyword, $highlightColor); 
	$thisDB = highlightSearchTerms($thisDB, $thisKeyword, $highlightColor); 
	$thisCOMMAND = highlightSearchTerms($thisCOMMAND, $thisKeyword, $highlightColor); 
	$thisTIME = highlightSearchTerms($thisTIME, $thisKeyword, $highlightColor); 
	$thisSTATE = highlightSearchTerms($thisSTATE, $thisKeyword, $highlightColor); 
	$thisINFO = highlightSearchTerms($thisINFO, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisID; ?></TD>
		<TD><? echo $thisUSER; ?></TD>
		<TD><? echo $thisHOST; ?></TD>
		<TD><? echo $thisDB; ?></TD>
		<TD><? echo $thisCOMMAND; ?></TD>
		<TD><? echo $thisTIME; ?></TD>
		<TD><? echo $thisSTATE; ?></TD>
		<TD><? echo $thisINFO; ?></TD>
	<TD><a href="editPROCESSLIST.php?IDField=<? echo $thisID; ?>">Edit</a></TD>
	<TD><a href="confirmDeletePROCESSLIST.php?IDField=<? echo $thisID; ?>">Delete</a></TD>
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