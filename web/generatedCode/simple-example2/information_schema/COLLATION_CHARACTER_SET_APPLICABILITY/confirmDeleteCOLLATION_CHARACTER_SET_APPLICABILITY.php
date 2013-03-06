<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisCOLLATION_NAME = $_REQUEST['COLLATION_NAMEField']
?>
<?php
$sql = "SELECT   * FROM COLLATION_CHARACTER_SET_APPLICABILITY WHERE COLLATION_NAME = '$thisCOLLATION_NAME'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisCOLLATION_NAME = MYSQL_RESULT($result,$i,"COLLATION_NAME");
	$thisCHARACTER_SET_NAME = MYSQL_RESULT($result,$i,"CHARACTER_SET_NAME");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>COLLATION_NAME : </b></td>
	<td><? echo $thisCOLLATION_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CHARACTER_SET_NAME : </b></td>
	<td><? echo $thisCHARACTER_SET_NAME; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="collation_character_set_applicabilityEnterForm" method="POST" action="deleteCOLLATION_CHARACTER_SET_APPLICABILITY.php">
<input type="hidden" name="thisCOLLATION_NAMEField" value="<? echo $thisCOLLATION_NAME; ?>">
<input type="submit" name="submitConfirmDeleteCOLLATION_CHARACTER_SET_APPLICABILITYForm" value="Delete  from COLLATION_CHARACTER_SET_APPLICABILITY">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>