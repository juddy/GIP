<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisCONSTRAINT_CATALOGFromForm = $_REQUEST['thisCONSTRAINT_CATALOGField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisCONSTRAINT_CATALOG = addslashes($_REQUEST['thisCONSTRAINT_CATALOGField']);
	$thisCONSTRAINT_SCHEMA = addslashes($_REQUEST['thisCONSTRAINT_SCHEMAField']);
	$thisCONSTRAINT_NAME = addslashes($_REQUEST['thisCONSTRAINT_NAMEField']);
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisCOLUMN_NAME = addslashes($_REQUEST['thisCOLUMN_NAMEField']);
	$thisORDINAL_POSITION = addslashes($_REQUEST['thisORDINAL_POSITIONField']);
	$thisPOSITION_IN_UNIQUE_CONSTRAINT = addslashes($_REQUEST['thisPOSITION_IN_UNIQUE_CONSTRAINTField']);
	$thisREFERENCED_TABLE_SCHEMA = addslashes($_REQUEST['thisREFERENCED_TABLE_SCHEMAField']);
	$thisREFERENCED_TABLE_NAME = addslashes($_REQUEST['thisREFERENCED_TABLE_NAMEField']);
	$thisREFERENCED_COLUMN_NAME = addslashes($_REQUEST['thisREFERENCED_COLUMN_NAMEField']);

	$sqlUpdate = "UPDATE KEY_COLUMN_USAGE SET CONSTRAINT_CATALOG = '$thisCONSTRAINT_CATALOG' , CONSTRAINT_SCHEMA = '$thisCONSTRAINT_SCHEMA' , CONSTRAINT_NAME = '$thisCONSTRAINT_NAME' , TABLE_CATALOG = '$thisTABLE_CATALOG' , TABLE_SCHEMA = '$thisTABLE_SCHEMA' , TABLE_NAME = '$thisTABLE_NAME' , COLUMN_NAME = '$thisCOLUMN_NAME' , ORDINAL_POSITION = '$thisORDINAL_POSITION' , POSITION_IN_UNIQUE_CONSTRAINT = '$thisPOSITION_IN_UNIQUE_CONSTRAINT' , REFERENCED_TABLE_SCHEMA = '$thisREFERENCED_TABLE_SCHEMA' , REFERENCED_TABLE_NAME = '$thisREFERENCED_TABLE_NAME' , REFERENCED_COLUMN_NAME = '$thisREFERENCED_COLUMN_NAME'  WHERE CONSTRAINT_CATALOG = '$thisCONSTRAINT_CATALOG'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisCONSTRAINT_CATALOGFromForm." has been Updated<br></b>";
	$thisCONSTRAINT_CATALOGFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisCONSTRAINT_CATALOG = addslashes($_REQUEST['thisCONSTRAINT_CATALOGField']);
	$thisCONSTRAINT_SCHEMA = addslashes($_REQUEST['thisCONSTRAINT_SCHEMAField']);
	$thisCONSTRAINT_NAME = addslashes($_REQUEST['thisCONSTRAINT_NAMEField']);
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisCOLUMN_NAME = addslashes($_REQUEST['thisCOLUMN_NAMEField']);
	$thisORDINAL_POSITION = addslashes($_REQUEST['thisORDINAL_POSITIONField']);
	$thisPOSITION_IN_UNIQUE_CONSTRAINT = addslashes($_REQUEST['thisPOSITION_IN_UNIQUE_CONSTRAINTField']);
	$thisREFERENCED_TABLE_SCHEMA = addslashes($_REQUEST['thisREFERENCED_TABLE_SCHEMAField']);
	$thisREFERENCED_TABLE_NAME = addslashes($_REQUEST['thisREFERENCED_TABLE_NAMEField']);
	$thisREFERENCED_COLUMN_NAME = addslashes($_REQUEST['thisREFERENCED_COLUMN_NAMEField']);

	$sqlInsert = "INSERT INTO KEY_COLUMN_USAGE (CONSTRAINT_CATALOG , CONSTRAINT_SCHEMA , CONSTRAINT_NAME , TABLE_CATALOG , TABLE_SCHEMA , TABLE_NAME , COLUMN_NAME , ORDINAL_POSITION , POSITION_IN_UNIQUE_CONSTRAINT , REFERENCED_TABLE_SCHEMA , REFERENCED_TABLE_NAME , REFERENCED_COLUMN_NAME ) VALUES ('$thisCONSTRAINT_CATALOG' , '$thisCONSTRAINT_SCHEMA' , '$thisCONSTRAINT_NAME' , '$thisTABLE_CATALOG' , '$thisTABLE_SCHEMA' , '$thisTABLE_NAME' , '$thisCOLUMN_NAME' , '$thisORDINAL_POSITION' , '$thisPOSITION_IN_UNIQUE_CONSTRAINT' , '$thisREFERENCED_TABLE_SCHEMA' , '$thisREFERENCED_TABLE_NAME' , '$thisREFERENCED_COLUMN_NAME' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisCONSTRAINT_CATALOGFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisCONSTRAINT_CATALOG = addslashes($_REQUEST['thisCONSTRAINT_CATALOGField']);
	$thisCONSTRAINT_SCHEMA = addslashes($_REQUEST['thisCONSTRAINT_SCHEMAField']);
	$thisCONSTRAINT_NAME = addslashes($_REQUEST['thisCONSTRAINT_NAMEField']);
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisCOLUMN_NAME = addslashes($_REQUEST['thisCOLUMN_NAMEField']);
	$thisORDINAL_POSITION = addslashes($_REQUEST['thisORDINAL_POSITIONField']);
	$thisPOSITION_IN_UNIQUE_CONSTRAINT = addslashes($_REQUEST['thisPOSITION_IN_UNIQUE_CONSTRAINTField']);
	$thisREFERENCED_TABLE_SCHEMA = addslashes($_REQUEST['thisREFERENCED_TABLE_SCHEMAField']);
	$thisREFERENCED_TABLE_NAME = addslashes($_REQUEST['thisREFERENCED_TABLE_NAMEField']);
	$thisREFERENCED_COLUMN_NAME = addslashes($_REQUEST['thisREFERENCED_COLUMN_NAMEField']);

	$sqlDelete = "DELETE FROM KEY_COLUMN_USAGE WHERE CONSTRAINT_CATALOG = '$thisCONSTRAINT_CATALOG'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisCONSTRAINT_CATALOGFromForm." has been Deleted<br></b>";
	$thisCONSTRAINT_CATALOGFromForm = "";
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


$sql = "SELECT   * FROM KEY_COLUMN_USAGE".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=CONSTRAINT_CATALOG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CONSTRAINT_CATALOG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CONSTRAINT_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CONSTRAINT_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CONSTRAINT_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CONSTRAINT_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_CATALOG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_CATALOG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COLUMN_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COLUMN_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ORDINAL_POSITION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ORDINAL_POSITION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=POSITION_IN_UNIQUE_CONSTRAINT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>POSITION_IN_UNIQUE_CONSTRAINT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=REFERENCED_TABLE_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>REFERENCED_TABLE_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=REFERENCED_TABLE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>REFERENCED_TABLE_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=REFERENCED_COLUMN_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>REFERENCED_COLUMN_NAME</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisCONSTRAINT_CATALOGField" value="<? echo $thisCONSTRAINT_CATALOG; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisCONSTRAINT_CATALOGField" value=""></TD>
		<TD><input type"text" name="thisCONSTRAINT_SCHEMAField" value=""></TD>
		<TD><input type"text" name="thisCONSTRAINT_NAMEField" value=""></TD>
		<TD><input type"text" name="thisTABLE_CATALOGField" value=""></TD>
		<TD><input type"text" name="thisTABLE_SCHEMAField" value=""></TD>
		<TD><input type"text" name="thisTABLE_NAMEField" value=""></TD>
		<TD><input type"text" name="thisCOLUMN_NAMEField" value=""></TD>
		<TD><input type"text" name="thisORDINAL_POSITIONField" value=""></TD>
		<TD><input type"text" name="thisPOSITION_IN_UNIQUE_CONSTRAINTField" value=""></TD>
		<TD><input type"text" name="thisREFERENCED_TABLE_SCHEMAField" value=""></TD>
		<TD><input type"text" name="thisREFERENCED_TABLE_NAMEField" value=""></TD>
		<TD><input type"text" name="thisREFERENCED_COLUMN_NAMEField" value=""></TD>
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

	$thisCONSTRAINT_CATALOG = MYSQL_RESULT($result,$i,"CONSTRAINT_CATALOG");
	$thisCONSTRAINT_SCHEMA = MYSQL_RESULT($result,$i,"CONSTRAINT_SCHEMA");
	$thisCONSTRAINT_NAME = MYSQL_RESULT($result,$i,"CONSTRAINT_NAME");
	$thisTABLE_CATALOG = MYSQL_RESULT($result,$i,"TABLE_CATALOG");
	$thisTABLE_SCHEMA = MYSQL_RESULT($result,$i,"TABLE_SCHEMA");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisCOLUMN_NAME = MYSQL_RESULT($result,$i,"COLUMN_NAME");
	$thisORDINAL_POSITION = MYSQL_RESULT($result,$i,"ORDINAL_POSITION");
	$thisPOSITION_IN_UNIQUE_CONSTRAINT = MYSQL_RESULT($result,$i,"POSITION_IN_UNIQUE_CONSTRAINT");
	$thisREFERENCED_TABLE_SCHEMA = MYSQL_RESULT($result,$i,"REFERENCED_TABLE_SCHEMA");
	$thisREFERENCED_TABLE_NAME = MYSQL_RESULT($result,$i,"REFERENCED_TABLE_NAME");
	$thisREFERENCED_COLUMN_NAME = MYSQL_RESULT($result,$i,"REFERENCED_COLUMN_NAME");
if ($thisCONSTRAINT_CATALOGFromForm == $thisCONSTRAINT_CATALOG)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisCONSTRAINT_CATALOGField" value="<? echo $thisCONSTRAINT_CATALOG; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisCONSTRAINT_CATALOGField" value="<? echo $thisCONSTRAINT_CATALOG; ?>"></TD>
		<TD><input type"text" name="thisCONSTRAINT_SCHEMAField" value="<? echo $thisCONSTRAINT_SCHEMA; ?>"></TD>
		<TD><input type"text" name="thisCONSTRAINT_NAMEField" value="<? echo $thisCONSTRAINT_NAME; ?>"></TD>
		<TD><input type"text" name="thisTABLE_CATALOGField" value="<? echo $thisTABLE_CATALOG; ?>"></TD>
		<TD><input type"text" name="thisTABLE_SCHEMAField" value="<? echo $thisTABLE_SCHEMA; ?>"></TD>
		<TD><input type"text" name="thisTABLE_NAMEField" value="<? echo $thisTABLE_NAME; ?>"></TD>
		<TD><input type"text" name="thisCOLUMN_NAMEField" value="<? echo $thisCOLUMN_NAME; ?>"></TD>
		<TD><input type"text" name="thisORDINAL_POSITIONField" value="<? echo $thisORDINAL_POSITION; ?>"></TD>
		<TD><input type"text" name="thisPOSITION_IN_UNIQUE_CONSTRAINTField" value="<? echo $thisPOSITION_IN_UNIQUE_CONSTRAINT; ?>"></TD>
		<TD><input type"text" name="thisREFERENCED_TABLE_SCHEMAField" value="<? echo $thisREFERENCED_TABLE_SCHEMA; ?>"></TD>
		<TD><input type"text" name="thisREFERENCED_TABLE_NAMEField" value="<? echo $thisREFERENCED_TABLE_NAME; ?>"></TD>
		<TD><input type"text" name="thisREFERENCED_COLUMN_NAMEField" value="<? echo $thisREFERENCED_COLUMN_NAME; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisCONSTRAINT_CATALOG; ?></TD>
		<TD><? echo $thisCONSTRAINT_SCHEMA; ?></TD>
		<TD><? echo $thisCONSTRAINT_NAME; ?></TD>
		<TD><? echo $thisTABLE_CATALOG; ?></TD>
		<TD><? echo $thisTABLE_SCHEMA; ?></TD>
		<TD><? echo $thisTABLE_NAME; ?></TD>
		<TD><? echo $thisCOLUMN_NAME; ?></TD>
		<TD><? echo $thisORDINAL_POSITION; ?></TD>
		<TD><? echo $thisPOSITION_IN_UNIQUE_CONSTRAINT; ?></TD>
		<TD><? echo $thisREFERENCED_TABLE_SCHEMA; ?></TD>
		<TD><? echo $thisREFERENCED_TABLE_NAME; ?></TD>
		<TD><? echo $thisREFERENCED_COLUMN_NAME; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisCONSTRAINT_CATALOGField=<? echo $thisCONSTRAINT_CATALOG; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisCONSTRAINT_CATALOGField=<? echo $thisCONSTRAINT_CATALOG; ?>">Delete</a></TD>
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