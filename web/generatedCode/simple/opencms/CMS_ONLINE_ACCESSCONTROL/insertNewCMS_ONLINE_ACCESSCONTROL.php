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
$sqlQuery = "INSERT INTO CMS_ONLINE_ACCESSCONTROL (RESOURCE_ID , PRINCIPAL_ID , ACCESS_ALLOWED , ACCESS_DENIED , ACCESS_FLAGS ) VALUES ('$thisRESOURCE_ID' , '$thisPRINCIPAL_ID' , '$thisACCESS_ALLOWED' , '$thisACCESS_DENIED' , '$thisACCESS_FLAGS' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

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

<?php
include_once("../common/footer.php");
?>