<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisRESOURCE_ID = $_REQUEST['RESOURCE_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_HISTORY_RESOURCES WHERE RESOURCE_ID = '$thisRESOURCE_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisRESOURCE_ID = MYSQL_RESULT($result,$i,"RESOURCE_ID");
	$thisRESOURCE_TYPE = MYSQL_RESULT($result,$i,"RESOURCE_TYPE");
	$thisRESOURCE_FLAGS = MYSQL_RESULT($result,$i,"RESOURCE_FLAGS");
	$thisRESOURCE_STATE = MYSQL_RESULT($result,$i,"RESOURCE_STATE");
	$thisRESOURCE_SIZE = MYSQL_RESULT($result,$i,"RESOURCE_SIZE");
	$thisDATE_CONTENT = MYSQL_RESULT($result,$i,"DATE_CONTENT");
	$thisSIBLING_COUNT = MYSQL_RESULT($result,$i,"SIBLING_COUNT");
	$thisDATE_CREATED = MYSQL_RESULT($result,$i,"DATE_CREATED");
	$thisDATE_LASTMODIFIED = MYSQL_RESULT($result,$i,"DATE_LASTMODIFIED");
	$thisUSER_CREATED = MYSQL_RESULT($result,$i,"USER_CREATED");
	$thisUSER_LASTMODIFIED = MYSQL_RESULT($result,$i,"USER_LASTMODIFIED");
	$thisPROJECT_LASTMODIFIED = MYSQL_RESULT($result,$i,"PROJECT_LASTMODIFIED");
	$thisPUBLISH_TAG = MYSQL_RESULT($result,$i,"PUBLISH_TAG");
	$thisRESOURCE_VERSION = MYSQL_RESULT($result,$i,"RESOURCE_VERSION");

}
?>

<h2>Update CMS_HISTORY_RESOURCES</h2>
<form name="cms_history_resourcesUpdateForm" method="POST" action="updateCms_history_resources.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_ID :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_IDField" size="20" value="<? echo $thisRESOURCE_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_TYPE :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_TYPEField" size="20" value="<? echo $thisRESOURCE_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_FLAGS :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_FLAGSField" size="20" value="<? echo $thisRESOURCE_FLAGS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_STATE :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_STATEField" size="20" value="<? echo $thisRESOURCE_STATE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_SIZE :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_SIZEField" size="20" value="<? echo $thisRESOURCE_SIZE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATE_CONTENT :  </b> </td>
		<td> <input type="text" name="thisDATE_CONTENTField" size="20" value="<? echo $thisDATE_CONTENT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SIBLING_COUNT :  </b> </td>
		<td> <input type="text" name="thisSIBLING_COUNTField" size="20" value="<? echo $thisSIBLING_COUNT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATE_CREATED :  </b> </td>
		<td> <input type="text" name="thisDATE_CREATEDField" size="20" value="<? echo $thisDATE_CREATED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATE_LASTMODIFIED :  </b> </td>
		<td> <input type="text" name="thisDATE_LASTMODIFIEDField" size="20" value="<? echo $thisDATE_LASTMODIFIED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_CREATED :  </b> </td>
		<td> <input type="text" name="thisUSER_CREATEDField" size="20" value="<? echo $thisUSER_CREATED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_LASTMODIFIED :  </b> </td>
		<td> <input type="text" name="thisUSER_LASTMODIFIEDField" size="20" value="<? echo $thisUSER_LASTMODIFIED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_LASTMODIFIED :  </b> </td>
		<td> <input type="text" name="thisPROJECT_LASTMODIFIEDField" size="20" value="<? echo $thisPROJECT_LASTMODIFIED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_TAG :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_TAGField" size="20" value="<? echo $thisPUBLISH_TAG; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_VERSION :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_VERSIONField" size="20" value="<? echo $thisRESOURCE_VERSION; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_HISTORY_RESOURCESForm" value="Update CMS_HISTORY_RESOURCES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>