<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisRESOURCE_ID = $_REQUEST['RESOURCE_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_ONLINE_ACCESSCONTROL WHERE RESOURCE_ID = '$thisRESOURCE_ID'";
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
	$thisPRINCIPAL_ID = MYSQL_RESULT($result,$i,"PRINCIPAL_ID");
	$thisACCESS_ALLOWED = MYSQL_RESULT($result,$i,"ACCESS_ALLOWED");
	$thisACCESS_DENIED = MYSQL_RESULT($result,$i,"ACCESS_DENIED");
	$thisACCESS_FLAGS = MYSQL_RESULT($result,$i,"ACCESS_FLAGS");

}
?>

<h2>Update CMS_ONLINE_ACCESSCONTROL</h2>
<form name="cms_online_accesscontrolUpdateForm" method="POST" action="updateCms_online_accesscontrol.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_ID :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_IDField" size="20" value="<? echo $thisRESOURCE_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_ID :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_IDField" size="20" value="<? echo $thisPRINCIPAL_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACCESS_ALLOWED :  </b> </td>
		<td> <input type="text" name="thisACCESS_ALLOWEDField" size="20" value="<? echo $thisACCESS_ALLOWED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACCESS_DENIED :  </b> </td>
		<td> <input type="text" name="thisACCESS_DENIEDField" size="20" value="<? echo $thisACCESS_DENIED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACCESS_FLAGS :  </b> </td>
		<td> <input type="text" name="thisACCESS_FLAGSField" size="20" value="<? echo $thisACCESS_FLAGS; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_ONLINE_ACCESSCONTROLForm" value="Update CMS_ONLINE_ACCESSCONTROL">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>