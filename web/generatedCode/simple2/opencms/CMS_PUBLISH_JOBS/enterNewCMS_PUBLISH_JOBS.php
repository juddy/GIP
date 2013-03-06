<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter CMS_PUBLISH_JOBS</h2>
<form name="cms_publish_jobsEnterForm" method="POST" action="insertNewCms_publish_jobs.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> HISTORY_ID :  </b> </td>
		<td> <input type="text" name="thisHISTORY_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_ID :  </b> </td>
		<td> <input type="text" name="thisPROJECT_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_NAME :  </b> </td>
		<td> <input type="text" name="thisPROJECT_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_ID :  </b> </td>
		<td> <input type="text" name="thisUSER_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_LOCALE :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_LOCALEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_FLAGS :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_FLAGSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_LIST :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_LISTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_REPORT :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_REPORTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_COUNT :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_COUNTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ENQUEUE_TIME :  </b> </td>
		<td> <input type="text" name="thisENQUEUE_TIMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> START_TIME :  </b> </td>
		<td> <input type="text" name="thisSTART_TIMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FINISH_TIME :  </b> </td>
		<td> <input type="text" name="thisFINISH_TIMEField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterCMS_PUBLISH_JOBSForm" value="Enter CMS_PUBLISH_JOBS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>