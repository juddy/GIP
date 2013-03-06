<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_SUBSCRIPTION_VISIT</h2>
<form name="cms_subscription_visitEnterForm" method="POST" action="insertNewCms_subscription_visit.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> USER_ID :  </b> </td>
		<td> <input type="text" name="thisUSER_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> VISIT_DATE :  </b> </td>
		<td> <input type="text" name="thisVISIT_DATEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STRUCTURE_ID :  </b> </td>
		<td> <input type="text" name="thisSTRUCTURE_IDField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_SUBSCRIPTION_VISITForm" value="Enter CMS_SUBSCRIPTION_VISIT">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>