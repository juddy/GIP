<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPage_size = $_REQUEST['page_sizeField']
?>
<?php
$sql = "SELECT   * FROM INNODB_CMP_RESET WHERE page_size = '$thisPage_size'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisPage_size = MYSQL_RESULT($result,$i,"page_size");
	$thisCompress_ops = MYSQL_RESULT($result,$i,"compress_ops");
	$thisCompress_ops_ok = MYSQL_RESULT($result,$i,"compress_ops_ok");
	$thisCompress_time = MYSQL_RESULT($result,$i,"compress_time");
	$thisUncompress_ops = MYSQL_RESULT($result,$i,"uncompress_ops");
	$thisUncompress_time = MYSQL_RESULT($result,$i,"uncompress_time");

}
?>

View Record<br><br>

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