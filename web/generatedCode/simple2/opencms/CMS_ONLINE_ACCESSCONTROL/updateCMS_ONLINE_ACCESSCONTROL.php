<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisPRINCIPAL_ID = addslashes($_REQUEST['thisPRINCIPAL_IDField']);
	$thisACCESS_ALLOWED = addslashes($_REQUEST['thisACCESS_ALLOWEDField']);
	$thisACCESS_DENIED = addslashes($_REQUEST['thisACCESS_DENIEDField']);
	$thisACCESS_FLAGS = addslashes($_REQUEST['thisACCESS_FLAGSField']);

?>
<?
$sql = "UPDATE CMS_ONLINE_ACCESSCONTROL SET RESOURCE_ID = '$thisRESOURCE_ID' , PRINCIPAL_ID = '$thisPRINCIPAL_ID' , ACCESS_ALLOWED = '$thisACCESS_ALLOWED' , ACCESS_DENIED = '$thisACCESS_DENIED' , ACCESS_FLAGS = '$thisACCESS_FLAGS'  WHERE RESOURCE_ID = '$thisRESOURCE_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>RESOURCE_ID : </b></td>
	<td><? echo $thisRESOURCE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PRINCIPAL_ID : </b></td>
	<td><? echo $thisPRINCIPAL_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ACCESS_ALLOWED : </b></td>
	<td><? echo $thisACCESS_ALLOWED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ACCESS_DENIED : </b></td>
	<td><? echo $thisACCESS_DENIED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ACCESS_FLAGS : </b></td>
	<td><? echo $thisACCESS_FLAGS; ?></td>
</tr>
</table>
<br><br><a href="listCMS_ONLINE_ACCESSCONTROL.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>