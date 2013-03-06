<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
function highlightSearchTerms($fullText, $searchTerm, $bgcolor="#FFFF99")
{
	if (empty($searchTerm))
	{
		return $fullText;
	}
	else
	{
		$start_tag = "<span style=\"background-color: $bgcolor\">";
		$end_tag = "</span>";
		$highlighted_results = $start_tag . $searchTerm . $end_tag;
		return eregi_replace($searchTerm, $highlighted_results, $fullText);
	}
}

?>
<?php
$thisKeyword = $_REQUEST['keyword'];
?>
<?
$sqlQuery = "SELECT *  FROM PLUGINS WHERE PLUGIN_NAME like '%$thisKeyword%'  OR PLUGIN_VERSION like '%$thisKeyword%'  OR PLUGIN_STATUS like '%$thisKeyword%'  OR PLUGIN_TYPE like '%$thisKeyword%'  OR PLUGIN_TYPE_VERSION like '%$thisKeyword%'  OR PLUGIN_LIBRARY like '%$thisKeyword%'  OR PLUGIN_LIBRARY_VERSION like '%$thisKeyword%'  OR PLUGIN_AUTHOR like '%$thisKeyword%'  OR PLUGIN_DESCRIPTION like '%$thisKeyword%'  OR PLUGIN_LICENSE like '%$thisKeyword%'  OR LOAD_OPTION like '%$thisKeyword%' ";
$result = MYSQL_QUERY($sqlQuery);
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
$highlightColor = "#FFFF99"; 

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
	$thisPLUGIN_NAME = highlightSearchTerms($thisPLUGIN_NAME, $thisKeyword, $highlightColor); 
	$thisPLUGIN_VERSION = highlightSearchTerms($thisPLUGIN_VERSION, $thisKeyword, $highlightColor); 
	$thisPLUGIN_STATUS = highlightSearchTerms($thisPLUGIN_STATUS, $thisKeyword, $highlightColor); 
	$thisPLUGIN_TYPE = highlightSearchTerms($thisPLUGIN_TYPE, $thisKeyword, $highlightColor); 
	$thisPLUGIN_TYPE_VERSION = highlightSearchTerms($thisPLUGIN_TYPE_VERSION, $thisKeyword, $highlightColor); 
	$thisPLUGIN_LIBRARY = highlightSearchTerms($thisPLUGIN_LIBRARY, $thisKeyword, $highlightColor); 
	$thisPLUGIN_LIBRARY_VERSION = highlightSearchTerms($thisPLUGIN_LIBRARY_VERSION, $thisKeyword, $highlightColor); 
	$thisPLUGIN_AUTHOR = highlightSearchTerms($thisPLUGIN_AUTHOR, $thisKeyword, $highlightColor); 
	$thisPLUGIN_DESCRIPTION = highlightSearchTerms($thisPLUGIN_DESCRIPTION, $thisKeyword, $highlightColor); 
	$thisPLUGIN_LICENSE = highlightSearchTerms($thisPLUGIN_LICENSE, $thisKeyword, $highlightColor); 
	$thisLOAD_OPTION = highlightSearchTerms($thisLOAD_OPTION, $thisKeyword, $highlightColor); 

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
<?
} // end of if numberOfRows > 0 
 ?>

<?php
include_once("../common/footer.php");
?>