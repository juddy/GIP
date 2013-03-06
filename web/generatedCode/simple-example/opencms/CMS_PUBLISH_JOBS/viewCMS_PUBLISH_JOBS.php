<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisHISTORY_ID = $_REQUEST['HISTORY_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_PUBLISH_JOBS WHERE HISTORY_ID = '$thisHISTORY_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisHISTORY_ID = MYSQL_RESULT($result,$i,"HISTORY_ID");
	$thisPROJECT_ID = MYSQL_RESULT($result,$i,"PROJECT_ID");
	$thisPROJECT_NAME = MYSQL_RESULT($result,$i,"PROJECT_NAME");
	$thisUSER_ID = MYSQL_RESULT($result,$i,"USER_ID");
	$thisPUBLISH_LOCALE = MYSQL_RESULT($result,$i,"PUBLISH_LOCALE");
	$thisPUBLISH_FLAGS = MYSQL_RESULT($result,$i,"PUBLISH_FLAGS");
	$thisPUBLISH_LIST = MYSQL_RESULT($result,$i,"PUBLISH_LIST");
	$thisPUBLISH_REPORT = MYSQL_RESULT($result,$i,"PUBLISH_REPORT");
	$thisRESOURCE_COUNT = MYSQL_RESULT($result,$i,"RESOURCE_COUNT");
	$thisENQUEUE_TIME = MYSQL_RESULT($result,$i,"ENQUEUE_TIME");
	$thisSTART_TIME = MYSQL_RESULT($result,$i,"START_TIME");
	$thisFINISH_TIME = MYSQL_RESULT($result,$i,"FINISH_TIME");

}
?>

View Record<br><br>

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