<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisHISTORY_IDFromForm = $_REQUEST['thisHISTORY_IDField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisHISTORY_ID = addslashes($_REQUEST['thisHISTORY_IDField']);
	$thisPUBLISH_TAG = addslashes($_REQUEST['thisPUBLISH_TAGField']);
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisRESOURCE_PATH = addslashes($_REQUEST['thisRESOURCE_PATHField']);
	$thisRESOURCE_STATE = addslashes($_REQUEST['thisRESOURCE_STATEField']);
	$thisRESOURCE_TYPE = addslashes($_REQUEST['thisRESOURCE_TYPEField']);
	$thisSIBLING_COUNT = addslashes($_REQUEST['thisSIBLING_COUNTField']);

	$sqlUpdate = "UPDATE CMS_PUBLISH_HISTORY SET HISTORY_ID = '$thisHISTORY_ID' , PUBLISH_TAG = '$thisPUBLISH_TAG' , STRUCTURE_ID = '$thisSTRUCTURE_ID' , RESOURCE_ID = '$thisRESOURCE_ID' , RESOURCE_PATH = '$thisRESOURCE_PATH' , RESOURCE_STATE = '$thisRESOURCE_STATE' , RESOURCE_TYPE = '$thisRESOURCE_TYPE' , SIBLING_COUNT = '$thisSIBLING_COUNT'  WHERE HISTORY_ID = '$thisHISTORY_ID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisHISTORY_IDFromForm." has been Updated<br></b>";
	$thisHISTORY_IDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisHISTORY_ID = addslashes($_REQUEST['thisHISTORY_IDField']);
	$thisPUBLISH_TAG = addslashes($_REQUEST['thisPUBLISH_TAGField']);
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisRESOURCE_PATH = addslashes($_REQUEST['thisRESOURCE_PATHField']);
	$thisRESOURCE_STATE = addslashes($_REQUEST['thisRESOURCE_STATEField']);
	$thisRESOURCE_TYPE = addslashes($_REQUEST['thisRESOURCE_TYPEField']);
	$thisSIBLING_COUNT = addslashes($_REQUEST['thisSIBLING_COUNTField']);

	$sqlInsert = "INSERT INTO CMS_PUBLISH_HISTORY (HISTORY_ID , PUBLISH_TAG , STRUCTURE_ID , RESOURCE_ID , RESOURCE_PATH , RESOURCE_STATE , RESOURCE_TYPE , SIBLING_COUNT ) VALUES ('$thisHISTORY_ID' , '$thisPUBLISH_TAG' , '$thisSTRUCTURE_ID' , '$thisRESOURCE_ID' , '$thisRESOURCE_PATH' , '$thisRESOURCE_STATE' , '$thisRESOURCE_TYPE' , '$thisSIBLING_COUNT' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisHISTORY_IDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisHISTORY_ID = addslashes($_REQUEST['thisHISTORY_IDField']);
	$thisPUBLISH_TAG = addslashes($_REQUEST['thisPUBLISH_TAGField']);
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisRESOURCE_PATH = addslashes($_REQUEST['thisRESOURCE_PATHField']);
	$thisRESOURCE_STATE = addslashes($_REQUEST['thisRESOURCE_STATEField']);
	$thisRESOURCE_TYPE = addslashes($_REQUEST['thisRESOURCE_TYPEField']);
	$thisSIBLING_COUNT = addslashes($_REQUEST['thisSIBLING_COUNTField']);

	$sqlDelete = "DELETE FROM CMS_PUBLISH_HISTORY WHERE HISTORY_ID = '$thisHISTORY_ID'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisHISTORY_IDFromForm." has been Deleted<br></b>";
	$thisHISTORY_IDFromForm = "";
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


$sql = "SELECT   * FROM CMS_PUBLISH_HISTORY".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=HISTORY_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>HISTORY_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PUBLISH_TAG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PUBLISH_TAG</B>
			</a>
</TD>
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=RESOURCE_PATH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RESOURCE_PATH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RESOURCE_STATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RESOURCE_STATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RESOURCE_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RESOURCE_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SIBLING_COUNT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SIBLING_COUNT</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisHISTORY_IDField" value="<? echo $thisHISTORY_ID; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisHISTORY_IDField" value=""></TD>
		<TD><input type"text" name="thisPUBLISH_TAGField" value=""></TD>
		<TD><input type"text" name="thisSTRUCTURE_IDField" value=""></TD>
		<TD><input type"text" name="thisRESOURCE_IDField" value=""></TD>
		<TD><input type"text" name="thisRESOURCE_PATHField" value=""></TD>
		<TD><input type"text" name="thisRESOURCE_STATEField" value=""></TD>
		<TD><input type"text" name="thisRESOURCE_TYPEField" value=""></TD>
		<TD><input type"text" name="thisSIBLING_COUNTField" value=""></TD>
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

	$thisHISTORY_ID = MYSQL_RESULT($result,$i,"HISTORY_ID");
	$thisPUBLISH_TAG = MYSQL_RESULT($result,$i,"PUBLISH_TAG");
	$thisSTRUCTURE_ID = MYSQL_RESULT($result,$i,"STRUCTURE_ID");
	$thisRESOURCE_ID = MYSQL_RESULT($result,$i,"RESOURCE_ID");
	$thisRESOURCE_PATH = MYSQL_RESULT($result,$i,"RESOURCE_PATH");
	$thisRESOURCE_STATE = MYSQL_RESULT($result,$i,"RESOURCE_STATE");
	$thisRESOURCE_TYPE = MYSQL_RESULT($result,$i,"RESOURCE_TYPE");
	$thisSIBLING_COUNT = MYSQL_RESULT($result,$i,"SIBLING_COUNT");
if ($thisHISTORY_IDFromForm == $thisHISTORY_ID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisHISTORY_IDField" value="<? echo $thisHISTORY_ID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisHISTORY_IDField" value="<? echo $thisHISTORY_ID; ?>"></TD>
		<TD><input type"text" name="thisPUBLISH_TAGField" value="<? echo $thisPUBLISH_TAG; ?>"></TD>
		<TD><input type"text" name="thisSTRUCTURE_IDField" value="<? echo $thisSTRUCTURE_ID; ?>"></TD>
		<TD><input type"text" name="thisRESOURCE_IDField" value="<? echo $thisRESOURCE_ID; ?>"></TD>
		<TD><input type"text" name="thisRESOURCE_PATHField" value="<? echo $thisRESOURCE_PATH; ?>"></TD>
		<TD><input type"text" name="thisRESOURCE_STATEField" value="<? echo $thisRESOURCE_STATE; ?>"></TD>
		<TD><input type"text" name="thisRESOURCE_TYPEField" value="<? echo $thisRESOURCE_TYPE; ?>"></TD>
		<TD><input type"text" name="thisSIBLING_COUNTField" value="<? echo $thisSIBLING_COUNT; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisHISTORY_ID; ?></TD>
		<TD><? echo $thisPUBLISH_TAG; ?></TD>
		<TD><? echo $thisSTRUCTURE_ID; ?></TD>
		<TD><? echo $thisRESOURCE_ID; ?></TD>
		<TD><? echo $thisRESOURCE_PATH; ?></TD>
		<TD><? echo $thisRESOURCE_STATE; ?></TD>
		<TD><? echo $thisRESOURCE_TYPE; ?></TD>
		<TD><? echo $thisSIBLING_COUNT; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisHISTORY_IDField=<? echo $thisHISTORY_ID; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisHISTORY_IDField=<? echo $thisHISTORY_ID; ?>">Delete</a></TD>
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