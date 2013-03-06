<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPOOL_ID = $_REQUEST['POOL_IDField']
?>
<?php
$sql = "SELECT   * FROM INNODB_BUFFER_POOL_STATS WHERE POOL_ID = '$thisPOOL_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
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

}
?>

<h2>Update INNODB_BUFFER_POOL_STATS</h2>
<form name="innodb_buffer_pool_statsUpdateForm" method="POST" action="updateInnodb_buffer_pool_stats.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> POOL_ID :  </b> </td>
		<td> <input type="text" name="thisPOOL_IDField" size="20" value="<? echo $thisPOOL_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> POOL_SIZE :  </b> </td>
		<td> <input type="text" name="thisPOOL_SIZEField" size="20" value="<? echo $thisPOOL_SIZE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FREE_BUFFERS :  </b> </td>
		<td> <input type="text" name="thisFREE_BUFFERSField" size="20" value="<? echo $thisFREE_BUFFERS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATABASE_PAGES :  </b> </td>
		<td> <input type="text" name="thisDATABASE_PAGESField" size="20" value="<? echo $thisDATABASE_PAGES; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> OLD_DATABASE_PAGES :  </b> </td>
		<td> <input type="text" name="thisOLD_DATABASE_PAGESField" size="20" value="<? echo $thisOLD_DATABASE_PAGES; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> MODIFIED_DATABASE_PAGES :  </b> </td>
		<td> <input type="text" name="thisMODIFIED_DATABASE_PAGESField" size="20" value="<? echo $thisMODIFIED_DATABASE_PAGES; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PENDING_DECOMPRESS :  </b> </td>
		<td> <input type="text" name="thisPENDING_DECOMPRESSField" size="20" value="<? echo $thisPENDING_DECOMPRESS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PENDING_READS :  </b> </td>
		<td> <input type="text" name="thisPENDING_READSField" size="20" value="<? echo $thisPENDING_READS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PENDING_FLUSH_LRU :  </b> </td>
		<td> <input type="text" name="thisPENDING_FLUSH_LRUField" size="20" value="<? echo $thisPENDING_FLUSH_LRU; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PENDING_FLUSH_LIST :  </b> </td>
		<td> <input type="text" name="thisPENDING_FLUSH_LISTField" size="20" value="<? echo $thisPENDING_FLUSH_LIST; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGES_MADE_YOUNG :  </b> </td>
		<td> <input type="text" name="thisPAGES_MADE_YOUNGField" size="20" value="<? echo $thisPAGES_MADE_YOUNG; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGES_NOT_MADE_YOUNG :  </b> </td>
		<td> <input type="text" name="thisPAGES_NOT_MADE_YOUNGField" size="20" value="<? echo $thisPAGES_NOT_MADE_YOUNG; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGES_MADE_YOUNG_RATE :  </b> </td>
		<td> <input type="text" name="thisPAGES_MADE_YOUNG_RATEField" size="20" value="<? echo $thisPAGES_MADE_YOUNG_RATE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGES_MADE_NOT_YOUNG_RATE :  </b> </td>
		<td> <input type="text" name="thisPAGES_MADE_NOT_YOUNG_RATEField" size="20" value="<? echo $thisPAGES_MADE_NOT_YOUNG_RATE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NUMBER_PAGES_READ :  </b> </td>
		<td> <input type="text" name="thisNUMBER_PAGES_READField" size="20" value="<? echo $thisNUMBER_PAGES_READ; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NUMBER_PAGES_CREATED :  </b> </td>
		<td> <input type="text" name="thisNUMBER_PAGES_CREATEDField" size="20" value="<? echo $thisNUMBER_PAGES_CREATED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NUMBER_PAGES_WRITTEN :  </b> </td>
		<td> <input type="text" name="thisNUMBER_PAGES_WRITTENField" size="20" value="<? echo $thisNUMBER_PAGES_WRITTEN; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGES_READ_RATE :  </b> </td>
		<td> <input type="text" name="thisPAGES_READ_RATEField" size="20" value="<? echo $thisPAGES_READ_RATE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGES_CREATE_RATE :  </b> </td>
		<td> <input type="text" name="thisPAGES_CREATE_RATEField" size="20" value="<? echo $thisPAGES_CREATE_RATE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGES_WRITTEN_RATE :  </b> </td>
		<td> <input type="text" name="thisPAGES_WRITTEN_RATEField" size="20" value="<? echo $thisPAGES_WRITTEN_RATE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NUMBER_PAGES_GET :  </b> </td>
		<td> <input type="text" name="thisNUMBER_PAGES_GETField" size="20" value="<? echo $thisNUMBER_PAGES_GET; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> HIT_RATE :  </b> </td>
		<td> <input type="text" name="thisHIT_RATEField" size="20" value="<? echo $thisHIT_RATE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> YOUNG_MAKE_PER_THOUSAND_GETS :  </b> </td>
		<td> <input type="text" name="thisYOUNG_MAKE_PER_THOUSAND_GETSField" size="20" value="<? echo $thisYOUNG_MAKE_PER_THOUSAND_GETS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NOT_YOUNG_MAKE_PER_THOUSAND_GETS :  </b> </td>
		<td> <input type="text" name="thisNOT_YOUNG_MAKE_PER_THOUSAND_GETSField" size="20" value="<? echo $thisNOT_YOUNG_MAKE_PER_THOUSAND_GETS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NUMBER_PAGES_READ_AHEAD :  </b> </td>
		<td> <input type="text" name="thisNUMBER_PAGES_READ_AHEADField" size="20" value="<? echo $thisNUMBER_PAGES_READ_AHEAD; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NUMBER_READ_AHEAD_EVICTED :  </b> </td>
		<td> <input type="text" name="thisNUMBER_READ_AHEAD_EVICTEDField" size="20" value="<? echo $thisNUMBER_READ_AHEAD_EVICTED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> READ_AHEAD_RATE :  </b> </td>
		<td> <input type="text" name="thisREAD_AHEAD_RATEField" size="20" value="<? echo $thisREAD_AHEAD_RATE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> READ_AHEAD_EVICTED_RATE :  </b> </td>
		<td> <input type="text" name="thisREAD_AHEAD_EVICTED_RATEField" size="20" value="<? echo $thisREAD_AHEAD_EVICTED_RATE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LRU_IO_TOTAL :  </b> </td>
		<td> <input type="text" name="thisLRU_IO_TOTALField" size="20" value="<? echo $thisLRU_IO_TOTAL; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LRU_IO_CURRENT :  </b> </td>
		<td> <input type="text" name="thisLRU_IO_CURRENTField" size="20" value="<? echo $thisLRU_IO_CURRENT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> UNCOMPRESS_TOTAL :  </b> </td>
		<td> <input type="text" name="thisUNCOMPRESS_TOTALField" size="20" value="<? echo $thisUNCOMPRESS_TOTAL; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> UNCOMPRESS_CURRENT :  </b> </td>
		<td> <input type="text" name="thisUNCOMPRESS_CURRENTField" size="20" value="<? echo $thisUNCOMPRESS_CURRENT; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateINNODB_BUFFER_POOL_STATSForm" value="Update INNODB_BUFFER_POOL_STATS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>