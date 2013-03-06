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
	$thisPROJECT_ID = addslashes($_REQUEST['thisPROJECT_IDField']);
	$thisPROJECT_NAME = addslashes($_REQUEST['thisPROJECT_NAMEField']);
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisPUBLISH_LOCALE = addslashes($_REQUEST['thisPUBLISH_LOCALEField']);
	$thisPUBLISH_FLAGS = addslashes($_REQUEST['thisPUBLISH_FLAGSField']);
	$thisPUBLISH_LIST = addslashes($_REQUEST['thisPUBLISH_LISTField']);
	$thisPUBLISH_REPORT = addslashes($_REQUEST['thisPUBLISH_REPORTField']);
	$thisRESOURCE_COUNT = addslashes($_REQUEST['thisRESOURCE_COUNTField']);
	$thisENQUEUE_TIME = addslashes($_REQUEST['thisENQUEUE_TIMEField']);
	$thisSTART_TIME = addslashes($_REQUEST['thisSTART_TIMEField']);
	$thisFINISH_TIME = addslashes($_REQUEST['thisFINISH_TIMEField']);

	$sqlUpdate = "UPDATE CMS_PUBLISH_JOBS SET HISTORY_ID = '$thisHISTORY_ID' , PROJECT_ID = '$thisPROJECT_ID' , PROJECT_NAME = '$thisPROJECT_NAME' , USER_ID = '$thisUSER_ID' , PUBLISH_LOCALE = '$thisPUBLISH_LOCALE' , PUBLISH_FLAGS = '$thisPUBLISH_FLAGS' , PUBLISH_LIST = '$thisPUBLISH_LIST' , PUBLISH_REPORT = '$thisPUBLISH_REPORT' , RESOURCE_COUNT = '$thisRESOURCE_COUNT' , ENQUEUE_TIME = '$thisENQUEUE_TIME' , START_TIME = '$thisSTART_TIME' , FINISH_TIME = '$thisFINISH_TIME'  WHERE HISTORY_ID = '$thisHISTORY_ID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisHISTORY_IDFromForm." has been Updated<br></b>";
	$thisHISTORY_IDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisHISTORY_ID = addslashes($_REQUEST['thisHISTORY_IDField']);
	$thisPROJECT_ID = addslashes($_REQUEST['thisPROJECT_IDField']);
	$thisPROJECT_NAME = addslashes($_REQUEST['thisPROJECT_NAMEField']);
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisPUBLISH_LOCALE = addslashes($_REQUEST['thisPUBLISH_LOCALEField']);
	$thisPUBLISH_FLAGS = addslashes($_REQUEST['thisPUBLISH_FLAGSField']);
	$thisPUBLISH_LIST = addslashes($_REQUEST['thisPUBLISH_LISTField']);
	$thisPUBLISH_REPORT = addslashes($_REQUEST['thisPUBLISH_REPORTField']);
	$thisRESOURCE_COUNT = addslashes($_REQUEST['thisRESOURCE_COUNTField']);
	$thisENQUEUE_TIME = addslashes($_REQUEST['thisENQUEUE_TIMEField']);
	$thisSTART_TIME = addslashes($_REQUEST['thisSTART_TIMEField']);
	$thisFINISH_TIME = addslashes($_REQUEST['thisFINISH_TIMEField']);

	$sqlInsert = "INSERT INTO CMS_PUBLISH_JOBS (HISTORY_ID , PROJECT_ID , PROJECT_NAME , USER_ID , PUBLISH_LOCALE , PUBLISH_FLAGS , PUBLISH_LIST , PUBLISH_REPORT , RESOURCE_COUNT , ENQUEUE_TIME , START_TIME , FINISH_TIME ) VALUES ('$thisHISTORY_ID' , '$thisPROJECT_ID' , '$thisPROJECT_NAME' , '$thisUSER_ID' , '$thisPUBLISH_LOCALE' , '$thisPUBLISH_FLAGS' , '$thisPUBLISH_LIST' , '$thisPUBLISH_REPORT' , '$thisRESOURCE_COUNT' , '$thisENQUEUE_TIME' , '$thisSTART_TIME' , '$thisFINISH_TIME' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisHISTORY_IDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisHISTORY_ID = addslashes($_REQUEST['thisHISTORY_IDField']);
	$thisPROJECT_ID = addslashes($_REQUEST['thisPROJECT_IDField']);
	$thisPROJECT_NAME = addslashes($_REQUEST['thisPROJECT_NAMEField']);
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisPUBLISH_LOCALE = addslashes($_REQUEST['thisPUBLISH_LOCALEField']);
	$thisPUBLISH_FLAGS = addslashes($_REQUEST['thisPUBLISH_FLAGSField']);
	$thisPUBLISH_LIST = addslashes($_REQUEST['thisPUBLISH_LISTField']);
	$thisPUBLISH_REPORT = addslashes($_REQUEST['thisPUBLISH_REPORTField']);
	$thisRESOURCE_COUNT = addslashes($_REQUEST['thisRESOURCE_COUNTField']);
	$thisENQUEUE_TIME = addslashes($_REQUEST['thisENQUEUE_TIMEField']);
	$thisSTART_TIME = addslashes($_REQUEST['thisSTART_TIMEField']);
	$thisFINISH_TIME = addslashes($_REQUEST['thisFINISH_TIMEField']);

	$sqlDelete = "DELETE FROM CMS_PUBLISH_JOBS WHERE HISTORY_ID = '$thisHISTORY_ID'";
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


$sql = "SELECT   * FROM CMS_PUBLISH_JOBS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PUBLISH_LOCALE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PUBLISH_LOCALE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PUBLISH_FLAGS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PUBLISH_FLAGS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PUBLISH_LIST&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PUBLISH_LIST</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PUBLISH_REPORT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PUBLISH_REPORT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RESOURCE_COUNT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RESOURCE_COUNT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ENQUEUE_TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ENQUEUE_TIME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=START_TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>START_TIME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=FINISH_TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>FINISH_TIME</B>
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
		<TD><input type"text" name="thisPROJECT_IDField" value=""></TD>
		<TD><input type"text" name="thisPROJECT_NAMEField" value=""></TD>
		<TD><input type"text" name="thisUSER_IDField" value=""></TD>
		<TD><input type"text" name="thisPUBLISH_LOCALEField" value=""></TD>
		<TD><input type"text" name="thisPUBLISH_FLAGSField" value=""></TD>
		<TD><input type"text" name="thisPUBLISH_LISTField" value=""></TD>
		<TD><input type"text" name="thisPUBLISH_REPORTField" value=""></TD>
		<TD><input type"text" name="thisRESOURCE_COUNTField" value=""></TD>
		<TD><input type"text" name="thisENQUEUE_TIMEField" value=""></TD>
		<TD><input type"text" name="thisSTART_TIMEField" value=""></TD>
		<TD><input type"text" name="thisFINISH_TIMEField" value=""></TD>
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
	$thisPROJECT_ID = MYSQL_RESULT($result,$i,"PROJECT_ID");
	$thisPROJECT_NAME = MYSQL_RESULT($result,$i,"PROJECT_NAME");
	$thisUSER_ID = MYSQL_RESULT($result,$i,"USER_ID");
	$thisPUBLISH_LOCALE = MYSQL_RESULT($result,$i,"PUBLISH_LOCALE");
	$thisPUBLISH_FLAGS = MYSQL_RESULT($result,$i,"PUBLISH_FLAGS");
	$thisPUBLISH_LIST = MYSQL_RESULT($result,$i,"PUBLISH_LIST");
	$thisPUBLISH_REPORT = MYSQL_RESULT($result,$i,"PUBLISH_REPORT");
	$thisRESOURCE_COUNT = MYSQL_RESULT($result,$i,"RESOURCE_COUNT");
	$thisENQUEUE_TIME = MYSQL_RESULT($result,$i,"ENQUEUE_TIME");
	$thisSTART_TIME = MYSQL_RESULT($result,$i,"START_TIME");
	$thisFINISH_TIME = MYSQL_RESULT($result,$i,"FINISH_TIME");
if ($thisHISTORY_IDFromForm == $thisHISTORY_ID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisHISTORY_IDField" value="<? echo $thisHISTORY_ID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisHISTORY_IDField" value="<? echo $thisHISTORY_ID; ?>"></TD>
		<TD><input type"text" name="thisPROJECT_IDField" value="<? echo $thisPROJECT_ID; ?>"></TD>
		<TD><input type"text" name="thisPROJECT_NAMEField" value="<? echo $thisPROJECT_NAME; ?>"></TD>
		<TD><input type"text" name="thisUSER_IDField" value="<? echo $thisUSER_ID; ?>"></TD>
		<TD><input type"text" name="thisPUBLISH_LOCALEField" value="<? echo $thisPUBLISH_LOCALE; ?>"></TD>
		<TD><input type"text" name="thisPUBLISH_FLAGSField" value="<? echo $thisPUBLISH_FLAGS; ?>"></TD>
		<TD><input type"text" name="thisPUBLISH_LISTField" value="<? echo $thisPUBLISH_LIST; ?>"></TD>
		<TD><input type"text" name="thisPUBLISH_REPORTField" value="<? echo $thisPUBLISH_REPORT; ?>"></TD>
		<TD><input type"text" name="thisRESOURCE_COUNTField" value="<? echo $thisRESOURCE_COUNT; ?>"></TD>
		<TD><input type"text" name="thisENQUEUE_TIMEField" value="<? echo $thisENQUEUE_TIME; ?>"></TD>
		<TD><input type"text" name="thisSTART_TIMEField" value="<? echo $thisSTART_TIME; ?>"></TD>
		<TD><input type"text" name="thisFINISH_TIMEField" value="<? echo $thisFINISH_TIME; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisHISTORY_ID; ?></TD>
		<TD><? echo $thisPROJECT_ID; ?></TD>
		<TD><? echo $thisPROJECT_NAME; ?></TD>
		<TD><? echo $thisUSER_ID; ?></TD>
		<TD><? echo $thisPUBLISH_LOCALE; ?></TD>
		<TD><? echo $thisPUBLISH_FLAGS; ?></TD>
		<TD><? echo $thisPUBLISH_LIST; ?></TD>
		<TD><? echo $thisPUBLISH_REPORT; ?></TD>
		<TD><? echo $thisRESOURCE_COUNT; ?></TD>
		<TD><? echo $thisENQUEUE_TIME; ?></TD>
		<TD><? echo $thisSTART_TIME; ?></TD>
		<TD><? echo $thisFINISH_TIME; ?></TD>
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