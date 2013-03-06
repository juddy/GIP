<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisPUBLISH_TAG = addslashes($_REQUEST['thisPUBLISH_TAGField']);
	$thisPROJECT_ID = addslashes($_REQUEST['thisPROJECT_IDField']);
	$thisRESOURCE_PATH = addslashes($_REQUEST['thisRESOURCE_PATHField']);

?>
<?
$sql = "UPDATE CMS_HISTORY_PROJECTRESOURCES SET PUBLISH_TAG = '$thisPUBLISH_TAG' , PROJECT_ID = '$thisPROJECT_ID' , RESOURCE_PATH = '$thisRESOURCE_PATH'  WHERE PUBLISH_TAG = '$thisPUBLISH_TAG'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>PUBLISH_TAG : </b></td>
	<td><? echo $thisPUBLISH_TAG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROJECT_ID : </b></td>
	<td><? echo $thisPROJECT_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_PATH : </b></td>
	<td><? echo $thisRESOURCE_PATH; ?></td>
</tr>
</table>
<br><br><a href="listCMS_HISTORY_PROJECTRESOURCES.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>