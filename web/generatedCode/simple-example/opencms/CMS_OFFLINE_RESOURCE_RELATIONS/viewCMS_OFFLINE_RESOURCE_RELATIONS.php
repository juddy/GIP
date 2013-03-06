<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisRELATION_SOURCE_ID = $_REQUEST['RELATION_SOURCE_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_OFFLINE_RESOURCE_RELATIONS WHERE RELATION_SOURCE_ID = '$thisRELATION_SOURCE_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisRELATION_SOURCE_ID = MYSQL_RESULT($result,$i,"RELATION_SOURCE_ID");
	$thisRELATION_SOURCE_PATH = MYSQL_RESULT($result,$i,"RELATION_SOURCE_PATH");
	$thisRELATION_TARGET_ID = MYSQL_RESULT($result,$i,"RELATION_TARGET_ID");
	$thisRELATION_TARGET_PATH = MYSQL_RESULT($result,$i,"RELATION_TARGET_PATH");
	$thisRELATION_TYPE = MYSQL_RESULT($result,$i,"RELATION_TYPE");

}
?>

View Record<br><br>

<table>
<tr height="30">
	<td align="right"><b>RELATION_SOURCE_ID : </b></td>
	<td><? echo $thisRELATION_SOURCE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RELATION_SOURCE_PATH : </b></td>
	<td><? echo $thisRELATION_SOURCE_PATH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RELATION_TARGET_ID : </b></td>
	<td><? echo $thisRELATION_TARGET_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RELATION_TARGET_PATH : </b></td>
	<td><? echo $thisRELATION_TARGET_PATH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RELATION_TYPE : </b></td>
	<td><? echo $thisRELATION_TYPE; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>