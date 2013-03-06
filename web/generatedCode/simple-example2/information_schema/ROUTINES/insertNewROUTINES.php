<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisSPECIFIC_NAME = addslashes($_REQUEST['thisSPECIFIC_NAMEField']);
	$thisROUTINE_CATALOG = addslashes($_REQUEST['thisROUTINE_CATALOGField']);
	$thisROUTINE_SCHEMA = addslashes($_REQUEST['thisROUTINE_SCHEMAField']);
	$thisROUTINE_NAME = addslashes($_REQUEST['thisROUTINE_NAMEField']);
	$thisROUTINE_TYPE = addslashes($_REQUEST['thisROUTINE_TYPEField']);
	$thisDATA_TYPE = addslashes($_REQUEST['thisDATA_TYPEField']);
	$thisCHARACTER_MAXIMUM_LENGTH = addslashes($_REQUEST['thisCHARACTER_MAXIMUM_LENGTHField']);
	$thisCHARACTER_OCTET_LENGTH = addslashes($_REQUEST['thisCHARACTER_OCTET_LENGTHField']);
	$thisNUMERIC_PRECISION = addslashes($_REQUEST['thisNUMERIC_PRECISIONField']);
	$thisNUMERIC_SCALE = addslashes($_REQUEST['thisNUMERIC_SCALEField']);
	$thisCHARACTER_SET_NAME = addslashes($_REQUEST['thisCHARACTER_SET_NAMEField']);
	$thisCOLLATION_NAME = addslashes($_REQUEST['thisCOLLATION_NAMEField']);
	$thisDTD_IDENTIFIER = addslashes($_REQUEST['thisDTD_IDENTIFIERField']);
	$thisROUTINE_BODY = addslashes($_REQUEST['thisROUTINE_BODYField']);
	$thisROUTINE_DEFINITION = addslashes($_REQUEST['thisROUTINE_DEFINITIONField']);
	$thisEXTERNAL_NAME = addslashes($_REQUEST['thisEXTERNAL_NAMEField']);
	$thisEXTERNAL_LANGUAGE = addslashes($_REQUEST['thisEXTERNAL_LANGUAGEField']);
	$thisPARAMETER_STYLE = addslashes($_REQUEST['thisPARAMETER_STYLEField']);
	$thisIS_DETERMINISTIC = addslashes($_REQUEST['thisIS_DETERMINISTICField']);
	$thisSQL_DATA_ACCESS = addslashes($_REQUEST['thisSQL_DATA_ACCESSField']);
	$thisSQL_PATH = addslashes($_REQUEST['thisSQL_PATHField']);
	$thisSECURITY_TYPE = addslashes($_REQUEST['thisSECURITY_TYPEField']);
	$thisCREATED = addslashes($_REQUEST['thisCREATEDField']);
	$thisLAST_ALTERED = addslashes($_REQUEST['thisLAST_ALTEREDField']);
	$thisSQL_MODE = addslashes($_REQUEST['thisSQL_MODEField']);
	$thisROUTINE_COMMENT = addslashes($_REQUEST['thisROUTINE_COMMENTField']);
	$thisDEFINER = addslashes($_REQUEST['thisDEFINERField']);
	$thisCHARACTER_SET_CLIENT = addslashes($_REQUEST['thisCHARACTER_SET_CLIENTField']);
	$thisCOLLATION_CONNECTION = addslashes($_REQUEST['thisCOLLATION_CONNECTIONField']);
	$thisDATABASE_COLLATION = addslashes($_REQUEST['thisDATABASE_COLLATIONField']);

?>
<?
$sqlQuery = "INSERT INTO ROUTINES (SPECIFIC_NAME , ROUTINE_CATALOG , ROUTINE_SCHEMA , ROUTINE_NAME , ROUTINE_TYPE , DATA_TYPE , CHARACTER_MAXIMUM_LENGTH , CHARACTER_OCTET_LENGTH , NUMERIC_PRECISION , NUMERIC_SCALE , CHARACTER_SET_NAME , COLLATION_NAME , DTD_IDENTIFIER , ROUTINE_BODY , ROUTINE_DEFINITION , EXTERNAL_NAME , EXTERNAL_LANGUAGE , PARAMETER_STYLE , IS_DETERMINISTIC , SQL_DATA_ACCESS , SQL_PATH , SECURITY_TYPE , CREATED , LAST_ALTERED , SQL_MODE , ROUTINE_COMMENT , DEFINER , CHARACTER_SET_CLIENT , COLLATION_CONNECTION , DATABASE_COLLATION ) VALUES ('$thisSPECIFIC_NAME' , '$thisROUTINE_CATALOG' , '$thisROUTINE_SCHEMA' , '$thisROUTINE_NAME' , '$thisROUTINE_TYPE' , '$thisDATA_TYPE' , '$thisCHARACTER_MAXIMUM_LENGTH' , '$thisCHARACTER_OCTET_LENGTH' , '$thisNUMERIC_PRECISION' , '$thisNUMERIC_SCALE' , '$thisCHARACTER_SET_NAME' , '$thisCOLLATION_NAME' , '$thisDTD_IDENTIFIER' , '$thisROUTINE_BODY' , '$thisROUTINE_DEFINITION' , '$thisEXTERNAL_NAME' , '$thisEXTERNAL_LANGUAGE' , '$thisPARAMETER_STYLE' , '$thisIS_DETERMINISTIC' , '$thisSQL_DATA_ACCESS' , '$thisSQL_PATH' , '$thisSECURITY_TYPE' , '$thisCREATED' , '$thisLAST_ALTERED' , '$thisSQL_MODE' , '$thisROUTINE_COMMENT' , '$thisDEFINER' , '$thisCHARACTER_SET_CLIENT' , '$thisCOLLATION_CONNECTION' , '$thisDATABASE_COLLATION' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>SPECIFIC_NAME : </b></td>
	<td><? echo $thisSPECIFIC_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ROUTINE_CATALOG : </b></td>
	<td><? echo $thisROUTINE_CATALOG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ROUTINE_SCHEMA : </b></td>
	<td><? echo $thisROUTINE_SCHEMA; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ROUTINE_NAME : </b></td>
	<td><? echo $thisROUTINE_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ROUTINE_TYPE : </b></td>
	<td><? echo $thisROUTINE_TYPE; ?></td>
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
	<td align="right"><b>ROUTINE_BODY : </b></td>
	<td><? echo $thisROUTINE_BODY; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ROUTINE_DEFINITION : </b></td>
	<td><? echo $thisROUTINE_DEFINITION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>EXTERNAL_NAME : </b></td>
	<td><? echo $thisEXTERNAL_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>EXTERNAL_LANGUAGE : </b></td>
	<td><? echo $thisEXTERNAL_LANGUAGE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PARAMETER_STYLE : </b></td>
	<td><? echo $thisPARAMETER_STYLE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>IS_DETERMINISTIC : </b></td>
	<td><? echo $thisIS_DETERMINISTIC; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SQL_DATA_ACCESS : </b></td>
	<td><? echo $thisSQL_DATA_ACCESS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SQL_PATH : </b></td>
	<td><? echo $thisSQL_PATH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SECURITY_TYPE : </b></td>
	<td><? echo $thisSECURITY_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CREATED : </b></td>
	<td><? echo $thisCREATED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LAST_ALTERED : </b></td>
	<td><? echo $thisLAST_ALTERED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SQL_MODE : </b></td>
	<td><? echo $thisSQL_MODE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ROUTINE_COMMENT : </b></td>
	<td><? echo $thisROUTINE_COMMENT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DEFINER : </b></td>
	<td><? echo $thisDEFINER; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CHARACTER_SET_CLIENT : </b></td>
	<td><? echo $thisCHARACTER_SET_CLIENT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>COLLATION_CONNECTION : </b></td>
	<td><? echo $thisCOLLATION_CONNECTION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATABASE_COLLATION : </b></td>
	<td><? echo $thisDATABASE_COLLATION; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>