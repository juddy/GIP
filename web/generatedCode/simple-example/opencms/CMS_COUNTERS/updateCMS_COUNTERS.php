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
$sql = "UPDATE CMS_COUNTERS SET NAME = '$thisNAME' , COUNTER = '$thisCOUNTER'  WHERE NAME = '$thisNAME'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

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
<br><br><a href="listCMS_COUNTERS.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>