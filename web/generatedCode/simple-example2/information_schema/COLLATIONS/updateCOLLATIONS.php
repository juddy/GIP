<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisCOLLATION_NAME = addslashes($_REQUEST['thisCOLLATION_NAMEField']);
	$thisCHARACTER_SET_NAME = addslashes($_REQUEST['thisCHARACTER_SET_NAMEField']);
	$thisID = addslashes($_REQUEST['thisIDField']);
	$thisIS_DEFAULT = addslashes($_REQUEST['thisIS_DEFAULTField']);
	$thisIS_COMPILED = addslashes($_REQUEST['thisIS_COMPILEDField']);
	$thisSORTLEN = addslashes($_REQUEST['thisSORTLENField']);

?>
<?
$sql = "UPDATE COLLATIONS SET COLLATION_NAME = '$thisCOLLATION_NAME' , CHARACTER_SET_NAME = '$thisCHARACTER_SET_NAME' , ID = '$thisID' , IS_DEFAULT = '$thisIS_DEFAULT' , IS_COMPILED = '$thisIS_COMPILED' , SORTLEN = '$thisSORTLEN'  WHERE COLLATION_NAME = '$thisCOLLATION_NAME'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

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
<br><br><a href="listCOLLATIONS.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>