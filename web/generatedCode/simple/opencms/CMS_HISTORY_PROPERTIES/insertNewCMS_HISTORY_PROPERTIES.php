<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);
	$thisPROPERTYDEF_ID = addslashes($_REQUEST['thisPROPERTYDEF_IDField']);
	$thisPROPERTY_MAPPING_ID = addslashes($_REQUEST['thisPROPERTY_MAPPING_IDField']);
	$thisPROPERTY_MAPPING_TYPE = addslashes($_REQUEST['thisPROPERTY_MAPPING_TYPEField']);
	$thisPROPERTY_VALUE = addslashes($_REQUEST['thisPROPERTY_VALUEField']);
	$thisPUBLISH_TAG = addslashes($_REQUEST['thisPUBLISH_TAGField']);

?>
<?
$sqlQuery = "INSERT INTO CMS_HISTORY_PROPERTIES (STRUCTURE_ID , PROPERTYDEF_ID , PROPERTY_MAPPING_ID , PROPERTY_MAPPING_TYPE , PROPERTY_VALUE , PUBLISH_TAG ) VALUES ('$thisSTRUCTURE_ID' , '$thisPROPERTYDEF_ID' , '$thisPROPERTY_MAPPING_ID' , '$thisPROPERTY_MAPPING_TYPE' , '$thisPROPERTY_VALUE' , '$thisPUBLISH_TAG' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>STRUCTURE_ID : </b></td>
	<td><? echo $thisSTRUCTURE_ID; ?></td>
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
<tr height="30">
	<td align="right"><b>PUBLISH_TAG : </b></td>
	<td><? echo $thisPUBLISH_TAG; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>