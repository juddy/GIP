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
$sqlQuery = "INSERT INTO INNODB_LOCKS (lock_id , lock_trx_id , lock_mode , lock_type , lock_table , lock_index , lock_space , lock_page , lock_rec , lock_data ) VALUES ('$thisLock_id' , '$thisLock_trx_id' , '$thisLock_mode' , '$thisLock_type' , '$thisLock_table' , '$thisLock_index' , '$thisLock_space' , '$thisLock_page' , '$thisLock_rec' , '$thisLock_data' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

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