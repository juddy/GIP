<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisPage_size = addslashes($_REQUEST['thisPage_sizeField']);
	$thisBuffer_pool_instance = addslashes($_REQUEST['thisBuffer_pool_instanceField']);
	$thisPages_used = addslashes($_REQUEST['thisPages_usedField']);
	$thisPages_free = addslashes($_REQUEST['thisPages_freeField']);
	$thisRelocation_ops = addslashes($_REQUEST['thisRelocation_opsField']);
	$thisRelocation_time = addslashes($_REQUEST['thisRelocation_timeField']);

?>
<?
$sql = "DELETE FROM INNODB_CMPMEM WHERE page_size = '$thisPage_size'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

<table>
<tr height="30">
	<td align="right"><b>Page_size : </b></td>
	<td><? echo $thisPage_size; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Buffer_pool_instance : </b></td>
	<td><? echo $thisBuffer_pool_instance; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Pages_used : </b></td>
	<td><? echo $thisPages_used; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Pages_free : </b></td>
	<td><? echo $thisPages_free; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Relocation_ops : </b></td>
	<td><? echo $thisRelocation_ops; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Relocation_time : </b></td>
	<td><? echo $thisRelocation_time; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>