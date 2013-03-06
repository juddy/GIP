<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisSPECIFIC_CATALOG = addslashes($_REQUEST['thisSPECIFIC_CATALOGField']);
	$thisSPECIFIC_SCHEMA = addslashes($_REQUEST['thisSPECIFIC_SCHEMAField']);
	$thisSPECIFIC_NAME = addslashes($_REQUEST['thisSPECIFIC_NAMEField']);
	$thisORDINAL_POSITION = addslashes($_REQUEST['thisORDINAL_POSITIONField']);
	$thisPARAMETER_MODE = addslashes($_REQUEST['thisPARAMETER_MODEField']);
	$thisPARAMETER_NAME = addslashes($_REQUEST['thisPARAMETER_NAMEField']);
	$thisDATA_TYPE = addslashes($_REQUEST['thisDATA_TYPEField']);
	$thisCHARACTER_MAXIMUM_LENGTH = addslashes($_REQUEST['thisCHARACTER_MAXIMUM_LENGTHField']);
	$thisCHARACTER_OCTET_LENGTH = addslashes($_REQUEST['thisCHARACTER_OCTET_LENGTHField']);
	$thisNUMERIC_PRECISION = addslashes($_REQUEST['thisNUMERIC_PRECISIONField']);
	$thisNUMERIC_SCALE = addslashes($_REQUEST['thisNUMERIC_SCALEField']);
	$thisCHARACTER_SET_NAME = addslashes($_REQUEST['thisCHARACTER_SET_NAMEField']);
	$thisCOLLATION_NAME = addslashes($_REQUEST['thisCOLLATION_NAMEField']);
	$thisDTD_IDENTIFIER = addslashes($_REQUEST['thisDTD_IDENTIFIERField']);
	$thisROUTINE_TYPE = addslashes($_REQUEST['thisROUTINE_TYPEField']);

?>
<?
$sqlQuery = "INSERT INTO PARAMETERS (SPECIFIC_CATALOG , SPECIFIC_SCHEMA , SPECIFIC_NAME , ORDINAL_POSITION , PARAMETER_MODE , PARAMETER_NAME , DATA_TYPE , CHARACTER_MAXIMUM_LENGTH , CHARACTER_OCTET_LENGTH , NUMERIC_PRECISION , NUMERIC_SCALE , CHARACTER_SET_NAME , COLLATION_NAME , DTD_IDENTIFIER , ROUTINE_TYPE ) VALUES ('$thisSPECIFIC_CATALOG' , '$thisSPECIFIC_SCHEMA' , '$thisSPECIFIC_NAME' , '$thisORDINAL_POSITION' , '$thisPARAMETER_MODE' , '$thisPARAMETER_NAME' , '$thisDATA_TYPE' , '$thisCHARACTER_MAXIMUM_LENGTH' , '$thisCHARACTER_OCTET_LENGTH' , '$thisNUMERIC_PRECISION' , '$thisNUMERIC_SCALE' , '$thisCHARACTER_SET_NAME' , '$thisCOLLATION_NAME' , '$thisDTD_IDENTIFIER' , '$thisROUTINE_TYPE' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

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

<?php
include_once("../common/footer.php");
?>