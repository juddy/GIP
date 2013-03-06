<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPRINCIPAL_ID = $_REQUEST['PRINCIPAL_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_SUBSCRIPTION WHERE PRINCIPAL_ID = '$thisPRINCIPAL_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisPRINCIPAL_ID = MYSQL_RESULT($result,$i,"PRINCIPAL_ID");
	$thisSTRUCTURE_ID = MYSQL_RESULT($result,$i,"STRUCTURE_ID");
	$thisDATE_DELETED = MYSQL_RESULT($result,$i,"DATE_DELETED");

}
?>

<h2>Update CMS_SUBSCRIPTION</h2>
<form name="cms_subscriptionUpdateForm" method="POST" action="updateCms_subscription.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_ID :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_IDField" size="20" value="<? echo $thisPRINCIPAL_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STRUCTURE_ID :  </b> </td>
		<td> <input type="text" name="thisSTRUCTURE_IDField" size="20" value="<? echo $thisSTRUCTURE_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATE_DELETED :  </b> </td>
		<td> <input type="text" name="thisDATE_DELETEDField" size="20" value="<? echo $thisDATE_DELETED; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_SUBSCRIPTIONForm" value="Update CMS_SUBSCRIPTION">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>