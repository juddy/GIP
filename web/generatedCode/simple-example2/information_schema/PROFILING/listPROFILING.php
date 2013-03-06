<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$initStartLimit = 0;
$limitPerPage = 10;

$startLimit = $_REQUEST['startLimit'];
$numberOfRows = $_REQUEST['rows'];
$sortBy = $_REQUEST['sortBy'];
$sortOrder = $_REQUEST['sortOrder'];

if ($startLimit=="")
{
		$startLimit = $initStartLimit;
}

if ($numberOfRows=="")
{
		$numberOfRows = $limitPerPage;
}

if ($sortOrder=="")
{
		$sortOrder  = "DESC";
}
if ($sortOrder == "DESC") { $newSortOrder = "ASC"; } else  { $newSortOrder = "DESC"; }
$limitQuery = " LIMIT ".$startLimit.",".$numberOfRows;
$nextStartLimit = $startLimit + $limitPerPage;
$previousStartLimit = $startLimit - $limitPerPage;

if ($sortBy!="")
{
		$orderByQuery = " ORDER BY ".$sortBy." ".$sortOrder;
}


$sql = "SELECT   * FROM PROFILING".$orderByQuery.$limitQuery;
$result = MYSQL_QUERY($sql);
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


<br>
<?
if ($_REQUEST['startLimit'] != "")
{
?>

<a href="<? echo  $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $previousStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Previous <? echo $limitPerPage; ?> Results</a>....
<? } ?>
<?
if ($numberOfRows == $limitPerPage)
{
?>
<a href="<? echo $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $nextStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Next <? echo $limitPerPage; ?> Results</a>
<? } ?>

<br><br>
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


<br>
<?
if ($_REQUEST['startLimit'] != "")
{
?>

<a href="<? echo  $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $previousStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Previous <? echo $limitPerPage; ?> Results</a>....
<? } ?>
<?
if ($numberOfRows == $limitPerPage)
{
?>
<a href="<? echo $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $nextStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Next <? echo $limitPerPage; ?> Results</a>
<? } ?>

<br><br>
<?
} // end of if numberOfRows > 0 
 ?>

<?php
include_once("../common/footer.php");
?>