<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPROJECT_ID = $_REQUEST['PROJECT_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_PROJECTS WHERE PROJECT_ID = '$thisPROJECT_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisPROJECT_ID = MYSQL_RESULT($result,$i,"PROJECT_ID");
	$thisPROJECT_NAME = MYSQL_RESULT($result,$i,"PROJECT_NAME");
	$thisPROJECT_DESCRIPTION = MYSQL_RESULT($result,$i,"PROJECT_DESCRIPTION");
	$thisPROJECT_FLAGS = MYSQL_RESULT($result,$i,"PROJECT_FLAGS");
	$thisPROJECT_TYPE = MYSQL_RESULT($result,$i,"PROJECT_TYPE");
	$thisUSER_ID = MYSQL_RESULT($result,$i,"USER_ID");
	$thisGROUP_ID = MYSQL_RESULT($result,$i,"GROUP_ID");
	$thisMANAGERGROUP_ID = MYSQL_RESULT($result,$i,"MANAGERGROUP_ID");
	$thisDATE_CREATED = MYSQL_RESULT($result,$i,"DATE_CREATED");
	$thisPROJECT_OU = MYSQL_RESULT($result,$i,"PROJECT_OU");

}
?>

<h2>Update CMS_PROJECTS</h2>
<form name="cms_projectsUpdateForm" method="POST" action="updateCms_projects.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_ID :  </b> </td>
		<td> <input type="text" name="thisPROJECT_IDField" size="20" value="<? echo $thisPROJECT_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_NAME :  </b> </td>
		<td> <input type="text" name="thisPROJECT_NAMEField" size="20" value="<? echo $thisPROJECT_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_DESCRIPTION :  </b> </td>
		<td> <input type="text" name="thisPROJECT_DESCRIPTIONField" size="20" value="<? echo $thisPROJECT_DESCRIPTION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_FLAGS :  </b> </td>
		<td> <input type="text" name="thisPROJECT_FLAGSField" size="20" value="<? echo $thisPROJECT_FLAGS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_TYPE :  </b> </td>
		<td> <input type="text" name="thisPROJECT_TYPEField" size="20" value="<? echo $thisPROJECT_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_ID :  </b> </td>
		<td> <input type="text" name="thisUSER_IDField" size="20" value="<? echo $thisUSER_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> GROUP_ID :  </b> </td>
		<td> <input type="text" name="thisGROUP_IDField" size="20" value="<? echo $thisGROUP_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> MANAGERGROUP_ID :  </b> </td>
		<td> <input type="text" name="thisMANAGERGROUP_IDField" size="20" value="<? echo $thisMANAGERGROUP_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATE_CREATED :  </b> </td>
		<td> <input type="text" name="thisDATE_CREATEDField" size="20" value="<? echo $thisDATE_CREATED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PROJECT_OU :  </b> </td>
		<td> <input type="text" name="thisPROJECT_OUField" size="20" value="<? echo $thisPROJECT_OU; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_PROJECTSForm" value="Update CMS_PROJECTS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>