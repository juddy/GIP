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
	$thisUNIQUE_CONSTRAINT_CATALOG = addslashes($_REQUEST['thisUNIQUE_CONSTRAINT_CATALOGField']);
	$thisUNIQUE_CONSTRAINT_SCHEMA = addslashes($_REQUEST['thisUNIQUE_CONSTRAINT_SCHEMAField']);
	$thisUNIQUE_CONSTRAINT_NAME = addslashes($_REQUEST['thisUNIQUE_CONSTRAINT_NAMEField']);
	$thisMATCH_OPTION = addslashes($_REQUEST['thisMATCH_OPTIONField']);
	$thisUPDATE_RULE = addslashes($_REQUEST['thisUPDATE_RULEField']);
	$thisDELETE_RULE = addslashes($_REQUEST['thisDELETE_RULEField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisREFERENCED_TABLE_NAME = addslashes($_REQUEST['thisREFERENCED_TABLE_NAMEField']);

	$sqlUpdate = "UPDATE REFERENTIAL_CONSTRAINTS SET CONSTRAINT_CATALOG = '$thisCONSTRAINT_CATALOG' , CONSTRAINT_SCHEMA = '$thisCONSTRAINT_SCHEMA' , CONSTRAINT_NAME = '$thisCONSTRAINT_NAME' , UNIQUE_CONSTRAINT_CATALOG = '$thisUNIQUE_CONSTRAINT_CATALOG' , UNIQUE_CONSTRAINT_SCHEMA = '$thisUNIQUE_CONSTRAINT_SCHEMA' , UNIQUE_CONSTRAINT_NAME = '$thisUNIQUE_CONSTRAINT_NAME' , MATCH_OPTION = '$thisMATCH_OPTION' , UPDATE_RULE = '$thisUPDATE_RULE' , DELETE_RULE = '$thisDELETE_RULE' , TABLE_NAME = '$thisTABLE_NAME' , REFERENCED_TABLE_NAME = '$thisREFERENCED_TABLE_NAME'  WHERE CONSTRAINT_CATALOG = '$thisCONSTRAINT_CATALOG'";
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
	$thisUNIQUE_CONSTRAINT_CATALOG = addslashes($_REQUEST['thisUNIQUE_CONSTRAINT_CATALOGField']);
	$thisUNIQUE_CONSTRAINT_SCHEMA = addslashes($_REQUEST['thisUNIQUE_CONSTRAINT_SCHEMAField']);
	$thisUNIQUE_CONSTRAINT_NAME = addslashes($_REQUEST['thisUNIQUE_CONSTRAINT_NAMEField']);
	$thisMATCH_OPTION = addslashes($_REQUEST['thisMATCH_OPTIONField']);
	$thisUPDATE_RULE = addslashes($_REQUEST['thisUPDATE_RULEField']);
	$thisDELETE_RULE = addslashes($_REQUEST['thisDELETE_RULEField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisREFERENCED_TABLE_NAME = addslashes($_REQUEST['thisREFERENCED_TABLE_NAMEField']);

	$sqlInsert = "INSERT INTO REFERENTIAL_CONSTRAINTS (CONSTRAINT_CATALOG , CONSTRAINT_SCHEMA , CONSTRAINT_NAME , UNIQUE_CONSTRAINT_CATALOG , UNIQUE_CONSTRAINT_SCHEMA , UNIQUE_CONSTRAINT_NAME , MATCH_OPTION , UPDATE_RULE , DELETE_RULE , TABLE_NAME , REFERENCED_TABLE_NAME ) VALUES ('$thisCONSTRAINT_CATALOG' , '$thisCONSTRAINT_SCHEMA' , '$thisCONSTRAINT_NAME' , '$thisUNIQUE_CONSTRAINT_CATALOG' , '$thisUNIQUE_CONSTRAINT_SCHEMA' , '$thisUNIQUE_CONSTRAINT_NAME' , '$thisMATCH_OPTION' , '$thisUPDATE_RULE' , '$thisDELETE_RULE' , '$thisTABLE_NAME' , '$thisREFERENCED_TABLE_NAME' )";
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
	$thisUNIQUE_CONSTRAINT_CATALOG = addslashes($_REQUEST['thisUNIQUE_CONSTRAINT_CATALOGField']);
	$thisUNIQUE_CONSTRAINT_SCHEMA = addslashes($_REQUEST['thisUNIQUE_CONSTRAINT_SCHEMAField']);
	$thisUNIQUE_CONSTRAINT_NAME = addslashes($_REQUEST['thisUNIQUE_CONSTRAINT_NAMEField']);
	$thisMATCH_OPTION = addslashes($_REQUEST['thisMATCH_OPTIONField']);
	$thisUPDATE_RULE = addslashes($_REQUEST['thisUPDATE_RULEField']);
	$thisDELETE_RULE = addslashes($_REQUEST['thisDELETE_RULEField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisREFERENCED_TABLE_NAME = addslashes($_REQUEST['thisREFERENCED_TABLE_NAMEField']);

	$sqlDelete = "DELETE FROM REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_CATALOG = '$thisCONSTRAINT_CATALOG'";
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


$sql = "SELECT   * FROM REFERENTIAL_CONSTRAINTS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=UNIQUE_CONSTRAINT_CATALOG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>UNIQUE_CONSTRAINT_CATALOG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=UNIQUE_CONSTRAINT_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>UNIQUE_CONSTRAINT_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=UNIQUE_CONSTRAINT_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>UNIQUE_CONSTRAINT_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=MATCH_OPTION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>MATCH_OPTION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=UPDATE_RULE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>UPDATE_RULE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DELETE_RULE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DELETE_RULE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=REFERENCED_TABLE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>REFERENCED_TABLE_NAME</B>
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
		<TD><input type"text" name="thisUNIQUE_CONSTRAINT_CATALOGField" value=""></TD>
		<TD><input type"text" name="thisUNIQUE_CONSTRAINT_SCHEMAField" value=""></TD>
		<TD><input type"text" name="thisUNIQUE_CONSTRAINT_NAMEField" value=""></TD>
		<TD><input type"text" name="thisMATCH_OPTIONField" value=""></TD>
		<TD><input type"text" name="thisUPDATE_RULEField" value=""></TD>
		<TD><input type"text" name="thisDELETE_RULEField" value=""></TD>
		<TD><input type"text" name="thisTABLE_NAMEField" value=""></TD>
		<TD><input type"text" name="thisREFERENCED_TABLE_NAMEField" value=""></TD>
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
	$thisUNIQUE_CONSTRAINT_CATALOG = MYSQL_RESULT($result,$i,"UNIQUE_CONSTRAINT_CATALOG");
	$thisUNIQUE_CONSTRAINT_SCHEMA = MYSQL_RESULT($result,$i,"UNIQUE_CONSTRAINT_SCHEMA");
	$thisUNIQUE_CONSTRAINT_NAME = MYSQL_RESULT($result,$i,"UNIQUE_CONSTRAINT_NAME");
	$thisMATCH_OPTION = MYSQL_RESULT($result,$i,"MATCH_OPTION");
	$thisUPDATE_RULE = MYSQL_RESULT($result,$i,"UPDATE_RULE");
	$thisDELETE_RULE = MYSQL_RESULT($result,$i,"DELETE_RULE");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisREFERENCED_TABLE_NAME = MYSQL_RESULT($result,$i,"REFERENCED_TABLE_NAME");
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
		<TD><input type"text" name="thisUNIQUE_CONSTRAINT_CATALOGField" value="<? echo $thisUNIQUE_CONSTRAINT_CATALOG; ?>"></TD>
		<TD><input type"text" name="thisUNIQUE_CONSTRAINT_SCHEMAField" value="<? echo $thisUNIQUE_CONSTRAINT_SCHEMA; ?>"></TD>
		<TD><input type"text" name="thisUNIQUE_CONSTRAINT_NAMEField" value="<? echo $thisUNIQUE_CONSTRAINT_NAME; ?>"></TD>
		<TD><input type"text" name="thisMATCH_OPTIONField" value="<? echo $thisMATCH_OPTION; ?>"></TD>
		<TD><input type"text" name="thisUPDATE_RULEField" value="<? echo $thisUPDATE_RULE; ?>"></TD>
		<TD><input type"text" name="thisDELETE_RULEField" value="<? echo $thisDELETE_RULE; ?>"></TD>
		<TD><input type"text" name="thisTABLE_NAMEField" value="<? echo $thisTABLE_NAME; ?>"></TD>
		<TD><input type"text" name="thisREFERENCED_TABLE_NAMEField" value="<? echo $thisREFERENCED_TABLE_NAME; ?>"></TD>
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
		<TD><? echo $thisUNIQUE_CONSTRAINT_CATALOG; ?></TD>
		<TD><? echo $thisUNIQUE_CONSTRAINT_SCHEMA; ?></TD>
		<TD><? echo $thisUNIQUE_CONSTRAINT_NAME; ?></TD>
		<TD><? echo $thisMATCH_OPTION; ?></TD>
		<TD><? echo $thisUPDATE_RULE; ?></TD>
		<TD><? echo $thisDELETE_RULE; ?></TD>
		<TD><? echo $thisTABLE_NAME; ?></TD>
		<TD><? echo $thisREFERENCED_TABLE_NAME; ?></TD>
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