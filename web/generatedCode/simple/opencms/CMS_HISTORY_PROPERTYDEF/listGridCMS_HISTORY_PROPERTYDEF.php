<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisPROPERTYDEF_IDFromForm = $_REQUEST['thisPROPERTYDEF_IDField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisPROPERTYDEF_ID = addslashes($_REQUEST['thisPROPERTYDEF_IDField']);
	$thisPROPERTYDEF_NAME = addslashes($_REQUEST['thisPROPERTYDEF_NAMEField']);
	$thisPROPERTYDEF_TYPE = addslashes($_REQUEST['thisPROPERTYDEF_TYPEField']);

	$sqlUpdate = "UPDATE CMS_HISTORY_PROPERTYDEF SET PROPERTYDEF_ID = '$thisPROPERTYDEF_ID' , PROPERTYDEF_NAME = '$thisPROPERTYDEF_NAME' , PROPERTYDEF_TYPE = '$thisPROPERTYDEF_TYPE'  WHERE PROPERTYDEF_ID = '$thisPROPERTYDEF_ID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisPROPERTYDEF_IDFromForm." has been Updated<br></b>";
	$thisPROPERTYDEF_IDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisPROPERTYDEF_ID = addslashes($_REQUEST['thisPROPERTYDEF_IDField']);
	$thisPROPERTYDEF_NAME = addslashes($_REQUEST['thisPROPERTYDEF_NAMEField']);
	$thisPROPERTYDEF_TYPE = addslashes($_REQUEST['thisPROPERTYDEF_TYPEField']);

	$sqlInsert = "INSERT INTO CMS_HISTORY_PROPERTYDEF (PROPERTYDEF_ID , PROPERTYDEF_NAME , PROPERTYDEF_TYPE ) VALUES ('$thisPROPERTYDEF_ID' , '$thisPROPERTYDEF_NAME' , '$thisPROPERTYDEF_TYPE' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisPROPERTYDEF_IDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisPROPERTYDEF_ID = addslashes($_REQUEST['thisPROPERTYDEF_IDField']);
	$thisPROPERTYDEF_NAME = addslashes($_REQUEST['thisPROPERTYDEF_NAMEField']);
	$thisPROPERTYDEF_TYPE = addslashes($_REQUEST['thisPROPERTYDEF_TYPEField']);

	$sqlDelete = "DELETE FROM CMS_HISTORY_PROPERTYDEF WHERE PROPERTYDEF_ID = '$thisPROPERTYDEF_ID'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisPROPERTYDEF_IDFromForm." has been Deleted<br></b>";
	$thisPROPERTYDEF_IDFromForm = "";
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


$sql = "SELECT   * FROM CMS_HISTORY_PROPERTYDEF".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROPERTYDEF_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROPERTYDEF_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROPERTYDEF_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROPERTYDEF_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROPERTYDEF_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROPERTYDEF_TYPE</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisPROPERTYDEF_IDField" value="<? echo $thisPROPERTYDEF_ID; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisPROPERTYDEF_IDField" value=""></TD>
		<TD><input type"text" name="thisPROPERTYDEF_NAMEField" value=""></TD>
		<TD><input type"text" name="thisPROPERTYDEF_TYPEField" value=""></TD>
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

	$thisPROPERTYDEF_ID = MYSQL_RESULT($result,$i,"PROPERTYDEF_ID");
	$thisPROPERTYDEF_NAME = MYSQL_RESULT($result,$i,"PROPERTYDEF_NAME");
	$thisPROPERTYDEF_TYPE = MYSQL_RESULT($result,$i,"PROPERTYDEF_TYPE");
if ($thisPROPERTYDEF_IDFromForm == $thisPROPERTYDEF_ID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisPROPERTYDEF_IDField" value="<? echo $thisPROPERTYDEF_ID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisPROPERTYDEF_IDField" value="<? echo $thisPROPERTYDEF_ID; ?>"></TD>
		<TD><input type"text" name="thisPROPERTYDEF_NAMEField" value="<? echo $thisPROPERTYDEF_NAME; ?>"></TD>
		<TD><input type"text" name="thisPROPERTYDEF_TYPEField" value="<? echo $thisPROPERTYDEF_TYPE; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisPROPERTYDEF_ID; ?></TD>
		<TD><? echo $thisPROPERTYDEF_NAME; ?></TD>
		<TD><? echo $thisPROPERTYDEF_TYPE; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisPROPERTYDEF_IDField=<? echo $thisPROPERTYDEF_ID; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisPROPERTYDEF_IDField=<? echo $thisPROPERTYDEF_ID; ?>">Delete</a></TD>
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