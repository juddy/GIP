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

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>STRUCTURE_ID : </b></td>
	<td><? echo $thisSTRUCTURE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROPERTYDEF_ID : </b></td>
	<td><? echo $thisPROPERTYDEF_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROPERTY_MAPPING_ID : </b></td>
	<td><? echo $thisPROPERTY_MAPPING_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROPERTY_MAPPING_TYPE : </b></td>
	<td><? echo $thisPROPERTY_MAPPING_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROPERTY_VALUE : </b></td>
	<td><? echo $thisPROPERTY_VALUE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PUBLISH_TAG : </b></td>
	<td><? echo $thisPUBLISH_TAG; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="cms_history_propertiesEnterForm" method="POST" action="deleteCMS_HISTORY_PROPERTIES.php">
<input type="hidden" name="thisSTRUCTURE_IDField" value="<? echo $thisSTRUCTURE_ID; ?>">
<input type="submit" name="submitConfirmDeleteCMS_HISTORY_PROPERTIESForm" value="Delete  from CMS_HISTORY_PROPERTIES">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>