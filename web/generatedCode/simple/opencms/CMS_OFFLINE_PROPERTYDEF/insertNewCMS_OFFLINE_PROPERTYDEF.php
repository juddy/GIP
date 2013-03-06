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
$sqlQuery = "INSERT INTO CMS_OFFLINE_PROPERTYDEF (PROPERTYDEF_ID , PROPERTYDEF_NAME , PROPERTYDEF_TYPE ) VALUES ('$thisPROPERTYDEF_ID' , '$thisPROPERTYDEF_NAME' , '$thisPROPERTYDEF_TYPE' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

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