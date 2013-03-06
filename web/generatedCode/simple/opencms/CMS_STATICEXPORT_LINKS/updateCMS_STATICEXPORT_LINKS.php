<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisLINK_ID = addslashes($_REQUEST['thisLINK_IDField']);
	$thisLINK_RFS_PATH = addslashes($_REQUEST['thisLINK_RFS_PATHField']);
	$thisLINK_TYPE = addslashes($_REQUEST['thisLINK_TYPEField']);
	$thisLINK_PARAMETER = addslashes($_REQUEST['thisLINK_PARAMETERField']);
	$thisLINK_TIMESTAMP = addslashes($_REQUEST['thisLINK_TIMESTAMPField']);

?>
<?
$sql = "UPDATE CMS_STATICEXPORT_LINKS SET LINK_ID = '$thisLINK_ID' , LINK_RFS_PATH = '$thisLINK_RFS_PATH' , LINK_TYPE = '$thisLINK_TYPE' , LINK_PARAMETER = '$thisLINK_PARAMETER' , LINK_TIMESTAMP = '$thisLINK_TIMESTAMP'  WHERE LINK_ID = '$thisLINK_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

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
<br><br><a href="listCMS_STATICEXPORT_LINKS.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>