<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisPARENT_ID = addslashes($_REQUEST['thisPARENT_IDField']);
	$thisRESOURCE_PATH = addslashes($_REQUEST['thisRESOURCE_PATHField']);
	$thisSTRUCTURE_STATE = addslashes($_REQUEST['thisSTRUCTURE_STATEField']);
	$thisDATE_RELEASED = addslashes($_REQUEST['thisDATE_RELEASEDField']);
	$thisDATE_EXPIRED = addslashes($_REQUEST['thisDATE_EXPIREDField']);
	$thisSTRUCTURE_VERSION = addslashes($_REQUEST['thisSTRUCTURE_VERSIONField']);

?>
<?
$sql = "DELETE FROM CMS_ONLINE_STRUCTURE WHERE STRUCTURE_ID = '$thisSTRUCTURE_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

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