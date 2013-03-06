<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisEVENT_CATALOGFromForm = $_REQUEST['thisEVENT_CATALOGField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
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

	$sqlUpdate = "UPDATE EVENTS SET EVENT_CATALOG = '$thisEVENT_CATALOG' , EVENT_SCHEMA = '$thisEVENT_SCHEMA' , EVENT_NAME = '$thisEVENT_NAME' , DEFINER = '$thisDEFINER' , TIME_ZONE = '$thisTIME_ZONE' , EVENT_BODY = '$thisEVENT_BODY' , EVENT_DEFINITION = '$thisEVENT_DEFINITION' , EVENT_TYPE = '$thisEVENT_TYPE' , EXECUTE_AT = '$thisEXECUTE_AT' , INTERVAL_VALUE = '$thisINTERVAL_VALUE' , INTERVAL_FIELD = '$thisINTERVAL_FIELD' , SQL_MODE = '$thisSQL_MODE' , STARTS = '$thisSTARTS' , ENDS = '$thisENDS' , STATUS = '$thisSTATUS' , ON_COMPLETION = '$thisON_COMPLETION' , CREATED = '$thisCREATED' , LAST_ALTERED = '$thisLAST_ALTERED' , LAST_EXECUTED = '$thisLAST_EXECUTED' , EVENT_COMMENT = '$thisEVENT_COMMENT' , ORIGINATOR = '$thisORIGINATOR' , CHARACTER_SET_CLIENT = '$thisCHARACTER_SET_CLIENT' , COLLATION_CONNECTION = '$thisCOLLATION_CONNECTION' , DATABASE_COLLATION = '$thisDATABASE_COLLATION'  WHERE EVENT_CATALOG = '$thisEVENT_CATALOG'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisEVENT_CATALOGFromForm." has been Updated<br></b>";
	$thisEVENT_CATALOGFromForm = "";
}

if ($thisAction=="Insert")
{
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

	$sqlInsert = "INSERT INTO EVENTS (EVENT_CATALOG , EVENT_SCHEMA , EVENT_NAME , DEFINER , TIME_ZONE , EVENT_BODY , EVENT_DEFINITION , EVENT_TYPE , EXECUTE_AT , INTERVAL_VALUE , INTERVAL_FIELD , SQL_MODE , STARTS , ENDS , STATUS , ON_COMPLETION , CREATED , LAST_ALTERED , LAST_EXECUTED , EVENT_COMMENT , ORIGINATOR , CHARACTER_SET_CLIENT , COLLATION_CONNECTION , DATABASE_COLLATION ) VALUES ('$thisEVENT_CATALOG' , '$thisEVENT_SCHEMA' , '$thisEVENT_NAME' , '$thisDEFINER' , '$thisTIME_ZONE' , '$thisEVENT_BODY' , '$thisEVENT_DEFINITION' , '$thisEVENT_TYPE' , '$thisEXECUTE_AT' , '$thisINTERVAL_VALUE' , '$thisINTERVAL_FIELD' , '$thisSQL_MODE' , '$thisSTARTS' , '$thisENDS' , '$thisSTATUS' , '$thisON_COMPLETION' , '$thisCREATED' , '$thisLAST_ALTERED' , '$thisLAST_EXECUTED' , '$thisEVENT_COMMENT' , '$thisORIGINATOR' , '$thisCHARACTER_SET_CLIENT' , '$thisCOLLATION_CONNECTION' , '$thisDATABASE_COLLATION' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisEVENT_CATALOGFromForm = "";
}

if ($thisAction=="Delete")
{
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

	$sqlDelete = "DELETE FROM EVENTS WHERE EVENT_CATALOG = '$thisEVENT_CATALOG'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisEVENT_CATALOGFromForm." has been Deleted<br></b>";
	$thisEVENT_CATALOGFromForm = "";
}

$initStartLimit = 0;
$limitPerPage = 10;

$startLimit = $_REQUEST['startLimit'];
$numberOfRows = $_REQUEST['rows'];
$sortBy = $_REQUEST['sortBy'];
$sortOrder = $_REQUEST['sortOrder'];

if ($startLimit=="")
{
		$startLimit = $initStartLimit;
}

if ($numberOfRows=="")
{
		$numberOfRows = $limitPerPage;
}

if ($sortOrder=="")
{
		$sortOrder  = "DESC";
}
if ($sortOrder == "DESC") { $newSortOrder = "ASC"; } else  { $newSortOrder = "DESC"; }
$limitQuery = " LIMIT ".$startLimit.",".$numberOfRows;
$nextStartLimit = $startLimit + $limitPerPage;
$previousStartLimit = $startLimit - $limitPerPage;

if ($sortBy!="")
{
		$orderByQuery = " ORDER BY ".$sortBy." ".$sortOrder;
}


$sql = "SELECT   * FROM EVENTS".$orderByQuery.$limitQuery;
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);


?>
<?
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?
}
else if ($numberOfRows>0) {

	$i=0;
?>


<br>
<?
if ($_REQUEST['startLimit'] != "")
{
?>

<a href="<? echo  $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $previousStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Previous <? echo $limitPerPage; ?> Results</a>....
<? } ?>
<?
if ($numberOfRows == $limitPerPage)
{
?>
<a href="<? echo $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $nextStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Next <? echo $limitPerPage; ?> Results</a>
<? } ?>

<br><br>
<TABLE CELLSPACING="0" CELLPADDING="3" BORDER="0" WIDTH="100%">
	<TR>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_CATALOG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_CATALOG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DEFINER&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DEFINER</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TIME_ZONE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TIME_ZONE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_BODY&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_BODY</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_DEFINITION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_DEFINITION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EXECUTE_AT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EXECUTE_AT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INTERVAL_VALUE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INTERVAL_VALUE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INTERVAL_FIELD&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INTERVAL_FIELD</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SQL_MODE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SQL_MODE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=STARTS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>STARTS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ENDS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ENDS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=STATUS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>STATUS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ON_COMPLETION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ON_COMPLETION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CREATED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CREATED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LAST_ALTERED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LAST_ALTERED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LAST_EXECUTED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LAST_EXECUTED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_COMMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_COMMENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ORIGINATOR&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ORIGINATOR</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CHARACTER_SET_CLIENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CHARACTER_SET_CLIENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COLLATION_CONNECTION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COLLATION_CONNECTION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATABASE_COLLATION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATABASE_COLLATION</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisEVENT_CATALOGField" value="<? echo $thisEVENT_CATALOG; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisEVENT_CATALOGField" value=""></TD>
		<TD><input type"text" name="thisEVENT_SCHEMAField" value=""></TD>
		<TD><input type"text" name="thisEVENT_NAMEField" value=""></TD>
		<TD><input type"text" name="thisDEFINERField" value=""></TD>
		<TD><input type"text" name="thisTIME_ZONEField" value=""></TD>
		<TD><input type"text" name="thisEVENT_BODYField" value=""></TD>
		<TD><input type"text" name="thisEVENT_DEFINITIONField" value=""></TD>
		<TD><input type"text" name="thisEVENT_TYPEField" value=""></TD>
		<TD><input type"text" name="thisEXECUTE_ATField" value=""></TD>
		<TD><input type"text" name="thisINTERVAL_VALUEField" value=""></TD>
		<TD><input type"text" name="thisINTERVAL_FIELDField" value=""></TD>
		<TD><input type"text" name="thisSQL_MODEField" value=""></TD>
		<TD><input type"text" name="thisSTARTSField" value=""></TD>
		<TD><input type"text" name="thisENDSField" value=""></TD>
		<TD><input type"text" name="thisSTATUSField" value=""></TD>
		<TD><input type"text" name="thisON_COMPLETIONField" value=""></TD>
		<TD><input type"text" name="thisCREATEDField" value=""></TD>
		<TD><input type"text" name="thisLAST_ALTEREDField" value=""></TD>
		<TD><input type"text" name="thisLAST_EXECUTEDField" value=""></TD>
		<TD><input type"text" name="thisEVENT_COMMENTField" value=""></TD>
		<TD><input type"text" name="thisORIGINATORField" value=""></TD>
		<TD><input type"text" name="thisCHARACTER_SET_CLIENTField" value=""></TD>
		<TD><input type"text" name="thisCOLLATION_CONNECTIONField" value=""></TD>
		<TD><input type"text" name="thisDATABASE_COLLATIONField" value=""></TD>
	<TD COLSPAN=2><input type="submit" name="Insert" Value="Insert Record"> </TD>
	</TR>
</FORM>

<?
 } 
?>
<?
	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

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
if ($thisEVENT_CATALOGFromForm == $thisEVENT_CATALOG)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisEVENT_CATALOGField" value="<? echo $thisEVENT_CATALOG; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisEVENT_CATALOGField" value="<? echo $thisEVENT_CATALOG; ?>"></TD>
		<TD><input type"text" name="thisEVENT_SCHEMAField" value="<? echo $thisEVENT_SCHEMA; ?>"></TD>
		<TD><input type"text" name="thisEVENT_NAMEField" value="<? echo $thisEVENT_NAME; ?>"></TD>
		<TD><input type"text" name="thisDEFINERField" value="<? echo $thisDEFINER; ?>"></TD>
		<TD><input type"text" name="thisTIME_ZONEField" value="<? echo $thisTIME_ZONE; ?>"></TD>
		<TD><input type"text" name="thisEVENT_BODYField" value="<? echo $thisEVENT_BODY; ?>"></TD>
		<TD><input type"text" name="thisEVENT_DEFINITIONField" value="<? echo $thisEVENT_DEFINITION; ?>"></TD>
		<TD><input type"text" name="thisEVENT_TYPEField" value="<? echo $thisEVENT_TYPE; ?>"></TD>
		<TD><input type"text" name="thisEXECUTE_ATField" value="<? echo $thisEXECUTE_AT; ?>"></TD>
		<TD><input type"text" name="thisINTERVAL_VALUEField" value="<? echo $thisINTERVAL_VALUE; ?>"></TD>
		<TD><input type"text" name="thisINTERVAL_FIELDField" value="<? echo $thisINTERVAL_FIELD; ?>"></TD>
		<TD><input type"text" name="thisSQL_MODEField" value="<? echo $thisSQL_MODE; ?>"></TD>
		<TD><input type"text" name="thisSTARTSField" value="<? echo $thisSTARTS; ?>"></TD>
		<TD><input type"text" name="thisENDSField" value="<? echo $thisENDS; ?>"></TD>
		<TD><input type"text" name="thisSTATUSField" value="<? echo $thisSTATUS; ?>"></TD>
		<TD><input type"text" name="thisON_COMPLETIONField" value="<? echo $thisON_COMPLETION; ?>"></TD>
		<TD><input type"text" name="thisCREATEDField" value="<? echo $thisCREATED; ?>"></TD>
		<TD><input type"text" name="thisLAST_ALTEREDField" value="<? echo $thisLAST_ALTERED; ?>"></TD>
		<TD><input type"text" name="thisLAST_EXECUTEDField" value="<? echo $thisLAST_EXECUTED; ?>"></TD>
		<TD><input type"text" name="thisEVENT_COMMENTField" value="<? echo $thisEVENT_COMMENT; ?>"></TD>
		<TD><input type"text" name="thisORIGINATORField" value="<? echo $thisORIGINATOR; ?>"></TD>
		<TD><input type"text" name="thisCHARACTER_SET_CLIENTField" value="<? echo $thisCHARACTER_SET_CLIENT; ?>"></TD>
		<TD><input type"text" name="thisCOLLATION_CONNECTIONField" value="<? echo $thisCOLLATION_CONNECTION; ?>"></TD>
		<TD><input type"text" name="thisDATABASE_COLLATIONField" value="<? echo $thisDATABASE_COLLATION; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisEVENT_CATALOG; ?></TD>
		<TD><? echo $thisEVENT_SCHEMA; ?></TD>
		<TD><? echo $thisEVENT_NAME; ?></TD>
		<TD><? echo $thisDEFINER; ?></TD>
		<TD><? echo $thisTIME_ZONE; ?></TD>
		<TD><? echo $thisEVENT_BODY; ?></TD>
		<TD><? echo $thisEVENT_DEFINITION; ?></TD>
		<TD><? echo $thisEVENT_TYPE; ?></TD>
		<TD><? echo $thisEXECUTE_AT; ?></TD>
		<TD><? echo $thisINTERVAL_VALUE; ?></TD>
		<TD><? echo $thisINTERVAL_FIELD; ?></TD>
		<TD><? echo $thisSQL_MODE; ?></TD>
		<TD><? echo $thisSTARTS; ?></TD>
		<TD><? echo $thisENDS; ?></TD>
		<TD><? echo $thisSTATUS; ?></TD>
		<TD><? echo $thisON_COMPLETION; ?></TD>
		<TD><? echo $thisCREATED; ?></TD>
		<TD><? echo $thisLAST_ALTERED; ?></TD>
		<TD><? echo $thisLAST_EXECUTED; ?></TD>
		<TD><? echo $thisEVENT_COMMENT; ?></TD>
		<TD><? echo $thisORIGINATOR; ?></TD>
		<TD><? echo $thisCHARACTER_SET_CLIENT; ?></TD>
		<TD><? echo $thisCOLLATION_CONNECTION; ?></TD>
		<TD><? echo $thisDATABASE_COLLATION; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisEVENT_CATALOGField=<? echo $thisEVENT_CATALOG; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisEVENT_CATALOGField=<? echo $thisEVENT_CATALOG; ?>">Delete</a></TD>
	</TR>

<?
}
?>
<?
		$i++;

	} // end while loop
?>
</TABLE>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="EnterNew">
<input type="Submit" name="submit" value="Insert New Record">
</FORM>


<br>
<?
if ($_REQUEST['startLimit'] != "")
{
?>

<a href="<? echo  $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $previousStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Previous <? echo $limitPerPage; ?> Results</a>....
<? } ?>
<?
if ($numberOfRows == $limitPerPage)
{
?>
<a href="<? echo $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $nextStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Next <? echo $limitPerPage; ?> Results</a>
<? } ?>

<br><br>
<?
} // end of if numberOfRows > 0 
 ?>

<?php
include_once("../common/footer.php");
?>