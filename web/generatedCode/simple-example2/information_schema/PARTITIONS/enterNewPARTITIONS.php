<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter PARTITIONS</h2>
<form name="partitionsEnterForm" method="POST" action="insertNewPartitions.php">

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
		<td align="right"> <b> PARTITION_NAME :  </b> </td>
		<td> <input type="text" name="thisPARTITION_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SUBPARTITION_NAME :  </b> </td>
		<td> <input type="text" name="thisSUBPARTITION_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PARTITION_ORDINAL_POSITION :  </b> </td>
		<td> <input type="text" name="thisPARTITION_ORDINAL_POSITIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SUBPARTITION_ORDINAL_POSITION :  </b> </td>
		<td> <input type="text" name="thisSUBPARTITION_ORDINAL_POSITIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PARTITION_METHOD :  </b> </td>
		<td> <input type="text" name="thisPARTITION_METHODField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SUBPARTITION_METHOD :  </b> </td>
		<td> <input type="text" name="thisSUBPARTITION_METHODField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PARTITION_EXPRESSION :  </b> </td>
		<td> <input type="text" name="thisPARTITION_EXPRESSIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SUBPARTITION_EXPRESSION :  </b> </td>
		<td> <input type="text" name="thisSUBPARTITION_EXPRESSIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PARTITION_DESCRIPTION :  </b> </td>
		<td> <input type="text" name="thisPARTITION_DESCRIPTIONField" size="20" value="">  </td> 
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
		<td align="right"> <b> PARTITION_COMMENT :  </b> </td>
		<td> <input type="text" name="thisPARTITION_COMMENTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NODEGROUP :  </b> </td>
		<td> <input type="text" name="thisNODEGROUPField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLESPACE_NAME :  </b> </td>
		<td> <input type="text" name="thisTABLESPACE_NAMEField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterPARTITIONSForm" value="Enter PARTITIONS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>