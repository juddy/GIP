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

<h2>Update STATISTICS</h2>
<form name="statisticsUpdateForm" method="POST" action="updateStatistics.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_CATALOG :  </b> </td>
		<td> <input type="text" name="thisTABLE_CATALOGField" size="20" value="<? echo $thisTABLE_CATALOG; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisTABLE_SCHEMAField" size="20" value="<? echo $thisTABLE_SCHEMA; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_NAME :  </b> </td>
		<td> <input type="text" name="thisTABLE_NAMEField" size="20" value="<? echo $thisTABLE_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NON_UNIQUE :  </b> </td>
		<td> <input type="text" name="thisNON_UNIQUEField" size="20" value="<? echo $thisNON_UNIQUE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INDEX_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisINDEX_SCHEMAField" size="20" value="<? echo $thisINDEX_SCHEMA; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INDEX_NAME :  </b> </td>
		<td> <input type="text" name="thisINDEX_NAMEField" size="20" value="<? echo $thisINDEX_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SEQ_IN_INDEX :  </b> </td>
		<td> <input type="text" name="thisSEQ_IN_INDEXField" size="20" value="<? echo $thisSEQ_IN_INDEX; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COLUMN_NAME :  </b> </td>
		<td> <input type="text" name="thisCOLUMN_NAMEField" size="20" value="<? echo $thisCOLUMN_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COLLATION :  </b> </td>
		<td> <input type="text" name="thisCOLLATIONField" size="20" value="<? echo $thisCOLLATION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CARDINALITY :  </b> </td>
		<td> <input type="text" name="thisCARDINALITYField" size="20" value="<? echo $thisCARDINALITY; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SUB_PART :  </b> </td>
		<td> <input type="text" name="thisSUB_PARTField" size="20" value="<? echo $thisSUB_PART; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PACKED :  </b> </td>
		<td> <input type="text" name="thisPACKEDField" size="20" value="<? echo $thisPACKED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NULLABLE :  </b> </td>
		<td> <input type="text" name="thisNULLABLEField" size="20" value="<? echo $thisNULLABLE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INDEX_TYPE :  </b> </td>
		<td> <input type="text" name="thisINDEX_TYPEField" size="20" value="<? echo $thisINDEX_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COMMENT :  </b> </td>
		<td> <input type="text" name="thisCOMMENTField" size="20" value="<? echo $thisCOMMENT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INDEX_COMMENT :  </b> </td>
		<td> <input type="text" name="thisINDEX_COMMENTField" size="20" value="<? echo $thisINDEX_COMMENT; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateSTATISTICSForm" value="Update STATISTICS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>