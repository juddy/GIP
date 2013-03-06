<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPRINCIPAL_ID = $_REQUEST['PRINCIPAL_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_HISTORY_PRINCIPALS WHERE PRINCIPAL_ID = '$thisPRINCIPAL_ID'";
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
	$thisPRINCIPAL_NAME = MYSQL_RESULT($result,$i,"PRINCIPAL_NAME");
	$thisPRINCIPAL_DESCRIPTION = MYSQL_RESULT($result,$i,"PRINCIPAL_DESCRIPTION");
	$thisPRINCIPAL_OU = MYSQL_RESULT($result,$i,"PRINCIPAL_OU");
	$thisPRINCIPAL_EMAIL = MYSQL_RESULT($result,$i,"PRINCIPAL_EMAIL");
	$thisPRINCIPAL_TYPE = MYSQL_RESULT($result,$i,"PRINCIPAL_TYPE");
	$thisPRINCIPAL_USERDELETED = MYSQL_RESULT($result,$i,"PRINCIPAL_USERDELETED");
	$thisPRINCIPAL_DATEDELETED = MYSQL_RESULT($result,$i,"PRINCIPAL_DATEDELETED");

}
?>

<h2>Update CMS_HISTORY_PRINCIPALS</h2>
<form name="cms_history_principalsUpdateForm" method="POST" action="updateCms_history_principals.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_ID :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_IDField" size="20" value="<? echo $thisPRINCIPAL_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_NAME :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_NAMEField" size="20" value="<? echo $thisPRINCIPAL_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_DESCRIPTION :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_DESCRIPTIONField" size="20" value="<? echo $thisPRINCIPAL_DESCRIPTION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_OU :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_OUField" size="20" value="<? echo $thisPRINCIPAL_OU; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_EMAIL :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_EMAILField" size="20" value="<? echo $thisPRINCIPAL_EMAIL; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_TYPE :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_TYPEField" size="20" value="<? echo $thisPRINCIPAL_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_USERDELETED :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_USERDELETEDField" size="20" value="<? echo $thisPRINCIPAL_USERDELETED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PRINCIPAL_DATEDELETED :  </b> </td>
		<td> <input type="text" name="thisPRINCIPAL_DATEDELETEDField" size="20" value="<? echo $thisPRINCIPAL_DATEDELETED; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_HISTORY_PRINCIPALSForm" value="Update CMS_HISTORY_PRINCIPALS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>