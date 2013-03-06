<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisTABLE_CATALOG = $_REQUEST['TABLE_CATALOGField']
?>
<?php
$sql = "SELECT   * FROM PARTITIONS WHERE TABLE_CATALOG = '$thisTABLE_CATALOG'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisTABLE_CATALOG = MYSQL_RESULT($result,$i,"TABLE_CATALOG");
	$thisTABLE_SCHEMA = MYSQL_RESULT($result,$i,"TABLE_SCHEMA");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisPARTITION_NAME = MYSQL_RESULT($result,$i,"PARTITION_NAME");
	$thisSUBPARTITION_NAME = MYSQL_RESULT($result,$i,"SUBPARTITION_NAME");
	$thisPARTITION_ORDINAL_POSITION = MYSQL_RESULT($result,$i,"PARTITION_ORDINAL_POSITION");
	$thisSUBPARTITION_ORDINAL_POSITION = MYSQL_RESULT($result,$i,"SUBPARTITION_ORDINAL_POSITION");
	$thisPARTITION_METHOD = MYSQL_RESULT($result,$i,"PARTITION_METHOD");
	$thisSUBPARTITION_METHOD = MYSQL_RESULT($result,$i,"SUBPARTITION_METHOD");
	$thisPARTITION_EXPRESSION = MYSQL_RESULT($result,$i,"PARTITION_EXPRESSION");
	$thisSUBPARTITION_EXPRESSION = MYSQL_RESULT($result,$i,"SUBPARTITION_EXPRESSION");
	$thisPARTITION_DESCRIPTION = MYSQL_RESULT($result,$i,"PARTITION_DESCRIPTION");
	$thisTABLE_ROWS = MYSQL_RESULT($result,$i,"TABLE_ROWS");
	$thisAVG_ROW_LENGTH = MYSQL_RESULT($result,$i,"AVG_ROW_LENGTH");
	$thisDATA_LENGTH = MYSQL_RESULT($result,$i,"DATA_LENGTH");
	$thisMAX_DATA_LENGTH = MYSQL_RESULT($result,$i,"MAX_DATA_LENGTH");
	$thisINDEX_LENGTH = MYSQL_RESULT($result,$i,"INDEX_LENGTH");
	$thisDATA_FREE = MYSQL_RESULT($result,$i,"DATA_FREE");
	$thisCREATE_TIME = MYSQL_RESULT($result,$i,"CREATE_TIME");
	$thisUPDATE_TIME = MYSQL_RESULT($result,$i,"UPDATE_TIME");
	$thisCHECK_TIME = MYSQL_RESULT($result,$i,"CHECK_TIME");
	$thisCHECKSUM = MYSQL_RESULT($result,$i,"CHECKSUM");
	$thisPARTITION_COMMENT = MYSQL_RESULT($result,$i,"PARTITION_COMMENT");
	$thisNODEGROUP = MYSQL_RESULT($result,$i,"NODEGROUP");
	$thisTABLESPACE_NAME = MYSQL_RESULT($result,$i,"TABLESPACE_NAME");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

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

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="partitionsEnterForm" method="POST" action="deletePARTITIONS.php">
<input type="hidden" name="thisTABLE_CATALOGField" value="<? echo $thisTABLE_CATALOG; ?>">
<input type="submit" name="submitConfirmDeletePARTITIONSForm" value="Delete  from PARTITIONS">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>