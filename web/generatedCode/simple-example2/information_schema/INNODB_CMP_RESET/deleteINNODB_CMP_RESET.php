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
$sql = "DELETE FROM INNODB_CMP_RESET WHERE page_size = '$thisPage_size'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

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

<?php
include_once("../common/footer.php");
?>