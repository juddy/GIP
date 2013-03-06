<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisSTRUCTURE_ID = $_REQUEST['STRUCTURE_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_HISTORY_PROPERTIES WHERE STRUCTURE_ID = '$thisSTRUCTURE_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisSTRUCTURE_ID = MYSQL_RESULT($result,$i,"STRUCTURE_ID");
	$thisPROPERTYDEF_ID = MYSQL_RESULT($result,$i,"PROPERTYDEF_ID");
	$thisPROPERTY_MAPPING_ID = MYSQL_RESULT($result,$i,"PROPERTY_MAPPING_ID");
	$thisPROPERTY_MAPPING_TYPE = MYSQL_RESULT($result,$i,"PROPERTY_MAPPING_TYPE");
	$thisPROPERTY_VALUE = MYSQL_RESULT($result,$i,"PROPERTY_VALUE");
	$thisPUBLISH_TAG = MYSQL_RESULT($result,$i,"PUBLISH_TAG");

}
?>

<h2>Update CMS_HISTORY_PROPERTIES</h2>
<form name="cms_history_propertiesUpdateForm" method="POST" action="updateCms_history_properties.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> STRUCTURE_ID :  </b> </td>
		<td> <input type="text" name="thisSTRUCTURE_IDField" size="20" value="<? echo $thisSTRUCTURE_ID; ?>">  </td> 
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
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_TAG :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_TAGField" size="20" value="<? echo $thisPUBLISH_TAG; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_HISTORY_PROPERTIESForm" value="Update CMS_HISTORY_PROPERTIES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>