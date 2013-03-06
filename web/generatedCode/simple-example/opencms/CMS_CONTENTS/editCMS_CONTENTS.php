<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisRESOURCE_ID = $_REQUEST['RESOURCE_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_CONTENTS WHERE RESOURCE_ID = '$thisRESOURCE_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisRESOURCE_ID = MYSQL_RESULT($result,$i,"RESOURCE_ID");
	$thisFILE_CONTENT = MYSQL_RESULT($result,$i,"FILE_CONTENT");
	$thisPUBLISH_TAG_FROM = MYSQL_RESULT($result,$i,"PUBLISH_TAG_FROM");
	$thisPUBLISH_TAG_TO = MYSQL_RESULT($result,$i,"PUBLISH_TAG_TO");
	$thisONLINE_FLAG = MYSQL_RESULT($result,$i,"ONLINE_FLAG");

}
?>

<h2>Update CMS_CONTENTS</h2>
<form name="cms_contentsUpdateForm" method="POST" action="updateCms_contents.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_ID :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_IDField" size="20" value="<? echo $thisRESOURCE_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FILE_CONTENT :  </b> </td>
		<td> <input type="text" name="thisFILE_CONTENTField" size="20" value="<? echo $thisFILE_CONTENT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_TAG_FROM :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_TAG_FROMField" size="20" value="<? echo $thisPUBLISH_TAG_FROM; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PUBLISH_TAG_TO :  </b> </td>
		<td> <input type="text" name="thisPUBLISH_TAG_TOField" size="20" value="<? echo $thisPUBLISH_TAG_TO; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ONLINE_FLAG :  </b> </td>
		<td> <input type="text" name="thisONLINE_FLAGField" size="20" value="<? echo $thisONLINE_FLAG; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_CONTENTSForm" value="Update CMS_CONTENTS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>