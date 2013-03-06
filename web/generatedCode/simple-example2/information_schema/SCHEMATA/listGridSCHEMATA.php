<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisCATALOG_NAMEFromForm = $_REQUEST['thisCATALOG_NAMEField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisCATALOG_NAME = addslashes($_REQUEST['thisCATALOG_NAMEField']);
	$thisSCHEMA_NAME = addslashes($_REQUEST['thisSCHEMA_NAMEField']);
	$thisDEFAULT_CHARACTER_SET_NAME = addslashes($_REQUEST['thisDEFAULT_CHARACTER_SET_NAMEField']);
	$thisDEFAULT_COLLATION_NAME = addslashes($_REQUEST['thisDEFAULT_COLLATION_NAMEField']);
	$thisSQL_PATH = addslashes($_REQUEST['thisSQL_PATHField']);

	$sqlUpdate = "UPDATE SCHEMATA SET CATALOG_NAME = '$thisCATALOG_NAME' , SCHEMA_NAME = '$thisSCHEMA_NAME' , DEFAULT_CHARACTER_SET_NAME = '$thisDEFAULT_CHARACTER_SET_NAME' , DEFAULT_COLLATION_NAME = '$thisDEFAULT_COLLATION_NAME' , SQL_PATH = '$thisSQL_PATH'  WHERE CATALOG_NAME = '$thisCATALOG_NAME'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisCATALOG_NAMEFromForm." has been Updated<br></b>";
	$thisCATALOG_NAMEFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisCATALOG_NAME = addslashes($_REQUEST['thisCATALOG_NAMEField']);
	$thisSCHEMA_NAME = addslashes($_REQUEST['thisSCHEMA_NAMEField']);
	$thisDEFAULT_CHARACTER_SET_NAME = addslashes($_REQUEST['thisDEFAULT_CHARACTER_SET_NAMEField']);
	$thisDEFAULT_COLLATION_NAME = addslashes($_REQUEST['thisDEFAULT_COLLATION_NAMEField']);
	$thisSQL_PATH = addslashes($_REQUEST['thisSQL_PATHField']);

	$sqlInsert = "INSERT INTO SCHEMATA (CATALOG_NAME , SCHEMA_NAME , DEFAULT_CHARACTER_SET_NAME , DEFAULT_COLLATION_NAME , SQL_PATH ) VALUES ('$thisCATALOG_NAME' , '$thisSCHEMA_NAME' , '$thisDEFAULT_CHARACTER_SET_NAME' , '$thisDEFAULT_COLLATION_NAME' , '$thisSQL_PATH' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisCATALOG_NAMEFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisCATALOG_NAME = addslashes($_REQUEST['thisCATALOG_NAMEField']);
	$thisSCHEMA_NAME = addslashes($_REQUEST['thisSCHEMA_NAMEField']);
	$thisDEFAULT_CHARACTER_SET_NAME = addslashes($_REQUEST['thisDEFAULT_CHARACTER_SET_NAMEField']);
	$thisDEFAULT_COLLATION_NAME = addslashes($_REQUEST['thisDEFAULT_COLLATION_NAMEField']);
	$thisSQL_PATH = addslashes($_REQUEST['thisSQL_PATHField']);

	$sqlDelete = "DELETE FROM SCHEMATA WHERE CATALOG_NAME = '$thisCATALOG_NAME'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisCATALOG_NAMEFromForm." has been Deleted<br></b>";
	$thisCATALOG_NAMEFromForm = "";
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


$sql = "SELECT   * FROM SCHEMATA".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=CATALOG_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CATALOG_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SCHEMA_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SCHEMA_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DEFAULT_CHARACTER_SET_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DEFAULT_CHARACTER_SET_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DEFAULT_COLLATION_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DEFAULT_COLLATION_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SQL_PATH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SQL_PATH</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisCATALOG_NAMEField" value="<? echo $thisCATALOG_NAME; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisCATALOG_NAMEField" value=""></TD>
		<TD><input type"text" name="thisSCHEMA_NAMEField" value=""></TD>
		<TD><input type"text" name="thisDEFAULT_CHARACTER_SET_NAMEField" value=""></TD>
		<TD><input type"text" name="thisDEFAULT_COLLATION_NAMEField" value=""></TD>
		<TD><input type"text" name="thisSQL_PATHField" value=""></TD>
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

	$thisCATALOG_NAME = MYSQL_RESULT($result,$i,"CATALOG_NAME");
	$thisSCHEMA_NAME = MYSQL_RESULT($result,$i,"SCHEMA_NAME");
	$thisDEFAULT_CHARACTER_SET_NAME = MYSQL_RESULT($result,$i,"DEFAULT_CHARACTER_SET_NAME");
	$thisDEFAULT_COLLATION_NAME = MYSQL_RESULT($result,$i,"DEFAULT_COLLATION_NAME");
	$thisSQL_PATH = MYSQL_RESULT($result,$i,"SQL_PATH");
if ($thisCATALOG_NAMEFromForm == $thisCATALOG_NAME)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisCATALOG_NAMEField" value="<? echo $thisCATALOG_NAME; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisCATALOG_NAMEField" value="<? echo $thisCATALOG_NAME; ?>"></TD>
		<TD><input type"text" name="thisSCHEMA_NAMEField" value="<? echo $thisSCHEMA_NAME; ?>"></TD>
		<TD><input type"text" name="thisDEFAULT_CHARACTER_SET_NAMEField" value="<? echo $thisDEFAULT_CHARACTER_SET_NAME; ?>"></TD>
		<TD><input type"text" name="thisDEFAULT_COLLATION_NAMEField" value="<? echo $thisDEFAULT_COLLATION_NAME; ?>"></TD>
		<TD><input type"text" name="thisSQL_PATHField" value="<? echo $thisSQL_PATH; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisCATALOG_NAME; ?></TD>
		<TD><? echo $thisSCHEMA_NAME; ?></TD>
		<TD><? echo $thisDEFAULT_CHARACTER_SET_NAME; ?></TD>
		<TD><? echo $thisDEFAULT_COLLATION_NAME; ?></TD>
		<TD><? echo $thisSQL_PATH; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisCATALOG_NAMEField=<? echo $thisCATALOG_NAME; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisCATALOG_NAMEField=<? echo $thisCATALOG_NAME; ?>">Delete</a></TD>
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