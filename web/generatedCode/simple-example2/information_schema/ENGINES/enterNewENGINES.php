<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter ENGINES</h2>
<form name="enginesEnterForm" method="POST" action="insertNewEngines.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> ENGINE :  </b> </td>
		<td> <input type="text" name="thisENGINEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SUPPORT :  </b> </td>
		<td> <input type="text" name="thisSUPPORTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COMMENT :  </b> </td>
		<td> <input type="text" name="thisCOMMENTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TRANSACTIONS :  </b> </td>
		<td> <input type="text" name="thisTRANSACTIONSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> XA :  </b> </td>
		<td> <input type="text" name="thisXAField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SAVEPOINTS :  </b> </td>
		<td> <input type="text" name="thisSAVEPOINTSField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterENGINESForm" value="Enter ENGINES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>