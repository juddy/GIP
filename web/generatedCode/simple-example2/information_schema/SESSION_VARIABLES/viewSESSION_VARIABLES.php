<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisVARIABLE_NAME = $_REQUEST['VARIABLE_NAMEField']
?>
<?php
$sql = "SELECT   * FROM SESSION_VARIABLES WHERE VARIABLE_NAME = '$thisVARIABLE_NAME'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisVARIABLE_NAME = MYSQL_RESULT($result,$i,"VARIABLE_NAME");
	$thisVARIABLE_VALUE = MYSQL_RESULT($result,$i,"VARIABLE_VALUE");

}
?>

View Record<br><br>

<table>
<tr height="30">
	<td align="right"><b>VARIABLE_NAME : </b></td>
	<td><? echo $thisVARIABLE_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>VARIABLE_VALUE : </b></td>
	<td><? echo $thisVARIABLE_VALUE; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>