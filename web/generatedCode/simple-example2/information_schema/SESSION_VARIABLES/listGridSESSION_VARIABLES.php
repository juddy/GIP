<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisVARIABLE_NAMEFromForm = $_REQUEST['thisVARIABLE_NAMEField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisVARIABLE_NAME = addslashes($_REQUEST['thisVARIABLE_NAMEField']);
	$thisVARIABLE_VALUE = addslashes($_REQUEST['thisVARIABLE_VALUEField']);

	$sqlUpdate = "UPDATE SESSION_VARIABLES SET VARIABLE_NAME = '$thisVARIABLE_NAME' , VARIABLE_VALUE = '$thisVARIABLE_VALUE'  WHERE VARIABLE_NAME = '$thisVARIABLE_NAME'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisVARIABLE_NAMEFromForm." has been Updated<br></b>";
	$thisVARIABLE_NAMEFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisVARIABLE_NAME = addslashes($_REQUEST['thisVARIABLE_NAMEField']);
	$thisVARIABLE_VALUE = addslashes($_REQUEST['thisVARIABLE_VALUEField']);

	$sqlInsert = "INSERT INTO SESSION_VARIABLES (VARIABLE_NAME , VARIABLE_VALUE ) VALUES ('$thisVARIABLE_NAME' , '$thisVARIABLE_VALUE' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisVARIABLE_NAMEFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisVARIABLE_NAME = addslashes($_REQUEST['thisVARIABLE_NAMEField']);
	$thisVARIABLE_VALUE = addslashes($_REQUEST['thisVARIABLE_VALUEField']);

	$sqlDelete = "DELETE FROM SESSION_VARIABLES WHERE VARIABLE_NAME = '$thisVARIABLE_NAME'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisVARIABLE_NAMEFromForm." has been Deleted<br></b>";
	$thisVARIABLE_NAMEFromForm = "";
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


$sql = "SELECT   * FROM SESSION_VARIABLES".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=VARIABLE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>VARIABLE_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=VARIABLE_VALUE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>VARIABLE_VALUE</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisVARIABLE_NAMEField" value="<? echo $thisVARIABLE_NAME; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisVARIABLE_NAMEField" value=""></TD>
		<TD><input type"text" name="thisVARIABLE_VALUEField" value=""></TD>
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

	$thisVARIABLE_NAME = MYSQL_RESULT($result,$i,"VARIABLE_NAME");
	$thisVARIABLE_VALUE = MYSQL_RESULT($result,$i,"VARIABLE_VALUE");
if ($thisVARIABLE_NAMEFromForm == $thisVARIABLE_NAME)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisVARIABLE_NAMEField" value="<? echo $thisVARIABLE_NAME; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisVARIABLE_NAMEField" value="<? echo $thisVARIABLE_NAME; ?>"></TD>
		<TD><input type"text" name="thisVARIABLE_VALUEField" value="<? echo $thisVARIABLE_VALUE; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisVARIABLE_NAME; ?></TD>
		<TD><? echo $thisVARIABLE_VALUE; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisVARIABLE_NAMEField=<? echo $thisVARIABLE_NAME; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisVARIABLE_NAMEField=<? echo $thisVARIABLE_NAME; ?>">Delete</a></TD>
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