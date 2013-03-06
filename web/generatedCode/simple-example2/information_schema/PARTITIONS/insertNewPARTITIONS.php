<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisPARTITION_NAME = addslashes($_REQUEST['thisPARTITION_NAMEField']);
	$thisSUBPARTITION_NAME = addslashes($_REQUEST['thisSUBPARTITION_NAMEField']);
	$thisPARTITION_ORDINAL_POSITION = addslashes($_REQUEST['thisPARTITION_ORDINAL_POSITIONField']);
	$thisSUBPARTITION_ORDINAL_POSITION = addslashes($_REQUEST['thisSUBPARTITION_ORDINAL_POSITIONField']);
	$thisPARTITION_METHOD = addslashes($_REQUEST['thisPARTITION_METHODField']);
	$thisSUBPARTITION_METHOD = addslashes($_REQUEST['thisSUBPARTITION_METHODField']);
	$thisPARTITION_EXPRESSION = addslashes($_REQUEST['thisPARTITION_EXPRESSIONField']);
	$thisSUBPARTITION_EXPRESSION = addslashes($_REQUEST['thisSUBPARTITION_EXPRESSIONField']);
	$thisPARTITION_DESCRIPTION = addslashes($_REQUEST['thisPARTITION_DESCRIPTIONField']);
	$thisTABLE_ROWS = addslashes($_REQUEST['thisTABLE_ROWSField']);
	$thisAVG_ROW_LENGTH = addslashes($_REQUEST['thisAVG_ROW_LENGTHField']);
	$thisDATA_LENGTH = addslashes($_REQUEST['thisDATA_LENGTHField']);
	$thisMAX_DATA_LENGTH = addslashes($_REQUEST['thisMAX_DATA_LENGTHField']);
	$thisINDEX_LENGTH = addslashes($_REQUEST['thisINDEX_LENGTHField']);
	$thisDATA_FREE = addslashes($_REQUEST['thisDATA_FREEField']);
	$thisCREATE_TIME = addslashes($_REQUEST['thisCREATE_TIMEField']);
	$thisUPDATE_TIME = addslashes($_REQUEST['thisUPDATE_TIMEField']);
	$thisCHECK_TIME = addslashes($_REQUEST['thisCHECK_TIMEField']);
	$thisCHECKSUM = addslashes($_REQUEST['thisCHECKSUMField']);
	$thisPARTITION_COMMENT = addslashes($_REQUEST['thisPARTITION_COMMENTField']);
	$thisNODEGROUP = addslashes($_REQUEST['thisNODEGROUPField']);
	$thisTABLESPACE_NAME = addslashes($_REQUEST['thisTABLESPACE_NAMEField']);

?>
<?
$sqlQuery = "INSERT INTO PARTITIONS (TABLE_CATALOG , TABLE_SCHEMA , TABLE_NAME , PARTITION_NAME , SUBPARTITION_NAME , PARTITION_ORDINAL_POSITION , SUBPARTITION_ORDINAL_POSITION , PARTITION_METHOD , SUBPARTITION_METHOD , PARTITION_EXPRESSION , SUBPARTITION_EXPRESSION , PARTITION_DESCRIPTION , TABLE_ROWS , AVG_ROW_LENGTH , DATA_LENGTH , MAX_DATA_LENGTH , INDEX_LENGTH , DATA_FREE , CREATE_TIME , UPDATE_TIME , CHECK_TIME , CHECKSUM , PARTITION_COMMENT , NODEGROUP , TABLESPACE_NAME ) VALUES ('$thisTABLE_CATALOG' , '$thisTABLE_SCHEMA' , '$thisTABLE_NAME' , '$thisPARTITION_NAME' , '$thisSUBPARTITION_NAME' , '$thisPARTITION_ORDINAL_POSITION' , '$thisSUBPARTITION_ORDINAL_POSITION' , '$thisPARTITION_METHOD' , '$thisSUBPARTITION_METHOD' , '$thisPARTITION_EXPRESSION' , '$thisSUBPARTITION_EXPRESSION' , '$thisPARTITION_DESCRIPTION' , '$thisTABLE_ROWS' , '$thisAVG_ROW_LENGTH' , '$thisDATA_LENGTH' , '$thisMAX_DATA_LENGTH' , '$thisINDEX_LENGTH' , '$thisDATA_FREE' , '$thisCREATE_TIME' , '$thisUPDATE_TIME' , '$thisCHECK_TIME' , '$thisCHECKSUM' , '$thisPARTITION_COMMENT' , '$thisNODEGROUP' , '$thisTABLESPACE_NAME' )";
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
	<td align="right"><b>PARTITION_NAME : </b></td>
	<td><? echo $thisPARTITION_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SUBPARTITION_NAME : </b></td>
	<td><? echo $thisSUBPARTITION_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PARTITION_ORDINAL_POSITION : </b></td>
	<td><? echo $thisPARTITION_ORDINAL_POSITION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SUBPARTITION_ORDINAL_POSITION : </b></td>
	<td><? echo $thisSUBPARTITION_ORDINAL_POSITION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PARTITION_METHOD : </b></td>
	<td><? echo $thisPARTITION_METHOD; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SUBPARTITION_METHOD : </b></td>
	<td><? echo $thisSUBPARTITION_METHOD; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PARTITION_EXPRESSION : </b></td>
	<td><? echo $thisPARTITION_EXPRESSION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SUBPARTITION_EXPRESSION : </b></td>
	<td><? echo $thisSUBPARTITION_EXPRESSION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PARTITION_DESCRIPTION : </b></td>
	<td><? echo $thisPARTITION_DESCRIPTION; ?></td>
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
	<td align="right"><b>CHECKSUM : </b></td>
	<td><? echo $thisCHECKSUM; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PARTITION_COMMENT : </b></td>
	<td><? echo $thisPARTITION_COMMENT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>NODEGROUP : </b></td>
	<td><? echo $thisNODEGROUP; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLESPACE_NAME : </b></td>
	<td><? echo $thisTABLESPACE_NAME; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>