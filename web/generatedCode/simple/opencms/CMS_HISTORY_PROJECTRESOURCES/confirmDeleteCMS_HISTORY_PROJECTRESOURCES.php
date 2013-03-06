<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPUBLISH_TAG = $_REQUEST['PUBLISH_TAGField']
?>
<?php
$sql = "SELECT   * FROM CMS_HISTORY_PROJECTRESOURCES WHERE PUBLISH_TAG = '$thisPUBLISH_TAG'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisPUBLISH_TAG = MYSQL_RESULT($result,$i,"PUBLISH_TAG");
	$thisPROJECT_ID = MYSQL_RESULT($result,$i,"PROJECT_ID");
	$thisRESOURCE_PATH = MYSQL_RESULT($result,$i,"RESOURCE_PATH");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

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

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="cms_history_projectresourcesEnterForm" method="POST" action="deleteCMS_HISTORY_PROJECTRESOURCES.php">
<input type="hidden" name="thisPUBLISH_TAGField" value="<? echo $thisPUBLISH_TAG; ?>">
<input type="submit" name="submitConfirmDeleteCMS_HISTORY_PROJECTRESOURCESForm" value="Delete  from CMS_HISTORY_PROJECTRESOURCES">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>