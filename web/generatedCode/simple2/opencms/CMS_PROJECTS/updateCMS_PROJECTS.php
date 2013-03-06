<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisPROJECT_ID = addslashes($_REQUEST['thisPROJECT_IDField']);
	$thisPROJECT_NAME = addslashes($_REQUEST['thisPROJECT_NAMEField']);
	$thisPROJECT_DESCRIPTION = addslashes($_REQUEST['thisPROJECT_DESCRIPTIONField']);
	$thisPROJECT_FLAGS = addslashes($_REQUEST['thisPROJECT_FLAGSField']);
	$thisPROJECT_TYPE = addslashes($_REQUEST['thisPROJECT_TYPEField']);
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisGROUP_ID = addslashes($_REQUEST['thisGROUP_IDField']);
	$thisMANAGERGROUP_ID = addslashes($_REQUEST['thisMANAGERGROUP_IDField']);
	$thisDATE_CREATED = addslashes($_REQUEST['thisDATE_CREATEDField']);
	$thisPROJECT_OU = addslashes($_REQUEST['thisPROJECT_OUField']);

?>
<?
$sql = "UPDATE CMS_PROJECTS SET PROJECT_ID = '$thisPROJECT_ID' , PROJECT_NAME = '$thisPROJECT_NAME' , PROJECT_DESCRIPTION = '$thisPROJECT_DESCRIPTION' , PROJECT_FLAGS = '$thisPROJECT_FLAGS' , PROJECT_TYPE = '$thisPROJECT_TYPE' , USER_ID = '$thisUSER_ID' , GROUP_ID = '$thisGROUP_ID' , MANAGERGROUP_ID = '$thisMANAGERGROUP_ID' , DATE_CREATED = '$thisDATE_CREATED' , PROJECT_OU = '$thisPROJECT_OU'  WHERE PROJECT_ID = '$thisPROJECT_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>PROJECT_ID : </b></td>
	<td><? echo $thisPROJECT_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROJECT_NAME : </b></td>
	<td><? echo $thisPROJECT_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROJECT_DESCRIPTION : </b></td>
	<td><? echo $thisPROJECT_DESCRIPTION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROJECT_FLAGS : </b></td>
	<td><? echo $thisPROJECT_FLAGS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROJECT_TYPE : </b></td>
	<td><? echo $thisPROJECT_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>USER_ID : </b></td>
	<td><? echo $thisUSER_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>GROUP_ID : </b></td>
	<td><? echo $thisGROUP_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>MANAGERGROUP_ID : </b></td>
	<td><? echo $thisMANAGERGROUP_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATE_CREATED : </b></td>
	<td><? echo $thisDATE_CREATED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROJECT_OU : </b></td>
	<td><? echo $thisPROJECT_OU; ?></td>
</tr>
</table>
<br><br><a href="listCMS_PROJECTS.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>