<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisPOOL_ID = addslashes($_REQUEST['thisPOOL_IDField']);
	$thisLRU_POSITION = addslashes($_REQUEST['thisLRU_POSITIONField']);
	$thisSPACE = addslashes($_REQUEST['thisSPACEField']);
	$thisPAGE_NUMBER = addslashes($_REQUEST['thisPAGE_NUMBERField']);
	$thisPAGE_TYPE = addslashes($_REQUEST['thisPAGE_TYPEField']);
	$thisFLUSH_TYPE = addslashes($_REQUEST['thisFLUSH_TYPEField']);
	$thisFIX_COUNT = addslashes($_REQUEST['thisFIX_COUNTField']);
	$thisIS_HASHED = addslashes($_REQUEST['thisIS_HASHEDField']);
	$thisNEWEST_MODIFICATION = addslashes($_REQUEST['thisNEWEST_MODIFICATIONField']);
	$thisOLDEST_MODIFICATION = addslashes($_REQUEST['thisOLDEST_MODIFICATIONField']);
	$thisACCESS_TIME = addslashes($_REQUEST['thisACCESS_TIMEField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisINDEX_NAME = addslashes($_REQUEST['thisINDEX_NAMEField']);
	$thisNUMBER_RECORDS = addslashes($_REQUEST['thisNUMBER_RECORDSField']);
	$thisDATA_SIZE = addslashes($_REQUEST['thisDATA_SIZEField']);
	$thisCOMPRESSED_SIZE = addslashes($_REQUEST['thisCOMPRESSED_SIZEField']);
	$thisCOMPRESSED = addslashes($_REQUEST['thisCOMPRESSEDField']);
	$thisIO_FIX = addslashes($_REQUEST['thisIO_FIXField']);
	$thisIS_OLD = addslashes($_REQUEST['thisIS_OLDField']);
	$thisFREE_PAGE_CLOCK = addslashes($_REQUEST['thisFREE_PAGE_CLOCKField']);

?>
<?
$sql = "DELETE FROM INNODB_BUFFER_PAGE_LRU WHERE POOL_ID = '$thisPOOL_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

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

<?php
include_once("../common/footer.php");
?>