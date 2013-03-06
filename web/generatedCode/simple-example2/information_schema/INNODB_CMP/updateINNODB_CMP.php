<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisPage_size = addslashes($_REQUEST['thisPage_sizeField']);
	$thisCompress_ops = addslashes($_REQUEST['thisCompress_opsField']);
	$thisCompress_ops_ok = addslashes($_REQUEST['thisCompress_ops_okField']);
	$thisCompress_time = addslashes($_REQUEST['thisCompress_timeField']);
	$thisUncompress_ops = addslashes($_REQUEST['thisUncompress_opsField']);
	$thisUncompress_time = addslashes($_REQUEST['thisUncompress_timeField']);

?>
<?
$sql = "UPDATE INNODB_CMP SET page_size = '$thisPage_size' , compress_ops = '$thisCompress_ops' , compress_ops_ok = '$thisCompress_ops_ok' , compress_time = '$thisCompress_time' , uncompress_ops = '$thisUncompress_ops' , uncompress_time = '$thisUncompress_time'  WHERE page_size = '$thisPage_size'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>Page_size : </b></td>
	<td><? echo $thisPage_size; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Compress_ops : </b></td>
	<td><? echo $thisCompress_ops; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Compress_ops_ok : </b></td>
	<td><? echo $thisCompress_ops_ok; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Compress_time : </b></td>
	<td><? echo $thisCompress_time; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Uncompress_ops : </b></td>
	<td><? echo $thisUncompress_ops; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Uncompress_time : </b></td>
	<td><? echo $thisUncompress_time; ?></td>
</tr>
</table>
<br><br><a href="listINNODB_CMP.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>