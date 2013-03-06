<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisVARIABLE_NAME = $_REQUEST['VARIABLE_NAMEField']
?>
<?php
$sql = "SELECT   * FROM GLOBAL_STATUS WHERE VARIABLE_NAME = '$thisVARIABLE_NAME'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisVARIABLE_NAME = MYSQL_RESULT($result,$i,"VARIABLE_NAME");
	$thisVARIABLE_VALUE = MYSQL_RESULT($result,$i,"VARIABLE_VALUE");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>VARIABLE_NAME : </b></td>
	<td><? echo $thisVARIABLE_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>VARIABLE_VALUE : </b></td>
	<td><? echo $thisVARIABLE_VALUE; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="global_statusEnterForm" method="POST" action="deleteGLOBAL_STATUS.php">
<input type="hidden" name="thisVARIABLE_NAMEField" value="<? echo $thisVARIABLE_NAME; ?>">
<input type="submit" name="submitConfirmDeleteGLOBAL_STATUSForm" value="Delete  from GLOBAL_STATUS">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>