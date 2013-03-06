<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisUSER_NAME = addslashes($_REQUEST['thisUSER_NAMEField']);
	$thisUSER_PASSWORD = addslashes($_REQUEST['thisUSER_PASSWORDField']);
	$thisUSER_FIRSTNAME = addslashes($_REQUEST['thisUSER_FIRSTNAMEField']);
	$thisUSER_LASTNAME = addslashes($_REQUEST['thisUSER_LASTNAMEField']);
	$thisUSER_EMAIL = addslashes($_REQUEST['thisUSER_EMAILField']);
	$thisUSER_LASTLOGIN = addslashes($_REQUEST['thisUSER_LASTLOGINField']);
	$thisUSER_FLAGS = addslashes($_REQUEST['thisUSER_FLAGSField']);
	$thisUSER_OU = addslashes($_REQUEST['thisUSER_OUField']);
	$thisUSER_DATECREATED = addslashes($_REQUEST['thisUSER_DATECREATEDField']);

?>
<?
$sql = "DELETE FROM CMS_USERS WHERE USER_ID = '$thisUSER_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

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

<?php
include_once("../common/footer.php");
?>