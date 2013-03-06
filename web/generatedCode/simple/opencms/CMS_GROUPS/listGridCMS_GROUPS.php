<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisGROUP_IDFromForm = $_REQUEST['thisGROUP_IDField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisGROUP_ID = addslashes($_REQUEST['thisGROUP_IDField']);
	$thisPARENT_GROUP_ID = addslashes($_REQUEST['thisPARENT_GROUP_IDField']);
	$thisGROUP_NAME = addslashes($_REQUEST['thisGROUP_NAMEField']);
	$thisGROUP_DESCRIPTION = addslashes($_REQUEST['thisGROUP_DESCRIPTIONField']);
	$thisGROUP_FLAGS = addslashes($_REQUEST['thisGROUP_FLAGSField']);
	$thisGROUP_OU = addslashes($_REQUEST['thisGROUP_OUField']);

	$sqlUpdate = "UPDATE CMS_GROUPS SET GROUP_ID = '$thisGROUP_ID' , PARENT_GROUP_ID = '$thisPARENT_GROUP_ID' , GROUP_NAME = '$thisGROUP_NAME' , GROUP_DESCRIPTION = '$thisGROUP_DESCRIPTION' , GROUP_FLAGS = '$thisGROUP_FLAGS' , GROUP_OU = '$thisGROUP_OU'  WHERE GROUP_ID = '$thisGROUP_ID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisGROUP_IDFromForm." has been Updated<br></b>";
	$thisGROUP_IDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisGROUP_ID = addslashes($_REQUEST['thisGROUP_IDField']);
	$thisPARENT_GROUP_ID = addslashes($_REQUEST['thisPARENT_GROUP_IDField']);
	$thisGROUP_NAME = addslashes($_REQUEST['thisGROUP_NAMEField']);
	$thisGROUP_DESCRIPTION = addslashes($_REQUEST['thisGROUP_DESCRIPTIONField']);
	$thisGROUP_FLAGS = addslashes($_REQUEST['thisGROUP_FLAGSField']);
	$thisGROUP_OU = addslashes($_REQUEST['thisGROUP_OUField']);

	$sqlInsert = "INSERT INTO CMS_GROUPS (GROUP_ID , PARENT_GROUP_ID , GROUP_NAME , GROUP_DESCRIPTION , GROUP_FLAGS , GROUP_OU ) VALUES ('$thisGROUP_ID' , '$thisPARENT_GROUP_ID' , '$thisGROUP_NAME' , '$thisGROUP_DESCRIPTION' , '$thisGROUP_FLAGS' , '$thisGROUP_OU' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisGROUP_IDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisGROUP_ID = addslashes($_REQUEST['thisGROUP_IDField']);
	$thisPARENT_GROUP_ID = addslashes($_REQUEST['thisPARENT_GROUP_IDField']);
	$thisGROUP_NAME = addslashes($_REQUEST['thisGROUP_NAMEField']);
	$thisGROUP_DESCRIPTION = addslashes($_REQUEST['thisGROUP_DESCRIPTIONField']);
	$thisGROUP_FLAGS = addslashes($_REQUEST['thisGROUP_FLAGSField']);
	$thisGROUP_OU = addslashes($_REQUEST['thisGROUP_OUField']);

	$sqlDelete = "DELETE FROM CMS_GROUPS WHERE GROUP_ID = '$thisGROUP_ID'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisGROUP_IDFromForm." has been Deleted<br></b>";
	$thisGROUP_IDFromForm = "";
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


$sql = "SELECT   * FROM CMS_GROUPS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=GROUP_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>GROUP_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PARENT_GROUP_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PARENT_GROUP_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=GROUP_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>GROUP_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=GROUP_DESCRIPTION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>GROUP_DESCRIPTION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=GROUP_FLAGS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>GROUP_FLAGS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=GROUP_OU&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>GROUP_OU</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisGROUP_IDField" value="<? echo $thisGROUP_ID; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisGROUP_IDField" value=""></TD>
		<TD><input type"text" name="thisPARENT_GROUP_IDField" value=""></TD>
		<TD><input type"text" name="thisGROUP_NAMEField" value=""></TD>
		<TD><input type"text" name="thisGROUP_DESCRIPTIONField" value=""></TD>
		<TD><input type"text" name="thisGROUP_FLAGSField" value=""></TD>
		<TD><input type"text" name="thisGROUP_OUField" value=""></TD>
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

	$thisGROUP_ID = MYSQL_RESULT($result,$i,"GROUP_ID");
	$thisPARENT_GROUP_ID = MYSQL_RESULT($result,$i,"PARENT_GROUP_ID");
	$thisGROUP_NAME = MYSQL_RESULT($result,$i,"GROUP_NAME");
	$thisGROUP_DESCRIPTION = MYSQL_RESULT($result,$i,"GROUP_DESCRIPTION");
	$thisGROUP_FLAGS = MYSQL_RESULT($result,$i,"GROUP_FLAGS");
	$thisGROUP_OU = MYSQL_RESULT($result,$i,"GROUP_OU");
if ($thisGROUP_IDFromForm == $thisGROUP_ID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisGROUP_IDField" value="<? echo $thisGROUP_ID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisGROUP_IDField" value="<? echo $thisGROUP_ID; ?>"></TD>
		<TD><input type"text" name="thisPARENT_GROUP_IDField" value="<? echo $thisPARENT_GROUP_ID; ?>"></TD>
		<TD><input type"text" name="thisGROUP_NAMEField" value="<? echo $thisGROUP_NAME; ?>"></TD>
		<TD><input type"text" name="thisGROUP_DESCRIPTIONField" value="<? echo $thisGROUP_DESCRIPTION; ?>"></TD>
		<TD><input type"text" name="thisGROUP_FLAGSField" value="<? echo $thisGROUP_FLAGS; ?>"></TD>
		<TD><input type"text" name="thisGROUP_OUField" value="<? echo $thisGROUP_OU; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisGROUP_ID; ?></TD>
		<TD><? echo $thisPARENT_GROUP_ID; ?></TD>
		<TD><? echo $thisGROUP_NAME; ?></TD>
		<TD><? echo $thisGROUP_DESCRIPTION; ?></TD>
		<TD><? echo $thisGROUP_FLAGS; ?></TD>
		<TD><? echo $thisGROUP_OU; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisGROUP_IDField=<? echo $thisGROUP_ID; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisGROUP_IDField=<? echo $thisGROUP_ID; ?>">Delete</a></TD>
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