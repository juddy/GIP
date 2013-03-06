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
$sql = "UPDATE CMS_SUBSCRIPTION SET PRINCIPAL_ID = '$thisPRINCIPAL_ID' , STRUCTURE_ID = '$thisSTRUCTURE_ID' , DATE_DELETED = '$thisDATE_DELETED'  WHERE PRINCIPAL_ID = '$thisPRINCIPAL_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

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
<br><br><a href="listCMS_SUBSCRIPTION.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>