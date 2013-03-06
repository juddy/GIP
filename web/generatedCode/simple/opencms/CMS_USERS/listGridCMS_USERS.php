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
	$thisUSER_NAME = addslashes($_REQUEST['thisUSER_NAMEField']);
	$thisUSER_PASSWORD = addslashes($_REQUEST['thisUSER_PASSWORDField']);
	$thisUSER_FIRSTNAME = addslashes($_REQUEST['thisUSER_FIRSTNAMEField']);
	$thisUSER_LASTNAME = addslashes($_REQUEST['thisUSER_LASTNAMEField']);
	$thisUSER_EMAIL = addslashes($_REQUEST['thisUSER_EMAILField']);
	$thisUSER_LASTLOGIN = addslashes($_REQUEST['thisUSER_LASTLOGINField']);
	$thisUSER_FLAGS = addslashes($_REQUEST['thisUSER_FLAGSField']);
	$thisUSER_OU = addslashes($_REQUEST['thisUSER_OUField']);
	$thisUSER_DATECREATED = addslashes($_REQUEST['thisUSER_DATECREATEDField']);

	$sqlUpdate = "UPDATE CMS_USERS SET USER_ID = '$thisUSER_ID' , USER_NAME = '$thisUSER_NAME' , USER_PASSWORD = '$thisUSER_PASSWORD' , USER_FIRSTNAME = '$thisUSER_FIRSTNAME' , USER_LASTNAME = '$thisUSER_LASTNAME' , USER_EMAIL = '$thisUSER_EMAIL' , USER_LASTLOGIN = '$thisUSER_LASTLOGIN' , USER_FLAGS = '$thisUSER_FLAGS' , USER_OU = '$thisUSER_OU' , USER_DATECREATED = '$thisUSER_DATECREATED'  WHERE USER_ID = '$thisUSER_ID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisUSER_IDFromForm." has been Updated<br></b>";
	$thisUSER_IDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisUSER_NAME = addslashes($_REQUEST['thisUSER_NAMEField']);
	$thisUSER_PASSWORD = addslashes($_REQUEST['thisUSER_PASSWORDField']);
	$thisUSER_FIRSTNAME = addslashes($_REQUEST['thisUSER_FIRSTNAMEField']);
	$thisUSER_LASTNAME = addslashes($_REQUEST['thisUSER_LASTNAMEField']);
	$thisUSER_EMAIL = addslashes($_REQUEST['thisUSER_EMAILField']);
	$thisUSER_LASTLOGIN = addslashes($_REQUEST['thisUSER_LASTLOGINField']);
	$thisUSER_FLAGS = addslashes($_REQUEST['thisUSER_FLAGSField']);
	$thisUSER_OU = addslashes($_REQUEST['thisUSER_OUField']);
	$thisUSER_DATECREATED = addslashes($_REQUEST['thisUSER_DATECREATEDField']);

	$sqlInsert = "INSERT INTO CMS_USERS (USER_ID , USER_NAME , USER_PASSWORD , USER_FIRSTNAME , USER_LASTNAME , USER_EMAIL , USER_LASTLOGIN , USER_FLAGS , USER_OU , USER_DATECREATED ) VALUES ('$thisUSER_ID' , '$thisUSER_NAME' , '$thisUSER_PASSWORD' , '$thisUSER_FIRSTNAME' , '$thisUSER_LASTNAME' , '$thisUSER_EMAIL' , '$thisUSER_LASTLOGIN' , '$thisUSER_FLAGS' , '$thisUSER_OU' , '$thisUSER_DATECREATED' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisUSER_IDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisUSER_NAME = addslashes($_REQUEST['thisUSER_NAMEField']);
	$thisUSER_PASSWORD = addslashes($_REQUEST['thisUSER_PASSWORDField']);
	$thisUSER_FIRSTNAME = addslashes($_REQUEST['thisUSER_FIRSTNAMEField']);
	$thisUSER_LASTNAME = addslashes($_REQUEST['thisUSER_LASTNAMEField']);
	$thisUSER_EMAIL = addslashes($_REQUEST['thisUSER_EMAILField']);
	$thisUSER_LASTLOGIN = addslashes($_REQUEST['thisUSER_LASTLOGINField']);
	$thisUSER_FLAGS = addslashes($_REQUEST['thisUSER_FLAGSField']);
	$thisUSER_OU = addslashes($_REQUEST['thisUSER_OUField']);
	$thisUSER_DATECREATED = addslashes($_REQUEST['thisUSER_DATECREATEDField']);

	$sqlDelete = "DELETE FROM CMS_USERS WHERE USER_ID = '$thisUSER_ID'";
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


$sql = "SELECT   * FROM CMS_USERS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_PASSWORD&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_PASSWORD</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_FIRSTNAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_FIRSTNAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_LASTNAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_LASTNAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_EMAIL&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_EMAIL</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_LASTLOGIN&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_LASTLOGIN</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_FLAGS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_FLAGS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_OU&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_OU</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_DATECREATED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_DATECREATED</B>
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
		<TD><input type"text" name="thisUSER_NAMEField" value=""></TD>
		<TD><input type"text" name="thisUSER_PASSWORDField" value=""></TD>
		<TD><input type"text" name="thisUSER_FIRSTNAMEField" value=""></TD>
		<TD><input type"text" name="thisUSER_LASTNAMEField" value=""></TD>
		<TD><input type"text" name="thisUSER_EMAILField" value=""></TD>
		<TD><input type"text" name="thisUSER_LASTLOGINField" value=""></TD>
		<TD><input type"text" name="thisUSER_FLAGSField" value=""></TD>
		<TD><input type"text" name="thisUSER_OUField" value=""></TD>
		<TD><input type"text" name="thisUSER_DATECREATEDField" value=""></TD>
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
	$thisUSER_NAME = MYSQL_RESULT($result,$i,"USER_NAME");
	$thisUSER_PASSWORD = MYSQL_RESULT($result,$i,"USER_PASSWORD");
	$thisUSER_FIRSTNAME = MYSQL_RESULT($result,$i,"USER_FIRSTNAME");
	$thisUSER_LASTNAME = MYSQL_RESULT($result,$i,"USER_LASTNAME");
	$thisUSER_EMAIL = MYSQL_RESULT($result,$i,"USER_EMAIL");
	$thisUSER_LASTLOGIN = MYSQL_RESULT($result,$i,"USER_LASTLOGIN");
	$thisUSER_FLAGS = MYSQL_RESULT($result,$i,"USER_FLAGS");
	$thisUSER_OU = MYSQL_RESULT($result,$i,"USER_OU");
	$thisUSER_DATECREATED = MYSQL_RESULT($result,$i,"USER_DATECREATED");
if ($thisUSER_IDFromForm == $thisUSER_ID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisUSER_IDField" value="<? echo $thisUSER_ID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisUSER_IDField" value="<? echo $thisUSER_ID; ?>"></TD>
		<TD><input type"text" name="thisUSER_NAMEField" value="<? echo $thisUSER_NAME; ?>"></TD>
		<TD><input type"text" name="thisUSER_PASSWORDField" value="<? echo $thisUSER_PASSWORD; ?>"></TD>
		<TD><input type"text" name="thisUSER_FIRSTNAMEField" value="<? echo $thisUSER_FIRSTNAME; ?>"></TD>
		<TD><input type"text" name="thisUSER_LASTNAMEField" value="<? echo $thisUSER_LASTNAME; ?>"></TD>
		<TD><input type"text" name="thisUSER_EMAILField" value="<? echo $thisUSER_EMAIL; ?>"></TD>
		<TD><input type"text" name="thisUSER_LASTLOGINField" value="<? echo $thisUSER_LASTLOGIN; ?>"></TD>
		<TD><input type"text" name="thisUSER_FLAGSField" value="<? echo $thisUSER_FLAGS; ?>"></TD>
		<TD><input type"text" name="thisUSER_OUField" value="<? echo $thisUSER_OU; ?>"></TD>
		<TD><input type"text" name="thisUSER_DATECREATEDField" value="<? echo $thisUSER_DATECREATED; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisUSER_ID; ?></TD>
		<TD><? echo $thisUSER_NAME; ?></TD>
		<TD><? echo $thisUSER_PASSWORD; ?></TD>
		<TD><? echo $thisUSER_FIRSTNAME; ?></TD>
		<TD><? echo $thisUSER_LASTNAME; ?></TD>
		<TD><? echo $thisUSER_EMAIL; ?></TD>
		<TD><? echo $thisUSER_LASTLOGIN; ?></TD>
		<TD><? echo $thisUSER_FLAGS; ?></TD>
		<TD><? echo $thisUSER_OU; ?></TD>
		<TD><? echo $thisUSER_DATECREATED; ?></TD>
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