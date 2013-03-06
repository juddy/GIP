<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisCHARACTER_SET_NAMEFromForm = $_REQUEST['thisCHARACTER_SET_NAMEField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisCHARACTER_SET_NAME = addslashes($_REQUEST['thisCHARACTER_SET_NAMEField']);
	$thisDEFAULT_COLLATE_NAME = addslashes($_REQUEST['thisDEFAULT_COLLATE_NAMEField']);
	$thisDESCRIPTION = addslashes($_REQUEST['thisDESCRIPTIONField']);
	$thisMAXLEN = addslashes($_REQUEST['thisMAXLENField']);

	$sqlUpdate = "UPDATE CHARACTER_SETS SET CHARACTER_SET_NAME = '$thisCHARACTER_SET_NAME' , DEFAULT_COLLATE_NAME = '$thisDEFAULT_COLLATE_NAME' , DESCRIPTION = '$thisDESCRIPTION' , MAXLEN = '$thisMAXLEN'  WHERE CHARACTER_SET_NAME = '$thisCHARACTER_SET_NAME'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisCHARACTER_SET_NAMEFromForm." has been Updated<br></b>";
	$thisCHARACTER_SET_NAMEFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisCHARACTER_SET_NAME = addslashes($_REQUEST['thisCHARACTER_SET_NAMEField']);
	$thisDEFAULT_COLLATE_NAME = addslashes($_REQUEST['thisDEFAULT_COLLATE_NAMEField']);
	$thisDESCRIPTION = addslashes($_REQUEST['thisDESCRIPTIONField']);
	$thisMAXLEN = addslashes($_REQUEST['thisMAXLENField']);

	$sqlInsert = "INSERT INTO CHARACTER_SETS (CHARACTER_SET_NAME , DEFAULT_COLLATE_NAME , DESCRIPTION , MAXLEN ) VALUES ('$thisCHARACTER_SET_NAME' , '$thisDEFAULT_COLLATE_NAME' , '$thisDESCRIPTION' , '$thisMAXLEN' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisCHARACTER_SET_NAMEFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisCHARACTER_SET_NAME = addslashes($_REQUEST['thisCHARACTER_SET_NAMEField']);
	$thisDEFAULT_COLLATE_NAME = addslashes($_REQUEST['thisDEFAULT_COLLATE_NAMEField']);
	$thisDESCRIPTION = addslashes($_REQUEST['thisDESCRIPTIONField']);
	$thisMAXLEN = addslashes($_REQUEST['thisMAXLENField']);

	$sqlDelete = "DELETE FROM CHARACTER_SETS WHERE CHARACTER_SET_NAME = '$thisCHARACTER_SET_NAME'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisCHARACTER_SET_NAMEFromForm." has been Deleted<br></b>";
	$thisCHARACTER_SET_NAMEFromForm = "";
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


$sql = "SELECT   * FROM CHARACTER_SETS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=CHARACTER_SET_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CHARACTER_SET_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DEFAULT_COLLATE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DEFAULT_COLLATE_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DESCRIPTION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DESCRIPTION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=MAXLEN&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>MAXLEN</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisCHARACTER_SET_NAMEField" value="<? echo $thisCHARACTER_SET_NAME; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisCHARACTER_SET_NAMEField" value=""></TD>
		<TD><input type"text" name="thisDEFAULT_COLLATE_NAMEField" value=""></TD>
		<TD><input type"text" name="thisDESCRIPTIONField" value=""></TD>
		<TD><input type"text" name="thisMAXLENField" value=""></TD>
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

	$thisCHARACTER_SET_NAME = MYSQL_RESULT($result,$i,"CHARACTER_SET_NAME");
	$thisDEFAULT_COLLATE_NAME = MYSQL_RESULT($result,$i,"DEFAULT_COLLATE_NAME");
	$thisDESCRIPTION = MYSQL_RESULT($result,$i,"DESCRIPTION");
	$thisMAXLEN = MYSQL_RESULT($result,$i,"MAXLEN");
if ($thisCHARACTER_SET_NAMEFromForm == $thisCHARACTER_SET_NAME)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisCHARACTER_SET_NAMEField" value="<? echo $thisCHARACTER_SET_NAME; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisCHARACTER_SET_NAMEField" value="<? echo $thisCHARACTER_SET_NAME; ?>"></TD>
		<TD><input type"text" name="thisDEFAULT_COLLATE_NAMEField" value="<? echo $thisDEFAULT_COLLATE_NAME; ?>"></TD>
		<TD><input type"text" name="thisDESCRIPTIONField" value="<? echo $thisDESCRIPTION; ?>"></TD>
		<TD><input type"text" name="thisMAXLENField" value="<? echo $thisMAXLEN; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisCHARACTER_SET_NAME; ?></TD>
		<TD><? echo $thisDEFAULT_COLLATE_NAME; ?></TD>
		<TD><? echo $thisDESCRIPTION; ?></TD>
		<TD><? echo $thisMAXLEN; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisCHARACTER_SET_NAMEField=<? echo $thisCHARACTER_SET_NAME; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisCHARACTER_SET_NAMEField=<? echo $thisCHARACTER_SET_NAME; ?>">Delete</a></TD>
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