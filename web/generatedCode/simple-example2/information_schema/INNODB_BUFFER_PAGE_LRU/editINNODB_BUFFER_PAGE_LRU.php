<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPOOL_ID = $_REQUEST['POOL_IDField']
?>
<?php
$sql = "SELECT   * FROM INNODB_BUFFER_PAGE_LRU WHERE POOL_ID = '$thisPOOL_ID'";
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
	$thisLRU_POSITION = MYSQL_RESULT($result,$i,"LRU_POSITION");
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
	$thisCOMPRESSED = MYSQL_RESULT($result,$i,"COMPRESSED");
	$thisIO_FIX = MYSQL_RESULT($result,$i,"IO_FIX");
	$thisIS_OLD = MYSQL_RESULT($result,$i,"IS_OLD");
	$thisFREE_PAGE_CLOCK = MYSQL_RESULT($result,$i,"FREE_PAGE_CLOCK");

}
?>

<h2>Update INNODB_BUFFER_PAGE_LRU</h2>
<form name="innodb_buffer_page_lruUpdateForm" method="POST" action="updateInnodb_buffer_page_lru.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> POOL_ID :  </b> </td>
		<td> <input type="text" name="thisPOOL_IDField" size="20" value="<? echo $thisPOOL_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LRU_POSITION :  </b> </td>
		<td> <input type="text" name="thisLRU_POSITIONField" size="20" value="<? echo $thisLRU_POSITION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SPACE :  </b> </td>
		<td> <input type="text" name="thisSPACEField" size="20" value="<? echo $thisSPACE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGE_NUMBER :  </b> </td>
		<td> <input type="text" name="thisPAGE_NUMBERField" size="20" value="<? echo $thisPAGE_NUMBER; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGE_TYPE :  </b> </td>
		<td> <input type="text" name="thisPAGE_TYPEField" size="20" value="<? echo $thisPAGE_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FLUSH_TYPE :  </b> </td>
		<td> <input type="text" name="thisFLUSH_TYPEField" size="20" value="<? echo $thisFLUSH_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FIX_COUNT :  </b> </td>
		<td> <input type="text" name="thisFIX_COUNTField" size="20" value="<? echo $thisFIX_COUNT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> IS_HASHED :  </b> </td>
		<td> <input type="text" name="thisIS_HASHEDField" size="20" value="<? echo $thisIS_HASHED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NEWEST_MODIFICATION :  </b> </td>
		<td> <input type="text" name="thisNEWEST_MODIFICATIONField" size="20" value="<? echo $thisNEWEST_MODIFICATION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> OLDEST_MODIFICATION :  </b> </td>
		<td> <input type="text" name="thisOLDEST_MODIFICATIONField" size="20" value="<? echo $thisOLDEST_MODIFICATION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACCESS_TIME :  </b> </td>
		<td> <input type="text" name="thisACCESS_TIMEField" size="20" value="<? echo $thisACCESS_TIME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_NAME :  </b> </td>
		<td> <input type="text" name="thisTABLE_NAMEField" size="20" value="<? echo $thisTABLE_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INDEX_NAME :  </b> </td>
		<td> <input type="text" name="thisINDEX_NAMEField" size="20" value="<? echo $thisINDEX_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NUMBER_RECORDS :  </b> </td>
		<td> <input type="text" name="thisNUMBER_RECORDSField" size="20" value="<? echo $thisNUMBER_RECORDS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATA_SIZE :  </b> </td>
		<td> <input type="text" name="thisDATA_SIZEField" size="20" value="<? echo $thisDATA_SIZE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COMPRESSED_SIZE :  </b> </td>
		<td> <input type="text" name="thisCOMPRESSED_SIZEField" size="20" value="<? echo $thisCOMPRESSED_SIZE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COMPRESSED :  </b> </td>
		<td> <input type="text" name="thisCOMPRESSEDField" size="20" value="<? echo $thisCOMPRESSED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> IO_FIX :  </b> </td>
		<td> <input type="text" name="thisIO_FIXField" size="20" value="<? echo $thisIO_FIX; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> IS_OLD :  </b> </td>
		<td> <input type="text" name="thisIS_OLDField" size="20" value="<? echo $thisIS_OLD; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FREE_PAGE_CLOCK :  </b> </td>
		<td> <input type="text" name="thisFREE_PAGE_CLOCKField" size="20" value="<? echo $thisFREE_PAGE_CLOCK; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateINNODB_BUFFER_PAGE_LRUForm" value="Update INNODB_BUFFER_PAGE_LRU">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>