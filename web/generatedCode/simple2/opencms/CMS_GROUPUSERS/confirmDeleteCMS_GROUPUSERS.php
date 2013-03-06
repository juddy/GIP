<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisGROUP_ID = $_REQUEST['GROUP_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_GROUPUSERS WHERE GROUP_ID = '$thisGROUP_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisGROUP_ID = MYSQL_RESULT($result,$i,"GROUP_ID");
	$thisUSER_ID = MYSQL_RESULT($result,$i,"USER_ID");
	$thisGROUPUSER_FLAGS = MYSQL_RESULT($result,$i,"GROUPUSER_FLAGS");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>GROUP_ID : </b></td>
	<td><? echo $thisGROUP_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>USER_ID : </b></td>
	<td><? echo $thisUSER_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>GROUPUSER_FLAGS : </b></td>
	<td><? echo $thisGROUPUSER_FLAGS; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="cms_groupusersEnterForm" method="POST" action="deleteCMS_GROUPUSERS.php">
<input type="hidden" name="thisGROUP_IDField" value="<? echo $thisGROUP_ID; ?>">
<input type="submit" name="submitConfirmDeleteCMS_GROUPUSERSForm" value="Delete  from CMS_GROUPUSERS">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>