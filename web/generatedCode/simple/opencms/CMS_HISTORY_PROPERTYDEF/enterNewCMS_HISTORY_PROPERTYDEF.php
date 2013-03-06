<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_HISTORY_PROPERTYDEF</h2>
<form name="cms_history_propertydefEnterForm" method="POST" action="insertNewCms_history_propertydef.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> PROPERTYDEF_ID :  </b> </td>
		<td> <input type="text" name="thisPROPERTYDEF_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROPERTYDEF_NAME :  </b> </td>
		<td> <input type="text" name="thisPROPERTYDEF_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROPERTYDEF_TYPE :  </b> </td>
		<td> <input type="text" name="thisPROPERTYDEF_TYPEField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_HISTORY_PROPERTYDEFForm" value="Enter CMS_HISTORY_PROPERTYDEF">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>