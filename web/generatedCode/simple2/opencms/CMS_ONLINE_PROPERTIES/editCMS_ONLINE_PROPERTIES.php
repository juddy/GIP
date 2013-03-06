<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPROPERTY_ID = $_REQUEST['PROPERTY_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_ONLINE_PROPERTIES WHERE PROPERTY_ID = '$thisPROPERTY_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisPROPERTY_ID = MYSQL_RESULT($result,$i,"PROPERTY_ID");
	$thisPROPERTYDEF_ID = MYSQL_RESULT($result,$i,"PROPERTYDEF_ID");
	$thisPROPERTY_MAPPING_ID = MYSQL_RESULT($result,$i,"PROPERTY_MAPPING_ID");
	$thisPROPERTY_MAPPING_TYPE = MYSQL_RESULT($result,$i,"PROPERTY_MAPPING_TYPE");
	$thisPROPERTY_VALUE = MYSQL_RESULT($result,$i,"PROPERTY_VALUE");

}
?>

<h2>Update CMS_ONLINE_PROPERTIES</h2>
<form name="cms_online_propertiesUpdateForm" method="POST" action="updateCms_online_properties.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> PROPERTY_ID :  </b> </td>
		<td> <input type="text" name="thisPROPERTY_IDField" size="20" value="<? echo $thisPROPERTY_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROPERTYDEF_ID :  </b> </td>
		<td> <input type="text" name="thisPROPERTYDEF_IDField" size="20" value="<? echo $thisPROPERTYDEF_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROPERTY_MAPPING_ID :  </b> </td>
		<td> <input type="text" name="thisPROPERTY_MAPPING_IDField" size="20" value="<? echo $thisPROPERTY_MAPPING_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROPERTY_MAPPING_TYPE :  </b> </td>
		<td> <input type="text" name="thisPROPERTY_MAPPING_TYPEField" size="20" value="<? echo $thisPROPERTY_MAPPING_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROPERTY_VALUE :  </b> </td>
		<td> <input type="text" name="thisPROPERTY_VALUEField" size="20" value="<? echo $thisPROPERTY_VALUE; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_ONLINE_PROPERTIESForm" value="Update CMS_ONLINE_PROPERTIES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>