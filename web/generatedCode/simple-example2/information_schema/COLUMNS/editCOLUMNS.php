<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisTABLE_CATALOG = $_REQUEST['TABLE_CATALOGField']
?>
<?php
$sql = "SELECT   * FROM COLUMNS WHERE TABLE_CATALOG = '$thisTABLE_CATALOG'";
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
	$thisCOLUMN_NAME = MYSQL_RESULT($result,$i,"COLUMN_NAME");
	$thisORDINAL_POSITION = MYSQL_RESULT($result,$i,"ORDINAL_POSITION");
	$thisCOLUMN_DEFAULT = MYSQL_RESULT($result,$i,"COLUMN_DEFAULT");
	$thisIS_NULLABLE = MYSQL_RESULT($result,$i,"IS_NULLABLE");
	$thisDATA_TYPE = MYSQL_RESULT($result,$i,"DATA_TYPE");
	$thisCHARACTER_MAXIMUM_LENGTH = MYSQL_RESULT($result,$i,"CHARACTER_MAXIMUM_LENGTH");
	$thisCHARACTER_OCTET_LENGTH = MYSQL_RESULT($result,$i,"CHARACTER_OCTET_LENGTH");
	$thisNUMERIC_PRECISION = MYSQL_RESULT($result,$i,"NUMERIC_PRECISION");
	$thisNUMERIC_SCALE = MYSQL_RESULT($result,$i,"NUMERIC_SCALE");
	$thisCHARACTER_SET_NAME = MYSQL_RESULT($result,$i,"CHARACTER_SET_NAME");
	$thisCOLLATION_NAME = MYSQL_RESULT($result,$i,"COLLATION_NAME");
	$thisCOLUMN_TYPE = MYSQL_RESULT($result,$i,"COLUMN_TYPE");
	$thisCOLUMN_KEY = MYSQL_RESULT($result,$i,"COLUMN_KEY");
	$thisEXTRA = MYSQL_RESULT($result,$i,"EXTRA");
	$thisPRIVILEGES = MYSQL_RESULT($result,$i,"PRIVILEGES");
	$thisCOLUMN_COMMENT = MYSQL_RESULT($result,$i,"COLUMN_COMMENT");

}
?>

<h2>Update COLUMNS</h2>
<form name="columnsUpdateForm" method="POST" action="updateColumns.php">

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
		<td align="right"> <b> COLUMN_NAME :  </b> </td>
		<td> <input type="text" name="thisCOLUMN_NAMEField" size="20" value="<? echo $thisCOLUMN_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ORDINAL_POSITION :  </b> </td>
		<td> <input type="text" name="thisORDINAL_POSITIONField" size="20" value="<? echo $thisORDINAL_POSITION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COLUMN_DEFAULT :  </b> </td>
		<td> <input type="text" name="thisCOLUMN_DEFAULTField" size="20" value="<? echo $thisCOLUMN_DEFAULT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> IS_NULLABLE :  </b> </td>
		<td> <input type="text" name="thisIS_NULLABLEField" size="20" value="<? echo $thisIS_NULLABLE; ?>">  </td> 
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
		<td align="right"> <b> COLUMN_TYPE :  </b> </td>
		<td> <input type="text" name="thisCOLUMN_TYPEField" size="20" value="<? echo $thisCOLUMN_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COLUMN_KEY :  </b> </td>
		<td> <input type="text" name="thisCOLUMN_KEYField" size="20" value="<? echo $thisCOLUMN_KEY; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EXTRA :  </b> </td>
		<td> <input type="text" name="thisEXTRAField" size="20" value="<? echo $thisEXTRA; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PRIVILEGES :  </b> </td>
		<td> <input type="text" name="thisPRIVILEGESField" size="20" value="<? echo $thisPRIVILEGES; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COLUMN_COMMENT :  </b> </td>
		<td> <input type="text" name="thisCOLUMN_COMMENTField" size="20" value="<? echo $thisCOLUMN_COMMENT; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCOLUMNSForm" value="Update COLUMNS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>