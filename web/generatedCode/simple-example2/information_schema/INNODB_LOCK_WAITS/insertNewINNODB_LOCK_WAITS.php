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
$sqlQuery = "INSERT INTO INNODB_LOCK_WAITS (requesting_trx_id , requested_lock_id , blocking_trx_id , blocking_lock_id ) VALUES ('$thisRequesting_trx_id' , '$thisRequested_lock_id' , '$thisBlocking_trx_id' , '$thisBlocking_lock_id' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

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