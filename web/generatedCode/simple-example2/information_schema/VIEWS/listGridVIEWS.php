<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisTABLE_CATALOGFromForm = $_REQUEST['thisTABLE_CATALOGField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisVIEW_DEFINITION = addslashes($_REQUEST['thisVIEW_DEFINITIONField']);
	$thisCHECK_OPTION = addslashes($_REQUEST['thisCHECK_OPTIONField']);
	$thisIS_UPDATABLE = addslashes($_REQUEST['thisIS_UPDATABLEField']);
	$thisDEFINER = addslashes($_REQUEST['thisDEFINERField']);
	$thisSECURITY_TYPE = addslashes($_REQUEST['thisSECURITY_TYPEField']);
	$thisCHARACTER_SET_CLIENT = addslashes($_REQUEST['thisCHARACTER_SET_CLIENTField']);
	$thisCOLLATION_CONNECTION = addslashes($_REQUEST['thisCOLLATION_CONNECTIONField']);

	$sqlUpdate = "UPDATE VIEWS SET TABLE_CATALOG = '$thisTABLE_CATALOG' , TABLE_SCHEMA = '$thisTABLE_SCHEMA' , TABLE_NAME = '$thisTABLE_NAME' , VIEW_DEFINITION = '$thisVIEW_DEFINITION' , CHECK_OPTION = '$thisCHECK_OPTION' , IS_UPDATABLE = '$thisIS_UPDATABLE' , DEFINER = '$thisDEFINER' , SECURITY_TYPE = '$thisSECURITY_TYPE' , CHARACTER_SET_CLIENT = '$thisCHARACTER_SET_CLIENT' , COLLATION_CONNECTION = '$thisCOLLATION_CONNECTION'  WHERE TABLE_CATALOG = '$thisTABLE_CATALOG'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisTABLE_CATALOGFromForm." has been Updated<br></b>";
	$thisTABLE_CATALOGFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisVIEW_DEFINITION = addslashes($_REQUEST['thisVIEW_DEFINITIONField']);
	$thisCHECK_OPTION = addslashes($_REQUEST['thisCHECK_OPTIONField']);
	$thisIS_UPDATABLE = addslashes($_REQUEST['thisIS_UPDATABLEField']);
	$thisDEFINER = addslashes($_REQUEST['thisDEFINERField']);
	$thisSECURITY_TYPE = addslashes($_REQUEST['thisSECURITY_TYPEField']);
	$thisCHARACTER_SET_CLIENT = addslashes($_REQUEST['thisCHARACTER_SET_CLIENTField']);
	$thisCOLLATION_CONNECTION = addslashes($_REQUEST['thisCOLLATION_CONNECTIONField']);

	$sqlInsert = "INSERT INTO VIEWS (TABLE_CATALOG , TABLE_SCHEMA , TABLE_NAME , VIEW_DEFINITION , CHECK_OPTION , IS_UPDATABLE , DEFINER , SECURITY_TYPE , CHARACTER_SET_CLIENT , COLLATION_CONNECTION ) VALUES ('$thisTABLE_CATALOG' , '$thisTABLE_SCHEMA' , '$thisTABLE_NAME' , '$thisVIEW_DEFINITION' , '$thisCHECK_OPTION' , '$thisIS_UPDATABLE' , '$thisDEFINER' , '$thisSECURITY_TYPE' , '$thisCHARACTER_SET_CLIENT' , '$thisCOLLATION_CONNECTION' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisTABLE_CATALOGFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisVIEW_DEFINITION = addslashes($_REQUEST['thisVIEW_DEFINITIONField']);
	$thisCHECK_OPTION = addslashes($_REQUEST['thisCHECK_OPTIONField']);
	$thisIS_UPDATABLE = addslashes($_REQUEST['thisIS_UPDATABLEField']);
	$thisDEFINER = addslashes($_REQUEST['thisDEFINERField']);
	$thisSECURITY_TYPE = addslashes($_REQUEST['thisSECURITY_TYPEField']);
	$thisCHARACTER_SET_CLIENT = addslashes($_REQUEST['thisCHARACTER_SET_CLIENTField']);
	$thisCOLLATION_CONNECTION = addslashes($_REQUEST['thisCOLLATION_CONNECTIONField']);

	$sqlDelete = "DELETE FROM VIEWS WHERE TABLE_CATALOG = '$thisTABLE_CATALOG'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisTABLE_CATALOGFromForm." has been Deleted<br></b>";
	$thisTABLE_CATALOGFromForm = "";
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


$sql = "SELECT   * FROM VIEWS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=VIEW_DEFINITION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>VIEW_DEFINITION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CHECK_OPTION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CHECK_OPTION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=IS_UPDATABLE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>IS_UPDATABLE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DEFINER&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DEFINER</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SECURITY_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SECURITY_TYPE</B>
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
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisTABLE_CATALOGField" value="<? echo $thisTABLE_CATALOG; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisTABLE_CATALOGField" value=""></TD>
		<TD><input type"text" name="thisTABLE_SCHEMAField" value=""></TD>
		<TD><input type"text" name="thisTABLE_NAMEField" value=""></TD>
		<TD><input type"text" name="thisVIEW_DEFINITIONField" value=""></TD>
		<TD><input type"text" name="thisCHECK_OPTIONField" value=""></TD>
		<TD><input type"text" name="thisIS_UPDATABLEField" value=""></TD>
		<TD><input type"text" name="thisDEFINERField" value=""></TD>
		<TD><input type"text" name="thisSECURITY_TYPEField" value=""></TD>
		<TD><input type"text" name="thisCHARACTER_SET_CLIENTField" value=""></TD>
		<TD><input type"text" name="thisCOLLATION_CONNECTIONField" value=""></TD>
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

	$thisTABLE_CATALOG = MYSQL_RESULT($result,$i,"TABLE_CATALOG");
	$thisTABLE_SCHEMA = MYSQL_RESULT($result,$i,"TABLE_SCHEMA");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisVIEW_DEFINITION = MYSQL_RESULT($result,$i,"VIEW_DEFINITION");
	$thisCHECK_OPTION = MYSQL_RESULT($result,$i,"CHECK_OPTION");
	$thisIS_UPDATABLE = MYSQL_RESULT($result,$i,"IS_UPDATABLE");
	$thisDEFINER = MYSQL_RESULT($result,$i,"DEFINER");
	$thisSECURITY_TYPE = MYSQL_RESULT($result,$i,"SECURITY_TYPE");
	$thisCHARACTER_SET_CLIENT = MYSQL_RESULT($result,$i,"CHARACTER_SET_CLIENT");
	$thisCOLLATION_CONNECTION = MYSQL_RESULT($result,$i,"COLLATION_CONNECTION");
if ($thisTABLE_CATALOGFromForm == $thisTABLE_CATALOG)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisTABLE_CATALOGField" value="<? echo $thisTABLE_CATALOG; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisTABLE_CATALOGField" value="<? echo $thisTABLE_CATALOG; ?>"></TD>
		<TD><input type"text" name="thisTABLE_SCHEMAField" value="<? echo $thisTABLE_SCHEMA; ?>"></TD>
		<TD><input type"text" name="thisTABLE_NAMEField" value="<? echo $thisTABLE_NAME; ?>"></TD>
		<TD><input type"text" name="thisVIEW_DEFINITIONField" value="<? echo $thisVIEW_DEFINITION; ?>"></TD>
		<TD><input type"text" name="thisCHECK_OPTIONField" value="<? echo $thisCHECK_OPTION; ?>"></TD>
		<TD><input type"text" name="thisIS_UPDATABLEField" value="<? echo $thisIS_UPDATABLE; ?>"></TD>
		<TD><input type"text" name="thisDEFINERField" value="<? echo $thisDEFINER; ?>"></TD>
		<TD><input type"text" name="thisSECURITY_TYPEField" value="<? echo $thisSECURITY_TYPE; ?>"></TD>
		<TD><input type"text" name="thisCHARACTER_SET_CLIENTField" value="<? echo $thisCHARACTER_SET_CLIENT; ?>"></TD>
		<TD><input type"text" name="thisCOLLATION_CONNECTIONField" value="<? echo $thisCOLLATION_CONNECTION; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisTABLE_CATALOG; ?></TD>
		<TD><? echo $thisTABLE_SCHEMA; ?></TD>
		<TD><? echo $thisTABLE_NAME; ?></TD>
		<TD><? echo $thisVIEW_DEFINITION; ?></TD>
		<TD><? echo $thisCHECK_OPTION; ?></TD>
		<TD><? echo $thisIS_UPDATABLE; ?></TD>
		<TD><? echo $thisDEFINER; ?></TD>
		<TD><? echo $thisSECURITY_TYPE; ?></TD>
		<TD><? echo $thisCHARACTER_SET_CLIENT; ?></TD>
		<TD><? echo $thisCOLLATION_CONNECTION; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisTABLE_CATALOGField=<? echo $thisTABLE_CATALOG; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisTABLE_CATALOGField=<? echo $thisTABLE_CATALOG; ?>">Delete</a></TD>
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