<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisID = addslashes($_REQUEST['thisIDField']);
	$thisALIAS_MODE = addslashes($_REQUEST['thisALIAS_MODEField']);
	$thisPATTERN = addslashes($_REQUEST['thisPATTERNField']);
	$thisREPLACEMENT = addslashes($_REQUEST['thisREPLACEMENTField']);
	$thisSITE_ROOT = addslashes($_REQUEST['thisSITE_ROOTField']);

?>
<?
$sql = "UPDATE CMS_REWRITES SET ID = '$thisID' , ALIAS_MODE = '$thisALIAS_MODE' , PATTERN = '$thisPATTERN' , REPLACEMENT = '$thisREPLACEMENT' , SITE_ROOT = '$thisSITE_ROOT'  WHERE ID = '$thisID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>ID : </b></td>
	<td><? echo $thisID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ALIAS_MODE : </b></td>
	<td><? echo $thisALIAS_MODE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PATTERN : </b></td>
	<td><? echo $thisPATTERN; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>REPLACEMENT : </b></td>
	<td><? echo $thisREPLACEMENT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SITE_ROOT : </b></td>
	<td><? echo $thisSITE_ROOT; ?></td>
</tr>
</table>
<br><br><a href="listCMS_REWRITES.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>