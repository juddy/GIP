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

View Record<br><br>

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

<?php
include_once("../common/footer.php");
?>