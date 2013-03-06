<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_OFFLINE_PROPERTIES</h2>
<form name="cms_offline_propertiesEnterForm" method="POST" action="insertNewCms_offline_properties.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> PROPERTY_ID :  </b> </td>
		<td> <input type="text" name="thisPROPERTY_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROPERTYDEF_ID :  </b> </td>
		<td> <input type="text" name="thisPROPERTYDEF_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROPERTY_MAPPING_ID :  </b> </td>
		<td> <input type="text" name="thisPROPERTY_MAPPING_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROPERTY_MAPPING_TYPE :  </b> </td>
		<td> <input type="text" name="thisPROPERTY_MAPPING_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROPERTY_VALUE :  </b> </td>
		<td> <input type="text" name="thisPROPERTY_VALUEField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_OFFLINE_PROPERTIESForm" value="Enter CMS_OFFLINE_PROPERTIES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>