<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisGROUP_ID = $_REQUEST['GROUP_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_GROUPS WHERE GROUP_ID = '$thisGROUP_ID'";
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
	$thisPARENT_GROUP_ID = MYSQL_RESULT($result,$i,"PARENT_GROUP_ID");
	$thisGROUP_NAME = MYSQL_RESULT($result,$i,"GROUP_NAME");
	$thisGROUP_DESCRIPTION = MYSQL_RESULT($result,$i,"GROUP_DESCRIPTION");
	$thisGROUP_FLAGS = MYSQL_RESULT($result,$i,"GROUP_FLAGS");
	$thisGROUP_OU = MYSQL_RESULT($result,$i,"GROUP_OU");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>GROUP_ID : </b></td>
	<td><? echo $thisGROUP_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PARENT_GROUP_ID : </b></td>
	<td><? echo $thisPARENT_GROUP_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>GROUP_NAME : </b></td>
	<td><? echo $thisGROUP_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>GROUP_DESCRIPTION : </b></td>
	<td><? echo $thisGROUP_DESCRIPTION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>GROUP_FLAGS : </b></td>
	<td><? echo $thisGROUP_FLAGS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>GROUP_OU : </b></td>
	<td><? echo $thisGROUP_OU; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="cms_groupsEnterForm" method="POST" action="deleteCMS_GROUPS.php">
<input type="hidden" name="thisGROUP_IDField" value="<? echo $thisGROUP_ID; ?>">
<input type="submit" name="submitConfirmDeleteCMS_GROUPSForm" value="Delete  from CMS_GROUPS">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>