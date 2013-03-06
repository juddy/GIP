<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisVIEW_DEFINITION = addslashes($_REQUEST['thisVIEW_DEFINITIONField']);
	$thisCHECK_OPTION = addslashes($_REQUEST['thisCHECK_OPTIONField']);
	$thisIS_UPDATABLE = addslashes($_REQUEST['thisIS_UPDATABLEField']);
	$thisDEFINER = addslashes($_REQUEST['thisDEFINERField']);
	$thisSECURITY_TYPE = addslashes($_REQUEST['thisSECURITY_TYPEField']);
	$thisCHARACTER_SET_CLIENT = addslashes($_REQUEST['thisCHARACTER_SET_CLIENTField']);
	$thisCOLLATION_CONNECTION = addslashes($_REQUEST['thisCOLLATION_CONNECTIONField']);

?>
<?
$sql = "DELETE FROM VIEWS WHERE TABLE_CATALOG = '$thisTABLE_CATALOG'";
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
	<td align="right"><b>VIEW_DEFINITION : </b></td>
	<td><? echo $thisVIEW_DEFINITION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CHECK_OPTION : </b></td>
	<td><? echo $thisCHECK_OPTION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>IS_UPDATABLE : </b></td>
	<td><? echo $thisIS_UPDATABLE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DEFINER : </b></td>
	<td><? echo $thisDEFINER; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SECURITY_TYPE : </b></td>
	<td><? echo $thisSECURITY_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CHARACTER_SET_CLIENT : </b></td>
	<td><? echo $thisCHARACTER_SET_CLIENT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COLLATION_CONNECTION : </b></td>
	<td><? echo $thisCOLLATION_CONNECTION; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>