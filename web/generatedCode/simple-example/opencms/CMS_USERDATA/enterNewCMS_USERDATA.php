<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_USERDATA</h2>
<form name="cms_userdataEnterForm" method="POST" action="insertNewCms_userdata.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> USER_ID :  </b> </td>
		<td> <input type="text" name="thisUSER_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATA_KEY :  </b> </td>
		<td> <input type="text" name="thisDATA_KEYField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATA_VALUE :  </b> </td>
		<td> <input type="text" name="thisDATA_VALUEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATA_TYPE :  </b> </td>
		<td> <input type="text" name="thisDATA_TYPEField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_USERDATAForm" value="Enter CMS_USERDATA">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>