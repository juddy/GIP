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
$sqlQuery = "SELECT *  FROM CMS_OFFLINE_RESOURCES WHERE RESOURCE_ID like '%$thisKeyword%'  OR RESOURCE_TYPE like '%$thisKeyword%'  OR RESOURCE_FLAGS like '%$thisKeyword%'  OR RESOURCE_STATE like '%$thisKeyword%'  OR RESOURCE_SIZE like '%$thisKeyword%'  OR DATE_CONTENT like '%$thisKeyword%'  OR SIBLING_COUNT like '%$thisKeyword%'  OR DATE_CREATED like '%$thisKeyword%'  OR DATE_LASTMODIFIED like '%$thisKeyword%'  OR USER_CREATED like '%$thisKeyword%'  OR USER_LASTMODIFIED like '%$thisKeyword%'  OR PROJECT_LASTMODIFIED like '%$thisKeyword%'  OR RESOURCE_VERSION like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=RESOURCE_VERSION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RESOURCE_VERSION</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

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
	$thisRESOURCE_VERSION = MYSQL_RESULT($result,$i,"RESOURCE_VERSION");
	$thisRESOURCE_ID = highlightSearchTerms($thisRESOURCE_ID, $thisKeyword, $highlightColor); 
	$thisRESOURCE_TYPE = highlightSearchTerms($thisRESOURCE_TYPE, $thisKeyword, $highlightColor); 
	$thisRESOURCE_FLAGS = highlightSearchTerms($thisRESOURCE_FLAGS, $thisKeyword, $highlightColor); 
	$thisRESOURCE_STATE = highlightSearchTerms($thisRESOURCE_STATE, $thisKeyword, $highlightColor); 
	$thisRESOURCE_SIZE = highlightSearchTerms($thisRESOURCE_SIZE, $thisKeyword, $highlightColor); 
	$thisDATE_CONTENT = highlightSearchTerms($thisDATE_CONTENT, $thisKeyword, $highlightColor); 
	$thisSIBLING_COUNT = highlightSearchTerms($thisSIBLING_COUNT, $thisKeyword, $highlightColor); 
	$thisDATE_CREATED = highlightSearchTerms($thisDATE_CREATED, $thisKeyword, $highlightColor); 
	$thisDATE_LASTMODIFIED = highlightSearchTerms($thisDATE_LASTMODIFIED, $thisKeyword, $highlightColor); 
	$thisUSER_CREATED = highlightSearchTerms($thisUSER_CREATED, $thisKeyword, $highlightColor); 
	$thisUSER_LASTMODIFIED = highlightSearchTerms($thisUSER_LASTMODIFIED, $thisKeyword, $highlightColor); 
	$thisPROJECT_LASTMODIFIED = highlightSearchTerms($thisPROJECT_LASTMODIFIED, $thisKeyword, $highlightColor); 
	$thisRESOURCE_VERSION = highlightSearchTerms($thisRESOURCE_VERSION, $thisKeyword, $highlightColor); 

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
		<TD><? echo $thisRESOURCE_VERSION; ?></TD>
	<TD><a href="editCMS_OFFLINE_RESOURCES.php?RESOURCE_IDField=<? echo $thisRESOURCE_ID; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteCMS_OFFLINE_RESOURCES.php?RESOURCE_IDField=<? echo $thisRESOURCE_ID; ?>">Delete</a></TD>
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