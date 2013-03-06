<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisGRANTEE = $_REQUEST['GRANTEEField']
?>
<?php
$sql = "SELECT   * FROM USER_PRIVILEGES WHERE GRANTEE = '$thisGRANTEE'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisGRANTEE = MYSQL_RESULT($result,$i,"GRANTEE");
	$thisTABLE_CATALOG = MYSQL_RESULT($result,$i,"TABLE_CATALOG");
	$thisPRIVILEGE_TYPE = MYSQL_RESULT($result,$i,"PRIVILEGE_TYPE");
	$thisIS_GRANTABLE = MYSQL_RESULT($result,$i,"IS_GRANTABLE");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>GRANTEE : </b></td>
	<td><? echo $thisGRANTEE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLE_CATALOG : </b></td>
	<td><? echo $thisTABLE_CATALOG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PRIVILEGE_TYPE : </b></td>
	<td><? echo $thisPRIVILEGE_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>IS_GRANTABLE : </b></td>
	<td><? echo $thisIS_GRANTABLE; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="user_privilegesEnterForm" method="POST" action="deleteUSER_PRIVILEGES.php">
<input type="hidden" name="thisGRANTEEField" value="<? echo $thisGRANTEE; ?>">
<input type="submit" name="submitConfirmDeleteUSER_PRIVILEGESForm" value="Delete  from USER_PRIVILEGES">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>