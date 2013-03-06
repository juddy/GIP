<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisRequesting_trx_id = addslashes($_REQUEST['thisRequesting_trx_idField']);
	$thisRequested_lock_id = addslashes($_REQUEST['thisRequested_lock_idField']);
	$thisBlocking_trx_id = addslashes($_REQUEST['thisBlocking_trx_idField']);
	$thisBlocking_lock_id = addslashes($_REQUEST['thisBlocking_lock_idField']);

?>
<?
$sql = "DELETE FROM INNODB_LOCK_WAITS WHERE requesting_trx_id = '$thisRequesting_trx_id'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

<table>
<tr height="30">
	<td align="right"><b>Requesting_trx_id : </b></td>
	<td><? echo $thisRequesting_trx_id; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Requested_lock_id : </b></td>
	<td><? echo $thisRequested_lock_id; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Blocking_trx_id : </b></td>
	<td><? echo $thisBlocking_trx_id; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Blocking_lock_id : </b></td>
	<td><? echo $thisBlocking_lock_id; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>