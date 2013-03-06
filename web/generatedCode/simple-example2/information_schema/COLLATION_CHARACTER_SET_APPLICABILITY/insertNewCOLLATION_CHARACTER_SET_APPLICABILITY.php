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
$sqlQuery = "INSERT INTO COLLATION_CHARACTER_SET_APPLICABILITY (COLLATION_NAME , CHARACTER_SET_NAME ) VALUES ('$thisCOLLATION_NAME' , '$thisCHARACTER_SET_NAME' )";
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
</table>

<?php
include_once("../common/footer.php");
?>