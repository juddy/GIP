<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisRequesting_trx_idFromForm = $_REQUEST['thisRequesting_trx_idField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisRequesting_trx_id = addslashes($_REQUEST['thisRequesting_trx_idField']);
	$thisRequested_lock_id = addslashes($_REQUEST['thisRequested_lock_idField']);
	$thisBlocking_trx_id = addslashes($_REQUEST['thisBlocking_trx_idField']);
	$thisBlocking_lock_id = addslashes($_REQUEST['thisBlocking_lock_idField']);

	$sqlUpdate = "UPDATE INNODB_LOCK_WAITS SET requesting_trx_id = '$thisRequesting_trx_id' , requested_lock_id = '$thisRequested_lock_id' , blocking_trx_id = '$thisBlocking_trx_id' , blocking_lock_id = '$thisBlocking_lock_id'  WHERE requesting_trx_id = '$thisRequesting_trx_id'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisRequesting_trx_idFromForm." has been Updated<br></b>";
	$thisRequesting_trx_idFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisRequesting_trx_id = addslashes($_REQUEST['thisRequesting_trx_idField']);
	$thisRequested_lock_id = addslashes($_REQUEST['thisRequested_lock_idField']);
	$thisBlocking_trx_id = addslashes($_REQUEST['thisBlocking_trx_idField']);
	$thisBlocking_lock_id = addslashes($_REQUEST['thisBlocking_lock_idField']);

	$sqlInsert = "INSERT INTO INNODB_LOCK_WAITS (requesting_trx_id , requested_lock_id , blocking_trx_id , blocking_lock_id ) VALUES ('$thisRequesting_trx_id' , '$thisRequested_lock_id' , '$thisBlocking_trx_id' , '$thisBlocking_lock_id' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisRequesting_trx_idFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisRequesting_trx_id = addslashes($_REQUEST['thisRequesting_trx_idField']);
	$thisRequested_lock_id = addslashes($_REQUEST['thisRequested_lock_idField']);
	$thisBlocking_trx_id = addslashes($_REQUEST['thisBlocking_trx_idField']);
	$thisBlocking_lock_id = addslashes($_REQUEST['thisBlocking_lock_idField']);

	$sqlDelete = "DELETE FROM INNODB_LOCK_WAITS WHERE requesting_trx_id = '$thisRequesting_trx_id'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisRequesting_trx_idFromForm." has been Deleted<br></b>";
	$thisRequesting_trx_idFromForm = "";
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


$sql = "SELECT   * FROM INNODB_LOCK_WAITS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=requesting_trx_id&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Requesting_trx_id</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=requested_lock_id&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Requested_lock_id</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=blocking_trx_id&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Blocking_trx_id</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=blocking_lock_id&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Blocking_lock_id</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisRequesting_trx_idField" value="<? echo $thisRequesting_trx_id; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisRequesting_trx_idField" value=""></TD>
		<TD><input type"text" name="thisRequested_lock_idField" value=""></TD>
		<TD><input type"text" name="thisBlocking_trx_idField" value=""></TD>
		<TD><input type"text" name="thisBlocking_lock_idField" value=""></TD>
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

	$thisRequesting_trx_id = MYSQL_RESULT($result,$i,"requesting_trx_id");
	$thisRequested_lock_id = MYSQL_RESULT($result,$i,"requested_lock_id");
	$thisBlocking_trx_id = MYSQL_RESULT($result,$i,"blocking_trx_id");
	$thisBlocking_lock_id = MYSQL_RESULT($result,$i,"blocking_lock_id");
if ($thisRequesting_trx_idFromForm == $thisRequesting_trx_id)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisRequesting_trx_idField" value="<? echo $thisRequesting_trx_id; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisRequesting_trx_idField" value="<? echo $thisRequesting_trx_id; ?>"></TD>
		<TD><input type"text" name="thisRequested_lock_idField" value="<? echo $thisRequested_lock_id; ?>"></TD>
		<TD><input type"text" name="thisBlocking_trx_idField" value="<? echo $thisBlocking_trx_id; ?>"></TD>
		<TD><input type"text" name="thisBlocking_lock_idField" value="<? echo $thisBlocking_lock_id; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisRequesting_trx_id; ?></TD>
		<TD><? echo $thisRequested_lock_id; ?></TD>
		<TD><? echo $thisBlocking_trx_id; ?></TD>
		<TD><? echo $thisBlocking_lock_id; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisRequesting_trx_idField=<? echo $thisRequesting_trx_id; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisRequesting_trx_idField=<? echo $thisRequesting_trx_id; ?>">Delete</a></TD>
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