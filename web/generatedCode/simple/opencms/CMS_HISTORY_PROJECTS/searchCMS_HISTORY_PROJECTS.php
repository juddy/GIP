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
$sqlQuery = "SELECT *  FROM CMS_HISTORY_PROJECTS WHERE PROJECT_ID like '%$thisKeyword%'  OR PROJECT_NAME like '%$thisKeyword%'  OR PROJECT_DESCRIPTION like '%$thisKeyword%'  OR PROJECT_TYPE like '%$thisKeyword%'  OR USER_ID like '%$thisKeyword%'  OR GROUP_ID like '%$thisKeyword%'  OR MANAGERGROUP_ID like '%$thisKeyword%'  OR DATE_CREATED like '%$thisKeyword%'  OR PUBLISH_TAG like '%$thisKeyword%'  OR PROJECT_PUBLISHDATE like '%$thisKeyword%'  OR PROJECT_PUBLISHED_BY like '%$thisKeyword%'  OR PROJECT_OU like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROJECT_DESCRIPTION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROJECT_DESCRIPTION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROJECT_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROJECT_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=GROUP_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>GROUP_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=MANAGERGROUP_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>MANAGERGROUP_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATE_CREATED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATE_CREATED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PUBLISH_TAG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PUBLISH_TAG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROJECT_PUBLISHDATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROJECT_PUBLISHDATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROJECT_PUBLISHED_BY&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROJECT_PUBLISHED_BY</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROJECT_OU&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROJECT_OU</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisPROJECT_ID = MYSQL_RESULT($result,$i,"PROJECT_ID");
	$thisPROJECT_NAME = MYSQL_RESULT($result,$i,"PROJECT_NAME");
	$thisPROJECT_DESCRIPTION = MYSQL_RESULT($result,$i,"PROJECT_DESCRIPTION");
	$thisPROJECT_TYPE = MYSQL_RESULT($result,$i,"PROJECT_TYPE");
	$thisUSER_ID = MYSQL_RESULT($result,$i,"USER_ID");
	$thisGROUP_ID = MYSQL_RESULT($result,$i,"GROUP_ID");
	$thisMANAGERGROUP_ID = MYSQL_RESULT($result,$i,"MANAGERGROUP_ID");
	$thisDATE_CREATED = MYSQL_RESULT($result,$i,"DATE_CREATED");
	$thisPUBLISH_TAG = MYSQL_RESULT($result,$i,"PUBLISH_TAG");
	$thisPROJECT_PUBLISHDATE = MYSQL_RESULT($result,$i,"PROJECT_PUBLISHDATE");
	$thisPROJECT_PUBLISHED_BY = MYSQL_RESULT($result,$i,"PROJECT_PUBLISHED_BY");
	$thisPROJECT_OU = MYSQL_RESULT($result,$i,"PROJECT_OU");
	$thisPROJECT_ID = highlightSearchTerms($thisPROJECT_ID, $thisKeyword, $highlightColor); 
	$thisPROJECT_NAME = highlightSearchTerms($thisPROJECT_NAME, $thisKeyword, $highlightColor); 
	$thisPROJECT_DESCRIPTION = highlightSearchTerms($thisPROJECT_DESCRIPTION, $thisKeyword, $highlightColor); 
	$thisPROJECT_TYPE = highlightSearchTerms($thisPROJECT_TYPE, $thisKeyword, $highlightColor); 
	$thisUSER_ID = highlightSearchTerms($thisUSER_ID, $thisKeyword, $highlightColor); 
	$thisGROUP_ID = highlightSearchTerms($thisGROUP_ID, $thisKeyword, $highlightColor); 
	$thisMANAGERGROUP_ID = highlightSearchTerms($thisMANAGERGROUP_ID, $thisKeyword, $highlightColor); 
	$thisDATE_CREATED = highlightSearchTerms($thisDATE_CREATED, $thisKeyword, $highlightColor); 
	$thisPUBLISH_TAG = highlightSearchTerms($thisPUBLISH_TAG, $thisKeyword, $highlightColor); 
	$thisPROJECT_PUBLISHDATE = highlightSearchTerms($thisPROJECT_PUBLISHDATE, $thisKeyword, $highlightColor); 
	$thisPROJECT_PUBLISHED_BY = highlightSearchTerms($thisPROJECT_PUBLISHED_BY, $thisKeyword, $highlightColor); 
	$thisPROJECT_OU = highlightSearchTerms($thisPROJECT_OU, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisPROJECT_ID; ?></TD>
		<TD><? echo $thisPROJECT_NAME; ?></TD>
		<TD><? echo $thisPROJECT_DESCRIPTION; ?></TD>
		<TD><? echo $thisPROJECT_TYPE; ?></TD>
		<TD><? echo $thisUSER_ID; ?></TD>
		<TD><? echo $thisGROUP_ID; ?></TD>
		<TD><? echo $thisMANAGERGROUP_ID; ?></TD>
		<TD><? echo $thisDATE_CREATED; ?></TD>
		<TD><? echo $thisPUBLISH_TAG; ?></TD>
		<TD><? echo $thisPROJECT_PUBLISHDATE; ?></TD>
		<TD><? echo $thisPROJECT_PUBLISHED_BY; ?></TD>
		<TD><? echo $thisPROJECT_OU; ?></TD>
	<TD><a href="editCMS_HISTORY_PROJECTS.php?PROJECT_IDField=<? echo $thisPROJECT_ID; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteCMS_HISTORY_PROJECTS.php?PROJECT_IDField=<? echo $thisPROJECT_ID; ?>">Delete</a></TD>
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