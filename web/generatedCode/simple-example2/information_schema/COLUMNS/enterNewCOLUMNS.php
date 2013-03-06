<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter COLUMNS</h2>
<form name="columnsEnterForm" method="POST" action="insertNewColumns.php">

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
		<td align="right"> <b> COLUMN_NAME :  </b> </td>
		<td> <input type="text" name="thisCOLUMN_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ORDINAL_POSITION :  </b> </td>
		<td> <input type="text" name="thisORDINAL_POSITIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COLUMN_DEFAULT :  </b> </td>
		<td> <input type="text" name="thisCOLUMN_DEFAULTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> IS_NULLABLE :  </b> </td>
		<td> <input type="text" name="thisIS_NULLABLEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATA_TYPE :  </b> </td>
		<td> <input type="text" name="thisDATA_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHARACTER_MAXIMUM_LENGTH :  </b> </td>
		<td> <input type="text" name="thisCHARACTER_MAXIMUM_LENGTHField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHARACTER_OCTET_LENGTH :  </b> </td>
		<td> <input type="text" name="thisCHARACTER_OCTET_LENGTHField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NUMERIC_PRECISION :  </b> </td>
		<td> <input type="text" name="thisNUMERIC_PRECISIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NUMERIC_SCALE :  </b> </td>
		<td> <input type="text" name="thisNUMERIC_SCALEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHARACTER_SET_NAME :  </b> </td>
		<td> <input type="text" name="thisCHARACTER_SET_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COLLATION_NAME :  </b> </td>
		<td> <input type="text" name="thisCOLLATION_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COLUMN_TYPE :  </b> </td>
		<td> <input type="text" name="thisCOLUMN_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COLUMN_KEY :  </b> </td>
		<td> <input type="text" name="thisCOLUMN_KEYField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EXTRA :  </b> </td>
		<td> <input type="text" name="thisEXTRAField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PRIVILEGES :  </b> </td>
		<td> <input type="text" name="thisPRIVILEGESField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COLUMN_COMMENT :  </b> </td>
		<td> <input type="text" name="thisCOLUMN_COMMENTField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCOLUMNSForm" value="Enter COLUMNS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>