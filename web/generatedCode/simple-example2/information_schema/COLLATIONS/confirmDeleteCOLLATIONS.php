<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisCOLLATION_NAME = $_REQUEST['COLLATION_NAMEField']
?>
<?php
$sql = "SELECT   * FROM COLLATIONS WHERE COLLATION_NAME = '$thisCOLLATION_NAME'";
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
	$thisID = MYSQL_RESULT($result,$i,"ID");
	$thisIS_DEFAULT = MYSQL_RESULT($result,$i,"IS_DEFAULT");
	$thisIS_COMPILED = MYSQL_RESULT($result,$i,"IS_COMPILED");
	$thisSORTLEN = MYSQL_RESULT($result,$i,"SORTLEN");

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
<tr height="30">
	<td align="right"><b>ID : </b></td>
	<td><? echo $thisID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>IS_DEFAULT : </b></td>
	<td><? echo $thisIS_DEFAULT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>IS_COMPILED : </b></td>
	<td><? echo $thisIS_COMPILED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SORTLEN : </b></td>
	<td><? echo $thisSORTLEN; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="collationsEnterForm" method="POST" action="deleteCOLLATIONS.php">
<input type="hidden" name="thisCOLLATION_NAMEField" value="<? echo $thisCOLLATION_NAME; ?>">
<input type="submit" name="submitConfirmDeleteCOLLATIONSForm" value="Delete  from COLLATIONS">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>