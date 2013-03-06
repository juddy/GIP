<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisTABLE_CATALOG = $_REQUEST['TABLE_CATALOGField']
?>
<?php
$sql = "SELECT   * FROM VIEWS WHERE TABLE_CATALOG = '$thisTABLE_CATALOG'";
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
	$thisVIEW_DEFINITION = MYSQL_RESULT($result,$i,"VIEW_DEFINITION");
	$thisCHECK_OPTION = MYSQL_RESULT($result,$i,"CHECK_OPTION");
	$thisIS_UPDATABLE = MYSQL_RESULT($result,$i,"IS_UPDATABLE");
	$thisDEFINER = MYSQL_RESULT($result,$i,"DEFINER");
	$thisSECURITY_TYPE = MYSQL_RESULT($result,$i,"SECURITY_TYPE");
	$thisCHARACTER_SET_CLIENT = MYSQL_RESULT($result,$i,"CHARACTER_SET_CLIENT");
	$thisCOLLATION_CONNECTION = MYSQL_RESULT($result,$i,"COLLATION_CONNECTION");

}
?>

<h2>Update VIEWS</h2>
<form name="viewsUpdateForm" method="POST" action="updateViews.php">

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
		<td align="right"> <b> VIEW_DEFINITION :  </b> </td>
		<td> <input type="text" name="thisVIEW_DEFINITIONField" size="20" value="<? echo $thisVIEW_DEFINITION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHECK_OPTION :  </b> </td>
		<td> <input type="text" name="thisCHECK_OPTIONField" size="20" value="<? echo $thisCHECK_OPTION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> IS_UPDATABLE :  </b> </td>
		<td> <input type="text" name="thisIS_UPDATABLEField" size="20" value="<? echo $thisIS_UPDATABLE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DEFINER :  </b> </td>
		<td> <input type="text" name="thisDEFINERField" size="20" value="<? echo $thisDEFINER; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SECURITY_TYPE :  </b> </td>
		<td> <input type="text" name="thisSECURITY_TYPEField" size="20" value="<? echo $thisSECURITY_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHARACTER_SET_CLIENT :  </b> </td>
		<td> <input type="text" name="thisCHARACTER_SET_CLIENTField" size="20" value="<? echo $thisCHARACTER_SET_CLIENT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COLLATION_CONNECTION :  </b> </td>
		<td> <input type="text" name="thisCOLLATION_CONNECTIONField" size="20" value="<? echo $thisCOLLATION_CONNECTION; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateVIEWSForm" value="Update VIEWS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>