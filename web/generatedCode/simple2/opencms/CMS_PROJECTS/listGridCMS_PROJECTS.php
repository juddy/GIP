<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisPROJECT_IDFromForm = $_REQUEST['thisPROJECT_IDField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisPROJECT_ID = addslashes($_REQUEST['thisPROJECT_IDField']);
	$thisPROJECT_NAME = addslashes($_REQUEST['thisPROJECT_NAMEField']);
	$thisPROJECT_DESCRIPTION = addslashes($_REQUEST['thisPROJECT_DESCRIPTIONField']);
	$thisPROJECT_FLAGS = addslashes($_REQUEST['thisPROJECT_FLAGSField']);
	$thisPROJECT_TYPE = addslashes($_REQUEST['thisPROJECT_TYPEField']);
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisGROUP_ID = addslashes($_REQUEST['thisGROUP_IDField']);
	$thisMANAGERGROUP_ID = addslashes($_REQUEST['thisMANAGERGROUP_IDField']);
	$thisDATE_CREATED = addslashes($_REQUEST['thisDATE_CREATEDField']);
	$thisPROJECT_OU = addslashes($_REQUEST['thisPROJECT_OUField']);

	$sqlUpdate = "UPDATE CMS_PROJECTS SET PROJECT_ID = '$thisPROJECT_ID' , PROJECT_NAME = '$thisPROJECT_NAME' , PROJECT_DESCRIPTION = '$thisPROJECT_DESCRIPTION' , PROJECT_FLAGS = '$thisPROJECT_FLAGS' , PROJECT_TYPE = '$thisPROJECT_TYPE' , USER_ID = '$thisUSER_ID' , GROUP_ID = '$thisGROUP_ID' , MANAGERGROUP_ID = '$thisMANAGERGROUP_ID' , DATE_CREATED = '$thisDATE_CREATED' , PROJECT_OU = '$thisPROJECT_OU'  WHERE PROJECT_ID = '$thisPROJECT_ID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisPROJECT_IDFromForm." has been Updated<br></b>";
	$thisPROJECT_IDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisPROJECT_ID = addslashes($_REQUEST['thisPROJECT_IDField']);
	$thisPROJECT_NAME = addslashes($_REQUEST['thisPROJECT_NAMEField']);
	$thisPROJECT_DESCRIPTION = addslashes($_REQUEST['thisPROJECT_DESCRIPTIONField']);
	$thisPROJECT_FLAGS = addslashes($_REQUEST['thisPROJECT_FLAGSField']);
	$thisPROJECT_TYPE = addslashes($_REQUEST['thisPROJECT_TYPEField']);
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisGROUP_ID = addslashes($_REQUEST['thisGROUP_IDField']);
	$thisMANAGERGROUP_ID = addslashes($_REQUEST['thisMANAGERGROUP_IDField']);
	$thisDATE_CREATED = addslashes($_REQUEST['thisDATE_CREATEDField']);
	$thisPROJECT_OU = addslashes($_REQUEST['thisPROJECT_OUField']);

	$sqlInsert = "INSERT INTO CMS_PROJECTS (PROJECT_ID , PROJECT_NAME , PROJECT_DESCRIPTION , PROJECT_FLAGS , PROJECT_TYPE , USER_ID , GROUP_ID , MANAGERGROUP_ID , DATE_CREATED , PROJECT_OU ) VALUES ('$thisPROJECT_ID' , '$thisPROJECT_NAME' , '$thisPROJECT_DESCRIPTION' , '$thisPROJECT_FLAGS' , '$thisPROJECT_TYPE' , '$thisUSER_ID' , '$thisGROUP_ID' , '$thisMANAGERGROUP_ID' , '$thisDATE_CREATED' , '$thisPROJECT_OU' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisPROJECT_IDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisPROJECT_ID = addslashes($_REQUEST['thisPROJECT_IDField']);
	$thisPROJECT_NAME = addslashes($_REQUEST['thisPROJECT_NAMEField']);
	$thisPROJECT_DESCRIPTION = addslashes($_REQUEST['thisPROJECT_DESCRIPTIONField']);
	$thisPROJECT_FLAGS = addslashes($_REQUEST['thisPROJECT_FLAGSField']);
	$thisPROJECT_TYPE = addslashes($_REQUEST['thisPROJECT_TYPEField']);
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisGROUP_ID = addslashes($_REQUEST['thisGROUP_IDField']);
	$thisMANAGERGROUP_ID = addslashes($_REQUEST['thisMANAGERGROUP_IDField']);
	$thisDATE_CREATED = addslashes($_REQUEST['thisDATE_CREATEDField']);
	$thisPROJECT_OU = addslashes($_REQUEST['thisPROJECT_OUField']);

	$sqlDelete = "DELETE FROM CMS_PROJECTS WHERE PROJECT_ID = '$thisPROJECT_ID'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisPROJECT_IDFromForm." has been Deleted<br></b>";
	$thisPROJECT_IDFromForm = "";
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


$sql = "SELECT   * FROM CMS_PROJECTS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROJECT_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROJECT_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROJECT_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROJECT_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROJECT_DESCRIPTION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROJECT_DESCRIPTION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROJECT_FLAGS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROJECT_FLAGS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROJECT_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROJECT_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=GROUP_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>GROUP_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=MANAGERGROUP_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>MANAGERGROUP_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATE_CREATED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATE_CREATED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROJECT_OU&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROJECT_OU</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisPROJECT_IDField" value="<? echo $thisPROJECT_ID; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisPROJECT_IDField" value=""></TD>
		<TD><input type"text" name="thisPROJECT_NAMEField" value=""></TD>
		<TD><input type"text" name="thisPROJECT_DESCRIPTIONField" value=""></TD>
		<TD><input type"text" name="thisPROJECT_FLAGSField" value=""></TD>
		<TD><input type"text" name="thisPROJECT_TYPEField" value=""></TD>
		<TD><input type"text" name="thisUSER_IDField" value=""></TD>
		<TD><input type"text" name="thisGROUP_IDField" value=""></TD>
		<TD><input type"text" name="thisMANAGERGROUP_IDField" value=""></TD>
		<TD><input type"text" name="thisDATE_CREATEDField" value=""></TD>
		<TD><input type"text" name="thisPROJECT_OUField" value=""></TD>
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

	$thisPROJECT_ID = MYSQL_RESULT($result,$i,"PROJECT_ID");
	$thisPROJECT_NAME = MYSQL_RESULT($result,$i,"PROJECT_NAME");
	$thisPROJECT_DESCRIPTION = MYSQL_RESULT($result,$i,"PROJECT_DESCRIPTION");
	$thisPROJECT_FLAGS = MYSQL_RESULT($result,$i,"PROJECT_FLAGS");
	$thisPROJECT_TYPE = MYSQL_RESULT($result,$i,"PROJECT_TYPE");
	$thisUSER_ID = MYSQL_RESULT($result,$i,"USER_ID");
	$thisGROUP_ID = MYSQL_RESULT($result,$i,"GROUP_ID");
	$thisMANAGERGROUP_ID = MYSQL_RESULT($result,$i,"MANAGERGROUP_ID");
	$thisDATE_CREATED = MYSQL_RESULT($result,$i,"DATE_CREATED");
	$thisPROJECT_OU = MYSQL_RESULT($result,$i,"PROJECT_OU");
if ($thisPROJECT_IDFromForm == $thisPROJECT_ID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisPROJECT_IDField" value="<? echo $thisPROJECT_ID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisPROJECT_IDField" value="<? echo $thisPROJECT_ID; ?>"></TD>
		<TD><input type"text" name="thisPROJECT_NAMEField" value="<? echo $thisPROJECT_NAME; ?>"></TD>
		<TD><input type"text" name="thisPROJECT_DESCRIPTIONField" value="<? echo $thisPROJECT_DESCRIPTION; ?>"></TD>
		<TD><input type"text" name="thisPROJECT_FLAGSField" value="<? echo $thisPROJECT_FLAGS; ?>"></TD>
		<TD><input type"text" name="thisPROJECT_TYPEField" value="<? echo $thisPROJECT_TYPE; ?>"></TD>
		<TD><input type"text" name="thisUSER_IDField" value="<? echo $thisUSER_ID; ?>"></TD>
		<TD><input type"text" name="thisGROUP_IDField" value="<? echo $thisGROUP_ID; ?>"></TD>
		<TD><input type"text" name="thisMANAGERGROUP_IDField" value="<? echo $thisMANAGERGROUP_ID; ?>"></TD>
		<TD><input type"text" name="thisDATE_CREATEDField" value="<? echo $thisDATE_CREATED; ?>"></TD>
		<TD><input type"text" name="thisPROJECT_OUField" value="<? echo $thisPROJECT_OU; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisPROJECT_ID; ?></TD>
		<TD><? echo $thisPROJECT_NAME; ?></TD>
		<TD><? echo $thisPROJECT_DESCRIPTION; ?></TD>
		<TD><? echo $thisPROJECT_FLAGS; ?></TD>
		<TD><? echo $thisPROJECT_TYPE; ?></TD>
		<TD><? echo $thisUSER_ID; ?></TD>
		<TD><? echo $thisGROUP_ID; ?></TD>
		<TD><? echo $thisMANAGERGROUP_ID; ?></TD>
		<TD><? echo $thisDATE_CREATED; ?></TD>
		<TD><? echo $thisPROJECT_OU; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisPROJECT_IDField=<? echo $thisPROJECT_ID; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisPROJECT_IDField=<? echo $thisPROJECT_ID; ?>">Delete</a></TD>
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