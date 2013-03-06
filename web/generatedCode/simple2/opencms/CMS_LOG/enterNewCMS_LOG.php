<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_LOG</h2>
<form name="cms_logEnterForm" method="POST" action="insertNewCms_log.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> USER_ID :  </b> </td>
		<td> <input type="text" name="thisUSER_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LOG_DATE :  </b> </td>
		<td> <input type="text" name="thisLOG_DATEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STRUCTURE_ID :  </b> </td>
		<td> <input type="text" name="thisSTRUCTURE_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LOG_TYPE :  </b> </td>
		<td> <input type="text" name="thisLOG_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LOG_DATA :  </b> </td>
		<td> <input type="text" name="thisLOG_DATAField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_LOGForm" value="Enter CMS_LOG">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>