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

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>ID : </b></td>
	<td><? echo $thisID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ALIAS_MODE : </b></td>
	<td><? echo $thisALIAS_MODE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PATTERN : </b></td>
	<td><? echo $thisPATTERN; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>REPLACEMENT : </b></td>
	<td><? echo $thisREPLACEMENT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SITE_ROOT : </b></td>
	<td><? echo $thisSITE_ROOT; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="cms_rewritesEnterForm" method="POST" action="deleteCMS_REWRITES.php">
<input type="hidden" name="thisIDField" value="<? echo $thisID; ?>">
<input type="submit" name="submitConfirmDeleteCMS_REWRITESForm" value="Delete  from CMS_REWRITES">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>