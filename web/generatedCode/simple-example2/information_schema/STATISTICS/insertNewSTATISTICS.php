<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisNON_UNIQUE = addslashes($_REQUEST['thisNON_UNIQUEField']);
	$thisINDEX_SCHEMA = addslashes($_REQUEST['thisINDEX_SCHEMAField']);
	$thisINDEX_NAME = addslashes($_REQUEST['thisINDEX_NAMEField']);
	$thisSEQ_IN_INDEX = addslashes($_REQUEST['thisSEQ_IN_INDEXField']);
	$thisCOLUMN_NAME = addslashes($_REQUEST['thisCOLUMN_NAMEField']);
	$thisCOLLATION = addslashes($_REQUEST['thisCOLLATIONField']);
	$thisCARDINALITY = addslashes($_REQUEST['thisCARDINALITYField']);
	$thisSUB_PART = addslashes($_REQUEST['thisSUB_PARTField']);
	$thisPACKED = addslashes($_REQUEST['thisPACKEDField']);
	$thisNULLABLE = addslashes($_REQUEST['thisNULLABLEField']);
	$thisINDEX_TYPE = addslashes($_REQUEST['thisINDEX_TYPEField']);
	$thisCOMMENT = addslashes($_REQUEST['thisCOMMENTField']);
	$thisINDEX_COMMENT = addslashes($_REQUEST['thisINDEX_COMMENTField']);

?>
<?
$sqlQuery = "INSERT INTO STATISTICS (TABLE_CATALOG , TABLE_SCHEMA , TABLE_NAME , NON_UNIQUE , INDEX_SCHEMA , INDEX_NAME , SEQ_IN_INDEX , COLUMN_NAME , COLLATION , CARDINALITY , SUB_PART , PACKED , NULLABLE , INDEX_TYPE , COMMENT , INDEX_COMMENT ) VALUES ('$thisTABLE_CATALOG' , '$thisTABLE_SCHEMA' , '$thisTABLE_NAME' , '$thisNON_UNIQUE' , '$thisINDEX_SCHEMA' , '$thisINDEX_NAME' , '$thisSEQ_IN_INDEX' , '$thisCOLUMN_NAME' , '$thisCOLLATION' , '$thisCARDINALITY' , '$thisSUB_PART' , '$thisPACKED' , '$thisNULLABLE' , '$thisINDEX_TYPE' , '$thisCOMMENT' , '$thisINDEX_COMMENT' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

<table>
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
	<td align="right"><b>NON_UNIQUE : </b></td>
	<td><? echo $thisNON_UNIQUE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>INDEX_SCHEMA : </b></td>
	<td><? echo $thisINDEX_SCHEMA; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>INDEX_NAME : </b></td>
	<td><? echo $thisINDEX_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SEQ_IN_INDEX : </b></td>
	<td><? echo $thisSEQ_IN_INDEX; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COLUMN_NAME : </b></td>
	<td><? echo $thisCOLUMN_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COLLATION : </b></td>
	<td><? echo $thisCOLLATION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CARDINALITY : </b></td>
	<td><? echo $thisCARDINALITY; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SUB_PART : </b></td>
	<td><? echo $thisSUB_PART; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PACKED : </b></td>
	<td><? echo $thisPACKED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>NULLABLE : </b></td>
	<td><? echo $thisNULLABLE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>INDEX_TYPE : </b></td>
	<td><? echo $thisINDEX_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COMMENT : </b></td>
	<td><? echo $thisCOMMENT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>INDEX_COMMENT : </b></td>
	<td><? echo $thisINDEX_COMMENT; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>