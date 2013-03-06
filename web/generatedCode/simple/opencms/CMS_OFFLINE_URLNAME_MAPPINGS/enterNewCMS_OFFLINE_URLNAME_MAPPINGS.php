<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_OFFLINE_URLNAME_MAPPINGS</h2>
<form name="cms_offline_urlname_mappingsEnterForm" method="POST" action="insertNewCms_offline_urlname_mappings.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> NAME :  </b> </td>
		<td> <input type="text" name="thisNAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STRUCTURE_ID :  </b> </td>
		<td> <input type="text" name="thisSTRUCTURE_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STATE :  </b> </td>
		<td> <input type="text" name="thisSTATEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATE_CHANGED :  </b> </td>
		<td> <input type="text" name="thisDATE_CHANGEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LOCALE :  </b> </td>
		<td> <input type="text" name="thisLOCALEField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_OFFLINE_URLNAME_MAPPINGSForm" value="Enter CMS_OFFLINE_URLNAME_MAPPINGS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>