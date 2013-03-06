<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter COLLATION_CHARACTER_SET_APPLICABILITY</h2>
<form name="collation_character_set_applicabilityEnterForm" method="POST" action="insertNewCollation_character_set_applicability.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> COLLATION_NAME :  </b> </td>
		<td> <input type="text" name="thisCOLLATION_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHARACTER_SET_NAME :  </b> </td>
		<td> <input type="text" name="thisCHARACTER_SET_NAMEField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCOLLATION_CHARACTER_SET_APPLICABILITYForm" value="Enter COLLATION_CHARACTER_SET_APPLICABILITY">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>