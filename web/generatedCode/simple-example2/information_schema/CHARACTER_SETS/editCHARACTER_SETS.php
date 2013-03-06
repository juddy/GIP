<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisCHARACTER_SET_NAME = $_REQUEST['CHARACTER_SET_NAMEField']
?>
<?php
$sql = "SELECT   * FROM CHARACTER_SETS WHERE CHARACTER_SET_NAME = '$thisCHARACTER_SET_NAME'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisCHARACTER_SET_NAME = MYSQL_RESULT($result,$i,"CHARACTER_SET_NAME");
	$thisDEFAULT_COLLATE_NAME = MYSQL_RESULT($result,$i,"DEFAULT_COLLATE_NAME");
	$thisDESCRIPTION = MYSQL_RESULT($result,$i,"DESCRIPTION");
	$thisMAXLEN = MYSQL_RESULT($result,$i,"MAXLEN");

}
?>

<h2>Update CHARACTER_SETS</h2>
<form name="character_setsUpdateForm" method="POST" action="updateCharacter_sets.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> CHARACTER_SET_NAME :  </b> </td>
		<td> <input type="text" name="thisCHARACTER_SET_NAMEField" size="20" value="<? echo $thisCHARACTER_SET_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DEFAULT_COLLATE_NAME :  </b> </td>
		<td> <input type="text" name="thisDEFAULT_COLLATE_NAMEField" size="20" value="<? echo $thisDEFAULT_COLLATE_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DESCRIPTION :  </b> </td>
		<td> <input type="text" name="thisDESCRIPTIONField" size="20" value="<? echo $thisDESCRIPTION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> MAXLEN :  </b> </td>
		<td> <input type="text" name="thisMAXLENField" size="20" value="<? echo $thisMAXLEN; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCHARACTER_SETSForm" value="Update CHARACTER_SETS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>