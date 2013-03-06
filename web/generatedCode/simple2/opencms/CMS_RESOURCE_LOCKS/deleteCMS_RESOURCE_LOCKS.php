<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisRESOURCE_PATH = addslashes($_REQUEST['thisRESOURCE_PATHField']);
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisPROJECT_ID = addslashes($_REQUEST['thisPROJECT_IDField']);
	$thisLOCK_TYPE = addslashes($_REQUEST['thisLOCK_TYPEField']);

?>
<?
$sql = "DELETE FROM CMS_RESOURCE_LOCKS WHERE RESOURCE_PATH = '$thisRESOURCE_PATH'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

<table>
<tr height="30">
	<td align="right"><b>RESOURCE_PATH : </b></td>
	<td><? echo $thisRESOURCE_PATH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>USER_ID : </b></td>
	<td><? echo $thisUSER_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROJECT_ID : </b></td>
	<td><? echo $thisPROJECT_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LOCK_TYPE : </b></td>
	<td><? echo $thisLOCK_TYPE; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>