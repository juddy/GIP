<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPage_size = $_REQUEST['page_sizeField']
?>
<?php
$sql = "SELECT   * FROM INNODB_CMPMEM WHERE page_size = '$thisPage_size'";
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
	$thisBuffer_pool_instance = MYSQL_RESULT($result,$i,"buffer_pool_instance");
	$thisPages_used = MYSQL_RESULT($result,$i,"pages_used");
	$thisPages_free = MYSQL_RESULT($result,$i,"pages_free");
	$thisRelocation_ops = MYSQL_RESULT($result,$i,"relocation_ops");
	$thisRelocation_time = MYSQL_RESULT($result,$i,"relocation_time");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

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

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="innodb_cmpmemEnterForm" method="POST" action="deleteINNODB_CMPMEM.php">
<input type="hidden" name="thisPage_sizeField" value="<? echo $thisPage_size; ?>">
<input type="submit" name="submitConfirmDeleteINNODB_CMPMEMForm" value="Delete  from INNODB_CMPMEM">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>