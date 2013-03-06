<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisCATALOG_NAME = $_REQUEST['CATALOG_NAMEField']
?>
<?php
$sql = "SELECT   * FROM SCHEMATA WHERE CATALOG_NAME = '$thisCATALOG_NAME'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisCATALOG_NAME = MYSQL_RESULT($result,$i,"CATALOG_NAME");
	$thisSCHEMA_NAME = MYSQL_RESULT($result,$i,"SCHEMA_NAME");
	$thisDEFAULT_CHARACTER_SET_NAME = MYSQL_RESULT($result,$i,"DEFAULT_CHARACTER_SET_NAME");
	$thisDEFAULT_COLLATION_NAME = MYSQL_RESULT($result,$i,"DEFAULT_COLLATION_NAME");
	$thisSQL_PATH = MYSQL_RESULT($result,$i,"SQL_PATH");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

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

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="schemataEnterForm" method="POST" action="deleteSCHEMATA.php">
<input type="hidden" name="thisCATALOG_NAMEField" value="<? echo $thisCATALOG_NAME; ?>">
<input type="submit" name="submitConfirmDeleteSCHEMATAForm" value="Delete  from SCHEMATA">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>