<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisLock_id = addslashes($_REQUEST['thisLock_idField']);
	$thisLock_trx_id = addslashes($_REQUEST['thisLock_trx_idField']);
	$thisLock_mode = addslashes($_REQUEST['thisLock_modeField']);
	$thisLock_type = addslashes($_REQUEST['thisLock_typeField']);
	$thisLock_table = addslashes($_REQUEST['thisLock_tableField']);
	$thisLock_index = addslashes($_REQUEST['thisLock_indexField']);
	$thisLock_space = addslashes($_REQUEST['thisLock_spaceField']);
	$thisLock_page = addslashes($_REQUEST['thisLock_pageField']);
	$thisLock_rec = addslashes($_REQUEST['thisLock_recField']);
	$thisLock_data = addslashes($_REQUEST['thisLock_dataField']);

?>
<?
$sql = "DELETE FROM INNODB_LOCKS WHERE lock_id = '$thisLock_id'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

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

<?php
include_once("../common/footer.php");
?>