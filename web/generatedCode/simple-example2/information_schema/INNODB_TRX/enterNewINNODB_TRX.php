<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter INNODB_TRX</h2>
<form name="innodb_trxEnterForm" method="POST" action="insertNewInnodb_trx.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_id :  </b> </td>
		<td> <input type="text" name="thisTrx_idField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_state :  </b> </td>
		<td> <input type="text" name="thisTrx_stateField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_started :  </b> </td>
		<td> <input type="text" name="thisTrx_startedField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_requested_lock_id :  </b> </td>
		<td> <input type="text" name="thisTrx_requested_lock_idField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_wait_started :  </b> </td>
		<td> <input type="text" name="thisTrx_wait_startedField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_weight :  </b> </td>
		<td> <input type="text" name="thisTrx_weightField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_mysql_thread_id :  </b> </td>
		<td> <input type="text" name="thisTrx_mysql_thread_idField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_query :  </b> </td>
		<td> <input type="text" name="thisTrx_queryField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_operation_state :  </b> </td>
		<td> <input type="text" name="thisTrx_operation_stateField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_tables_in_use :  </b> </td>
		<td> <input type="text" name="thisTrx_tables_in_useField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_tables_locked :  </b> </td>
		<td> <input type="text" name="thisTrx_tables_lockedField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_lock_structs :  </b> </td>
		<td> <input type="text" name="thisTrx_lock_structsField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_lock_memory_bytes :  </b> </td>
		<td> <input type="text" name="thisTrx_lock_memory_bytesField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_rows_locked :  </b> </td>
		<td> <input type="text" name="thisTrx_rows_lockedField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_rows_modified :  </b> </td>
		<td> <input type="text" name="thisTrx_rows_modifiedField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_concurrency_tickets :  </b> </td>
		<td> <input type="text" name="thisTrx_concurrency_ticketsField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_isolation_level :  </b> </td>
		<td> <input type="text" name="thisTrx_isolation_levelField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_unique_checks :  </b> </td>
		<td> <input type="text" name="thisTrx_unique_checksField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_foreign_key_checks :  </b> </td>
		<td> <input type="text" name="thisTrx_foreign_key_checksField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_last_foreign_key_error :  </b> </td>
		<td> <input type="text" name="thisTrx_last_foreign_key_errorField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_adaptive_hash_latched :  </b> </td>
		<td> <input type="text" name="thisTrx_adaptive_hash_latchedField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Trx_adaptive_hash_timeout :  </b> </td>
		<td> <input type="text" name="thisTrx_adaptive_hash_timeoutField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterINNODB_TRXForm" value="Enter INNODB_TRX">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>