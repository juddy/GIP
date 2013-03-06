<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisSTRUCTURE_IDFromForm = $_REQUEST['thisSTRUCTURE_IDField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisPARENT_ID = addslashes($_REQUEST['thisPARENT_IDField']);
	$thisRESOURCE_PATH = addslashes($_REQUEST['thisRESOURCE_PATHField']);
	$thisSTRUCTURE_STATE = addslashes($_REQUEST['thisSTRUCTURE_STATEField']);
	$thisDATE_RELEASED = addslashes($_REQUEST['thisDATE_RELEASEDField']);
	$thisDATE_EXPIRED = addslashes($_REQUEST['thisDATE_EXPIREDField']);
	$thisSTRUCTURE_VERSION = addslashes($_REQUEST['thisSTRUCTURE_VERSIONField']);

	$sqlUpdate = "UPDATE CMS_ONLINE_STRUCTURE SET STRUCTURE_ID = '$thisSTRUCTURE_ID' , RESOURCE_ID = '$thisRESOURCE_ID' , PARENT_ID = '$thisPARENT_ID' , RESOURCE_PATH = '$thisRESOURCE_PATH' , STRUCTURE_STATE = '$thisSTRUCTURE_STATE' , DATE_RELEASED = '$thisDATE_RELEASED' , DATE_EXPIRED = '$thisDATE_EXPIRED' , STRUCTURE_VERSION = '$thisSTRUCTURE_VERSION'  WHERE STRUCTURE_ID = '$thisSTRUCTURE_ID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisSTRUCTURE_IDFromForm." has been Updated<br></b>";
	$thisSTRUCTURE_IDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisPARENT_ID = addslashes($_REQUEST['thisPARENT_IDField']);
	$thisRESOURCE_PATH = addslashes($_REQUEST['thisRESOURCE_PATHField']);
	$thisSTRUCTURE_STATE = addslashes($_REQUEST['thisSTRUCTURE_STATEField']);
	$thisDATE_RELEASED = addslashes($_REQUEST['thisDATE_RELEASEDField']);
	$thisDATE_EXPIRED = addslashes($_REQUEST['thisDATE_EXPIREDField']);
	$thisSTRUCTURE_VERSION = addslashes($_REQUEST['thisSTRUCTURE_VERSIONField']);

	$sqlInsert = "INSERT INTO CMS_ONLINE_STRUCTURE (STRUCTURE_ID , RESOURCE_ID , PARENT_ID , RESOURCE_PATH , STRUCTURE_STATE , DATE_RELEASED , DATE_EXPIRED , STRUCTURE_VERSION ) VALUES ('$thisSTRUCTURE_ID' , '$thisRESOURCE_ID' , '$thisPARENT_ID' , '$thisRESOURCE_PATH' , '$thisSTRUCTURE_STATE' , '$thisDATE_RELEASED' , '$thisDATE_EXPIRED' , '$thisSTRUCTURE_VERSION' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisSTRUCTURE_IDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisPARENT_ID = addslashes($_REQUEST['thisPARENT_IDField']);
	$thisRESOURCE_PATH = addslashes($_REQUEST['thisRESOURCE_PATHField']);
	$thisSTRUCTURE_STATE = addslashes($_REQUEST['thisSTRUCTURE_STATEField']);
	$thisDATE_RELEASED = addslashes($_REQUEST['thisDATE_RELEASEDField']);
	$thisDATE_EXPIRED = addslashes($_REQUEST['thisDATE_EXPIREDField']);
	$thisSTRUCTURE_VERSION = addslashes($_REQUEST['thisSTRUCTURE_VERSIONField']);

	$sqlDelete = "DELETE FROM CMS_ONLINE_STRUCTURE WHERE STRUCTURE_ID = '$thisSTRUCTURE_ID'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisSTRUCTURE_IDFromForm." has been Deleted<br></b>";
	$thisSTRUCTURE_IDFromForm = "";
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


$sql = "SELECT   * FROM CMS_ONLINE_STRUCTURE".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=STRUCTURE_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>STRUCTURE_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RESOURCE_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RESOURCE_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PARENT_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PARENT_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RESOURCE_PATH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RESOURCE_PATH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=STRUCTURE_STATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>STRUCTURE_STATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATE_RELEASED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATE_RELEASED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATE_EXPIRED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATE_EXPIRED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=STRUCTURE_VERSION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>STRUCTURE_VERSION</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisSTRUCTURE_IDField" value="<? echo $thisSTRUCTURE_ID; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisSTRUCTURE_IDField" value=""></TD>
		<TD><input type"text" name="thisRESOURCE_IDField" value=""></TD>
		<TD><input type"text" name="thisPARENT_IDField" value=""></TD>
		<TD><input type"text" name="thisRESOURCE_PATHField" value=""></TD>
		<TD><input type"text" name="thisSTRUCTURE_STATEField" value=""></TD>
		<TD><input type"text" name="thisDATE_RELEASEDField" value=""></TD>
		<TD><input type"text" name="thisDATE_EXPIREDField" value=""></TD>
		<TD><input type"text" name="thisSTRUCTURE_VERSIONField" value=""></TD>
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

	$thisSTRUCTURE_ID = MYSQL_RESULT($result,$i,"STRUCTURE_ID");
	$thisRESOURCE_ID = MYSQL_RESULT($result,$i,"RESOURCE_ID");
	$thisPARENT_ID = MYSQL_RESULT($result,$i,"PARENT_ID");
	$thisRESOURCE_PATH = MYSQL_RESULT($result,$i,"RESOURCE_PATH");
	$thisSTRUCTURE_STATE = MYSQL_RESULT($result,$i,"STRUCTURE_STATE");
	$thisDATE_RELEASED = MYSQL_RESULT($result,$i,"DATE_RELEASED");
	$thisDATE_EXPIRED = MYSQL_RESULT($result,$i,"DATE_EXPIRED");
	$thisSTRUCTURE_VERSION = MYSQL_RESULT($result,$i,"STRUCTURE_VERSION");
if ($thisSTRUCTURE_IDFromForm == $thisSTRUCTURE_ID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisSTRUCTURE_IDField" value="<? echo $thisSTRUCTURE_ID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisSTRUCTURE_IDField" value="<? echo $thisSTRUCTURE_ID; ?>"></TD>
		<TD><input type"text" name="thisRESOURCE_IDField" value="<? echo $thisRESOURCE_ID; ?>"></TD>
		<TD><input type"text" name="thisPARENT_IDField" value="<? echo $thisPARENT_ID; ?>"></TD>
		<TD><input type"text" name="thisRESOURCE_PATHField" value="<? echo $thisRESOURCE_PATH; ?>"></TD>
		<TD><input type"text" name="thisSTRUCTURE_STATEField" value="<? echo $thisSTRUCTURE_STATE; ?>"></TD>
		<TD><input type"text" name="thisDATE_RELEASEDField" value="<? echo $thisDATE_RELEASED; ?>"></TD>
		<TD><input type"text" name="thisDATE_EXPIREDField" value="<? echo $thisDATE_EXPIRED; ?>"></TD>
		<TD><input type"text" name="thisSTRUCTURE_VERSIONField" value="<? echo $thisSTRUCTURE_VERSION; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisSTRUCTURE_ID; ?></TD>
		<TD><? echo $thisRESOURCE_ID; ?></TD>
		<TD><? echo $thisPARENT_ID; ?></TD>
		<TD><? echo $thisRESOURCE_PATH; ?></TD>
		<TD><? echo $thisSTRUCTURE_STATE; ?></TD>
		<TD><? echo $thisDATE_RELEASED; ?></TD>
		<TD><? echo $thisDATE_EXPIRED; ?></TD>
		<TD><? echo $thisSTRUCTURE_VERSION; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisSTRUCTURE_IDField=<? echo $thisSTRUCTURE_ID; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisSTRUCTURE_IDField=<? echo $thisSTRUCTURE_ID; ?>">Delete</a></TD>
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