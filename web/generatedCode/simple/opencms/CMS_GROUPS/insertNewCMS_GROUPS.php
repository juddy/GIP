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
$sqlQuery = "INSERT INTO CMS_GROUPS (GROUP_ID , PARENT_GROUP_ID , GROUP_NAME , GROUP_DESCRIPTION , GROUP_FLAGS , GROUP_OU ) VALUES ('$thisGROUP_ID' , '$thisPARENT_GROUP_ID' , '$thisGROUP_NAME' , '$thisGROUP_DESCRIPTION' , '$thisGROUP_FLAGS' , '$thisGROUP_OU' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

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