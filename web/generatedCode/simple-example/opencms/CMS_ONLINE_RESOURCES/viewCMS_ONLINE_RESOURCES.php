<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisRESOURCE_ID = $_REQUEST['RESOURCE_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_ONLINE_RESOURCES WHERE RESOURCE_ID = '$thisRESOURCE_ID'";
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
	$thisRESOURCE_TYPE = MYSQL_RESULT($result,$i,"RESOURCE_TYPE");
	$thisRESOURCE_FLAGS = MYSQL_RESULT($result,$i,"RESOURCE_FLAGS");
	$thisRESOURCE_STATE = MYSQL_RESULT($result,$i,"RESOURCE_STATE");
	$thisRESOURCE_SIZE = MYSQL_RESULT($result,$i,"RESOURCE_SIZE");
	$thisDATE_CONTENT = MYSQL_RESULT($result,$i,"DATE_CONTENT");
	$thisSIBLING_COUNT = MYSQL_RESULT($result,$i,"SIBLING_COUNT");
	$thisDATE_CREATED = MYSQL_RESULT($result,$i,"DATE_CREATED");
	$thisDATE_LASTMODIFIED = MYSQL_RESULT($result,$i,"DATE_LASTMODIFIED");
	$thisUSER_CREATED = MYSQL_RESULT($result,$i,"USER_CREATED");
	$thisUSER_LASTMODIFIED = MYSQL_RESULT($result,$i,"USER_LASTMODIFIED");
	$thisPROJECT_LASTMODIFIED = MYSQL_RESULT($result,$i,"PROJECT_LASTMODIFIED");
	$thisRESOURCE_VERSION = MYSQL_RESULT($result,$i,"RESOURCE_VERSION");

}
?>

View Record<br><br>

<table>
<tr height="30">
	<td align="right"><b>RESOURCE_ID : </b></td>
	<td><? echo $thisRESOURCE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_TYPE : </b></td>
	<td><? echo $thisRESOURCE_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_FLAGS : </b></td>
	<td><? echo $thisRESOURCE_FLAGS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_STATE : </b></td>
	<td><? echo $thisRESOURCE_STATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_SIZE : </b></td>
	<td><? echo $thisRESOURCE_SIZE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATE_CONTENT : </b></td>
	<td><? echo $thisDATE_CONTENT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SIBLING_COUNT : </b></td>
	<td><? echo $thisSIBLING_COUNT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATE_CREATED : </b></td>
	<td><? echo $thisDATE_CREATED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATE_LASTMODIFIED : </b></td>
	<td><? echo $thisDATE_LASTMODIFIED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>USER_CREATED : </b></td>
	<td><? echo $thisUSER_CREATED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>USER_LASTMODIFIED : </b></td>
	<td><? echo $thisUSER_LASTMODIFIED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROJECT_LASTMODIFIED : </b></td>
	<td><? echo $thisPROJECT_LASTMODIFIED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_VERSION : </b></td>
	<td><? echo $thisRESOURCE_VERSION; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>