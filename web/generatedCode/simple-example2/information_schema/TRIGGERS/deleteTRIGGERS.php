<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisTRIGGER_CATALOG = addslashes($_REQUEST['thisTRIGGER_CATALOGField']);
	$thisTRIGGER_SCHEMA = addslashes($_REQUEST['thisTRIGGER_SCHEMAField']);
	$thisTRIGGER_NAME = addslashes($_REQUEST['thisTRIGGER_NAMEField']);
	$thisEVENT_MANIPULATION = addslashes($_REQUEST['thisEVENT_MANIPULATIONField']);
	$thisEVENT_OBJECT_CATALOG = addslashes($_REQUEST['thisEVENT_OBJECT_CATALOGField']);
	$thisEVENT_OBJECT_SCHEMA = addslashes($_REQUEST['thisEVENT_OBJECT_SCHEMAField']);
	$thisEVENT_OBJECT_TABLE = addslashes($_REQUEST['thisEVENT_OBJECT_TABLEField']);
	$thisACTION_ORDER = addslashes($_REQUEST['thisACTION_ORDERField']);
	$thisACTION_CONDITION = addslashes($_REQUEST['thisACTION_CONDITIONField']);
	$thisACTION_STATEMENT = addslashes($_REQUEST['thisACTION_STATEMENTField']);
	$thisACTION_ORIENTATION = addslashes($_REQUEST['thisACTION_ORIENTATIONField']);
	$thisACTION_TIMING = addslashes($_REQUEST['thisACTION_TIMINGField']);
	$thisACTION_REFERENCE_OLD_TABLE = addslashes($_REQUEST['thisACTION_REFERENCE_OLD_TABLEField']);
	$thisACTION_REFERENCE_NEW_TABLE = addslashes($_REQUEST['thisACTION_REFERENCE_NEW_TABLEField']);
	$thisACTION_REFERENCE_OLD_ROW = addslashes($_REQUEST['thisACTION_REFERENCE_OLD_ROWField']);
	$thisACTION_REFERENCE_NEW_ROW = addslashes($_REQUEST['thisACTION_REFERENCE_NEW_ROWField']);
	$thisCREATED = addslashes($_REQUEST['thisCREATEDField']);
	$thisSQL_MODE = addslashes($_REQUEST['thisSQL_MODEField']);
	$thisDEFINER = addslashes($_REQUEST['thisDEFINERField']);
	$thisCHARACTER_SET_CLIENT = addslashes($_REQUEST['thisCHARACTER_SET_CLIENTField']);
	$thisCOLLATION_CONNECTION = addslashes($_REQUEST['thisCOLLATION_CONNECTIONField']);
	$thisDATABASE_COLLATION = addslashes($_REQUEST['thisDATABASE_COLLATIONField']);

?>
<?
$sql = "DELETE FROM TRIGGERS WHERE TRIGGER_CATALOG = '$thisTRIGGER_CATALOG'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

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