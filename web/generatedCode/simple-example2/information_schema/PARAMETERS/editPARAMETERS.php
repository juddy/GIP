<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisSPECIFIC_CATALOG = $_REQUEST['SPECIFIC_CATALOGField']
?>
<?php
$sql = "SELECT   * FROM PARAMETERS WHERE SPECIFIC_CATALOG = '$thisSPECIFIC_CATALOG'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisSPECIFIC_CATALOG = MYSQL_RESULT($result,$i,"SPECIFIC_CATALOG");
	$thisSPECIFIC_SCHEMA = MYSQL_RESULT($result,$i,"SPECIFIC_SCHEMA");
	$thisSPECIFIC_NAME = MYSQL_RESULT($result,$i,"SPECIFIC_NAME");
	$thisORDINAL_POSITION = MYSQL_RESULT($result,$i,"ORDINAL_POSITION");
	$thisPARAMETER_MODE = MYSQL_RESULT($result,$i,"PARAMETER_MODE");
	$thisPARAMETER_NAME = MYSQL_RESULT($result,$i,"PARAMETER_NAME");
	$thisDATA_TYPE = MYSQL_RESULT($result,$i,"DATA_TYPE");
	$thisCHARACTER_MAXIMUM_LENGTH = MYSQL_RESULT($result,$i,"CHARACTER_MAXIMUM_LENGTH");
	$thisCHARACTER_OCTET_LENGTH = MYSQL_RESULT($result,$i,"CHARACTER_OCTET_LENGTH");
	$thisNUMERIC_PRECISION = MYSQL_RESULT($result,$i,"NUMERIC_PRECISION");
	$thisNUMERIC_SCALE = MYSQL_RESULT($result,$i,"NUMERIC_SCALE");
	$thisCHARACTER_SET_NAME = MYSQL_RESULT($result,$i,"CHARACTER_SET_NAME");
	$thisCOLLATION_NAME = MYSQL_RESULT($result,$i,"COLLATION_NAME");
	$thisDTD_IDENTIFIER = MYSQL_RESULT($result,$i,"DTD_IDENTIFIER");
	$thisROUTINE_TYPE = MYSQL_RESULT($result,$i,"ROUTINE_TYPE");

}
?>

<h2>Update PARAMETERS</h2>
<form name="parametersUpdateForm" method="POST" action="updateParameters.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> SPECIFIC_CATALOG :  </b> </td>
		<td> <input type="text" name="thisSPECIFIC_CATALOGField" size="20" value="<? echo $thisSPECIFIC_CATALOG; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SPECIFIC_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisSPECIFIC_SCHEMAField" size="20" value="<? echo $thisSPECIFIC_SCHEMA; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SPECIFIC_NAME :  </b> </td>
		<td> <input type="text" name="thisSPECIFIC_NAMEField" size="20" value="<? echo $thisSPECIFIC_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ORDINAL_POSITION :  </b> </td>
		<td> <input type="text" name="thisORDINAL_POSITIONField" size="20" value="<? echo $thisORDINAL_POSITION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PARAMETER_MODE :  </b> </td>
		<td> <input type="text" name="thisPARAMETER_MODEField" size="20" value="<? echo $thisPARAMETER_MODE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PARAMETER_NAME :  </b> </td>
		<td> <input type="text" name="thisPARAMETER_NAMEField" size="20" value="<? echo $thisPARAMETER_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATA_TYPE :  </b> </td>
		<td> <input type="text" name="thisDATA_TYPEField" size="20" value="<? echo $thisDATA_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHARACTER_MAXIMUM_LENGTH :  </b> </td>
		<td> <input type="text" name="thisCHARACTER_MAXIMUM_LENGTHField" size="20" value="<? echo $thisCHARACTER_MAXIMUM_LENGTH; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHARACTER_OCTET_LENGTH :  </b> </td>
		<td> <input type="text" name="thisCHARACTER_OCTET_LENGTHField" size="20" value="<? echo $thisCHARACTER_OCTET_LENGTH; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NUMERIC_PRECISION :  </b> </td>
		<td> <input type="text" name="thisNUMERIC_PRECISIONField" size="20" value="<? echo $thisNUMERIC_PRECISION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NUMERIC_SCALE :  </b> </td>
		<td> <input type="text" name="thisNUMERIC_SCALEField" size="20" value="<? echo $thisNUMERIC_SCALE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHARACTER_SET_NAME :  </b> </td>
		<td> <input type="text" name="thisCHARACTER_SET_NAMEField" size="20" value="<? echo $thisCHARACTER_SET_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COLLATION_NAME :  </b> </td>
		<td> <input type="text" name="thisCOLLATION_NAMEField" size="20" value="<? echo $thisCOLLATION_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DTD_IDENTIFIER :  </b> </td>
		<td> <input type="text" name="thisDTD_IDENTIFIERField" size="20" value="<? echo $thisDTD_IDENTIFIER; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ROUTINE_TYPE :  </b> </td>
		<td> <input type="text" name="thisROUTINE_TYPEField" size="20" value="<? echo $thisROUTINE_TYPE; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdatePARAMETERSForm" value="Update PARAMETERS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>