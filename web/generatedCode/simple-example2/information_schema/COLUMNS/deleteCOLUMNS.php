<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisCOLUMN_NAME = addslashes($_REQUEST['thisCOLUMN_NAMEField']);
	$thisORDINAL_POSITION = addslashes($_REQUEST['thisORDINAL_POSITIONField']);
	$thisCOLUMN_DEFAULT = addslashes($_REQUEST['thisCOLUMN_DEFAULTField']);
	$thisIS_NULLABLE = addslashes($_REQUEST['thisIS_NULLABLEField']);
	$thisDATA_TYPE = addslashes($_REQUEST['thisDATA_TYPEField']);
	$thisCHARACTER_MAXIMUM_LENGTH = addslashes($_REQUEST['thisCHARACTER_MAXIMUM_LENGTHField']);
	$thisCHARACTER_OCTET_LENGTH = addslashes($_REQUEST['thisCHARACTER_OCTET_LENGTHField']);
	$thisNUMERIC_PRECISION = addslashes($_REQUEST['thisNUMERIC_PRECISIONField']);
	$thisNUMERIC_SCALE = addslashes($_REQUEST['thisNUMERIC_SCALEField']);
	$thisCHARACTER_SET_NAME = addslashes($_REQUEST['thisCHARACTER_SET_NAMEField']);
	$thisCOLLATION_NAME = addslashes($_REQUEST['thisCOLLATION_NAMEField']);
	$thisCOLUMN_TYPE = addslashes($_REQUEST['thisCOLUMN_TYPEField']);
	$thisCOLUMN_KEY = addslashes($_REQUEST['thisCOLUMN_KEYField']);
	$thisEXTRA = addslashes($_REQUEST['thisEXTRAField']);
	$thisPRIVILEGES = addslashes($_REQUEST['thisPRIVILEGESField']);
	$thisCOLUMN_COMMENT = addslashes($_REQUEST['thisCOLUMN_COMMENTField']);

?>
<?
$sql = "DELETE FROM COLUMNS WHERE TABLE_CATALOG = '$thisTABLE_CATALOG'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

<table>
<tr height="30">
	<td align="right"><b>TABLE_CATALOG : </b></td>
	<td><? echo $thisTABLE_CATALOG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLE_SCHEMA : </b></td>
	<td><? echo $thisTABLE_SCHEMA; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLE_NAME : </b></td>
	<td><? echo $thisTABLE_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COLUMN_NAME : </b></td>
	<td><? echo $thisCOLUMN_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ORDINAL_POSITION : </b></td>
	<td><? echo $thisORDINAL_POSITION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COLUMN_DEFAULT : </b></td>
	<td><? echo $thisCOLUMN_DEFAULT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>IS_NULLABLE : </b></td>
	<td><? echo $thisIS_NULLABLE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATA_TYPE : </b></td>
	<td><? echo $thisDATA_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CHARACTER_MAXIMUM_LENGTH : </b></td>
	<td><? echo $thisCHARACTER_MAXIMUM_LENGTH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CHARACTER_OCTET_LENGTH : </b></td>
	<td><? echo $thisCHARACTER_OCTET_LENGTH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>NUMERIC_PRECISION : </b></td>
	<td><? echo $thisNUMERIC_PRECISION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>NUMERIC_SCALE : </b></td>
	<td><? echo $thisNUMERIC_SCALE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CHARACTER_SET_NAME : </b></td>
	<td><? echo $thisCHARACTER_SET_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COLLATION_NAME : </b></td>
	<td><? echo $thisCOLLATION_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COLUMN_TYPE : </b></td>
	<td><? echo $thisCOLUMN_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COLUMN_KEY : </b></td>
	<td><? echo $thisCOLUMN_KEY; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>EXTRA : </b></td>
	<td><? echo $thisEXTRA; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PRIVILEGES : </b></td>
	<td><? echo $thisPRIVILEGES; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COLUMN_COMMENT : </b></td>
	<td><? echo $thisCOLUMN_COMMENT; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>