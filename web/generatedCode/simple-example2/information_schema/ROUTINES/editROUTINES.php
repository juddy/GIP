<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisSPECIFIC_NAME = $_REQUEST['SPECIFIC_NAMEField']
?>
<?php
$sql = "SELECT   * FROM ROUTINES WHERE SPECIFIC_NAME = '$thisSPECIFIC_NAME'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisSPECIFIC_NAME = MYSQL_RESULT($result,$i,"SPECIFIC_NAME");
	$thisROUTINE_CATALOG = MYSQL_RESULT($result,$i,"ROUTINE_CATALOG");
	$thisROUTINE_SCHEMA = MYSQL_RESULT($result,$i,"ROUTINE_SCHEMA");
	$thisROUTINE_NAME = MYSQL_RESULT($result,$i,"ROUTINE_NAME");
	$thisROUTINE_TYPE = MYSQL_RESULT($result,$i,"ROUTINE_TYPE");
	$thisDATA_TYPE = MYSQL_RESULT($result,$i,"DATA_TYPE");
	$thisCHARACTER_MAXIMUM_LENGTH = MYSQL_RESULT($result,$i,"CHARACTER_MAXIMUM_LENGTH");
	$thisCHARACTER_OCTET_LENGTH = MYSQL_RESULT($result,$i,"CHARACTER_OCTET_LENGTH");
	$thisNUMERIC_PRECISION = MYSQL_RESULT($result,$i,"NUMERIC_PRECISION");
	$thisNUMERIC_SCALE = MYSQL_RESULT($result,$i,"NUMERIC_SCALE");
	$thisCHARACTER_SET_NAME = MYSQL_RESULT($result,$i,"CHARACTER_SET_NAME");
	$thisCOLLATION_NAME = MYSQL_RESULT($result,$i,"COLLATION_NAME");
	$thisDTD_IDENTIFIER = MYSQL_RESULT($result,$i,"DTD_IDENTIFIER");
	$thisROUTINE_BODY = MYSQL_RESULT($result,$i,"ROUTINE_BODY");
	$thisROUTINE_DEFINITION = MYSQL_RESULT($result,$i,"ROUTINE_DEFINITION");
	$thisEXTERNAL_NAME = MYSQL_RESULT($result,$i,"EXTERNAL_NAME");
	$thisEXTERNAL_LANGUAGE = MYSQL_RESULT($result,$i,"EXTERNAL_LANGUAGE");
	$thisPARAMETER_STYLE = MYSQL_RESULT($result,$i,"PARAMETER_STYLE");
	$thisIS_DETERMINISTIC = MYSQL_RESULT($result,$i,"IS_DETERMINISTIC");
	$thisSQL_DATA_ACCESS = MYSQL_RESULT($result,$i,"SQL_DATA_ACCESS");
	$thisSQL_PATH = MYSQL_RESULT($result,$i,"SQL_PATH");
	$thisSECURITY_TYPE = MYSQL_RESULT($result,$i,"SECURITY_TYPE");
	$thisCREATED = MYSQL_RESULT($result,$i,"CREATED");
	$thisLAST_ALTERED = MYSQL_RESULT($result,$i,"LAST_ALTERED");
	$thisSQL_MODE = MYSQL_RESULT($result,$i,"SQL_MODE");
	$thisROUTINE_COMMENT = MYSQL_RESULT($result,$i,"ROUTINE_COMMENT");
	$thisDEFINER = MYSQL_RESULT($result,$i,"DEFINER");
	$thisCHARACTER_SET_CLIENT = MYSQL_RESULT($result,$i,"CHARACTER_SET_CLIENT");
	$thisCOLLATION_CONNECTION = MYSQL_RESULT($result,$i,"COLLATION_CONNECTION");
	$thisDATABASE_COLLATION = MYSQL_RESULT($result,$i,"DATABASE_COLLATION");

}
?>

<h2>Update ROUTINES</h2>
<form name="routinesUpdateForm" method="POST" action="updateRoutines.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> SPECIFIC_NAME :  </b> </td>
		<td> <input type="text" name="thisSPECIFIC_NAMEField" size="20" value="<? echo $thisSPECIFIC_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ROUTINE_CATALOG :  </b> </td>
		<td> <input type="text" name="thisROUTINE_CATALOGField" size="20" value="<? echo $thisROUTINE_CATALOG; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ROUTINE_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisROUTINE_SCHEMAField" size="20" value="<? echo $thisROUTINE_SCHEMA; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ROUTINE_NAME :  </b> </td>
		<td> <input type="text" name="thisROUTINE_NAMEField" size="20" value="<? echo $thisROUTINE_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ROUTINE_TYPE :  </b> </td>
		<td> <input type="text" name="thisROUTINE_TYPEField" size="20" value="<? echo $thisROUTINE_TYPE; ?>">  </td> 
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
		<td align="right"> <b> ROUTINE_BODY :  </b> </td>
		<td> <input type="text" name="thisROUTINE_BODYField" size="20" value="<? echo $thisROUTINE_BODY; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ROUTINE_DEFINITION :  </b> </td>
		<td> <input type="text" name="thisROUTINE_DEFINITIONField" size="20" value="<? echo $thisROUTINE_DEFINITION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EXTERNAL_NAME :  </b> </td>
		<td> <input type="text" name="thisEXTERNAL_NAMEField" size="20" value="<? echo $thisEXTERNAL_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EXTERNAL_LANGUAGE :  </b> </td>
		<td> <input type="text" name="thisEXTERNAL_LANGUAGEField" size="20" value="<? echo $thisEXTERNAL_LANGUAGE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PARAMETER_STYLE :  </b> </td>
		<td> <input type="text" name="thisPARAMETER_STYLEField" size="20" value="<? echo $thisPARAMETER_STYLE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> IS_DETERMINISTIC :  </b> </td>
		<td> <input type="text" name="thisIS_DETERMINISTICField" size="20" value="<? echo $thisIS_DETERMINISTIC; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SQL_DATA_ACCESS :  </b> </td>
		<td> <input type="text" name="thisSQL_DATA_ACCESSField" size="20" value="<? echo $thisSQL_DATA_ACCESS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SQL_PATH :  </b> </td>
		<td> <input type="text" name="thisSQL_PATHField" size="20" value="<? echo $thisSQL_PATH; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SECURITY_TYPE :  </b> </td>
		<td> <input type="text" name="thisSECURITY_TYPEField" size="20" value="<? echo $thisSECURITY_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CREATED :  </b> </td>
		<td> <input type="text" name="thisCREATEDField" size="20" value="<? echo $thisCREATED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LAST_ALTERED :  </b> </td>
		<td> <input type="text" name="thisLAST_ALTEREDField" size="20" value="<? echo $thisLAST_ALTERED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SQL_MODE :  </b> </td>
		<td> <input type="text" name="thisSQL_MODEField" size="20" value="<? echo $thisSQL_MODE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ROUTINE_COMMENT :  </b> </td>
		<td> <input type="text" name="thisROUTINE_COMMENTField" size="20" value="<? echo $thisROUTINE_COMMENT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DEFINER :  </b> </td>
		<td> <input type="text" name="thisDEFINERField" size="20" value="<? echo $thisDEFINER; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHARACTER_SET_CLIENT :  </b> </td>
		<td> <input type="text" name="thisCHARACTER_SET_CLIENTField" size="20" value="<? echo $thisCHARACTER_SET_CLIENT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COLLATION_CONNECTION :  </b> </td>
		<td> <input type="text" name="thisCOLLATION_CONNECTIONField" size="20" value="<? echo $thisCOLLATION_CONNECTION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATABASE_COLLATION :  </b> </td>
		<td> <input type="text" name="thisDATABASE_COLLATIONField" size="20" value="<? echo $thisDATABASE_COLLATION; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateROUTINESForm" value="Update ROUTINES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>