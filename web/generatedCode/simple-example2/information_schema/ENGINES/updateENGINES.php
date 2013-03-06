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
$sql = "UPDATE ENGINES SET ENGINE = '$thisENGINE' , SUPPORT = '$thisSUPPORT' , COMMENT = '$thisCOMMENT' , TRANSACTIONS = '$thisTRANSACTIONS' , XA = '$thisXA' , SAVEPOINTS = '$thisSAVEPOINTS'  WHERE ENGINE = '$thisENGINE'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

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
<br><br><a href="listENGINES.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>