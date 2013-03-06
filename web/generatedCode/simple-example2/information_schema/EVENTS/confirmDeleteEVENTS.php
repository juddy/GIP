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

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>EVENT_CATALOG : </b></td>
	<td><? echo $thisEVENT_CATALOG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>EVENT_SCHEMA : </b></td>
	<td><? echo $thisEVENT_SCHEMA; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>EVENT_NAME : </b></td>
	<td><? echo $thisEVENT_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DEFINER : </b></td>
	<td><? echo $thisDEFINER; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TIME_ZONE : </b></td>
	<td><? echo $thisTIME_ZONE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>EVENT_BODY : </b></td>
	<td><? echo $thisEVENT_BODY; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>EVENT_DEFINITION : </b></td>
	<td><? echo $thisEVENT_DEFINITION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>EVENT_TYPE : </b></td>
	<td><? echo $thisEVENT_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>EXECUTE_AT : </b></td>
	<td><? echo $thisEXECUTE_AT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>INTERVAL_VALUE : </b></td>
	<td><? echo $thisINTERVAL_VALUE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>INTERVAL_FIELD : </b></td>
	<td><? echo $thisINTERVAL_FIELD; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SQL_MODE : </b></td>
	<td><? echo $thisSQL_MODE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STARTS : </b></td>
	<td><? echo $thisSTARTS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ENDS : </b></td>
	<td><? echo $thisENDS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STATUS : </b></td>
	<td><? echo $thisSTATUS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ON_COMPLETION : </b></td>
	<td><? echo $thisON_COMPLETION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CREATED : </b></td>
	<td><? echo $thisCREATED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LAST_ALTERED : </b></td>
	<td><? echo $thisLAST_ALTERED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LAST_EXECUTED : </b></td>
	<td><? echo $thisLAST_EXECUTED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>EVENT_COMMENT : </b></td>
	<td><? echo $thisEVENT_COMMENT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ORIGINATOR : </b></td>
	<td><? echo $thisORIGINATOR; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CHARACTER_SET_CLIENT : </b></td>
	<td><? echo $thisCHARACTER_SET_CLIENT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COLLATION_CONNECTION : </b></td>
	<td><? echo $thisCOLLATION_CONNECTION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATABASE_COLLATION : </b></td>
	<td><? echo $thisDATABASE_COLLATION; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="eventsEnterForm" method="POST" action="deleteEVENTS.php">
<input type="hidden" name="thisEVENT_CATALOGField" value="<? echo $thisEVENT_CATALOG; ?>">
<input type="submit" name="submitConfirmDeleteEVENTSForm" value="Delete  from EVENTS">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>