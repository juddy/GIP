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
$sql = "UPDATE CHARACTER_SETS SET CHARACTER_SET_NAME = '$thisCHARACTER_SET_NAME' , DEFAULT_COLLATE_NAME = '$thisDEFAULT_COLLATE_NAME' , DESCRIPTION = '$thisDESCRIPTION' , MAXLEN = '$thisMAXLEN'  WHERE CHARACTER_SET_NAME = '$thisCHARACTER_SET_NAME'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

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
<br><br><a href="listCHARACTER_SETS.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>