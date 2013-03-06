<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$initStartLimit = 0;
$limitPerPage = 10;

$startLimit = $_REQUEST['startLimit'];
$numberOfRows = $_REQUEST['rows'];
$sortBy = $_REQUEST['sortBy'];
$sortOrder = $_REQUEST['sortOrder'];

if ($startLimit=="")
{
		$startLimit = $initStartLimit;
}

if ($numberOfRows=="")
{
		$numberOfRows = $limitPerPage;
}

if ($sortOrder=="")
{
		$sortOrder  = "DESC";
}
if ($sortOrder == "DESC") { $newSortOrder = "ASC"; } else  { $newSortOrder = "DESC"; }
$limitQuery = " LIMIT ".$startLimit.",".$numberOfRows;
$nextStartLimit = $startLimit + $limitPerPage;
$previousStartLimit = $startLimit - $limitPerPage;

if ($sortBy!="")
{
		$orderByQuery = " ORDER BY ".$sortBy." ".$sortOrder;
}


$sql = "SELECT   * FROM INNODB_TRX".$orderByQuery.$limitQuery;
$result = MYSQL_QUERY($sql);
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


<br>
<?
if ($_REQUEST['startLimit'] != "")
{
?>

<a href="<? echo  $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $previousStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Previous <? echo $limitPerPage; ?> Results</a>....
<? } ?>
<?
if ($numberOfRows == $limitPerPage)
{
?>
<a href="<? echo $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $nextStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Next <? echo $limitPerPage; ?> Results</a>
<? } ?>

<br><br>
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


<br>
<?
if ($_REQUEST['startLimit'] != "")
{
?>

<a href="<? echo  $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $previousStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Previous <? echo $limitPerPage; ?> Results</a>....
<? } ?>
<?
if ($numberOfRows == $limitPerPage)
{
?>
<a href="<? echo $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $nextStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Next <? echo $limitPerPage; ?> Results</a>
<? } ?>

<br><br>
<?
} // end of if numberOfRows > 0 
 ?>

<?php
include_once("../common/footer.php");
?>