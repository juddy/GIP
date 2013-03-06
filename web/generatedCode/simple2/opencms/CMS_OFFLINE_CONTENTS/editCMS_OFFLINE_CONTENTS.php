<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisRESOURCE_ID = $_REQUEST['RESOURCE_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_OFFLINE_CONTENTS WHERE RESOURCE_ID = '$thisRESOURCE_ID'";
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

}
?>

<h2>Update CMS_OFFLINE_CONTENTS</h2>
<form name="cms_offline_contentsUpdateForm" method="POST" action="updateCms_offline_contents.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> RESOURCE_ID :  </b> </td>
		<td> <input type="text" name="thisRESOURCE_IDField" size="20" value="<? echo $thisRESOURCE_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FILE_CONTENT :  </b> </td>
		<td> <input type="text" name="thisFILE_CONTENTField" size="20" value="<? echo $thisFILE_CONTENT; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_OFFLINE_CONTENTSForm" value="Update CMS_OFFLINE_CONTENTS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>