<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisUSER_ID = $_REQUEST['USER_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_LOG WHERE USER_ID = '$thisUSER_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisUSER_ID = MYSQL_RESULT($result,$i,"USER_ID");
	$thisLOG_DATE = MYSQL_RESULT($result,$i,"LOG_DATE");
	$thisSTRUCTURE_ID = MYSQL_RESULT($result,$i,"STRUCTURE_ID");
	$thisLOG_TYPE = MYSQL_RESULT($result,$i,"LOG_TYPE");
	$thisLOG_DATA = MYSQL_RESULT($result,$i,"LOG_DATA");

}
?>

<h2>Update CMS_LOG</h2>
<form name="cms_logUpdateForm" method="POST" action="updateCms_log.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> USER_ID :  </b> </td>
		<td> <input type="text" name="thisUSER_IDField" size="20" value="<? echo $thisUSER_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LOG_DATE :  </b> </td>
		<td> <input type="text" name="thisLOG_DATEField" size="20" value="<? echo $thisLOG_DATE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STRUCTURE_ID :  </b> </td>
		<td> <input type="text" name="thisSTRUCTURE_IDField" size="20" value="<? echo $thisSTRUCTURE_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LOG_TYPE :  </b> </td>
		<td> <input type="text" name="thisLOG_TYPEField" size="20" value="<? echo $thisLOG_TYPE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LOG_DATA :  </b> </td>
		<td> <input type="text" name="thisLOG_DATAField" size="20" value="<? echo $thisLOG_DATA; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_LOGForm" value="Update CMS_LOG">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>