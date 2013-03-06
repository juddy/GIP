<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisVISIT_DATE = addslashes($_REQUEST['thisVISIT_DATEField']);
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);

?>
<?
$sql = "UPDATE CMS_SUBSCRIPTION_VISIT SET USER_ID = '$thisUSER_ID' , VISIT_DATE = '$thisVISIT_DATE' , STRUCTURE_ID = '$thisSTRUCTURE_ID'  WHERE USER_ID = '$thisUSER_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>USER_ID : </b></td>
	<td><? echo $thisUSER_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>VISIT_DATE : </b></td>
	<td><? echo $thisVISIT_DATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STRUCTURE_ID : </b></td>
	<td><? echo $thisSTRUCTURE_ID; ?></td>
</tr>
</table>
<br><br><a href="listCMS_SUBSCRIPTION_VISIT.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>