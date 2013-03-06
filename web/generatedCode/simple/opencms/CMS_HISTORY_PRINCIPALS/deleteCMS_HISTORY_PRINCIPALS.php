<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisPRINCIPAL_ID = addslashes($_REQUEST['thisPRINCIPAL_IDField']);
	$thisPRINCIPAL_NAME = addslashes($_REQUEST['thisPRINCIPAL_NAMEField']);
	$thisPRINCIPAL_DESCRIPTION = addslashes($_REQUEST['thisPRINCIPAL_DESCRIPTIONField']);
	$thisPRINCIPAL_OU = addslashes($_REQUEST['thisPRINCIPAL_OUField']);
	$thisPRINCIPAL_EMAIL = addslashes($_REQUEST['thisPRINCIPAL_EMAILField']);
	$thisPRINCIPAL_TYPE = addslashes($_REQUEST['thisPRINCIPAL_TYPEField']);
	$thisPRINCIPAL_USERDELETED = addslashes($_REQUEST['thisPRINCIPAL_USERDELETEDField']);
	$thisPRINCIPAL_DATEDELETED = addslashes($_REQUEST['thisPRINCIPAL_DATEDELETEDField']);

?>
<?
$sql = "DELETE FROM CMS_HISTORY_PRINCIPALS WHERE PRINCIPAL_ID = '$thisPRINCIPAL_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

<table>
<tr height="30">
	<td align="right"><b>PRINCIPAL_ID : </b></td>
	<td><? echo $thisPRINCIPAL_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PRINCIPAL_NAME : </b></td>
	<td><? echo $thisPRINCIPAL_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PRINCIPAL_DESCRIPTION : </b></td>
	<td><? echo $thisPRINCIPAL_DESCRIPTION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PRINCIPAL_OU : </b></td>
	<td><? echo $thisPRINCIPAL_OU; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PRINCIPAL_EMAIL : </b></td>
	<td><? echo $thisPRINCIPAL_EMAIL; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PRINCIPAL_TYPE : </b></td>
	<td><? echo $thisPRINCIPAL_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PRINCIPAL_USERDELETED : </b></td>
	<td><? echo $thisPRINCIPAL_USERDELETED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PRINCIPAL_DATEDELETED : </b></td>
	<td><? echo $thisPRINCIPAL_DATEDELETED; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>