<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisRequesting_trx_id = $_REQUEST['requesting_trx_idField']
?>
<?php
$sql = "SELECT   * FROM INNODB_LOCK_WAITS WHERE requesting_trx_id = '$thisRequesting_trx_id'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisRequesting_trx_id = MYSQL_RESULT($result,$i,"requesting_trx_id");
	$thisRequested_lock_id = MYSQL_RESULT($result,$i,"requested_lock_id");
	$thisBlocking_trx_id = MYSQL_RESULT($result,$i,"blocking_trx_id");
	$thisBlocking_lock_id = MYSQL_RESULT($result,$i,"blocking_lock_id");

}
?>

<h2>Update INNODB_LOCK_WAITS</h2>
<form name="innodb_lock_waitsUpdateForm" method="POST" action="updateInnodb_lock_waits.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> Requesting_trx_id :  </b> </td>
		<td> <input type="text" name="thisRequesting_trx_idField" size="20" value="<? echo $thisRequesting_trx_id; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Requested_lock_id :  </b> </td>
		<td> <input type="text" name="thisRequested_lock_idField" size="20" value="<? echo $thisRequested_lock_id; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Blocking_trx_id :  </b> </td>
		<td> <input type="text" name="thisBlocking_trx_idField" size="20" value="<? echo $thisBlocking_trx_id; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Blocking_lock_id :  </b> </td>
		<td> <input type="text" name="thisBlocking_lock_idField" size="20" value="<? echo $thisBlocking_lock_id; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateINNODB_LOCK_WAITSForm" value="Update INNODB_LOCK_WAITS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>