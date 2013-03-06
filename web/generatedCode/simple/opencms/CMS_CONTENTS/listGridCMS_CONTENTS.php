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
	$thisFILE_CONTENT = addslashes($_REQUEST['thisFILE_CONTENTField']);
	$thisPUBLISH_TAG_FROM = addslashes($_REQUEST['thisPUBLISH_TAG_FROMField']);
	$thisPUBLISH_TAG_TO = addslashes($_REQUEST['thisPUBLISH_TAG_TOField']);
	$thisONLINE_FLAG = addslashes($_REQUEST['thisONLINE_FLAGField']);

	$sqlUpdate = "UPDATE CMS_CONTENTS SET RESOURCE_ID = '$thisRESOURCE_ID' , FILE_CONTENT = '$thisFILE_CONTENT' , PUBLISH_TAG_FROM = '$thisPUBLISH_TAG_FROM' , PUBLISH_TAG_TO = '$thisPUBLISH_TAG_TO' , ONLINE_FLAG = '$thisONLINE_FLAG'  WHERE RESOURCE_ID = '$thisRESOURCE_ID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisRESOURCE_IDFromForm." has been Updated<br></b>";
	$thisRESOURCE_IDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisFILE_CONTENT = addslashes($_REQUEST['thisFILE_CONTENTField']);
	$thisPUBLISH_TAG_FROM = addslashes($_REQUEST['thisPUBLISH_TAG_FROMField']);
	$thisPUBLISH_TAG_TO = addslashes($_REQUEST['thisPUBLISH_TAG_TOField']);
	$thisONLINE_FLAG = addslashes($_REQUEST['thisONLINE_FLAGField']);

	$sqlInsert = "INSERT INTO CMS_CONTENTS (RESOURCE_ID , FILE_CONTENT , PUBLISH_TAG_FROM , PUBLISH_TAG_TO , ONLINE_FLAG ) VALUES ('$thisRESOURCE_ID' , '$thisFILE_CONTENT' , '$thisPUBLISH_TAG_FROM' , '$thisPUBLISH_TAG_TO' , '$thisONLINE_FLAG' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisRESOURCE_IDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisFILE_CONTENT = addslashes($_REQUEST['thisFILE_CONTENTField']);
	$thisPUBLISH_TAG_FROM = addslashes($_REQUEST['thisPUBLISH_TAG_FROMField']);
	$thisPUBLISH_TAG_TO = addslashes($_REQUEST['thisPUBLISH_TAG_TOField']);
	$thisONLINE_FLAG = addslashes($_REQUEST['thisONLINE_FLAGField']);

	$sqlDelete = "DELETE FROM CMS_CONTENTS WHERE RESOURCE_ID = '$thisRESOURCE_ID'";
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


$sql = "SELECT   * FROM CMS_CONTENTS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=FILE_CONTENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>FILE_CONTENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PUBLISH_TAG_FROM&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PUBLISH_TAG_FROM</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PUBLISH_TAG_TO&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PUBLISH_TAG_TO</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ONLINE_FLAG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ONLINE_FLAG</B>
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
		<TD><input type"text" name="thisFILE_CONTENTField" value=""></TD>
		<TD><input type"text" name="thisPUBLISH_TAG_FROMField" value=""></TD>
		<TD><input type"text" name="thisPUBLISH_TAG_TOField" value=""></TD>
		<TD><input type"text" name="thisONLINE_FLAGField" value=""></TD>
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
	$thisFILE_CONTENT = MYSQL_RESULT($result,$i,"FILE_CONTENT");
	$thisPUBLISH_TAG_FROM = MYSQL_RESULT($result,$i,"PUBLISH_TAG_FROM");
	$thisPUBLISH_TAG_TO = MYSQL_RESULT($result,$i,"PUBLISH_TAG_TO");
	$thisONLINE_FLAG = MYSQL_RESULT($result,$i,"ONLINE_FLAG");
if ($thisRESOURCE_IDFromForm == $thisRESOURCE_ID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisRESOURCE_IDField" value="<? echo $thisRESOURCE_ID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisRESOURCE_IDField" value="<? echo $thisRESOURCE_ID; ?>"></TD>
		<TD><input type"text" name="thisFILE_CONTENTField" value="<? echo $thisFILE_CONTENT; ?>"></TD>
		<TD><input type"text" name="thisPUBLISH_TAG_FROMField" value="<? echo $thisPUBLISH_TAG_FROM; ?>"></TD>
		<TD><input type"text" name="thisPUBLISH_TAG_TOField" value="<? echo $thisPUBLISH_TAG_TO; ?>"></TD>
		<TD><input type"text" name="thisONLINE_FLAGField" value="<? echo $thisONLINE_FLAG; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisRESOURCE_ID; ?></TD>
		<TD><? echo $thisFILE_CONTENT; ?></TD>
		<TD><? echo $thisPUBLISH_TAG_FROM; ?></TD>
		<TD><? echo $thisPUBLISH_TAG_TO; ?></TD>
		<TD><? echo $thisONLINE_FLAG; ?></TD>
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