<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPLUGIN_NAME = $_REQUEST['PLUGIN_NAMEField']
?>
<?php
$sql = "SELECT   * FROM PLUGINS WHERE PLUGIN_NAME = '$thisPLUGIN_NAME'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisPLUGIN_NAME = MYSQL_RESULT($result,$i,"PLUGIN_NAME");
	$thisPLUGIN_VERSION = MYSQL_RESULT($result,$i,"PLUGIN_VERSION");
	$thisPLUGIN_STATUS = MYSQL_RESULT($result,$i,"PLUGIN_STATUS");
	$thisPLUGIN_TYPE = MYSQL_RESULT($result,$i,"PLUGIN_TYPE");
	$thisPLUGIN_TYPE_VERSION = MYSQL_RESULT($result,$i,"PLUGIN_TYPE_VERSION");
	$thisPLUGIN_LIBRARY = MYSQL_RESULT($result,$i,"PLUGIN_LIBRARY");
	$thisPLUGIN_LIBRARY_VERSION = MYSQL_RESULT($result,$i,"PLUGIN_LIBRARY_VERSION");
	$thisPLUGIN_AUTHOR = MYSQL_RESULT($result,$i,"PLUGIN_AUTHOR");
	$thisPLUGIN_DESCRIPTION = MYSQL_RESULT($result,$i,"PLUGIN_DESCRIPTION");
	$thisPLUGIN_LICENSE = MYSQL_RESULT($result,$i,"PLUGIN_LICENSE");
	$thisLOAD_OPTION = MYSQL_RESULT($result,$i,"LOAD_OPTION");

}
?>

View Record<br><br>

<table>
<tr height="30">
	<td align="right"><b>PLUGIN_NAME : </b></td>
	<td><? echo $thisPLUGIN_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PLUGIN_VERSION : </b></td>
	<td><? echo $thisPLUGIN_VERSION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PLUGIN_STATUS : </b></td>
	<td><? echo $thisPLUGIN_STATUS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PLUGIN_TYPE : </b></td>
	<td><? echo $thisPLUGIN_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PLUGIN_TYPE_VERSION : </b></td>
	<td><? echo $thisPLUGIN_TYPE_VERSION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PLUGIN_LIBRARY : </b></td>
	<td><? echo $thisPLUGIN_LIBRARY; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PLUGIN_LIBRARY_VERSION : </b></td>
	<td><? echo $thisPLUGIN_LIBRARY_VERSION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PLUGIN_AUTHOR : </b></td>
	<td><? echo $thisPLUGIN_AUTHOR; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PLUGIN_DESCRIPTION : </b></td>
	<td><? echo $thisPLUGIN_DESCRIPTION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PLUGIN_LICENSE : </b></td>
	<td><? echo $thisPLUGIN_LICENSE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LOAD_OPTION : </b></td>
	<td><? echo $thisLOAD_OPTION; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>