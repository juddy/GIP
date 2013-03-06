<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisHISTORY_ID = addslashes($_REQUEST['thisHISTORY_IDField']);
	$thisPUBLISH_TAG = addslashes($_REQUEST['thisPUBLISH_TAGField']);
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisRESOURCE_PATH = addslashes($_REQUEST['thisRESOURCE_PATHField']);
	$thisRESOURCE_STATE = addslashes($_REQUEST['thisRESOURCE_STATEField']);
	$thisRESOURCE_TYPE = addslashes($_REQUEST['thisRESOURCE_TYPEField']);
	$thisSIBLING_COUNT = addslashes($_REQUEST['thisSIBLING_COUNTField']);

?>
<?
$sql = "DELETE FROM CMS_PUBLISH_HISTORY WHERE HISTORY_ID = '$thisHISTORY_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

<table>
<tr height="30">
	<td align="right"><b>HISTORY_ID : </b></td>
	<td><? echo $thisHISTORY_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PUBLISH_TAG : </b></td>
	<td><? echo $thisPUBLISH_TAG; ?></td>
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
	<td align="right"><b>RESOURCE_PATH : </b></td>
	<td><? echo $thisRESOURCE_PATH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_STATE : </b></td>
	<td><? echo $thisRESOURCE_STATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_TYPE : </b></td>
	<td><? echo $thisRESOURCE_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SIBLING_COUNT : </b></td>
	<td><? echo $thisSIBLING_COUNT; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>