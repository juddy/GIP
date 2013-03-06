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

<h2>Update CMS_USERS</h2>
<form name="cms_usersUpdateForm" method="POST" action="updateCms_users.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> USER_ID :  </b> </td>
		<td> <input type="text" name="thisUSER_IDField" size="20" value="<? echo $thisUSER_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_NAME :  </b> </td>
		<td> <input type="text" name="thisUSER_NAMEField" size="20" value="<? echo $thisUSER_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_PASSWORD :  </b> </td>
		<td> <input type="text" name="thisUSER_PASSWORDField" size="20" value="<? echo $thisUSER_PASSWORD; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_FIRSTNAME :  </b> </td>
		<td> <input type="text" name="thisUSER_FIRSTNAMEField" size="20" value="<? echo $thisUSER_FIRSTNAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_LASTNAME :  </b> </td>
		<td> <input type="text" name="thisUSER_LASTNAMEField" size="20" value="<? echo $thisUSER_LASTNAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_EMAIL :  </b> </td>
		<td> <input type="text" name="thisUSER_EMAILField" size="20" value="<? echo $thisUSER_EMAIL; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_LASTLOGIN :  </b> </td>
		<td> <input type="text" name="thisUSER_LASTLOGINField" size="20" value="<? echo $thisUSER_LASTLOGIN; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_FLAGS :  </b> </td>
		<td> <input type="text" name="thisUSER_FLAGSField" size="20" value="<? echo $thisUSER_FLAGS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_OU :  </b> </td>
		<td> <input type="text" name="thisUSER_OUField" size="20" value="<? echo $thisUSER_OU; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_DATECREATED :  </b> </td>
		<td> <input type="text" name="thisUSER_DATECREATEDField" size="20" value="<? echo $thisUSER_DATECREATED; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_USERSForm" value="Update CMS_USERS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>