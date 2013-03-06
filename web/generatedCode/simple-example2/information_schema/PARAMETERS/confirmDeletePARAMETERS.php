<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisSPECIFIC_CATALOG = $_REQUEST['SPECIFIC_CATALOGField']
?>
<?php
$sql = "SELECT   * FROM PARAMETERS WHERE SPECIFIC_CATALOG = '$thisSPECIFIC_CATALOG'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisSPECIFIC_CATALOG = MYSQL_RESULT($result,$i,"SPECIFIC_CATALOG");
	$thisSPECIFIC_SCHEMA = MYSQL_RESULT($result,$i,"SPECIFIC_SCHEMA");
	$thisSPECIFIC_NAME = MYSQL_RESULT($result,$i,"SPECIFIC_NAME");
	$thisORDINAL_POSITION = MYSQL_RESULT($result,$i,"ORDINAL_POSITION");
	$thisPARAMETER_MODE = MYSQL_RESULT($result,$i,"PARAMETER_MODE");
	$thisPARAMETER_NAME = MYSQL_RESULT($result,$i,"PARAMETER_NAME");
	$thisDATA_TYPE = MYSQL_RESULT($result,$i,"DATA_TYPE");
	$thisCHARACTER_MAXIMUM_LENGTH = MYSQL_RESULT($result,$i,"CHARACTER_MAXIMUM_LENGTH");
	$thisCHARACTER_OCTET_LENGTH = MYSQL_RESULT($result,$i,"CHARACTER_OCTET_LENGTH");
	$thisNUMERIC_PRECISION = MYSQL_RESULT($result,$i,"NUMERIC_PRECISION");
	$thisNUMERIC_SCALE = MYSQL_RESULT($result,$i,"NUMERIC_SCALE");
	$thisCHARACTER_SET_NAME = MYSQL_RESULT($result,$i,"CHARACTER_SET_NAME");
	$thisCOLLATION_NAME = MYSQL_RESULT($result,$i,"COLLATION_NAME");
	$thisDTD_IDENTIFIER = MYSQL_RESULT($result,$i,"DTD_IDENTIFIER");
	$thisROUTINE_TYPE = MYSQL_RESULT($result,$i,"ROUTINE_TYPE");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

<table>
<tr height="30">
	<td align="right"><b>SPECIFIC_CATALOG : </b></td>
	<td><? echo $thisSPECIFIC_CATALOG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SPECIFIC_SCHEMA : </b></td>
	<td><? echo $thisSPECIFIC_SCHEMA; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SPECIFIC_NAME : </b></td>
	<td><? echo $thisSPECIFIC_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ORDINAL_POSITION : </b></td>
	<td><? echo $thisORDINAL_POSITION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PARAMETER_MODE : </b></td>
	<td><? echo $thisPARAMETER_MODE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PARAMETER_NAME : </b></td>
	<td><? echo $thisPARAMETER_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATA_TYPE : </b></td>
	<td><? echo $thisDATA_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CHARACTER_MAXIMUM_LENGTH : </b></td>
	<td><? echo $thisCHARACTER_MAXIMUM_LENGTH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CHARACTER_OCTET_LENGTH : </b></td>
	<td><? echo $thisCHARACTER_OCTET_LENGTH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>NUMERIC_PRECISION : </b></td>
	<td><? echo $thisNUMERIC_PRECISION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>NUMERIC_SCALE : </b></td>
	<td><? echo $thisNUMERIC_SCALE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CHARACTER_SET_NAME : </b></td>
	<td><? echo $thisCHARACTER_SET_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COLLATION_NAME : </b></td>
	<td><? echo $thisCOLLATION_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DTD_IDENTIFIER : </b></td>
	<td><? echo $thisDTD_IDENTIFIER; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ROUTINE_TYPE : </b></td>
	<td><? echo $thisROUTINE_TYPE; ?></td>
</tr>
</table>

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="parametersEnterForm" method="POST" action="deletePARAMETERS.php">
<input type="hidden" name="thisSPECIFIC_CATALOGField" value="<? echo $thisSPECIFIC_CATALOG; ?>">
<input type="submit" name="submitConfirmDeletePARAMETERSForm" value="Delete  from PARAMETERS">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>