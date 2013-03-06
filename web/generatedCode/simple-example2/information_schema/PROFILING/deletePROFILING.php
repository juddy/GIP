<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisQUERY_ID = addslashes($_REQUEST['thisQUERY_IDField']);
	$thisSEQ = addslashes($_REQUEST['thisSEQField']);
	$thisSTATE = addslashes($_REQUEST['thisSTATEField']);
	$thisDURATION = addslashes($_REQUEST['thisDURATIONField']);
	$thisCPU_USER = addslashes($_REQUEST['thisCPU_USERField']);
	$thisCPU_SYSTEM = addslashes($_REQUEST['thisCPU_SYSTEMField']);
	$thisCONTEXT_VOLUNTARY = addslashes($_REQUEST['thisCONTEXT_VOLUNTARYField']);
	$thisCONTEXT_INVOLUNTARY = addslashes($_REQUEST['thisCONTEXT_INVOLUNTARYField']);
	$thisBLOCK_OPS_IN = addslashes($_REQUEST['thisBLOCK_OPS_INField']);
	$thisBLOCK_OPS_OUT = addslashes($_REQUEST['thisBLOCK_OPS_OUTField']);
	$thisMESSAGES_SENT = addslashes($_REQUEST['thisMESSAGES_SENTField']);
	$thisMESSAGES_RECEIVED = addslashes($_REQUEST['thisMESSAGES_RECEIVEDField']);
	$thisPAGE_FAULTS_MAJOR = addslashes($_REQUEST['thisPAGE_FAULTS_MAJORField']);
	$thisPAGE_FAULTS_MINOR = addslashes($_REQUEST['thisPAGE_FAULTS_MINORField']);
	$thisSWAPS = addslashes($_REQUEST['thisSWAPSField']);
	$thisSOURCE_FUNCTION = addslashes($_REQUEST['thisSOURCE_FUNCTIONField']);
	$thisSOURCE_FILE = addslashes($_REQUEST['thisSOURCE_FILEField']);
	$thisSOURCE_LINE = addslashes($_REQUEST['thisSOURCE_LINEField']);

?>
<?
$sql = "DELETE FROM PROFILING WHERE QUERY_ID = '$thisQUERY_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

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