<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisTABLE_CATALOG = $_REQUEST['TABLE_CATALOGField']
?>
<?php
$sql = "SELECT   * FROM TABLES WHERE TABLE_CATALOG = '$thisTABLE_CATALOG'";
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
	$thisTABLE_TYPE = MYSQL_RESULT($result,$i,"TABLE_TYPE");
	$thisENGINE = MYSQL_RESULT($result,$i,"ENGINE");
	$thisVERSION = MYSQL_RESULT($result,$i,"VERSION");
	$thisROW_FORMAT = MYSQL_RESULT($result,$i,"ROW_FORMAT");
	$thisTABLE_ROWS = MYSQL_RESULT($result,$i,"TABLE_ROWS");
	$thisAVG_ROW_LENGTH = MYSQL_RESULT($result,$i,"AVG_ROW_LENGTH");
	$thisDATA_LENGTH = MYSQL_RESULT($result,$i,"DATA_LENGTH");
	$thisMAX_DATA_LENGTH = MYSQL_RESULT($result,$i,"MAX_DATA_LENGTH");
	$thisINDEX_LENGTH = MYSQL_RESULT($result,$i,"INDEX_LENGTH");
	$thisDATA_FREE = MYSQL_RESULT($result,$i,"DATA_FREE");
	$thisAUTO_INCREMENT = MYSQL_RESULT($result,$i,"AUTO_INCREMENT");
	$thisCREATE_TIME = MYSQL_RESULT($result,$i,"CREATE_TIME");
	$thisUPDATE_TIME = MYSQL_RESULT($result,$i,"UPDATE_TIME");
	$thisCHECK_TIME = MYSQL_RESULT($result,$i,"CHECK_TIME");
	$thisTABLE_COLLATION = MYSQL_RESULT($result,$i,"TABLE_COLLATION");
	$thisCHECKSUM = MYSQL_RESULT($result,$i,"CHECKSUM");
	$thisCREATE_OPTIONS = MYSQL_RESULT($result,$i,"CREATE_OPTIONS");
	$thisTABLE_COMMENT = MYSQL_RESULT($result,$i,"TABLE_COMMENT");

}
?>

<h2>Update TABLES</h2>
<form name="tablesUpdateForm" method="POST" action="updateTables.php">

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
		<td align="right"> <b> TABLE_TYPE :  </b> </td>
		<td> <input type="text" name="thisTABLE_TYPEField" size="20" value="<? echo $thisTABLE_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ENGINE :  </b> </td>
		<td> <input type="text" name="thisENGINEField" size="20" value="<? echo $thisENGINE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> VERSION :  </b> </td>
		<td> <input type="text" name="thisVERSIONField" size="20" value="<? echo $thisVERSION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ROW_FORMAT :  </b> </td>
		<td> <input type="text" name="thisROW_FORMATField" size="20" value="<? echo $thisROW_FORMAT; ?>">  </td> 
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
		<td align="right"> <b> AUTO_INCREMENT :  </b> </td>
		<td> <input type="text" name="thisAUTO_INCREMENTField" size="20" value="<? echo $thisAUTO_INCREMENT; ?>">  </td> 
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
		<td align="right"> <b> TABLE_COLLATION :  </b> </td>
		<td> <input type="text" name="thisTABLE_COLLATIONField" size="20" value="<? echo $thisTABLE_COLLATION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHECKSUM :  </b> </td>
		<td> <input type="text" name="thisCHECKSUMField" size="20" value="<? echo $thisCHECKSUM; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CREATE_OPTIONS :  </b> </td>
		<td> <input type="text" name="thisCREATE_OPTIONSField" size="20" value="<? echo $thisCREATE_OPTIONS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_COMMENT :  </b> </td>
		<td> <input type="text" name="thisTABLE_COMMENTField" size="20" value="<? echo $thisTABLE_COMMENT; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateTABLESForm" value="Update TABLES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>