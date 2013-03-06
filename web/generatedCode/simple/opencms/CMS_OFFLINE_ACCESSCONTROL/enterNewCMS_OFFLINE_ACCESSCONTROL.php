<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_OFFLINE_ACCESSCONTROL</h2>
<form name="cms_offline_accesscontrolEnterForm" method="POST" action="insertNewCms_offline_accesscontrol.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_ID :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_ID :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACCESS_ALLOWED :  </b> </td>
		<td> <input type="text" name="thisACCESS_ALLOWEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACCESS_DENIED :  </b> </td>
		<td> <input type="text" name="thisACCESS_DENIEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACCESS_FLAGS :  </b> </td>
		<td> <input type="text" name="thisACCESS_FLAGSField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_OFFLINE_ACCESSCONTROLForm" value="Enter CMS_OFFLINE_ACCESSCONTROL">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>