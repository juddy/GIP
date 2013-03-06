<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisRESOURCE_ID = $_REQUEST['RESOURCE_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_OFFLINE_CONTENTS WHERE RESOURCE_ID = '$thisRESOURCE_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisRESOURCE_ID = MYSQL_RESULT($result,$i,"RESOURCE_ID");
	$thisFILE_CONTENT = MYSQL_RESULT($result,$i,"FILE_CONTENT");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>RESOURCE_ID : </b></td>
	<td><? echo $thisRESOURCE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>FILE_CONTENT : </b></td>
	<td><? echo $thisFILE_CONTENT; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="cms_offline_contentsEnterForm" method="POST" action="deleteCMS_OFFLINE_CONTENTS.php">
<input type="hidden" name="thisRESOURCE_IDField" value="<? echo $thisRESOURCE_ID; ?>">
<input type="submit" name="submitConfirmDeleteCMS_OFFLINE_CONTENTSForm" value="Delete  from CMS_OFFLINE_CONTENTS">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>