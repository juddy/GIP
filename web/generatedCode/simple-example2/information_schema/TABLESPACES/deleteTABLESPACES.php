<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisTABLESPACE_NAME = addslashes($_REQUEST['thisTABLESPACE_NAMEField']);
	$thisENGINE = addslashes($_REQUEST['thisENGINEField']);
	$thisTABLESPACE_TYPE = addslashes($_REQUEST['thisTABLESPACE_TYPEField']);
	$thisLOGFILE_GROUP_NAME = addslashes($_REQUEST['thisLOGFILE_GROUP_NAMEField']);
	$thisEXTENT_SIZE = addslashes($_REQUEST['thisEXTENT_SIZEField']);
	$thisAUTOEXTEND_SIZE = addslashes($_REQUEST['thisAUTOEXTEND_SIZEField']);
	$thisMAXIMUM_SIZE = addslashes($_REQUEST['thisMAXIMUM_SIZEField']);
	$thisNODEGROUP_ID = addslashes($_REQUEST['thisNODEGROUP_IDField']);
	$thisTABLESPACE_COMMENT = addslashes($_REQUEST['thisTABLESPACE_COMMENTField']);

?>
<?
$sql = "DELETE FROM TABLESPACES WHERE TABLESPACE_NAME = '$thisTABLESPACE_NAME'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

<table>
<tr height="30">
	<td align="right"><b>TABLESPACE_NAME : </b></td>
	<td><? echo $thisTABLESPACE_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ENGINE : </b></td>
	<td><? echo $thisENGINE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLESPACE_TYPE : </b></td>
	<td><? echo $thisTABLESPACE_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LOGFILE_GROUP_NAME : </b></td>
	<td><? echo $thisLOGFILE_GROUP_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>EXTENT_SIZE : </b></td>
	<td><? echo $thisEXTENT_SIZE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>AUTOEXTEND_SIZE : </b></td>
	<td><? echo $thisAUTOEXTEND_SIZE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>MAXIMUM_SIZE : </b></td>
	<td><? echo $thisMAXIMUM_SIZE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>NODEGROUP_ID : </b></td>
	<td><? echo $thisNODEGROUP_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLESPACE_COMMENT : </b></td>
	<td><? echo $thisTABLESPACE_COMMENT; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>