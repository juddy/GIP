<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisUSER_ID = $_REQUEST['USER_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_USERDATA WHERE USER_ID = '$thisUSER_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisUSER_ID = MYSQL_RESULT($result,$i,"USER_ID");
	$thisDATA_KEY = MYSQL_RESULT($result,$i,"DATA_KEY");
	$thisDATA_VALUE = MYSQL_RESULT($result,$i,"DATA_VALUE");
	$thisDATA_TYPE = MYSQL_RESULT($result,$i,"DATA_TYPE");

}
?>

<h2>Update CMS_USERDATA</h2>
<form name="cms_userdataUpdateForm" method="POST" action="updateCms_userdata.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> USER_ID :  </b> </td>
		<td> <input type="text" name="thisUSER_IDField" size="20" value="<? echo $thisUSER_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATA_KEY :  </b> </td>
		<td> <input type="text" name="thisDATA_KEYField" size="20" value="<? echo $thisDATA_KEY; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATA_VALUE :  </b> </td>
		<td> <input type="text" name="thisDATA_VALUEField" size="20" value="<? echo $thisDATA_VALUE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATA_TYPE :  </b> </td>
		<td> <input type="text" name="thisDATA_TYPEField" size="20" value="<? echo $thisDATA_TYPE; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_USERDATAForm" value="Update CMS_USERDATA">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>