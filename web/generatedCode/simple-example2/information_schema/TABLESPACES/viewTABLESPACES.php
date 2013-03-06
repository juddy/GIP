<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisTABLESPACE_NAME = $_REQUEST['TABLESPACE_NAMEField']
?>
<?php
$sql = "SELECT   * FROM TABLESPACES WHERE TABLESPACE_NAME = '$thisTABLESPACE_NAME'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisTABLESPACE_NAME = MYSQL_RESULT($result,$i,"TABLESPACE_NAME");
	$thisENGINE = MYSQL_RESULT($result,$i,"ENGINE");
	$thisTABLESPACE_TYPE = MYSQL_RESULT($result,$i,"TABLESPACE_TYPE");
	$thisLOGFILE_GROUP_NAME = MYSQL_RESULT($result,$i,"LOGFILE_GROUP_NAME");
	$thisEXTENT_SIZE = MYSQL_RESULT($result,$i,"EXTENT_SIZE");
	$thisAUTOEXTEND_SIZE = MYSQL_RESULT($result,$i,"AUTOEXTEND_SIZE");
	$thisMAXIMUM_SIZE = MYSQL_RESULT($result,$i,"MAXIMUM_SIZE");
	$thisNODEGROUP_ID = MYSQL_RESULT($result,$i,"NODEGROUP_ID");
	$thisTABLESPACE_COMMENT = MYSQL_RESULT($result,$i,"TABLESPACE_COMMENT");

}
?>

View Record<br><br>

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