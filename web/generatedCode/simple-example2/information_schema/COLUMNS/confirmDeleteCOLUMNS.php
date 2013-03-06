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

<h2>Confirm Record Deletion</h2><br><br>

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

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="columnsEnterForm" method="POST" action="deleteCOLUMNS.php">
<input type="hidden" name="thisTABLE_CATALOGField" value="<? echo $thisTABLE_CATALOG; ?>">
<input type="submit" name="submitConfirmDeleteCOLUMNSForm" value="Delete  from COLUMNS">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>