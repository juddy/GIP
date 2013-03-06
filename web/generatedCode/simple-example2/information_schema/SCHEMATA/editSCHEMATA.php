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

<h2>Update SCHEMATA</h2>
<form name="schemataUpdateForm" method="POST" action="updateSchemata.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> CATALOG_NAME :  </b> </td>
		<td> <input type="text" name="thisCATALOG_NAMEField" size="20" value="<? echo $thisCATALOG_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SCHEMA_NAME :  </b> </td>
		<td> <input type="text" name="thisSCHEMA_NAMEField" size="20" value="<? echo $thisSCHEMA_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DEFAULT_CHARACTER_SET_NAME :  </b> </td>
		<td> <input type="text" name="thisDEFAULT_CHARACTER_SET_NAMEField" size="20" value="<? echo $thisDEFAULT_CHARACTER_SET_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DEFAULT_COLLATION_NAME :  </b> </td>
		<td> <input type="text" name="thisDEFAULT_COLLATION_NAMEField" size="20" value="<? echo $thisDEFAULT_COLLATION_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SQL_PATH :  </b> </td>
		<td> <input type="text" name="thisSQL_PATHField" size="20" value="<? echo $thisSQL_PATH; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateSCHEMATAForm" value="Update SCHEMATA">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>