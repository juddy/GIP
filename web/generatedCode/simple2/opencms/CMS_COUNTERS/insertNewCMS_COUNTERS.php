<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisNAME = addslashes($_REQUEST['thisNAMEField']);
	$thisCOUNTER = addslashes($_REQUEST['thisCOUNTERField']);

?>
<?
$sqlQuery = "INSERT INTO CMS_COUNTERS (NAME , COUNTER ) VALUES ('$thisNAME' , '$thisCOUNTER' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>NAME : </b></td>
	<td><? echo $thisNAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COUNTER : </b></td>
	<td><? echo $thisCOUNTER; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>