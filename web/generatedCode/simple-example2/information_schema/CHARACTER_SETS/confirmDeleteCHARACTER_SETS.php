<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisCHARACTER_SET_NAME = $_REQUEST['CHARACTER_SET_NAMEField']
?>
<?php
$sql = "SELECT   * FROM CHARACTER_SETS WHERE CHARACTER_SET_NAME = '$thisCHARACTER_SET_NAME'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisCHARACTER_SET_NAME = MYSQL_RESULT($result,$i,"CHARACTER_SET_NAME");
	$thisDEFAULT_COLLATE_NAME = MYSQL_RESULT($result,$i,"DEFAULT_COLLATE_NAME");
	$thisDESCRIPTION = MYSQL_RESULT($result,$i,"DESCRIPTION");
	$thisMAXLEN = MYSQL_RESULT($result,$i,"MAXLEN");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>CHARACTER_SET_NAME : </b></td>
	<td><? echo $thisCHARACTER_SET_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DEFAULT_COLLATE_NAME : </b></td>
	<td><? echo $thisDEFAULT_COLLATE_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DESCRIPTION : </b></td>
	<td><? echo $thisDESCRIPTION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>MAXLEN : </b></td>
	<td><? echo $thisMAXLEN; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="character_setsEnterForm" method="POST" action="deleteCHARACTER_SETS.php">
<input type="hidden" name="thisCHARACTER_SET_NAMEField" value="<? echo $thisCHARACTER_SET_NAME; ?>">
<input type="submit" name="submitConfirmDeleteCHARACTER_SETSForm" value="Delete  from CHARACTER_SETS">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>