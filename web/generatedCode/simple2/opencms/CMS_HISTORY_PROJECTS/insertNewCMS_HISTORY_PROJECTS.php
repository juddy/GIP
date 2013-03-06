<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisPROJECT_ID = addslashes($_REQUEST['thisPROJECT_IDField']);
	$thisPROJECT_NAME = addslashes($_REQUEST['thisPROJECT_NAMEField']);
	$thisPROJECT_DESCRIPTION = addslashes($_REQUEST['thisPROJECT_DESCRIPTIONField']);
	$thisPROJECT_TYPE = addslashes($_REQUEST['thisPROJECT_TYPEField']);
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisGROUP_ID = addslashes($_REQUEST['thisGROUP_IDField']);
	$thisMANAGERGROUP_ID = addslashes($_REQUEST['thisMANAGERGROUP_IDField']);
	$thisDATE_CREATED = addslashes($_REQUEST['thisDATE_CREATEDField']);
	$thisPUBLISH_TAG = addslashes($_REQUEST['thisPUBLISH_TAGField']);
	$thisPROJECT_PUBLISHDATE = addslashes($_REQUEST['thisPROJECT_PUBLISHDATEField']);
	$thisPROJECT_PUBLISHED_BY = addslashes($_REQUEST['thisPROJECT_PUBLISHED_BYField']);
	$thisPROJECT_OU = addslashes($_REQUEST['thisPROJECT_OUField']);

?>
<?
$sqlQuery = "INSERT INTO CMS_HISTORY_PROJECTS (PROJECT_ID , PROJECT_NAME , PROJECT_DESCRIPTION , PROJECT_TYPE , USER_ID , GROUP_ID , MANAGERGROUP_ID , DATE_CREATED , PUBLISH_TAG , PROJECT_PUBLISHDATE , PROJECT_PUBLISHED_BY , PROJECT_OU ) VALUES ('$thisPROJECT_ID' , '$thisPROJECT_NAME' , '$thisPROJECT_DESCRIPTION' , '$thisPROJECT_TYPE' , '$thisUSER_ID' , '$thisGROUP_ID' , '$thisMANAGERGROUP_ID' , '$thisDATE_CREATED' , '$thisPUBLISH_TAG' , '$thisPROJECT_PUBLISHDATE' , '$thisPROJECT_PUBLISHED_BY' , '$thisPROJECT_OU' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

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
	<td align="right"><b>PUBLISH_TAG : </b></td>
	<td><? echo $thisPUBLISH_TAG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROJECT_PUBLISHDATE : </b></td>
	<td><? echo $thisPROJECT_PUBLISHDATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROJECT_PUBLISHED_BY : </b></td>
	<td><? echo $thisPROJECT_PUBLISHED_BY; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROJECT_OU : </b></td>
	<td><? echo $thisPROJECT_OU; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>