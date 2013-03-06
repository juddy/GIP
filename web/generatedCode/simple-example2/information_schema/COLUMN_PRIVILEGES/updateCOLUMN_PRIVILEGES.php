<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisGRANTEE = addslashes($_REQUEST['thisGRANTEEField']);
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisCOLUMN_NAME = addslashes($_REQUEST['thisCOLUMN_NAMEField']);
	$thisPRIVILEGE_TYPE = addslashes($_REQUEST['thisPRIVILEGE_TYPEField']);
	$thisIS_GRANTABLE = addslashes($_REQUEST['thisIS_GRANTABLEField']);

?>
<?
$sql = "UPDATE COLUMN_PRIVILEGES SET GRANTEE = '$thisGRANTEE' , TABLE_CATALOG = '$thisTABLE_CATALOG' , TABLE_SCHEMA = '$thisTABLE_SCHEMA' , TABLE_NAME = '$thisTABLE_NAME' , COLUMN_NAME = '$thisCOLUMN_NAME' , PRIVILEGE_TYPE = '$thisPRIVILEGE_TYPE' , IS_GRANTABLE = '$thisIS_GRANTABLE'  WHERE GRANTEE = '$thisGRANTEE'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>GRANTEE : </b></td>
	<td><? echo $thisGRANTEE; ?></td>
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
	<td align="right"><b>PRIVILEGE_TYPE : </b></td>
	<td><? echo $thisPRIVILEGE_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>IS_GRANTABLE : </b></td>
	<td><? echo $thisIS_GRANTABLE; ?></td>
</tr>
</table>
<br><br><a href="listCOLUMN_PRIVILEGES.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>