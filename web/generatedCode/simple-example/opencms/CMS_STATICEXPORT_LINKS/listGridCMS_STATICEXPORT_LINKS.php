<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisLINK_IDFromForm = $_REQUEST['thisLINK_IDField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisLINK_ID = addslashes($_REQUEST['thisLINK_IDField']);
	$thisLINK_RFS_PATH = addslashes($_REQUEST['thisLINK_RFS_PATHField']);
	$thisLINK_TYPE = addslashes($_REQUEST['thisLINK_TYPEField']);
	$thisLINK_PARAMETER = addslashes($_REQUEST['thisLINK_PARAMETERField']);
	$thisLINK_TIMESTAMP = addslashes($_REQUEST['thisLINK_TIMESTAMPField']);

	$sqlUpdate = "UPDATE CMS_STATICEXPORT_LINKS SET LINK_ID = '$thisLINK_ID' , LINK_RFS_PATH = '$thisLINK_RFS_PATH' , LINK_TYPE = '$thisLINK_TYPE' , LINK_PARAMETER = '$thisLINK_PARAMETER' , LINK_TIMESTAMP = '$thisLINK_TIMESTAMP'  WHERE LINK_ID = '$thisLINK_ID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisLINK_IDFromForm." has been Updated<br></b>";
	$thisLINK_IDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisLINK_ID = addslashes($_REQUEST['thisLINK_IDField']);
	$thisLINK_RFS_PATH = addslashes($_REQUEST['thisLINK_RFS_PATHField']);
	$thisLINK_TYPE = addslashes($_REQUEST['thisLINK_TYPEField']);
	$thisLINK_PARAMETER = addslashes($_REQUEST['thisLINK_PARAMETERField']);
	$thisLINK_TIMESTAMP = addslashes($_REQUEST['thisLINK_TIMESTAMPField']);

	$sqlInsert = "INSERT INTO CMS_STATICEXPORT_LINKS (LINK_ID , LINK_RFS_PATH , LINK_TYPE , LINK_PARAMETER , LINK_TIMESTAMP ) VALUES ('$thisLINK_ID' , '$thisLINK_RFS_PATH' , '$thisLINK_TYPE' , '$thisLINK_PARAMETER' , '$thisLINK_TIMESTAMP' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisLINK_IDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisLINK_ID = addslashes($_REQUEST['thisLINK_IDField']);
	$thisLINK_RFS_PATH = addslashes($_REQUEST['thisLINK_RFS_PATHField']);
	$thisLINK_TYPE = addslashes($_REQUEST['thisLINK_TYPEField']);
	$thisLINK_PARAMETER = addslashes($_REQUEST['thisLINK_PARAMETERField']);
	$thisLINK_TIMESTAMP = addslashes($_REQUEST['thisLINK_TIMESTAMPField']);

	$sqlDelete = "DELETE FROM CMS_STATICEXPORT_LINKS WHERE LINK_ID = '$thisLINK_ID'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisLINK_IDFromForm." has been Deleted<br></b>";
	$thisLINK_IDFromForm = "";
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


$sql = "SELECT   * FROM CMS_STATICEXPORT_LINKS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=LINK_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LINK_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LINK_RFS_PATH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LINK_RFS_PATH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LINK_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LINK_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LINK_PARAMETER&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LINK_PARAMETER</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LINK_TIMESTAMP&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LINK_TIMESTAMP</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisLINK_IDField" value="<? echo $thisLINK_ID; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisLINK_IDField" value=""></TD>
		<TD><input type"text" name="thisLINK_RFS_PATHField" value=""></TD>
		<TD><input type"text" name="thisLINK_TYPEField" value=""></TD>
		<TD><input type"text" name="thisLINK_PARAMETERField" value=""></TD>
		<TD><input type"text" name="thisLINK_TIMESTAMPField" value=""></TD>
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

	$thisLINK_ID = MYSQL_RESULT($result,$i,"LINK_ID");
	$thisLINK_RFS_PATH = MYSQL_RESULT($result,$i,"LINK_RFS_PATH");
	$thisLINK_TYPE = MYSQL_RESULT($result,$i,"LINK_TYPE");
	$thisLINK_PARAMETER = MYSQL_RESULT($result,$i,"LINK_PARAMETER");
	$thisLINK_TIMESTAMP = MYSQL_RESULT($result,$i,"LINK_TIMESTAMP");
if ($thisLINK_IDFromForm == $thisLINK_ID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisLINK_IDField" value="<? echo $thisLINK_ID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisLINK_IDField" value="<? echo $thisLINK_ID; ?>"></TD>
		<TD><input type"text" name="thisLINK_RFS_PATHField" value="<? echo $thisLINK_RFS_PATH; ?>"></TD>
		<TD><input type"text" name="thisLINK_TYPEField" value="<? echo $thisLINK_TYPE; ?>"></TD>
		<TD><input type"text" name="thisLINK_PARAMETERField" value="<? echo $thisLINK_PARAMETER; ?>"></TD>
		<TD><input type"text" name="thisLINK_TIMESTAMPField" value="<? echo $thisLINK_TIMESTAMP; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisLINK_ID; ?></TD>
		<TD><? echo $thisLINK_RFS_PATH; ?></TD>
		<TD><? echo $thisLINK_TYPE; ?></TD>
		<TD><? echo $thisLINK_PARAMETER; ?></TD>
		<TD><? echo $thisLINK_TIMESTAMP; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisLINK_IDField=<? echo $thisLINK_ID; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisLINK_IDField=<? echo $thisLINK_ID; ?>">Delete</a></TD>
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