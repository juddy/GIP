<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter INNODB_LOCKS</h2>
<form name="innodb_locksEnterForm" method="POST" action="insertNewInnodb_locks.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_id :  </b> </td>
		<td> <input type="text" name="thisLock_idField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_trx_id :  </b> </td>
		<td> <input type="text" name="thisLock_trx_idField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_mode :  </b> </td>
		<td> <input type="text" name="thisLock_modeField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_type :  </b> </td>
		<td> <input type="text" name="thisLock_typeField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_table :  </b> </td>
		<td> <input type="text" name="thisLock_tableField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_index :  </b> </td>
		<td> <input type="text" name="thisLock_indexField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_space :  </b> </td>
		<td> <input type="text" name="thisLock_spaceField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_page :  </b> </td>
		<td> <input type="text" name="thisLock_pageField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_rec :  </b> </td>
		<td> <input type="text" name="thisLock_recField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_data :  </b> </td>
		<td> <input type="text" name="thisLock_dataField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterINNODB_LOCKSForm" value="Enter INNODB_LOCKS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>