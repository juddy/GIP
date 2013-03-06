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
$sql = "UPDATE CMS_ALIASES SET path = '$thisPath' , site_root = '$thisSite_root' , alias_mode = '$thisAlias_mode' , structure_id = '$thisStructure_id'  WHERE path = '$thisPath'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

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
<br><br><a href="listCMS_ALIASES.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>