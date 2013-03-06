<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisLock_id = $_REQUEST['lock_idField']
?>
<?php
$sql = "SELECT   * FROM INNODB_LOCKS WHERE lock_id = '$thisLock_id'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
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

}
?>

<h2>Update INNODB_LOCKS</h2>
<form name="innodb_locksUpdateForm" method="POST" action="updateInnodb_locks.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_id :  </b> </td>
		<td> <input type="text" name="thisLock_idField" size="20" value="<? echo $thisLock_id; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_trx_id :  </b> </td>
		<td> <input type="text" name="thisLock_trx_idField" size="20" value="<? echo $thisLock_trx_id; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_mode :  </b> </td>
		<td> <input type="text" name="thisLock_modeField" size="20" value="<? echo $thisLock_mode; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_type :  </b> </td>
		<td> <input type="text" name="thisLock_typeField" size="20" value="<? echo $thisLock_type; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_table :  </b> </td>
		<td> <input type="text" name="thisLock_tableField" size="20" value="<? echo $thisLock_table; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_index :  </b> </td>
		<td> <input type="text" name="thisLock_indexField" size="20" value="<? echo $thisLock_index; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_space :  </b> </td>
		<td> <input type="text" name="thisLock_spaceField" size="20" value="<? echo $thisLock_space; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_page :  </b> </td>
		<td> <input type="text" name="thisLock_pageField" size="20" value="<? echo $thisLock_page; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_rec :  </b> </td>
		<td> <input type="text" name="thisLock_recField" size="20" value="<? echo $thisLock_rec; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Lock_data :  </b> </td>
		<td> <input type="text" name="thisLock_dataField" size="20" value="<? echo $thisLock_data; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateINNODB_LOCKSForm" value="Update INNODB_LOCKS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>