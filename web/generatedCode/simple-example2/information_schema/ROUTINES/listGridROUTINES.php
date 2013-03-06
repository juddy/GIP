<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisSPECIFIC_NAMEFromForm = $_REQUEST['thisSPECIFIC_NAMEField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
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

	$sqlUpdate = "UPDATE ROUTINES SET SPECIFIC_NAME = '$thisSPECIFIC_NAME' , ROUTINE_CATALOG = '$thisROUTINE_CATALOG' , ROUTINE_SCHEMA = '$thisROUTINE_SCHEMA' , ROUTINE_NAME = '$thisROUTINE_NAME' , ROUTINE_TYPE = '$thisROUTINE_TYPE' , DATA_TYPE = '$thisDATA_TYPE' , CHARACTER_MAXIMUM_LENGTH = '$thisCHARACTER_MAXIMUM_LENGTH' , CHARACTER_OCTET_LENGTH = '$thisCHARACTER_OCTET_LENGTH' , NUMERIC_PRECISION = '$thisNUMERIC_PRECISION' , NUMERIC_SCALE = '$thisNUMERIC_SCALE' , CHARACTER_SET_NAME = '$thisCHARACTER_SET_NAME' , COLLATION_NAME = '$thisCOLLATION_NAME' , DTD_IDENTIFIER = '$thisDTD_IDENTIFIER' , ROUTINE_BODY = '$thisROUTINE_BODY' , ROUTINE_DEFINITION = '$thisROUTINE_DEFINITION' , EXTERNAL_NAME = '$thisEXTERNAL_NAME' , EXTERNAL_LANGUAGE = '$thisEXTERNAL_LANGUAGE' , PARAMETER_STYLE = '$thisPARAMETER_STYLE' , IS_DETERMINISTIC = '$thisIS_DETERMINISTIC' , SQL_DATA_ACCESS = '$thisSQL_DATA_ACCESS' , SQL_PATH = '$thisSQL_PATH' , SECURITY_TYPE = '$thisSECURITY_TYPE' , CREATED = '$thisCREATED' , LAST_ALTERED = '$thisLAST_ALTERED' , SQL_MODE = '$thisSQL_MODE' , ROUTINE_COMMENT = '$thisROUTINE_COMMENT' , DEFINER = '$thisDEFINER' , CHARACTER_SET_CLIENT = '$thisCHARACTER_SET_CLIENT' , COLLATION_CONNECTION = '$thisCOLLATION_CONNECTION' , DATABASE_COLLATION = '$thisDATABASE_COLLATION'  WHERE SPECIFIC_NAME = '$thisSPECIFIC_NAME'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisSPECIFIC_NAMEFromForm." has been Updated<br></b>";
	$thisSPECIFIC_NAMEFromForm = "";
}

if ($thisAction=="Insert")
{
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

	$sqlInsert = "INSERT INTO ROUTINES (SPECIFIC_NAME , ROUTINE_CATALOG , ROUTINE_SCHEMA , ROUTINE_NAME , ROUTINE_TYPE , DATA_TYPE , CHARACTER_MAXIMUM_LENGTH , CHARACTER_OCTET_LENGTH , NUMERIC_PRECISION , NUMERIC_SCALE , CHARACTER_SET_NAME , COLLATION_NAME , DTD_IDENTIFIER , ROUTINE_BODY , ROUTINE_DEFINITION , EXTERNAL_NAME , EXTERNAL_LANGUAGE , PARAMETER_STYLE , IS_DETERMINISTIC , SQL_DATA_ACCESS , SQL_PATH , SECURITY_TYPE , CREATED , LAST_ALTERED , SQL_MODE , ROUTINE_COMMENT , DEFINER , CHARACTER_SET_CLIENT , COLLATION_CONNECTION , DATABASE_COLLATION ) VALUES ('$thisSPECIFIC_NAME' , '$thisROUTINE_CATALOG' , '$thisROUTINE_SCHEMA' , '$thisROUTINE_NAME' , '$thisROUTINE_TYPE' , '$thisDATA_TYPE' , '$thisCHARACTER_MAXIMUM_LENGTH' , '$thisCHARACTER_OCTET_LENGTH' , '$thisNUMERIC_PRECISION' , '$thisNUMERIC_SCALE' , '$thisCHARACTER_SET_NAME' , '$thisCOLLATION_NAME' , '$thisDTD_IDENTIFIER' , '$thisROUTINE_BODY' , '$thisROUTINE_DEFINITION' , '$thisEXTERNAL_NAME' , '$thisEXTERNAL_LANGUAGE' , '$thisPARAMETER_STYLE' , '$thisIS_DETERMINISTIC' , '$thisSQL_DATA_ACCESS' , '$thisSQL_PATH' , '$thisSECURITY_TYPE' , '$thisCREATED' , '$thisLAST_ALTERED' , '$thisSQL_MODE' , '$thisROUTINE_COMMENT' , '$thisDEFINER' , '$thisCHARACTER_SET_CLIENT' , '$thisCOLLATION_CONNECTION' , '$thisDATABASE_COLLATION' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisSPECIFIC_NAMEFromForm = "";
}

if ($thisAction=="Delete")
{
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

	$sqlDelete = "DELETE FROM ROUTINES WHERE SPECIFIC_NAME = '$thisSPECIFIC_NAME'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisSPECIFIC_NAMEFromForm." has been Deleted<br></b>";
	$thisSPECIFIC_NAMEFromForm = "";
}

$initStartLimit = 0;
$limitPerPage = 10;

$startLimit = $_REQUEST['startLimit'];
$numberOfRows = $_REQUEST['rows'];
$sortBy = $_REQUEST['sortBy'];
$sortOrder = $_REQUEST['sortOrder'];

if ($startLimit=="")
{
		$startLimit = $initStartLimit;
}

if ($numberOfRows=="")
{
		$numberOfRows = $limitPerPage;
}

if ($sortOrder=="")
{
		$sortOrder  = "DESC";
}
if ($sortOrder == "DESC") { $newSortOrder = "ASC"; } else  { $newSortOrder = "DESC"; }
$limitQuery = " LIMIT ".$startLimit.",".$numberOfRows;
$nextStartLimit = $startLimit + $limitPerPage;
$previousStartLimit = $startLimit - $limitPerPage;

if ($sortBy!="")
{
		$orderByQuery = " ORDER BY ".$sortBy." ".$sortOrder;
}


$sql = "SELECT   * FROM ROUTINES".$orderByQuery.$limitQuery;
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);


?>
<?
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?
}
else if ($numberOfRows>0) {

	$i=0;
?>


<br>
<?
if ($_REQUEST['startLimit'] != "")
{
?>

<a href="<? echo  $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $previousStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Previous <? echo $limitPerPage; ?> Results</a>....
<? } ?>
<?
if ($numberOfRows == $limitPerPage)
{
?>
<a href="<? echo $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $nextStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Next <? echo $limitPerPage; ?> Results</a>
<? } ?>

<br><br>
<TABLE CELLSPACING="0" CELLPADDING="3" BORDER="0" WIDTH="100%">
	<TR>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SPECIFIC_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SPECIFIC_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ROUTINE_CATALOG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ROUTINE_CATALOG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ROUTINE_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ROUTINE_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ROUTINE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ROUTINE_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ROUTINE_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ROUTINE_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATA_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATA_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CHARACTER_MAXIMUM_LENGTH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CHARACTER_MAXIMUM_LENGTH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CHARACTER_OCTET_LENGTH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CHARACTER_OCTET_LENGTH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NUMERIC_PRECISION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NUMERIC_PRECISION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NUMERIC_SCALE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NUMERIC_SCALE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CHARACTER_SET_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CHARACTER_SET_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COLLATION_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COLLATION_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DTD_IDENTIFIER&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DTD_IDENTIFIER</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ROUTINE_BODY&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ROUTINE_BODY</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ROUTINE_DEFINITION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ROUTINE_DEFINITION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EXTERNAL_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EXTERNAL_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EXTERNAL_LANGUAGE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EXTERNAL_LANGUAGE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PARAMETER_STYLE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PARAMETER_STYLE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=IS_DETERMINISTIC&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>IS_DETERMINISTIC</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SQL_DATA_ACCESS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SQL_DATA_ACCESS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SQL_PATH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SQL_PATH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SECURITY_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SECURITY_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CREATED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CREATED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LAST_ALTERED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LAST_ALTERED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SQL_MODE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SQL_MODE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ROUTINE_COMMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ROUTINE_COMMENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DEFINER&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DEFINER</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CHARACTER_SET_CLIENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CHARACTER_SET_CLIENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COLLATION_CONNECTION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COLLATION_CONNECTION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATABASE_COLLATION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATABASE_COLLATION</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisSPECIFIC_NAMEField" value="<? echo $thisSPECIFIC_NAME; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisSPECIFIC_NAMEField" value=""></TD>
		<TD><input type"text" name="thisROUTINE_CATALOGField" value=""></TD>
		<TD><input type"text" name="thisROUTINE_SCHEMAField" value=""></TD>
		<TD><input type"text" name="thisROUTINE_NAMEField" value=""></TD>
		<TD><input type"text" name="thisROUTINE_TYPEField" value=""></TD>
		<TD><input type"text" name="thisDATA_TYPEField" value=""></TD>
		<TD><input type"text" name="thisCHARACTER_MAXIMUM_LENGTHField" value=""></TD>
		<TD><input type"text" name="thisCHARACTER_OCTET_LENGTHField" value=""></TD>
		<TD><input type"text" name="thisNUMERIC_PRECISIONField" value=""></TD>
		<TD><input type"text" name="thisNUMERIC_SCALEField" value=""></TD>
		<TD><input type"text" name="thisCHARACTER_SET_NAMEField" value=""></TD>
		<TD><input type"text" name="thisCOLLATION_NAMEField" value=""></TD>
		<TD><input type"text" name="thisDTD_IDENTIFIERField" value=""></TD>
		<TD><input type"text" name="thisROUTINE_BODYField" value=""></TD>
		<TD><input type"text" name="thisROUTINE_DEFINITIONField" value=""></TD>
		<TD><input type"text" name="thisEXTERNAL_NAMEField" value=""></TD>
		<TD><input type"text" name="thisEXTERNAL_LANGUAGEField" value=""></TD>
		<TD><input type"text" name="thisPARAMETER_STYLEField" value=""></TD>
		<TD><input type"text" name="thisIS_DETERMINISTICField" value=""></TD>
		<TD><input type"text" name="thisSQL_DATA_ACCESSField" value=""></TD>
		<TD><input type"text" name="thisSQL_PATHField" value=""></TD>
		<TD><input type"text" name="thisSECURITY_TYPEField" value=""></TD>
		<TD><input type"text" name="thisCREATEDField" value=""></TD>
		<TD><input type"text" name="thisLAST_ALTEREDField" value=""></TD>
		<TD><input type"text" name="thisSQL_MODEField" value=""></TD>
		<TD><input type"text" name="thisROUTINE_COMMENTField" value=""></TD>
		<TD><input type"text" name="thisDEFINERField" value=""></TD>
		<TD><input type"text" name="thisCHARACTER_SET_CLIENTField" value=""></TD>
		<TD><input type"text" name="thisCOLLATION_CONNECTIONField" value=""></TD>
		<TD><input type"text" name="thisDATABASE_COLLATIONField" value=""></TD>
	<TD COLSPAN=2><input type="submit" name="Insert" Value="Insert Record"> </TD>
	</TR>
</FORM>

<?
 } 
?>
<?
	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

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
if ($thisSPECIFIC_NAMEFromForm == $thisSPECIFIC_NAME)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisSPECIFIC_NAMEField" value="<? echo $thisSPECIFIC_NAME; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisSPECIFIC_NAMEField" value="<? echo $thisSPECIFIC_NAME; ?>"></TD>
		<TD><input type"text" name="thisROUTINE_CATALOGField" value="<? echo $thisROUTINE_CATALOG; ?>"></TD>
		<TD><input type"text" name="thisROUTINE_SCHEMAField" value="<? echo $thisROUTINE_SCHEMA; ?>"></TD>
		<TD><input type"text" name="thisROUTINE_NAMEField" value="<? echo $thisROUTINE_NAME; ?>"></TD>
		<TD><input type"text" name="thisROUTINE_TYPEField" value="<? echo $thisROUTINE_TYPE; ?>"></TD>
		<TD><input type"text" name="thisDATA_TYPEField" value="<? echo $thisDATA_TYPE; ?>"></TD>
		<TD><input type"text" name="thisCHARACTER_MAXIMUM_LENGTHField" value="<? echo $thisCHARACTER_MAXIMUM_LENGTH; ?>"></TD>
		<TD><input type"text" name="thisCHARACTER_OCTET_LENGTHField" value="<? echo $thisCHARACTER_OCTET_LENGTH; ?>"></TD>
		<TD><input type"text" name="thisNUMERIC_PRECISIONField" value="<? echo $thisNUMERIC_PRECISION; ?>"></TD>
		<TD><input type"text" name="thisNUMERIC_SCALEField" value="<? echo $thisNUMERIC_SCALE; ?>"></TD>
		<TD><input type"text" name="thisCHARACTER_SET_NAMEField" value="<? echo $thisCHARACTER_SET_NAME; ?>"></TD>
		<TD><input type"text" name="thisCOLLATION_NAMEField" value="<? echo $thisCOLLATION_NAME; ?>"></TD>
		<TD><input type"text" name="thisDTD_IDENTIFIERField" value="<? echo $thisDTD_IDENTIFIER; ?>"></TD>
		<TD><input type"text" name="thisROUTINE_BODYField" value="<? echo $thisROUTINE_BODY; ?>"></TD>
		<TD><input type"text" name="thisROUTINE_DEFINITIONField" value="<? echo $thisROUTINE_DEFINITION; ?>"></TD>
		<TD><input type"text" name="thisEXTERNAL_NAMEField" value="<? echo $thisEXTERNAL_NAME; ?>"></TD>
		<TD><input type"text" name="thisEXTERNAL_LANGUAGEField" value="<? echo $thisEXTERNAL_LANGUAGE; ?>"></TD>
		<TD><input type"text" name="thisPARAMETER_STYLEField" value="<? echo $thisPARAMETER_STYLE; ?>"></TD>
		<TD><input type"text" name="thisIS_DETERMINISTICField" value="<? echo $thisIS_DETERMINISTIC; ?>"></TD>
		<TD><input type"text" name="thisSQL_DATA_ACCESSField" value="<? echo $thisSQL_DATA_ACCESS; ?>"></TD>
		<TD><input type"text" name="thisSQL_PATHField" value="<? echo $thisSQL_PATH; ?>"></TD>
		<TD><input type"text" name="thisSECURITY_TYPEField" value="<? echo $thisSECURITY_TYPE; ?>"></TD>
		<TD><input type"text" name="thisCREATEDField" value="<? echo $thisCREATED; ?>"></TD>
		<TD><input type"text" name="thisLAST_ALTEREDField" value="<? echo $thisLAST_ALTERED; ?>"></TD>
		<TD><input type"text" name="thisSQL_MODEField" value="<? echo $thisSQL_MODE; ?>"></TD>
		<TD><input type"text" name="thisROUTINE_COMMENTField" value="<? echo $thisROUTINE_COMMENT; ?>"></TD>
		<TD><input type"text" name="thisDEFINERField" value="<? echo $thisDEFINER; ?>"></TD>
		<TD><input type"text" name="thisCHARACTER_SET_CLIENTField" value="<? echo $thisCHARACTER_SET_CLIENT; ?>"></TD>
		<TD><input type"text" name="thisCOLLATION_CONNECTIONField" value="<? echo $thisCOLLATION_CONNECTION; ?>"></TD>
		<TD><input type"text" name="thisDATABASE_COLLATIONField" value="<? echo $thisDATABASE_COLLATION; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisSPECIFIC_NAME; ?></TD>
		<TD><? echo $thisROUTINE_CATALOG; ?></TD>
		<TD><? echo $thisROUTINE_SCHEMA; ?></TD>
		<TD><? echo $thisROUTINE_NAME; ?></TD>
		<TD><? echo $thisROUTINE_TYPE; ?></TD>
		<TD><? echo $thisDATA_TYPE; ?></TD>
		<TD><? echo $thisCHARACTER_MAXIMUM_LENGTH; ?></TD>
		<TD><? echo $thisCHARACTER_OCTET_LENGTH; ?></TD>
		<TD><? echo $thisNUMERIC_PRECISION; ?></TD>
		<TD><? echo $thisNUMERIC_SCALE; ?></TD>
		<TD><? echo $thisCHARACTER_SET_NAME; ?></TD>
		<TD><? echo $thisCOLLATION_NAME; ?></TD>
		<TD><? echo $thisDTD_IDENTIFIER; ?></TD>
		<TD><? echo $thisROUTINE_BODY; ?></TD>
		<TD><? echo $thisROUTINE_DEFINITION; ?></TD>
		<TD><? echo $thisEXTERNAL_NAME; ?></TD>
		<TD><? echo $thisEXTERNAL_LANGUAGE; ?></TD>
		<TD><? echo $thisPARAMETER_STYLE; ?></TD>
		<TD><? echo $thisIS_DETERMINISTIC; ?></TD>
		<TD><? echo $thisSQL_DATA_ACCESS; ?></TD>
		<TD><? echo $thisSQL_PATH; ?></TD>
		<TD><? echo $thisSECURITY_TYPE; ?></TD>
		<TD><? echo $thisCREATED; ?></TD>
		<TD><? echo $thisLAST_ALTERED; ?></TD>
		<TD><? echo $thisSQL_MODE; ?></TD>
		<TD><? echo $thisROUTINE_COMMENT; ?></TD>
		<TD><? echo $thisDEFINER; ?></TD>
		<TD><? echo $thisCHARACTER_SET_CLIENT; ?></TD>
		<TD><? echo $thisCOLLATION_CONNECTION; ?></TD>
		<TD><? echo $thisDATABASE_COLLATION; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisSPECIFIC_NAMEField=<? echo $thisSPECIFIC_NAME; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisSPECIFIC_NAMEField=<? echo $thisSPECIFIC_NAME; ?>">Delete</a></TD>
	</TR>

<?
}
?>
<?
		$i++;

	} // end while loop
?>
</TABLE>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="EnterNew">
<input type="Submit" name="submit" value="Insert New Record">
</FORM>


<br>
<?
if ($_REQUEST['startLimit'] != "")
{
?>

<a href="<? echo  $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $previousStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Previous <? echo $limitPerPage; ?> Results</a>....
<? } ?>
<?
if ($numberOfRows == $limitPerPage)
{
?>
<a href="<? echo $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $nextStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Next <? echo $limitPerPage; ?> Results</a>
<? } ?>

<br><br>
<?
} // end of if numberOfRows > 0 
 ?>

<?php
include_once("../common/footer.php");
?>