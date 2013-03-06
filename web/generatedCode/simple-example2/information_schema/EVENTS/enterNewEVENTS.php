<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter EVENTS</h2>
<form name="eventsEnterForm" method="POST" action="insertNewEvents.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_CATALOG :  </b> </td>
		<td> <input type="text" name="thisEVENT_CATALOGField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisEVENT_SCHEMAField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_NAME :  </b> </td>
		<td> <input type="text" name="thisEVENT_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DEFINER :  </b> </td>
		<td> <input type="text" name="thisDEFINERField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TIME_ZONE :  </b> </td>
		<td> <input type="text" name="thisTIME_ZONEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_BODY :  </b> </td>
		<td> <input type="text" name="thisEVENT_BODYField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_DEFINITION :  </b> </td>
		<td> <input type="text" name="thisEVENT_DEFINITIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_TYPE :  </b> </td>
		<td> <input type="text" name="thisEVENT_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EXECUTE_AT :  </b> </td>
		<td> <input type="text" name="thisEXECUTE_ATField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INTERVAL_VALUE :  </b> </td>
		<td> <input type="text" name="thisINTERVAL_VALUEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INTERVAL_FIELD :  </b> </td>
		<td> <input type="text" name="thisINTERVAL_FIELDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SQL_MODE :  </b> </td>
		<td> <input type="text" name="thisSQL_MODEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STARTS :  </b> </td>
		<td> <input type="text" name="thisSTARTSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ENDS :  </b> </td>
		<td> <input type="text" name="thisENDSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STATUS :  </b> </td>
		<td> <input type="text" name="thisSTATUSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ON_COMPLETION :  </b> </td>
		<td> <input type="text" name="thisON_COMPLETIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CREATED :  </b> </td>
		<td> <input type="text" name="thisCREATEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LAST_ALTERED :  </b> </td>
		<td> <input type="text" name="thisLAST_ALTEREDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LAST_EXECUTED :  </b> </td>
		<td> <input type="text" name="thisLAST_EXECUTEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_COMMENT :  </b> </td>
		<td> <input type="text" name="thisEVENT_COMMENTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ORIGINATOR :  </b> </td>
		<td> <input type="text" name="thisORIGINATORField" size="20" value="">  </td> 
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

<input type="submit" name="submitEnterEVENTSForm" value="Enter EVENTS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>