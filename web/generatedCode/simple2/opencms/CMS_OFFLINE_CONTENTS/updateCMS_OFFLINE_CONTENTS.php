<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisFILE_CONTENT = addslashes($_REQUEST['thisFILE_CONTENTField']);

?>
<?
$sql = "UPDATE CMS_OFFLINE_CONTENTS SET RESOURCE_ID = '$thisRESOURCE_ID' , FILE_CONTENT = '$thisFILE_CONTENT'  WHERE RESOURCE_ID = '$thisRESOURCE_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>RESOURCE_ID : </b></td>
	<td><? echo $thisRESOURCE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>FILE_CONTENT : </b></td>
	<td><? echo $thisFILE_CONTENT; ?></td>
</tr>
</table>
<br><br><a href="listCMS_OFFLINE_CONTENTS.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>