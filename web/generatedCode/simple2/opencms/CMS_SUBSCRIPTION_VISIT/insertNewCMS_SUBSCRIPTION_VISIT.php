<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisVISIT_DATE = addslashes($_REQUEST['thisVISIT_DATEField']);
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);

?>
<?
$sqlQuery = "INSERT INTO CMS_SUBSCRIPTION_VISIT (USER_ID , VISIT_DATE , STRUCTURE_ID ) VALUES ('$thisUSER_ID' , '$thisVISIT_DATE' , '$thisSTRUCTURE_ID' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>USER_ID : </b></td>
	<td><? echo $thisUSER_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>VISIT_DATE : </b></td>
	<td><? echo $thisVISIT_DATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STRUCTURE_ID : </b></td>
	<td><? echo $thisSTRUCTURE_ID; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>