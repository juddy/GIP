<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisUSER_ID = $_REQUEST['USER_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_USERDATA WHERE USER_ID = '$thisUSER_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisUSER_ID = MYSQL_RESULT($result,$i,"USER_ID");
	$thisDATA_KEY = MYSQL_RESULT($result,$i,"DATA_KEY");
	$thisDATA_VALUE = MYSQL_RESULT($result,$i,"DATA_VALUE");
	$thisDATA_TYPE = MYSQL_RESULT($result,$i,"DATA_TYPE");

}
?>

View Record<br><br>

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