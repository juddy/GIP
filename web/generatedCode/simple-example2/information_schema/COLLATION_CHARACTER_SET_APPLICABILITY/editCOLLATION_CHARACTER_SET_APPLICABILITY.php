<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisCOLLATION_NAME = $_REQUEST['COLLATION_NAMEField']
?>
<?php
$sql = "SELECT   * FROM COLLATION_CHARACTER_SET_APPLICABILITY WHERE COLLATION_NAME = '$thisCOLLATION_NAME'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisCOLLATION_NAME = MYSQL_RESULT($result,$i,"COLLATION_NAME");
	$thisCHARACTER_SET_NAME = MYSQL_RESULT($result,$i,"CHARACTER_SET_NAME");

}
?>

<h2>Update COLLATION_CHARACTER_SET_APPLICABILITY</h2>
<form name="collation_character_set_applicabilityUpdateForm" method="POST" action="updateCollation_character_set_applicability.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> COLLATION_NAME :  </b> </td>
		<td> <input type="text" name="thisCOLLATION_NAMEField" size="20" value="<? echo $thisCOLLATION_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHARACTER_SET_NAME :  </b> </td>
		<td> <input type="text" name="thisCHARACTER_SET_NAMEField" size="20" value="<? echo $thisCHARACTER_SET_NAME; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCOLLATION_CHARACTER_SET_APPLICABILITYForm" value="Update COLLATION_CHARACTER_SET_APPLICABILITY">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>