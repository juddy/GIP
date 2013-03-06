<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter FILES</h2>
<form name="filesEnterForm" method="POST" action="insertNewFiles.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> FILE_ID :  </b> </td>
		<td> <input type="text" name="thisFILE_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FILE_NAME :  </b> </td>
		<td> <input type="text" name="thisFILE_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FILE_TYPE :  </b> </td>
		<td> <input type="text" name="thisFILE_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLESPACE_NAME :  </b> </td>
		<td> <input type="text" name="thisTABLESPACE_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_CATALOG :  </b> </td>
		<td> <input type="text" name="thisTABLE_CATALOGField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisTABLE_SCHEMAField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_NAME :  </b> </td>
		<td> <input type="text" name="thisTABLE_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LOGFILE_GROUP_NAME :  </b> </td>
		<td> <input type="text" name="thisLOGFILE_GROUP_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LOGFILE_GROUP_NUMBER :  </b> </td>
		<td> <input type="text" name="thisLOGFILE_GROUP_NUMBERField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ENGINE :  </b> </td>
		<td> <input type="text" name="thisENGINEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FULLTEXT_KEYS :  </b> </td>
		<td> <input type="text" name="thisFULLTEXT_KEYSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DELETED_ROWS :  </b> </td>
		<td> <input type="text" name="thisDELETED_ROWSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> UPDATE_COUNT :  </b> </td>
		<td> <input type="text" name="thisUPDATE_COUNTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FREE_EXTENTS :  </b> </td>
		<td> <input type="text" name="thisFREE_EXTENTSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TOTAL_EXTENTS :  </b> </td>
		<td> <input type="text" name="thisTOTAL_EXTENTSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EXTENT_SIZE :  </b> </td>
		<td> <input type="text" name="thisEXTENT_SIZEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INITIAL_SIZE :  </b> </td>
		<td> <input type="text" name="thisINITIAL_SIZEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> MAXIMUM_SIZE :  </b> </td>
		<td> <input type="text" name="thisMAXIMUM_SIZEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> AUTOEXTEND_SIZE :  </b> </td>
		<td> <input type="text" name="thisAUTOEXTEND_SIZEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CREATION_TIME :  </b> </td>
		<td> <input type="text" name="thisCREATION_TIMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LAST_UPDATE_TIME :  </b> </td>
		<td> <input type="text" name="thisLAST_UPDATE_TIMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LAST_ACCESS_TIME :  </b> </td>
		<td> <input type="text" name="thisLAST_ACCESS_TIMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RECOVER_TIME :  </b> </td>
		<td> <input type="text" name="thisRECOVER_TIMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TRANSACTION_COUNTER :  </b> </td>
		<td> <input type="text" name="thisTRANSACTION_COUNTERField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> VERSION :  </b> </td>
		<td> <input type="text" name="thisVERSIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ROW_FORMAT :  </b> </td>
		<td> <input type="text" name="thisROW_FORMATField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_ROWS :  </b> </td>
		<td> <input type="text" name="thisTABLE_ROWSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> AVG_ROW_LENGTH :  </b> </td>
		<td> <input type="text" name="thisAVG_ROW_LENGTHField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATA_LENGTH :  </b> </td>
		<td> <input type="text" name="thisDATA_LENGTHField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> MAX_DATA_LENGTH :  </b> </td>
		<td> <input type="text" name="thisMAX_DATA_LENGTHField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INDEX_LENGTH :  </b> </td>
		<td> <input type="text" name="thisINDEX_LENGTHField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATA_FREE :  </b> </td>
		<td> <input type="text" name="thisDATA_FREEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CREATE_TIME :  </b> </td>
		<td> <input type="text" name="thisCREATE_TIMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> UPDATE_TIME :  </b> </td>
		<td> <input type="text" name="thisUPDATE_TIMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHECK_TIME :  </b> </td>
		<td> <input type="text" name="thisCHECK_TIMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHECKSUM :  </b> </td>
		<td> <input type="text" name="thisCHECKSUMField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STATUS :  </b> </td>
		<td> <input type="text" name="thisSTATUSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EXTRA :  </b> </td>
		<td> <input type="text" name="thisEXTRAField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterFILESForm" value="Enter FILES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>