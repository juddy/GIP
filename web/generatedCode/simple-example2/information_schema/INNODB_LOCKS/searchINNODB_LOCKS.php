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
$sqlQuery = "SELECT *  FROM INNODB_LOCKS WHERE lock_id like '%$thisKeyword%'  OR lock_trx_id like '%$thisKeyword%'  OR lock_mode like '%$thisKeyword%'  OR lock_type like '%$thisKeyword%'  OR lock_table like '%$thisKeyword%'  OR lock_index like '%$thisKeyword%'  OR lock_space like '%$thisKeyword%'  OR lock_page like '%$thisKeyword%'  OR lock_rec like '%$thisKeyword%'  OR lock_data like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_id&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_id</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_trx_id&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_trx_id</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_mode&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_mode</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_type&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_type</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_table&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_table</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_index&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_index</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_space&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_space</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_page&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_page</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_rec&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_rec</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=lock_data&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Lock_data</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisLock_id = MYSQL_RESULT($result,$i,"lock_id");
	$thisLock_trx_id = MYSQL_RESULT($result,$i,"lock_trx_id");
	$thisLock_mode = MYSQL_RESULT($result,$i,"lock_mode");
	$thisLock_type = MYSQL_RESULT($result,$i,"lock_type");
	$thisLock_table = MYSQL_RESULT($result,$i,"lock_table");
	$thisLock_index = MYSQL_RESULT($result,$i,"lock_index");
	$thisLock_space = MYSQL_RESULT($result,$i,"lock_space");
	$thisLock_page = MYSQL_RESULT($result,$i,"lock_page");
	$thisLock_rec = MYSQL_RESULT($result,$i,"lock_rec");
	$thisLock_data = MYSQL_RESULT($result,$i,"lock_data");
	$thisLock_id = highlightSearchTerms($thisLock_id, $thisKeyword, $highlightColor); 
	$thisLock_trx_id = highlightSearchTerms($thisLock_trx_id, $thisKeyword, $highlightColor); 
	$thisLock_mode = highlightSearchTerms($thisLock_mode, $thisKeyword, $highlightColor); 
	$thisLock_type = highlightSearchTerms($thisLock_type, $thisKeyword, $highlightColor); 
	$thisLock_table = highlightSearchTerms($thisLock_table, $thisKeyword, $highlightColor); 
	$thisLock_index = highlightSearchTerms($thisLock_index, $thisKeyword, $highlightColor); 
	$thisLock_space = highlightSearchTerms($thisLock_space, $thisKeyword, $highlightColor); 
	$thisLock_page = highlightSearchTerms($thisLock_page, $thisKeyword, $highlightColor); 
	$thisLock_rec = highlightSearchTerms($thisLock_rec, $thisKeyword, $highlightColor); 
	$thisLock_data = highlightSearchTerms($thisLock_data, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisLock_id; ?></TD>
		<TD><? echo $thisLock_trx_id; ?></TD>
		<TD><? echo $thisLock_mode; ?></TD>
		<TD><? echo $thisLock_type; ?></TD>
		<TD><? echo $thisLock_table; ?></TD>
		<TD><? echo $thisLock_index; ?></TD>
		<TD><? echo $thisLock_space; ?></TD>
		<TD><? echo $thisLock_page; ?></TD>
		<TD><? echo $thisLock_rec; ?></TD>
		<TD><? echo $thisLock_data; ?></TD>
	<TD><a href="editINNODB_LOCKS.php?lock_idField=<? echo $thisLock_id; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteINNODB_LOCKS.php?lock_idField=<? echo $thisLock_id; ?>">Delete</a></TD>
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