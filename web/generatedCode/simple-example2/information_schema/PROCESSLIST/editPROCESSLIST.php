<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisID = $_REQUEST['IDField']
?>
<?php
$sql = "SELECT   * FROM PROCESSLIST WHERE ID = '$thisID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisID = MYSQL_RESULT($result,$i,"ID");
	$thisUSER = MYSQL_RESULT($result,$i,"USER");
	$thisHOST = MYSQL_RESULT($result,$i,"HOST");
	$thisDB = MYSQL_RESULT($result,$i,"DB");
	$thisCOMMAND = MYSQL_RESULT($result,$i,"COMMAND");
	$thisTIME = MYSQL_RESULT($result,$i,"TIME");
	$thisSTATE = MYSQL_RESULT($result,$i,"STATE");
	$thisINFO = MYSQL_RESULT($result,$i,"INFO");

}
?>

<h2>Update PROCESSLIST</h2>
<form name="processlistUpdateForm" method="POST" action="updateProcesslist.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> ID :  </b> </td>
		<td> <input type="text" name="thisIDField" size="20" value="<? echo $thisID; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER :  </b> </td>
		<td> <input type="text" name="thisUSERField" size="20" value="<? echo $thisUSER; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> HOST :  </b> </td>
		<td> <input type="text" name="thisHOSTField" size="20" value="<? echo $thisHOST; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DB :  </b> </td>
		<td> <input type="text" name="thisDBField" size="20" value="<? echo $thisDB; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COMMAND :  </b> </td>
		<td> <input type="text" name="thisCOMMANDField" size="20" value="<? echo $thisCOMMAND; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TIME :  </b> </td>
		<td> <input type="text" name="thisTIMEField" size="20" value="<? echo $thisTIME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STATE :  </b> </td>
		<td> <input type="text" name="thisSTATEField" size="20" value="<? echo $thisSTATE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INFO :  </b> </td>
		<td> <input type="text" name="thisINFOField" size="20" value="<? echo $thisINFO; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdatePROCESSLISTForm" value="Update PROCESSLIST">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>