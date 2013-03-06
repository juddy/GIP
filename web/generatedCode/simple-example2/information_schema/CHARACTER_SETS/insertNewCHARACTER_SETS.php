<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisCHARACTER_SET_NAME = addslashes($_REQUEST['thisCHARACTER_SET_NAMEField']);
	$thisDEFAULT_COLLATE_NAME = addslashes($_REQUEST['thisDEFAULT_COLLATE_NAMEField']);
	$thisDESCRIPTION = addslashes($_REQUEST['thisDESCRIPTIONField']);
	$thisMAXLEN = addslashes($_REQUEST['thisMAXLENField']);

?>
<?
$sqlQuery = "INSERT INTO CHARACTER_SETS (CHARACTER_SET_NAME , DEFAULT_COLLATE_NAME , DESCRIPTION , MAXLEN ) VALUES ('$thisCHARACTER_SET_NAME' , '$thisDEFAULT_COLLATE_NAME' , '$thisDESCRIPTION' , '$thisMAXLEN' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>CHARACTER_SET_NAME : </b></td>
	<td><? echo $thisCHARACTER_SET_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DEFAULT_COLLATE_NAME : </b></td>
	<td><? echo $thisDEFAULT_COLLATE_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DESCRIPTION : </b></td>
	<td><? echo $thisDESCRIPTION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>MAXLEN : </b></td>
	<td><? echo $thisMAXLEN; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>