<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisCONSTRAINT_CATALOG = $_REQUEST['CONSTRAINT_CATALOGField']
?>
<?php
$sql = "SELECT   * FROM KEY_COLUMN_USAGE WHERE CONSTRAINT_CATALOG = '$thisCONSTRAINT_CATALOG'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisCONSTRAINT_CATALOG = MYSQL_RESULT($result,$i,"CONSTRAINT_CATALOG");
	$thisCONSTRAINT_SCHEMA = MYSQL_RESULT($result,$i,"CONSTRAINT_SCHEMA");
	$thisCONSTRAINT_NAME = MYSQL_RESULT($result,$i,"CONSTRAINT_NAME");
	$thisTABLE_CATALOG = MYSQL_RESULT($result,$i,"TABLE_CATALOG");
	$thisTABLE_SCHEMA = MYSQL_RESULT($result,$i,"TABLE_SCHEMA");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisCOLUMN_NAME = MYSQL_RESULT($result,$i,"COLUMN_NAME");
	$thisORDINAL_POSITION = MYSQL_RESULT($result,$i,"ORDINAL_POSITION");
	$thisPOSITION_IN_UNIQUE_CONSTRAINT = MYSQL_RESULT($result,$i,"POSITION_IN_UNIQUE_CONSTRAINT");
	$thisREFERENCED_TABLE_SCHEMA = MYSQL_RESULT($result,$i,"REFERENCED_TABLE_SCHEMA");
	$thisREFERENCED_TABLE_NAME = MYSQL_RESULT($result,$i,"REFERENCED_TABLE_NAME");
	$thisREFERENCED_COLUMN_NAME = MYSQL_RESULT($result,$i,"REFERENCED_COLUMN_NAME");

}
?>

View Record<br><br>

<table>
<tr height="30">
	<td align="right"><b>CONSTRAINT_CATALOG : </b></td>
	<td><? echo $thisCONSTRAINT_CATALOG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CONSTRAINT_SCHEMA : </b></td>
	<td><? echo $thisCONSTRAINT_SCHEMA; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CONSTRAINT_NAME : </b></td>
	<td><? echo $thisCONSTRAINT_NAME; ?></td>
</tr>
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
	<td align="right"><b>POSITION_IN_UNIQUE_CONSTRAINT : </b></td>
	<td><? echo $thisPOSITION_IN_UNIQUE_CONSTRAINT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>REFERENCED_TABLE_SCHEMA : </b></td>
	<td><? echo $thisREFERENCED_TABLE_SCHEMA; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>REFERENCED_TABLE_NAME : </b></td>
	<td><? echo $thisREFERENCED_TABLE_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>REFERENCED_COLUMN_NAME : </b></td>
	<td><? echo $thisREFERENCED_COLUMN_NAME; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>