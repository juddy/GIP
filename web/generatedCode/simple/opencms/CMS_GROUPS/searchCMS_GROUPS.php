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
$sqlQuery = "SELECT *  FROM CMS_GROUPS WHERE GROUP_ID like '%$thisKeyword%'  OR PARENT_GROUP_ID like '%$thisKeyword%'  OR GROUP_NAME like '%$thisKeyword%'  OR GROUP_DESCRIPTION like '%$thisKeyword%'  OR GROUP_FLAGS like '%$thisKeyword%'  OR GROUP_OU like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=GROUP_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>GROUP_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PARENT_GROUP_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PARENT_GROUP_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=GROUP_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>GROUP_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=GROUP_DESCRIPTION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>GROUP_DESCRIPTION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=GROUP_FLAGS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>GROUP_FLAGS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=GROUP_OU&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>GROUP_OU</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisGROUP_ID = MYSQL_RESULT($result,$i,"GROUP_ID");
	$thisPARENT_GROUP_ID = MYSQL_RESULT($result,$i,"PARENT_GROUP_ID");
	$thisGROUP_NAME = MYSQL_RESULT($result,$i,"GROUP_NAME");
	$thisGROUP_DESCRIPTION = MYSQL_RESULT($result,$i,"GROUP_DESCRIPTION");
	$thisGROUP_FLAGS = MYSQL_RESULT($result,$i,"GROUP_FLAGS");
	$thisGROUP_OU = MYSQL_RESULT($result,$i,"GROUP_OU");
	$thisGROUP_ID = highlightSearchTerms($thisGROUP_ID, $thisKeyword, $highlightColor); 
	$thisPARENT_GROUP_ID = highlightSearchTerms($thisPARENT_GROUP_ID, $thisKeyword, $highlightColor); 
	$thisGROUP_NAME = highlightSearchTerms($thisGROUP_NAME, $thisKeyword, $highlightColor); 
	$thisGROUP_DESCRIPTION = highlightSearchTerms($thisGROUP_DESCRIPTION, $thisKeyword, $highlightColor); 
	$thisGROUP_FLAGS = highlightSearchTerms($thisGROUP_FLAGS, $thisKeyword, $highlightColor); 
	$thisGROUP_OU = highlightSearchTerms($thisGROUP_OU, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisGROUP_ID; ?></TD>
		<TD><? echo $thisPARENT_GROUP_ID; ?></TD>
		<TD><? echo $thisGROUP_NAME; ?></TD>
		<TD><? echo $thisGROUP_DESCRIPTION; ?></TD>
		<TD><? echo $thisGROUP_FLAGS; ?></TD>
		<TD><? echo $thisGROUP_OU; ?></TD>
	<TD><a href="editCMS_GROUPS.php?GROUP_IDField=<? echo $thisGROUP_ID; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteCMS_GROUPS.php?GROUP_IDField=<? echo $thisGROUP_ID; ?>">Delete</a></TD>
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