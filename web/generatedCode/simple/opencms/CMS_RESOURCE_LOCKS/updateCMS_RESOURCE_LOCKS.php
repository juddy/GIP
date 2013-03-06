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
$sql = "UPDATE CMS_RESOURCE_LOCKS SET RESOURCE_PATH = '$thisRESOURCE_PATH' , USER_ID = '$thisUSER_ID' , PROJECT_ID = '$thisPROJECT_ID' , LOCK_TYPE = '$thisLOCK_TYPE'  WHERE RESOURCE_PATH = '$thisRESOURCE_PATH'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

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
<br><br><a href="listCMS_RESOURCE_LOCKS.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>