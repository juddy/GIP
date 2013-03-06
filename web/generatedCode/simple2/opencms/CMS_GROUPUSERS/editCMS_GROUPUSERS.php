<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisGROUP_ID = $_REQUEST['GROUP_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_GROUPUSERS WHERE GROUP_ID = '$thisGROUP_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisGROUP_ID = MYSQL_RESULT($result,$i,"GROUP_ID");
	$thisUSER_ID = MYSQL_RESULT($result,$i,"USER_ID");
	$thisGROUPUSER_FLAGS = MYSQL_RESULT($result,$i,"GROUPUSER_FLAGS");

}
?>

<h2>Update CMS_GROUPUSERS</h2>
<form name="cms_groupusersUpdateForm" method="POST" action="updateCms_groupusers.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> GROUP_ID :  </b> </td>
		<td> <input type="text" name="thisGROUP_IDField" size="20" value="<? echo $thisGROUP_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER_ID :  </b> </td>
		<td> <input type="text" name="thisUSER_IDField" size="20" value="<? echo $thisUSER_ID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> GROUPUSER_FLAGS :  </b> </td>
		<td> <input type="text" name="thisGROUPUSER_FLAGSField" size="20" value="<? echo $thisGROUPUSER_FLAGS; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_GROUPUSERSForm" value="Update CMS_GROUPUSERS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>