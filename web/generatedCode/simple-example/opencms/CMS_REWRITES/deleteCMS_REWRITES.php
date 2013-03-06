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
$sql = "DELETE FROM CMS_REWRITES WHERE ID = '$thisID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

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

<?php
include_once("../common/footer.php");
?>