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
$sqlQuery = "INSERT INTO CMS_STATICEXPORT_LINKS (LINK_ID , LINK_RFS_PATH , LINK_TYPE , LINK_PARAMETER , LINK_TIMESTAMP ) VALUES ('$thisLINK_ID' , '$thisLINK_RFS_PATH' , '$thisLINK_TYPE' , '$thisLINK_PARAMETER' , '$thisLINK_TIMESTAMP' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

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