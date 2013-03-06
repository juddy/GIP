<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPUBLISH_TAG = $_REQUEST['PUBLISH_TAGField']
?>
<?php
$sql = "SELECT   * FROM CMS_HISTORY_STRUCTURE WHERE PUBLISH_TAG = '$thisPUBLISH_TAG'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisPUBLISH_TAG = MYSQL_RESULT($result,$i,"PUBLISH_TAG");
	$thisVERSION = MYSQL_RESULT($result,$i,"VERSION");
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
	<td align="right"><b>PUBLISH_TAG : </b></td>
	<td><? echo $thisPUBLISH_TAG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>VERSION : </b></td>
	<td><? echo $thisVERSION; ?></td>
</tr>
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