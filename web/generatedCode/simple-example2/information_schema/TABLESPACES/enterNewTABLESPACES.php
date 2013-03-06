<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter TABLESPACES</h2>
<form name="tablespacesEnterForm" method="POST" action="insertNewTablespaces.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> TABLESPACE_NAME :  </b> </td>
		<td> <input type="text" name="thisTABLESPACE_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ENGINE :  </b> </td>
		<td> <input type="text" name="thisENGINEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLESPACE_TYPE :  </b> </td>
		<td> <input type="text" name="thisTABLESPACE_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LOGFILE_GROUP_NAME :  </b> </td>
		<td> <input type="text" name="thisLOGFILE_GROUP_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EXTENT_SIZE :  </b> </td>
		<td> <input type="text" name="thisEXTENT_SIZEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> AUTOEXTEND_SIZE :  </b> </td>
		<td> <input type="text" name="thisAUTOEXTEND_SIZEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> MAXIMUM_SIZE :  </b> </td>
		<td> <input type="text" name="thisMAXIMUM_SIZEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NODEGROUP_ID :  </b> </td>
		<td> <input type="text" name="thisNODEGROUP_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLESPACE_COMMENT :  </b> </td>
		<td> <input type="text" name="thisTABLESPACE_COMMENTField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterTABLESPACESForm" value="Enter TABLESPACES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>