<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_GROUPUSERS</h2>
<form name="cms_groupusersEnterForm" method="POST" action="insertNewCms_groupusers.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> GROUP_ID :  </b> </td>
		<td> <input type="text" name="thisGROUP_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_ID :  </b> </td>
		<td> <input type="text" name="thisUSER_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> GROUPUSER_FLAGS :  </b> </td>
		<td> <input type="text" name="thisGROUPUSER_FLAGSField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_GROUPUSERSForm" value="Enter CMS_GROUPUSERS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>