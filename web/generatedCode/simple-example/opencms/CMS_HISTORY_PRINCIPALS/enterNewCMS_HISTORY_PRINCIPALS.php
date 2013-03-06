<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_HISTORY_PRINCIPALS</h2>
<form name="cms_history_principalsEnterForm" method="POST" action="insertNewCms_history_principals.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_ID :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_NAME :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_DESCRIPTION :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_DESCRIPTIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_OU :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_OUField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_EMAIL :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_EMAILField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_TYPE :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_USERDELETED :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_USERDELETEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_DATEDELETED :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_DATEDELETEDField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_HISTORY_PRINCIPALSForm" value="Enter CMS_HISTORY_PRINCIPALS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>