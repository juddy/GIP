<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisUSER_IDFromForm = $_REQUEST['thisUSER_IDField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisDATA_KEY = addslashes($_REQUEST['thisDATA_KEYField']);
	$thisDATA_VALUE = addslashes($_REQUEST['thisDATA_VALUEField']);
	$thisDATA_TYPE = addslashes($_REQUEST['thisDATA_TYPEField']);

	$sqlUpdate = "UPDATE CMS_USERDATA SET USER_ID = '$thisUSER_ID' , DATA_KEY = '$thisDATA_KEY' , DATA_VALUE = '$thisDATA_VALUE' , DATA_TYPE = '$thisDATA_TYPE'  WHERE USER_ID = '$thisUSER_ID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisUSER_IDFromForm." has been Updated<br></b>";
	$thisUSER_IDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisDATA_KEY = addslashes($_REQUEST['thisDATA_KEYField']);
	$thisDATA_VALUE = addslashes($_REQUEST['thisDATA_VALUEField']);
	$thisDATA_TYPE = addslashes($_REQUEST['thisDATA_TYPEField']);

	$sqlInsert = "INSERT INTO CMS_USERDATA (USER_ID , DATA_KEY , DATA_VALUE , DATA_TYPE ) VALUES ('$thisUSER_ID' , '$thisDATA_KEY' , '$thisDATA_VALUE' , '$thisDATA_TYPE' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisUSER_IDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisDATA_KEY = addslashes($_REQUEST['thisDATA_KEYField']);
	$thisDATA_VALUE = addslashes($_REQUEST['thisDATA_VALUEField']);
	$thisDATA_TYPE = addslashes($_REQUEST['thisDATA_TYPEField']);

	$sqlDelete = "DELETE FROM CMS_USERDATA WHERE USER_ID = '$thisUSER_ID'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisUSER_IDFromForm." has been Deleted<br></b>";
	$thisUSER_IDFromForm = "";
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


$sql = "SELECT   * FROM CMS_USERDATA".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATA_KEY&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATA_KEY</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATA_VALUE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATA_VALUE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATA_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATA_TYPE</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisUSER_IDField" value="<? echo $thisUSER_ID; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisUSER_IDField" value=""></TD>
		<TD><input type"text" name="thisDATA_KEYField" value=""></TD>
		<TD><input type"text" name="thisDATA_VALUEField" value=""></TD>
		<TD><input type"text" name="thisDATA_TYPEField" value=""></TD>
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

	$thisUSER_ID = MYSQL_RESULT($result,$i,"USER_ID");
	$thisDATA_KEY = MYSQL_RESULT($result,$i,"DATA_KEY");
	$thisDATA_VALUE = MYSQL_RESULT($result,$i,"DATA_VALUE");
	$thisDATA_TYPE = MYSQL_RESULT($result,$i,"DATA_TYPE");
if ($thisUSER_IDFromForm == $thisUSER_ID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisUSER_IDField" value="<? echo $thisUSER_ID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisUSER_IDField" value="<? echo $thisUSER_ID; ?>"></TD>
		<TD><input type"text" name="thisDATA_KEYField" value="<? echo $thisDATA_KEY; ?>"></TD>
		<TD><input type"text" name="thisDATA_VALUEField" value="<? echo $thisDATA_VALUE; ?>"></TD>
		<TD><input type"text" name="thisDATA_TYPEField" value="<? echo $thisDATA_TYPE; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisUSER_ID; ?></TD>
		<TD><? echo $thisDATA_KEY; ?></TD>
		<TD><? echo $thisDATA_VALUE; ?></TD>
		<TD><? echo $thisDATA_TYPE; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisUSER_IDField=<? echo $thisUSER_ID; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisUSER_IDField=<? echo $thisUSER_ID; ?>">Delete</a></TD>
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