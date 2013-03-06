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
$sqlQuery = "SELECT *  FROM CMS_CONTENTS WHERE RESOURCE_ID like '%$thisKeyword%'  OR FILE_CONTENT like '%$thisKeyword%'  OR PUBLISH_TAG_FROM like '%$thisKeyword%'  OR PUBLISH_TAG_TO like '%$thisKeyword%'  OR ONLINE_FLAG like '%$thisKeyword%' ";
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
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisRESOURCE_ID = MYSQL_RESULT($result,$i,"RESOURCE_ID");
	$thisFILE_CONTENT = MYSQL_RESULT($result,$i,"FILE_CONTENT");
	$thisPUBLISH_TAG_FROM = MYSQL_RESULT($result,$i,"PUBLISH_TAG_FROM");
	$thisPUBLISH_TAG_TO = MYSQL_RESULT($result,$i,"PUBLISH_TAG_TO");
	$thisONLINE_FLAG = MYSQL_RESULT($result,$i,"ONLINE_FLAG");
	$thisRESOURCE_ID = highlightSearchTerms($thisRESOURCE_ID, $thisKeyword, $highlightColor); 
	$thisFILE_CONTENT = highlightSearchTerms($thisFILE_CONTENT, $thisKeyword, $highlightColor); 
	$thisPUBLISH_TAG_FROM = highlightSearchTerms($thisPUBLISH_TAG_FROM, $thisKeyword, $highlightColor); 
	$thisPUBLISH_TAG_TO = highlightSearchTerms($thisPUBLISH_TAG_TO, $thisKeyword, $highlightColor); 
	$thisONLINE_FLAG = highlightSearchTerms($thisONLINE_FLAG, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisRESOURCE_ID; ?></TD>
		<TD><? echo $thisFILE_CONTENT; ?></TD>
		<TD><? echo $thisPUBLISH_TAG_FROM; ?></TD>
		<TD><? echo $thisPUBLISH_TAG_TO; ?></TD>
		<TD><? echo $thisONLINE_FLAG; ?></TD>
	<TD><a href="editCMS_CONTENTS.php?RESOURCE_IDField=<? echo $thisRESOURCE_ID; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteCMS_CONTENTS.php?RESOURCE_IDField=<? echo $thisRESOURCE_ID; ?>">Delete</a></TD>
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