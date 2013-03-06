<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisHISTORY_ID = $_REQUEST['HISTORY_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_PUBLISH_JOBS WHERE HISTORY_ID = '$thisHISTORY_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisHISTORY_ID = MYSQL_RESULT($result,$i,"HISTORY_ID");
	$thisPROJECT_ID = MYSQL_RESULT($result,$i,"PROJECT_ID");
	$thisPROJECT_NAME = MYSQL_RESULT($result,$i,"PROJECT_NAME");
	$thisUSER_ID = MYSQL_RESULT($result,$i,"USER_ID");
	$thisPUBLISH_LOCALE = MYSQL_RESULT($result,$i,"PUBLISH_LOCALE");
	$thisPUBLISH_FLAGS = MYSQL_RESULT($result,$i,"PUBLISH_FLAGS");
	$thisPUBLISH_LIST = MYSQL_RESULT($result,$i,"PUBLISH_LIST");
	$thisPUBLISH_REPORT = MYSQL_RESULT($result,$i,"PUBLISH_REPORT");
	$thisRESOURCE_COUNT = MYSQL_RESULT($result,$i,"RESOURCE_COUNT");
	$thisENQUEUE_TIME = MYSQL_RESULT($result,$i,"ENQUEUE_TIME");
	$thisSTART_TIME = MYSQL_RESULT($result,$i,"START_TIME");
	$thisFINISH_TIME = MYSQL_RESULT($result,$i,"FINISH_TIME");

}
?>

<h2>Update CMS_PUBLISH_JOBS</h2>
<form name="cms_publish_jobsUpdateForm" method="POST" action="updateCms_publish_jobs.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> HISTORY_ID :  </b> </td>
		<td> <input type="text" name="thisHISTORY_IDField" size="20" value="<? echo $thisHISTORY_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_ID :  </b> </td>
		<td> <input type="text" name="thisPROJECT_IDField" size="20" value="<? echo $thisPROJECT_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_NAME :  </b> </td>
		<td> <input type="text" name="thisPROJECT_NAMEField" size="20" value="<? echo $thisPROJECT_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_ID :  </b> </td>
		<td> <input type="text" name="thisUSER_IDField" size="20" value="<? echo $thisUSER_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_LOCALE :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_LOCALEField" size="20" value="<? echo $thisPUBLISH_LOCALE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_FLAGS :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_FLAGSField" size="20" value="<? echo $thisPUBLISH_FLAGS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_LIST :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_LISTField" size="20" value="<? echo $thisPUBLISH_LIST; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_REPORT :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_REPORTField" size="20" value="<? echo $thisPUBLISH_REPORT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_COUNT :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_COUNTField" size="20" value="<? echo $thisRESOURCE_COUNT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ENQUEUE_TIME :  </b> </td>
		<td> <input type="text" name="thisENQUEUE_TIMEField" size="20" value="<? echo $thisENQUEUE_TIME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> START_TIME :  </b> </td>
		<td> <input type="text" name="thisSTART_TIMEField" size="20" value="<? echo $thisSTART_TIME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FINISH_TIME :  </b> </td>
		<td> <input type="text" name="thisFINISH_TIMEField" size="20" value="<? echo $thisFINISH_TIME; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_PUBLISH_JOBSForm" value="Update CMS_PUBLISH_JOBS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>