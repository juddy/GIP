<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisCONSTRAINT_CATALOG = addslashes($_REQUEST['thisCONSTRAINT_CATALOGField']);
	$thisCONSTRAINT_SCHEMA = addslashes($_REQUEST['thisCONSTRAINT_SCHEMAField']);
	$thisCONSTRAINT_NAME = addslashes($_REQUEST['thisCONSTRAINT_NAMEField']);
	$thisUNIQUE_CONSTRAINT_CATALOG = addslashes($_REQUEST['thisUNIQUE_CONSTRAINT_CATALOGField']);
	$thisUNIQUE_CONSTRAINT_SCHEMA = addslashes($_REQUEST['thisUNIQUE_CONSTRAINT_SCHEMAField']);
	$thisUNIQUE_CONSTRAINT_NAME = addslashes($_REQUEST['thisUNIQUE_CONSTRAINT_NAMEField']);
	$thisMATCH_OPTION = addslashes($_REQUEST['thisMATCH_OPTIONField']);
	$thisUPDATE_RULE = addslashes($_REQUEST['thisUPDATE_RULEField']);
	$thisDELETE_RULE = addslashes($_REQUEST['thisDELETE_RULEField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisREFERENCED_TABLE_NAME = addslashes($_REQUEST['thisREFERENCED_TABLE_NAMEField']);

?>
<?
$sql = "DELETE FROM REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_CATALOG = '$thisCONSTRAINT_CATALOG'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

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
	<td align="right"><b>UNIQUE_CONSTRAINT_CATALOG : </b></td>
	<td><? echo $thisUNIQUE_CONSTRAINT_CATALOG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>UNIQUE_CONSTRAINT_SCHEMA : </b></td>
	<td><? echo $thisUNIQUE_CONSTRAINT_SCHEMA; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>UNIQUE_CONSTRAINT_NAME : </b></td>
	<td><? echo $thisUNIQUE_CONSTRAINT_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>MATCH_OPTION : </b></td>
	<td><? echo $thisMATCH_OPTION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>UPDATE_RULE : </b></td>
	<td><? echo $thisUPDATE_RULE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DELETE_RULE : </b></td>
	<td><? echo $thisDELETE_RULE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLE_NAME : </b></td>
	<td><? echo $thisTABLE_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>REFERENCED_TABLE_NAME : </b></td>
	<td><? echo $thisREFERENCED_TABLE_NAME; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>