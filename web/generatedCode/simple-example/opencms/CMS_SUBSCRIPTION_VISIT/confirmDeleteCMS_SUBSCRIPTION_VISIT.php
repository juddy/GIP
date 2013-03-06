<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisUSER_ID = $_REQUEST['USER_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_SUBSCRIPTION_VISIT WHERE USER_ID = '$thisUSER_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisUSER_ID = MYSQL_RESULT($result,$i,"USER_ID");
	$thisVISIT_DATE = MYSQL_RESULT($result,$i,"VISIT_DATE");
	$thisSTRUCTURE_ID = MYSQL_RESULT($result,$i,"STRUCTURE_ID");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>USER_ID : </b></td>
	<td><? echo $thisUSER_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>VISIT_DATE : </b></td>
	<td><? echo $thisVISIT_DATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STRUCTURE_ID : </b></td>
	<td><? echo $thisSTRUCTURE_ID; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="cms_subscription_visitEnterForm" method="POST" action="deleteCMS_SUBSCRIPTION_VISIT.php">
<input type="hidden" name="thisUSER_IDField" value="<? echo $thisUSER_ID; ?>">
<input type="submit" name="submitConfirmDeleteCMS_SUBSCRIPTION_VISITForm" value="Delete  from CMS_SUBSCRIPTION_VISIT">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>