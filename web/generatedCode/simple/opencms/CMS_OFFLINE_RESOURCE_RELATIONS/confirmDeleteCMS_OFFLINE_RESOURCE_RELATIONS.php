<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisRELATION_SOURCE_ID = $_REQUEST['RELATION_SOURCE_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_OFFLINE_RESOURCE_RELATIONS WHERE RELATION_SOURCE_ID = '$thisRELATION_SOURCE_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisRELATION_SOURCE_ID = MYSQL_RESULT($result,$i,"RELATION_SOURCE_ID");
	$thisRELATION_SOURCE_PATH = MYSQL_RESULT($result,$i,"RELATION_SOURCE_PATH");
	$thisRELATION_TARGET_ID = MYSQL_RESULT($result,$i,"RELATION_TARGET_ID");
	$thisRELATION_TARGET_PATH = MYSQL_RESULT($result,$i,"RELATION_TARGET_PATH");
	$thisRELATION_TYPE = MYSQL_RESULT($result,$i,"RELATION_TYPE");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

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

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="cms_offline_resource_relationsEnterForm" method="POST" action="deleteCMS_OFFLINE_RESOURCE_RELATIONS.php">
<input type="hidden" name="thisRELATION_SOURCE_IDField" value="<? echo $thisRELATION_SOURCE_ID; ?>">
<input type="submit" name="submitConfirmDeleteCMS_OFFLINE_RESOURCE_RELATIONSForm" value="Delete  from CMS_OFFLINE_RESOURCE_RELATIONS">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>