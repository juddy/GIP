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

<h2>Confirm Record Deletion</h2><br><br>

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

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="innodb_lock_waitsEnterForm" method="POST" action="deleteINNODB_LOCK_WAITS.php">
<input type="hidden" name="thisRequesting_trx_idField" value="<? echo $thisRequesting_trx_id; ?>">
<input type="submit" name="submitConfirmDeleteINNODB_LOCK_WAITSForm" value="Delete  from INNODB_LOCK_WAITS">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>