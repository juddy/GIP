<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisNAME = addslashes($_REQUEST['thisNAMEField']);
	$thisSTRUCTURE_ID = addslashes($_REQUEST['thisSTRUCTURE_IDField']);
	$thisSTATE = addslashes($_REQUEST['thisSTATEField']);
	$thisDATE_CHANGED = addslashes($_REQUEST['thisDATE_CHANGEDField']);
	$thisLOCALE = addslashes($_REQUEST['thisLOCALEField']);

?>
<?
$sqlQuery = "INSERT INTO CMS_ONLINE_URLNAME_MAPPINGS (NAME , STRUCTURE_ID , STATE , DATE_CHANGED , LOCALE ) VALUES ('$thisNAME' , '$thisSTRUCTURE_ID' , '$thisSTATE' , '$thisDATE_CHANGED' , '$thisLOCALE' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>NAME : </b></td>
	<td><? echo $thisNAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STRUCTURE_ID : </b></td>
	<td><? echo $thisSTRUCTURE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STATE : </b></td>
	<td><? echo $thisSTATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATE_CHANGED : </b></td>
	<td><? echo $thisDATE_CHANGED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LOCALE : </b></td>
	<td><? echo $thisLOCALE; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>