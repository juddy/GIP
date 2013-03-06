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

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>POOL_ID : </b></td>
	<td><? echo $thisPOOL_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LRU_POSITION : </b></td>
	<td><? echo $thisLRU_POSITION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SPACE : </b></td>
	<td><? echo $thisSPACE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PAGE_NUMBER : </b></td>
	<td><? echo $thisPAGE_NUMBER; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PAGE_TYPE : </b></td>
	<td><? echo $thisPAGE_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>FLUSH_TYPE : </b></td>
	<td><? echo $thisFLUSH_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>FIX_COUNT : </b></td>
	<td><? echo $thisFIX_COUNT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>IS_HASHED : </b></td>
	<td><? echo $thisIS_HASHED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>NEWEST_MODIFICATION : </b></td>
	<td><? echo $thisNEWEST_MODIFICATION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>OLDEST_MODIFICATION : </b></td>
	<td><? echo $thisOLDEST_MODIFICATION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ACCESS_TIME : </b></td>
	<td><? echo $thisACCESS_TIME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLE_NAME : </b></td>
	<td><? echo $thisTABLE_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>INDEX_NAME : </b></td>
	<td><? echo $thisINDEX_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>NUMBER_RECORDS : </b></td>
	<td><? echo $thisNUMBER_RECORDS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATA_SIZE : </b></td>
	<td><? echo $thisDATA_SIZE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COMPRESSED_SIZE : </b></td>
	<td><? echo $thisCOMPRESSED_SIZE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COMPRESSED : </b></td>
	<td><? echo $thisCOMPRESSED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>IO_FIX : </b></td>
	<td><? echo $thisIO_FIX; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>IS_OLD : </b></td>
	<td><? echo $thisIS_OLD; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>FREE_PAGE_CLOCK : </b></td>
	<td><? echo $thisFREE_PAGE_CLOCK; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="innodb_buffer_page_lruEnterForm" method="POST" action="deleteINNODB_BUFFER_PAGE_LRU.php">
<input type="hidden" name="thisPOOL_IDField" value="<? echo $thisPOOL_ID; ?>">
<input type="submit" name="submitConfirmDeleteINNODB_BUFFER_PAGE_LRUForm" value="Delete  from INNODB_BUFFER_PAGE_LRU">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>