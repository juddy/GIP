<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisTABLE_TYPE = addslashes($_REQUEST['thisTABLE_TYPEField']);
	$thisENGINE = addslashes($_REQUEST['thisENGINEField']);
	$thisVERSION = addslashes($_REQUEST['thisVERSIONField']);
	$thisROW_FORMAT = addslashes($_REQUEST['thisROW_FORMATField']);
	$thisTABLE_ROWS = addslashes($_REQUEST['thisTABLE_ROWSField']);
	$thisAVG_ROW_LENGTH = addslashes($_REQUEST['thisAVG_ROW_LENGTHField']);
	$thisDATA_LENGTH = addslashes($_REQUEST['thisDATA_LENGTHField']);
	$thisMAX_DATA_LENGTH = addslashes($_REQUEST['thisMAX_DATA_LENGTHField']);
	$thisINDEX_LENGTH = addslashes($_REQUEST['thisINDEX_LENGTHField']);
	$thisDATA_FREE = addslashes($_REQUEST['thisDATA_FREEField']);
	$thisAUTO_INCREMENT = addslashes($_REQUEST['thisAUTO_INCREMENTField']);
	$thisCREATE_TIME = addslashes($_REQUEST['thisCREATE_TIMEField']);
	$thisUPDATE_TIME = addslashes($_REQUEST['thisUPDATE_TIMEField']);
	$thisCHECK_TIME = addslashes($_REQUEST['thisCHECK_TIMEField']);
	$thisTABLE_COLLATION = addslashes($_REQUEST['thisTABLE_COLLATIONField']);
	$thisCHECKSUM = addslashes($_REQUEST['thisCHECKSUMField']);
	$thisCREATE_OPTIONS = addslashes($_REQUEST['thisCREATE_OPTIONSField']);
	$thisTABLE_COMMENT = addslashes($_REQUEST['thisTABLE_COMMENTField']);

?>
<?
$sql = "UPDATE TABLES SET TABLE_CATALOG = '$thisTABLE_CATALOG' , TABLE_SCHEMA = '$thisTABLE_SCHEMA' , TABLE_NAME = '$thisTABLE_NAME' , TABLE_TYPE = '$thisTABLE_TYPE' , ENGINE = '$thisENGINE' , VERSION = '$thisVERSION' , ROW_FORMAT = '$thisROW_FORMAT' , TABLE_ROWS = '$thisTABLE_ROWS' , AVG_ROW_LENGTH = '$thisAVG_ROW_LENGTH' , DATA_LENGTH = '$thisDATA_LENGTH' , MAX_DATA_LENGTH = '$thisMAX_DATA_LENGTH' , INDEX_LENGTH = '$thisINDEX_LENGTH' , DATA_FREE = '$thisDATA_FREE' , AUTO_INCREMENT = '$thisAUTO_INCREMENT' , CREATE_TIME = '$thisCREATE_TIME' , UPDATE_TIME = '$thisUPDATE_TIME' , CHECK_TIME = '$thisCHECK_TIME' , TABLE_COLLATION = '$thisTABLE_COLLATION' , CHECKSUM = '$thisCHECKSUM' , CREATE_OPTIONS = '$thisCREATE_OPTIONS' , TABLE_COMMENT = '$thisTABLE_COMMENT'  WHERE TABLE_CATALOG = '$thisTABLE_CATALOG'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>TABLE_CATALOG : </b></td>
	<td><? echo $thisTABLE_CATALOG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLE_SCHEMA : </b></td>
	<td><? echo $thisTABLE_SCHEMA; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLE_NAME : </b></td>
	<td><? echo $thisTABLE_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLE_TYPE : </b></td>
	<td><? echo $thisTABLE_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ENGINE : </b></td>
	<td><? echo $thisENGINE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>VERSION : </b></td>
	<td><? echo $thisVERSION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ROW_FORMAT : </b></td>
	<td><? echo $thisROW_FORMAT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLE_ROWS : </b></td>
	<td><? echo $thisTABLE_ROWS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>AVG_ROW_LENGTH : </b></td>
	<td><? echo $thisAVG_ROW_LENGTH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATA_LENGTH : </b></td>
	<td><? echo $thisDATA_LENGTH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>MAX_DATA_LENGTH : </b></td>
	<td><? echo $thisMAX_DATA_LENGTH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>INDEX_LENGTH : </b></td>
	<td><? echo $thisINDEX_LENGTH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATA_FREE : </b></td>
	<td><? echo $thisDATA_FREE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>AUTO_INCREMENT : </b></td>
	<td><? echo $thisAUTO_INCREMENT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CREATE_TIME : </b></td>
	<td><? echo $thisCREATE_TIME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>UPDATE_TIME : </b></td>
	<td><? echo $thisUPDATE_TIME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CHECK_TIME : </b></td>
	<td><? echo $thisCHECK_TIME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLE_COLLATION : </b></td>
	<td><? echo $thisTABLE_COLLATION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CHECKSUM : </b></td>
	<td><? echo $thisCHECKSUM; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CREATE_OPTIONS : </b></td>
	<td><? echo $thisCREATE_OPTIONS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLE_COMMENT : </b></td>
	<td><? echo $thisTABLE_COMMENT; ?></td>
</tr>
</table>
<br><br><a href="listTABLES.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>