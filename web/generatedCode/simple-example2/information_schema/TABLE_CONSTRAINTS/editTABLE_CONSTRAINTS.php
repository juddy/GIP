<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisCONSTRAINT_CATALOG = $_REQUEST['CONSTRAINT_CATALOGField']
?>
<?php
$sql = "SELECT   * FROM TABLE_CONSTRAINTS WHERE CONSTRAINT_CATALOG = '$thisCONSTRAINT_CATALOG'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisCONSTRAINT_CATALOG = MYSQL_RESULT($result,$i,"CONSTRAINT_CATALOG");
	$thisCONSTRAINT_SCHEMA = MYSQL_RESULT($result,$i,"CONSTRAINT_SCHEMA");
	$thisCONSTRAINT_NAME = MYSQL_RESULT($result,$i,"CONSTRAINT_NAME");
	$thisTABLE_SCHEMA = MYSQL_RESULT($result,$i,"TABLE_SCHEMA");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisCONSTRAINT_TYPE = MYSQL_RESULT($result,$i,"CONSTRAINT_TYPE");

}
?>

<h2>Update TABLE_CONSTRAINTS</h2>
<form name="table_constraintsUpdateForm" method="POST" action="updateTable_constraints.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> CONSTRAINT_CATALOG :  </b> </td>
		<td> <input type="text" name="thisCONSTRAINT_CATALOGField" size="20" value="<? echo $thisCONSTRAINT_CATALOG; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CONSTRAINT_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisCONSTRAINT_SCHEMAField" size="20" value="<? echo $thisCONSTRAINT_SCHEMA; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CONSTRAINT_NAME :  </b> </td>
		<td> <input type="text" name="thisCONSTRAINT_NAMEField" size="20" value="<? echo $thisCONSTRAINT_NAME; ?>">  </td> 
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
		<td align="right"> <b> CONSTRAINT_TYPE :  </b> </td>
		<td> <input type="text" name="thisCONSTRAINT_TYPEField" size="20" value="<? echo $thisCONSTRAINT_TYPE; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateTABLE_CONSTRAINTSForm" value="Update TABLE_CONSTRAINTS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>