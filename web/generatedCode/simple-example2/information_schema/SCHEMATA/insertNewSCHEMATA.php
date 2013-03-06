<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisCATALOG_NAME = addslashes($_REQUEST['thisCATALOG_NAMEField']);
	$thisSCHEMA_NAME = addslashes($_REQUEST['thisSCHEMA_NAMEField']);
	$thisDEFAULT_CHARACTER_SET_NAME = addslashes($_REQUEST['thisDEFAULT_CHARACTER_SET_NAMEField']);
	$thisDEFAULT_COLLATION_NAME = addslashes($_REQUEST['thisDEFAULT_COLLATION_NAMEField']);
	$thisSQL_PATH = addslashes($_REQUEST['thisSQL_PATHField']);

?>
<?
$sqlQuery = "INSERT INTO SCHEMATA (CATALOG_NAME , SCHEMA_NAME , DEFAULT_CHARACTER_SET_NAME , DEFAULT_COLLATION_NAME , SQL_PATH ) VALUES ('$thisCATALOG_NAME' , '$thisSCHEMA_NAME' , '$thisDEFAULT_CHARACTER_SET_NAME' , '$thisDEFAULT_COLLATION_NAME' , '$thisSQL_PATH' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>CATALOG_NAME : </b></td>
	<td><? echo $thisCATALOG_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SCHEMA_NAME : </b></td>
	<td><? echo $thisSCHEMA_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DEFAULT_CHARACTER_SET_NAME : </b></td>
	<td><? echo $thisDEFAULT_CHARACTER_SET_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DEFAULT_COLLATION_NAME : </b></td>
	<td><? echo $thisDEFAULT_COLLATION_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SQL_PATH : </b></td>
	<td><? echo $thisSQL_PATH; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>