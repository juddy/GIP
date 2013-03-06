<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisCOLLATION_NAMEFromForm = $_REQUEST['thisCOLLATION_NAMEField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisCOLLATION_NAME = addslashes($_REQUEST['thisCOLLATION_NAMEField']);
	$thisCHARACTER_SET_NAME = addslashes($_REQUEST['thisCHARACTER_SET_NAMEField']);
	$thisID = addslashes($_REQUEST['thisIDField']);
	$thisIS_DEFAULT = addslashes($_REQUEST['thisIS_DEFAULTField']);
	$thisIS_COMPILED = addslashes($_REQUEST['thisIS_COMPILEDField']);
	$thisSORTLEN = addslashes($_REQUEST['thisSORTLENField']);

	$sqlUpdate = "UPDATE COLLATIONS SET COLLATION_NAME = '$thisCOLLATION_NAME' , CHARACTER_SET_NAME = '$thisCHARACTER_SET_NAME' , ID = '$thisID' , IS_DEFAULT = '$thisIS_DEFAULT' , IS_COMPILED = '$thisIS_COMPILED' , SORTLEN = '$thisSORTLEN'  WHERE COLLATION_NAME = '$thisCOLLATION_NAME'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisCOLLATION_NAMEFromForm." has been Updated<br></b>";
	$thisCOLLATION_NAMEFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisCOLLATION_NAME = addslashes($_REQUEST['thisCOLLATION_NAMEField']);
	$thisCHARACTER_SET_NAME = addslashes($_REQUEST['thisCHARACTER_SET_NAMEField']);
	$thisID = addslashes($_REQUEST['thisIDField']);
	$thisIS_DEFAULT = addslashes($_REQUEST['thisIS_DEFAULTField']);
	$thisIS_COMPILED = addslashes($_REQUEST['thisIS_COMPILEDField']);
	$thisSORTLEN = addslashes($_REQUEST['thisSORTLENField']);

	$sqlInsert = "INSERT INTO COLLATIONS (COLLATION_NAME , CHARACTER_SET_NAME , ID , IS_DEFAULT , IS_COMPILED , SORTLEN ) VALUES ('$thisCOLLATION_NAME' , '$thisCHARACTER_SET_NAME' , '$thisID' , '$thisIS_DEFAULT' , '$thisIS_COMPILED' , '$thisSORTLEN' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisCOLLATION_NAMEFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisCOLLATION_NAME = addslashes($_REQUEST['thisCOLLATION_NAMEField']);
	$thisCHARACTER_SET_NAME = addslashes($_REQUEST['thisCHARACTER_SET_NAMEField']);
	$thisID = addslashes($_REQUEST['thisIDField']);
	$thisIS_DEFAULT = addslashes($_REQUEST['thisIS_DEFAULTField']);
	$thisIS_COMPILED = addslashes($_REQUEST['thisIS_COMPILEDField']);
	$thisSORTLEN = addslashes($_REQUEST['thisSORTLENField']);

	$sqlDelete = "DELETE FROM COLLATIONS WHERE COLLATION_NAME = '$thisCOLLATION_NAME'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisCOLLATION_NAMEFromForm." has been Deleted<br></b>";
	$thisCOLLATION_NAMEFromForm = "";
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


$sql = "SELECT   * FROM COLLATIONS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=COLLATION_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COLLATION_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CHARACTER_SET_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CHARACTER_SET_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=IS_DEFAULT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>IS_DEFAULT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=IS_COMPILED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>IS_COMPILED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SORTLEN&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SORTLEN</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisCOLLATION_NAMEField" value="<? echo $thisCOLLATION_NAME; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisCOLLATION_NAMEField" value=""></TD>
		<TD><input type"text" name="thisCHARACTER_SET_NAMEField" value=""></TD>
		<TD><input type"text" name="thisIDField" value=""></TD>
		<TD><input type"text" name="thisIS_DEFAULTField" value=""></TD>
		<TD><input type"text" name="thisIS_COMPILEDField" value=""></TD>
		<TD><input type"text" name="thisSORTLENField" value=""></TD>
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

	$thisCOLLATION_NAME = MYSQL_RESULT($result,$i,"COLLATION_NAME");
	$thisCHARACTER_SET_NAME = MYSQL_RESULT($result,$i,"CHARACTER_SET_NAME");
	$thisID = MYSQL_RESULT($result,$i,"ID");
	$thisIS_DEFAULT = MYSQL_RESULT($result,$i,"IS_DEFAULT");
	$thisIS_COMPILED = MYSQL_RESULT($result,$i,"IS_COMPILED");
	$thisSORTLEN = MYSQL_RESULT($result,$i,"SORTLEN");
if ($thisCOLLATION_NAMEFromForm == $thisCOLLATION_NAME)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisCOLLATION_NAMEField" value="<? echo $thisCOLLATION_NAME; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisCOLLATION_NAMEField" value="<? echo $thisCOLLATION_NAME; ?>"></TD>
		<TD><input type"text" name="thisCHARACTER_SET_NAMEField" value="<? echo $thisCHARACTER_SET_NAME; ?>"></TD>
		<TD><input type"text" name="thisIDField" value="<? echo $thisID; ?>"></TD>
		<TD><input type"text" name="thisIS_DEFAULTField" value="<? echo $thisIS_DEFAULT; ?>"></TD>
		<TD><input type"text" name="thisIS_COMPILEDField" value="<? echo $thisIS_COMPILED; ?>"></TD>
		<TD><input type"text" name="thisSORTLENField" value="<? echo $thisSORTLEN; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisCOLLATION_NAME; ?></TD>
		<TD><? echo $thisCHARACTER_SET_NAME; ?></TD>
		<TD><? echo $thisID; ?></TD>
		<TD><? echo $thisIS_DEFAULT; ?></TD>
		<TD><? echo $thisIS_COMPILED; ?></TD>
		<TD><? echo $thisSORTLEN; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisCOLLATION_NAMEField=<? echo $thisCOLLATION_NAME; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisCOLLATION_NAMEField=<? echo $thisCOLLATION_NAME; ?>">Delete</a></TD>
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