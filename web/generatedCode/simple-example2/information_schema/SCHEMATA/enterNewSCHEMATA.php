<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter SCHEMATA</h2>
<form name="schemataEnterForm" method="POST" action="insertNewSchemata.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> CATALOG_NAME :  </b> </td>
		<td> <input type="text" name="thisCATALOG_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SCHEMA_NAME :  </b> </td>
		<td> <input type="text" name="thisSCHEMA_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DEFAULT_CHARACTER_SET_NAME :  </b> </td>
		<td> <input type="text" name="thisDEFAULT_CHARACTER_SET_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DEFAULT_COLLATION_NAME :  </b> </td>
		<td> <input type="text" name="thisDEFAULT_COLLATION_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SQL_PATH :  </b> </td>
		<td> <input type="text" name="thisSQL_PATHField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterSCHEMATAForm" value="Enter SCHEMATA">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>