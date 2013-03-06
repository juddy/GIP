<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPLUGIN_NAME = $_REQUEST['PLUGIN_NAMEField']
?>
<?php
$sql = "SELECT   * FROM PLUGINS WHERE PLUGIN_NAME = '$thisPLUGIN_NAME'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisPLUGIN_NAME = MYSQL_RESULT($result,$i,"PLUGIN_NAME");
	$thisPLUGIN_VERSION = MYSQL_RESULT($result,$i,"PLUGIN_VERSION");
	$thisPLUGIN_STATUS = MYSQL_RESULT($result,$i,"PLUGIN_STATUS");
	$thisPLUGIN_TYPE = MYSQL_RESULT($result,$i,"PLUGIN_TYPE");
	$thisPLUGIN_TYPE_VERSION = MYSQL_RESULT($result,$i,"PLUGIN_TYPE_VERSION");
	$thisPLUGIN_LIBRARY = MYSQL_RESULT($result,$i,"PLUGIN_LIBRARY");
	$thisPLUGIN_LIBRARY_VERSION = MYSQL_RESULT($result,$i,"PLUGIN_LIBRARY_VERSION");
	$thisPLUGIN_AUTHOR = MYSQL_RESULT($result,$i,"PLUGIN_AUTHOR");
	$thisPLUGIN_DESCRIPTION = MYSQL_RESULT($result,$i,"PLUGIN_DESCRIPTION");
	$thisPLUGIN_LICENSE = MYSQL_RESULT($result,$i,"PLUGIN_LICENSE");
	$thisLOAD_OPTION = MYSQL_RESULT($result,$i,"LOAD_OPTION");

}
?>

<h2>Update PLUGINS</h2>
<form name="pluginsUpdateForm" method="POST" action="updatePlugins.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_NAME :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_NAMEField" size="20" value="<? echo $thisPLUGIN_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_VERSION :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_VERSIONField" size="20" value="<? echo $thisPLUGIN_VERSION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_STATUS :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_STATUSField" size="20" value="<? echo $thisPLUGIN_STATUS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_TYPE :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_TYPEField" size="20" value="<? echo $thisPLUGIN_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_TYPE_VERSION :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_TYPE_VERSIONField" size="20" value="<? echo $thisPLUGIN_TYPE_VERSION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_LIBRARY :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_LIBRARYField" size="20" value="<? echo $thisPLUGIN_LIBRARY; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_LIBRARY_VERSION :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_LIBRARY_VERSIONField" size="20" value="<? echo $thisPLUGIN_LIBRARY_VERSION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_AUTHOR :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_AUTHORField" size="20" value="<? echo $thisPLUGIN_AUTHOR; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_DESCRIPTION :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_DESCRIPTIONField" size="20" value="<? echo $thisPLUGIN_DESCRIPTION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PLUGIN_LICENSE :  </b> </td>
		<td> <input type="text" name="thisPLUGIN_LICENSEField" size="20" value="<? echo $thisPLUGIN_LICENSE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LOAD_OPTION :  </b> </td>
		<td> <input type="text" name="thisLOAD_OPTIONField" size="20" value="<? echo $thisLOAD_OPTION; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdatePLUGINSForm" value="Update PLUGINS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>