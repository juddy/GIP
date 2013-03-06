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
$sqlQuery = "SELECT *  FROM PROFILING WHERE QUERY_ID like '%$thisKeyword%'  OR SEQ like '%$thisKeyword%'  OR STATE like '%$thisKeyword%'  OR DURATION like '%$thisKeyword%'  OR CPU_USER like '%$thisKeyword%'  OR CPU_SYSTEM like '%$thisKeyword%'  OR CONTEXT_VOLUNTARY like '%$thisKeyword%'  OR CONTEXT_INVOLUNTARY like '%$thisKeyword%'  OR BLOCK_OPS_IN like '%$thisKeyword%'  OR BLOCK_OPS_OUT like '%$thisKeyword%'  OR MESSAGES_SENT like '%$thisKeyword%'  OR MESSAGES_RECEIVED like '%$thisKeyword%'  OR PAGE_FAULTS_MAJOR like '%$thisKeyword%'  OR PAGE_FAULTS_MINOR like '%$thisKeyword%'  OR SWAPS like '%$thisKeyword%'  OR SOURCE_FUNCTION like '%$thisKeyword%'  OR SOURCE_FILE like '%$thisKeyword%'  OR SOURCE_LINE like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=QUERY_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>QUERY_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SEQ&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SEQ</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=STATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>STATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DURATION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DURATION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CPU_USER&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CPU_USER</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CPU_SYSTEM&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CPU_SYSTEM</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CONTEXT_VOLUNTARY&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CONTEXT_VOLUNTARY</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CONTEXT_INVOLUNTARY&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CONTEXT_INVOLUNTARY</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=BLOCK_OPS_IN&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>BLOCK_OPS_IN</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=BLOCK_OPS_OUT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>BLOCK_OPS_OUT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=MESSAGES_SENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>MESSAGES_SENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=MESSAGES_RECEIVED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>MESSAGES_RECEIVED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGE_FAULTS_MAJOR&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGE_FAULTS_MAJOR</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGE_FAULTS_MINOR&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGE_FAULTS_MINOR</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SWAPS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SWAPS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SOURCE_FUNCTION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SOURCE_FUNCTION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SOURCE_FILE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SOURCE_FILE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SOURCE_LINE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SOURCE_LINE</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisQUERY_ID = MYSQL_RESULT($result,$i,"QUERY_ID");
	$thisSEQ = MYSQL_RESULT($result,$i,"SEQ");
	$thisSTATE = MYSQL_RESULT($result,$i,"STATE");
	$thisDURATION = MYSQL_RESULT($result,$i,"DURATION");
	$thisCPU_USER = MYSQL_RESULT($result,$i,"CPU_USER");
	$thisCPU_SYSTEM = MYSQL_RESULT($result,$i,"CPU_SYSTEM");
	$thisCONTEXT_VOLUNTARY = MYSQL_RESULT($result,$i,"CONTEXT_VOLUNTARY");
	$thisCONTEXT_INVOLUNTARY = MYSQL_RESULT($result,$i,"CONTEXT_INVOLUNTARY");
	$thisBLOCK_OPS_IN = MYSQL_RESULT($result,$i,"BLOCK_OPS_IN");
	$thisBLOCK_OPS_OUT = MYSQL_RESULT($result,$i,"BLOCK_OPS_OUT");
	$thisMESSAGES_SENT = MYSQL_RESULT($result,$i,"MESSAGES_SENT");
	$thisMESSAGES_RECEIVED = MYSQL_RESULT($result,$i,"MESSAGES_RECEIVED");
	$thisPAGE_FAULTS_MAJOR = MYSQL_RESULT($result,$i,"PAGE_FAULTS_MAJOR");
	$thisPAGE_FAULTS_MINOR = MYSQL_RESULT($result,$i,"PAGE_FAULTS_MINOR");
	$thisSWAPS = MYSQL_RESULT($result,$i,"SWAPS");
	$thisSOURCE_FUNCTION = MYSQL_RESULT($result,$i,"SOURCE_FUNCTION");
	$thisSOURCE_FILE = MYSQL_RESULT($result,$i,"SOURCE_FILE");
	$thisSOURCE_LINE = MYSQL_RESULT($result,$i,"SOURCE_LINE");
	$thisQUERY_ID = highlightSearchTerms($thisQUERY_ID, $thisKeyword, $highlightColor); 
	$thisSEQ = highlightSearchTerms($thisSEQ, $thisKeyword, $highlightColor); 
	$thisSTATE = highlightSearchTerms($thisSTATE, $thisKeyword, $highlightColor); 
	$thisDURATION = highlightSearchTerms($thisDURATION, $thisKeyword, $highlightColor); 
	$thisCPU_USER = highlightSearchTerms($thisCPU_USER, $thisKeyword, $highlightColor); 
	$thisCPU_SYSTEM = highlightSearchTerms($thisCPU_SYSTEM, $thisKeyword, $highlightColor); 
	$thisCONTEXT_VOLUNTARY = highlightSearchTerms($thisCONTEXT_VOLUNTARY, $thisKeyword, $highlightColor); 
	$thisCONTEXT_INVOLUNTARY = highlightSearchTerms($thisCONTEXT_INVOLUNTARY, $thisKeyword, $highlightColor); 
	$thisBLOCK_OPS_IN = highlightSearchTerms($thisBLOCK_OPS_IN, $thisKeyword, $highlightColor); 
	$thisBLOCK_OPS_OUT = highlightSearchTerms($thisBLOCK_OPS_OUT, $thisKeyword, $highlightColor); 
	$thisMESSAGES_SENT = highlightSearchTerms($thisMESSAGES_SENT, $thisKeyword, $highlightColor); 
	$thisMESSAGES_RECEIVED = highlightSearchTerms($thisMESSAGES_RECEIVED, $thisKeyword, $highlightColor); 
	$thisPAGE_FAULTS_MAJOR = highlightSearchTerms($thisPAGE_FAULTS_MAJOR, $thisKeyword, $highlightColor); 
	$thisPAGE_FAULTS_MINOR = highlightSearchTerms($thisPAGE_FAULTS_MINOR, $thisKeyword, $highlightColor); 
	$thisSWAPS = highlightSearchTerms($thisSWAPS, $thisKeyword, $highlightColor); 
	$thisSOURCE_FUNCTION = highlightSearchTerms($thisSOURCE_FUNCTION, $thisKeyword, $highlightColor); 
	$thisSOURCE_FILE = highlightSearchTerms($thisSOURCE_FILE, $thisKeyword, $highlightColor); 
	$thisSOURCE_LINE = highlightSearchTerms($thisSOURCE_LINE, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisQUERY_ID; ?></TD>
		<TD><? echo $thisSEQ; ?></TD>
		<TD><? echo $thisSTATE; ?></TD>
		<TD><? echo $thisDURATION; ?></TD>
		<TD><? echo $thisCPU_USER; ?></TD>
		<TD><? echo $thisCPU_SYSTEM; ?></TD>
		<TD><? echo $thisCONTEXT_VOLUNTARY; ?></TD>
		<TD><? echo $thisCONTEXT_INVOLUNTARY; ?></TD>
		<TD><? echo $thisBLOCK_OPS_IN; ?></TD>
		<TD><? echo $thisBLOCK_OPS_OUT; ?></TD>
		<TD><? echo $thisMESSAGES_SENT; ?></TD>
		<TD><? echo $thisMESSAGES_RECEIVED; ?></TD>
		<TD><? echo $thisPAGE_FAULTS_MAJOR; ?></TD>
		<TD><? echo $thisPAGE_FAULTS_MINOR; ?></TD>
		<TD><? echo $thisSWAPS; ?></TD>
		<TD><? echo $thisSOURCE_FUNCTION; ?></TD>
		<TD><? echo $thisSOURCE_FILE; ?></TD>
		<TD><? echo $thisSOURCE_LINE; ?></TD>
	<TD><a href="editPROFILING.php?QUERY_IDField=<? echo $thisQUERY_ID; ?>">Edit</a></TD>
	<TD><a href="confirmDeletePROFILING.php?QUERY_IDField=<? echo $thisQUERY_ID; ?>">Delete</a></TD>
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