<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPROPERTYDEF_ID = $_REQUEST['PROPERTYDEF_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_ONLINE_PROPERTYDEF WHERE PROPERTYDEF_ID = '$thisPROPERTYDEF_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisPROPERTYDEF_ID = MYSQL_RESULT($result,$i,"PROPERTYDEF_ID");
	$thisPROPERTYDEF_NAME = MYSQL_RESULT($result,$i,"PROPERTYDEF_NAME");
	$thisPROPERTYDEF_TYPE = MYSQL_RESULT($result,$i,"PROPERTYDEF_TYPE");

}
?>

<h2>Update CMS_ONLINE_PROPERTYDEF</h2>
<form name="cms_online_propertydefUpdateForm" method="POST" action="updateCms_online_propertydef.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> PROPERTYDEF_ID :  </b> </td>
		<td> <input type="text" name="thisPROPERTYDEF_IDField" size="20" value="<? echo $thisPROPERTYDEF_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROPERTYDEF_NAME :  </b> </td>
		<td> <input type="text" name="thisPROPERTYDEF_NAMEField" size="20" value="<? echo $thisPROPERTYDEF_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROPERTYDEF_TYPE :  </b> </td>
		<td> <input type="text" name="thisPROPERTYDEF_TYPEField" size="20" value="<? echo $thisPROPERTYDEF_TYPE; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_ONLINE_PROPERTYDEFForm" value="Update CMS_ONLINE_PROPERTYDEF">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>