<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisTrx_idFromForm = $_REQUEST['thisTrx_idField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisTrx_id = addslashes($_REQUEST['thisTrx_idField']);
	$thisTrx_state = addslashes($_REQUEST['thisTrx_stateField']);
	$thisTrx_started = addslashes($_REQUEST['thisTrx_startedField']);
	$thisTrx_requested_lock_id = addslashes($_REQUEST['thisTrx_requested_lock_idField']);
	$thisTrx_wait_started = addslashes($_REQUEST['thisTrx_wait_startedField']);
	$thisTrx_weight = addslashes($_REQUEST['thisTrx_weightField']);
	$thisTrx_mysql_thread_id = addslashes($_REQUEST['thisTrx_mysql_thread_idField']);
	$thisTrx_query = addslashes($_REQUEST['thisTrx_queryField']);
	$thisTrx_operation_state = addslashes($_REQUEST['thisTrx_operation_stateField']);
	$thisTrx_tables_in_use = addslashes($_REQUEST['thisTrx_tables_in_useField']);
	$thisTrx_tables_locked = addslashes($_REQUEST['thisTrx_tables_lockedField']);
	$thisTrx_lock_structs = addslashes($_REQUEST['thisTrx_lock_structsField']);
	$thisTrx_lock_memory_bytes = addslashes($_REQUEST['thisTrx_lock_memory_bytesField']);
	$thisTrx_rows_locked = addslashes($_REQUEST['thisTrx_rows_lockedField']);
	$thisTrx_rows_modified = addslashes($_REQUEST['thisTrx_rows_modifiedField']);
	$thisTrx_concurrency_tickets = addslashes($_REQUEST['thisTrx_concurrency_ticketsField']);
	$thisTrx_isolation_level = addslashes($_REQUEST['thisTrx_isolation_levelField']);
	$thisTrx_unique_checks = addslashes($_REQUEST['thisTrx_unique_checksField']);
	$thisTrx_foreign_key_checks = addslashes($_REQUEST['thisTrx_foreign_key_checksField']);
	$thisTrx_last_foreign_key_error = addslashes($_REQUEST['thisTrx_last_foreign_key_errorField']);
	$thisTrx_adaptive_hash_latched = addslashes($_REQUEST['thisTrx_adaptive_hash_latchedField']);
	$thisTrx_adaptive_hash_timeout = addslashes($_REQUEST['thisTrx_adaptive_hash_timeoutField']);

	$sqlUpdate = "UPDATE INNODB_TRX SET trx_id = '$thisTrx_id' , trx_state = '$thisTrx_state' , trx_started = '$thisTrx_started' , trx_requested_lock_id = '$thisTrx_requested_lock_id' , trx_wait_started = '$thisTrx_wait_started' , trx_weight = '$thisTrx_weight' , trx_mysql_thread_id = '$thisTrx_mysql_thread_id' , trx_query = '$thisTrx_query' , trx_operation_state = '$thisTrx_operation_state' , trx_tables_in_use = '$thisTrx_tables_in_use' , trx_tables_locked = '$thisTrx_tables_locked' , trx_lock_structs = '$thisTrx_lock_structs' , trx_lock_memory_bytes = '$thisTrx_lock_memory_bytes' , trx_rows_locked = '$thisTrx_rows_locked' , trx_rows_modified = '$thisTrx_rows_modified' , trx_concurrency_tickets = '$thisTrx_concurrency_tickets' , trx_isolation_level = '$thisTrx_isolation_level' , trx_unique_checks = '$thisTrx_unique_checks' , trx_foreign_key_checks = '$thisTrx_foreign_key_checks' , trx_last_foreign_key_error = '$thisTrx_last_foreign_key_error' , trx_adaptive_hash_latched = '$thisTrx_adaptive_hash_latched' , trx_adaptive_hash_timeout = '$thisTrx_adaptive_hash_timeout'  WHERE trx_id = '$thisTrx_id'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisTrx_idFromForm." has been Updated<br></b>";
	$thisTrx_idFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisTrx_id = addslashes($_REQUEST['thisTrx_idField']);
	$thisTrx_state = addslashes($_REQUEST['thisTrx_stateField']);
	$thisTrx_started = addslashes($_REQUEST['thisTrx_startedField']);
	$thisTrx_requested_lock_id = addslashes($_REQUEST['thisTrx_requested_lock_idField']);
	$thisTrx_wait_started = addslashes($_REQUEST['thisTrx_wait_startedField']);
	$thisTrx_weight = addslashes($_REQUEST['thisTrx_weightField']);
	$thisTrx_mysql_thread_id = addslashes($_REQUEST['thisTrx_mysql_thread_idField']);
	$thisTrx_query = addslashes($_REQUEST['thisTrx_queryField']);
	$thisTrx_operation_state = addslashes($_REQUEST['thisTrx_operation_stateField']);
	$thisTrx_tables_in_use = addslashes($_REQUEST['thisTrx_tables_in_useField']);
	$thisTrx_tables_locked = addslashes($_REQUEST['thisTrx_tables_lockedField']);
	$thisTrx_lock_structs = addslashes($_REQUEST['thisTrx_lock_structsField']);
	$thisTrx_lock_memory_bytes = addslashes($_REQUEST['thisTrx_lock_memory_bytesField']);
	$thisTrx_rows_locked = addslashes($_REQUEST['thisTrx_rows_lockedField']);
	$thisTrx_rows_modified = addslashes($_REQUEST['thisTrx_rows_modifiedField']);
	$thisTrx_concurrency_tickets = addslashes($_REQUEST['thisTrx_concurrency_ticketsField']);
	$thisTrx_isolation_level = addslashes($_REQUEST['thisTrx_isolation_levelField']);
	$thisTrx_unique_checks = addslashes($_REQUEST['thisTrx_unique_checksField']);
	$thisTrx_foreign_key_checks = addslashes($_REQUEST['thisTrx_foreign_key_checksField']);
	$thisTrx_last_foreign_key_error = addslashes($_REQUEST['thisTrx_last_foreign_key_errorField']);
	$thisTrx_adaptive_hash_latched = addslashes($_REQUEST['thisTrx_adaptive_hash_latchedField']);
	$thisTrx_adaptive_hash_timeout = addslashes($_REQUEST['thisTrx_adaptive_hash_timeoutField']);

	$sqlInsert = "INSERT INTO INNODB_TRX (trx_id , trx_state , trx_started , trx_requested_lock_id , trx_wait_started , trx_weight , trx_mysql_thread_id , trx_query , trx_operation_state , trx_tables_in_use , trx_tables_locked , trx_lock_structs , trx_lock_memory_bytes , trx_rows_locked , trx_rows_modified , trx_concurrency_tickets , trx_isolation_level , trx_unique_checks , trx_foreign_key_checks , trx_last_foreign_key_error , trx_adaptive_hash_latched , trx_adaptive_hash_timeout ) VALUES ('$thisTrx_id' , '$thisTrx_state' , '$thisTrx_started' , '$thisTrx_requested_lock_id' , '$thisTrx_wait_started' , '$thisTrx_weight' , '$thisTrx_mysql_thread_id' , '$thisTrx_query' , '$thisTrx_operation_state' , '$thisTrx_tables_in_use' , '$thisTrx_tables_locked' , '$thisTrx_lock_structs' , '$thisTrx_lock_memory_bytes' , '$thisTrx_rows_locked' , '$thisTrx_rows_modified' , '$thisTrx_concurrency_tickets' , '$thisTrx_isolation_level' , '$thisTrx_unique_checks' , '$thisTrx_foreign_key_checks' , '$thisTrx_last_foreign_key_error' , '$thisTrx_adaptive_hash_latched' , '$thisTrx_adaptive_hash_timeout' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisTrx_idFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisTrx_id = addslashes($_REQUEST['thisTrx_idField']);
	$thisTrx_state = addslashes($_REQUEST['thisTrx_stateField']);
	$thisTrx_started = addslashes($_REQUEST['thisTrx_startedField']);
	$thisTrx_requested_lock_id = addslashes($_REQUEST['thisTrx_requested_lock_idField']);
	$thisTrx_wait_started = addslashes($_REQUEST['thisTrx_wait_startedField']);
	$thisTrx_weight = addslashes($_REQUEST['thisTrx_weightField']);
	$thisTrx_mysql_thread_id = addslashes($_REQUEST['thisTrx_mysql_thread_idField']);
	$thisTrx_query = addslashes($_REQUEST['thisTrx_queryField']);
	$thisTrx_operation_state = addslashes($_REQUEST['thisTrx_operation_stateField']);
	$thisTrx_tables_in_use = addslashes($_REQUEST['thisTrx_tables_in_useField']);
	$thisTrx_tables_locked = addslashes($_REQUEST['thisTrx_tables_lockedField']);
	$thisTrx_lock_structs = addslashes($_REQUEST['thisTrx_lock_structsField']);
	$thisTrx_lock_memory_bytes = addslashes($_REQUEST['thisTrx_lock_memory_bytesField']);
	$thisTrx_rows_locked = addslashes($_REQUEST['thisTrx_rows_lockedField']);
	$thisTrx_rows_modified = addslashes($_REQUEST['thisTrx_rows_modifiedField']);
	$thisTrx_concurrency_tickets = addslashes($_REQUEST['thisTrx_concurrency_ticketsField']);
	$thisTrx_isolation_level = addslashes($_REQUEST['thisTrx_isolation_levelField']);
	$thisTrx_unique_checks = addslashes($_REQUEST['thisTrx_unique_checksField']);
	$thisTrx_foreign_key_checks = addslashes($_REQUEST['thisTrx_foreign_key_checksField']);
	$thisTrx_last_foreign_key_error = addslashes($_REQUEST['thisTrx_last_foreign_key_errorField']);
	$thisTrx_adaptive_hash_latched = addslashes($_REQUEST['thisTrx_adaptive_hash_latchedField']);
	$thisTrx_adaptive_hash_timeout = addslashes($_REQUEST['thisTrx_adaptive_hash_timeoutField']);

	$sqlDelete = "DELETE FROM INNODB_TRX WHERE trx_id = '$thisTrx_id'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisTrx_idFromForm." has been Deleted<br></b>";
	$thisTrx_idFromForm = "";
}

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
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisTrx_idField" value="<? echo $thisTrx_id; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisTrx_idField" value=""></TD>
		<TD><input type"text" name="thisTrx_stateField" value=""></TD>
		<TD><input type"text" name="thisTrx_startedField" value=""></TD>
		<TD><input type"text" name="thisTrx_requested_lock_idField" value=""></TD>
		<TD><input type"text" name="thisTrx_wait_startedField" value=""></TD>
		<TD><input type"text" name="thisTrx_weightField" value=""></TD>
		<TD><input type"text" name="thisTrx_mysql_thread_idField" value=""></TD>
		<TD><input type"text" name="thisTrx_queryField" value=""></TD>
		<TD><input type"text" name="thisTrx_operation_stateField" value=""></TD>
		<TD><input type"text" name="thisTrx_tables_in_useField" value=""></TD>
		<TD><input type"text" name="thisTrx_tables_lockedField" value=""></TD>
		<TD><input type"text" name="thisTrx_lock_structsField" value=""></TD>
		<TD><input type"text" name="thisTrx_lock_memory_bytesField" value=""></TD>
		<TD><input type"text" name="thisTrx_rows_lockedField" value=""></TD>
		<TD><input type"text" name="thisTrx_rows_modifiedField" value=""></TD>
		<TD><input type"text" name="thisTrx_concurrency_ticketsField" value=""></TD>
		<TD><input type"text" name="thisTrx_isolation_levelField" value=""></TD>
		<TD><input type"text" name="thisTrx_unique_checksField" value=""></TD>
		<TD><input type"text" name="thisTrx_foreign_key_checksField" value=""></TD>
		<TD><input type"text" name="thisTrx_last_foreign_key_errorField" value=""></TD>
		<TD><input type"text" name="thisTrx_adaptive_hash_latchedField" value=""></TD>
		<TD><input type"text" name="thisTrx_adaptive_hash_timeoutField" value=""></TD>
	<TD COLSPAN=2><input type="submit" name="Insert" Value="Insert Record"> </TD>
	</TR>
</FORM>

<?
 } 
?>
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
if ($thisTrx_idFromForm == $thisTrx_id)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisTrx_idField" value="<? echo $thisTrx_id; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisTrx_idField" value="<? echo $thisTrx_id; ?>"></TD>
		<TD><input type"text" name="thisTrx_stateField" value="<? echo $thisTrx_state; ?>"></TD>
		<TD><input type"text" name="thisTrx_startedField" value="<? echo $thisTrx_started; ?>"></TD>
		<TD><input type"text" name="thisTrx_requested_lock_idField" value="<? echo $thisTrx_requested_lock_id; ?>"></TD>
		<TD><input type"text" name="thisTrx_wait_startedField" value="<? echo $thisTrx_wait_started; ?>"></TD>
		<TD><input type"text" name="thisTrx_weightField" value="<? echo $thisTrx_weight; ?>"></TD>
		<TD><input type"text" name="thisTrx_mysql_thread_idField" value="<? echo $thisTrx_mysql_thread_id; ?>"></TD>
		<TD><input type"text" name="thisTrx_queryField" value="<? echo $thisTrx_query; ?>"></TD>
		<TD><input type"text" name="thisTrx_operation_stateField" value="<? echo $thisTrx_operation_state; ?>"></TD>
		<TD><input type"text" name="thisTrx_tables_in_useField" value="<? echo $thisTrx_tables_in_use; ?>"></TD>
		<TD><input type"text" name="thisTrx_tables_lockedField" value="<? echo $thisTrx_tables_locked; ?>"></TD>
		<TD><input type"text" name="thisTrx_lock_structsField" value="<? echo $thisTrx_lock_structs; ?>"></TD>
		<TD><input type"text" name="thisTrx_lock_memory_bytesField" value="<? echo $thisTrx_lock_memory_bytes; ?>"></TD>
		<TD><input type"text" name="thisTrx_rows_lockedField" value="<? echo $thisTrx_rows_locked; ?>"></TD>
		<TD><input type"text" name="thisTrx_rows_modifiedField" value="<? echo $thisTrx_rows_modified; ?>"></TD>
		<TD><input type"text" name="thisTrx_concurrency_ticketsField" value="<? echo $thisTrx_concurrency_tickets; ?>"></TD>
		<TD><input type"text" name="thisTrx_isolation_levelField" value="<? echo $thisTrx_isolation_level; ?>"></TD>
		<TD><input type"text" name="thisTrx_unique_checksField" value="<? echo $thisTrx_unique_checks; ?>"></TD>
		<TD><input type"text" name="thisTrx_foreign_key_checksField" value="<? echo $thisTrx_foreign_key_checks; ?>"></TD>
		<TD><input type"text" name="thisTrx_last_foreign_key_errorField" value="<? echo $thisTrx_last_foreign_key_error; ?>"></TD>
		<TD><input type"text" name="thisTrx_adaptive_hash_latchedField" value="<? echo $thisTrx_adaptive_hash_latched; ?>"></TD>
		<TD><input type"text" name="thisTrx_adaptive_hash_timeoutField" value="<? echo $thisTrx_adaptive_hash_timeout; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
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
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisTrx_idField=<? echo $thisTrx_id; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisTrx_idField=<? echo $thisTrx_id; ?>">Delete</a></TD>
	</TR>

<?
}
?>
<?
		$i++;

	} // end while loop
?>
</TABLE>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="EnterNew">
<input type="Submit" name="submit" value="Insert New Record">
</FORM>


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