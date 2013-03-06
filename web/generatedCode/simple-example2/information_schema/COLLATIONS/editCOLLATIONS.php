<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisCOLLATION_NAME = $_REQUEST['COLLATION_NAMEField']
?>
<?php
$sql = "SELECT   * FROM COLLATIONS WHERE COLLATION_NAME = '$thisCOLLATION_NAME'";
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
	$thisID = MYSQL_RESULT($result,$i,"ID");
	$thisIS_DEFAULT = MYSQL_RESULT($result,$i,"IS_DEFAULT");
	$thisIS_COMPILED = MYSQL_RESULT($result,$i,"IS_COMPILED");
	$thisSORTLEN = MYSQL_RESULT($result,$i,"SORTLEN");

}
?>

<h2>Update COLLATIONS</h2>
<form name="collationsUpdateForm" method="POST" action="updateCollations.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> COLLATION_NAME :  </b> </td>
		<td> <input type="text" name="thisCOLLATION_NAMEField" size="20" value="<? echo $thisCOLLATION_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CHARACTER_SET_NAME :  </b> </td>
		<td> <input type="text" name="thisCHARACTER_SET_NAMEField" size="20" value="<? echo $thisCHARACTER_SET_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ID :  </b> </td>
		<td> <input type="text" name="thisIDField" size="20" value="<? echo $thisID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> IS_DEFAULT :  </b> </td>
		<td> <input type="text" name="thisIS_DEFAULTField" size="20" value="<? echo $thisIS_DEFAULT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> IS_COMPILED :  </b> </td>
		<td> <input type="text" name="thisIS_COMPILEDField" size="20" value="<? echo $thisIS_COMPILED; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SORTLEN :  </b> </td>
		<td> <input type="text" name="thisSORTLENField" size="20" value="<? echo $thisSORTLEN; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateCOLLATIONSForm" value="Update COLLATIONS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>