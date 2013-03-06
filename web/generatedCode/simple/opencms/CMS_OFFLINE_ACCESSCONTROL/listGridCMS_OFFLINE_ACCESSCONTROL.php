<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisRESOURCE_IDFromForm = $_REQUEST['thisRESOURCE_IDField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisPRINCIPAL_ID = addslashes($_REQUEST['thisPRINCIPAL_IDField']);
	$thisACCESS_ALLOWED = addslashes($_REQUEST['thisACCESS_ALLOWEDField']);
	$thisACCESS_DENIED = addslashes($_REQUEST['thisACCESS_DENIEDField']);
	$thisACCESS_FLAGS = addslashes($_REQUEST['thisACCESS_FLAGSField']);

	$sqlUpdate = "UPDATE CMS_OFFLINE_ACCESSCONTROL SET RESOURCE_ID = '$thisRESOURCE_ID' , PRINCIPAL_ID = '$thisPRINCIPAL_ID' , ACCESS_ALLOWED = '$thisACCESS_ALLOWED' , ACCESS_DENIED = '$thisACCESS_DENIED' , ACCESS_FLAGS = '$thisACCESS_FLAGS'  WHERE RESOURCE_ID = '$thisRESOURCE_ID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisRESOURCE_IDFromForm." has been Updated<br></b>";
	$thisRESOURCE_IDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisPRINCIPAL_ID = addslashes($_REQUEST['thisPRINCIPAL_IDField']);
	$thisACCESS_ALLOWED = addslashes($_REQUEST['thisACCESS_ALLOWEDField']);
	$thisACCESS_DENIED = addslashes($_REQUEST['thisACCESS_DENIEDField']);
	$thisACCESS_FLAGS = addslashes($_REQUEST['thisACCESS_FLAGSField']);

	$sqlInsert = "INSERT INTO CMS_OFFLINE_ACCESSCONTROL (RESOURCE_ID , PRINCIPAL_ID , ACCESS_ALLOWED , ACCESS_DENIED , ACCESS_FLAGS ) VALUES ('$thisRESOURCE_ID' , '$thisPRINCIPAL_ID' , '$thisACCESS_ALLOWED' , '$thisACCESS_DENIED' , '$thisACCESS_FLAGS' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisRESOURCE_IDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisPRINCIPAL_ID = addslashes($_REQUEST['thisPRINCIPAL_IDField']);
	$thisACCESS_ALLOWED = addslashes($_REQUEST['thisACCESS_ALLOWEDField']);
	$thisACCESS_DENIED = addslashes($_REQUEST['thisACCESS_DENIEDField']);
	$thisACCESS_FLAGS = addslashes($_REQUEST['thisACCESS_FLAGSField']);

	$sqlDelete = "DELETE FROM CMS_OFFLINE_ACCESSCONTROL WHERE RESOURCE_ID = '$thisRESOURCE_ID'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisRESOURCE_IDFromForm." has been Deleted<br></b>";
	$thisRESOURCE_IDFromForm = "";
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


$sql = "SELECT   * FROM CMS_OFFLINE_ACCESSCONTROL".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=RESOURCE_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RESOURCE_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRINCIPAL_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRINCIPAL_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACCESS_ALLOWED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACCESS_ALLOWED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACCESS_DENIED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACCESS_DENIED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACCESS_FLAGS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACCESS_FLAGS</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisRESOURCE_IDField" value="<? echo $thisRESOURCE_ID; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisRESOURCE_IDField" value=""></TD>
		<TD><input type"text" name="thisPRINCIPAL_IDField" value=""></TD>
		<TD><input type"text" name="thisACCESS_ALLOWEDField" value=""></TD>
		<TD><input type"text" name="thisACCESS_DENIEDField" value=""></TD>
		<TD><input type"text" name="thisACCESS_FLAGSField" value=""></TD>
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

	$thisRESOURCE_ID = MYSQL_RESULT($result,$i,"RESOURCE_ID");
	$thisPRINCIPAL_ID = MYSQL_RESULT($result,$i,"PRINCIPAL_ID");
	$thisACCESS_ALLOWED = MYSQL_RESULT($result,$i,"ACCESS_ALLOWED");
	$thisACCESS_DENIED = MYSQL_RESULT($result,$i,"ACCESS_DENIED");
	$thisACCESS_FLAGS = MYSQL_RESULT($result,$i,"ACCESS_FLAGS");
if ($thisRESOURCE_IDFromForm == $thisRESOURCE_ID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisRESOURCE_IDField" value="<? echo $thisRESOURCE_ID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisRESOURCE_IDField" value="<? echo $thisRESOURCE_ID; ?>"></TD>
		<TD><input type"text" name="thisPRINCIPAL_IDField" value="<? echo $thisPRINCIPAL_ID; ?>"></TD>
		<TD><input type"text" name="thisACCESS_ALLOWEDField" value="<? echo $thisACCESS_ALLOWED; ?>"></TD>
		<TD><input type"text" name="thisACCESS_DENIEDField" value="<? echo $thisACCESS_DENIED; ?>"></TD>
		<TD><input type"text" name="thisACCESS_FLAGSField" value="<? echo $thisACCESS_FLAGS; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisRESOURCE_ID; ?></TD>
		<TD><? echo $thisPRINCIPAL_ID; ?></TD>
		<TD><? echo $thisACCESS_ALLOWED; ?></TD>
		<TD><? echo $thisACCESS_DENIED; ?></TD>
		<TD><? echo $thisACCESS_FLAGS; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisRESOURCE_IDField=<? echo $thisRESOURCE_ID; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisRESOURCE_IDField=<? echo $thisRESOURCE_ID; ?>">Delete</a></TD>
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