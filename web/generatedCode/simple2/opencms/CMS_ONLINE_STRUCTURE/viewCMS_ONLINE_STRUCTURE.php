<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisSTRUCTURE_ID = $_REQUEST['STRUCTURE_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_ONLINE_STRUCTURE WHERE STRUCTURE_ID = '$thisSTRUCTURE_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisSTRUCTURE_ID = MYSQL_RESULT($result,$i,"STRUCTURE_ID");
	$thisRESOURCE_ID = MYSQL_RESULT($result,$i,"RESOURCE_ID");
	$thisPARENT_ID = MYSQL_RESULT($result,$i,"PARENT_ID");
	$thisRESOURCE_PATH = MYSQL_RESULT($result,$i,"RESOURCE_PATH");
	$thisSTRUCTURE_STATE = MYSQL_RESULT($result,$i,"STRUCTURE_STATE");
	$thisDATE_RELEASED = MYSQL_RESULT($result,$i,"DATE_RELEASED");
	$thisDATE_EXPIRED = MYSQL_RESULT($result,$i,"DATE_EXPIRED");
	$thisSTRUCTURE_VERSION = MYSQL_RESULT($result,$i,"STRUCTURE_VERSION");

}
?>

View Record<br><br>

<table>
<tr height="30">
	<td align="right"><b>STRUCTURE_ID : </b></td>
	<td><? echo $thisSTRUCTURE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_ID : </b></td>
	<td><? echo $thisRESOURCE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PARENT_ID : </b></td>
	<td><? echo $thisPARENT_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_PATH : </b></td>
	<td><? echo $thisRESOURCE_PATH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STRUCTURE_STATE : </b></td>
	<td><? echo $thisSTRUCTURE_STATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATE_RELEASED : </b></td>
	<td><? echo $thisDATE_RELEASED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATE_EXPIRED : </b></td>
	<td><? echo $thisDATE_EXPIRED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STRUCTURE_VERSION : </b></td>
	<td><? echo $thisSTRUCTURE_VERSION; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>