<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisPLUGIN_NAME = addslashes($_REQUEST['thisPLUGIN_NAMEField']);
	$thisPLUGIN_VERSION = addslashes($_REQUEST['thisPLUGIN_VERSIONField']);
	$thisPLUGIN_STATUS = addslashes($_REQUEST['thisPLUGIN_STATUSField']);
	$thisPLUGIN_TYPE = addslashes($_REQUEST['thisPLUGIN_TYPEField']);
	$thisPLUGIN_TYPE_VERSION = addslashes($_REQUEST['thisPLUGIN_TYPE_VERSIONField']);
	$thisPLUGIN_LIBRARY = addslashes($_REQUEST['thisPLUGIN_LIBRARYField']);
	$thisPLUGIN_LIBRARY_VERSION = addslashes($_REQUEST['thisPLUGIN_LIBRARY_VERSIONField']);
	$thisPLUGIN_AUTHOR = addslashes($_REQUEST['thisPLUGIN_AUTHORField']);
	$thisPLUGIN_DESCRIPTION = addslashes($_REQUEST['thisPLUGIN_DESCRIPTIONField']);
	$thisPLUGIN_LICENSE = addslashes($_REQUEST['thisPLUGIN_LICENSEField']);
	$thisLOAD_OPTION = addslashes($_REQUEST['thisLOAD_OPTIONField']);

?>
<?
$sqlQuery = "INSERT INTO PLUGINS (PLUGIN_NAME , PLUGIN_VERSION , PLUGIN_STATUS , PLUGIN_TYPE , PLUGIN_TYPE_VERSION , PLUGIN_LIBRARY , PLUGIN_LIBRARY_VERSION , PLUGIN_AUTHOR , PLUGIN_DESCRIPTION , PLUGIN_LICENSE , LOAD_OPTION ) VALUES ('$thisPLUGIN_NAME' , '$thisPLUGIN_VERSION' , '$thisPLUGIN_STATUS' , '$thisPLUGIN_TYPE' , '$thisPLUGIN_TYPE_VERSION' , '$thisPLUGIN_LIBRARY' , '$thisPLUGIN_LIBRARY_VERSION' , '$thisPLUGIN_AUTHOR' , '$thisPLUGIN_DESCRIPTION' , '$thisPLUGIN_LICENSE' , '$thisLOAD_OPTION' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

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