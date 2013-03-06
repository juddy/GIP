<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisENGINE = $_REQUEST['ENGINEField']
?>
<?php
$sql = "SELECT   * FROM ENGINES WHERE ENGINE = '$thisENGINE'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisENGINE = MYSQL_RESULT($result,$i,"ENGINE");
	$thisSUPPORT = MYSQL_RESULT($result,$i,"SUPPORT");
	$thisCOMMENT = MYSQL_RESULT($result,$i,"COMMENT");
	$thisTRANSACTIONS = MYSQL_RESULT($result,$i,"TRANSACTIONS");
	$thisXA = MYSQL_RESULT($result,$i,"XA");
	$thisSAVEPOINTS = MYSQL_RESULT($result,$i,"SAVEPOINTS");

}
?>

<h2>Update ENGINES</h2>
<form name="enginesUpdateForm" method="POST" action="updateEngines.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> ENGINE :  </b> </td>
		<td> <input type="text" name="thisENGINEField" size="20" value="<? echo $thisENGINE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SUPPORT :  </b> </td>
		<td> <input type="text" name="thisSUPPORTField" size="20" value="<? echo $thisSUPPORT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COMMENT :  </b> </td>
		<td> <input type="text" name="thisCOMMENTField" size="20" value="<? echo $thisCOMMENT; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TRANSACTIONS :  </b> </td>
		<td> <input type="text" name="thisTRANSACTIONSField" size="20" value="<? echo $thisTRANSACTIONS; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> XA :  </b> </td>
		<td> <input type="text" name="thisXAField" size="20" value="<? echo $thisXA; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SAVEPOINTS :  </b> </td>
		<td> <input type="text" name="thisSAVEPOINTSField" size="20" value="<? echo $thisSAVEPOINTS; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateENGINESForm" value="Update ENGINES">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>