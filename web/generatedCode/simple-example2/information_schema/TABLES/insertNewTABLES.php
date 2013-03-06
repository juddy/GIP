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
$sqlQuery = "INSERT INTO TABLES (TABLE_CATALOG , TABLE_SCHEMA , TABLE_NAME , TABLE_TYPE , ENGINE , VERSION , ROW_FORMAT , TABLE_ROWS , AVG_ROW_LENGTH , DATA_LENGTH , MAX_DATA_LENGTH , INDEX_LENGTH , DATA_FREE , AUTO_INCREMENT , CREATE_TIME , UPDATE_TIME , CHECK_TIME , TABLE_COLLATION , CHECKSUM , CREATE_OPTIONS , TABLE_COMMENT ) VALUES ('$thisTABLE_CATALOG' , '$thisTABLE_SCHEMA' , '$thisTABLE_NAME' , '$thisTABLE_TYPE' , '$thisENGINE' , '$thisVERSION' , '$thisROW_FORMAT' , '$thisTABLE_ROWS' , '$thisAVG_ROW_LENGTH' , '$thisDATA_LENGTH' , '$thisMAX_DATA_LENGTH' , '$thisINDEX_LENGTH' , '$thisDATA_FREE' , '$thisAUTO_INCREMENT' , '$thisCREATE_TIME' , '$thisUPDATE_TIME' , '$thisCHECK_TIME' , '$thisTABLE_COLLATION' , '$thisCHECKSUM' , '$thisCREATE_OPTIONS' , '$thisTABLE_COMMENT' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

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

<?php
include_once("../common/footer.php");
?>