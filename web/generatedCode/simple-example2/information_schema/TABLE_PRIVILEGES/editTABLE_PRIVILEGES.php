<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisGRANTEE = $_REQUEST['GRANTEEField']
?>
<?php
$sql = "SELECT   * FROM TABLE_PRIVILEGES WHERE GRANTEE = '$thisGRANTEE'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisGRANTEE = MYSQL_RESULT($result,$i,"GRANTEE");
	$thisTABLE_CATALOG = MYSQL_RESULT($result,$i,"TABLE_CATALOG");
	$thisTABLE_SCHEMA = MYSQL_RESULT($result,$i,"TABLE_SCHEMA");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisPRIVILEGE_TYPE = MYSQL_RESULT($result,$i,"PRIVILEGE_TYPE");
	$thisIS_GRANTABLE = MYSQL_RESULT($result,$i,"IS_GRANTABLE");

}
?>

<h2>Update TABLE_PRIVILEGES</h2>
<form name="table_privilegesUpdateForm" method="POST" action="updateTable_privileges.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> GRANTEE :  </b> </td>
		<td> <input type="text" name="thisGRANTEEField" size="20" value="<? echo $thisGRANTEE; ?>">  </td> 
	</tr>
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
		<td align="right"> <b> PRIVILEGE_TYPE :  </b> </td>
		<td> <input type="text" name="thisPRIVILEGE_TYPEField" size="20" value="<? echo $thisPRIVILEGE_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> IS_GRANTABLE :  </b> </td>
		<td> <input type="text" name="thisIS_GRANTABLEField" size="20" value="<? echo $thisIS_GRANTABLE; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateTABLE_PRIVILEGESForm" value="Update TABLE_PRIVILEGES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>