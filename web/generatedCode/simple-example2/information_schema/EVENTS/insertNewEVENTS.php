<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisEVENT_CATALOG = addslashes($_REQUEST['thisEVENT_CATALOGField']);
	$thisEVENT_SCHEMA = addslashes($_REQUEST['thisEVENT_SCHEMAField']);
	$thisEVENT_NAME = addslashes($_REQUEST['thisEVENT_NAMEField']);
	$thisDEFINER = addslashes($_REQUEST['thisDEFINERField']);
	$thisTIME_ZONE = addslashes($_REQUEST['thisTIME_ZONEField']);
	$thisEVENT_BODY = addslashes($_REQUEST['thisEVENT_BODYField']);
	$thisEVENT_DEFINITION = addslashes($_REQUEST['thisEVENT_DEFINITIONField']);
	$thisEVENT_TYPE = addslashes($_REQUEST['thisEVENT_TYPEField']);
	$thisEXECUTE_AT = addslashes($_REQUEST['thisEXECUTE_ATField']);
	$thisINTERVAL_VALUE = addslashes($_REQUEST['thisINTERVAL_VALUEField']);
	$thisINTERVAL_FIELD = addslashes($_REQUEST['thisINTERVAL_FIELDField']);
	$thisSQL_MODE = addslashes($_REQUEST['thisSQL_MODEField']);
	$thisSTARTS = addslashes($_REQUEST['thisSTARTSField']);
	$thisENDS = addslashes($_REQUEST['thisENDSField']);
	$thisSTATUS = addslashes($_REQUEST['thisSTATUSField']);
	$thisON_COMPLETION = addslashes($_REQUEST['thisON_COMPLETIONField']);
	$thisCREATED = addslashes($_REQUEST['thisCREATEDField']);
	$thisLAST_ALTERED = addslashes($_REQUEST['thisLAST_ALTEREDField']);
	$thisLAST_EXECUTED = addslashes($_REQUEST['thisLAST_EXECUTEDField']);
	$thisEVENT_COMMENT = addslashes($_REQUEST['thisEVENT_COMMENTField']);
	$thisORIGINATOR = addslashes($_REQUEST['thisORIGINATORField']);
	$thisCHARACTER_SET_CLIENT = addslashes($_REQUEST['thisCHARACTER_SET_CLIENTField']);
	$thisCOLLATION_CONNECTION = addslashes($_REQUEST['thisCOLLATION_CONNECTIONField']);
	$thisDATABASE_COLLATION = addslashes($_REQUEST['thisDATABASE_COLLATIONField']);

?>
<?
$sqlQuery = "INSERT INTO EVENTS (EVENT_CATALOG , EVENT_SCHEMA , EVENT_NAME , DEFINER , TIME_ZONE , EVENT_BODY , EVENT_DEFINITION , EVENT_TYPE , EXECUTE_AT , INTERVAL_VALUE , INTERVAL_FIELD , SQL_MODE , STARTS , ENDS , STATUS , ON_COMPLETION , CREATED , LAST_ALTERED , LAST_EXECUTED , EVENT_COMMENT , ORIGINATOR , CHARACTER_SET_CLIENT , COLLATION_CONNECTION , DATABASE_COLLATION ) VALUES ('$thisEVENT_CATALOG' , '$thisEVENT_SCHEMA' , '$thisEVENT_NAME' , '$thisDEFINER' , '$thisTIME_ZONE' , '$thisEVENT_BODY' , '$thisEVENT_DEFINITION' , '$thisEVENT_TYPE' , '$thisEXECUTE_AT' , '$thisINTERVAL_VALUE' , '$thisINTERVAL_FIELD' , '$thisSQL_MODE' , '$thisSTARTS' , '$thisENDS' , '$thisSTATUS' , '$thisON_COMPLETION' , '$thisCREATED' , '$thisLAST_ALTERED' , '$thisLAST_EXECUTED' , '$thisEVENT_COMMENT' , '$thisORIGINATOR' , '$thisCHARACTER_SET_CLIENT' , '$thisCOLLATION_CONNECTION' , '$thisDATABASE_COLLATION' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

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

<?php
include_once("../common/footer.php");
?>