<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisTRIGGER_CATALOGFromForm = $_REQUEST['thisTRIGGER_CATALOGField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
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

	$sqlUpdate = "UPDATE TRIGGERS SET TRIGGER_CATALOG = '$thisTRIGGER_CATALOG' , TRIGGER_SCHEMA = '$thisTRIGGER_SCHEMA' , TRIGGER_NAME = '$thisTRIGGER_NAME' , EVENT_MANIPULATION = '$thisEVENT_MANIPULATION' , EVENT_OBJECT_CATALOG = '$thisEVENT_OBJECT_CATALOG' , EVENT_OBJECT_SCHEMA = '$thisEVENT_OBJECT_SCHEMA' , EVENT_OBJECT_TABLE = '$thisEVENT_OBJECT_TABLE' , ACTION_ORDER = '$thisACTION_ORDER' , ACTION_CONDITION = '$thisACTION_CONDITION' , ACTION_STATEMENT = '$thisACTION_STATEMENT' , ACTION_ORIENTATION = '$thisACTION_ORIENTATION' , ACTION_TIMING = '$thisACTION_TIMING' , ACTION_REFERENCE_OLD_TABLE = '$thisACTION_REFERENCE_OLD_TABLE' , ACTION_REFERENCE_NEW_TABLE = '$thisACTION_REFERENCE_NEW_TABLE' , ACTION_REFERENCE_OLD_ROW = '$thisACTION_REFERENCE_OLD_ROW' , ACTION_REFERENCE_NEW_ROW = '$thisACTION_REFERENCE_NEW_ROW' , CREATED = '$thisCREATED' , SQL_MODE = '$thisSQL_MODE' , DEFINER = '$thisDEFINER' , CHARACTER_SET_CLIENT = '$thisCHARACTER_SET_CLIENT' , COLLATION_CONNECTION = '$thisCOLLATION_CONNECTION' , DATABASE_COLLATION = '$thisDATABASE_COLLATION'  WHERE TRIGGER_CATALOG = '$thisTRIGGER_CATALOG'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisTRIGGER_CATALOGFromForm." has been Updated<br></b>";
	$thisTRIGGER_CATALOGFromForm = "";
}

if ($thisAction=="Insert")
{
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

	$sqlInsert = "INSERT INTO TRIGGERS (TRIGGER_CATALOG , TRIGGER_SCHEMA , TRIGGER_NAME , EVENT_MANIPULATION , EVENT_OBJECT_CATALOG , EVENT_OBJECT_SCHEMA , EVENT_OBJECT_TABLE , ACTION_ORDER , ACTION_CONDITION , ACTION_STATEMENT , ACTION_ORIENTATION , ACTION_TIMING , ACTION_REFERENCE_OLD_TABLE , ACTION_REFERENCE_NEW_TABLE , ACTION_REFERENCE_OLD_ROW , ACTION_REFERENCE_NEW_ROW , CREATED , SQL_MODE , DEFINER , CHARACTER_SET_CLIENT , COLLATION_CONNECTION , DATABASE_COLLATION ) VALUES ('$thisTRIGGER_CATALOG' , '$thisTRIGGER_SCHEMA' , '$thisTRIGGER_NAME' , '$thisEVENT_MANIPULATION' , '$thisEVENT_OBJECT_CATALOG' , '$thisEVENT_OBJECT_SCHEMA' , '$thisEVENT_OBJECT_TABLE' , '$thisACTION_ORDER' , '$thisACTION_CONDITION' , '$thisACTION_STATEMENT' , '$thisACTION_ORIENTATION' , '$thisACTION_TIMING' , '$thisACTION_REFERENCE_OLD_TABLE' , '$thisACTION_REFERENCE_NEW_TABLE' , '$thisACTION_REFERENCE_OLD_ROW' , '$thisACTION_REFERENCE_NEW_ROW' , '$thisCREATED' , '$thisSQL_MODE' , '$thisDEFINER' , '$thisCHARACTER_SET_CLIENT' , '$thisCOLLATION_CONNECTION' , '$thisDATABASE_COLLATION' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisTRIGGER_CATALOGFromForm = "";
}

if ($thisAction=="Delete")
{
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

	$sqlDelete = "DELETE FROM TRIGGERS WHERE TRIGGER_CATALOG = '$thisTRIGGER_CATALOG'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisTRIGGER_CATALOGFromForm." has been Deleted<br></b>";
	$thisTRIGGER_CATALOGFromForm = "";
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


$sql = "SELECT   * FROM TRIGGERS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=TRIGGER_CATALOG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TRIGGER_CATALOG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TRIGGER_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TRIGGER_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TRIGGER_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TRIGGER_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_MANIPULATION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_MANIPULATION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_OBJECT_CATALOG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_OBJECT_CATALOG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_OBJECT_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_OBJECT_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EVENT_OBJECT_TABLE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EVENT_OBJECT_TABLE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACTION_ORDER&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACTION_ORDER</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACTION_CONDITION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACTION_CONDITION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACTION_STATEMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACTION_STATEMENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACTION_ORIENTATION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACTION_ORIENTATION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACTION_TIMING&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACTION_TIMING</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACTION_REFERENCE_OLD_TABLE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACTION_REFERENCE_OLD_TABLE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACTION_REFERENCE_NEW_TABLE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACTION_REFERENCE_NEW_TABLE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACTION_REFERENCE_OLD_ROW&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACTION_REFERENCE_OLD_ROW</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACTION_REFERENCE_NEW_ROW&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACTION_REFERENCE_NEW_ROW</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CREATED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CREATED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SQL_MODE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SQL_MODE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DEFINER&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DEFINER</B>
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
<input type="hidden" name="thisTRIGGER_CATALOGField" value="<? echo $thisTRIGGER_CATALOG; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisTRIGGER_CATALOGField" value=""></TD>
		<TD><input type"text" name="thisTRIGGER_SCHEMAField" value=""></TD>
		<TD><input type"text" name="thisTRIGGER_NAMEField" value=""></TD>
		<TD><input type"text" name="thisEVENT_MANIPULATIONField" value=""></TD>
		<TD><input type"text" name="thisEVENT_OBJECT_CATALOGField" value=""></TD>
		<TD><input type"text" name="thisEVENT_OBJECT_SCHEMAField" value=""></TD>
		<TD><input type"text" name="thisEVENT_OBJECT_TABLEField" value=""></TD>
		<TD><input type"text" name="thisACTION_ORDERField" value=""></TD>
		<TD><input type"text" name="thisACTION_CONDITIONField" value=""></TD>
		<TD><input type"text" name="thisACTION_STATEMENTField" value=""></TD>
		<TD><input type"text" name="thisACTION_ORIENTATIONField" value=""></TD>
		<TD><input type"text" name="thisACTION_TIMINGField" value=""></TD>
		<TD><input type"text" name="thisACTION_REFERENCE_OLD_TABLEField" value=""></TD>
		<TD><input type"text" name="thisACTION_REFERENCE_NEW_TABLEField" value=""></TD>
		<TD><input type"text" name="thisACTION_REFERENCE_OLD_ROWField" value=""></TD>
		<TD><input type"text" name="thisACTION_REFERENCE_NEW_ROWField" value=""></TD>
		<TD><input type"text" name="thisCREATEDField" value=""></TD>
		<TD><input type"text" name="thisSQL_MODEField" value=""></TD>
		<TD><input type"text" name="thisDEFINERField" value=""></TD>
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
if ($thisTRIGGER_CATALOGFromForm == $thisTRIGGER_CATALOG)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisTRIGGER_CATALOGField" value="<? echo $thisTRIGGER_CATALOG; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisTRIGGER_CATALOGField" value="<? echo $thisTRIGGER_CATALOG; ?>"></TD>
		<TD><input type"text" name="thisTRIGGER_SCHEMAField" value="<? echo $thisTRIGGER_SCHEMA; ?>"></TD>
		<TD><input type"text" name="thisTRIGGER_NAMEField" value="<? echo $thisTRIGGER_NAME; ?>"></TD>
		<TD><input type"text" name="thisEVENT_MANIPULATIONField" value="<? echo $thisEVENT_MANIPULATION; ?>"></TD>
		<TD><input type"text" name="thisEVENT_OBJECT_CATALOGField" value="<? echo $thisEVENT_OBJECT_CATALOG; ?>"></TD>
		<TD><input type"text" name="thisEVENT_OBJECT_SCHEMAField" value="<? echo $thisEVENT_OBJECT_SCHEMA; ?>"></TD>
		<TD><input type"text" name="thisEVENT_OBJECT_TABLEField" value="<? echo $thisEVENT_OBJECT_TABLE; ?>"></TD>
		<TD><input type"text" name="thisACTION_ORDERField" value="<? echo $thisACTION_ORDER; ?>"></TD>
		<TD><input type"text" name="thisACTION_CONDITIONField" value="<? echo $thisACTION_CONDITION; ?>"></TD>
		<TD><input type"text" name="thisACTION_STATEMENTField" value="<? echo $thisACTION_STATEMENT; ?>"></TD>
		<TD><input type"text" name="thisACTION_ORIENTATIONField" value="<? echo $thisACTION_ORIENTATION; ?>"></TD>
		<TD><input type"text" name="thisACTION_TIMINGField" value="<? echo $thisACTION_TIMING; ?>"></TD>
		<TD><input type"text" name="thisACTION_REFERENCE_OLD_TABLEField" value="<? echo $thisACTION_REFERENCE_OLD_TABLE; ?>"></TD>
		<TD><input type"text" name="thisACTION_REFERENCE_NEW_TABLEField" value="<? echo $thisACTION_REFERENCE_NEW_TABLE; ?>"></TD>
		<TD><input type"text" name="thisACTION_REFERENCE_OLD_ROWField" value="<? echo $thisACTION_REFERENCE_OLD_ROW; ?>"></TD>
		<TD><input type"text" name="thisACTION_REFERENCE_NEW_ROWField" value="<? echo $thisACTION_REFERENCE_NEW_ROW; ?>"></TD>
		<TD><input type"text" name="thisCREATEDField" value="<? echo $thisCREATED; ?>"></TD>
		<TD><input type"text" name="thisSQL_MODEField" value="<? echo $thisSQL_MODE; ?>"></TD>
		<TD><input type"text" name="thisDEFINERField" value="<? echo $thisDEFINER; ?>"></TD>
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
		<TD><? echo $thisTRIGGER_CATALOG; ?></TD>
		<TD><? echo $thisTRIGGER_SCHEMA; ?></TD>
		<TD><? echo $thisTRIGGER_NAME; ?></TD>
		<TD><? echo $thisEVENT_MANIPULATION; ?></TD>
		<TD><? echo $thisEVENT_OBJECT_CATALOG; ?></TD>
		<TD><? echo $thisEVENT_OBJECT_SCHEMA; ?></TD>
		<TD><? echo $thisEVENT_OBJECT_TABLE; ?></TD>
		<TD><? echo $thisACTION_ORDER; ?></TD>
		<TD><? echo $thisACTION_CONDITION; ?></TD>
		<TD><? echo $thisACTION_STATEMENT; ?></TD>
		<TD><? echo $thisACTION_ORIENTATION; ?></TD>
		<TD><? echo $thisACTION_TIMING; ?></TD>
		<TD><? echo $thisACTION_REFERENCE_OLD_TABLE; ?></TD>
		<TD><? echo $thisACTION_REFERENCE_NEW_TABLE; ?></TD>
		<TD><? echo $thisACTION_REFERENCE_OLD_ROW; ?></TD>
		<TD><? echo $thisACTION_REFERENCE_NEW_ROW; ?></TD>
		<TD><? echo $thisCREATED; ?></TD>
		<TD><? echo $thisSQL_MODE; ?></TD>
		<TD><? echo $thisDEFINER; ?></TD>
		<TD><? echo $thisCHARACTER_SET_CLIENT; ?></TD>
		<TD><? echo $thisCOLLATION_CONNECTION; ?></TD>
		<TD><? echo $thisDATABASE_COLLATION; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisTRIGGER_CATALOGField=<? echo $thisTRIGGER_CATALOG; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisTRIGGER_CATALOGField=<? echo $thisTRIGGER_CATALOG; ?>">Delete</a></TD>
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