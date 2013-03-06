<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisDATA_KEY = addslashes($_REQUEST['thisDATA_KEYField']);
	$thisDATA_VALUE = addslashes($_REQUEST['thisDATA_VALUEField']);
	$thisDATA_TYPE = addslashes($_REQUEST['thisDATA_TYPEField']);

?>
<?
$sql = "DELETE FROM CMS_USERDATA WHERE USER_ID = '$thisUSER_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

<table>
<tr height="30">
	<td align="right"><b>USER_ID : </b></td>
	<td><? echo $thisUSER_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATA_KEY : </b></td>
	<td><? echo $thisDATA_KEY; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATA_VALUE : </b></td>
	<td><? echo $thisDATA_VALUE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATA_TYPE : </b></td>
	<td><? echo $thisDATA_TYPE; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>