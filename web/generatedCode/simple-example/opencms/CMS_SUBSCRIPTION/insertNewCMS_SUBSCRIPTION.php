<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisPRINCIPAL_ID = addslashes($_REQUEST['thisPRINCIPAL_IDField']);
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);
	$thisDATE_DELETED = addslashes($_REQUEST['thisDATE_DELETEDField']);

?>
<?
$sqlQuery = "INSERT INTO CMS_SUBSCRIPTION (PRINCIPAL_ID , STRUCTURE_ID , DATE_DELETED ) VALUES ('$thisPRINCIPAL_ID' , '$thisSTRUCTURE_ID' , '$thisDATE_DELETED' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>PRINCIPAL_ID : </b></td>
	<td><? echo $thisPRINCIPAL_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STRUCTURE_ID : </b></td>
	<td><? echo $thisSTRUCTURE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATE_DELETED : </b></td>
	<td><? echo $thisDATE_DELETED; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>