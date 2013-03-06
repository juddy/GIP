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

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>Lock_id : </b></td>
	<td><? echo $thisLock_id; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Lock_trx_id : </b></td>
	<td><? echo $thisLock_trx_id; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Lock_mode : </b></td>
	<td><? echo $thisLock_mode; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Lock_type : </b></td>
	<td><? echo $thisLock_type; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Lock_table : </b></td>
	<td><? echo $thisLock_table; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Lock_index : </b></td>
	<td><? echo $thisLock_index; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Lock_space : </b></td>
	<td><? echo $thisLock_space; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Lock_page : </b></td>
	<td><? echo $thisLock_page; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Lock_rec : </b></td>
	<td><? echo $thisLock_rec; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Lock_data : </b></td>
	<td><? echo $thisLock_data; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="innodb_locksEnterForm" method="POST" action="deleteINNODB_LOCKS.php">
<input type="hidden" name="thisLock_idField" value="<? echo $thisLock_id; ?>">
<input type="submit" name="submitConfirmDeleteINNODB_LOCKSForm" value="Delete  from INNODB_LOCKS">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>