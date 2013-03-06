<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_CONTENTS</h2>
<form name="cms_contentsEnterForm" method="POST" action="insertNewCms_contents.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_ID :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FILE_CONTENT :  </b> </td>
		<td> <input type="text" name="thisFILE_CONTENTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_TAG_FROM :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_TAG_FROMField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_TAG_TO :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_TAG_TOField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ONLINE_FLAG :  </b> </td>
		<td> <input type="text" name="thisONLINE_FLAGField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_CONTENTSForm" value="Enter CMS_CONTENTS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>