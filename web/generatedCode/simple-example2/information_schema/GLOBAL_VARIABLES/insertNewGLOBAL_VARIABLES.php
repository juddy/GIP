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
$sqlQuery = "INSERT INTO GLOBAL_VARIABLES (VARIABLE_NAME , VARIABLE_VALUE ) VALUES ('$thisVARIABLE_NAME' , '$thisVARIABLE_VALUE' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

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