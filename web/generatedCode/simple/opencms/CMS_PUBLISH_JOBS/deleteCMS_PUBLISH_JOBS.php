<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisHISTORY_ID = addslashes($_REQUEST['thisHISTORY_IDField']);
	$thisPROJECT_ID = addslashes($_REQUEST['thisPROJECT_IDField']);
	$thisPROJECT_NAME = addslashes($_REQUEST['thisPROJECT_NAMEField']);
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisPUBLISH_LOCALE = addslashes($_REQUEST['thisPUBLISH_LOCALEField']);
	$thisPUBLISH_FLAGS = addslashes($_REQUEST['thisPUBLISH_FLAGSField']);
	$thisPUBLISH_LIST = addslashes($_REQUEST['thisPUBLISH_LISTField']);
	$thisPUBLISH_REPORT = addslashes($_REQUEST['thisPUBLISH_REPORTField']);
	$thisRESOURCE_COUNT = addslashes($_REQUEST['thisRESOURCE_COUNTField']);
	$thisENQUEUE_TIME = addslashes($_REQUEST['thisENQUEUE_TIMEField']);
	$thisSTART_TIME = addslashes($_REQUEST['thisSTART_TIMEField']);
	$thisFINISH_TIME = addslashes($_REQUEST['thisFINISH_TIMEField']);

?>
<?
$sql = "DELETE FROM CMS_PUBLISH_JOBS WHERE HISTORY_ID = '$thisHISTORY_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

<table>
<tr height="30">
	<td align="right"><b>HISTORY_ID : </b></td>
	<td><? echo $thisHISTORY_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROJECT_ID : </b></td>
	<td><? echo $thisPROJECT_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROJECT_NAME : </b></td>
	<td><? echo $thisPROJECT_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>USER_ID : </b></td>
	<td><? echo $thisUSER_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PUBLISH_LOCALE : </b></td>
	<td><? echo $thisPUBLISH_LOCALE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PUBLISH_FLAGS : </b></td>
	<td><? echo $thisPUBLISH_FLAGS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PUBLISH_LIST : </b></td>
	<td><? echo $thisPUBLISH_LIST; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PUBLISH_REPORT : </b></td>
	<td><? echo $thisPUBLISH_REPORT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_COUNT : </b></td>
	<td><? echo $thisRESOURCE_COUNT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ENQUEUE_TIME : </b></td>
	<td><? echo $thisENQUEUE_TIME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>START_TIME : </b></td>
	<td><? echo $thisSTART_TIME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>FINISH_TIME : </b></td>
	<td><? echo $thisFINISH_TIME; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>