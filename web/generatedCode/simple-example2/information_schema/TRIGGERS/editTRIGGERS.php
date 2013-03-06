<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisTRIGGER_CATALOG = $_REQUEST['TRIGGER_CATALOGField']
?>
<?php
$sql = "SELECT   * FROM TRIGGERS WHERE TRIGGER_CATALOG = '$thisTRIGGER_CATALOG'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisTRIGGER_CATALOG = MYSQL_RESULT($result,$i,"TRIGGER_CATALOG");
	$thisTRIGGER_SCHEMA = MYSQL_RESULT($result,$i,"TRIGGER_SCHEMA");
	$thisTRIGGER_NAME = MYSQL_RESULT($result,$i,"TRIGGER_NAME");
	$thisEVENT_MANIPULATION = MYSQL_RESULT($result,$i,"EVENT_MANIPULATION");
	$thisEVENT_OBJECT_CATALOG = MYSQL_RESULT($result,$i,"EVENT_OBJECT_CATALOG");
	$thisEVENT_OBJECT_SCHEMA = MYSQL_RESULT($result,$i,"EVENT_OBJECT_SCHEMA");
	$thisEVENT_OBJECT_TABLE = MYSQL_RESULT($result,$i,"EVENT_OBJECT_TABLE");
	$thisACTION_ORDER = MYSQL_RESULT($result,$i,"ACTION_ORDER");
	$thisACTION_CONDITION = MYSQL_RESULT($result,$i,"ACTION_CONDITION");
	$thisACTION_STATEMENT = MYSQL_RESULT($result,$i,"ACTION_STATEMENT");
	$thisACTION_ORIENTATION = MYSQL_RESULT($result,$i,"ACTION_ORIENTATION");
	$thisACTION_TIMING = MYSQL_RESULT($result,$i,"ACTION_TIMING");
	$thisACTION_REFERENCE_OLD_TABLE = MYSQL_RESULT($result,$i,"ACTION_REFERENCE_OLD_TABLE");
	$thisACTION_REFERENCE_NEW_TABLE = MYSQL_RESULT($result,$i,"ACTION_REFERENCE_NEW_TABLE");
	$thisACTION_REFERENCE_OLD_ROW = MYSQL_RESULT($result,$i,"ACTION_REFERENCE_OLD_ROW");
	$thisACTION_REFERENCE_NEW_ROW = MYSQL_RESULT($result,$i,"ACTION_REFERENCE_NEW_ROW");
	$thisCREATED = MYSQL_RESULT($result,$i,"CREATED");
	$thisSQL_MODE = MYSQL_RESULT($result,$i,"SQL_MODE");
	$thisDEFINER = MYSQL_RESULT($result,$i,"DEFINER");
	$thisCHARACTER_SET_CLIENT = MYSQL_RESULT($result,$i,"CHARACTER_SET_CLIENT");
	$thisCOLLATION_CONNECTION = MYSQL_RESULT($result,$i,"COLLATION_CONNECTION");
	$thisDATABASE_COLLATION = MYSQL_RESULT($result,$i,"DATABASE_COLLATION");

}
?>

<h2>Update TRIGGERS</h2>
<form name="triggersUpdateForm" method="POST" action="updateTriggers.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> TRIGGER_CATALOG :  </b> </td>
		<td> <input type="text" name="thisTRIGGER_CATALOGField" size="20" value="<? echo $thisTRIGGER_CATALOG; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TRIGGER_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisTRIGGER_SCHEMAField" size="20" value="<? echo $thisTRIGGER_SCHEMA; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TRIGGER_NAME :  </b> </td>
		<td> <input type="text" name="thisTRIGGER_NAMEField" size="20" value="<? echo $thisTRIGGER_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_MANIPULATION :  </b> </td>
		<td> <input type="text" name="thisEVENT_MANIPULATIONField" size="20" value="<? echo $thisEVENT_MANIPULATION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_OBJECT_CATALOG :  </b> </td>
		<td> <input type="text" name="thisEVENT_OBJECT_CATALOGField" size="20" value="<? echo $thisEVENT_OBJECT_CATALOG; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_OBJECT_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisEVENT_OBJECT_SCHEMAField" size="20" value="<? echo $thisEVENT_OBJECT_SCHEMA; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EVENT_OBJECT_TABLE :  </b> </td>
		<td> <input type="text" name="thisEVENT_OBJECT_TABLEField" size="20" value="<? echo $thisEVENT_OBJECT_TABLE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACTION_ORDER :  </b> </td>
		<td> <input type="text" name="thisACTION_ORDERField" size="20" value="<? echo $thisACTION_ORDER; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACTION_CONDITION :  </b> </td>
		<td> <input type="text" name="thisACTION_CONDITIONField" size="20" value="<? echo $thisACTION_CONDITION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACTION_STATEMENT :  </b> </td>
		<td> <input type="text" name="thisACTION_STATEMENTField" size="20" value="<? echo $thisACTION_STATEMENT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACTION_ORIENTATION :  </b> </td>
		<td> <input type="text" name="thisACTION_ORIENTATIONField" size="20" value="<? echo $thisACTION_ORIENTATION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACTION_TIMING :  </b> </td>
		<td> <input type="text" name="thisACTION_TIMINGField" size="20" value="<? echo $thisACTION_TIMING; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACTION_REFERENCE_OLD_TABLE :  </b> </td>
		<td> <input type="text" name="thisACTION_REFERENCE_OLD_TABLEField" size="20" value="<? echo $thisACTION_REFERENCE_OLD_TABLE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACTION_REFERENCE_NEW_TABLE :  </b> </td>
		<td> <input type="text" name="thisACTION_REFERENCE_NEW_TABLEField" size="20" value="<? echo $thisACTION_REFERENCE_NEW_TABLE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACTION_REFERENCE_OLD_ROW :  </b> </td>
		<td> <input type="text" name="thisACTION_REFERENCE_OLD_ROWField" size="20" value="<? echo $thisACTION_REFERENCE_OLD_ROW; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACTION_REFERENCE_NEW_ROW :  </b> </td>
		<td> <input type="text" name="thisACTION_REFERENCE_NEW_ROWField" size="20" value="<? echo $thisACTION_REFERENCE_NEW_ROW; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CREATED :  </b> </td>
		<td> <input type="text" name="thisCREATEDField" size="20" value="<? echo $thisCREATED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SQL_MODE :  </b> </td>
		<td> <input type="text" name="thisSQL_MODEField" size="20" value="<? echo $thisSQL_MODE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DEFINER :  </b> </td>
		<td> <input type="text" name="thisDEFINERField" size="20" value="<? echo $thisDEFINER; ?>">  </td> 
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

<input type="submit" name="submitUpdateTRIGGERSForm" value="Update TRIGGERS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>