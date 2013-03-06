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
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisCONSTRAINT_TYPE = addslashes($_REQUEST['thisCONSTRAINT_TYPEField']);

	$sqlUpdate = "UPDATE TABLE_CONSTRAINTS SET CONSTRAINT_CATALOG = '$thisCONSTRAINT_CATALOG' , CONSTRAINT_SCHEMA = '$thisCONSTRAINT_SCHEMA' , CONSTRAINT_NAME = '$thisCONSTRAINT_NAME' , TABLE_SCHEMA = '$thisTABLE_SCHEMA' , TABLE_NAME = '$thisTABLE_NAME' , CONSTRAINT_TYPE = '$thisCONSTRAINT_TYPE'  WHERE CONSTRAINT_CATALOG = '$thisCONSTRAINT_CATALOG'";
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
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisCONSTRAINT_TYPE = addslashes($_REQUEST['thisCONSTRAINT_TYPEField']);

	$sqlInsert = "INSERT INTO TABLE_CONSTRAINTS (CONSTRAINT_CATALOG , CONSTRAINT_SCHEMA , CONSTRAINT_NAME , TABLE_SCHEMA , TABLE_NAME , CONSTRAINT_TYPE ) VALUES ('$thisCONSTRAINT_CATALOG' , '$thisCONSTRAINT_SCHEMA' , '$thisCONSTRAINT_NAME' , '$thisTABLE_SCHEMA' , '$thisTABLE_NAME' , '$thisCONSTRAINT_TYPE' )";
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
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisCONSTRAINT_TYPE = addslashes($_REQUEST['thisCONSTRAINT_TYPEField']);

	$sqlDelete = "DELETE FROM TABLE_CONSTRAINTS WHERE CONSTRAINT_CATALOG = '$thisCONSTRAINT_CATALOG'";
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


$sql = "SELECT   * FROM TABLE_CONSTRAINTS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=CONSTRAINT_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CONSTRAINT_TYPE</B>
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
		<TD><input type"text" name="thisTABLE_SCHEMAField" value=""></TD>
		<TD><input type"text" name="thisTABLE_NAMEField" value=""></TD>
		<TD><input type"text" name="thisCONSTRAINT_TYPEField" value=""></TD>
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
	$thisTABLE_SCHEMA = MYSQL_RESULT($result,$i,"TABLE_SCHEMA");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisCONSTRAINT_TYPE = MYSQL_RESULT($result,$i,"CONSTRAINT_TYPE");
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
		<TD><input type"text" name="thisTABLE_SCHEMAField" value="<? echo $thisTABLE_SCHEMA; ?>"></TD>
		<TD><input type"text" name="thisTABLE_NAMEField" value="<? echo $thisTABLE_NAME; ?>"></TD>
		<TD><input type"text" name="thisCONSTRAINT_TYPEField" value="<? echo $thisCONSTRAINT_TYPE; ?>"></TD>
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
		<TD><? echo $thisTABLE_SCHEMA; ?></TD>
		<TD><? echo $thisTABLE_NAME; ?></TD>
		<TD><? echo $thisCONSTRAINT_TYPE; ?></TD>
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