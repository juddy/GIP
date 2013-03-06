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
$sql = "UPDATE INNODB_LOCK_WAITS SET requesting_trx_id = '$thisRequesting_trx_id' , requested_lock_id = '$thisRequested_lock_id' , blocking_trx_id = '$thisBlocking_trx_id' , blocking_lock_id = '$thisBlocking_lock_id'  WHERE requesting_trx_id = '$thisRequesting_trx_id'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

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
<br><br><a href="listINNODB_LOCK_WAITS.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>