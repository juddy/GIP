<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter TABLE_CONSTRAINTS</h2>
<form name="table_constraintsEnterForm" method="POST" action="insertNewTable_constraints.php">

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
		<td align="right"> <b> TABLE_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisTABLE_SCHEMAField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_NAME :  </b> </td>
		<td> <input type="text" name="thisTABLE_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CONSTRAINT_TYPE :  </b> </td>
		<td> <input type="text" name="thisCONSTRAINT_TYPEField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterTABLE_CONSTRAINTSForm" value="Enter TABLE_CONSTRAINTS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>