<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisRESOURCE_ID = $_REQUEST['RESOURCE_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_CONTENTS WHERE RESOURCE_ID = '$thisRESOURCE_ID'";
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
	$thisFILE_CONTENT = MYSQL_RESULT($result,$i,"FILE_CONTENT");
	$thisPUBLISH_TAG_FROM = MYSQL_RESULT($result,$i,"PUBLISH_TAG_FROM");
	$thisPUBLISH_TAG_TO = MYSQL_RESULT($result,$i,"PUBLISH_TAG_TO");
	$thisONLINE_FLAG = MYSQL_RESULT($result,$i,"ONLINE_FLAG");

}
?>

View Record<br><br>

<table>
<tr height="30">
	<td align="right"><b>RESOURCE_ID : </b></td>
	<td><? echo $thisRESOURCE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>FILE_CONTENT : </b></td>
	<td><? echo $thisFILE_CONTENT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PUBLISH_TAG_FROM : </b></td>
	<td><? echo $thisPUBLISH_TAG_FROM; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PUBLISH_TAG_TO : </b></td>
	<td><? echo $thisPUBLISH_TAG_TO; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ONLINE_FLAG : </b></td>
	<td><? echo $thisONLINE_FLAG; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>