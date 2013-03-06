<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter USER_PRIVILEGES</h2>
<form name="user_privilegesEnterForm" method="POST" action="insertNewUser_privileges.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> GRANTEE :  </b> </td>
		<td> <input type="text" name="thisGRANTEEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_CATALOG :  </b> </td>
		<td> <input type="text" name="thisTABLE_CATALOGField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PRIVILEGE_TYPE :  </b> </td>
		<td> <input type="text" name="thisPRIVILEGE_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> IS_GRANTABLE :  </b> </td>
		<td> <input type="text" name="thisIS_GRANTABLEField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterUSER_PRIVILEGESForm" value="Enter USER_PRIVILEGES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>