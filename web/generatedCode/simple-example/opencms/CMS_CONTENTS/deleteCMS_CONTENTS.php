<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisFILE_CONTENT = addslashes($_REQUEST['thisFILE_CONTENTField']);
	$thisPUBLISH_TAG_FROM = addslashes($_REQUEST['thisPUBLISH_TAG_FROMField']);
	$thisPUBLISH_TAG_TO = addslashes($_REQUEST['thisPUBLISH_TAG_TOField']);
	$thisONLINE_FLAG = addslashes($_REQUEST['thisONLINE_FLAGField']);

?>
<?
$sql = "DELETE FROM CMS_CONTENTS WHERE RESOURCE_ID = '$thisRESOURCE_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

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