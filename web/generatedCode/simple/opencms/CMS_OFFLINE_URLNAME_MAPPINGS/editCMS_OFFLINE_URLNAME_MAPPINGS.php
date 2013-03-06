<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisNAME = $_REQUEST['NAMEField']
?>
<?php
$sql = "SELECT   * FROM CMS_OFFLINE_URLNAME_MAPPINGS WHERE NAME = '$thisNAME'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisNAME = MYSQL_RESULT($result,$i,"NAME");
	$thisSTRUCTURE_ID = MYSQL_RESULT($result,$i,"STRUCTURE_ID");
	$thisSTATE = MYSQL_RESULT($result,$i,"STATE");
	$thisDATE_CHANGED = MYSQL_RESULT($result,$i,"DATE_CHANGED");
	$thisLOCALE = MYSQL_RESULT($result,$i,"LOCALE");

}
?>

<h2>Update CMS_OFFLINE_URLNAME_MAPPINGS</h2>
<form name="cms_offline_urlname_mappingsUpdateForm" method="POST" action="updateCms_offline_urlname_mappings.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> NAME :  </b> </td>
		<td> <input type="text" name="thisNAMEField" size="20" value="<? echo $thisNAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STRUCTURE_ID :  </b> </td>
		<td> <input type="text" name="thisSTRUCTURE_IDField" size="20" value="<? echo $thisSTRUCTURE_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STATE :  </b> </td>
		<td> <input type="text" name="thisSTATEField" size="20" value="<? echo $thisSTATE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATE_CHANGED :  </b> </td>
		<td> <input type="text" name="thisDATE_CHANGEDField" size="20" value="<? echo $thisDATE_CHANGED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LOCALE :  </b> </td>
		<td> <input type="text" name="thisLOCALEField" size="20" value="<? echo $thisLOCALE; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_OFFLINE_URLNAME_MAPPINGSForm" value="Update CMS_OFFLINE_URLNAME_MAPPINGS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>