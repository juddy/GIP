<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter PARAMETERS</h2>
<form name="parametersEnterForm" method="POST" action="insertNewParameters.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> SPECIFIC_CATALOG :  </b> </td>
		<td> <input type="text" name="thisSPECIFIC_CATALOGField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SPECIFIC_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisSPECIFIC_SCHEMAField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SPECIFIC_NAME :  </b> </td>
		<td> <input type="text" name="thisSPECIFIC_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ORDINAL_POSITION :  </b> </td>
		<td> <input type="text" name="thisORDINAL_POSITIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PARAMETER_MODE :  </b> </td>
		<td> <input type="text" name="thisPARAMETER_MODEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PARAMETER_NAME :  </b> </td>
		<td> <input type="text" name="thisPARAMETER_NAMEField" size="20" value="">  </td> 
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
		<td align="right"> <b> ROUTINE_TYPE :  </b> </td>
		<td> <input type="text" name="thisROUTINE_TYPEField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterPARAMETERSForm" value="Enter PARAMETERS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>