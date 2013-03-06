<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisID = addslashes($_REQUEST['thisIDField']);
	$thisUSER = addslashes($_REQUEST['thisUSERField']);
	$thisHOST = addslashes($_REQUEST['thisHOSTField']);
	$thisDB = addslashes($_REQUEST['thisDBField']);
	$thisCOMMAND = addslashes($_REQUEST['thisCOMMANDField']);
	$thisTIME = addslashes($_REQUEST['thisTIMEField']);
	$thisSTATE = addslashes($_REQUEST['thisSTATEField']);
	$thisINFO = addslashes($_REQUEST['thisINFOField']);

?>
<?
$sqlQuery = "INSERT INTO PROCESSLIST (ID , USER , HOST , DB , COMMAND , TIME , STATE , INFO ) VALUES ('$thisID' , '$thisUSER' , '$thisHOST' , '$thisDB' , '$thisCOMMAND' , '$thisTIME' , '$thisSTATE' , '$thisINFO' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

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

<?php
include_once("../common/footer.php");
?>