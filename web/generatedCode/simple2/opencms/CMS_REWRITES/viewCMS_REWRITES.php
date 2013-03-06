<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisID = $_REQUEST['IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_REWRITES WHERE ID = '$thisID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisID = MYSQL_RESULT($result,$i,"ID");
	$thisALIAS_MODE = MYSQL_RESULT($result,$i,"ALIAS_MODE");
	$thisPATTERN = MYSQL_RESULT($result,$i,"PATTERN");
	$thisREPLACEMENT = MYSQL_RESULT($result,$i,"REPLACEMENT");
	$thisSITE_ROOT = MYSQL_RESULT($result,$i,"SITE_ROOT");

}
?>

View Record<br><br>

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