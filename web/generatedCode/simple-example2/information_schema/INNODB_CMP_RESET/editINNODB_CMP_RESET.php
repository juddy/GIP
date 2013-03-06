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

<h2>Update INNODB_CMP_RESET</h2>
<form name="innodb_cmp_resetUpdateForm" method="POST" action="updateInnodb_cmp_reset.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> Page_size :  </b> </td>
		<td> <input type="text" name="thisPage_sizeField" size="20" value="<? echo $thisPage_size; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Compress_ops :  </b> </td>
		<td> <input type="text" name="thisCompress_opsField" size="20" value="<? echo $thisCompress_ops; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Compress_ops_ok :  </b> </td>
		<td> <input type="text" name="thisCompress_ops_okField" size="20" value="<? echo $thisCompress_ops_ok; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Compress_time :  </b> </td>
		<td> <input type="text" name="thisCompress_timeField" size="20" value="<? echo $thisCompress_time; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Uncompress_ops :  </b> </td>
		<td> <input type="text" name="thisUncompress_opsField" size="20" value="<? echo $thisUncompress_ops; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Uncompress_time :  </b> </td>
		<td> <input type="text" name="thisUncompress_timeField" size="20" value="<? echo $thisUncompress_time; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateINNODB_CMP_RESETForm" value="Update INNODB_CMP_RESET">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>