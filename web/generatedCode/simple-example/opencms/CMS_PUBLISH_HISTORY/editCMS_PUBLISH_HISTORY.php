<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisHISTORY_ID = $_REQUEST['HISTORY_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_PUBLISH_HISTORY WHERE HISTORY_ID = '$thisHISTORY_ID'";
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
	$thisPUBLISH_TAG = MYSQL_RESULT($result,$i,"PUBLISH_TAG");
	$thisSTRUCTURE_ID = MYSQL_RESULT($result,$i,"STRUCTURE_ID");
	$thisRESOURCE_ID = MYSQL_RESULT($result,$i,"RESOURCE_ID");
	$thisRESOURCE_PATH = MYSQL_RESULT($result,$i,"RESOURCE_PATH");
	$thisRESOURCE_STATE = MYSQL_RESULT($result,$i,"RESOURCE_STATE");
	$thisRESOURCE_TYPE = MYSQL_RESULT($result,$i,"RESOURCE_TYPE");
	$thisSIBLING_COUNT = MYSQL_RESULT($result,$i,"SIBLING_COUNT");

}
?>

<h2>Update CMS_PUBLISH_HISTORY</h2>
<form name="cms_publish_historyUpdateForm" method="POST" action="updateCms_publish_history.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> HISTORY_ID :  </b> </td>
		<td> <input type="text" name="thisHISTORY_IDField" size="20" value="<? echo $thisHISTORY_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_TAG :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_TAGField" size="20" value="<? echo $thisPUBLISH_TAG; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STRUCTURE_ID :  </b> </td>
		<td> <input type="text" name="thisSTRUCTURE_IDField" size="20" value="<? echo $thisSTRUCTURE_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_ID :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_IDField" size="20" value="<? echo $thisRESOURCE_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_PATH :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_PATHField" size="20" value="<? echo $thisRESOURCE_PATH; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_STATE :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_STATEField" size="20" value="<? echo $thisRESOURCE_STATE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_TYPE :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_TYPEField" size="20" value="<? echo $thisRESOURCE_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SIBLING_COUNT :  </b> </td>
		<td> <input type="text" name="thisSIBLING_COUNTField" size="20" value="<? echo $thisSIBLING_COUNT; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_PUBLISH_HISTORYForm" value="Update CMS_PUBLISH_HISTORY">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>