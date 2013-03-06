<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter COLLATIONS</h2>
<form name="collationsEnterForm" method="POST" action="insertNewCollations.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> COLLATION_NAME :  </b> </td>
		<td> <input type="text" name="thisCOLLATION_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHARACTER_SET_NAME :  </b> </td>
		<td> <input type="text" name="thisCHARACTER_SET_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ID :  </b> </td>
		<td> <input type="text" name="thisIDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> IS_DEFAULT :  </b> </td>
		<td> <input type="text" name="thisIS_DEFAULTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> IS_COMPILED :  </b> </td>
		<td> <input type="text" name="thisIS_COMPILEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SORTLEN :  </b> </td>
		<td> <input type="text" name="thisSORTLENField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCOLLATIONSForm" value="Enter COLLATIONS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>