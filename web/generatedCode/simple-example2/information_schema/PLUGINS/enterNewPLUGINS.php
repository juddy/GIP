<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter PLUGINS</h2>
<form name="pluginsEnterForm" method="POST" action="insertNewPlugins.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_NAME :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_VERSION :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_VERSIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_STATUS :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_STATUSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_TYPE :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_TYPE_VERSION :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_TYPE_VERSIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_LIBRARY :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_LIBRARYField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_LIBRARY_VERSION :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_LIBRARY_VERSIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_AUTHOR :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_AUTHORField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_DESCRIPTION :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_DESCRIPTIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_LICENSE :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_LICENSEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LOAD_OPTION :  </b> </td>
		<td> <input type="text" name="thisLOAD_OPTIONField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterPLUGINSForm" value="Enter PLUGINS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>