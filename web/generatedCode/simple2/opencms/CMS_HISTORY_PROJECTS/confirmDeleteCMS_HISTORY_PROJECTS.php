<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPROJECT_ID = $_REQUEST['PROJECT_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_HISTORY_PROJECTS WHERE PROJECT_ID = '$thisPROJECT_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisPROJECT_ID = MYSQL_RESULT($result,$i,"PROJECT_ID");
	$thisPROJECT_NAME = MYSQL_RESULT($result,$i,"PROJECT_NAME");
	$thisPROJECT_DESCRIPTION = MYSQL_RESULT($result,$i,"PROJECT_DESCRIPTION");
	$thisPROJECT_TYPE = MYSQL_RESULT($result,$i,"PROJECT_TYPE");
	$thisUSER_ID = MYSQL_RESULT($result,$i,"USER_ID");
	$thisGROUP_ID = MYSQL_RESULT($result,$i,"GROUP_ID");
	$thisMANAGERGROUP_ID = MYSQL_RESULT($result,$i,"MANAGERGROUP_ID");
	$thisDATE_CREATED = MYSQL_RESULT($result,$i,"DATE_CREATED");
	$thisPUBLISH_TAG = MYSQL_RESULT($result,$i,"PUBLISH_TAG");
	$thisPROJECT_PUBLISHDATE = MYSQL_RESULT($result,$i,"PROJECT_PUBLISHDATE");
	$thisPROJECT_PUBLISHED_BY = MYSQL_RESULT($result,$i,"PROJECT_PUBLISHED_BY");
	$thisPROJECT_OU = MYSQL_RESULT($result,$i,"PROJECT_OU");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

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

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="cms_history_projectsEnterForm" method="POST" action="deleteCMS_HISTORY_PROJECTS.php">
<input type="hidden" name="thisPROJECT_IDField" value="<? echo $thisPROJECT_ID; ?>">
<input type="submit" name="submitConfirmDeleteCMS_HISTORY_PROJECTSForm" value="Delete  from CMS_HISTORY_PROJECTS">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>