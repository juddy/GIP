<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisSPECIFIC_NAME = $_REQUEST['SPECIFIC_NAMEField']
?>
<?php
$sql = "SELECT   * FROM ROUTINES WHERE SPECIFIC_NAME = '$thisSPECIFIC_NAME'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisSPECIFIC_NAME = MYSQL_RESULT($result,$i,"SPECIFIC_NAME");
	$thisROUTINE_CATALOG = MYSQL_RESULT($result,$i,"ROUTINE_CATALOG");
	$thisROUTINE_SCHEMA = MYSQL_RESULT($result,$i,"ROUTINE_SCHEMA");
	$thisROUTINE_NAME = MYSQL_RESULT($result,$i,"ROUTINE_NAME");
	$thisROUTINE_TYPE = MYSQL_RESULT($result,$i,"ROUTINE_TYPE");
	$thisDATA_TYPE = MYSQL_RESULT($result,$i,"DATA_TYPE");
	$thisCHARACTER_MAXIMUM_LENGTH = MYSQL_RESULT($result,$i,"CHARACTER_MAXIMUM_LENGTH");
	$thisCHARACTER_OCTET_LENGTH = MYSQL_RESULT($result,$i,"CHARACTER_OCTET_LENGTH");
	$thisNUMERIC_PRECISION = MYSQL_RESULT($result,$i,"NUMERIC_PRECISION");
	$thisNUMERIC_SCALE = MYSQL_RESULT($result,$i,"NUMERIC_SCALE");
	$thisCHARACTER_SET_NAME = MYSQL_RESULT($result,$i,"CHARACTER_SET_NAME");
	$thisCOLLATION_NAME = MYSQL_RESULT($result,$i,"COLLATION_NAME");
	$thisDTD_IDENTIFIER = MYSQL_RESULT($result,$i,"DTD_IDENTIFIER");
	$thisROUTINE_BODY = MYSQL_RESULT($result,$i,"ROUTINE_BODY");
	$thisROUTINE_DEFINITION = MYSQL_RESULT($result,$i,"ROUTINE_DEFINITION");
	$thisEXTERNAL_NAME = MYSQL_RESULT($result,$i,"EXTERNAL_NAME");
	$thisEXTERNAL_LANGUAGE = MYSQL_RESULT($result,$i,"EXTERNAL_LANGUAGE");
	$thisPARAMETER_STYLE = MYSQL_RESULT($result,$i,"PARAMETER_STYLE");
	$thisIS_DETERMINISTIC = MYSQL_RESULT($result,$i,"IS_DETERMINISTIC");
	$thisSQL_DATA_ACCESS = MYSQL_RESULT($result,$i,"SQL_DATA_ACCESS");
	$thisSQL_PATH = MYSQL_RESULT($result,$i,"SQL_PATH");
	$thisSECURITY_TYPE = MYSQL_RESULT($result,$i,"SECURITY_TYPE");
	$thisCREATED = MYSQL_RESULT($result,$i,"CREATED");
	$thisLAST_ALTERED = MYSQL_RESULT($result,$i,"LAST_ALTERED");
	$thisSQL_MODE = MYSQL_RESULT($result,$i,"SQL_MODE");
	$thisROUTINE_COMMENT = MYSQL_RESULT($result,$i,"ROUTINE_COMMENT");
	$thisDEFINER = MYSQL_RESULT($result,$i,"DEFINER");
	$thisCHARACTER_SET_CLIENT = MYSQL_RESULT($result,$i,"CHARACTER_SET_CLIENT");
	$thisCOLLATION_CONNECTION = MYSQL_RESULT($result,$i,"COLLATION_CONNECTION");
	$thisDATABASE_COLLATION = MYSQL_RESULT($result,$i,"DATABASE_COLLATION");

}
?>

<h2>Confirm Record Deletion</h2><br><br>

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

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="routinesEnterForm" method="POST" action="deleteROUTINES.php">
<input type="hidden" name="thisSPECIFIC_NAMEField" value="<? echo $thisSPECIFIC_NAME; ?>">
<input type="submit" name="submitConfirmDeleteROUTINESForm" value="Delete  from ROUTINES">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>