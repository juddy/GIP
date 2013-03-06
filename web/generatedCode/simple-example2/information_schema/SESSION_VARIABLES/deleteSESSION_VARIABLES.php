<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisVARIABLE_NAME = addslashes($_REQUEST['thisVARIABLE_NAMEField']);
	$thisVARIABLE_VALUE = addslashes($_REQUEST['thisVARIABLE_VALUEField']);

?>
<?
$sql = "DELETE FROM SESSION_VARIABLES WHERE VARIABLE_NAME = '$thisVARIABLE_NAME'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

<table>
<tr height="30">
	<td align="right"><b>VARIABLE_NAME : </b></td>
	<td><? echo $thisVARIABLE_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>VARIABLE_VALUE : </b></td>
	<td><? echo $thisVARIABLE_VALUE; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>