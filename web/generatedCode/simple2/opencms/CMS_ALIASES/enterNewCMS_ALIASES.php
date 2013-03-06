<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_ALIASES</h2>
<form name="cms_aliasesEnterForm" method="POST" action="insertNewCms_aliases.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> Path :  </b> </td>
		<td> <input type="text" name="thisPathField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Site_root :  </b> </td>
		<td> <input type="text" name="thisSite_rootField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Alias_mode :  </b> </td>
		<td> <input type="text" name="thisAlias_modeField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Structure_id :  </b> </td>
		<td> <input type="text" name="thisStructure_idField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_ALIASESForm" value="Enter CMS_ALIASES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>