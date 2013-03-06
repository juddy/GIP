<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisPLUGIN_NAMEFromForm = $_REQUEST['thisPLUGIN_NAMEField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisPLUGIN_NAME = addslashes($_REQUEST['thisPLUGIN_NAMEField']);
	$thisPLUGIN_VERSION = addslashes($_REQUEST['thisPLUGIN_VERSIONField']);
	$thisPLUGIN_STATUS = addslashes($_REQUEST['thisPLUGIN_STATUSField']);
	$thisPLUGIN_TYPE = addslashes($_REQUEST['thisPLUGIN_TYPEField']);
	$thisPLUGIN_TYPE_VERSION = addslashes($_REQUEST['thisPLUGIN_TYPE_VERSIONField']);
	$thisPLUGIN_LIBRARY = addslashes($_REQUEST['thisPLUGIN_LIBRARYField']);
	$thisPLUGIN_LIBRARY_VERSION = addslashes($_REQUEST['thisPLUGIN_LIBRARY_VERSIONField']);
	$thisPLUGIN_AUTHOR = addslashes($_REQUEST['thisPLUGIN_AUTHORField']);
	$thisPLUGIN_DESCRIPTION = addslashes($_REQUEST['thisPLUGIN_DESCRIPTIONField']);
	$thisPLUGIN_LICENSE = addslashes($_REQUEST['thisPLUGIN_LICENSEField']);
	$thisLOAD_OPTION = addslashes($_REQUEST['thisLOAD_OPTIONField']);

	$sqlUpdate = "UPDATE PLUGINS SET PLUGIN_NAME = '$thisPLUGIN_NAME' , PLUGIN_VERSION = '$thisPLUGIN_VERSION' , PLUGIN_STATUS = '$thisPLUGIN_STATUS' , PLUGIN_TYPE = '$thisPLUGIN_TYPE' , PLUGIN_TYPE_VERSION = '$thisPLUGIN_TYPE_VERSION' , PLUGIN_LIBRARY = '$thisPLUGIN_LIBRARY' , PLUGIN_LIBRARY_VERSION = '$thisPLUGIN_LIBRARY_VERSION' , PLUGIN_AUTHOR = '$thisPLUGIN_AUTHOR' , PLUGIN_DESCRIPTION = '$thisPLUGIN_DESCRIPTION' , PLUGIN_LICENSE = '$thisPLUGIN_LICENSE' , LOAD_OPTION = '$thisLOAD_OPTION'  WHERE PLUGIN_NAME = '$thisPLUGIN_NAME'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisPLUGIN_NAMEFromForm." has been Updated<br></b>";
	$thisPLUGIN_NAMEFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisPLUGIN_NAME = addslashes($_REQUEST['thisPLUGIN_NAMEField']);
	$thisPLUGIN_VERSION = addslashes($_REQUEST['thisPLUGIN_VERSIONField']);
	$thisPLUGIN_STATUS = addslashes($_REQUEST['thisPLUGIN_STATUSField']);
	$thisPLUGIN_TYPE = addslashes($_REQUEST['thisPLUGIN_TYPEField']);
	$thisPLUGIN_TYPE_VERSION = addslashes($_REQUEST['thisPLUGIN_TYPE_VERSIONField']);
	$thisPLUGIN_LIBRARY = addslashes($_REQUEST['thisPLUGIN_LIBRARYField']);
	$thisPLUGIN_LIBRARY_VERSION = addslashes($_REQUEST['thisPLUGIN_LIBRARY_VERSIONField']);
	$thisPLUGIN_AUTHOR = addslashes($_REQUEST['thisPLUGIN_AUTHORField']);
	$thisPLUGIN_DESCRIPTION = addslashes($_REQUEST['thisPLUGIN_DESCRIPTIONField']);
	$thisPLUGIN_LICENSE = addslashes($_REQUEST['thisPLUGIN_LICENSEField']);
	$thisLOAD_OPTION = addslashes($_REQUEST['thisLOAD_OPTIONField']);

	$sqlInsert = "INSERT INTO PLUGINS (PLUGIN_NAME , PLUGIN_VERSION , PLUGIN_STATUS , PLUGIN_TYPE , PLUGIN_TYPE_VERSION , PLUGIN_LIBRARY , PLUGIN_LIBRARY_VERSION , PLUGIN_AUTHOR , PLUGIN_DESCRIPTION , PLUGIN_LICENSE , LOAD_OPTION ) VALUES ('$thisPLUGIN_NAME' , '$thisPLUGIN_VERSION' , '$thisPLUGIN_STATUS' , '$thisPLUGIN_TYPE' , '$thisPLUGIN_TYPE_VERSION' , '$thisPLUGIN_LIBRARY' , '$thisPLUGIN_LIBRARY_VERSION' , '$thisPLUGIN_AUTHOR' , '$thisPLUGIN_DESCRIPTION' , '$thisPLUGIN_LICENSE' , '$thisLOAD_OPTION' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisPLUGIN_NAMEFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisPLUGIN_NAME = addslashes($_REQUEST['thisPLUGIN_NAMEField']);
	$thisPLUGIN_VERSION = addslashes($_REQUEST['thisPLUGIN_VERSIONField']);
	$thisPLUGIN_STATUS = addslashes($_REQUEST['thisPLUGIN_STATUSField']);
	$thisPLUGIN_TYPE = addslashes($_REQUEST['thisPLUGIN_TYPEField']);
	$thisPLUGIN_TYPE_VERSION = addslashes($_REQUEST['thisPLUGIN_TYPE_VERSIONField']);
	$thisPLUGIN_LIBRARY = addslashes($_REQUEST['thisPLUGIN_LIBRARYField']);
	$thisPLUGIN_LIBRARY_VERSION = addslashes($_REQUEST['thisPLUGIN_LIBRARY_VERSIONField']);
	$thisPLUGIN_AUTHOR = addslashes($_REQUEST['thisPLUGIN_AUTHORField']);
	$thisPLUGIN_DESCRIPTION = addslashes($_REQUEST['thisPLUGIN_DESCRIPTIONField']);
	$thisPLUGIN_LICENSE = addslashes($_REQUEST['thisPLUGIN_LICENSEField']);
	$thisLOAD_OPTION = addslashes($_REQUEST['thisLOAD_OPTIONField']);

	$sqlDelete = "DELETE FROM PLUGINS WHERE PLUGIN_NAME = '$thisPLUGIN_NAME'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisPLUGIN_NAMEFromForm." has been Deleted<br></b>";
	$thisPLUGIN_NAMEFromForm = "";
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


$sql = "SELECT   * FROM PLUGINS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=PLUGIN_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PLUGIN_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PLUGIN_VERSION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PLUGIN_VERSION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PLUGIN_STATUS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PLUGIN_STATUS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PLUGIN_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PLUGIN_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PLUGIN_TYPE_VERSION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PLUGIN_TYPE_VERSION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PLUGIN_LIBRARY&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PLUGIN_LIBRARY</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PLUGIN_LIBRARY_VERSION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PLUGIN_LIBRARY_VERSION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PLUGIN_AUTHOR&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PLUGIN_AUTHOR</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PLUGIN_DESCRIPTION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PLUGIN_DESCRIPTION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PLUGIN_LICENSE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PLUGIN_LICENSE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LOAD_OPTION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LOAD_OPTION</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisPLUGIN_NAMEField" value="<? echo $thisPLUGIN_NAME; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisPLUGIN_NAMEField" value=""></TD>
		<TD><input type"text" name="thisPLUGIN_VERSIONField" value=""></TD>
		<TD><input type"text" name="thisPLUGIN_STATUSField" value=""></TD>
		<TD><input type"text" name="thisPLUGIN_TYPEField" value=""></TD>
		<TD><input type"text" name="thisPLUGIN_TYPE_VERSIONField" value=""></TD>
		<TD><input type"text" name="thisPLUGIN_LIBRARYField" value=""></TD>
		<TD><input type"text" name="thisPLUGIN_LIBRARY_VERSIONField" value=""></TD>
		<TD><input type"text" name="thisPLUGIN_AUTHORField" value=""></TD>
		<TD><input type"text" name="thisPLUGIN_DESCRIPTIONField" value=""></TD>
		<TD><input type"text" name="thisPLUGIN_LICENSEField" value=""></TD>
		<TD><input type"text" name="thisLOAD_OPTIONField" value=""></TD>
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

	$thisPLUGIN_NAME = MYSQL_RESULT($result,$i,"PLUGIN_NAME");
	$thisPLUGIN_VERSION = MYSQL_RESULT($result,$i,"PLUGIN_VERSION");
	$thisPLUGIN_STATUS = MYSQL_RESULT($result,$i,"PLUGIN_STATUS");
	$thisPLUGIN_TYPE = MYSQL_RESULT($result,$i,"PLUGIN_TYPE");
	$thisPLUGIN_TYPE_VERSION = MYSQL_RESULT($result,$i,"PLUGIN_TYPE_VERSION");
	$thisPLUGIN_LIBRARY = MYSQL_RESULT($result,$i,"PLUGIN_LIBRARY");
	$thisPLUGIN_LIBRARY_VERSION = MYSQL_RESULT($result,$i,"PLUGIN_LIBRARY_VERSION");
	$thisPLUGIN_AUTHOR = MYSQL_RESULT($result,$i,"PLUGIN_AUTHOR");
	$thisPLUGIN_DESCRIPTION = MYSQL_RESULT($result,$i,"PLUGIN_DESCRIPTION");
	$thisPLUGIN_LICENSE = MYSQL_RESULT($result,$i,"PLUGIN_LICENSE");
	$thisLOAD_OPTION = MYSQL_RESULT($result,$i,"LOAD_OPTION");
if ($thisPLUGIN_NAMEFromForm == $thisPLUGIN_NAME)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisPLUGIN_NAMEField" value="<? echo $thisPLUGIN_NAME; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisPLUGIN_NAMEField" value="<? echo $thisPLUGIN_NAME; ?>"></TD>
		<TD><input type"text" name="thisPLUGIN_VERSIONField" value="<? echo $thisPLUGIN_VERSION; ?>"></TD>
		<TD><input type"text" name="thisPLUGIN_STATUSField" value="<? echo $thisPLUGIN_STATUS; ?>"></TD>
		<TD><input type"text" name="thisPLUGIN_TYPEField" value="<? echo $thisPLUGIN_TYPE; ?>"></TD>
		<TD><input type"text" name="thisPLUGIN_TYPE_VERSIONField" value="<? echo $thisPLUGIN_TYPE_VERSION; ?>"></TD>
		<TD><input type"text" name="thisPLUGIN_LIBRARYField" value="<? echo $thisPLUGIN_LIBRARY; ?>"></TD>
		<TD><input type"text" name="thisPLUGIN_LIBRARY_VERSIONField" value="<? echo $thisPLUGIN_LIBRARY_VERSION; ?>"></TD>
		<TD><input type"text" name="thisPLUGIN_AUTHORField" value="<? echo $thisPLUGIN_AUTHOR; ?>"></TD>
		<TD><input type"text" name="thisPLUGIN_DESCRIPTIONField" value="<? echo $thisPLUGIN_DESCRIPTION; ?>"></TD>
		<TD><input type"text" name="thisPLUGIN_LICENSEField" value="<? echo $thisPLUGIN_LICENSE; ?>"></TD>
		<TD><input type"text" name="thisLOAD_OPTIONField" value="<? echo $thisLOAD_OPTION; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisPLUGIN_NAME; ?></TD>
		<TD><? echo $thisPLUGIN_VERSION; ?></TD>
		<TD><? echo $thisPLUGIN_STATUS; ?></TD>
		<TD><? echo $thisPLUGIN_TYPE; ?></TD>
		<TD><? echo $thisPLUGIN_TYPE_VERSION; ?></TD>
		<TD><? echo $thisPLUGIN_LIBRARY; ?></TD>
		<TD><? echo $thisPLUGIN_LIBRARY_VERSION; ?></TD>
		<TD><? echo $thisPLUGIN_AUTHOR; ?></TD>
		<TD><? echo $thisPLUGIN_DESCRIPTION; ?></TD>
		<TD><? echo $thisPLUGIN_LICENSE; ?></TD>
		<TD><? echo $thisLOAD_OPTION; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisPLUGIN_NAMEField=<? echo $thisPLUGIN_NAME; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisPLUGIN_NAMEField=<? echo $thisPLUGIN_NAME; ?>">Delete</a></TD>
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