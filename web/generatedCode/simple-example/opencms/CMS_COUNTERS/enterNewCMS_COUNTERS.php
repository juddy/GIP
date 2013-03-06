<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_COUNTERS</h2>
<form name="cms_countersEnterForm" method="POST" action="insertNewCms_counters.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> NAME :  </b> </td>
		<td> <input type="text" name="thisNAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COUNTER :  </b> </td>
		<td> <input type="text" name="thisCOUNTERField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_COUNTERSForm" value="Enter CMS_COUNTERS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>