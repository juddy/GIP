<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_HISTORY_RESOURCES</h2>
<form name="cms_history_resourcesEnterForm" method="POST" action="insertNewCms_history_resources.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_ID :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_TYPE :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_FLAGS :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_FLAGSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_STATE :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_STATEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_SIZE :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_SIZEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATE_CONTENT :  </b> </td>
		<td> <input type="text" name="thisDATE_CONTENTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SIBLING_COUNT :  </b> </td>
		<td> <input type="text" name="thisSIBLING_COUNTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATE_CREATED :  </b> </td>
		<td> <input type="text" name="thisDATE_CREATEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATE_LASTMODIFIED :  </b> </td>
		<td> <input type="text" name="thisDATE_LASTMODIFIEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_CREATED :  </b> </td>
		<td> <input type="text" name="thisUSER_CREATEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_LASTMODIFIED :  </b> </td>
		<td> <input type="text" name="thisUSER_LASTMODIFIEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_LASTMODIFIED :  </b> </td>
		<td> <input type="text" name="thisPROJECT_LASTMODIFIEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_TAG :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_TAGField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_VERSION :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_VERSIONField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_HISTORY_RESOURCESForm" value="Enter CMS_HISTORY_RESOURCES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>