<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);
	$thisDATE_CHANGED = addslashes($_REQUEST['thisDATE_CHANGEDField']);

?>
<?
$sqlQuery = "INSERT INTO CMS_USER_PUBLISH_LIST (USER_ID , STRUCTURE_ID , DATE_CHANGED ) VALUES ('$thisUSER_ID' , '$thisSTRUCTURE_ID' , '$thisDATE_CHANGED' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>USER_ID : </b></td>
	<td><? echo $thisUSER_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STRUCTURE_ID : </b></td>
	<td><? echo $thisSTRUCTURE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATE_CHANGED : </b></td>
	<td><? echo $thisDATE_CHANGED; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>