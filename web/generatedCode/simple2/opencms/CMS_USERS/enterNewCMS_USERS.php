<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_USERS</h2>
<form name="cms_usersEnterForm" method="POST" action="insertNewCms_users.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> USER_ID :  </b> </td>
		<td> <input type="text" name="thisUSER_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_NAME :  </b> </td>
		<td> <input type="text" name="thisUSER_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_PASSWORD :  </b> </td>
		<td> <input type="text" name="thisUSER_PASSWORDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_FIRSTNAME :  </b> </td>
		<td> <input type="text" name="thisUSER_FIRSTNAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_LASTNAME :  </b> </td>
		<td> <input type="text" name="thisUSER_LASTNAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_EMAIL :  </b> </td>
		<td> <input type="text" name="thisUSER_EMAILField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_LASTLOGIN :  </b> </td>
		<td> <input type="text" name="thisUSER_LASTLOGINField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_FLAGS :  </b> </td>
		<td> <input type="text" name="thisUSER_FLAGSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_OU :  </b> </td>
		<td> <input type="text" name="thisUSER_OUField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_DATECREATED :  </b> </td>
		<td> <input type="text" name="thisUSER_DATECREATEDField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_USERSForm" value="Enter CMS_USERS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>