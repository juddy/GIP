<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisLock_idFromForm = $_REQUEST['thisLock_idField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisLock_id = addslashes($_REQUEST['thisLock_idField']);
	$thisLock_trx_id = addslashes($_REQUEST['thisLock_trx_idField']);
	$thisLock_mode = addslashes($_REQUEST['thisLock_modeField']);
	$thisLock_type = addslashes($_REQUEST['thisLock_typeField']);
	$thisLock_table = addslashes($_REQUEST['thisLock_tableField']);
	$thisLock_index = addslashes($_REQUEST['thisLock_indexField']);
	$thisLock_space = addslashes($_REQUEST['thisLock_spaceField']);
	$thisLock_page = addslashes($_REQUEST['thisLock_pageField']);
	$thisLock_rec = addslashes($_REQUEST['thisLock_recField']);
	$thisLock_data = addslashes($_REQUEST['thisLock_dataField']);

	$sqlUpdate = "UPDATE INNODB_LOCKS SET lock_id = '$thisLock_id' , lock_trx_id = '$thisLock_trx_id' , lock_mode = '$thisLock_mode' , lock_type = '$thisLock_type' , lock_table = '$thisLock_table' , lock_index = '$thisLock_index' , lock_space = '$thisLock_space' , lock_page = '$thisLock_page' , lock_rec = '$thisLock_rec' , lock_data = '$thisLock_data'  WHERE lock_id = '$thisLock_id'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisLock_idFromForm." has been Updated<br></b>";
	$thisLock_idFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisLock_id = addslashes($_REQUEST['thisLock_idField']);
	$thisLock_trx_id = addslashes($_REQUEST['thisLock_trx_idField']);
	$thisLock_mode = addslashes($_REQUEST['thisLock_modeField']);
	$thisLock_type = addslashes($_REQUEST['thisLock_typeField']);
	$thisLock_table = addslashes($_REQUEST['thisLock_tableField']);
	$thisLock_index = addslashes($_REQUEST['thisLock_indexField']);
	$thisLock_space = addslashes($_REQUEST['thisLock_spaceField']);
	$thisLock_page = addslashes($_REQUEST['thisLock_pageField']);
	$thisLock_rec = addslashes($_REQUEST['thisLock_recField']);
	$thisLock_data = addslashes($_REQUEST['thisLock_dataField']);

	$sqlInsert = "INSERT INTO INNODB_LOCKS (lock_id , lock_trx_id , lock_mode , lock_type , lock_table , lock_index , lock_space , lock_page , lock_rec , lock_data ) VALUES ('$thisLock_id' , '$thisLock_trx_id' , '$thisLock_mode' , '$thisLock_type' , '$thisLock_table' , '$thisLock_index' , '$thisLock_space' , '$thisLock_page' , '$thisLock_rec' , '$thisLock_data' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisLock_idFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisLock_id = addslashes($_REQUEST['thisLock_idField']);
	$thisLock_trx_id = addslashes($_REQUEST['thisLock_trx_idField']);
	$thisLock_mode = addslashes($_REQUEST['thisLock_modeField']);
	$thisLock_type = addslashes($_REQUEST['thisLock_typeField']);
	$thisLock_table = addslashes($_REQUEST['thisLock_tableField']);
	$thisLock_index = addslashes($_REQUEST['thisLock_indexField']);
	$thisLock_space = addslashes($_REQUEST['thisLock_spaceField']);
	$thisLock_page = addslashes($_REQUEST['thisLock_pageField']);
	$thisLock_rec = addslashes($_REQUEST['thisLock_recField']);
	$thisLock_data = addslashes($_REQUEST['thisLock_dataField']);

	$sqlDelete = "DELETE FROM INNODB_LOCKS WHERE lock_id = '$thisLock_id'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisLock_idFromForm." has been Deleted<br></b>";
	$thisLock_idFromForm = "";
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


$sql = "SELECT   * FROM INNODB_LOCKS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_id&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_id</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_trx_id&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_trx_id</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_mode&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_mode</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_type&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_type</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_table&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_table</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_index&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_index</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_space&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_space</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_page&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_page</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_rec&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_rec</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_data&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_data</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisLock_idField" value="<? echo $thisLock_id; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisLock_idField" value=""></TD>
		<TD><input type"text" name="thisLock_trx_idField" value=""></TD>
		<TD><input type"text" name="thisLock_modeField" value=""></TD>
		<TD><input type"text" name="thisLock_typeField" value=""></TD>
		<TD><input type"text" name="thisLock_tableField" value=""></TD>
		<TD><input type"text" name="thisLock_indexField" value=""></TD>
		<TD><input type"text" name="thisLock_spaceField" value=""></TD>
		<TD><input type"text" name="thisLock_pageField" value=""></TD>
		<TD><input type"text" name="thisLock_recField" value=""></TD>
		<TD><input type"text" name="thisLock_dataField" value=""></TD>
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

	$thisLock_id = MYSQL_RESULT($result,$i,"lock_id");
	$thisLock_trx_id = MYSQL_RESULT($result,$i,"lock_trx_id");
	$thisLock_mode = MYSQL_RESULT($result,$i,"lock_mode");
	$thisLock_type = MYSQL_RESULT($result,$i,"lock_type");
	$thisLock_table = MYSQL_RESULT($result,$i,"lock_table");
	$thisLock_index = MYSQL_RESULT($result,$i,"lock_index");
	$thisLock_space = MYSQL_RESULT($result,$i,"lock_space");
	$thisLock_page = MYSQL_RESULT($result,$i,"lock_page");
	$thisLock_rec = MYSQL_RESULT($result,$i,"lock_rec");
	$thisLock_data = MYSQL_RESULT($result,$i,"lock_data");
if ($thisLock_idFromForm == $thisLock_id)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisLock_idField" value="<? echo $thisLock_id; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisLock_idField" value="<? echo $thisLock_id; ?>"></TD>
		<TD><input type"text" name="thisLock_trx_idField" value="<? echo $thisLock_trx_id; ?>"></TD>
		<TD><input type"text" name="thisLock_modeField" value="<? echo $thisLock_mode; ?>"></TD>
		<TD><input type"text" name="thisLock_typeField" value="<? echo $thisLock_type; ?>"></TD>
		<TD><input type"text" name="thisLock_tableField" value="<? echo $thisLock_table; ?>"></TD>
		<TD><input type"text" name="thisLock_indexField" value="<? echo $thisLock_index; ?>"></TD>
		<TD><input type"text" name="thisLock_spaceField" value="<? echo $thisLock_space; ?>"></TD>
		<TD><input type"text" name="thisLock_pageField" value="<? echo $thisLock_page; ?>"></TD>
		<TD><input type"text" name="thisLock_recField" value="<? echo $thisLock_rec; ?>"></TD>
		<TD><input type"text" name="thisLock_dataField" value="<? echo $thisLock_data; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisLock_id; ?></TD>
		<TD><? echo $thisLock_trx_id; ?></TD>
		<TD><? echo $thisLock_mode; ?></TD>
		<TD><? echo $thisLock_type; ?></TD>
		<TD><? echo $thisLock_table; ?></TD>
		<TD><? echo $thisLock_index; ?></TD>
		<TD><? echo $thisLock_space; ?></TD>
		<TD><? echo $thisLock_page; ?></TD>
		<TD><? echo $thisLock_rec; ?></TD>
		<TD><? echo $thisLock_data; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisLock_idField=<? echo $thisLock_id; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisLock_idField=<? echo $thisLock_id; ?>">Delete</a></TD>
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