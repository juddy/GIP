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
$sqlQuery = "SELECT *  FROM INNODB_TRX WHERE trx_id like '%$thisKeyword%'  OR trx_state like '%$thisKeyword%'  OR trx_started like '%$thisKeyword%'  OR trx_requested_lock_id like '%$thisKeyword%'  OR trx_wait_started like '%$thisKeyword%'  OR trx_weight like '%$thisKeyword%'  OR trx_mysql_thread_id like '%$thisKeyword%'  OR trx_query like '%$thisKeyword%'  OR trx_operation_state like '%$thisKeyword%'  OR trx_tables_in_use like '%$thisKeyword%'  OR trx_tables_locked like '%$thisKeyword%'  OR trx_lock_structs like '%$thisKeyword%'  OR trx_lock_memory_bytes like '%$thisKeyword%'  OR trx_rows_locked like '%$thisKeyword%'  OR trx_rows_modified like '%$thisKeyword%'  OR trx_concurrency_tickets like '%$thisKeyword%'  OR trx_isolation_level like '%$thisKeyword%'  OR trx_unique_checks like '%$thisKeyword%'  OR trx_foreign_key_checks like '%$thisKeyword%'  OR trx_last_foreign_key_error like '%$thisKeyword%'  OR trx_adaptive_hash_latched like '%$thisKeyword%'  OR trx_adaptive_hash_timeout like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_id&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_id</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_state&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_state</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_started&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_started</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_requested_lock_id&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_requested_lock_id</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_wait_started&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_wait_started</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_weight&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_weight</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_mysql_thread_id&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_mysql_thread_id</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_query&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_query</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_operation_state&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_operation_state</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_tables_in_use&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_tables_in_use</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_tables_locked&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_tables_locked</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_lock_structs&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_lock_structs</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_lock_memory_bytes&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_lock_memory_bytes</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_rows_locked&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_rows_locked</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_rows_modified&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_rows_modified</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_concurrency_tickets&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_concurrency_tickets</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_isolation_level&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_isolation_level</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_unique_checks&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_unique_checks</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_foreign_key_checks&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_foreign_key_checks</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_last_foreign_key_error&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_last_foreign_key_error</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_adaptive_hash_latched&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_adaptive_hash_latched</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=trx_adaptive_hash_timeout&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Trx_adaptive_hash_timeout</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisTrx_id = MYSQL_RESULT($result,$i,"trx_id");
	$thisTrx_state = MYSQL_RESULT($result,$i,"trx_state");
	$thisTrx_started = MYSQL_RESULT($result,$i,"trx_started");
	$thisTrx_requested_lock_id = MYSQL_RESULT($result,$i,"trx_requested_lock_id");
	$thisTrx_wait_started = MYSQL_RESULT($result,$i,"trx_wait_started");
	$thisTrx_weight = MYSQL_RESULT($result,$i,"trx_weight");
	$thisTrx_mysql_thread_id = MYSQL_RESULT($result,$i,"trx_mysql_thread_id");
	$thisTrx_query = MYSQL_RESULT($result,$i,"trx_query");
	$thisTrx_operation_state = MYSQL_RESULT($result,$i,"trx_operation_state");
	$thisTrx_tables_in_use = MYSQL_RESULT($result,$i,"trx_tables_in_use");
	$thisTrx_tables_locked = MYSQL_RESULT($result,$i,"trx_tables_locked");
	$thisTrx_lock_structs = MYSQL_RESULT($result,$i,"trx_lock_structs");
	$thisTrx_lock_memory_bytes = MYSQL_RESULT($result,$i,"trx_lock_memory_bytes");
	$thisTrx_rows_locked = MYSQL_RESULT($result,$i,"trx_rows_locked");
	$thisTrx_rows_modified = MYSQL_RESULT($result,$i,"trx_rows_modified");
	$thisTrx_concurrency_tickets = MYSQL_RESULT($result,$i,"trx_concurrency_tickets");
	$thisTrx_isolation_level = MYSQL_RESULT($result,$i,"trx_isolation_level");
	$thisTrx_unique_checks = MYSQL_RESULT($result,$i,"trx_unique_checks");
	$thisTrx_foreign_key_checks = MYSQL_RESULT($result,$i,"trx_foreign_key_checks");
	$thisTrx_last_foreign_key_error = MYSQL_RESULT($result,$i,"trx_last_foreign_key_error");
	$thisTrx_adaptive_hash_latched = MYSQL_RESULT($result,$i,"trx_adaptive_hash_latched");
	$thisTrx_adaptive_hash_timeout = MYSQL_RESULT($result,$i,"trx_adaptive_hash_timeout");
	$thisTrx_id = highlightSearchTerms($thisTrx_id, $thisKeyword, $highlightColor); 
	$thisTrx_state = highlightSearchTerms($thisTrx_state, $thisKeyword, $highlightColor); 
	$thisTrx_started = highlightSearchTerms($thisTrx_started, $thisKeyword, $highlightColor); 
	$thisTrx_requested_lock_id = highlightSearchTerms($thisTrx_requested_lock_id, $thisKeyword, $highlightColor); 
	$thisTrx_wait_started = highlightSearchTerms($thisTrx_wait_started, $thisKeyword, $highlightColor); 
	$thisTrx_weight = highlightSearchTerms($thisTrx_weight, $thisKeyword, $highlightColor); 
	$thisTrx_mysql_thread_id = highlightSearchTerms($thisTrx_mysql_thread_id, $thisKeyword, $highlightColor); 
	$thisTrx_query = highlightSearchTerms($thisTrx_query, $thisKeyword, $highlightColor); 
	$thisTrx_operation_state = highlightSearchTerms($thisTrx_operation_state, $thisKeyword, $highlightColor); 
	$thisTrx_tables_in_use = highlightSearchTerms($thisTrx_tables_in_use, $thisKeyword, $highlightColor); 
	$thisTrx_tables_locked = highlightSearchTerms($thisTrx_tables_locked, $thisKeyword, $highlightColor); 
	$thisTrx_lock_structs = highlightSearchTerms($thisTrx_lock_structs, $thisKeyword, $highlightColor); 
	$thisTrx_lock_memory_bytes = highlightSearchTerms($thisTrx_lock_memory_bytes, $thisKeyword, $highlightColor); 
	$thisTrx_rows_locked = highlightSearchTerms($thisTrx_rows_locked, $thisKeyword, $highlightColor); 
	$thisTrx_rows_modified = highlightSearchTerms($thisTrx_rows_modified, $thisKeyword, $highlightColor); 
	$thisTrx_concurrency_tickets = highlightSearchTerms($thisTrx_concurrency_tickets, $thisKeyword, $highlightColor); 
	$thisTrx_isolation_level = highlightSearchTerms($thisTrx_isolation_level, $thisKeyword, $highlightColor); 
	$thisTrx_unique_checks = highlightSearchTerms($thisTrx_unique_checks, $thisKeyword, $highlightColor); 
	$thisTrx_foreign_key_checks = highlightSearchTerms($thisTrx_foreign_key_checks, $thisKeyword, $highlightColor); 
	$thisTrx_last_foreign_key_error = highlightSearchTerms($thisTrx_last_foreign_key_error, $thisKeyword, $highlightColor); 
	$thisTrx_adaptive_hash_latched = highlightSearchTerms($thisTrx_adaptive_hash_latched, $thisKeyword, $highlightColor); 
	$thisTrx_adaptive_hash_timeout = highlightSearchTerms($thisTrx_adaptive_hash_timeout, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisTrx_id; ?></TD>
		<TD><? echo $thisTrx_state; ?></TD>
		<TD><? echo $thisTrx_started; ?></TD>
		<TD><? echo $thisTrx_requested_lock_id; ?></TD>
		<TD><? echo $thisTrx_wait_started; ?></TD>
		<TD><? echo $thisTrx_weight; ?></TD>
		<TD><? echo $thisTrx_mysql_thread_id; ?></TD>
		<TD><? echo $thisTrx_query; ?></TD>
		<TD><? echo $thisTrx_operation_state; ?></TD>
		<TD><? echo $thisTrx_tables_in_use; ?></TD>
		<TD><? echo $thisTrx_tables_locked; ?></TD>
		<TD><? echo $thisTrx_lock_structs; ?></TD>
		<TD><? echo $thisTrx_lock_memory_bytes; ?></TD>
		<TD><? echo $thisTrx_rows_locked; ?></TD>
		<TD><? echo $thisTrx_rows_modified; ?></TD>
		<TD><? echo $thisTrx_concurrency_tickets; ?></TD>
		<TD><? echo $thisTrx_isolation_level; ?></TD>
		<TD><? echo $thisTrx_unique_checks; ?></TD>
		<TD><? echo $thisTrx_foreign_key_checks; ?></TD>
		<TD><? echo $thisTrx_last_foreign_key_error; ?></TD>
		<TD><? echo $thisTrx_adaptive_hash_latched; ?></TD>
		<TD><? echo $thisTrx_adaptive_hash_timeout; ?></TD>
	<TD><a href="editINNODB_TRX.php?trx_idField=<? echo $thisTrx_id; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteINNODB_TRX.php?trx_idField=<? echo $thisTrx_id; ?>">Delete</a></TD>
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