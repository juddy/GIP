<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_USER_PUBLISH_LIST</h2>
<form name="cms_user_publish_listEnterForm" method="POST" action="insertNewCms_user_publish_list.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> USER_ID :  </b> </td>
		<td> <input type="text" name="thisUSER_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STRUCTURE_ID :  </b> </td>
		<td> <input type="text" name="thisSTRUCTURE_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATE_CHANGED :  </b> </td>
		<td> <input type="text" name="thisDATE_CHANGEDField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_USER_PUBLISH_LISTForm" value="Enter CMS_USER_PUBLISH_LIST">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>