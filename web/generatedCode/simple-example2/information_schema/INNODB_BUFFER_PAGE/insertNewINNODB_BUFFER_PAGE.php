<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisPOOL_ID = addslashes($_REQUEST['thisPOOL_IDField']);
	$thisBLOCK_ID = addslashes($_REQUEST['thisBLOCK_IDField']);
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
	$thisPAGE_STATE = addslashes($_REQUEST['thisPAGE_STATEField']);
	$thisIO_FIX = addslashes($_REQUEST['thisIO_FIXField']);
	$thisIS_OLD = addslashes($_REQUEST['thisIS_OLDField']);
	$thisFREE_PAGE_CLOCK = addslashes($_REQUEST['thisFREE_PAGE_CLOCKField']);

?>
<?
$sqlQuery = "INSERT INTO INNODB_BUFFER_PAGE (POOL_ID , BLOCK_ID , SPACE , PAGE_NUMBER , PAGE_TYPE , FLUSH_TYPE , FIX_COUNT , IS_HASHED , NEWEST_MODIFICATION , OLDEST_MODIFICATION , ACCESS_TIME , TABLE_NAME , INDEX_NAME , NUMBER_RECORDS , DATA_SIZE , COMPRESSED_SIZE , PAGE_STATE , IO_FIX , IS_OLD , FREE_PAGE_CLOCK ) VALUES ('$thisPOOL_ID' , '$thisBLOCK_ID' , '$thisSPACE' , '$thisPAGE_NUMBER' , '$thisPAGE_TYPE' , '$thisFLUSH_TYPE' , '$thisFIX_COUNT' , '$thisIS_HASHED' , '$thisNEWEST_MODIFICATION' , '$thisOLDEST_MODIFICATION' , '$thisACCESS_TIME' , '$thisTABLE_NAME' , '$thisINDEX_NAME' , '$thisNUMBER_RECORDS' , '$thisDATA_SIZE' , '$thisCOMPRESSED_SIZE' , '$thisPAGE_STATE' , '$thisIO_FIX' , '$thisIS_OLD' , '$thisFREE_PAGE_CLOCK' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>POOL_ID : </b></td>
	<td><? echo $thisPOOL_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>BLOCK_ID : </b></td>
	<td><? echo $thisBLOCK_ID; ?></td>
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
	<td align="right"><b>PAGE_STATE : </b></td>
	<td><? echo $thisPAGE_STATE; ?></td>
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