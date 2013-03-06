<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPROPERTYDEF_ID = $_REQUEST['PROPERTYDEF_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_HISTORY_PROPERTYDEF WHERE PROPERTYDEF_ID = '$thisPROPERTYDEF_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisPROPERTYDEF_ID = MYSQL_RESULT($result,$i,"PROPERTYDEF_ID");
	$thisPROPERTYDEF_NAME = MYSQL_RESULT($result,$i,"PROPERTYDEF_NAME");
	$thisPROPERTYDEF_TYPE = MYSQL_RESULT($result,$i,"PROPERTYDEF_TYPE");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>PROPERTYDEF_ID : </b></td>
	<td><? echo $thisPROPERTYDEF_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROPERTYDEF_NAME : </b></td>
	<td><? echo $thisPROPERTYDEF_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROPERTYDEF_TYPE : </b></td>
	<td><? echo $thisPROPERTYDEF_TYPE; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="cms_history_propertydefEnterForm" method="POST" action="deleteCMS_HISTORY_PROPERTYDEF.php">
<input type="hidden" name="thisPROPERTYDEF_IDField" value="<? echo $thisPROPERTYDEF_ID; ?>">
<input type="submit" name="submitConfirmDeleteCMS_HISTORY_PROPERTYDEFForm" value="Delete  from CMS_HISTORY_PROPERTYDEF">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>