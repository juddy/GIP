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


$sql = "SELECT   * FROM INNODB_BUFFER_POOL_STATS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=POOL_SIZE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>POOL_SIZE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=FREE_BUFFERS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>FREE_BUFFERS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATABASE_PAGES&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATABASE_PAGES</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=OLD_DATABASE_PAGES&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>OLD_DATABASE_PAGES</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=MODIFIED_DATABASE_PAGES&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>MODIFIED_DATABASE_PAGES</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PENDING_DECOMPRESS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PENDING_DECOMPRESS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PENDING_READS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PENDING_READS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PENDING_FLUSH_LRU&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PENDING_FLUSH_LRU</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PENDING_FLUSH_LIST&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PENDING_FLUSH_LIST</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGES_MADE_YOUNG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGES_MADE_YOUNG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGES_NOT_MADE_YOUNG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGES_NOT_MADE_YOUNG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGES_MADE_YOUNG_RATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGES_MADE_YOUNG_RATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGES_MADE_NOT_YOUNG_RATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGES_MADE_NOT_YOUNG_RATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NUMBER_PAGES_READ&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NUMBER_PAGES_READ</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NUMBER_PAGES_CREATED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NUMBER_PAGES_CREATED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NUMBER_PAGES_WRITTEN&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NUMBER_PAGES_WRITTEN</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGES_READ_RATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGES_READ_RATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGES_CREATE_RATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGES_CREATE_RATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGES_WRITTEN_RATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGES_WRITTEN_RATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NUMBER_PAGES_GET&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NUMBER_PAGES_GET</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=HIT_RATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>HIT_RATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=YOUNG_MAKE_PER_THOUSAND_GETS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>YOUNG_MAKE_PER_THOUSAND_GETS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NOT_YOUNG_MAKE_PER_THOUSAND_GETS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NOT_YOUNG_MAKE_PER_THOUSAND_GETS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NUMBER_PAGES_READ_AHEAD&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NUMBER_PAGES_READ_AHEAD</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NUMBER_READ_AHEAD_EVICTED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NUMBER_READ_AHEAD_EVICTED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=READ_AHEAD_RATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>READ_AHEAD_RATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=READ_AHEAD_EVICTED_RATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>READ_AHEAD_EVICTED_RATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LRU_IO_TOTAL&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LRU_IO_TOTAL</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LRU_IO_CURRENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LRU_IO_CURRENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=UNCOMPRESS_TOTAL&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>UNCOMPRESS_TOTAL</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=UNCOMPRESS_CURRENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>UNCOMPRESS_CURRENT</B>
			</a>
</TD>
	</TR>
<?
	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisPOOL_ID = MYSQL_RESULT($result,$i,"POOL_ID");
	$thisPOOL_SIZE = MYSQL_RESULT($result,$i,"POOL_SIZE");
	$thisFREE_BUFFERS = MYSQL_RESULT($result,$i,"FREE_BUFFERS");
	$thisDATABASE_PAGES = MYSQL_RESULT($result,$i,"DATABASE_PAGES");
	$thisOLD_DATABASE_PAGES = MYSQL_RESULT($result,$i,"OLD_DATABASE_PAGES");
	$thisMODIFIED_DATABASE_PAGES = MYSQL_RESULT($result,$i,"MODIFIED_DATABASE_PAGES");
	$thisPENDING_DECOMPRESS = MYSQL_RESULT($result,$i,"PENDING_DECOMPRESS");
	$thisPENDING_READS = MYSQL_RESULT($result,$i,"PENDING_READS");
	$thisPENDING_FLUSH_LRU = MYSQL_RESULT($result,$i,"PENDING_FLUSH_LRU");
	$thisPENDING_FLUSH_LIST = MYSQL_RESULT($result,$i,"PENDING_FLUSH_LIST");
	$thisPAGES_MADE_YOUNG = MYSQL_RESULT($result,$i,"PAGES_MADE_YOUNG");
	$thisPAGES_NOT_MADE_YOUNG = MYSQL_RESULT($result,$i,"PAGES_NOT_MADE_YOUNG");
	$thisPAGES_MADE_YOUNG_RATE = MYSQL_RESULT($result,$i,"PAGES_MADE_YOUNG_RATE");
	$thisPAGES_MADE_NOT_YOUNG_RATE = MYSQL_RESULT($result,$i,"PAGES_MADE_NOT_YOUNG_RATE");
	$thisNUMBER_PAGES_READ = MYSQL_RESULT($result,$i,"NUMBER_PAGES_READ");
	$thisNUMBER_PAGES_CREATED = MYSQL_RESULT($result,$i,"NUMBER_PAGES_CREATED");
	$thisNUMBER_PAGES_WRITTEN = MYSQL_RESULT($result,$i,"NUMBER_PAGES_WRITTEN");
	$thisPAGES_READ_RATE = MYSQL_RESULT($result,$i,"PAGES_READ_RATE");
	$thisPAGES_CREATE_RATE = MYSQL_RESULT($result,$i,"PAGES_CREATE_RATE");
	$thisPAGES_WRITTEN_RATE = MYSQL_RESULT($result,$i,"PAGES_WRITTEN_RATE");
	$thisNUMBER_PAGES_GET = MYSQL_RESULT($result,$i,"NUMBER_PAGES_GET");
	$thisHIT_RATE = MYSQL_RESULT($result,$i,"HIT_RATE");
	$thisYOUNG_MAKE_PER_THOUSAND_GETS = MYSQL_RESULT($result,$i,"YOUNG_MAKE_PER_THOUSAND_GETS");
	$thisNOT_YOUNG_MAKE_PER_THOUSAND_GETS = MYSQL_RESULT($result,$i,"NOT_YOUNG_MAKE_PER_THOUSAND_GETS");
	$thisNUMBER_PAGES_READ_AHEAD = MYSQL_RESULT($result,$i,"NUMBER_PAGES_READ_AHEAD");
	$thisNUMBER_READ_AHEAD_EVICTED = MYSQL_RESULT($result,$i,"NUMBER_READ_AHEAD_EVICTED");
	$thisREAD_AHEAD_RATE = MYSQL_RESULT($result,$i,"READ_AHEAD_RATE");
	$thisREAD_AHEAD_EVICTED_RATE = MYSQL_RESULT($result,$i,"READ_AHEAD_EVICTED_RATE");
	$thisLRU_IO_TOTAL = MYSQL_RESULT($result,$i,"LRU_IO_TOTAL");
	$thisLRU_IO_CURRENT = MYSQL_RESULT($result,$i,"LRU_IO_CURRENT");
	$thisUNCOMPRESS_TOTAL = MYSQL_RESULT($result,$i,"UNCOMPRESS_TOTAL");
	$thisUNCOMPRESS_CURRENT = MYSQL_RESULT($result,$i,"UNCOMPRESS_CURRENT");

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisPOOL_ID; ?></TD>
		<TD><? echo $thisPOOL_SIZE; ?></TD>
		<TD><? echo $thisFREE_BUFFERS; ?></TD>
		<TD><? echo $thisDATABASE_PAGES; ?></TD>
		<TD><? echo $thisOLD_DATABASE_PAGES; ?></TD>
		<TD><? echo $thisMODIFIED_DATABASE_PAGES; ?></TD>
		<TD><? echo $thisPENDING_DECOMPRESS; ?></TD>
		<TD><? echo $thisPENDING_READS; ?></TD>
		<TD><? echo $thisPENDING_FLUSH_LRU; ?></TD>
		<TD><? echo $thisPENDING_FLUSH_LIST; ?></TD>
		<TD><? echo $thisPAGES_MADE_YOUNG; ?></TD>
		<TD><? echo $thisPAGES_NOT_MADE_YOUNG; ?></TD>
		<TD><? echo $thisPAGES_MADE_YOUNG_RATE; ?></TD>
		<TD><? echo $thisPAGES_MADE_NOT_YOUNG_RATE; ?></TD>
		<TD><? echo $thisNUMBER_PAGES_READ; ?></TD>
		<TD><? echo $thisNUMBER_PAGES_CREATED; ?></TD>
		<TD><? echo $thisNUMBER_PAGES_WRITTEN; ?></TD>
		<TD><? echo $thisPAGES_READ_RATE; ?></TD>
		<TD><? echo $thisPAGES_CREATE_RATE; ?></TD>
		<TD><? echo $thisPAGES_WRITTEN_RATE; ?></TD>
		<TD><? echo $thisNUMBER_PAGES_GET; ?></TD>
		<TD><? echo $thisHIT_RATE; ?></TD>
		<TD><? echo $thisYOUNG_MAKE_PER_THOUSAND_GETS; ?></TD>
		<TD><? echo $thisNOT_YOUNG_MAKE_PER_THOUSAND_GETS; ?></TD>
		<TD><? echo $thisNUMBER_PAGES_READ_AHEAD; ?></TD>
		<TD><? echo $thisNUMBER_READ_AHEAD_EVICTED; ?></TD>
		<TD><? echo $thisREAD_AHEAD_RATE; ?></TD>
		<TD><? echo $thisREAD_AHEAD_EVICTED_RATE; ?></TD>
		<TD><? echo $thisLRU_IO_TOTAL; ?></TD>
		<TD><? echo $thisLRU_IO_CURRENT; ?></TD>
		<TD><? echo $thisUNCOMPRESS_TOTAL; ?></TD>
		<TD><? echo $thisUNCOMPRESS_CURRENT; ?></TD>
	<TD><a href="editINNODB_BUFFER_POOL_STATS.php?POOL_IDField=<? echo $thisPOOL_ID; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteINNODB_BUFFER_POOL_STATS.php?POOL_IDField=<? echo $thisPOOL_ID; ?>">Delete</a></TD>
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