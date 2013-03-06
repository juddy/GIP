<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisPOOL_IDFromForm = $_REQUEST['thisPOOL_IDField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisPOOL_ID = addslashes($_REQUEST['thisPOOL_IDField']);
	$thisPOOL_SIZE = addslashes($_REQUEST['thisPOOL_SIZEField']);
	$thisFREE_BUFFERS = addslashes($_REQUEST['thisFREE_BUFFERSField']);
	$thisDATABASE_PAGES = addslashes($_REQUEST['thisDATABASE_PAGESField']);
	$thisOLD_DATABASE_PAGES = addslashes($_REQUEST['thisOLD_DATABASE_PAGESField']);
	$thisMODIFIED_DATABASE_PAGES = addslashes($_REQUEST['thisMODIFIED_DATABASE_PAGESField']);
	$thisPENDING_DECOMPRESS = addslashes($_REQUEST['thisPENDING_DECOMPRESSField']);
	$thisPENDING_READS = addslashes($_REQUEST['thisPENDING_READSField']);
	$thisPENDING_FLUSH_LRU = addslashes($_REQUEST['thisPENDING_FLUSH_LRUField']);
	$thisPENDING_FLUSH_LIST = addslashes($_REQUEST['thisPENDING_FLUSH_LISTField']);
	$thisPAGES_MADE_YOUNG = addslashes($_REQUEST['thisPAGES_MADE_YOUNGField']);
	$thisPAGES_NOT_MADE_YOUNG = addslashes($_REQUEST['thisPAGES_NOT_MADE_YOUNGField']);
	$thisPAGES_MADE_YOUNG_RATE = addslashes($_REQUEST['thisPAGES_MADE_YOUNG_RATEField']);
	$thisPAGES_MADE_NOT_YOUNG_RATE = addslashes($_REQUEST['thisPAGES_MADE_NOT_YOUNG_RATEField']);
	$thisNUMBER_PAGES_READ = addslashes($_REQUEST['thisNUMBER_PAGES_READField']);
	$thisNUMBER_PAGES_CREATED = addslashes($_REQUEST['thisNUMBER_PAGES_CREATEDField']);
	$thisNUMBER_PAGES_WRITTEN = addslashes($_REQUEST['thisNUMBER_PAGES_WRITTENField']);
	$thisPAGES_READ_RATE = addslashes($_REQUEST['thisPAGES_READ_RATEField']);
	$thisPAGES_CREATE_RATE = addslashes($_REQUEST['thisPAGES_CREATE_RATEField']);
	$thisPAGES_WRITTEN_RATE = addslashes($_REQUEST['thisPAGES_WRITTEN_RATEField']);
	$thisNUMBER_PAGES_GET = addslashes($_REQUEST['thisNUMBER_PAGES_GETField']);
	$thisHIT_RATE = addslashes($_REQUEST['thisHIT_RATEField']);
	$thisYOUNG_MAKE_PER_THOUSAND_GETS = addslashes($_REQUEST['thisYOUNG_MAKE_PER_THOUSAND_GETSField']);
	$thisNOT_YOUNG_MAKE_PER_THOUSAND_GETS = addslashes($_REQUEST['thisNOT_YOUNG_MAKE_PER_THOUSAND_GETSField']);
	$thisNUMBER_PAGES_READ_AHEAD = addslashes($_REQUEST['thisNUMBER_PAGES_READ_AHEADField']);
	$thisNUMBER_READ_AHEAD_EVICTED = addslashes($_REQUEST['thisNUMBER_READ_AHEAD_EVICTEDField']);
	$thisREAD_AHEAD_RATE = addslashes($_REQUEST['thisREAD_AHEAD_RATEField']);
	$thisREAD_AHEAD_EVICTED_RATE = addslashes($_REQUEST['thisREAD_AHEAD_EVICTED_RATEField']);
	$thisLRU_IO_TOTAL = addslashes($_REQUEST['thisLRU_IO_TOTALField']);
	$thisLRU_IO_CURRENT = addslashes($_REQUEST['thisLRU_IO_CURRENTField']);
	$thisUNCOMPRESS_TOTAL = addslashes($_REQUEST['thisUNCOMPRESS_TOTALField']);
	$thisUNCOMPRESS_CURRENT = addslashes($_REQUEST['thisUNCOMPRESS_CURRENTField']);

	$sqlUpdate = "UPDATE INNODB_BUFFER_POOL_STATS SET POOL_ID = '$thisPOOL_ID' , POOL_SIZE = '$thisPOOL_SIZE' , FREE_BUFFERS = '$thisFREE_BUFFERS' , DATABASE_PAGES = '$thisDATABASE_PAGES' , OLD_DATABASE_PAGES = '$thisOLD_DATABASE_PAGES' , MODIFIED_DATABASE_PAGES = '$thisMODIFIED_DATABASE_PAGES' , PENDING_DECOMPRESS = '$thisPENDING_DECOMPRESS' , PENDING_READS = '$thisPENDING_READS' , PENDING_FLUSH_LRU = '$thisPENDING_FLUSH_LRU' , PENDING_FLUSH_LIST = '$thisPENDING_FLUSH_LIST' , PAGES_MADE_YOUNG = '$thisPAGES_MADE_YOUNG' , PAGES_NOT_MADE_YOUNG = '$thisPAGES_NOT_MADE_YOUNG' , PAGES_MADE_YOUNG_RATE = '$thisPAGES_MADE_YOUNG_RATE' , PAGES_MADE_NOT_YOUNG_RATE = '$thisPAGES_MADE_NOT_YOUNG_RATE' , NUMBER_PAGES_READ = '$thisNUMBER_PAGES_READ' , NUMBER_PAGES_CREATED = '$thisNUMBER_PAGES_CREATED' , NUMBER_PAGES_WRITTEN = '$thisNUMBER_PAGES_WRITTEN' , PAGES_READ_RATE = '$thisPAGES_READ_RATE' , PAGES_CREATE_RATE = '$thisPAGES_CREATE_RATE' , PAGES_WRITTEN_RATE = '$thisPAGES_WRITTEN_RATE' , NUMBER_PAGES_GET = '$thisNUMBER_PAGES_GET' , HIT_RATE = '$thisHIT_RATE' , YOUNG_MAKE_PER_THOUSAND_GETS = '$thisYOUNG_MAKE_PER_THOUSAND_GETS' , NOT_YOUNG_MAKE_PER_THOUSAND_GETS = '$thisNOT_YOUNG_MAKE_PER_THOUSAND_GETS' , NUMBER_PAGES_READ_AHEAD = '$thisNUMBER_PAGES_READ_AHEAD' , NUMBER_READ_AHEAD_EVICTED = '$thisNUMBER_READ_AHEAD_EVICTED' , READ_AHEAD_RATE = '$thisREAD_AHEAD_RATE' , READ_AHEAD_EVICTED_RATE = '$thisREAD_AHEAD_EVICTED_RATE' , LRU_IO_TOTAL = '$thisLRU_IO_TOTAL' , LRU_IO_CURRENT = '$thisLRU_IO_CURRENT' , UNCOMPRESS_TOTAL = '$thisUNCOMPRESS_TOTAL' , UNCOMPRESS_CURRENT = '$thisUNCOMPRESS_CURRENT'  WHERE POOL_ID = '$thisPOOL_ID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisPOOL_IDFromForm." has been Updated<br></b>";
	$thisPOOL_IDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisPOOL_ID = addslashes($_REQUEST['thisPOOL_IDField']);
	$thisPOOL_SIZE = addslashes($_REQUEST['thisPOOL_SIZEField']);
	$thisFREE_BUFFERS = addslashes($_REQUEST['thisFREE_BUFFERSField']);
	$thisDATABASE_PAGES = addslashes($_REQUEST['thisDATABASE_PAGESField']);
	$thisOLD_DATABASE_PAGES = addslashes($_REQUEST['thisOLD_DATABASE_PAGESField']);
	$thisMODIFIED_DATABASE_PAGES = addslashes($_REQUEST['thisMODIFIED_DATABASE_PAGESField']);
	$thisPENDING_DECOMPRESS = addslashes($_REQUEST['thisPENDING_DECOMPRESSField']);
	$thisPENDING_READS = addslashes($_REQUEST['thisPENDING_READSField']);
	$thisPENDING_FLUSH_LRU = addslashes($_REQUEST['thisPENDING_FLUSH_LRUField']);
	$thisPENDING_FLUSH_LIST = addslashes($_REQUEST['thisPENDING_FLUSH_LISTField']);
	$thisPAGES_MADE_YOUNG = addslashes($_REQUEST['thisPAGES_MADE_YOUNGField']);
	$thisPAGES_NOT_MADE_YOUNG = addslashes($_REQUEST['thisPAGES_NOT_MADE_YOUNGField']);
	$thisPAGES_MADE_YOUNG_RATE = addslashes($_REQUEST['thisPAGES_MADE_YOUNG_RATEField']);
	$thisPAGES_MADE_NOT_YOUNG_RATE = addslashes($_REQUEST['thisPAGES_MADE_NOT_YOUNG_RATEField']);
	$thisNUMBER_PAGES_READ = addslashes($_REQUEST['thisNUMBER_PAGES_READField']);
	$thisNUMBER_PAGES_CREATED = addslashes($_REQUEST['thisNUMBER_PAGES_CREATEDField']);
	$thisNUMBER_PAGES_WRITTEN = addslashes($_REQUEST['thisNUMBER_PAGES_WRITTENField']);
	$thisPAGES_READ_RATE = addslashes($_REQUEST['thisPAGES_READ_RATEField']);
	$thisPAGES_CREATE_RATE = addslashes($_REQUEST['thisPAGES_CREATE_RATEField']);
	$thisPAGES_WRITTEN_RATE = addslashes($_REQUEST['thisPAGES_WRITTEN_RATEField']);
	$thisNUMBER_PAGES_GET = addslashes($_REQUEST['thisNUMBER_PAGES_GETField']);
	$thisHIT_RATE = addslashes($_REQUEST['thisHIT_RATEField']);
	$thisYOUNG_MAKE_PER_THOUSAND_GETS = addslashes($_REQUEST['thisYOUNG_MAKE_PER_THOUSAND_GETSField']);
	$thisNOT_YOUNG_MAKE_PER_THOUSAND_GETS = addslashes($_REQUEST['thisNOT_YOUNG_MAKE_PER_THOUSAND_GETSField']);
	$thisNUMBER_PAGES_READ_AHEAD = addslashes($_REQUEST['thisNUMBER_PAGES_READ_AHEADField']);
	$thisNUMBER_READ_AHEAD_EVICTED = addslashes($_REQUEST['thisNUMBER_READ_AHEAD_EVICTEDField']);
	$thisREAD_AHEAD_RATE = addslashes($_REQUEST['thisREAD_AHEAD_RATEField']);
	$thisREAD_AHEAD_EVICTED_RATE = addslashes($_REQUEST['thisREAD_AHEAD_EVICTED_RATEField']);
	$thisLRU_IO_TOTAL = addslashes($_REQUEST['thisLRU_IO_TOTALField']);
	$thisLRU_IO_CURRENT = addslashes($_REQUEST['thisLRU_IO_CURRENTField']);
	$thisUNCOMPRESS_TOTAL = addslashes($_REQUEST['thisUNCOMPRESS_TOTALField']);
	$thisUNCOMPRESS_CURRENT = addslashes($_REQUEST['thisUNCOMPRESS_CURRENTField']);

	$sqlInsert = "INSERT INTO INNODB_BUFFER_POOL_STATS (POOL_ID , POOL_SIZE , FREE_BUFFERS , DATABASE_PAGES , OLD_DATABASE_PAGES , MODIFIED_DATABASE_PAGES , PENDING_DECOMPRESS , PENDING_READS , PENDING_FLUSH_LRU , PENDING_FLUSH_LIST , PAGES_MADE_YOUNG , PAGES_NOT_MADE_YOUNG , PAGES_MADE_YOUNG_RATE , PAGES_MADE_NOT_YOUNG_RATE , NUMBER_PAGES_READ , NUMBER_PAGES_CREATED , NUMBER_PAGES_WRITTEN , PAGES_READ_RATE , PAGES_CREATE_RATE , PAGES_WRITTEN_RATE , NUMBER_PAGES_GET , HIT_RATE , YOUNG_MAKE_PER_THOUSAND_GETS , NOT_YOUNG_MAKE_PER_THOUSAND_GETS , NUMBER_PAGES_READ_AHEAD , NUMBER_READ_AHEAD_EVICTED , READ_AHEAD_RATE , READ_AHEAD_EVICTED_RATE , LRU_IO_TOTAL , LRU_IO_CURRENT , UNCOMPRESS_TOTAL , UNCOMPRESS_CURRENT ) VALUES ('$thisPOOL_ID' , '$thisPOOL_SIZE' , '$thisFREE_BUFFERS' , '$thisDATABASE_PAGES' , '$thisOLD_DATABASE_PAGES' , '$thisMODIFIED_DATABASE_PAGES' , '$thisPENDING_DECOMPRESS' , '$thisPENDING_READS' , '$thisPENDING_FLUSH_LRU' , '$thisPENDING_FLUSH_LIST' , '$thisPAGES_MADE_YOUNG' , '$thisPAGES_NOT_MADE_YOUNG' , '$thisPAGES_MADE_YOUNG_RATE' , '$thisPAGES_MADE_NOT_YOUNG_RATE' , '$thisNUMBER_PAGES_READ' , '$thisNUMBER_PAGES_CREATED' , '$thisNUMBER_PAGES_WRITTEN' , '$thisPAGES_READ_RATE' , '$thisPAGES_CREATE_RATE' , '$thisPAGES_WRITTEN_RATE' , '$thisNUMBER_PAGES_GET' , '$thisHIT_RATE' , '$thisYOUNG_MAKE_PER_THOUSAND_GETS' , '$thisNOT_YOUNG_MAKE_PER_THOUSAND_GETS' , '$thisNUMBER_PAGES_READ_AHEAD' , '$thisNUMBER_READ_AHEAD_EVICTED' , '$thisREAD_AHEAD_RATE' , '$thisREAD_AHEAD_EVICTED_RATE' , '$thisLRU_IO_TOTAL' , '$thisLRU_IO_CURRENT' , '$thisUNCOMPRESS_TOTAL' , '$thisUNCOMPRESS_CURRENT' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisPOOL_IDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisPOOL_ID = addslashes($_REQUEST['thisPOOL_IDField']);
	$thisPOOL_SIZE = addslashes($_REQUEST['thisPOOL_SIZEField']);
	$thisFREE_BUFFERS = addslashes($_REQUEST['thisFREE_BUFFERSField']);
	$thisDATABASE_PAGES = addslashes($_REQUEST['thisDATABASE_PAGESField']);
	$thisOLD_DATABASE_PAGES = addslashes($_REQUEST['thisOLD_DATABASE_PAGESField']);
	$thisMODIFIED_DATABASE_PAGES = addslashes($_REQUEST['thisMODIFIED_DATABASE_PAGESField']);
	$thisPENDING_DECOMPRESS = addslashes($_REQUEST['thisPENDING_DECOMPRESSField']);
	$thisPENDING_READS = addslashes($_REQUEST['thisPENDING_READSField']);
	$thisPENDING_FLUSH_LRU = addslashes($_REQUEST['thisPENDING_FLUSH_LRUField']);
	$thisPENDING_FLUSH_LIST = addslashes($_REQUEST['thisPENDING_FLUSH_LISTField']);
	$thisPAGES_MADE_YOUNG = addslashes($_REQUEST['thisPAGES_MADE_YOUNGField']);
	$thisPAGES_NOT_MADE_YOUNG = addslashes($_REQUEST['thisPAGES_NOT_MADE_YOUNGField']);
	$thisPAGES_MADE_YOUNG_RATE = addslashes($_REQUEST['thisPAGES_MADE_YOUNG_RATEField']);
	$thisPAGES_MADE_NOT_YOUNG_RATE = addslashes($_REQUEST['thisPAGES_MADE_NOT_YOUNG_RATEField']);
	$thisNUMBER_PAGES_READ = addslashes($_REQUEST['thisNUMBER_PAGES_READField']);
	$thisNUMBER_PAGES_CREATED = addslashes($_REQUEST['thisNUMBER_PAGES_CREATEDField']);
	$thisNUMBER_PAGES_WRITTEN = addslashes($_REQUEST['thisNUMBER_PAGES_WRITTENField']);
	$thisPAGES_READ_RATE = addslashes($_REQUEST['thisPAGES_READ_RATEField']);
	$thisPAGES_CREATE_RATE = addslashes($_REQUEST['thisPAGES_CREATE_RATEField']);
	$thisPAGES_WRITTEN_RATE = addslashes($_REQUEST['thisPAGES_WRITTEN_RATEField']);
	$thisNUMBER_PAGES_GET = addslashes($_REQUEST['thisNUMBER_PAGES_GETField']);
	$thisHIT_RATE = addslashes($_REQUEST['thisHIT_RATEField']);
	$thisYOUNG_MAKE_PER_THOUSAND_GETS = addslashes($_REQUEST['thisYOUNG_MAKE_PER_THOUSAND_GETSField']);
	$thisNOT_YOUNG_MAKE_PER_THOUSAND_GETS = addslashes($_REQUEST['thisNOT_YOUNG_MAKE_PER_THOUSAND_GETSField']);
	$thisNUMBER_PAGES_READ_AHEAD = addslashes($_REQUEST['thisNUMBER_PAGES_READ_AHEADField']);
	$thisNUMBER_READ_AHEAD_EVICTED = addslashes($_REQUEST['thisNUMBER_READ_AHEAD_EVICTEDField']);
	$thisREAD_AHEAD_RATE = addslashes($_REQUEST['thisREAD_AHEAD_RATEField']);
	$thisREAD_AHEAD_EVICTED_RATE = addslashes($_REQUEST['thisREAD_AHEAD_EVICTED_RATEField']);
	$thisLRU_IO_TOTAL = addslashes($_REQUEST['thisLRU_IO_TOTALField']);
	$thisLRU_IO_CURRENT = addslashes($_REQUEST['thisLRU_IO_CURRENTField']);
	$thisUNCOMPRESS_TOTAL = addslashes($_REQUEST['thisUNCOMPRESS_TOTALField']);
	$thisUNCOMPRESS_CURRENT = addslashes($_REQUEST['thisUNCOMPRESS_CURRENTField']);

	$sqlDelete = "DELETE FROM INNODB_BUFFER_POOL_STATS WHERE POOL_ID = '$thisPOOL_ID'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisPOOL_IDFromForm." has been Deleted<br></b>";
	$thisPOOL_IDFromForm = "";
}

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
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisPOOL_IDField" value="<? echo $thisPOOL_ID; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisPOOL_IDField" value=""></TD>
		<TD><input type"text" name="thisPOOL_SIZEField" value=""></TD>
		<TD><input type"text" name="thisFREE_BUFFERSField" value=""></TD>
		<TD><input type"text" name="thisDATABASE_PAGESField" value=""></TD>
		<TD><input type"text" name="thisOLD_DATABASE_PAGESField" value=""></TD>
		<TD><input type"text" name="thisMODIFIED_DATABASE_PAGESField" value=""></TD>
		<TD><input type"text" name="thisPENDING_DECOMPRESSField" value=""></TD>
		<TD><input type"text" name="thisPENDING_READSField" value=""></TD>
		<TD><input type"text" name="thisPENDING_FLUSH_LRUField" value=""></TD>
		<TD><input type"text" name="thisPENDING_FLUSH_LISTField" value=""></TD>
		<TD><input type"text" name="thisPAGES_MADE_YOUNGField" value=""></TD>
		<TD><input type"text" name="thisPAGES_NOT_MADE_YOUNGField" value=""></TD>
		<TD><input type"text" name="thisPAGES_MADE_YOUNG_RATEField" value=""></TD>
		<TD><input type"text" name="thisPAGES_MADE_NOT_YOUNG_RATEField" value=""></TD>
		<TD><input type"text" name="thisNUMBER_PAGES_READField" value=""></TD>
		<TD><input type"text" name="thisNUMBER_PAGES_CREATEDField" value=""></TD>
		<TD><input type"text" name="thisNUMBER_PAGES_WRITTENField" value=""></TD>
		<TD><input type"text" name="thisPAGES_READ_RATEField" value=""></TD>
		<TD><input type"text" name="thisPAGES_CREATE_RATEField" value=""></TD>
		<TD><input type"text" name="thisPAGES_WRITTEN_RATEField" value=""></TD>
		<TD><input type"text" name="thisNUMBER_PAGES_GETField" value=""></TD>
		<TD><input type"text" name="thisHIT_RATEField" value=""></TD>
		<TD><input type"text" name="thisYOUNG_MAKE_PER_THOUSAND_GETSField" value=""></TD>
		<TD><input type"text" name="thisNOT_YOUNG_MAKE_PER_THOUSAND_GETSField" value=""></TD>
		<TD><input type"text" name="thisNUMBER_PAGES_READ_AHEADField" value=""></TD>
		<TD><input type"text" name="thisNUMBER_READ_AHEAD_EVICTEDField" value=""></TD>
		<TD><input type"text" name="thisREAD_AHEAD_RATEField" value=""></TD>
		<TD><input type"text" name="thisREAD_AHEAD_EVICTED_RATEField" value=""></TD>
		<TD><input type"text" name="thisLRU_IO_TOTALField" value=""></TD>
		<TD><input type"text" name="thisLRU_IO_CURRENTField" value=""></TD>
		<TD><input type"text" name="thisUNCOMPRESS_TOTALField" value=""></TD>
		<TD><input type"text" name="thisUNCOMPRESS_CURRENTField" value=""></TD>
	<TD COLSPAN=2><input type="submit" name="Insert" Value="Insert Record"> </TD>
	</TR>
</FORM>

<?
 } 
?>
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
if ($thisPOOL_IDFromForm == $thisPOOL_ID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisPOOL_IDField" value="<? echo $thisPOOL_ID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisPOOL_IDField" value="<? echo $thisPOOL_ID; ?>"></TD>
		<TD><input type"text" name="thisPOOL_SIZEField" value="<? echo $thisPOOL_SIZE; ?>"></TD>
		<TD><input type"text" name="thisFREE_BUFFERSField" value="<? echo $thisFREE_BUFFERS; ?>"></TD>
		<TD><input type"text" name="thisDATABASE_PAGESField" value="<? echo $thisDATABASE_PAGES; ?>"></TD>
		<TD><input type"text" name="thisOLD_DATABASE_PAGESField" value="<? echo $thisOLD_DATABASE_PAGES; ?>"></TD>
		<TD><input type"text" name="thisMODIFIED_DATABASE_PAGESField" value="<? echo $thisMODIFIED_DATABASE_PAGES; ?>"></TD>
		<TD><input type"text" name="thisPENDING_DECOMPRESSField" value="<? echo $thisPENDING_DECOMPRESS; ?>"></TD>
		<TD><input type"text" name="thisPENDING_READSField" value="<? echo $thisPENDING_READS; ?>"></TD>
		<TD><input type"text" name="thisPENDING_FLUSH_LRUField" value="<? echo $thisPENDING_FLUSH_LRU; ?>"></TD>
		<TD><input type"text" name="thisPENDING_FLUSH_LISTField" value="<? echo $thisPENDING_FLUSH_LIST; ?>"></TD>
		<TD><input type"text" name="thisPAGES_MADE_YOUNGField" value="<? echo $thisPAGES_MADE_YOUNG; ?>"></TD>
		<TD><input type"text" name="thisPAGES_NOT_MADE_YOUNGField" value="<? echo $thisPAGES_NOT_MADE_YOUNG; ?>"></TD>
		<TD><input type"text" name="thisPAGES_MADE_YOUNG_RATEField" value="<? echo $thisPAGES_MADE_YOUNG_RATE; ?>"></TD>
		<TD><input type"text" name="thisPAGES_MADE_NOT_YOUNG_RATEField" value="<? echo $thisPAGES_MADE_NOT_YOUNG_RATE; ?>"></TD>
		<TD><input type"text" name="thisNUMBER_PAGES_READField" value="<? echo $thisNUMBER_PAGES_READ; ?>"></TD>
		<TD><input type"text" name="thisNUMBER_PAGES_CREATEDField" value="<? echo $thisNUMBER_PAGES_CREATED; ?>"></TD>
		<TD><input type"text" name="thisNUMBER_PAGES_WRITTENField" value="<? echo $thisNUMBER_PAGES_WRITTEN; ?>"></TD>
		<TD><input type"text" name="thisPAGES_READ_RATEField" value="<? echo $thisPAGES_READ_RATE; ?>"></TD>
		<TD><input type"text" name="thisPAGES_CREATE_RATEField" value="<? echo $thisPAGES_CREATE_RATE; ?>"></TD>
		<TD><input type"text" name="thisPAGES_WRITTEN_RATEField" value="<? echo $thisPAGES_WRITTEN_RATE; ?>"></TD>
		<TD><input type"text" name="thisNUMBER_PAGES_GETField" value="<? echo $thisNUMBER_PAGES_GET; ?>"></TD>
		<TD><input type"text" name="thisHIT_RATEField" value="<? echo $thisHIT_RATE; ?>"></TD>
		<TD><input type"text" name="thisYOUNG_MAKE_PER_THOUSAND_GETSField" value="<? echo $thisYOUNG_MAKE_PER_THOUSAND_GETS; ?>"></TD>
		<TD><input type"text" name="thisNOT_YOUNG_MAKE_PER_THOUSAND_GETSField" value="<? echo $thisNOT_YOUNG_MAKE_PER_THOUSAND_GETS; ?>"></TD>
		<TD><input type"text" name="thisNUMBER_PAGES_READ_AHEADField" value="<? echo $thisNUMBER_PAGES_READ_AHEAD; ?>"></TD>
		<TD><input type"text" name="thisNUMBER_READ_AHEAD_EVICTEDField" value="<? echo $thisNUMBER_READ_AHEAD_EVICTED; ?>"></TD>
		<TD><input type"text" name="thisREAD_AHEAD_RATEField" value="<? echo $thisREAD_AHEAD_RATE; ?>"></TD>
		<TD><input type"text" name="thisREAD_AHEAD_EVICTED_RATEField" value="<? echo $thisREAD_AHEAD_EVICTED_RATE; ?>"></TD>
		<TD><input type"text" name="thisLRU_IO_TOTALField" value="<? echo $thisLRU_IO_TOTAL; ?>"></TD>
		<TD><input type"text" name="thisLRU_IO_CURRENTField" value="<? echo $thisLRU_IO_CURRENT; ?>"></TD>
		<TD><input type"text" name="thisUNCOMPRESS_TOTALField" value="<? echo $thisUNCOMPRESS_TOTAL; ?>"></TD>
		<TD><input type"text" name="thisUNCOMPRESS_CURRENTField" value="<? echo $thisUNCOMPRESS_CURRENT; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
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
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisPOOL_IDField=<? echo $thisPOOL_ID; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisPOOL_IDField=<? echo $thisPOOL_ID; ?>">Delete</a></TD>
	</TR>

<?
}
?>
<?
		$i++;

	} // end while loop
?>
</TABLE>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="EnterNew">
<input type="Submit" name="submit" value="Insert New Record">
</FORM>


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