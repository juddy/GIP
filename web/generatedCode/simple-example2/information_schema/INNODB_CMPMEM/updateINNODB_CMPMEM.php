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
$sql = "UPDATE INNODB_CMPMEM SET page_size = '$thisPage_size' , buffer_pool_instance = '$thisBuffer_pool_instance' , pages_used = '$thisPages_used' , pages_free = '$thisPages_free' , relocation_ops = '$thisRelocation_ops' , relocation_time = '$thisRelocation_time'  WHERE page_size = '$thisPage_size'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

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
<br><br><a href="listINNODB_CMPMEM.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>