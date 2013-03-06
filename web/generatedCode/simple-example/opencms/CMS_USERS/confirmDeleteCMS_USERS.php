<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisUSER_ID = $_REQUEST['USER_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_USERS WHERE USER_ID = '$thisUSER_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisUSER_ID = MYSQL_RESULT($result,$i,"USER_ID");
	$thisUSER_NAME = MYSQL_RESULT($result,$i,"USER_NAME");
	$thisUSER_PASSWORD = MYSQL_RESULT($result,$i,"USER_PASSWORD");
	$thisUSER_FIRSTNAME = MYSQL_RESULT($result,$i,"USER_FIRSTNAME");
	$thisUSER_LASTNAME = MYSQL_RESULT($result,$i,"USER_LASTNAME");
	$thisUSER_EMAIL = MYSQL_RESULT($result,$i,"USER_EMAIL");
	$thisUSER_LASTLOGIN = MYSQL_RESULT($result,$i,"USER_LASTLOGIN");
	$thisUSER_FLAGS = MYSQL_RESULT($result,$i,"USER_FLAGS");
	$thisUSER_OU = MYSQL_RESULT($result,$i,"USER_OU");
	$thisUSER_DATECREATED = MYSQL_RESULT($result,$i,"USER_DATECREATED");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>USER_ID : </b></td>
	<td><? echo $thisUSER_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>USER_NAME : </b></td>
	<td><? echo $thisUSER_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>USER_PASSWORD : </b></td>
	<td><? echo $thisUSER_PASSWORD; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>USER_FIRSTNAME : </b></td>
	<td><? echo $thisUSER_FIRSTNAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>USER_LASTNAME : </b></td>
	<td><? echo $thisUSER_LASTNAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>USER_EMAIL : </b></td>
	<td><? echo $thisUSER_EMAIL; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>USER_LASTLOGIN : </b></td>
	<td><? echo $thisUSER_LASTLOGIN; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>USER_FLAGS : </b></td>
	<td><? echo $thisUSER_FLAGS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>USER_OU : </b></td>
	<td><? echo $thisUSER_OU; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>USER_DATECREATED : </b></td>
	<td><? echo $thisUSER_DATECREATED; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="cms_usersEnterForm" method="POST" action="deleteCMS_USERS.php">
<input type="hidden" name="thisUSER_IDField" value="<? echo $thisUSER_ID; ?>">
<input type="submit" name="submitConfirmDeleteCMS_USERSForm" value="Delete  from CMS_USERS">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>