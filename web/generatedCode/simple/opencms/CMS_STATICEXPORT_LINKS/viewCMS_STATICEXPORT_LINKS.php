<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisLINK_ID = $_REQUEST['LINK_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_STATICEXPORT_LINKS WHERE LINK_ID = '$thisLINK_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisLINK_ID = MYSQL_RESULT($result,$i,"LINK_ID");
	$thisLINK_RFS_PATH = MYSQL_RESULT($result,$i,"LINK_RFS_PATH");
	$thisLINK_TYPE = MYSQL_RESULT($result,$i,"LINK_TYPE");
	$thisLINK_PARAMETER = MYSQL_RESULT($result,$i,"LINK_PARAMETER");
	$thisLINK_TIMESTAMP = MYSQL_RESULT($result,$i,"LINK_TIMESTAMP");

}
?>

View Record<br><br>

<table>
<tr height="30">
	<td align="right"><b>LINK_ID : </b></td>
	<td><? echo $thisLINK_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LINK_RFS_PATH : </b></td>
	<td><? echo $thisLINK_RFS_PATH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LINK_TYPE : </b></td>
	<td><? echo $thisLINK_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LINK_PARAMETER : </b></td>
	<td><? echo $thisLINK_PARAMETER; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LINK_TIMESTAMP : </b></td>
	<td><? echo $thisLINK_TIMESTAMP; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>