<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter REFERENTIAL_CONSTRAINTS</h2>
<form name="referential_constraintsEnterForm" method="POST" action="insertNewReferential_constraints.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> CONSTRAINT_CATALOG :  </b> </td>
		<td> <input type="text" name="thisCONSTRAINT_CATALOGField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CONSTRAINT_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisCONSTRAINT_SCHEMAField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CONSTRAINT_NAME :  </b> </td>
		<td> <input type="text" name="thisCONSTRAINT_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> UNIQUE_CONSTRAINT_CATALOG :  </b> </td>
		<td> <input type="text" name="thisUNIQUE_CONSTRAINT_CATALOGField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> UNIQUE_CONSTRAINT_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisUNIQUE_CONSTRAINT_SCHEMAField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> UNIQUE_CONSTRAINT_NAME :  </b> </td>
		<td> <input type="text" name="thisUNIQUE_CONSTRAINT_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> MATCH_OPTION :  </b> </td>
		<td> <input type="text" name="thisMATCH_OPTIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> UPDATE_RULE :  </b> </td>
		<td> <input type="text" name="thisUPDATE_RULEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DELETE_RULE :  </b> </td>
		<td> <input type="text" name="thisDELETE_RULEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_NAME :  </b> </td>
		<td> <input type="text" name="thisTABLE_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> REFERENCED_TABLE_NAME :  </b> </td>
		<td> <input type="text" name="thisREFERENCED_TABLE_NAMEField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterREFERENTIAL_CONSTRAINTSForm" value="Enter REFERENTIAL_CONSTRAINTS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>