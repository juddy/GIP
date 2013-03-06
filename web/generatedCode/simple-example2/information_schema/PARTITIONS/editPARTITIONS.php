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

<h2>Update PARTITIONS</h2>
<form name="partitionsUpdateForm" method="POST" action="updatePartitions.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_CATALOG :  </b> </td>
		<td> <input type="text" name="thisTABLE_CATALOGField" size="20" value="<? echo $thisTABLE_CATALOG; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisTABLE_SCHEMAField" size="20" value="<? echo $thisTABLE_SCHEMA; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_NAME :  </b> </td>
		<td> <input type="text" name="thisTABLE_NAMEField" size="20" value="<? echo $thisTABLE_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PARTITION_NAME :  </b> </td>
		<td> <input type="text" name="thisPARTITION_NAMEField" size="20" value="<? echo $thisPARTITION_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SUBPARTITION_NAME :  </b> </td>
		<td> <input type="text" name="thisSUBPARTITION_NAMEField" size="20" value="<? echo $thisSUBPARTITION_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PARTITION_ORDINAL_POSITION :  </b> </td>
		<td> <input type="text" name="thisPARTITION_ORDINAL_POSITIONField" size="20" value="<? echo $thisPARTITION_ORDINAL_POSITION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SUBPARTITION_ORDINAL_POSITION :  </b> </td>
		<td> <input type="text" name="thisSUBPARTITION_ORDINAL_POSITIONField" size="20" value="<? echo $thisSUBPARTITION_ORDINAL_POSITION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PARTITION_METHOD :  </b> </td>
		<td> <input type="text" name="thisPARTITION_METHODField" size="20" value="<? echo $thisPARTITION_METHOD; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SUBPARTITION_METHOD :  </b> </td>
		<td> <input type="text" name="thisSUBPARTITION_METHODField" size="20" value="<? echo $thisSUBPARTITION_METHOD; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PARTITION_EXPRESSION :  </b> </td>
		<td> <input type="text" name="thisPARTITION_EXPRESSIONField" size="20" value="<? echo $thisPARTITION_EXPRESSION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SUBPARTITION_EXPRESSION :  </b> </td>
		<td> <input type="text" name="thisSUBPARTITION_EXPRESSIONField" size="20" value="<? echo $thisSUBPARTITION_EXPRESSION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PARTITION_DESCRIPTION :  </b> </td>
		<td> <input type="text" name="thisPARTITION_DESCRIPTIONField" size="20" value="<? echo $thisPARTITION_DESCRIPTION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_ROWS :  </b> </td>
		<td> <input type="text" name="thisTABLE_ROWSField" size="20" value="<? echo $thisTABLE_ROWS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> AVG_ROW_LENGTH :  </b> </td>
		<td> <input type="text" name="thisAVG_ROW_LENGTHField" size="20" value="<? echo $thisAVG_ROW_LENGTH; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATA_LENGTH :  </b> </td>
		<td> <input type="text" name="thisDATA_LENGTHField" size="20" value="<? echo $thisDATA_LENGTH; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> MAX_DATA_LENGTH :  </b> </td>
		<td> <input type="text" name="thisMAX_DATA_LENGTHField" size="20" value="<? echo $thisMAX_DATA_LENGTH; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INDEX_LENGTH :  </b> </td>
		<td> <input type="text" name="thisINDEX_LENGTHField" size="20" value="<? echo $thisINDEX_LENGTH; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATA_FREE :  </b> </td>
		<td> <input type="text" name="thisDATA_FREEField" size="20" value="<? echo $thisDATA_FREE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CREATE_TIME :  </b> </td>
		<td> <input type="text" name="thisCREATE_TIMEField" size="20" value="<? echo $thisCREATE_TIME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> UPDATE_TIME :  </b> </td>
		<td> <input type="text" name="thisUPDATE_TIMEField" size="20" value="<? echo $thisUPDATE_TIME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHECK_TIME :  </b> </td>
		<td> <input type="text" name="thisCHECK_TIMEField" size="20" value="<? echo $thisCHECK_TIME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHECKSUM :  </b> </td>
		<td> <input type="text" name="thisCHECKSUMField" size="20" value="<? echo $thisCHECKSUM; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PARTITION_COMMENT :  </b> </td>
		<td> <input type="text" name="thisPARTITION_COMMENTField" size="20" value="<? echo $thisPARTITION_COMMENT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NODEGROUP :  </b> </td>
		<td> <input type="text" name="thisNODEGROUPField" size="20" value="<? echo $thisNODEGROUP; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLESPACE_NAME :  </b> </td>
		<td> <input type="text" name="thisTABLESPACE_NAMEField" size="20" value="<? echo $thisTABLESPACE_NAME; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdatePARTITIONSForm" value="Update PARTITIONS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>