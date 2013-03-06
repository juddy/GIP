<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisPROPERTYDEF_ID = addslashes($_REQUEST['thisPROPERTYDEF_IDField']);
	$thisPROPERTYDEF_NAME = addslashes($_REQUEST['thisPROPERTYDEF_NAMEField']);
	$thisPROPERTYDEF_TYPE = addslashes($_REQUEST['thisPROPERTYDEF_TYPEField']);

?>
<?
$sql = "DELETE FROM CMS_ONLINE_PROPERTYDEF WHERE PROPERTYDEF_ID = '$thisPROPERTYDEF_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

<table>
<tr height="30">
	<td align="right"><b>PROPERTYDEF_ID : </b></td>
	<td><? echo $thisPROPERTYDEF_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROPERTYDEF_NAME : </b></td>
	<td><? echo $thisPROPERTYDEF_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROPERTYDEF_TYPE : </b></td>
	<td><? echo $thisPROPERTYDEF_TYPE; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>