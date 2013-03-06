<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisRESOURCE_ID = $_REQUEST['RESOURCE_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_OFFLINE_ACCESSCONTROL WHERE RESOURCE_ID = '$thisRESOURCE_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisRESOURCE_ID = MYSQL_RESULT($result,$i,"RESOURCE_ID");
	$thisPRINCIPAL_ID = MYSQL_RESULT($result,$i,"PRINCIPAL_ID");
	$thisACCESS_ALLOWED = MYSQL_RESULT($result,$i,"ACCESS_ALLOWED");
	$thisACCESS_DENIED = MYSQL_RESULT($result,$i,"ACCESS_DENIED");
	$thisACCESS_FLAGS = MYSQL_RESULT($result,$i,"ACCESS_FLAGS");

}
?>

View Record<br><br>

<table>
<tr height="30">
	<td align="right"><b>RESOURCE_ID : </b></td>
	<td><? echo $thisRESOURCE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PRINCIPAL_ID : </b></td>
	<td><? echo $thisPRINCIPAL_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ACCESS_ALLOWED : </b></td>
	<td><? echo $thisACCESS_ALLOWED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ACCESS_DENIED : </b></td>
	<td><? echo $thisACCESS_DENIED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ACCESS_FLAGS : </b></td>
	<td><? echo $thisACCESS_FLAGS; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>