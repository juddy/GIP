<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_HISTORY_STRUCTURE</h2>
<form name="cms_history_structureEnterForm" method="POST" action="insertNewCms_history_structure.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_TAG :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_TAGField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> VERSION :  </b> </td>
		<td> <input type="text" name="thisVERSIONField" size="20" value="">  </td> 
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
		<td align="right"> <b> PARENT_ID :  </b> </td>
		<td> <input type="text" name="thisPARENT_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_PATH :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_PATHField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STRUCTURE_STATE :  </b> </td>
		<td> <input type="text" name="thisSTRUCTURE_STATEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATE_RELEASED :  </b> </td>
		<td> <input type="text" name="thisDATE_RELEASEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATE_EXPIRED :  </b> </td>
		<td> <input type="text" name="thisDATE_EXPIREDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STRUCTURE_VERSION :  </b> </td>
		<td> <input type="text" name="thisSTRUCTURE_VERSIONField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_HISTORY_STRUCTUREForm" value="Enter CMS_HISTORY_STRUCTURE">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>