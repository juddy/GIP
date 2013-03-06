<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);
	$thisDATE_CHANGED = addslashes($_REQUEST['thisDATE_CHANGEDField']);

?>
<?
$sql = "UPDATE CMS_USER_PUBLISH_LIST SET USER_ID = '$thisUSER_ID' , STRUCTURE_ID = '$thisSTRUCTURE_ID' , DATE_CHANGED = '$thisDATE_CHANGED'  WHERE USER_ID = '$thisUSER_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>USER_ID : </b></td>
	<td><? echo $thisUSER_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STRUCTURE_ID : </b></td>
	<td><? echo $thisSTRUCTURE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATE_CHANGED : </b></td>
	<td><? echo $thisDATE_CHANGED; ?></td>
</tr>
</table>
<br><br><a href="listCMS_USER_PUBLISH_LIST.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>