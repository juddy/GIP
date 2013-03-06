<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisENGINE = addslashes($_REQUEST['thisENGINEField']);
	$thisSUPPORT = addslashes($_REQUEST['thisSUPPORTField']);
	$thisCOMMENT = addslashes($_REQUEST['thisCOMMENTField']);
	$thisTRANSACTIONS = addslashes($_REQUEST['thisTRANSACTIONSField']);
	$thisXA = addslashes($_REQUEST['thisXAField']);
	$thisSAVEPOINTS = addslashes($_REQUEST['thisSAVEPOINTSField']);

?>
<?
$sql = "DELETE FROM ENGINES WHERE ENGINE = '$thisENGINE'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

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

<?php
include_once("../common/footer.php");
?>