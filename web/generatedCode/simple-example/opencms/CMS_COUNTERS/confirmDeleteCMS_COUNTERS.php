<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisNAME = $_REQUEST['NAMEField']
?>
<?php
$sql = "SELECT   * FROM CMS_COUNTERS WHERE NAME = '$thisNAME'";
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
	$thisCOUNTER = MYSQL_RESULT($result,$i,"COUNTER");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>NAME : </b></td>
	<td><? echo $thisNAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COUNTER : </b></td>
	<td><? echo $thisCOUNTER; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="cms_countersEnterForm" method="POST" action="deleteCMS_COUNTERS.php">
<input type="hidden" name="thisNAMEField" value="<? echo $thisNAME; ?>">
<input type="submit" name="submitConfirmDeleteCMS_COUNTERSForm" value="Delete  from CMS_COUNTERS">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>