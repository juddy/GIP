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
	$thisRESOURCE_TYPE = addslashes($_REQUEST['thisRESOURCE_TYPEField']);
	$thisRESOURCE_FLAGS = addslashes($_REQUEST['thisRESOURCE_FLAGSField']);
	$thisRESOURCE_STATE = addslashes($_REQUEST['thisRESOURCE_STATEField']);
	$thisRESOURCE_SIZE = addslashes($_REQUEST['thisRESOURCE_SIZEField']);
	$thisDATE_CONTENT = addslashes($_REQUEST['thisDATE_CONTENTField']);
	$thisSIBLING_COUNT = addslashes($_REQUEST['thisSIBLING_COUNTField']);
	$thisDATE_CREATED = addslashes($_REQUEST['thisDATE_CREATEDField']);
	$thisDATE_LASTMODIFIED = addslashes($_REQUEST['thisDATE_LASTMODIFIEDField']);
	$thisUSER_CREATED = addslashes($_REQUEST['thisUSER_CREATEDField']);
	$thisUSER_LASTMODIFIED = addslashes($_REQUEST['thisUSER_LASTMODIFIEDField']);
	$thisPROJECT_LASTMODIFIED = addslashes($_REQUEST['thisPROJECT_LASTMODIFIEDField']);
	$thisPUBLISH_TAG = addslashes($_REQUEST['thisPUBLISH_TAGField']);
	$thisRESOURCE_VERSION = addslashes($_REQUEST['thisRESOURCE_VERSIONField']);

	$sqlUpdate = "UPDATE CMS_HISTORY_RESOURCES SET RESOURCE_ID = '$thisRESOURCE_ID' , RESOURCE_TYPE = '$thisRESOURCE_TYPE' , RESOURCE_FLAGS = '$thisRESOURCE_FLAGS' , RESOURCE_STATE = '$thisRESOURCE_STATE' , RESOURCE_SIZE = '$thisRESOURCE_SIZE' , DATE_CONTENT = '$thisDATE_CONTENT' , SIBLING_COUNT = '$thisSIBLING_COUNT' , DATE_CREATED = '$thisDATE_CREATED' , DATE_LASTMODIFIED = '$thisDATE_LASTMODIFIED' , USER_CREATED = '$thisUSER_CREATED' , USER_LASTMODIFIED = '$thisUSER_LASTMODIFIED' , PROJECT_LASTMODIFIED = '$thisPROJECT_LASTMODIFIED' , PUBLISH_TAG = '$thisPUBLISH_TAG' , RESOURCE_VERSION = '$thisRESOURCE_VERSION'  WHERE RESOURCE_ID = '$thisRESOURCE_ID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisRESOURCE_IDFromForm." has been Updated<br></b>";
	$thisRESOURCE_IDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisRESOURCE_TYPE = addslashes($_REQUEST['thisRESOURCE_TYPEField']);
	$thisRESOURCE_FLAGS = addslashes($_REQUEST['thisRESOURCE_FLAGSField']);
	$thisRESOURCE_STATE = addslashes($_REQUEST['thisRESOURCE_STATEField']);
	$thisRESOURCE_SIZE = addslashes($_REQUEST['thisRESOURCE_SIZEField']);
	$thisDATE_CONTENT = addslashes($_REQUEST['thisDATE_CONTENTField']);
	$thisSIBLING_COUNT = addslashes($_REQUEST['thisSIBLING_COUNTField']);
	$thisDATE_CREATED = addslashes($_REQUEST['thisDATE_CREATEDField']);
	$thisDATE_LASTMODIFIED = addslashes($_REQUEST['thisDATE_LASTMODIFIEDField']);
	$thisUSER_CREATED = addslashes($_REQUEST['thisUSER_CREATEDField']);
	$thisUSER_LASTMODIFIED = addslashes($_REQUEST['thisUSER_LASTMODIFIEDField']);
	$thisPROJECT_LASTMODIFIED = addslashes($_REQUEST['thisPROJECT_LASTMODIFIEDField']);
	$thisPUBLISH_TAG = addslashes($_REQUEST['thisPUBLISH_TAGField']);
	$thisRESOURCE_VERSION = addslashes($_REQUEST['thisRESOURCE_VERSIONField']);

	$sqlInsert = "INSERT INTO CMS_HISTORY_RESOURCES (RESOURCE_ID , RESOURCE_TYPE , RESOURCE_FLAGS , RESOURCE_STATE , RESOURCE_SIZE , DATE_CONTENT , SIBLING_COUNT , DATE_CREATED , DATE_LASTMODIFIED , USER_CREATED , USER_LASTMODIFIED , PROJECT_LASTMODIFIED , PUBLISH_TAG , RESOURCE_VERSION ) VALUES ('$thisRESOURCE_ID' , '$thisRESOURCE_TYPE' , '$thisRESOURCE_FLAGS' , '$thisRESOURCE_STATE' , '$thisRESOURCE_SIZE' , '$thisDATE_CONTENT' , '$thisSIBLING_COUNT' , '$thisDATE_CREATED' , '$thisDATE_LASTMODIFIED' , '$thisUSER_CREATED' , '$thisUSER_LASTMODIFIED' , '$thisPROJECT_LASTMODIFIED' , '$thisPUBLISH_TAG' , '$thisRESOURCE_VERSION' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisRESOURCE_IDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisRESOURCE_TYPE = addslashes($_REQUEST['thisRESOURCE_TYPEField']);
	$thisRESOURCE_FLAGS = addslashes($_REQUEST['thisRESOURCE_FLAGSField']);
	$thisRESOURCE_STATE = addslashes($_REQUEST['thisRESOURCE_STATEField']);
	$thisRESOURCE_SIZE = addslashes($_REQUEST['thisRESOURCE_SIZEField']);
	$thisDATE_CONTENT = addslashes($_REQUEST['thisDATE_CONTENTField']);
	$thisSIBLING_COUNT = addslashes($_REQUEST['thisSIBLING_COUNTField']);
	$thisDATE_CREATED = addslashes($_REQUEST['thisDATE_CREATEDField']);
	$thisDATE_LASTMODIFIED = addslashes($_REQUEST['thisDATE_LASTMODIFIEDField']);
	$thisUSER_CREATED = addslashes($_REQUEST['thisUSER_CREATEDField']);
	$thisUSER_LASTMODIFIED = addslashes($_REQUEST['thisUSER_LASTMODIFIEDField']);
	$thisPROJECT_LASTMODIFIED = addslashes($_REQUEST['thisPROJECT_LASTMODIFIEDField']);
	$thisPUBLISH_TAG = addslashes($_REQUEST['thisPUBLISH_TAGField']);
	$thisRESOURCE_VERSION = addslashes($_REQUEST['thisRESOURCE_VERSIONField']);

	$sqlDelete = "DELETE FROM CMS_HISTORY_RESOURCES WHERE RESOURCE_ID = '$thisRESOURCE_ID'";
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


$sql = "SELECT   * FROM CMS_HISTORY_RESOURCES".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=RESOURCE_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RESOURCE_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RESOURCE_FLAGS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RESOURCE_FLAGS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RESOURCE_STATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RESOURCE_STATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RESOURCE_SIZE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RESOURCE_SIZE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATE_CONTENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATE_CONTENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SIBLING_COUNT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SIBLING_COUNT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATE_CREATED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATE_CREATED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATE_LASTMODIFIED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATE_LASTMODIFIED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_CREATED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_CREATED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_LASTMODIFIED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_LASTMODIFIED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROJECT_LASTMODIFIED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROJECT_LASTMODIFIED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PUBLISH_TAG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PUBLISH_TAG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RESOURCE_VERSION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RESOURCE_VERSION</B>
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
		<TD><input type"text" name="thisRESOURCE_TYPEField" value=""></TD>
		<TD><input type"text" name="thisRESOURCE_FLAGSField" value=""></TD>
		<TD><input type"text" name="thisRESOURCE_STATEField" value=""></TD>
		<TD><input type"text" name="thisRESOURCE_SIZEField" value=""></TD>
		<TD><input type"text" name="thisDATE_CONTENTField" value=""></TD>
		<TD><input type"text" name="thisSIBLING_COUNTField" value=""></TD>
		<TD><input type"text" name="thisDATE_CREATEDField" value=""></TD>
		<TD><input type"text" name="thisDATE_LASTMODIFIEDField" value=""></TD>
		<TD><input type"text" name="thisUSER_CREATEDField" value=""></TD>
		<TD><input type"text" name="thisUSER_LASTMODIFIEDField" value=""></TD>
		<TD><input type"text" name="thisPROJECT_LASTMODIFIEDField" value=""></TD>
		<TD><input type"text" name="thisPUBLISH_TAGField" value=""></TD>
		<TD><input type"text" name="thisRESOURCE_VERSIONField" value=""></TD>
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
	$thisRESOURCE_TYPE = MYSQL_RESULT($result,$i,"RESOURCE_TYPE");
	$thisRESOURCE_FLAGS = MYSQL_RESULT($result,$i,"RESOURCE_FLAGS");
	$thisRESOURCE_STATE = MYSQL_RESULT($result,$i,"RESOURCE_STATE");
	$thisRESOURCE_SIZE = MYSQL_RESULT($result,$i,"RESOURCE_SIZE");
	$thisDATE_CONTENT = MYSQL_RESULT($result,$i,"DATE_CONTENT");
	$thisSIBLING_COUNT = MYSQL_RESULT($result,$i,"SIBLING_COUNT");
	$thisDATE_CREATED = MYSQL_RESULT($result,$i,"DATE_CREATED");
	$thisDATE_LASTMODIFIED = MYSQL_RESULT($result,$i,"DATE_LASTMODIFIED");
	$thisUSER_CREATED = MYSQL_RESULT($result,$i,"USER_CREATED");
	$thisUSER_LASTMODIFIED = MYSQL_RESULT($result,$i,"USER_LASTMODIFIED");
	$thisPROJECT_LASTMODIFIED = MYSQL_RESULT($result,$i,"PROJECT_LASTMODIFIED");
	$thisPUBLISH_TAG = MYSQL_RESULT($result,$i,"PUBLISH_TAG");
	$thisRESOURCE_VERSION = MYSQL_RESULT($result,$i,"RESOURCE_VERSION");
if ($thisRESOURCE_IDFromForm == $thisRESOURCE_ID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisRESOURCE_IDField" value="<? echo $thisRESOURCE_ID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisRESOURCE_IDField" value="<? echo $thisRESOURCE_ID; ?>"></TD>
		<TD><input type"text" name="thisRESOURCE_TYPEField" value="<? echo $thisRESOURCE_TYPE; ?>"></TD>
		<TD><input type"text" name="thisRESOURCE_FLAGSField" value="<? echo $thisRESOURCE_FLAGS; ?>"></TD>
		<TD><input type"text" name="thisRESOURCE_STATEField" value="<? echo $thisRESOURCE_STATE; ?>"></TD>
		<TD><input type"text" name="thisRESOURCE_SIZEField" value="<? echo $thisRESOURCE_SIZE; ?>"></TD>
		<TD><input type"text" name="thisDATE_CONTENTField" value="<? echo $thisDATE_CONTENT; ?>"></TD>
		<TD><input type"text" name="thisSIBLING_COUNTField" value="<? echo $thisSIBLING_COUNT; ?>"></TD>
		<TD><input type"text" name="thisDATE_CREATEDField" value="<? echo $thisDATE_CREATED; ?>"></TD>
		<TD><input type"text" name="thisDATE_LASTMODIFIEDField" value="<? echo $thisDATE_LASTMODIFIED; ?>"></TD>
		<TD><input type"text" name="thisUSER_CREATEDField" value="<? echo $thisUSER_CREATED; ?>"></TD>
		<TD><input type"text" name="thisUSER_LASTMODIFIEDField" value="<? echo $thisUSER_LASTMODIFIED; ?>"></TD>
		<TD><input type"text" name="thisPROJECT_LASTMODIFIEDField" value="<? echo $thisPROJECT_LASTMODIFIED; ?>"></TD>
		<TD><input type"text" name="thisPUBLISH_TAGField" value="<? echo $thisPUBLISH_TAG; ?>"></TD>
		<TD><input type"text" name="thisRESOURCE_VERSIONField" value="<? echo $thisRESOURCE_VERSION; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisRESOURCE_ID; ?></TD>
		<TD><? echo $thisRESOURCE_TYPE; ?></TD>
		<TD><? echo $thisRESOURCE_FLAGS; ?></TD>
		<TD><? echo $thisRESOURCE_STATE; ?></TD>
		<TD><? echo $thisRESOURCE_SIZE; ?></TD>
		<TD><? echo $thisDATE_CONTENT; ?></TD>
		<TD><? echo $thisSIBLING_COUNT; ?></TD>
		<TD><? echo $thisDATE_CREATED; ?></TD>
		<TD><? echo $thisDATE_LASTMODIFIED; ?></TD>
		<TD><? echo $thisUSER_CREATED; ?></TD>
		<TD><? echo $thisUSER_LASTMODIFIED; ?></TD>
		<TD><? echo $thisPROJECT_LASTMODIFIED; ?></TD>
		<TD><? echo $thisPUBLISH_TAG; ?></TD>
		<TD><? echo $thisRESOURCE_VERSION; ?></TD>
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