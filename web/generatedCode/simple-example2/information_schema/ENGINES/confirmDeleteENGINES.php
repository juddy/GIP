<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisENGINE = $_REQUEST['ENGINEField']
?>
<?php
$sql = "SELECT   * FROM ENGINES WHERE ENGINE = '$thisENGINE'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisENGINE = MYSQL_RESULT($result,$i,"ENGINE");
	$thisSUPPORT = MYSQL_RESULT($result,$i,"SUPPORT");
	$thisCOMMENT = MYSQL_RESULT($result,$i,"COMMENT");
	$thisTRANSACTIONS = MYSQL_RESULT($result,$i,"TRANSACTIONS");
	$thisXA = MYSQL_RESULT($result,$i,"XA");
	$thisSAVEPOINTS = MYSQL_RESULT($result,$i,"SAVEPOINTS");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>ENGINE : </b></td>
	<td><? echo $thisENGINE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SUPPORT : </b></td>
	<td><? echo $thisSUPPORT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COMMENT : </b></td>
	<td><? echo $thisCOMMENT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TRANSACTIONS : </b></td>
	<td><? echo $thisTRANSACTIONS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>XA : </b></td>
	<td><? echo $thisXA; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SAVEPOINTS : </b></td>
	<td><? echo $thisSAVEPOINTS; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="enginesEnterForm" method="POST" action="deleteENGINES.php">
<input type="hidden" name="thisENGINEField" value="<? echo $thisENGINE; ?>">
<input type="submit" name="submitConfirmDeleteENGINESForm" value="Delete  from ENGINES">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>