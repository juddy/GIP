<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisGROUP_ID = addslashes($_REQUEST['thisGROUP_IDField']);
	$thisPARENT_GROUP_ID = addslashes($_REQUEST['thisPARENT_GROUP_IDField']);
	$thisGROUP_NAME = addslashes($_REQUEST['thisGROUP_NAMEField']);
	$thisGROUP_DESCRIPTION = addslashes($_REQUEST['thisGROUP_DESCRIPTIONField']);
	$thisGROUP_FLAGS = addslashes($_REQUEST['thisGROUP_FLAGSField']);
	$thisGROUP_OU = addslashes($_REQUEST['thisGROUP_OUField']);

?>
<?
$sql = "UPDATE CMS_GROUPS SET GROUP_ID = '$thisGROUP_ID' , PARENT_GROUP_ID = '$thisPARENT_GROUP_ID' , GROUP_NAME = '$thisGROUP_NAME' , GROUP_DESCRIPTION = '$thisGROUP_DESCRIPTION' , GROUP_FLAGS = '$thisGROUP_FLAGS' , GROUP_OU = '$thisGROUP_OU'  WHERE GROUP_ID = '$thisGROUP_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

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
<br><br><a href="listCMS_GROUPS.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>