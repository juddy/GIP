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
$sqlQuery = "SELECT *  FROM CMS_ONLINE_RESOURCE_RELATIONS WHERE RELATION_SOURCE_ID like '%$thisKeyword%'  OR RELATION_SOURCE_PATH like '%$thisKeyword%'  OR RELATION_TARGET_ID like '%$thisKeyword%'  OR RELATION_TARGET_PATH like '%$thisKeyword%'  OR RELATION_TYPE like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=RELATION_SOURCE_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RELATION_SOURCE_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RELATION_SOURCE_PATH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RELATION_SOURCE_PATH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RELATION_TARGET_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RELATION_TARGET_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RELATION_TARGET_PATH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RELATION_TARGET_PATH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=RELATION_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RELATION_TYPE</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisRELATION_SOURCE_ID = MYSQL_RESULT($result,$i,"RELATION_SOURCE_ID");
	$thisRELATION_SOURCE_PATH = MYSQL_RESULT($result,$i,"RELATION_SOURCE_PATH");
	$thisRELATION_TARGET_ID = MYSQL_RESULT($result,$i,"RELATION_TARGET_ID");
	$thisRELATION_TARGET_PATH = MYSQL_RESULT($result,$i,"RELATION_TARGET_PATH");
	$thisRELATION_TYPE = MYSQL_RESULT($result,$i,"RELATION_TYPE");
	$thisRELATION_SOURCE_ID = highlightSearchTerms($thisRELATION_SOURCE_ID, $thisKeyword, $highlightColor); 
	$thisRELATION_SOURCE_PATH = highlightSearchTerms($thisRELATION_SOURCE_PATH, $thisKeyword, $highlightColor); 
	$thisRELATION_TARGET_ID = highlightSearchTerms($thisRELATION_TARGET_ID, $thisKeyword, $highlightColor); 
	$thisRELATION_TARGET_PATH = highlightSearchTerms($thisRELATION_TARGET_PATH, $thisKeyword, $highlightColor); 
	$thisRELATION_TYPE = highlightSearchTerms($thisRELATION_TYPE, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisRELATION_SOURCE_ID; ?></TD>
		<TD><? echo $thisRELATION_SOURCE_PATH; ?></TD>
		<TD><? echo $thisRELATION_TARGET_ID; ?></TD>
		<TD><? echo $thisRELATION_TARGET_PATH; ?></TD>
		<TD><? echo $thisRELATION_TYPE; ?></TD>
	<TD><a href="editCMS_ONLINE_RESOURCE_RELATIONS.php?RELATION_SOURCE_IDField=<? echo $thisRELATION_SOURCE_ID; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteCMS_ONLINE_RESOURCE_RELATIONS.php?RELATION_SOURCE_IDField=<? echo $thisRELATION_SOURCE_ID; ?>">Delete</a></TD>
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