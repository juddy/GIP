<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPath = $_REQUEST['pathField']
?>
<?php
$sql = "SELECT   * FROM CMS_ALIASES WHERE path = '$thisPath'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisPath = MYSQL_RESULT($result,$i,"path");
	$thisSite_root = MYSQL_RESULT($result,$i,"site_root");
	$thisAlias_mode = MYSQL_RESULT($result,$i,"alias_mode");
	$thisStructure_id = MYSQL_RESULT($result,$i,"structure_id");

}
?>

<h2>Update CMS_ALIASES</h2>
<form name="cms_aliasesUpdateForm" method="POST" action="updateCms_aliases.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> Path :  </b> </td>
		<td> <input type="text" name="thisPathField" size="20" value="<? echo $thisPath; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Site_root :  </b> </td>
		<td> <input type="text" name="thisSite_rootField" size="20" value="<? echo $thisSite_root; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Alias_mode :  </b> </td>
		<td> <input type="text" name="thisAlias_modeField" size="20" value="<? echo $thisAlias_mode; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Structure_id :  </b> </td>
		<td> <input type="text" name="thisStructure_idField" size="20" value="<? echo $thisStructure_id; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_ALIASESForm" value="Update CMS_ALIASES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>