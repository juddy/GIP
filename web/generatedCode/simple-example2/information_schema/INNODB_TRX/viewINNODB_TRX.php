<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisTrx_id = $_REQUEST['trx_idField']
?>
<?php
$sql = "SELECT   * FROM INNODB_TRX WHERE trx_id = '$thisTrx_id'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
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

}
?>

View Record<br><br>

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

<?php
include_once("../common/footer.php");
?>