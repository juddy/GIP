<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPRINCIPAL_ID = $_REQUEST['PRINCIPAL_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_HISTORY_PRINCIPALS WHERE PRINCIPAL_ID = '$thisPRINCIPAL_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisPRINCIPAL_ID = MYSQL_RESULT($result,$i,"PRINCIPAL_ID");
	$thisPRINCIPAL_NAME = MYSQL_RESULT($result,$i,"PRINCIPAL_NAME");
	$thisPRINCIPAL_DESCRIPTION = MYSQL_RESULT($result,$i,"PRINCIPAL_DESCRIPTION");
	$thisPRINCIPAL_OU = MYSQL_RESULT($result,$i,"PRINCIPAL_OU");
	$thisPRINCIPAL_EMAIL = MYSQL_RESULT($result,$i,"PRINCIPAL_EMAIL");
	$thisPRINCIPAL_TYPE = MYSQL_RESULT($result,$i,"PRINCIPAL_TYPE");
	$thisPRINCIPAL_USERDELETED = MYSQL_RESULT($result,$i,"PRINCIPAL_USERDELETED");
	$thisPRINCIPAL_DATEDELETED = MYSQL_RESULT($result,$i,"PRINCIPAL_DATEDELETED");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

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

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="cms_history_principalsEnterForm" method="POST" action="deleteCMS_HISTORY_PRINCIPALS.php">
<input type="hidden" name="thisPRINCIPAL_IDField" value="<? echo $thisPRINCIPAL_ID; ?>">
<input type="submit" name="submitConfirmDeleteCMS_HISTORY_PRINCIPALSForm" value="Delete  from CMS_HISTORY_PRINCIPALS">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>