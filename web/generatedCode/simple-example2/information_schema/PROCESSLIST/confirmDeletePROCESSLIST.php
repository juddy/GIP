<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisID = $_REQUEST['IDField']
?>
<?php
$sql = "SELECT   * FROM PROCESSLIST WHERE ID = '$thisID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisID = MYSQL_RESULT($result,$i,"ID");
	$thisUSER = MYSQL_RESULT($result,$i,"USER");
	$thisHOST = MYSQL_RESULT($result,$i,"HOST");
	$thisDB = MYSQL_RESULT($result,$i,"DB");
	$thisCOMMAND = MYSQL_RESULT($result,$i,"COMMAND");
	$thisTIME = MYSQL_RESULT($result,$i,"TIME");
	$thisSTATE = MYSQL_RESULT($result,$i,"STATE");
	$thisINFO = MYSQL_RESULT($result,$i,"INFO");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>ID : </b></td>
	<td><? echo $thisID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>USER : </b></td>
	<td><? echo $thisUSER; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>HOST : </b></td>
	<td><? echo $thisHOST; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DB : </b></td>
	<td><? echo $thisDB; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COMMAND : </b></td>
	<td><? echo $thisCOMMAND; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TIME : </b></td>
	<td><? echo $thisTIME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STATE : </b></td>
	<td><? echo $thisSTATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>INFO : </b></td>
	<td><? echo $thisINFO; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="processlistEnterForm" method="POST" action="deletePROCESSLIST.php">
<input type="hidden" name="thisIDField" value="<? echo $thisID; ?>">
<input type="submit" name="submitConfirmDeletePROCESSLISTForm" value="Delete  from PROCESSLIST">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>