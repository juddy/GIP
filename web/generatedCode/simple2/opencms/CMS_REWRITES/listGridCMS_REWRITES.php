<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisIDFromForm = $_REQUEST['thisIDField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisID = addslashes($_REQUEST['thisIDField']);
	$thisALIAS_MODE = addslashes($_REQUEST['thisALIAS_MODEField']);
	$thisPATTERN = addslashes($_REQUEST['thisPATTERNField']);
	$thisREPLACEMENT = addslashes($_REQUEST['thisREPLACEMENTField']);
	$thisSITE_ROOT = addslashes($_REQUEST['thisSITE_ROOTField']);

	$sqlUpdate = "UPDATE CMS_REWRITES SET ID = '$thisID' , ALIAS_MODE = '$thisALIAS_MODE' , PATTERN = '$thisPATTERN' , REPLACEMENT = '$thisREPLACEMENT' , SITE_ROOT = '$thisSITE_ROOT'  WHERE ID = '$thisID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisIDFromForm." has been Updated<br></b>";
	$thisIDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisID = addslashes($_REQUEST['thisIDField']);
	$thisALIAS_MODE = addslashes($_REQUEST['thisALIAS_MODEField']);
	$thisPATTERN = addslashes($_REQUEST['thisPATTERNField']);
	$thisREPLACEMENT = addslashes($_REQUEST['thisREPLACEMENTField']);
	$thisSITE_ROOT = addslashes($_REQUEST['thisSITE_ROOTField']);

	$sqlInsert = "INSERT INTO CMS_REWRITES (ID , ALIAS_MODE , PATTERN , REPLACEMENT , SITE_ROOT ) VALUES ('$thisID' , '$thisALIAS_MODE' , '$thisPATTERN' , '$thisREPLACEMENT' , '$thisSITE_ROOT' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisIDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisID = addslashes($_REQUEST['thisIDField']);
	$thisALIAS_MODE = addslashes($_REQUEST['thisALIAS_MODEField']);
	$thisPATTERN = addslashes($_REQUEST['thisPATTERNField']);
	$thisREPLACEMENT = addslashes($_REQUEST['thisREPLACEMENTField']);
	$thisSITE_ROOT = addslashes($_REQUEST['thisSITE_ROOTField']);

	$sqlDelete = "DELETE FROM CMS_REWRITES WHERE ID = '$thisID'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisIDFromForm." has been Deleted<br></b>";
	$thisIDFromForm = "";
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


$sql = "SELECT   * FROM CMS_REWRITES".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ALIAS_MODE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ALIAS_MODE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PATTERN&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PATTERN</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=REPLACEMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>REPLACEMENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SITE_ROOT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SITE_ROOT</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisIDField" value="<? echo $thisID; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisIDField" value=""></TD>
		<TD><input type"text" name="thisALIAS_MODEField" value=""></TD>
		<TD><input type"text" name="thisPATTERNField" value=""></TD>
		<TD><input type"text" name="thisREPLACEMENTField" value=""></TD>
		<TD><input type"text" name="thisSITE_ROOTField" value=""></TD>
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

	$thisID = MYSQL_RESULT($result,$i,"ID");
	$thisALIAS_MODE = MYSQL_RESULT($result,$i,"ALIAS_MODE");
	$thisPATTERN = MYSQL_RESULT($result,$i,"PATTERN");
	$thisREPLACEMENT = MYSQL_RESULT($result,$i,"REPLACEMENT");
	$thisSITE_ROOT = MYSQL_RESULT($result,$i,"SITE_ROOT");
if ($thisIDFromForm == $thisID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisIDField" value="<? echo $thisID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisIDField" value="<? echo $thisID; ?>"></TD>
		<TD><input type"text" name="thisALIAS_MODEField" value="<? echo $thisALIAS_MODE; ?>"></TD>
		<TD><input type"text" name="thisPATTERNField" value="<? echo $thisPATTERN; ?>"></TD>
		<TD><input type"text" name="thisREPLACEMENTField" value="<? echo $thisREPLACEMENT; ?>"></TD>
		<TD><input type"text" name="thisSITE_ROOTField" value="<? echo $thisSITE_ROOT; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisID; ?></TD>
		<TD><? echo $thisALIAS_MODE; ?></TD>
		<TD><? echo $thisPATTERN; ?></TD>
		<TD><? echo $thisREPLACEMENT; ?></TD>
		<TD><? echo $thisSITE_ROOT; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisIDField=<? echo $thisID; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisIDField=<? echo $thisID; ?>">Delete</a></TD>
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