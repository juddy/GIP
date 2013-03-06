<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter SESSION_VARIABLES</h2>
<form name="session_variablesEnterForm" method="POST" action="insertNewSession_variables.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> VARIABLE_NAME :  </b> </td>
		<td> <input type="text" name="thisVARIABLE_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> VARIABLE_VALUE :  </b> </td>
		<td> <input type="text" name="thisVARIABLE_VALUEField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterSESSION_VARIABLESForm" value="Enter SESSION_VARIABLES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>