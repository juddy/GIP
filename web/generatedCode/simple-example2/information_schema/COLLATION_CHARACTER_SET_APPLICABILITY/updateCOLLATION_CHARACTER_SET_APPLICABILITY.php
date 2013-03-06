<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisCOLLATION_NAME = addslashes($_REQUEST['thisCOLLATION_NAMEField']);
	$thisCHARACTER_SET_NAME = addslashes($_REQUEST['thisCHARACTER_SET_NAMEField']);

?>
<?
$sql = "UPDATE COLLATION_CHARACTER_SET_APPLICABILITY SET COLLATION_NAME = '$thisCOLLATION_NAME' , CHARACTER_SET_NAME = '$thisCHARACTER_SET_NAME'  WHERE COLLATION_NAME = '$thisCOLLATION_NAME'";
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
</table>
<br><br><a href="listCOLLATION_CHARACTER_SET_APPLICABILITY.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>