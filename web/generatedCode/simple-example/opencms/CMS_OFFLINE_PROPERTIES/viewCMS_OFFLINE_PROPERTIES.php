<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPROPERTY_ID = $_REQUEST['PROPERTY_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_OFFLINE_PROPERTIES WHERE PROPERTY_ID = '$thisPROPERTY_ID'";
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

View Record<br><br>

<table>
<tr height="30">
	<td align="right"><b>PROPERTY_ID : </b></td>
	<td><? echo $thisPROPERTY_ID; ?></td>
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
</table>

<?php
include_once("../common/footer.php");
?>