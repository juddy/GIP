<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisRESOURCE_PATH = $_REQUEST['RESOURCE_PATHField']
?>
<?php
$sql = "SELECT   * FROM CMS_RESOURCE_LOCKS WHERE RESOURCE_PATH = '$thisRESOURCE_PATH'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisRESOURCE_PATH = MYSQL_RESULT($result,$i,"RESOURCE_PATH");
	$thisUSER_ID = MYSQL_RESULT($result,$i,"USER_ID");
	$thisPROJECT_ID = MYSQL_RESULT($result,$i,"PROJECT_ID");
	$thisLOCK_TYPE = MYSQL_RESULT($result,$i,"LOCK_TYPE");

}
?>

View Record<br><br>

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