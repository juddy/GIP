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
$sql = "UPDATE CMS_OFFLINE_STRUCTURE SET STRUCTURE_ID = '$thisSTRUCTURE_ID' , RESOURCE_ID = '$thisRESOURCE_ID' , PARENT_ID = '$thisPARENT_ID' , RESOURCE_PATH = '$thisRESOURCE_PATH' , STRUCTURE_STATE = '$thisSTRUCTURE_STATE' , DATE_RELEASED = '$thisDATE_RELEASED' , DATE_EXPIRED = '$thisDATE_EXPIRED' , STRUCTURE_VERSION = '$thisSTRUCTURE_VERSION'  WHERE STRUCTURE_ID = '$thisSTRUCTURE_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

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
<br><br><a href="listCMS_OFFLINE_STRUCTURE.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>