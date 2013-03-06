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
$sqlQuery = "SELECT *  FROM INNODB_CMP WHERE page_size like '%$thisKeyword%'  OR compress_ops like '%$thisKeyword%'  OR compress_ops_ok like '%$thisKeyword%'  OR compress_time like '%$thisKeyword%'  OR uncompress_ops like '%$thisKeyword%'  OR uncompress_time like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=compress_ops&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Compress_ops</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=compress_ops_ok&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Compress_ops_ok</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=compress_time&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Compress_time</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=uncompress_ops&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Uncompress_ops</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=uncompress_time&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Uncompress_time</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisPage_size = MYSQL_RESULT($result,$i,"page_size");
	$thisCompress_ops = MYSQL_RESULT($result,$i,"compress_ops");
	$thisCompress_ops_ok = MYSQL_RESULT($result,$i,"compress_ops_ok");
	$thisCompress_time = MYSQL_RESULT($result,$i,"compress_time");
	$thisUncompress_ops = MYSQL_RESULT($result,$i,"uncompress_ops");
	$thisUncompress_time = MYSQL_RESULT($result,$i,"uncompress_time");
	$thisPage_size = highlightSearchTerms($thisPage_size, $thisKeyword, $highlightColor); 
	$thisCompress_ops = highlightSearchTerms($thisCompress_ops, $thisKeyword, $highlightColor); 
	$thisCompress_ops_ok = highlightSearchTerms($thisCompress_ops_ok, $thisKeyword, $highlightColor); 
	$thisCompress_time = highlightSearchTerms($thisCompress_time, $thisKeyword, $highlightColor); 
	$thisUncompress_ops = highlightSearchTerms($thisUncompress_ops, $thisKeyword, $highlightColor); 
	$thisUncompress_time = highlightSearchTerms($thisUncompress_time, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisPage_size; ?></TD>
		<TD><? echo $thisCompress_ops; ?></TD>
		<TD><? echo $thisCompress_ops_ok; ?></TD>
		<TD><? echo $thisCompress_time; ?></TD>
		<TD><? echo $thisUncompress_ops; ?></TD>
		<TD><? echo $thisUncompress_time; ?></TD>
	<TD><a href="editINNODB_CMP.php?page_sizeField=<? echo $thisPage_size; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteINNODB_CMP.php?page_sizeField=<? echo $thisPage_size; ?>">Delete</a></TD>
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