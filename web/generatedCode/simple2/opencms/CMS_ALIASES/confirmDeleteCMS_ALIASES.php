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

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>Path : </b></td>
	<td><? echo $thisPath; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Site_root : </b></td>
	<td><? echo $thisSite_root; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Alias_mode : </b></td>
	<td><? echo $thisAlias_mode; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Structure_id : </b></td>
	<td><? echo $thisStructure_id; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="cms_aliasesEnterForm" method="POST" action="deleteCMS_ALIASES.php">
<input type="hidden" name="thisPathField" value="<? echo $thisPath; ?>">
<input type="submit" name="submitConfirmDeleteCMS_ALIASESForm" value="Delete  from CMS_ALIASES">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>