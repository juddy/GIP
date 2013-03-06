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
$sqlQuery = "SELECT *  FROM ENGINES WHERE ENGINE like '%$thisKeyword%'  OR SUPPORT like '%$thisKeyword%'  OR COMMENT like '%$thisKeyword%'  OR TRANSACTIONS like '%$thisKeyword%'  OR XA like '%$thisKeyword%'  OR SAVEPOINTS like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=ENGINE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ENGINE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SUPPORT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SUPPORT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COMMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COMMENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TRANSACTIONS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TRANSACTIONS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=XA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>XA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SAVEPOINTS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SAVEPOINTS</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisENGINE = MYSQL_RESULT($result,$i,"ENGINE");
	$thisSUPPORT = MYSQL_RESULT($result,$i,"SUPPORT");
	$thisCOMMENT = MYSQL_RESULT($result,$i,"COMMENT");
	$thisTRANSACTIONS = MYSQL_RESULT($result,$i,"TRANSACTIONS");
	$thisXA = MYSQL_RESULT($result,$i,"XA");
	$thisSAVEPOINTS = MYSQL_RESULT($result,$i,"SAVEPOINTS");
	$thisENGINE = highlightSearchTerms($thisENGINE, $thisKeyword, $highlightColor); 
	$thisSUPPORT = highlightSearchTerms($thisSUPPORT, $thisKeyword, $highlightColor); 
	$thisCOMMENT = highlightSearchTerms($thisCOMMENT, $thisKeyword, $highlightColor); 
	$thisTRANSACTIONS = highlightSearchTerms($thisTRANSACTIONS, $thisKeyword, $highlightColor); 
	$thisXA = highlightSearchTerms($thisXA, $thisKeyword, $highlightColor); 
	$thisSAVEPOINTS = highlightSearchTerms($thisSAVEPOINTS, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisENGINE; ?></TD>
		<TD><? echo $thisSUPPORT; ?></TD>
		<TD><? echo $thisCOMMENT; ?></TD>
		<TD><? echo $thisTRANSACTIONS; ?></TD>
		<TD><? echo $thisXA; ?></TD>
		<TD><? echo $thisSAVEPOINTS; ?></TD>
	<TD><a href="editENGINES.php?ENGINEField=<? echo $thisENGINE; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteENGINES.php?ENGINEField=<? echo $thisENGINE; ?>">Delete</a></TD>
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