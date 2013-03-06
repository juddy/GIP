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

<h2>Confirm Record Deletion</h2><br><br>

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

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="cms_resource_locksEnterForm" method="POST" action="deleteCMS_RESOURCE_LOCKS.php">
<input type="hidden" name="thisRESOURCE_PATHField" value="<? echo $thisRESOURCE_PATH; ?>">
<input type="submit" name="submitConfirmDeleteCMS_RESOURCE_LOCKSForm" value="Delete  from CMS_RESOURCE_LOCKS">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>