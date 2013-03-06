<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisPUBLISH_TAGFromForm = $_REQUEST['thisPUBLISH_TAGField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisPUBLISH_TAG = addslashes($_REQUEST['thisPUBLISH_TAGField']);
	$thisVERSION = addslashes($_REQUEST['thisVERSIONField']);
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisPARENT_ID = addslashes($_REQUEST['thisPARENT_IDField']);
	$thisRESOURCE_PATH = addslashes($_REQUEST['thisRESOURCE_PATHField']);
	$thisSTRUCTURE_STATE = addslashes($_REQUEST['thisSTRUCTURE_STATEField']);
	$thisDATE_RELEASED = addslashes($_REQUEST['thisDATE_RELEASEDField']);
	$thisDATE_EXPIRED = addslashes($_REQUEST['thisDATE_EXPIREDField']);
	$thisSTRUCTURE_VERSION = addslashes($_REQUEST['thisSTRUCTURE_VERSIONField']);

	$sqlUpdate = "UPDATE CMS_HISTORY_STRUCTURE SET PUBLISH_TAG = '$thisPUBLISH_TAG' , VERSION = '$thisVERSION' , STRUCTURE_ID = '$thisSTRUCTURE_ID' , RESOURCE_ID = '$thisRESOURCE_ID' , PARENT_ID = '$thisPARENT_ID' , RESOURCE_PATH = '$thisRESOURCE_PATH' , STRUCTURE_STATE = '$thisSTRUCTURE_STATE' , DATE_RELEASED = '$thisDATE_RELEASED' , DATE_EXPIRED = '$thisDATE_EXPIRED' , STRUCTURE_VERSION = '$thisSTRUCTURE_VERSION'  WHERE PUBLISH_TAG = '$thisPUBLISH_TAG'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisPUBLISH_TAGFromForm." has been Updated<br></b>";
	$thisPUBLISH_TAGFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisPUBLISH_TAG = addslashes($_REQUEST['thisPUBLISH_TAGField']);
	$thisVERSION = addslashes($_REQUEST['thisVERSIONField']);
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisPARENT_ID = addslashes($_REQUEST['thisPARENT_IDField']);
	$thisRESOURCE_PATH = addslashes($_REQUEST['thisRESOURCE_PATHField']);
	$thisSTRUCTURE_STATE = addslashes($_REQUEST['thisSTRUCTURE_STATEField']);
	$thisDATE_RELEASED = addslashes($_REQUEST['thisDATE_RELEASEDField']);
	$thisDATE_EXPIRED = addslashes($_REQUEST['thisDATE_EXPIREDField']);
	$thisSTRUCTURE_VERSION = addslashes($_REQUEST['thisSTRUCTURE_VERSIONField']);

	$sqlInsert = "INSERT INTO CMS_HISTORY_STRUCTURE (PUBLISH_TAG , VERSION , STRUCTURE_ID , RESOURCE_ID , PARENT_ID , RESOURCE_PATH , STRUCTURE_STATE , DATE_RELEASED , DATE_EXPIRED , STRUCTURE_VERSION ) VALUES ('$thisPUBLISH_TAG' , '$thisVERSION' , '$thisSTRUCTURE_ID' , '$thisRESOURCE_ID' , '$thisPARENT_ID' , '$thisRESOURCE_PATH' , '$thisSTRUCTURE_STATE' , '$thisDATE_RELEASED' , '$thisDATE_EXPIRED' , '$thisSTRUCTURE_VERSION' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisPUBLISH_TAGFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisPUBLISH_TAG = addslashes($_REQUEST['thisPUBLISH_TAGField']);
	$thisVERSION = addslashes($_REQUEST['thisVERSIONField']);
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisPARENT_ID = addslashes($_REQUEST['thisPARENT_IDField']);
	$thisRESOURCE_PATH = addslashes($_REQUEST['thisRESOURCE_PATHField']);
	$thisSTRUCTURE_STATE = addslashes($_REQUEST['thisSTRUCTURE_STATEField']);
	$thisDATE_RELEASED = addslashes($_REQUEST['thisDATE_RELEASEDField']);
	$thisDATE_EXPIRED = addslashes($_REQUEST['thisDATE_EXPIREDField']);
	$thisSTRUCTURE_VERSION = addslashes($_REQUEST['thisSTRUCTURE_VERSIONField']);

	$sqlDelete = "DELETE FROM CMS_HISTORY_STRUCTURE WHERE PUBLISH_TAG = '$thisPUBLISH_TAG'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisPUBLISH_TAGFromForm." has been Deleted<br></b>";
	$thisPUBLISH_TAGFromForm = "";
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


$sql = "SELECT   * FROM CMS_HISTORY_STRUCTURE".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=PUBLISH_TAG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PUBLISH_TAG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=VERSION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>VERSION</B>
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
<input type="hidden" name="thisPUBLISH_TAGField" value="<? echo $thisPUBLISH_TAG; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisPUBLISH_TAGField" value=""></TD>
		<TD><input type"text" name="thisVERSIONField" value=""></TD>
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

	$thisPUBLISH_TAG = MYSQL_RESULT($result,$i,"PUBLISH_TAG");
	$thisVERSION = MYSQL_RESULT($result,$i,"VERSION");
	$thisSTRUCTURE_ID = MYSQL_RESULT($result,$i,"STRUCTURE_ID");
	$thisRESOURCE_ID = MYSQL_RESULT($result,$i,"RESOURCE_ID");
	$thisPARENT_ID = MYSQL_RESULT($result,$i,"PARENT_ID");
	$thisRESOURCE_PATH = MYSQL_RESULT($result,$i,"RESOURCE_PATH");
	$thisSTRUCTURE_STATE = MYSQL_RESULT($result,$i,"STRUCTURE_STATE");
	$thisDATE_RELEASED = MYSQL_RESULT($result,$i,"DATE_RELEASED");
	$thisDATE_EXPIRED = MYSQL_RESULT($result,$i,"DATE_EXPIRED");
	$thisSTRUCTURE_VERSION = MYSQL_RESULT($result,$i,"STRUCTURE_VERSION");
if ($thisPUBLISH_TAGFromForm == $thisPUBLISH_TAG)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisPUBLISH_TAGField" value="<? echo $thisPUBLISH_TAG; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisPUBLISH_TAGField" value="<? echo $thisPUBLISH_TAG; ?>"></TD>
		<TD><input type"text" name="thisVERSIONField" value="<? echo $thisVERSION; ?>"></TD>
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
		<TD><? echo $thisPUBLISH_TAG; ?></TD>
		<TD><? echo $thisVERSION; ?></TD>
		<TD><? echo $thisSTRUCTURE_ID; ?></TD>
		<TD><? echo $thisRESOURCE_ID; ?></TD>
		<TD><? echo $thisPARENT_ID; ?></TD>
		<TD><? echo $thisRESOURCE_PATH; ?></TD>
		<TD><? echo $thisSTRUCTURE_STATE; ?></TD>
		<TD><? echo $thisDATE_RELEASED; ?></TD>
		<TD><? echo $thisDATE_EXPIRED; ?></TD>
		<TD><? echo $thisSTRUCTURE_VERSION; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisPUBLISH_TAGField=<? echo $thisPUBLISH_TAG; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisPUBLISH_TAGField=<? echo $thisPUBLISH_TAG; ?>">Delete</a></TD>
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