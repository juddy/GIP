<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
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

?>
<?
$sql = "UPDATE INNODB_TRX SET trx_id = '$thisTrx_id' , trx_state = '$thisTrx_state' , trx_started = '$thisTrx_started' , trx_requested_lock_id = '$thisTrx_requested_lock_id' , trx_wait_started = '$thisTrx_wait_started' , trx_weight = '$thisTrx_weight' , trx_mysql_thread_id = '$thisTrx_mysql_thread_id' , trx_query = '$thisTrx_query' , trx_operation_state = '$thisTrx_operation_state' , trx_tables_in_use = '$thisTrx_tables_in_use' , trx_tables_locked = '$thisTrx_tables_locked' , trx_lock_structs = '$thisTrx_lock_structs' , trx_lock_memory_bytes = '$thisTrx_lock_memory_bytes' , trx_rows_locked = '$thisTrx_rows_locked' , trx_rows_modified = '$thisTrx_rows_modified' , trx_concurrency_tickets = '$thisTrx_concurrency_tickets' , trx_isolation_level = '$thisTrx_isolation_level' , trx_unique_checks = '$thisTrx_unique_checks' , trx_foreign_key_checks = '$thisTrx_foreign_key_checks' , trx_last_foreign_key_error = '$thisTrx_last_foreign_key_error' , trx_adaptive_hash_latched = '$thisTrx_adaptive_hash_latched' , trx_adaptive_hash_timeout = '$thisTrx_adaptive_hash_timeout'  WHERE trx_id = '$thisTrx_id'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>Trx_id : </b></td>
	<td><? echo $thisTrx_id; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_state : </b></td>
	<td><? echo $thisTrx_state; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_started : </b></td>
	<td><? echo $thisTrx_started; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_requested_lock_id : </b></td>
	<td><? echo $thisTrx_requested_lock_id; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_wait_started : </b></td>
	<td><? echo $thisTrx_wait_started; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_weight : </b></td>
	<td><? echo $thisTrx_weight; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_mysql_thread_id : </b></td>
	<td><? echo $thisTrx_mysql_thread_id; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_query : </b></td>
	<td><? echo $thisTrx_query; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_operation_state : </b></td>
	<td><? echo $thisTrx_operation_state; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_tables_in_use : </b></td>
	<td><? echo $thisTrx_tables_in_use; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_tables_locked : </b></td>
	<td><? echo $thisTrx_tables_locked; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_lock_structs : </b></td>
	<td><? echo $thisTrx_lock_structs; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_lock_memory_bytes : </b></td>
	<td><? echo $thisTrx_lock_memory_bytes; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_rows_locked : </b></td>
	<td><? echo $thisTrx_rows_locked; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_rows_modified : </b></td>
	<td><? echo $thisTrx_rows_modified; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_concurrency_tickets : </b></td>
	<td><? echo $thisTrx_concurrency_tickets; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_isolation_level : </b></td>
	<td><? echo $thisTrx_isolation_level; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_unique_checks : </b></td>
	<td><? echo $thisTrx_unique_checks; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_foreign_key_checks : </b></td>
	<td><? echo $thisTrx_foreign_key_checks; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_last_foreign_key_error : </b></td>
	<td><? echo $thisTrx_last_foreign_key_error; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_adaptive_hash_latched : </b></td>
	<td><? echo $thisTrx_adaptive_hash_latched; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Trx_adaptive_hash_timeout : </b></td>
	<td><? echo $thisTrx_adaptive_hash_timeout; ?></td>
</tr>
</table>
<br><br><a href="listINNODB_TRX.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>