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
$sqlQuery = "INSERT INTO COLLATIONS (COLLATION_NAME , CHARACTER_SET_NAME , ID , IS_DEFAULT , IS_COMPILED , SORTLEN ) VALUES ('$thisCOLLATION_NAME' , '$thisCHARACTER_SET_NAME' , '$thisID' , '$thisIS_DEFAULT' , '$thisIS_COMPILED' , '$thisSORTLEN' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

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

<?php
include_once("../common/footer.php");
?>