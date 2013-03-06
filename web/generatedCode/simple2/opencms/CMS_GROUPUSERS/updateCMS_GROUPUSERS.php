<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisGROUP_ID = addslashes($_REQUEST['thisGROUP_IDField']);
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisGROUPUSER_FLAGS = addslashes($_REQUEST['thisGROUPUSER_FLAGSField']);

?>
<?
$sql = "UPDATE CMS_GROUPUSERS SET GROUP_ID = '$thisGROUP_ID' , USER_ID = '$thisUSER_ID' , GROUPUSER_FLAGS = '$thisGROUPUSER_FLAGS'  WHERE GROUP_ID = '$thisGROUP_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>GROUP_ID : </b></td>
	<td><? echo $thisGROUP_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>USER_ID : </b></td>
	<td><? echo $thisUSER_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>GROUPUSER_FLAGS : </b></td>
	<td><? echo $thisGROUPUSER_FLAGS; ?></td>
</tr>
</table>
<br><br><a href="listCMS_GROUPUSERS.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>