<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisID = $_REQUEST['IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_REWRITES WHERE ID = '$thisID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisID = MYSQL_RESULT($result,$i,"ID");
	$thisALIAS_MODE = MYSQL_RESULT($result,$i,"ALIAS_MODE");
	$thisPATTERN = MYSQL_RESULT($result,$i,"PATTERN");
	$thisREPLACEMENT = MYSQL_RESULT($result,$i,"REPLACEMENT");
	$thisSITE_ROOT = MYSQL_RESULT($result,$i,"SITE_ROOT");

}
?>

<h2>Update CMS_REWRITES</h2>
<form name="cms_rewritesUpdateForm" method="POST" action="updateCms_rewrites.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> ID :  </b> </td>
		<td> <input type="text" name="thisIDField" size="20" value="<? echo $thisID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ALIAS_MODE :  </b> </td>
		<td> <input type="text" name="thisALIAS_MODEField" size="20" value="<? echo $thisALIAS_MODE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PATTERN :  </b> </td>
		<td> <input type="text" name="thisPATTERNField" size="20" value="<? echo $thisPATTERN; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> REPLACEMENT :  </b> </td>
		<td> <input type="text" name="thisREPLACEMENTField" size="20" value="<? echo $thisREPLACEMENT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SITE_ROOT :  </b> </td>
		<td> <input type="text" name="thisSITE_ROOTField" size="20" value="<? echo $thisSITE_ROOT; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_REWRITESForm" value="Update CMS_REWRITES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>