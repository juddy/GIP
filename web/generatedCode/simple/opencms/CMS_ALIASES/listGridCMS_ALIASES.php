<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisPathFromForm = $_REQUEST['thisPathField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisPath = addslashes($_REQUEST['thisPathField']);
	$thisSite_root = addslashes($_REQUEST['thisSite_rootField']);
	$thisAlias_mode = addslashes($_REQUEST['thisAlias_modeField']);
	$thisStructure_id = addslashes($_REQUEST['thisStructure_idField']);

	$sqlUpdate = "UPDATE CMS_ALIASES SET path = '$thisPath' , site_root = '$thisSite_root' , alias_mode = '$thisAlias_mode' , structure_id = '$thisStructure_id'  WHERE path = '$thisPath'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisPathFromForm." has been Updated<br></b>";
	$thisPathFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisPath = addslashes($_REQUEST['thisPathField']);
	$thisSite_root = addslashes($_REQUEST['thisSite_rootField']);
	$thisAlias_mode = addslashes($_REQUEST['thisAlias_modeField']);
	$thisStructure_id = addslashes($_REQUEST['thisStructure_idField']);

	$sqlInsert = "INSERT INTO CMS_ALIASES (path , site_root , alias_mode , structure_id ) VALUES ('$thisPath' , '$thisSite_root' , '$thisAlias_mode' , '$thisStructure_id' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisPathFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisPath = addslashes($_REQUEST['thisPathField']);
	$thisSite_root = addslashes($_REQUEST['thisSite_rootField']);
	$thisAlias_mode = addslashes($_REQUEST['thisAlias_modeField']);
	$thisStructure_id = addslashes($_REQUEST['thisStructure_idField']);

	$sqlDelete = "DELETE FROM CMS_ALIASES WHERE path = '$thisPath'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisPathFromForm." has been Deleted<br></b>";
	$thisPathFromForm = "";
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


$sql = "SELECT   * FROM CMS_ALIASES".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=path&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Path</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=site_root&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Site_root</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=alias_mode&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Alias_mode</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=structure_id&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Structure_id</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisPathField" value="<? echo $thisPath; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisPathField" value=""></TD>
		<TD><input type"text" name="thisSite_rootField" value=""></TD>
		<TD><input type"text" name="thisAlias_modeField" value=""></TD>
		<TD><input type"text" name="thisStructure_idField" value=""></TD>
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

	$thisPath = MYSQL_RESULT($result,$i,"path");
	$thisSite_root = MYSQL_RESULT($result,$i,"site_root");
	$thisAlias_mode = MYSQL_RESULT($result,$i,"alias_mode");
	$thisStructure_id = MYSQL_RESULT($result,$i,"structure_id");
if ($thisPathFromForm == $thisPath)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisPathField" value="<? echo $thisPath; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisPathField" value="<? echo $thisPath; ?>"></TD>
		<TD><input type"text" name="thisSite_rootField" value="<? echo $thisSite_root; ?>"></TD>
		<TD><input type"text" name="thisAlias_modeField" value="<? echo $thisAlias_mode; ?>"></TD>
		<TD><input type"text" name="thisStructure_idField" value="<? echo $thisStructure_id; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisPath; ?></TD>
		<TD><? echo $thisSite_root; ?></TD>
		<TD><? echo $thisAlias_mode; ?></TD>
		<TD><? echo $thisStructure_id; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisPathField=<? echo $thisPath; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisPathField=<? echo $thisPath; ?>">Delete</a></TD>
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