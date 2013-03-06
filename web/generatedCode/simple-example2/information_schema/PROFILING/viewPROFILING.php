<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisQUERY_ID = $_REQUEST['QUERY_IDField']
?>
<?php
$sql = "SELECT   * FROM PROFILING WHERE QUERY_ID = '$thisQUERY_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisQUERY_ID = MYSQL_RESULT($result,$i,"QUERY_ID");
	$thisSEQ = MYSQL_RESULT($result,$i,"SEQ");
	$thisSTATE = MYSQL_RESULT($result,$i,"STATE");
	$thisDURATION = MYSQL_RESULT($result,$i,"DURATION");
	$thisCPU_USER = MYSQL_RESULT($result,$i,"CPU_USER");
	$thisCPU_SYSTEM = MYSQL_RESULT($result,$i,"CPU_SYSTEM");
	$thisCONTEXT_VOLUNTARY = MYSQL_RESULT($result,$i,"CONTEXT_VOLUNTARY");
	$thisCONTEXT_INVOLUNTARY = MYSQL_RESULT($result,$i,"CONTEXT_INVOLUNTARY");
	$thisBLOCK_OPS_IN = MYSQL_RESULT($result,$i,"BLOCK_OPS_IN");
	$thisBLOCK_OPS_OUT = MYSQL_RESULT($result,$i,"BLOCK_OPS_OUT");
	$thisMESSAGES_SENT = MYSQL_RESULT($result,$i,"MESSAGES_SENT");
	$thisMESSAGES_RECEIVED = MYSQL_RESULT($result,$i,"MESSAGES_RECEIVED");
	$thisPAGE_FAULTS_MAJOR = MYSQL_RESULT($result,$i,"PAGE_FAULTS_MAJOR");
	$thisPAGE_FAULTS_MINOR = MYSQL_RESULT($result,$i,"PAGE_FAULTS_MINOR");
	$thisSWAPS = MYSQL_RESULT($result,$i,"SWAPS");
	$thisSOURCE_FUNCTION = MYSQL_RESULT($result,$i,"SOURCE_FUNCTION");
	$thisSOURCE_FILE = MYSQL_RESULT($result,$i,"SOURCE_FILE");
	$thisSOURCE_LINE = MYSQL_RESULT($result,$i,"SOURCE_LINE");

}
?>

View Record<br><br>

<table>
<tr height="30">
	<td align="right"><b>QUERY_ID : </b></td>
	<td><? echo $thisQUERY_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SEQ : </b></td>
	<td><? echo $thisSEQ; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STATE : </b></td>
	<td><? echo $thisSTATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DURATION : </b></td>
	<td><? echo $thisDURATION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CPU_USER : </b></td>
	<td><? echo $thisCPU_USER; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CPU_SYSTEM : </b></td>
	<td><? echo $thisCPU_SYSTEM; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CONTEXT_VOLUNTARY : </b></td>
	<td><? echo $thisCONTEXT_VOLUNTARY; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CONTEXT_INVOLUNTARY : </b></td>
	<td><? echo $thisCONTEXT_INVOLUNTARY; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>BLOCK_OPS_IN : </b></td>
	<td><? echo $thisBLOCK_OPS_IN; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>BLOCK_OPS_OUT : </b></td>
	<td><? echo $thisBLOCK_OPS_OUT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>MESSAGES_SENT : </b></td>
	<td><? echo $thisMESSAGES_SENT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>MESSAGES_RECEIVED : </b></td>
	<td><? echo $thisMESSAGES_RECEIVED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PAGE_FAULTS_MAJOR : </b></td>
	<td><? echo $thisPAGE_FAULTS_MAJOR; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PAGE_FAULTS_MINOR : </b></td>
	<td><? echo $thisPAGE_FAULTS_MINOR; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SWAPS : </b></td>
	<td><? echo $thisSWAPS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SOURCE_FUNCTION : </b></td>
	<td><? echo $thisSOURCE_FUNCTION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SOURCE_FILE : </b></td>
	<td><? echo $thisSOURCE_FILE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SOURCE_LINE : </b></td>
	<td><? echo $thisSOURCE_LINE; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>