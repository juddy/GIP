<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisCONSTRAINT_CATALOG = addslashes($_REQUEST['thisCONSTRAINT_CATALOGField']);
	$thisCONSTRAINT_SCHEMA = addslashes($_REQUEST['thisCONSTRAINT_SCHEMAField']);
	$thisCONSTRAINT_NAME = addslashes($_REQUEST['thisCONSTRAINT_NAMEField']);
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisCOLUMN_NAME = addslashes($_REQUEST['thisCOLUMN_NAMEField']);
	$thisORDINAL_POSITION = addslashes($_REQUEST['thisORDINAL_POSITIONField']);
	$thisPOSITION_IN_UNIQUE_CONSTRAINT = addslashes($_REQUEST['thisPOSITION_IN_UNIQUE_CONSTRAINTField']);
	$thisREFERENCED_TABLE_SCHEMA = addslashes($_REQUEST['thisREFERENCED_TABLE_SCHEMAField']);
	$thisREFERENCED_TABLE_NAME = addslashes($_REQUEST['thisREFERENCED_TABLE_NAMEField']);
	$thisREFERENCED_COLUMN_NAME = addslashes($_REQUEST['thisREFERENCED_COLUMN_NAMEField']);

?>
<?
$sqlQuery = "INSERT INTO KEY_COLUMN_USAGE (CONSTRAINT_CATALOG , CONSTRAINT_SCHEMA , CONSTRAINT_NAME , TABLE_CATALOG , TABLE_SCHEMA , TABLE_NAME , COLUMN_NAME , ORDINAL_POSITION , POSITION_IN_UNIQUE_CONSTRAINT , REFERENCED_TABLE_SCHEMA , REFERENCED_TABLE_NAME , REFERENCED_COLUMN_NAME ) VALUES ('$thisCONSTRAINT_CATALOG' , '$thisCONSTRAINT_SCHEMA' , '$thisCONSTRAINT_NAME' , '$thisTABLE_CATALOG' , '$thisTABLE_SCHEMA' , '$thisTABLE_NAME' , '$thisCOLUMN_NAME' , '$thisORDINAL_POSITION' , '$thisPOSITION_IN_UNIQUE_CONSTRAINT' , '$thisREFERENCED_TABLE_SCHEMA' , '$thisREFERENCED_TABLE_NAME' , '$thisREFERENCED_COLUMN_NAME' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>CONSTRAINT_CATALOG : </b></td>
	<td><? echo $thisCONSTRAINT_CATALOG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CONSTRAINT_SCHEMA : </b></td>
	<td><? echo $thisCONSTRAINT_SCHEMA; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CONSTRAINT_NAME : </b></td>
	<td><? echo $thisCONSTRAINT_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLE_CATALOG : </b></td>
	<td><? echo $thisTABLE_CATALOG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLE_SCHEMA : </b></td>
	<td><? echo $thisTABLE_SCHEMA; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLE_NAME : </b></td>
	<td><? echo $thisTABLE_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COLUMN_NAME : </b></td>
	<td><? echo $thisCOLUMN_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ORDINAL_POSITION : </b></td>
	<td><? echo $thisORDINAL_POSITION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>POSITION_IN_UNIQUE_CONSTRAINT : </b></td>
	<td><? echo $thisPOSITION_IN_UNIQUE_CONSTRAINT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>REFERENCED_TABLE_SCHEMA : </b></td>
	<td><? echo $thisREFERENCED_TABLE_SCHEMA; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>REFERENCED_TABLE_NAME : </b></td>
	<td><? echo $thisREFERENCED_TABLE_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>REFERENCED_COLUMN_NAME : </b></td>
	<td><? echo $thisREFERENCED_COLUMN_NAME; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>