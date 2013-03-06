<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_STATICEXPORT_LINKS</h2>
<form name="cms_staticexport_linksEnterForm" method="POST" action="insertNewCms_staticexport_links.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> LINK_ID :  </b> </td>
		<td> <input type="text" name="thisLINK_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LINK_RFS_PATH :  </b> </td>
		<td> <input type="text" name="thisLINK_RFS_PATHField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LINK_TYPE :  </b> </td>
		<td> <input type="text" name="thisLINK_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LINK_PARAMETER :  </b> </td>
		<td> <input type="text" name="thisLINK_PARAMETERField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LINK_TIMESTAMP :  </b> </td>
		<td> <input type="text" name="thisLINK_TIMESTAMPField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_STATICEXPORT_LINKSForm" value="Enter CMS_STATICEXPORT_LINKS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>