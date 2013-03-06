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

<h2>Update TABLESPACES</h2>
<form name="tablespacesUpdateForm" method="POST" action="updateTablespaces.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> TABLESPACE_NAME :  </b> </td>
		<td> <input type="text" name="thisTABLESPACE_NAMEField" size="20" value="<? echo $thisTABLESPACE_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ENGINE :  </b> </td>
		<td> <input type="text" name="thisENGINEField" size="20" value="<? echo $thisENGINE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLESPACE_TYPE :  </b> </td>
		<td> <input type="text" name="thisTABLESPACE_TYPEField" size="20" value="<? echo $thisTABLESPACE_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LOGFILE_GROUP_NAME :  </b> </td>
		<td> <input type="text" name="thisLOGFILE_GROUP_NAMEField" size="20" value="<? echo $thisLOGFILE_GROUP_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> EXTENT_SIZE :  </b> </td>
		<td> <input type="text" name="thisEXTENT_SIZEField" size="20" value="<? echo $thisEXTENT_SIZE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> AUTOEXTEND_SIZE :  </b> </td>
		<td> <input type="text" name="thisAUTOEXTEND_SIZEField" size="20" value="<? echo $thisAUTOEXTEND_SIZE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> MAXIMUM_SIZE :  </b> </td>
		<td> <input type="text" name="thisMAXIMUM_SIZEField" size="20" value="<? echo $thisMAXIMUM_SIZE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NODEGROUP_ID :  </b> </td>
		<td> <input type="text" name="thisNODEGROUP_IDField" size="20" value="<? echo $thisNODEGROUP_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLESPACE_COMMENT :  </b> </td>
		<td> <input type="text" name="thisTABLESPACE_COMMENTField" size="20" value="<? echo $thisTABLESPACE_COMMENT; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateTABLESPACESForm" value="Update TABLESPACES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>