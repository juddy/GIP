<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter TRIGGERS</h2>
<form name="triggersEnterForm" method="POST" action="insertNewTriggers.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> TRIGGER_CATALOG :  </b> </td>
		<td> <input type="text" name="thisTRIGGER_CATALOGField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TRIGGER_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisTRIGGER_SCHEMAField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TRIGGER_NAME :  </b> </td>
		<td> <input type="text" name="thisTRIGGER_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_MANIPULATION :  </b> </td>
		<td> <input type="text" name="thisEVENT_MANIPULATIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_OBJECT_CATALOG :  </b> </td>
		<td> <input type="text" name="thisEVENT_OBJECT_CATALOGField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_OBJECT_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisEVENT_OBJECT_SCHEMAField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_OBJECT_TABLE :  </b> </td>
		<td> <input type="text" name="thisEVENT_OBJECT_TABLEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACTION_ORDER :  </b> </td>
		<td> <input type="text" name="thisACTION_ORDERField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACTION_CONDITION :  </b> </td>
		<td> <input type="text" name="thisACTION_CONDITIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACTION_STATEMENT :  </b> </td>
		<td> <input type="text" name="thisACTION_STATEMENTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACTION_ORIENTATION :  </b> </td>
		<td> <input type="text" name="thisACTION_ORIENTATIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACTION_TIMING :  </b> </td>
		<td> <input type="text" name="thisACTION_TIMINGField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACTION_REFERENCE_OLD_TABLE :  </b> </td>
		<td> <input type="text" name="thisACTION_REFERENCE_OLD_TABLEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACTION_REFERENCE_NEW_TABLE :  </b> </td>
		<td> <input type="text" name="thisACTION_REFERENCE_NEW_TABLEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACTION_REFERENCE_OLD_ROW :  </b> </td>
		<td> <input type="text" name="thisACTION_REFERENCE_OLD_ROWField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACTION_REFERENCE_NEW_ROW :  </b> </td>
		<td> <input type="text" name="thisACTION_REFERENCE_NEW_ROWField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CREATED :  </b> </td>
		<td> <input type="text" name="thisCREATEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SQL_MODE :  </b> </td>
		<td> <input type="text" name="thisSQL_MODEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DEFINER :  </b> </td>
		<td> <input type="text" name="thisDEFINERField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHARACTER_SET_CLIENT :  </b> </td>
		<td> <input type="text" name="thisCHARACTER_SET_CLIENTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COLLATION_CONNECTION :  </b> </td>
		<td> <input type="text" name="thisCOLLATION_CONNECTIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATABASE_COLLATION :  </b> </td>
		<td> <input type="text" name="thisDATABASE_COLLATIONField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterTRIGGERSForm" value="Enter TRIGGERS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>