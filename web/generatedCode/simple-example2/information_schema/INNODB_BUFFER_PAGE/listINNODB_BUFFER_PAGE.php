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


$sql = "SELECT   * FROM INNODB_BUFFER_PAGE".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=POOL_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>POOL_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=BLOCK_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>BLOCK_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SPACE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SPACE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGE_NUMBER&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGE_NUMBER</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGE_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGE_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=FLUSH_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>FLUSH_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=FIX_COUNT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>FIX_COUNT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=IS_HASHED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>IS_HASHED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NEWEST_MODIFICATION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NEWEST_MODIFICATION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=OLDEST_MODIFICATION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>OLDEST_MODIFICATION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACCESS_TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACCESS_TIME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INDEX_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INDEX_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NUMBER_RECORDS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NUMBER_RECORDS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATA_SIZE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATA_SIZE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COMPRESSED_SIZE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COMPRESSED_SIZE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGE_STATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGE_STATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=IO_FIX&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>IO_FIX</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=IS_OLD&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>IS_OLD</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=FREE_PAGE_CLOCK&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>FREE_PAGE_CLOCK</B>
			</a>
</TD>
	</TR>
<?
	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisPOOL_ID = MYSQL_RESULT($result,$i,"POOL_ID");
	$thisBLOCK_ID = MYSQL_RESULT($result,$i,"BLOCK_ID");
	$thisSPACE = MYSQL_RESULT($result,$i,"SPACE");
	$thisPAGE_NUMBER = MYSQL_RESULT($result,$i,"PAGE_NUMBER");
	$thisPAGE_TYPE = MYSQL_RESULT($result,$i,"PAGE_TYPE");
	$thisFLUSH_TYPE = MYSQL_RESULT($result,$i,"FLUSH_TYPE");
	$thisFIX_COUNT = MYSQL_RESULT($result,$i,"FIX_COUNT");
	$thisIS_HASHED = MYSQL_RESULT($result,$i,"IS_HASHED");
	$thisNEWEST_MODIFICATION = MYSQL_RESULT($result,$i,"NEWEST_MODIFICATION");
	$thisOLDEST_MODIFICATION = MYSQL_RESULT($result,$i,"OLDEST_MODIFICATION");
	$thisACCESS_TIME = MYSQL_RESULT($result,$i,"ACCESS_TIME");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisINDEX_NAME = MYSQL_RESULT($result,$i,"INDEX_NAME");
	$thisNUMBER_RECORDS = MYSQL_RESULT($result,$i,"NUMBER_RECORDS");
	$thisDATA_SIZE = MYSQL_RESULT($result,$i,"DATA_SIZE");
	$thisCOMPRESSED_SIZE = MYSQL_RESULT($result,$i,"COMPRESSED_SIZE");
	$thisPAGE_STATE = MYSQL_RESULT($result,$i,"PAGE_STATE");
	$thisIO_FIX = MYSQL_RESULT($result,$i,"IO_FIX");
	$thisIS_OLD = MYSQL_RESULT($result,$i,"IS_OLD");
	$thisFREE_PAGE_CLOCK = MYSQL_RESULT($result,$i,"FREE_PAGE_CLOCK");

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisPOOL_ID; ?></TD>
		<TD><? echo $thisBLOCK_ID; ?></TD>
		<TD><? echo $thisSPACE; ?></TD>
		<TD><? echo $thisPAGE_NUMBER; ?></TD>
		<TD><? echo $thisPAGE_TYPE; ?></TD>
		<TD><? echo $thisFLUSH_TYPE; ?></TD>
		<TD><? echo $thisFIX_COUNT; ?></TD>
		<TD><? echo $thisIS_HASHED; ?></TD>
		<TD><? echo $thisNEWEST_MODIFICATION; ?></TD>
		<TD><? echo $thisOLDEST_MODIFICATION; ?></TD>
		<TD><? echo $thisACCESS_TIME; ?></TD>
		<TD><? echo $thisTABLE_NAME; ?></TD>
		<TD><? echo $thisINDEX_NAME; ?></TD>
		<TD><? echo $thisNUMBER_RECORDS; ?></TD>
		<TD><? echo $thisDATA_SIZE; ?></TD>
		<TD><? echo $thisCOMPRESSED_SIZE; ?></TD>
		<TD><? echo $thisPAGE_STATE; ?></TD>
		<TD><? echo $thisIO_FIX; ?></TD>
		<TD><? echo $thisIS_OLD; ?></TD>
		<TD><? echo $thisFREE_PAGE_CLOCK; ?></TD>
	<TD><a href="editINNODB_BUFFER_PAGE.php?POOL_IDField=<? echo $thisPOOL_ID; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteINNODB_BUFFER_PAGE.php?POOL_IDField=<? echo $thisPOOL_ID; ?>">Delete</a></TD>
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