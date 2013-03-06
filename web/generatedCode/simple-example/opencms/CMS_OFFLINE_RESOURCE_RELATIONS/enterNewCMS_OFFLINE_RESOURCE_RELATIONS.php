<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_OFFLINE_RESOURCE_RELATIONS</h2>
<form name="cms_offline_resource_relationsEnterForm" method="POST" action="insertNewCms_offline_resource_relations.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> RELATION_SOURCE_ID :  </b> </td>
		<td> <input type="text" name="thisRELATION_SOURCE_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RELATION_SOURCE_PATH :  </b> </td>
		<td> <input type="text" name="thisRELATION_SOURCE_PATHField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RELATION_TARGET_ID :  </b> </td>
		<td> <input type="text" name="thisRELATION_TARGET_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RELATION_TARGET_PATH :  </b> </td>
		<td> <input type="text" name="thisRELATION_TARGET_PATHField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RELATION_TYPE :  </b> </td>
		<td> <input type="text" name="thisRELATION_TYPEField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_OFFLINE_RESOURCE_RELATIONSForm" value="Enter CMS_OFFLINE_RESOURCE_RELATIONS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>