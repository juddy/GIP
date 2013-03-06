<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisVARIABLE_NAME = $_REQUEST['VARIABLE_NAMEField']
?>
<?php
$sql = "SELECT   * FROM SESSION_STATUS WHERE VARIABLE_NAME = '$thisVARIABLE_NAME'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisVARIABLE_NAME = MYSQL_RESULT($result,$i,"VARIABLE_NAME");
	$thisVARIABLE_VALUE = MYSQL_RESULT($result,$i,"VARIABLE_VALUE");

}
?>

<h2>Update SESSION_STATUS</h2>
<form name="session_statusUpdateForm" method="POST" action="updateSession_status.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> VARIABLE_NAME :  </b> </td>
		<td> <input type="text" name="thisVARIABLE_NAMEField" size="20" value="<? echo $thisVARIABLE_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> VARIABLE_VALUE :  </b> </td>
		<td> <input type="text" name="thisVARIABLE_VALUEField" size="20" value="<? echo $thisVARIABLE_VALUE; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateSESSION_STATUSForm" value="Update SESSION_STATUS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>