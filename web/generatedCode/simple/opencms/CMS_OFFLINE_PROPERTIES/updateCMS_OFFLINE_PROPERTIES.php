<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisPROPERTY_ID = addslashes($_REQUEST['thisPROPERTY_IDField']);
	$thisPROPERTYDEF_ID = addslashes($_REQUEST['thisPROPERTYDEF_IDField']);
	$thisPROPERTY_MAPPING_ID = addslashes($_REQUEST['thisPROPERTY_MAPPING_IDField']);
	$thisPROPERTY_MAPPING_TYPE = addslashes($_REQUEST['thisPROPERTY_MAPPING_TYPEField']);
	$thisPROPERTY_VALUE = addslashes($_REQUEST['thisPROPERTY_VALUEField']);

?>
<?
$sql = "UPDATE CMS_OFFLINE_PROPERTIES SET PROPERTY_ID = '$thisPROPERTY_ID' , PROPERTYDEF_ID = '$thisPROPERTYDEF_ID' , PROPERTY_MAPPING_ID = '$thisPROPERTY_MAPPING_ID' , PROPERTY_MAPPING_TYPE = '$thisPROPERTY_MAPPING_TYPE' , PROPERTY_VALUE = '$thisPROPERTY_VALUE'  WHERE PROPERTY_ID = '$thisPROPERTY_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>PROPERTY_ID : </b></td>
	<td><? echo $thisPROPERTY_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROPERTYDEF_ID : </b></td>
	<td><? echo $thisPROPERTYDEF_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROPERTY_MAPPING_ID : </b></td>
	<td><? echo $thisPROPERTY_MAPPING_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROPERTY_MAPPING_TYPE : </b></td>
	<td><? echo $thisPROPERTY_MAPPING_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROPERTY_VALUE : </b></td>
	<td><? echo $thisPROPERTY_VALUE; ?></td>
</tr>
</table>
<br><br><a href="listCMS_OFFLINE_PROPERTIES.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>