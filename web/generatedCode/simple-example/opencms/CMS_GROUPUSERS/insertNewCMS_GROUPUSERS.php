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
$sqlQuery = "INSERT INTO CMS_GROUPUSERS (GROUP_ID , USER_ID , GROUPUSER_FLAGS ) VALUES ('$thisGROUP_ID' , '$thisUSER_ID' , '$thisGROUPUSER_FLAGS' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

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

<?php
include_once("../common/footer.php");
?>