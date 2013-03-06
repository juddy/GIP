<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_RESOURCE_LOCKS</h2>
<form name="cms_resource_locksEnterForm" method="POST" action="insertNewCms_resource_locks.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_PATH :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_PATHField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_ID :  </b> </td>
		<td> <input type="text" name="thisUSER_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_ID :  </b> </td>
		<td> <input type="text" name="thisPROJECT_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LOCK_TYPE :  </b> </td>
		<td> <input type="text" name="thisLOCK_TYPEField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_RESOURCE_LOCKSForm" value="Enter CMS_RESOURCE_LOCKS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>