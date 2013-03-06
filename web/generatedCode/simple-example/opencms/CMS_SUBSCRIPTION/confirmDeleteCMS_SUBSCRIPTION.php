<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPRINCIPAL_ID = $_REQUEST['PRINCIPAL_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_SUBSCRIPTION WHERE PRINCIPAL_ID = '$thisPRINCIPAL_ID'";
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
	$thisSTRUCTURE_ID = MYSQL_RESULT($result,$i,"STRUCTURE_ID");
	$thisDATE_DELETED = MYSQL_RESULT($result,$i,"DATE_DELETED");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>PRINCIPAL_ID : </b></td>
	<td><? echo $thisPRINCIPAL_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STRUCTURE_ID : </b></td>
	<td><? echo $thisSTRUCTURE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATE_DELETED : </b></td>
	<td><? echo $thisDATE_DELETED; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="cms_subscriptionEnterForm" method="POST" action="deleteCMS_SUBSCRIPTION.php">
<input type="hidden" name="thisPRINCIPAL_IDField" value="<? echo $thisPRINCIPAL_ID; ?>">
<input type="submit" name="submitConfirmDeleteCMS_SUBSCRIPTIONForm" value="Delete  from CMS_SUBSCRIPTION">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>