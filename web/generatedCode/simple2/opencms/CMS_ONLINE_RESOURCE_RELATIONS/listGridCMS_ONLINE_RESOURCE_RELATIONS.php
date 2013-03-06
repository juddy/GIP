<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisRELATION_SOURCE_IDFromForm = $_REQUEST['thisRELATION_SOURCE_IDField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisRELATION_SOURCE_ID = addslashes($_REQUEST['thisRELATION_SOURCE_IDField']);
	$thisRELATION_SOURCE_PATH = addslashes($_REQUEST['thisRELATION_SOURCE_PATHField']);
	$thisRELATION_TARGET_ID = addslashes($_REQUEST['thisRELATION_TARGET_IDField']);
	$thisRELATION_TARGET_PATH = addslashes($_REQUEST['thisRELATION_TARGET_PATHField']);
	$thisRELATION_TYPE = addslashes($_REQUEST['thisRELATION_TYPEField']);

	$sqlUpdate = "UPDATE CMS_ONLINE_RESOURCE_RELATIONS SET RELATION_SOURCE_ID = '$thisRELATION_SOURCE_ID' , RELATION_SOURCE_PATH = '$thisRELATION_SOURCE_PATH' , RELATION_TARGET_ID = '$thisRELATION_TARGET_ID' , RELATION_TARGET_PATH = '$thisRELATION_TARGET_PATH' , RELATION_TYPE = '$thisRELATION_TYPE'  WHERE RELATION_SOURCE_ID = '$thisRELATION_SOURCE_ID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisRELATION_SOURCE_IDFromForm." has been Updated<br></b>";
	$thisRELATION_SOURCE_IDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisRELATION_SOURCE_ID = addslashes($_REQUEST['thisRELATION_SOURCE_IDField']);
	$thisRELATION_SOURCE_PATH = addslashes($_REQUEST['thisRELATION_SOURCE_PATHField']);
	$thisRELATION_TARGET_ID = addslashes($_REQUEST['thisRELATION_TARGET_IDField']);
	$thisRELATION_TARGET_PATH = addslashes($_REQUEST['thisRELATION_TARGET_PATHField']);
	$thisRELATION_TYPE = addslashes($_REQUEST['thisRELATION_TYPEField']);

	$sqlInsert = "INSERT INTO CMS_ONLINE_RESOURCE_RELATIONS (RELATION_SOURCE_ID , RELATION_SOURCE_PATH , RELATION_TARGET_ID , RELATION_TARGET_PATH , RELATION_TYPE ) VALUES ('$thisRELATION_SOURCE_ID' , '$thisRELATION_SOURCE_PATH' , '$thisRELATION_TARGET_ID' , '$thisRELATION_TARGET_PATH' , '$thisRELATION_TYPE' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisRELATION_SOURCE_IDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisRELATION_SOURCE_ID = addslashes($_REQUEST['thisRELATION_SOURCE_IDField']);
	$thisRELATION_SOURCE_PATH = addslashes($_REQUEST['thisRELATION_SOURCE_PATHField']);
	$thisRELATION_TARGET_ID = addslashes($_REQUEST['thisRELATION_TARGET_IDField']);
	$thisRELATION_TARGET_PATH = addslashes($_REQUEST['thisRELATION_TARGET_PATHField']);
	$thisRELATION_TYPE = addslashes($_REQUEST['thisRELATION_TYPEField']);

	$sqlDelete = "DELETE FROM CMS_ONLINE_RESOURCE_RELATIONS WHERE RELATION_SOURCE_ID = '$thisRELATION_SOURCE_ID'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisRELATION_SOURCE_IDFromForm." has been Deleted<br></b>";
	$thisRELATION_SOURCE_IDFromForm = "";
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


$sql = "SELECT   * FROM CMS_ONLINE_RESOURCE_RELATIONS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=RELATION_SOURCE_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RELATION_SOURCE_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RELATION_SOURCE_PATH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RELATION_SOURCE_PATH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RELATION_TARGET_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RELATION_TARGET_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RELATION_TARGET_PATH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RELATION_TARGET_PATH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RELATION_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RELATION_TYPE</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisRELATION_SOURCE_IDField" value="<? echo $thisRELATION_SOURCE_ID; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisRELATION_SOURCE_IDField" value=""></TD>
		<TD><input type"text" name="thisRELATION_SOURCE_PATHField" value=""></TD>
		<TD><input type"text" name="thisRELATION_TARGET_IDField" value=""></TD>
		<TD><input type"text" name="thisRELATION_TARGET_PATHField" value=""></TD>
		<TD><input type"text" name="thisRELATION_TYPEField" value=""></TD>
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

	$thisRELATION_SOURCE_ID = MYSQL_RESULT($result,$i,"RELATION_SOURCE_ID");
	$thisRELATION_SOURCE_PATH = MYSQL_RESULT($result,$i,"RELATION_SOURCE_PATH");
	$thisRELATION_TARGET_ID = MYSQL_RESULT($result,$i,"RELATION_TARGET_ID");
	$thisRELATION_TARGET_PATH = MYSQL_RESULT($result,$i,"RELATION_TARGET_PATH");
	$thisRELATION_TYPE = MYSQL_RESULT($result,$i,"RELATION_TYPE");
if ($thisRELATION_SOURCE_IDFromForm == $thisRELATION_SOURCE_ID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisRELATION_SOURCE_IDField" value="<? echo $thisRELATION_SOURCE_ID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisRELATION_SOURCE_IDField" value="<? echo $thisRELATION_SOURCE_ID; ?>"></TD>
		<TD><input type"text" name="thisRELATION_SOURCE_PATHField" value="<? echo $thisRELATION_SOURCE_PATH; ?>"></TD>
		<TD><input type"text" name="thisRELATION_TARGET_IDField" value="<? echo $thisRELATION_TARGET_ID; ?>"></TD>
		<TD><input type"text" name="thisRELATION_TARGET_PATHField" value="<? echo $thisRELATION_TARGET_PATH; ?>"></TD>
		<TD><input type"text" name="thisRELATION_TYPEField" value="<? echo $thisRELATION_TYPE; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisRELATION_SOURCE_ID; ?></TD>
		<TD><? echo $thisRELATION_SOURCE_PATH; ?></TD>
		<TD><? echo $thisRELATION_TARGET_ID; ?></TD>
		<TD><? echo $thisRELATION_TARGET_PATH; ?></TD>
		<TD><? echo $thisRELATION_TYPE; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisRELATION_SOURCE_IDField=<? echo $thisRELATION_SOURCE_ID; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisRELATION_SOURCE_IDField=<? echo $thisRELATION_SOURCE_ID; ?>">Delete</a></TD>
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