<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPath = $_REQUEST['pathField']
?>
<?php
$sql = "SELECT   * FROM CMS_ALIASES WHERE path = '$thisPath'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisPath = MYSQL_RESULT($result,$i,"path");
	$thisSite_root = MYSQL_RESULT($result,$i,"site_root");
	$thisAlias_mode = MYSQL_RESULT($result,$i,"alias_mode");
	$thisStructure_id = MYSQL_RESULT($result,$i,"structure_id");

}
?>

View Record<br><br>

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