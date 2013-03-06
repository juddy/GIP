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

View Record<br><br>

<table>
<tr height="30">
	<td align="right"><b>TRIGGER_CATALOG : </b></td>
	<td><? echo $thisTRIGGER_CATALOG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TRIGGER_SCHEMA : </b></td>
	<td><? echo $thisTRIGGER_SCHEMA; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TRIGGER_NAME : </b></td>
	<td><? echo $thisTRIGGER_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>EVENT_MANIPULATION : </b></td>
	<td><? echo $thisEVENT_MANIPULATION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>EVENT_OBJECT_CATALOG : </b></td>
	<td><? echo $thisEVENT_OBJECT_CATALOG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>EVENT_OBJECT_SCHEMA : </b></td>
	<td><? echo $thisEVENT_OBJECT_SCHEMA; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>EVENT_OBJECT_TABLE : </b></td>
	<td><? echo $thisEVENT_OBJECT_TABLE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ACTION_ORDER : </b></td>
	<td><? echo $thisACTION_ORDER; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ACTION_CONDITION : </b></td>
	<td><? echo $thisACTION_CONDITION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ACTION_STATEMENT : </b></td>
	<td><? echo $thisACTION_STATEMENT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ACTION_ORIENTATION : </b></td>
	<td><? echo $thisACTION_ORIENTATION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ACTION_TIMING : </b></td>
	<td><? echo $thisACTION_TIMING; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ACTION_REFERENCE_OLD_TABLE : </b></td>
	<td><? echo $thisACTION_REFERENCE_OLD_TABLE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ACTION_REFERENCE_NEW_TABLE : </b></td>
	<td><? echo $thisACTION_REFERENCE_NEW_TABLE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ACTION_REFERENCE_OLD_ROW : </b></td>
	<td><? echo $thisACTION_REFERENCE_OLD_ROW; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ACTION_REFERENCE_NEW_ROW : </b></td>
	<td><? echo $thisACTION_REFERENCE_NEW_ROW; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CREATED : </b></td>
	<td><? echo $thisCREATED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SQL_MODE : </b></td>
	<td><? echo $thisSQL_MODE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DEFINER : </b></td>
	<td><? echo $thisDEFINER; ?></td>
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

<?php
include_once("../common/footer.php");
?>