<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisRELATION_SOURCE_ID = $_REQUEST['RELATION_SOURCE_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_OFFLINE_RESOURCE_RELATIONS WHERE RELATION_SOURCE_ID = '$thisRELATION_SOURCE_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisRELATION_SOURCE_ID = MYSQL_RESULT($result,$i,"RELATION_SOURCE_ID");
	$thisRELATION_SOURCE_PATH = MYSQL_RESULT($result,$i,"RELATION_SOURCE_PATH");
	$thisRELATION_TARGET_ID = MYSQL_RESULT($result,$i,"RELATION_TARGET_ID");
	$thisRELATION_TARGET_PATH = MYSQL_RESULT($result,$i,"RELATION_TARGET_PATH");
	$thisRELATION_TYPE = MYSQL_RESULT($result,$i,"RELATION_TYPE");

}
?>

<h2>Update CMS_OFFLINE_RESOURCE_RELATIONS</h2>
<form name="cms_offline_resource_relationsUpdateForm" method="POST" action="updateCms_offline_resource_relations.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> RELATION_SOURCE_ID :  </b> </td>
		<td> <input type="text" name="thisRELATION_SOURCE_IDField" size="20" value="<? echo $thisRELATION_SOURCE_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RELATION_SOURCE_PATH :  </b> </td>
		<td> <input type="text" name="thisRELATION_SOURCE_PATHField" size="20" value="<? echo $thisRELATION_SOURCE_PATH; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RELATION_TARGET_ID :  </b> </td>
		<td> <input type="text" name="thisRELATION_TARGET_IDField" size="20" value="<? echo $thisRELATION_TARGET_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RELATION_TARGET_PATH :  </b> </td>
		<td> <input type="text" name="thisRELATION_TARGET_PATHField" size="20" value="<? echo $thisRELATION_TARGET_PATH; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RELATION_TYPE :  </b> </td>
		<td> <input type="text" name="thisRELATION_TYPEField" size="20" value="<? echo $thisRELATION_TYPE; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_OFFLINE_RESOURCE_RELATIONSForm" value="Update CMS_OFFLINE_RESOURCE_RELATIONS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>