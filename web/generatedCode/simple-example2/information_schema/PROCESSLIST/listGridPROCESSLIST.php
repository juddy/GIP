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
	$thisUSER = addslashes($_REQUEST['thisUSERField']);
	$thisHOST = addslashes($_REQUEST['thisHOSTField']);
	$thisDB = addslashes($_REQUEST['thisDBField']);
	$thisCOMMAND = addslashes($_REQUEST['thisCOMMANDField']);
	$thisTIME = addslashes($_REQUEST['thisTIMEField']);
	$thisSTATE = addslashes($_REQUEST['thisSTATEField']);
	$thisINFO = addslashes($_REQUEST['thisINFOField']);

	$sqlUpdate = "UPDATE PROCESSLIST SET ID = '$thisID' , USER = '$thisUSER' , HOST = '$thisHOST' , DB = '$thisDB' , COMMAND = '$thisCOMMAND' , TIME = '$thisTIME' , STATE = '$thisSTATE' , INFO = '$thisINFO'  WHERE ID = '$thisID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisIDFromForm." has been Updated<br></b>";
	$thisIDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisID = addslashes($_REQUEST['thisIDField']);
	$thisUSER = addslashes($_REQUEST['thisUSERField']);
	$thisHOST = addslashes($_REQUEST['thisHOSTField']);
	$thisDB = addslashes($_REQUEST['thisDBField']);
	$thisCOMMAND = addslashes($_REQUEST['thisCOMMANDField']);
	$thisTIME = addslashes($_REQUEST['thisTIMEField']);
	$thisSTATE = addslashes($_REQUEST['thisSTATEField']);
	$thisINFO = addslashes($_REQUEST['thisINFOField']);

	$sqlInsert = "INSERT INTO PROCESSLIST (ID , USER , HOST , DB , COMMAND , TIME , STATE , INFO ) VALUES ('$thisID' , '$thisUSER' , '$thisHOST' , '$thisDB' , '$thisCOMMAND' , '$thisTIME' , '$thisSTATE' , '$thisINFO' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisIDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisID = addslashes($_REQUEST['thisIDField']);
	$thisUSER = addslashes($_REQUEST['thisUSERField']);
	$thisHOST = addslashes($_REQUEST['thisHOSTField']);
	$thisDB = addslashes($_REQUEST['thisDBField']);
	$thisCOMMAND = addslashes($_REQUEST['thisCOMMANDField']);
	$thisTIME = addslashes($_REQUEST['thisTIMEField']);
	$thisSTATE = addslashes($_REQUEST['thisSTATEField']);
	$thisINFO = addslashes($_REQUEST['thisINFOField']);

	$sqlDelete = "DELETE FROM PROCESSLIST WHERE ID = '$thisID'";
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


$sql = "SELECT   * FROM PROCESSLIST".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=HOST&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>HOST</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DB&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DB</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COMMAND&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COMMAND</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TIME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=STATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>STATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INFO&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INFO</B>
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
		<TD><input type"text" name="thisUSERField" value=""></TD>
		<TD><input type"text" name="thisHOSTField" value=""></TD>
		<TD><input type"text" name="thisDBField" value=""></TD>
		<TD><input type"text" name="thisCOMMANDField" value=""></TD>
		<TD><input type"text" name="thisTIMEField" value=""></TD>
		<TD><input type"text" name="thisSTATEField" value=""></TD>
		<TD><input type"text" name="thisINFOField" value=""></TD>
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
	$thisUSER = MYSQL_RESULT($result,$i,"USER");
	$thisHOST = MYSQL_RESULT($result,$i,"HOST");
	$thisDB = MYSQL_RESULT($result,$i,"DB");
	$thisCOMMAND = MYSQL_RESULT($result,$i,"COMMAND");
	$thisTIME = MYSQL_RESULT($result,$i,"TIME");
	$thisSTATE = MYSQL_RESULT($result,$i,"STATE");
	$thisINFO = MYSQL_RESULT($result,$i,"INFO");
if ($thisIDFromForm == $thisID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisIDField" value="<? echo $thisID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisIDField" value="<? echo $thisID; ?>"></TD>
		<TD><input type"text" name="thisUSERField" value="<? echo $thisUSER; ?>"></TD>
		<TD><input type"text" name="thisHOSTField" value="<? echo $thisHOST; ?>"></TD>
		<TD><input type"text" name="thisDBField" value="<? echo $thisDB; ?>"></TD>
		<TD><input type"text" name="thisCOMMANDField" value="<? echo $thisCOMMAND; ?>"></TD>
		<TD><input type"text" name="thisTIMEField" value="<? echo $thisTIME; ?>"></TD>
		<TD><input type"text" name="thisSTATEField" value="<? echo $thisSTATE; ?>"></TD>
		<TD><input type"text" name="thisINFOField" value="<? echo $thisINFO; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisID; ?></TD>
		<TD><? echo $thisUSER; ?></TD>
		<TD><? echo $thisHOST; ?></TD>
		<TD><? echo $thisDB; ?></TD>
		<TD><? echo $thisCOMMAND; ?></TD>
		<TD><? echo $thisTIME; ?></TD>
		<TD><? echo $thisSTATE; ?></TD>
		<TD><? echo $thisINFO; ?></TD>
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