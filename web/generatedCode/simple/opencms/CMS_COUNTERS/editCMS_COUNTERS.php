<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisNAME = $_REQUEST['NAMEField']
?>
<?php
$sql = "SELECT   * FROM CMS_COUNTERS WHERE NAME = '$thisNAME'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisNAME = MYSQL_RESULT($result,$i,"NAME");
	$thisCOUNTER = MYSQL_RESULT($result,$i,"COUNTER");

}
?>

<h2>Update CMS_COUNTERS</h2>
<form name="cms_countersUpdateForm" method="POST" action="updateCms_counters.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> NAME :  </b> </td>
		<td> <input type="text" name="thisNAMEField" size="20" value="<? echo $thisNAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COUNTER :  </b> </td>
		<td> <input type="text" name="thisCOUNTERField" size="20" value="<? echo $thisCOUNTER; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCMS_COUNTERSForm" value="Update CMS_COUNTERS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>