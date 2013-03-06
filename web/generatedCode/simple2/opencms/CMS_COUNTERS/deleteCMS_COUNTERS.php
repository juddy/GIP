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
$sql = "DELETE FROM CMS_COUNTERS WHERE NAME = '$thisNAME'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

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