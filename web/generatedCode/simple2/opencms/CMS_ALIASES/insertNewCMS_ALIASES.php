<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisPath = addslashes($_REQUEST['thisPathField']);
	$thisSite_root = addslashes($_REQUEST['thisSite_rootField']);
	$thisAlias_mode = addslashes($_REQUEST['thisAlias_modeField']);
	$thisStructure_id = addslashes($_REQUEST['thisStructure_idField']);

?>
<?
$sqlQuery = "INSERT INTO CMS_ALIASES (path , site_root , alias_mode , structure_id ) VALUES ('$thisPath' , '$thisSite_root' , '$thisAlias_mode' , '$thisStructure_id' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>Path : </b></td>
	<td><? echo $thisPath; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Site_root : </b></td>
	<td><? echo $thisSite_root; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Alias_mode : </b></td>
	<td><? echo $thisAlias_mode; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Structure_id : </b></td>
	<td><? echo $thisStructure_id; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>