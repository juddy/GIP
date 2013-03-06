<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
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

?>
<?
$sqlQuery = "INSERT INTO INNODB_BUFFER_POOL_STATS (POOL_ID , POOL_SIZE , FREE_BUFFERS , DATABASE_PAGES , OLD_DATABASE_PAGES , MODIFIED_DATABASE_PAGES , PENDING_DECOMPRESS , PENDING_READS , PENDING_FLUSH_LRU , PENDING_FLUSH_LIST , PAGES_MADE_YOUNG , PAGES_NOT_MADE_YOUNG , PAGES_MADE_YOUNG_RATE , PAGES_MADE_NOT_YOUNG_RATE , NUMBER_PAGES_READ , NUMBER_PAGES_CREATED , NUMBER_PAGES_WRITTEN , PAGES_READ_RATE , PAGES_CREATE_RATE , PAGES_WRITTEN_RATE , NUMBER_PAGES_GET , HIT_RATE , YOUNG_MAKE_PER_THOUSAND_GETS , NOT_YOUNG_MAKE_PER_THOUSAND_GETS , NUMBER_PAGES_READ_AHEAD , NUMBER_READ_AHEAD_EVICTED , READ_AHEAD_RATE , READ_AHEAD_EVICTED_RATE , LRU_IO_TOTAL , LRU_IO_CURRENT , UNCOMPRESS_TOTAL , UNCOMPRESS_CURRENT ) VALUES ('$thisPOOL_ID' , '$thisPOOL_SIZE' , '$thisFREE_BUFFERS' , '$thisDATABASE_PAGES' , '$thisOLD_DATABASE_PAGES' , '$thisMODIFIED_DATABASE_PAGES' , '$thisPENDING_DECOMPRESS' , '$thisPENDING_READS' , '$thisPENDING_FLUSH_LRU' , '$thisPENDING_FLUSH_LIST' , '$thisPAGES_MADE_YOUNG' , '$thisPAGES_NOT_MADE_YOUNG' , '$thisPAGES_MADE_YOUNG_RATE' , '$thisPAGES_MADE_NOT_YOUNG_RATE' , '$thisNUMBER_PAGES_READ' , '$thisNUMBER_PAGES_CREATED' , '$thisNUMBER_PAGES_WRITTEN' , '$thisPAGES_READ_RATE' , '$thisPAGES_CREATE_RATE' , '$thisPAGES_WRITTEN_RATE' , '$thisNUMBER_PAGES_GET' , '$thisHIT_RATE' , '$thisYOUNG_MAKE_PER_THOUSAND_GETS' , '$thisNOT_YOUNG_MAKE_PER_THOUSAND_GETS' , '$thisNUMBER_PAGES_READ_AHEAD' , '$thisNUMBER_READ_AHEAD_EVICTED' , '$thisREAD_AHEAD_RATE' , '$thisREAD_AHEAD_EVICTED_RATE' , '$thisLRU_IO_TOTAL' , '$thisLRU_IO_CURRENT' , '$thisUNCOMPRESS_TOTAL' , '$thisUNCOMPRESS_CURRENT' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>POOL_ID : </b></td>
	<td><? echo $thisPOOL_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>POOL_SIZE : </b></td>
	<td><? echo $thisPOOL_SIZE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>FREE_BUFFERS : </b></td>
	<td><? echo $thisFREE_BUFFERS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATABASE_PAGES : </b></td>
	<td><? echo $thisDATABASE_PAGES; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>OLD_DATABASE_PAGES : </b></td>
	<td><? echo $thisOLD_DATABASE_PAGES; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>MODIFIED_DATABASE_PAGES : </b></td>
	<td><? echo $thisMODIFIED_DATABASE_PAGES; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PENDING_DECOMPRESS : </b></td>
	<td><? echo $thisPENDING_DECOMPRESS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PENDING_READS : </b></td>
	<td><? echo $thisPENDING_READS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PENDING_FLUSH_LRU : </b></td>
	<td><? echo $thisPENDING_FLUSH_LRU; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PENDING_FLUSH_LIST : </b></td>
	<td><? echo $thisPENDING_FLUSH_LIST; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PAGES_MADE_YOUNG : </b></td>
	<td><? echo $thisPAGES_MADE_YOUNG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PAGES_NOT_MADE_YOUNG : </b></td>
	<td><? echo $thisPAGES_NOT_MADE_YOUNG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PAGES_MADE_YOUNG_RATE : </b></td>
	<td><? echo $thisPAGES_MADE_YOUNG_RATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PAGES_MADE_NOT_YOUNG_RATE : </b></td>
	<td><? echo $thisPAGES_MADE_NOT_YOUNG_RATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>NUMBER_PAGES_READ : </b></td>
	<td><? echo $thisNUMBER_PAGES_READ; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>NUMBER_PAGES_CREATED : </b></td>
	<td><? echo $thisNUMBER_PAGES_CREATED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>NUMBER_PAGES_WRITTEN : </b></td>
	<td><? echo $thisNUMBER_PAGES_WRITTEN; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PAGES_READ_RATE : </b></td>
	<td><? echo $thisPAGES_READ_RATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PAGES_CREATE_RATE : </b></td>
	<td><? echo $thisPAGES_CREATE_RATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PAGES_WRITTEN_RATE : </b></td>
	<td><? echo $thisPAGES_WRITTEN_RATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>NUMBER_PAGES_GET : </b></td>
	<td><? echo $thisNUMBER_PAGES_GET; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>HIT_RATE : </b></td>
	<td><? echo $thisHIT_RATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>YOUNG_MAKE_PER_THOUSAND_GETS : </b></td>
	<td><? echo $thisYOUNG_MAKE_PER_THOUSAND_GETS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>NOT_YOUNG_MAKE_PER_THOUSAND_GETS : </b></td>
	<td><? echo $thisNOT_YOUNG_MAKE_PER_THOUSAND_GETS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>NUMBER_PAGES_READ_AHEAD : </b></td>
	<td><? echo $thisNUMBER_PAGES_READ_AHEAD; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>NUMBER_READ_AHEAD_EVICTED : </b></td>
	<td><? echo $thisNUMBER_READ_AHEAD_EVICTED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>READ_AHEAD_RATE : </b></td>
	<td><? echo $thisREAD_AHEAD_RATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>READ_AHEAD_EVICTED_RATE : </b></td>
	<td><? echo $thisREAD_AHEAD_EVICTED_RATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LRU_IO_TOTAL : </b></td>
	<td><? echo $thisLRU_IO_TOTAL; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LRU_IO_CURRENT : </b></td>
	<td><? echo $thisLRU_IO_CURRENT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>UNCOMPRESS_TOTAL : </b></td>
	<td><? echo $thisUNCOMPRESS_TOTAL; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>UNCOMPRESS_CURRENT : </b></td>
	<td><? echo $thisUNCOMPRESS_CURRENT; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>