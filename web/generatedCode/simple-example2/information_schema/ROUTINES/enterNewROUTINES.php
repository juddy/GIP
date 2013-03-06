<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter ROUTINES</h2>
<form name="routinesEnterForm" method="POST" action="insertNewRoutines.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> SPECIFIC_NAME :  </b> </td>
		<td> <input type="text" name="thisSPECIFIC_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ROUTINE_CATALOG :  </b> </td>
		<td> <input type="text" name="thisROUTINE_CATALOGField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ROUTINE_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisROUTINE_SCHEMAField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ROUTINE_NAME :  </b> </td>
		<td> <input type="text" name="thisROUTINE_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ROUTINE_TYPE :  </b> </td>
		<td> <input type="text" name="thisROUTINE_TYPEField" size="20" value="">  </td> 
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
		<td align="right"> <b> DTD_IDENTIFIER :  </b> </td>
		<td> <input type="text" name="thisDTD_IDENTIFIERField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ROUTINE_BODY :  </b> </td>
		<td> <input type="text" name="thisROUTINE_BODYField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ROUTINE_DEFINITION :  </b> </td>
		<td> <input type="text" name="thisROUTINE_DEFINITIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EXTERNAL_NAME :  </b> </td>
		<td> <input type="text" name="thisEXTERNAL_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EXTERNAL_LANGUAGE :  </b> </td>
		<td> <input type="text" name="thisEXTERNAL_LANGUAGEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PARAMETER_STYLE :  </b> </td>
		<td> <input type="text" name="thisPARAMETER_STYLEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> IS_DETERMINISTIC :  </b> </td>
		<td> <input type="text" name="thisIS_DETERMINISTICField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SQL_DATA_ACCESS :  </b> </td>
		<td> <input type="text" name="thisSQL_DATA_ACCESSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SQL_PATH :  </b> </td>
		<td> <input type="text" name="thisSQL_PATHField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SECURITY_TYPE :  </b> </td>
		<td> <input type="text" name="thisSECURITY_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CREATED :  </b> </td>
		<td> <input type="text" name="thisCREATEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LAST_ALTERED :  </b> </td>
		<td> <input type="text" name="thisLAST_ALTEREDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SQL_MODE :  </b> </td>
		<td> <input type="text" name="thisSQL_MODEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ROUTINE_COMMENT :  </b> </td>
		<td> <input type="text" name="thisROUTINE_COMMENTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DEFINER :  </b> </td>
		<td> <input type="text" name="thisDEFINERField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHARACTER_SET_CLIENT :  </b> </td>
		<td> <input type="text" name="thisCHARACTER_SET_CLIENTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COLLATION_CONNECTION :  </b> </td>
		<td> <input type="text" name="thisCOLLATION_CONNECTIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATABASE_COLLATION :  </b> </td>
		<td> <input type="text" name="thisDATABASE_COLLATIONField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterROUTINESForm" value="Enter ROUTINES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>