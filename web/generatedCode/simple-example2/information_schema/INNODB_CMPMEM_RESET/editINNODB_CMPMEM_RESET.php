<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPage_size = $_REQUEST['page_sizeField']
?>
<?php
$sql = "SELECT   * FROM INNODB_CMPMEM_RESET WHERE page_size = '$thisPage_size'";
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

<h2>Update INNODB_CMPMEM_RESET</h2>
<form name="innodb_cmpmem_resetUpdateForm" method="POST" action="updateInnodb_cmpmem_reset.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> Page_size :  </b> </td>
		<td> <input type="text" name="thisPage_sizeField" size="20" value="<? echo $thisPage_size; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Buffer_pool_instance :  </b> </td>
		<td> <input type="text" name="thisBuffer_pool_instanceField" size="20" value="<? echo $thisBuffer_pool_instance; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Pages_used :  </b> </td>
		<td> <input type="text" name="thisPages_usedField" size="20" value="<? echo $thisPages_used; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Pages_free :  </b> </td>
		<td> <input type="text" name="thisPages_freeField" size="20" value="<? echo $thisPages_free; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Relocation_ops :  </b> </td>
		<td> <input type="text" name="thisRelocation_opsField" size="20" value="<? echo $thisRelocation_ops; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Relocation_time :  </b> </td>
		<td> <input type="text" name="thisRelocation_timeField" size="20" value="<? echo $thisRelocation_time; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateINNODB_CMPMEM_RESETForm" value="Update INNODB_CMPMEM_RESET">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>