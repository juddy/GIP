<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisRESOURCE_PATH = $_REQUEST['RESOURCE_PATHField']
?>
<?php
$sql = "SELECT   * FROM CMS_RESOURCE_LOCKS WHERE RESOURCE_PATH = '$thisRESOURCE_PATH'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisRESOURCE_PATH = MYSQL_RESULT($result,$i,"RESOURCE_PATH");
	$thisUSER_ID = MYSQL_RESULT($result,$i,"USER_ID");
	$thisPROJECT_ID = MYSQL_RESULT($result,$i,"PROJECT_ID");
	$thisLOCK_TYPE = MYSQL_RESULT($result,$i,"LOCK_TYPE");

}
?>

<h2>Update CMS_RESOURCE_LOCKS</h2>
<form name="cms_resource_locksUpdateForm" method="POST" action="updateCms_resource_locks.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_PATH :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_PATHField" size="20" value="<? echo $thisRESOURCE_PATH; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_ID :  </b> </td>
		<td> <input type="text" name="thisUSER_IDField" size="20" value="<? echo $thisUSER_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_ID :  </b> </td>
		<td> <input type="text" name="thisPROJECT_IDField" size="20" value="<? echo $thisPROJECT_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LOCK_TYPE :  </b> </td>
		<td> <input type="text" name="thisLOCK_TYPEField" size="20" value="<? echo $thisLOCK_TYPE; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_RESOURCE_LOCKSForm" value="Update CMS_RESOURCE_LOCKS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>