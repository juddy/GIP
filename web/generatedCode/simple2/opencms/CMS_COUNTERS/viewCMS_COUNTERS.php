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

View Record<br><br>

<table>
<tr height="30">
	<td align="right"><b>NAME : </b></td>
	<td><? echo $thisNAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COUNTER : </b></td>
	<td><? echo $thisCOUNTER; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>