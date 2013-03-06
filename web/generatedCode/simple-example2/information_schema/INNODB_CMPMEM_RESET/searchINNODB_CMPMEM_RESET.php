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
$sqlQuery = "SELECT *  FROM INNODB_CMPMEM_RESET WHERE page_size like '%$thisKeyword%'  OR buffer_pool_instance like '%$thisKeyword%'  OR pages_used like '%$thisKeyword%'  OR pages_free like '%$thisKeyword%'  OR relocation_ops like '%$thisKeyword%'  OR relocation_time like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=page_size&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Page_size</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=buffer_pool_instance&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Buffer_pool_instance</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=pages_used&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Pages_used</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=pages_free&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Pages_free</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=relocation_ops&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Relocation_ops</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=relocation_time&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Relocation_time</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisPage_size = MYSQL_RESULT($result,$i,"page_size");
	$thisBuffer_pool_instance = MYSQL_RESULT($result,$i,"buffer_pool_instance");
	$thisPages_used = MYSQL_RESULT($result,$i,"pages_used");
	$thisPages_free = MYSQL_RESULT($result,$i,"pages_free");
	$thisRelocation_ops = MYSQL_RESULT($result,$i,"relocation_ops");
	$thisRelocation_time = MYSQL_RESULT($result,$i,"relocation_time");
	$thisPage_size = highlightSearchTerms($thisPage_size, $thisKeyword, $highlightColor); 
	$thisBuffer_pool_instance = highlightSearchTerms($thisBuffer_pool_instance, $thisKeyword, $highlightColor); 
	$thisPages_used = highlightSearchTerms($thisPages_used, $thisKeyword, $highlightColor); 
	$thisPages_free = highlightSearchTerms($thisPages_free, $thisKeyword, $highlightColor); 
	$thisRelocation_ops = highlightSearchTerms($thisRelocation_ops, $thisKeyword, $highlightColor); 
	$thisRelocation_time = highlightSearchTerms($thisRelocation_time, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisPage_size; ?></TD>
		<TD><? echo $thisBuffer_pool_instance; ?></TD>
		<TD><? echo $thisPages_used; ?></TD>
		<TD><? echo $thisPages_free; ?></TD>
		<TD><? echo $thisRelocation_ops; ?></TD>
		<TD><? echo $thisRelocation_time; ?></TD>
	<TD><a href="editINNODB_CMPMEM_RESET.php?page_sizeField=<? echo $thisPage_size; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteINNODB_CMPMEM_RESET.php?page_sizeField=<? echo $thisPage_size; ?>">Delete</a></TD>
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