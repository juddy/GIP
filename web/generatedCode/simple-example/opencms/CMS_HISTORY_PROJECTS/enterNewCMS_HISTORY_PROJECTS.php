<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_HISTORY_PROJECTS</h2>
<form name="cms_history_projectsEnterForm" method="POST" action="insertNewCms_history_projects.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_ID :  </b> </td>
		<td> <input type="text" name="thisPROJECT_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_NAME :  </b> </td>
		<td> <input type="text" name="thisPROJECT_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_DESCRIPTION :  </b> </td>
		<td> <input type="text" name="thisPROJECT_DESCRIPTIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_TYPE :  </b> </td>
		<td> <input type="text" name="thisPROJECT_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_ID :  </b> </td>
		<td> <input type="text" name="thisUSER_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> GROUP_ID :  </b> </td>
		<td> <input type="text" name="thisGROUP_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> MANAGERGROUP_ID :  </b> </td>
		<td> <input type="text" name="thisMANAGERGROUP_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATE_CREATED :  </b> </td>
		<td> <input type="text" name="thisDATE_CREATEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_TAG :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_TAGField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_PUBLISHDATE :  </b> </td>
		<td> <input type="text" name="thisPROJECT_PUBLISHDATEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_PUBLISHED_BY :  </b> </td>
		<td> <input type="text" name="thisPROJECT_PUBLISHED_BYField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_OU :  </b> </td>
		<td> <input type="text" name="thisPROJECT_OUField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_HISTORY_PROJECTSForm" value="Enter CMS_HISTORY_PROJECTS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>