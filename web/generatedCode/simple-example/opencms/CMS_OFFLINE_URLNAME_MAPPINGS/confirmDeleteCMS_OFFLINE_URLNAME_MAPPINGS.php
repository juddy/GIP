<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisNAME = $_REQUEST['NAMEField']
?>
<?php
$sql = "SELECT   * FROM CMS_OFFLINE_URLNAME_MAPPINGS WHERE NAME = '$thisNAME'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisNAME = MYSQL_RESULT($result,$i,"NAME");
	$thisSTRUCTURE_ID = MYSQL_RESULT($result,$i,"STRUCTURE_ID");
	$thisSTATE = MYSQL_RESULT($result,$i,"STATE");
	$thisDATE_CHANGED = MYSQL_RESULT($result,$i,"DATE_CHANGED");
	$thisLOCALE = MYSQL_RESULT($result,$i,"LOCALE");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>NAME : </b></td>
	<td><? echo $thisNAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STRUCTURE_ID : </b></td>
	<td><? echo $thisSTRUCTURE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STATE : </b></td>
	<td><? echo $thisSTATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATE_CHANGED : </b></td>
	<td><? echo $thisDATE_CHANGED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LOCALE : </b></td>
	<td><? echo $thisLOCALE; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="cms_offline_urlname_mappingsEnterForm" method="POST" action="deleteCMS_OFFLINE_URLNAME_MAPPINGS.php">
<input type="hidden" name="thisNAMEField" value="<? echo $thisNAME; ?>">
<input type="submit" name="submitConfirmDeleteCMS_OFFLINE_URLNAME_MAPPINGSForm" value="Delete  from CMS_OFFLINE_URLNAME_MAPPINGS">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>