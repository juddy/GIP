<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisTABLE_CATALOG = $_REQUEST['TABLE_CATALOGField']
?>
<?php
$sql = "SELECT   * FROM STATISTICS WHERE TABLE_CATALOG = '$thisTABLE_CATALOG'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisTABLE_CATALOG = MYSQL_RESULT($result,$i,"TABLE_CATALOG");
	$thisTABLE_SCHEMA = MYSQL_RESULT($result,$i,"TABLE_SCHEMA");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisNON_UNIQUE = MYSQL_RESULT($result,$i,"NON_UNIQUE");
	$thisINDEX_SCHEMA = MYSQL_RESULT($result,$i,"INDEX_SCHEMA");
	$thisINDEX_NAME = MYSQL_RESULT($result,$i,"INDEX_NAME");
	$thisSEQ_IN_INDEX = MYSQL_RESULT($result,$i,"SEQ_IN_INDEX");
	$thisCOLUMN_NAME = MYSQL_RESULT($result,$i,"COLUMN_NAME");
	$thisCOLLATION = MYSQL_RESULT($result,$i,"COLLATION");
	$thisCARDINALITY = MYSQL_RESULT($result,$i,"CARDINALITY");
	$thisSUB_PART = MYSQL_RESULT($result,$i,"SUB_PART");
	$thisPACKED = MYSQL_RESULT($result,$i,"PACKED");
	$thisNULLABLE = MYSQL_RESULT($result,$i,"NULLABLE");
	$thisINDEX_TYPE = MYSQL_RESULT($result,$i,"INDEX_TYPE");
	$thisCOMMENT = MYSQL_RESULT($result,$i,"COMMENT");
	$thisINDEX_COMMENT = MYSQL_RESULT($result,$i,"INDEX_COMMENT");

}
?>

View Record<br><br>

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