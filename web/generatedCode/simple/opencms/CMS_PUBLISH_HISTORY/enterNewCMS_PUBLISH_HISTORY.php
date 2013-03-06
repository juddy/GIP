<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_PUBLISH_HISTORY</h2>
<form name="cms_publish_historyEnterForm" method="POST" action="insertNewCms_publish_history.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> HISTORY_ID :  </b> </td>
		<td> <input type="text" name="thisHISTORY_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_TAG :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_TAGField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STRUCTURE_ID :  </b> </td>
		<td> <input type="text" name="thisSTRUCTURE_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_ID :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_PATH :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_PATHField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_STATE :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_STATEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_TYPE :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SIBLING_COUNT :  </b> </td>
		<td> <input type="text" name="thisSIBLING_COUNTField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_PUBLISH_HISTORYForm" value="Enter CMS_PUBLISH_HISTORY">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>