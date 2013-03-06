<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_SUBSCRIPTION</h2>
<form name="cms_subscriptionEnterForm" method="POST" action="insertNewCms_subscription.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_ID :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STRUCTURE_ID :  </b> </td>
		<td> <input type="text" name="thisSTRUCTURE_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATE_DELETED :  </b> </td>
		<td> <input type="text" name="thisDATE_DELETEDField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_SUBSCRIPTIONForm" value="Enter CMS_SUBSCRIPTION">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>