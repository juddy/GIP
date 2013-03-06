<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisUSER_ID = $_REQUEST['USER_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_LOG WHERE USER_ID = '$thisUSER_ID'";
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
	$thisLOG_DATE = MYSQL_RESULT($result,$i,"LOG_DATE");
	$thisSTRUCTURE_ID = MYSQL_RESULT($result,$i,"STRUCTURE_ID");
	$thisLOG_TYPE = MYSQL_RESULT($result,$i,"LOG_TYPE");
	$thisLOG_DATA = MYSQL_RESULT($result,$i,"LOG_DATA");

}
?>

View Record<br><br>

<table>
<tr height="30">
	<td align="right"><b>USER_ID : </b></td>
	<td><? echo $thisUSER_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LOG_DATE : </b></td>
	<td><? echo $thisLOG_DATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STRUCTURE_ID : </b></td>
	<td><? echo $thisSTRUCTURE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LOG_TYPE : </b></td>
	<td><? echo $thisLOG_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LOG_DATA : </b></td>
	<td><? echo $thisLOG_DATA; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>