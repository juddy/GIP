<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter TABLES</h2>
<form name="tablesEnterForm" method="POST" action="insertNewTables.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
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
		<td align="right"> <b> TABLE_TYPE :  </b> </td>
		<td> <input type="text" name="thisTABLE_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ENGINE :  </b> </td>
		<td> <input type="text" name="thisENGINEField" size="20" value="">  </td> 
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
		<td align="right"> <b> AUTO_INCREMENT :  </b> </td>
		<td> <input type="text" name="thisAUTO_INCREMENTField" size="20" value="">  </td> 
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
		<td align="right"> <b> TABLE_COLLATION :  </b> </td>
		<td> <input type="text" name="thisTABLE_COLLATIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHECKSUM :  </b> </td>
		<td> <input type="text" name="thisCHECKSUMField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CREATE_OPTIONS :  </b> </td>
		<td> <input type="text" name="thisCREATE_OPTIONSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_COMMENT :  </b> </td>
		<td> <input type="text" name="thisTABLE_COMMENTField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterTABLESForm" value="Enter TABLES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>