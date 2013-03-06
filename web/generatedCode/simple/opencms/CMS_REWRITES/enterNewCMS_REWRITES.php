<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_REWRITES</h2>
<form name="cms_rewritesEnterForm" method="POST" action="insertNewCms_rewrites.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> ID :  </b> </td>
		<td> <input type="text" name="thisIDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ALIAS_MODE :  </b> </td>
		<td> <input type="text" name="thisALIAS_MODEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PATTERN :  </b> </td>
		<td> <input type="text" name="thisPATTERNField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> REPLACEMENT :  </b> </td>
		<td> <input type="text" name="thisREPLACEMENTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SITE_ROOT :  </b> </td>
		<td> <input type="text" name="thisSITE_ROOTField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_REWRITESForm" value="Enter CMS_REWRITES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>