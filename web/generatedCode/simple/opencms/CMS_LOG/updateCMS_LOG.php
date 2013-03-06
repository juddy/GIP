<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisLOG_DATE = addslashes($_REQUEST['thisLOG_DATEField']);
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);
	$thisLOG_TYPE = addslashes($_REQUEST['thisLOG_TYPEField']);
	$thisLOG_DATA = addslashes($_REQUEST['thisLOG_DATAField']);

?>
<?
$sql = "UPDATE CMS_LOG SET USER_ID = '$thisUSER_ID' , LOG_DATE = '$thisLOG_DATE' , STRUCTURE_ID = '$thisSTRUCTURE_ID' , LOG_TYPE = '$thisLOG_TYPE' , LOG_DATA = '$thisLOG_DATA'  WHERE USER_ID = '$thisUSER_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

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
<br><br><a href="listCMS_LOG.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>