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

<h2>Update CMS_GROUPS</h2>
<form name="cms_groupsUpdateForm" method="POST" action="updateCms_groups.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> GROUP_ID :  </b> </td>
		<td> <input type="text" name="thisGROUP_IDField" size="20" value="<? echo $thisGROUP_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PARENT_GROUP_ID :  </b> </td>
		<td> <input type="text" name="thisPARENT_GROUP_IDField" size="20" value="<? echo $thisPARENT_GROUP_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> GROUP_NAME :  </b> </td>
		<td> <input type="text" name="thisGROUP_NAMEField" size="20" value="<? echo $thisGROUP_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> GROUP_DESCRIPTION :  </b> </td>
		<td> <input type="text" name="thisGROUP_DESCRIPTIONField" size="20" value="<? echo $thisGROUP_DESCRIPTION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> GROUP_FLAGS :  </b> </td>
		<td> <input type="text" name="thisGROUP_FLAGSField" size="20" value="<? echo $thisGROUP_FLAGS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> GROUP_OU :  </b> </td>
		<td> <input type="text" name="thisGROUP_OUField" size="20" value="<? echo $thisGROUP_OU; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_GROUPSForm" value="Update CMS_GROUPS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>