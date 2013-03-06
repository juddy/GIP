<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter STATISTICS</h2>
<form name="statisticsEnterForm" method="POST" action="insertNewStatistics.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_CATALOG :  </b> </td>
		<td> <input type="text" name="thisTABLE_CATALOGField" size="20" value="">  </td> 
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
		<td align="right"> <b> NON_UNIQUE :  </b> </td>
		<td> <input type="text" name="thisNON_UNIQUEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INDEX_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisINDEX_SCHEMAField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INDEX_NAME :  </b> </td>
		<td> <input type="text" name="thisINDEX_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SEQ_IN_INDEX :  </b> </td>
		<td> <input type="text" name="thisSEQ_IN_INDEXField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COLUMN_NAME :  </b> </td>
		<td> <input type="text" name="thisCOLUMN_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COLLATION :  </b> </td>
		<td> <input type="text" name="thisCOLLATIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CARDINALITY :  </b> </td>
		<td> <input type="text" name="thisCARDINALITYField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SUB_PART :  </b> </td>
		<td> <input type="text" name="thisSUB_PARTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PACKED :  </b> </td>
		<td> <input type="text" name="thisPACKEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NULLABLE :  </b> </td>
		<td> <input type="text" name="thisNULLABLEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INDEX_TYPE :  </b> </td>
		<td> <input type="text" name="thisINDEX_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COMMENT :  </b> </td>
		<td> <input type="text" name="thisCOMMENTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INDEX_COMMENT :  </b> </td>
		<td> <input type="text" name="thisINDEX_COMMENTField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterSTATISTICSForm" value="Enter STATISTICS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>