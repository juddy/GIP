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
$sql = "UPDATE GLOBAL_VARIABLES SET VARIABLE_NAME = '$thisVARIABLE_NAME' , VARIABLE_VALUE = '$thisVARIABLE_VALUE'  WHERE VARIABLE_NAME = '$thisVARIABLE_NAME'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

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
<br><br><a href="listGLOBAL_VARIABLES.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>