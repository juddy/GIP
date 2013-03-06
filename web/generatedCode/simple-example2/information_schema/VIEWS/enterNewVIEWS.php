<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter VIEWS</h2>
<form name="viewsEnterForm" method="POST" action="insertNewViews.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_CATALOG :  </b> </td>
		<td> <input type="text" name="thisTABLE_CATALOGField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisTABLE_SCHEMAField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_NAME :  </b> </td>
		<td> <input type="text" name="thisTABLE_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> VIEW_DEFINITION :  </b> </td>
		<td> <input type="text" name="thisVIEW_DEFINITIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHECK_OPTION :  </b> </td>
		<td> <input type="text" name="thisCHECK_OPTIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> IS_UPDATABLE :  </b> </td>
		<td> <input type="text" name="thisIS_UPDATABLEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DEFINER :  </b> </td>
		<td> <input type="text" name="thisDEFINERField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SECURITY_TYPE :  </b> </td>
		<td> <input type="text" name="thisSECURITY_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHARACTER_SET_CLIENT :  </b> </td>
		<td> <input type="text" name="thisCHARACTER_SET_CLIENTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COLLATION_CONNECTION :  </b> </td>
		<td> <input type="text" name="thisCOLLATION_CONNECTIONField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterVIEWSForm" value="Enter VIEWS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>