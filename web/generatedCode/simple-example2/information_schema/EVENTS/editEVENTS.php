<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisEVENT_CATALOG = $_REQUEST['EVENT_CATALOGField']
?>
<?php
$sql = "SELECT   * FROM EVENTS WHERE EVENT_CATALOG = '$thisEVENT_CATALOG'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisEVENT_CATALOG = MYSQL_RESULT($result,$i,"EVENT_CATALOG");
	$thisEVENT_SCHEMA = MYSQL_RESULT($result,$i,"EVENT_SCHEMA");
	$thisEVENT_NAME = MYSQL_RESULT($result,$i,"EVENT_NAME");
	$thisDEFINER = MYSQL_RESULT($result,$i,"DEFINER");
	$thisTIME_ZONE = MYSQL_RESULT($result,$i,"TIME_ZONE");
	$thisEVENT_BODY = MYSQL_RESULT($result,$i,"EVENT_BODY");
	$thisEVENT_DEFINITION = MYSQL_RESULT($result,$i,"EVENT_DEFINITION");
	$thisEVENT_TYPE = MYSQL_RESULT($result,$i,"EVENT_TYPE");
	$thisEXECUTE_AT = MYSQL_RESULT($result,$i,"EXECUTE_AT");
	$thisINTERVAL_VALUE = MYSQL_RESULT($result,$i,"INTERVAL_VALUE");
	$thisINTERVAL_FIELD = MYSQL_RESULT($result,$i,"INTERVAL_FIELD");
	$thisSQL_MODE = MYSQL_RESULT($result,$i,"SQL_MODE");
	$thisSTARTS = MYSQL_RESULT($result,$i,"STARTS");
	$thisENDS = MYSQL_RESULT($result,$i,"ENDS");
	$thisSTATUS = MYSQL_RESULT($result,$i,"STATUS");
	$thisON_COMPLETION = MYSQL_RESULT($result,$i,"ON_COMPLETION");
	$thisCREATED = MYSQL_RESULT($result,$i,"CREATED");
	$thisLAST_ALTERED = MYSQL_RESULT($result,$i,"LAST_ALTERED");
	$thisLAST_EXECUTED = MYSQL_RESULT($result,$i,"LAST_EXECUTED");
	$thisEVENT_COMMENT = MYSQL_RESULT($result,$i,"EVENT_COMMENT");
	$thisORIGINATOR = MYSQL_RESULT($result,$i,"ORIGINATOR");
	$thisCHARACTER_SET_CLIENT = MYSQL_RESULT($result,$i,"CHARACTER_SET_CLIENT");
	$thisCOLLATION_CONNECTION = MYSQL_RESULT($result,$i,"COLLATION_CONNECTION");
	$thisDATABASE_COLLATION = MYSQL_RESULT($result,$i,"DATABASE_COLLATION");

}
?>

<h2>Update EVENTS</h2>
<form name="eventsUpdateForm" method="POST" action="updateEvents.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_CATALOG :  </b> </td>
		<td> <input type="text" name="thisEVENT_CATALOGField" size="20" value="<? echo $thisEVENT_CATALOG; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisEVENT_SCHEMAField" size="20" value="<? echo $thisEVENT_SCHEMA; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_NAME :  </b> </td>
		<td> <input type="text" name="thisEVENT_NAMEField" size="20" value="<? echo $thisEVENT_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DEFINER :  </b> </td>
		<td> <input type="text" name="thisDEFINERField" size="20" value="<? echo $thisDEFINER; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TIME_ZONE :  </b> </td>
		<td> <input type="text" name="thisTIME_ZONEField" size="20" value="<? echo $thisTIME_ZONE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_BODY :  </b> </td>
		<td> <input type="text" name="thisEVENT_BODYField" size="20" value="<? echo $thisEVENT_BODY; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_DEFINITION :  </b> </td>
		<td> <input type="text" name="thisEVENT_DEFINITIONField" size="20" value="<? echo $thisEVENT_DEFINITION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_TYPE :  </b> </td>
		<td> <input type="text" name="thisEVENT_TYPEField" size="20" value="<? echo $thisEVENT_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EXECUTE_AT :  </b> </td>
		<td> <input type="text" name="thisEXECUTE_ATField" size="20" value="<? echo $thisEXECUTE_AT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INTERVAL_VALUE :  </b> </td>
		<td> <input type="text" name="thisINTERVAL_VALUEField" size="20" value="<? echo $thisINTERVAL_VALUE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INTERVAL_FIELD :  </b> </td>
		<td> <input type="text" name="thisINTERVAL_FIELDField" size="20" value="<? echo $thisINTERVAL_FIELD; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SQL_MODE :  </b> </td>
		<td> <input type="text" name="thisSQL_MODEField" size="20" value="<? echo $thisSQL_MODE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STARTS :  </b> </td>
		<td> <input type="text" name="thisSTARTSField" size="20" value="<? echo $thisSTARTS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ENDS :  </b> </td>
		<td> <input type="text" name="thisENDSField" size="20" value="<? echo $thisENDS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STATUS :  </b> </td>
		<td> <input type="text" name="thisSTATUSField" size="20" value="<? echo $thisSTATUS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ON_COMPLETION :  </b> </td>
		<td> <input type="text" name="thisON_COMPLETIONField" size="20" value="<? echo $thisON_COMPLETION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CREATED :  </b> </td>
		<td> <input type="text" name="thisCREATEDField" size="20" value="<? echo $thisCREATED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LAST_ALTERED :  </b> </td>
		<td> <input type="text" name="thisLAST_ALTEREDField" size="20" value="<? echo $thisLAST_ALTERED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LAST_EXECUTED :  </b> </td>
		<td> <input type="text" name="thisLAST_EXECUTEDField" size="20" value="<? echo $thisLAST_EXECUTED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_COMMENT :  </b> </td>
		<td> <input type="text" name="thisEVENT_COMMENTField" size="20" value="<? echo $thisEVENT_COMMENT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ORIGINATOR :  </b> </td>
		<td> <input type="text" name="thisORIGINATORField" size="20" value="<? echo $thisORIGINATOR; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHARACTER_SET_CLIENT :  </b> </td>
		<td> <input type="text" name="thisCHARACTER_SET_CLIENTField" size="20" value="<? echo $thisCHARACTER_SET_CLIENT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COLLATION_CONNECTION :  </b> </td>
		<td> <input type="text" name="thisCOLLATION_CONNECTIONField" size="20" value="<? echo $thisCOLLATION_CONNECTION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATABASE_COLLATION :  </b> </td>
		<td> <input type="text" name="thisDATABASE_COLLATIONField" size="20" value="<? echo $thisDATABASE_COLLATION; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateEVENTSForm" value="Update EVENTS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>