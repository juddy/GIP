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
$sqlQuery = "SELECT *  FROM CMS_PUBLISH_JOBS WHERE HISTORY_ID like '%$thisKeyword%'  OR PROJECT_ID like '%$thisKeyword%'  OR PROJECT_NAME like '%$thisKeyword%'  OR USER_ID like '%$thisKeyword%'  OR PUBLISH_LOCALE like '%$thisKeyword%'  OR PUBLISH_FLAGS like '%$thisKeyword%'  OR PUBLISH_LIST like '%$thisKeyword%'  OR PUBLISH_REPORT like '%$thisKeyword%'  OR RESOURCE_COUNT like '%$thisKeyword%'  OR ENQUEUE_TIME like '%$thisKeyword%'  OR START_TIME like '%$thisKeyword%'  OR FINISH_TIME like '%$thisKeyword%' ";
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
$highlightColor = "#FFFF99"; 

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
	$thisHISTORY_ID = highlightSearchTerms($thisHISTORY_ID, $thisKeyword, $highlightColor); 
	$thisPROJECT_ID = highlightSearchTerms($thisPROJECT_ID, $thisKeyword, $highlightColor); 
	$thisPROJECT_NAME = highlightSearchTerms($thisPROJECT_NAME, $thisKeyword, $highlightColor); 
	$thisUSER_ID = highlightSearchTerms($thisUSER_ID, $thisKeyword, $highlightColor); 
	$thisPUBLISH_LOCALE = highlightSearchTerms($thisPUBLISH_LOCALE, $thisKeyword, $highlightColor); 
	$thisPUBLISH_FLAGS = highlightSearchTerms($thisPUBLISH_FLAGS, $thisKeyword, $highlightColor); 
	$thisPUBLISH_LIST = highlightSearchTerms($thisPUBLISH_LIST, $thisKeyword, $highlightColor); 
	$thisPUBLISH_REPORT = highlightSearchTerms($thisPUBLISH_REPORT, $thisKeyword, $highlightColor); 
	$thisRESOURCE_COUNT = highlightSearchTerms($thisRESOURCE_COUNT, $thisKeyword, $highlightColor); 
	$thisENQUEUE_TIME = highlightSearchTerms($thisENQUEUE_TIME, $thisKeyword, $highlightColor); 
	$thisSTART_TIME = highlightSearchTerms($thisSTART_TIME, $thisKeyword, $highlightColor); 
	$thisFINISH_TIME = highlightSearchTerms($thisFINISH_TIME, $thisKeyword, $highlightColor); 

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
	<TD><a href="editCMS_PUBLISH_JOBS.php?HISTORY_IDField=<? echo $thisHISTORY_ID; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteCMS_PUBLISH_JOBS.php?HISTORY_IDField=<? echo $thisHISTORY_ID; ?>">Delete</a></TD>
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