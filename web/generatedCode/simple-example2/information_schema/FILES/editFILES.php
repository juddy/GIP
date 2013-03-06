<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisFILE_ID = $_REQUEST['FILE_IDField']
?>
<?php
$sql = "SELECT   * FROM FILES WHERE FILE_ID = '$thisFILE_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisFILE_ID = MYSQL_RESULT($result,$i,"FILE_ID");
	$thisFILE_NAME = MYSQL_RESULT($result,$i,"FILE_NAME");
	$thisFILE_TYPE = MYSQL_RESULT($result,$i,"FILE_TYPE");
	$thisTABLESPACE_NAME = MYSQL_RESULT($result,$i,"TABLESPACE_NAME");
	$thisTABLE_CATALOG = MYSQL_RESULT($result,$i,"TABLE_CATALOG");
	$thisTABLE_SCHEMA = MYSQL_RESULT($result,$i,"TABLE_SCHEMA");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisLOGFILE_GROUP_NAME = MYSQL_RESULT($result,$i,"LOGFILE_GROUP_NAME");
	$thisLOGFILE_GROUP_NUMBER = MYSQL_RESULT($result,$i,"LOGFILE_GROUP_NUMBER");
	$thisENGINE = MYSQL_RESULT($result,$i,"ENGINE");
	$thisFULLTEXT_KEYS = MYSQL_RESULT($result,$i,"FULLTEXT_KEYS");
	$thisDELETED_ROWS = MYSQL_RESULT($result,$i,"DELETED_ROWS");
	$thisUPDATE_COUNT = MYSQL_RESULT($result,$i,"UPDATE_COUNT");
	$thisFREE_EXTENTS = MYSQL_RESULT($result,$i,"FREE_EXTENTS");
	$thisTOTAL_EXTENTS = MYSQL_RESULT($result,$i,"TOTAL_EXTENTS");
	$thisEXTENT_SIZE = MYSQL_RESULT($result,$i,"EXTENT_SIZE");
	$thisINITIAL_SIZE = MYSQL_RESULT($result,$i,"INITIAL_SIZE");
	$thisMAXIMUM_SIZE = MYSQL_RESULT($result,$i,"MAXIMUM_SIZE");
	$thisAUTOEXTEND_SIZE = MYSQL_RESULT($result,$i,"AUTOEXTEND_SIZE");
	$thisCREATION_TIME = MYSQL_RESULT($result,$i,"CREATION_TIME");
	$thisLAST_UPDATE_TIME = MYSQL_RESULT($result,$i,"LAST_UPDATE_TIME");
	$thisLAST_ACCESS_TIME = MYSQL_RESULT($result,$i,"LAST_ACCESS_TIME");
	$thisRECOVER_TIME = MYSQL_RESULT($result,$i,"RECOVER_TIME");
	$thisTRANSACTION_COUNTER = MYSQL_RESULT($result,$i,"TRANSACTION_COUNTER");
	$thisVERSION = MYSQL_RESULT($result,$i,"VERSION");
	$thisROW_FORMAT = MYSQL_RESULT($result,$i,"ROW_FORMAT");
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
	$thisSTATUS = MYSQL_RESULT($result,$i,"STATUS");
	$thisEXTRA = MYSQL_RESULT($result,$i,"EXTRA");

}
?>

<h2>Update FILES</h2>
<form name="filesUpdateForm" method="POST" action="updateFiles.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> FILE_ID :  </b> </td>
		<td> <input type="text" name="thisFILE_IDField" size="20" value="<? echo $thisFILE_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FILE_NAME :  </b> </td>
		<td> <input type="text" name="thisFILE_NAMEField" size="20" value="<? echo $thisFILE_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FILE_TYPE :  </b> </td>
		<td> <input type="text" name="thisFILE_TYPEField" size="20" value="<? echo $thisFILE_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLESPACE_NAME :  </b> </td>
		<td> <input type="text" name="thisTABLESPACE_NAMEField" size="20" value="<? echo $thisTABLESPACE_NAME; ?>">  </td> 
	</tr>
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
		<td align="right"> <b> LOGFILE_GROUP_NAME :  </b> </td>
		<td> <input type="text" name="thisLOGFILE_GROUP_NAMEField" size="20" value="<? echo $thisLOGFILE_GROUP_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LOGFILE_GROUP_NUMBER :  </b> </td>
		<td> <input type="text" name="thisLOGFILE_GROUP_NUMBERField" size="20" value="<? echo $thisLOGFILE_GROUP_NUMBER; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ENGINE :  </b> </td>
		<td> <input type="text" name="thisENGINEField" size="20" value="<? echo $thisENGINE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FULLTEXT_KEYS :  </b> </td>
		<td> <input type="text" name="thisFULLTEXT_KEYSField" size="20" value="<? echo $thisFULLTEXT_KEYS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DELETED_ROWS :  </b> </td>
		<td> <input type="text" name="thisDELETED_ROWSField" size="20" value="<? echo $thisDELETED_ROWS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> UPDATE_COUNT :  </b> </td>
		<td> <input type="text" name="thisUPDATE_COUNTField" size="20" value="<? echo $thisUPDATE_COUNT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FREE_EXTENTS :  </b> </td>
		<td> <input type="text" name="thisFREE_EXTENTSField" size="20" value="<? echo $thisFREE_EXTENTS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TOTAL_EXTENTS :  </b> </td>
		<td> <input type="text" name="thisTOTAL_EXTENTSField" size="20" value="<? echo $thisTOTAL_EXTENTS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EXTENT_SIZE :  </b> </td>
		<td> <input type="text" name="thisEXTENT_SIZEField" size="20" value="<? echo $thisEXTENT_SIZE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INITIAL_SIZE :  </b> </td>
		<td> <input type="text" name="thisINITIAL_SIZEField" size="20" value="<? echo $thisINITIAL_SIZE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> MAXIMUM_SIZE :  </b> </td>
		<td> <input type="text" name="thisMAXIMUM_SIZEField" size="20" value="<? echo $thisMAXIMUM_SIZE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> AUTOEXTEND_SIZE :  </b> </td>
		<td> <input type="text" name="thisAUTOEXTEND_SIZEField" size="20" value="<? echo $thisAUTOEXTEND_SIZE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CREATION_TIME :  </b> </td>
		<td> <input type="text" name="thisCREATION_TIMEField" size="20" value="<? echo $thisCREATION_TIME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LAST_UPDATE_TIME :  </b> </td>
		<td> <input type="text" name="thisLAST_UPDATE_TIMEField" size="20" value="<? echo $thisLAST_UPDATE_TIME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LAST_ACCESS_TIME :  </b> </td>
		<td> <input type="text" name="thisLAST_ACCESS_TIMEField" size="20" value="<? echo $thisLAST_ACCESS_TIME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RECOVER_TIME :  </b> </td>
		<td> <input type="text" name="thisRECOVER_TIMEField" size="20" value="<? echo $thisRECOVER_TIME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TRANSACTION_COUNTER :  </b> </td>
		<td> <input type="text" name="thisTRANSACTION_COUNTERField" size="20" value="<? echo $thisTRANSACTION_COUNTER; ?>">  </td> 
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
		<td align="right"> <b> STATUS :  </b> </td>
		<td> <input type="text" name="thisSTATUSField" size="20" value="<? echo $thisSTATUS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EXTRA :  </b> </td>
		<td> <input type="text" name="thisEXTRAField" size="20" value="<? echo $thisEXTRA; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateFILESForm" value="Update FILES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>