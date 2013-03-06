<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPUBLISH_TAG = $_REQUEST['PUBLISH_TAGField']
?>
<?php
$sql = "SELECT   * FROM CMS_HISTORY_STRUCTURE WHERE PUBLISH_TAG = '$thisPUBLISH_TAG'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisPUBLISH_TAG = MYSQL_RESULT($result,$i,"PUBLISH_TAG");
	$thisVERSION = MYSQL_RESULT($result,$i,"VERSION");
	$thisSTRUCTURE_ID = MYSQL_RESULT($result,$i,"STRUCTURE_ID");
	$thisRESOURCE_ID = MYSQL_RESULT($result,$i,"RESOURCE_ID");
	$thisPARENT_ID = MYSQL_RESULT($result,$i,"PARENT_ID");
	$thisRESOURCE_PATH = MYSQL_RESULT($result,$i,"RESOURCE_PATH");
	$thisSTRUCTURE_STATE = MYSQL_RESULT($result,$i,"STRUCTURE_STATE");
	$thisDATE_RELEASED = MYSQL_RESULT($result,$i,"DATE_RELEASED");
	$thisDATE_EXPIRED = MYSQL_RESULT($result,$i,"DATE_EXPIRED");
	$thisSTRUCTURE_VERSION = MYSQL_RESULT($result,$i,"STRUCTURE_VERSION");

}
?>

<h2>Update CMS_HISTORY_STRUCTURE</h2>
<form name="cms_history_structureUpdateForm" method="POST" action="updateCms_history_structure.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_TAG :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_TAGField" size="20" value="<? echo $thisPUBLISH_TAG; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> VERSION :  </b> </td>
		<td> <input type="text" name="thisVERSIONField" size="20" value="<? echo $thisVERSION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STRUCTURE_ID :  </b> </td>
		<td> <input type="text" name="thisSTRUCTURE_IDField" size="20" value="<? echo $thisSTRUCTURE_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_ID :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_IDField" size="20" value="<? echo $thisRESOURCE_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PARENT_ID :  </b> </td>
		<td> <input type="text" name="thisPARENT_IDField" size="20" value="<? echo $thisPARENT_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_PATH :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_PATHField" size="20" value="<? echo $thisRESOURCE_PATH; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STRUCTURE_STATE :  </b> </td>
		<td> <input type="text" name="thisSTRUCTURE_STATEField" size="20" value="<? echo $thisSTRUCTURE_STATE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATE_RELEASED :  </b> </td>
		<td> <input type="text" name="thisDATE_RELEASEDField" size="20" value="<? echo $thisDATE_RELEASED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATE_EXPIRED :  </b> </td>
		<td> <input type="text" name="thisDATE_EXPIREDField" size="20" value="<? echo $thisDATE_EXPIRED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STRUCTURE_VERSION :  </b> </td>
		<td> <input type="text" name="thisSTRUCTURE_VERSIONField" size="20" value="<? echo $thisSTRUCTURE_VERSION; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_HISTORY_STRUCTUREForm" value="Update CMS_HISTORY_STRUCTURE">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>