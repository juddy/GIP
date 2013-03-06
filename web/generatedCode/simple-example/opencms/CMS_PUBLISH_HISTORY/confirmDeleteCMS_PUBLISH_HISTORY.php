<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisHISTORY_ID = $_REQUEST['HISTORY_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_PUBLISH_HISTORY WHERE HISTORY_ID = '$thisHISTORY_ID'";
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
	$thisPUBLISH_TAG = MYSQL_RESULT($result,$i,"PUBLISH_TAG");
	$thisSTRUCTURE_ID = MYSQL_RESULT($result,$i,"STRUCTURE_ID");
	$thisRESOURCE_ID = MYSQL_RESULT($result,$i,"RESOURCE_ID");
	$thisRESOURCE_PATH = MYSQL_RESULT($result,$i,"RESOURCE_PATH");
	$thisRESOURCE_STATE = MYSQL_RESULT($result,$i,"RESOURCE_STATE");
	$thisRESOURCE_TYPE = MYSQL_RESULT($result,$i,"RESOURCE_TYPE");
	$thisSIBLING_COUNT = MYSQL_RESULT($result,$i,"SIBLING_COUNT");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>HISTORY_ID : </b></td>
	<td><? echo $thisHISTORY_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PUBLISH_TAG : </b></td>
	<td><? echo $thisPUBLISH_TAG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STRUCTURE_ID : </b></td>
	<td><? echo $thisSTRUCTURE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_ID : </b></td>
	<td><? echo $thisRESOURCE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_PATH : </b></td>
	<td><? echo $thisRESOURCE_PATH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_STATE : </b></td>
	<td><? echo $thisRESOURCE_STATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_TYPE : </b></td>
	<td><? echo $thisRESOURCE_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SIBLING_COUNT : </b></td>
	<td><? echo $thisSIBLING_COUNT; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="cms_publish_historyEnterForm" method="POST" action="deleteCMS_PUBLISH_HISTORY.php">
<input type="hidden" name="thisHISTORY_IDField" value="<? echo $thisHISTORY_ID; ?>">
<input type="submit" name="submitConfirmDeleteCMS_PUBLISH_HISTORYForm" value="Delete  from CMS_PUBLISH_HISTORY">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>