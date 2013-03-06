<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisUSER_ID = addslashes($_REQUEST['thisUSER_IDField']);
	$thisLOG_DATE = addslashes($_REQUEST['thisLOG_DATEField']);
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);
	$thisLOG_TYPE = addslashes($_REQUEST['thisLOG_TYPEField']);
	$thisLOG_DATA = addslashes($_REQUEST['thisLOG_DATAField']);

?>
<?
$sqlQuery = "INSERT INTO CMS_LOG (USER_ID , LOG_DATE , STRUCTURE_ID , LOG_TYPE , LOG_DATA ) VALUES ('$thisUSER_ID' , '$thisLOG_DATE' , '$thisSTRUCTURE_ID' , '$thisLOG_TYPE' , '$thisLOG_DATA' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>USER_ID : </b></td>
	<td><? echo $thisUSER_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LOG_DATE : </b></td>
	<td><? echo $thisLOG_DATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STRUCTURE_ID : </b></td>
	<td><? echo $thisSTRUCTURE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LOG_TYPE : </b></td>
	<td><? echo $thisLOG_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LOG_DATA : </b></td>
	<td><? echo $thisLOG_DATA; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>