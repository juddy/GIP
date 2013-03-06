<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter INNODB_LOCK_WAITS</h2>
<form name="innodb_lock_waitsEnterForm" method="POST" action="insertNewInnodb_lock_waits.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> Requesting_trx_id :  </b> </td>
		<td> <input type="text" name="thisRequesting_trx_idField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Requested_lock_id :  </b> </td>
		<td> <input type="text" name="thisRequested_lock_idField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Blocking_trx_id :  </b> </td>
		<td> <input type="text" name="thisBlocking_trx_idField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Blocking_lock_id :  </b> </td>
		<td> <input type="text" name="thisBlocking_lock_idField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterINNODB_LOCK_WAITSForm" value="Enter INNODB_LOCK_WAITS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>