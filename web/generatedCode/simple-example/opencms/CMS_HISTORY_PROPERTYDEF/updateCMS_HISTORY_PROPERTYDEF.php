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
$sql = "UPDATE CMS_HISTORY_PROPERTYDEF SET PROPERTYDEF_ID = '$thisPROPERTYDEF_ID' , PROPERTYDEF_NAME = '$thisPROPERTYDEF_NAME' , PROPERTYDEF_TYPE = '$thisPROPERTYDEF_TYPE'  WHERE PROPERTYDEF_ID = '$thisPROPERTYDEF_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

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
<br><br><a href="listCMS_HISTORY_PROPERTYDEF.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>