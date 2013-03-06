<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CHARACTER_SETS</h2>
<form name="character_setsEnterForm" method="POST" action="insertNewCharacter_sets.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> CHARACTER_SET_NAME :  </b> </td>
		<td> <input type="text" name="thisCHARACTER_SET_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DEFAULT_COLLATE_NAME :  </b> </td>
		<td> <input type="text" name="thisDEFAULT_COLLATE_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DESCRIPTION :  </b> </td>
		<td> <input type="text" name="thisDESCRIPTIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> MAXLEN :  </b> </td>
		<td> <input type="text" name="thisMAXLENField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCHARACTER_SETSForm" value="Enter CHARACTER_SETS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>