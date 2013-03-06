<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_GROUPS</h2>
<form name="cms_groupsEnterForm" method="POST" action="insertNewCms_groups.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> GROUP_ID :  </b> </td>
		<td> <input type="text" name="thisGROUP_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PARENT_GROUP_ID :  </b> </td>
		<td> <input type="text" name="thisPARENT_GROUP_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> GROUP_NAME :  </b> </td>
		<td> <input type="text" name="thisGROUP_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> GROUP_DESCRIPTION :  </b> </td>
		<td> <input type="text" name="thisGROUP_DESCRIPTIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> GROUP_FLAGS :  </b> </td>
		<td> <input type="text" name="thisGROUP_FLAGSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> GROUP_OU :  </b> </td>
		<td> <input type="text" name="thisGROUP_OUField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_GROUPSForm" value="Enter CMS_GROUPS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>