<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisRELATION_SOURCE_ID = addslashes($_REQUEST['thisRELATION_SOURCE_IDField']);
	$thisRELATION_SOURCE_PATH = addslashes($_REQUEST['thisRELATION_SOURCE_PATHField']);
	$thisRELATION_TARGET_ID = addslashes($_REQUEST['thisRELATION_TARGET_IDField']);
	$thisRELATION_TARGET_PATH = addslashes($_REQUEST['thisRELATION_TARGET_PATHField']);
	$thisRELATION_TYPE = addslashes($_REQUEST['thisRELATION_TYPEField']);

?>
<?
$sql = "UPDATE CMS_OFFLINE_RESOURCE_RELATIONS SET RELATION_SOURCE_ID = '$thisRELATION_SOURCE_ID' , RELATION_SOURCE_PATH = '$thisRELATION_SOURCE_PATH' , RELATION_TARGET_ID = '$thisRELATION_TARGET_ID' , RELATION_TARGET_PATH = '$thisRELATION_TARGET_PATH' , RELATION_TYPE = '$thisRELATION_TYPE'  WHERE RELATION_SOURCE_ID = '$thisRELATION_SOURCE_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>RELATION_SOURCE_ID : </b></td>
	<td><? echo $thisRELATION_SOURCE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RELATION_SOURCE_PATH : </b></td>
	<td><? echo $thisRELATION_SOURCE_PATH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RELATION_TARGET_ID : </b></td>
	<td><? echo $thisRELATION_TARGET_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RELATION_TARGET_PATH : </b></td>
	<td><? echo $thisRELATION_TARGET_PATH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RELATION_TYPE : </b></td>
	<td><? echo $thisRELATION_TYPE; ?></td>
</tr>
</table>
<br><br><a href="listCMS_OFFLINE_RESOURCE_RELATIONS.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>