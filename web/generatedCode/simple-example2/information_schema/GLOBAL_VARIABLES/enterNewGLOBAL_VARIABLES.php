<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter GLOBAL_VARIABLES</h2>
<form name="global_variablesEnterForm" method="POST" action="insertNewGlobal_variables.php">

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

<input type="submit" name="submitEnterGLOBAL_VARIABLESForm" value="Enter GLOBAL_VARIABLES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>