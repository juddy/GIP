<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
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
	<TD><a href="editPLUGINS.php?PLUGIN_NAMEField=<? echo $thisPLUGIN_NAME; ?>">Edit</a></TD>
	<TD><a href="confirmDeletePLUGINS.php?PLUGIN_NAMEField=<? echo $thisPLUGIN_NAME; ?>">Delete</a></TD>
	</TR>
<?
		$i++;

	} // end while loop
?>
</TABLE>


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