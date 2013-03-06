<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisLINK_ID = $_REQUEST['LINK_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_STATICEXPORT_LINKS WHERE LINK_ID = '$thisLINK_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisLINK_ID = MYSQL_RESULT($result,$i,"LINK_ID");
	$thisLINK_RFS_PATH = MYSQL_RESULT($result,$i,"LINK_RFS_PATH");
	$thisLINK_TYPE = MYSQL_RESULT($result,$i,"LINK_TYPE");
	$thisLINK_PARAMETER = MYSQL_RESULT($result,$i,"LINK_PARAMETER");
	$thisLINK_TIMESTAMP = MYSQL_RESULT($result,$i,"LINK_TIMESTAMP");

}
?>

<h2>Update CMS_STATICEXPORT_LINKS</h2>
<form name="cms_staticexport_linksUpdateForm" method="POST" action="updateCms_staticexport_links.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> LINK_ID :  </b> </td>
		<td> <input type="text" name="thisLINK_IDField" size="20" value="<? echo $thisLINK_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LINK_RFS_PATH :  </b> </td>
		<td> <input type="text" name="thisLINK_RFS_PATHField" size="20" value="<? echo $thisLINK_RFS_PATH; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LINK_TYPE :  </b> </td>
		<td> <input type="text" name="thisLINK_TYPEField" size="20" value="<? echo $thisLINK_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LINK_PARAMETER :  </b> </td>
		<td> <input type="text" name="thisLINK_PARAMETERField" size="20" value="<? echo $thisLINK_PARAMETER; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LINK_TIMESTAMP :  </b> </td>
		<td> <input type="text" name="thisLINK_TIMESTAMPField" size="20" value="<? echo $thisLINK_TIMESTAMP; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_STATICEXPORT_LINKSForm" value="Update CMS_STATICEXPORT_LINKS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>