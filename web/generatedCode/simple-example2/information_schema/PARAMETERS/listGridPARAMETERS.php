<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisSPECIFIC_CATALOGFromForm = $_REQUEST['thisSPECIFIC_CATALOGField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
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

	$sqlUpdate = "UPDATE PARAMETERS SET SPECIFIC_CATALOG = '$thisSPECIFIC_CATALOG' , SPECIFIC_SCHEMA = '$thisSPECIFIC_SCHEMA' , SPECIFIC_NAME = '$thisSPECIFIC_NAME' , ORDINAL_POSITION = '$thisORDINAL_POSITION' , PARAMETER_MODE = '$thisPARAMETER_MODE' , PARAMETER_NAME = '$thisPARAMETER_NAME' , DATA_TYPE = '$thisDATA_TYPE' , CHARACTER_MAXIMUM_LENGTH = '$thisCHARACTER_MAXIMUM_LENGTH' , CHARACTER_OCTET_LENGTH = '$thisCHARACTER_OCTET_LENGTH' , NUMERIC_PRECISION = '$thisNUMERIC_PRECISION' , NUMERIC_SCALE = '$thisNUMERIC_SCALE' , CHARACTER_SET_NAME = '$thisCHARACTER_SET_NAME' , COLLATION_NAME = '$thisCOLLATION_NAME' , DTD_IDENTIFIER = '$thisDTD_IDENTIFIER' , ROUTINE_TYPE = '$thisROUTINE_TYPE'  WHERE SPECIFIC_CATALOG = '$thisSPECIFIC_CATALOG'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisSPECIFIC_CATALOGFromForm." has been Updated<br></b>";
	$thisSPECIFIC_CATALOGFromForm = "";
}

if ($thisAction=="Insert")
{
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

	$sqlInsert = "INSERT INTO PARAMETERS (SPECIFIC_CATALOG , SPECIFIC_SCHEMA , SPECIFIC_NAME , ORDINAL_POSITION , PARAMETER_MODE , PARAMETER_NAME , DATA_TYPE , CHARACTER_MAXIMUM_LENGTH , CHARACTER_OCTET_LENGTH , NUMERIC_PRECISION , NUMERIC_SCALE , CHARACTER_SET_NAME , COLLATION_NAME , DTD_IDENTIFIER , ROUTINE_TYPE ) VALUES ('$thisSPECIFIC_CATALOG' , '$thisSPECIFIC_SCHEMA' , '$thisSPECIFIC_NAME' , '$thisORDINAL_POSITION' , '$thisPARAMETER_MODE' , '$thisPARAMETER_NAME' , '$thisDATA_TYPE' , '$thisCHARACTER_MAXIMUM_LENGTH' , '$thisCHARACTER_OCTET_LENGTH' , '$thisNUMERIC_PRECISION' , '$thisNUMERIC_SCALE' , '$thisCHARACTER_SET_NAME' , '$thisCOLLATION_NAME' , '$thisDTD_IDENTIFIER' , '$thisROUTINE_TYPE' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisSPECIFIC_CATALOGFromForm = "";
}

if ($thisAction=="Delete")
{
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

	$sqlDelete = "DELETE FROM PARAMETERS WHERE SPECIFIC_CATALOG = '$thisSPECIFIC_CATALOG'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisSPECIFIC_CATALOGFromForm." has been Deleted<br></b>";
	$thisSPECIFIC_CATALOGFromForm = "";
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


$sql = "SELECT   * FROM PARAMETERS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=SPECIFIC_CATALOG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SPECIFIC_CATALOG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SPECIFIC_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SPECIFIC_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SPECIFIC_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SPECIFIC_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ORDINAL_POSITION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ORDINAL_POSITION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PARAMETER_MODE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PARAMETER_MODE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PARAMETER_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PARAMETER_NAME</B>
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=ROUTINE_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ROUTINE_TYPE</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisSPECIFIC_CATALOGField" value="<? echo $thisSPECIFIC_CATALOG; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisSPECIFIC_CATALOGField" value=""></TD>
		<TD><input type"text" name="thisSPECIFIC_SCHEMAField" value=""></TD>
		<TD><input type"text" name="thisSPECIFIC_NAMEField" value=""></TD>
		<TD><input type"text" name="thisORDINAL_POSITIONField" value=""></TD>
		<TD><input type"text" name="thisPARAMETER_MODEField" value=""></TD>
		<TD><input type"text" name="thisPARAMETER_NAMEField" value=""></TD>
		<TD><input type"text" name="thisDATA_TYPEField" value=""></TD>
		<TD><input type"text" name="thisCHARACTER_MAXIMUM_LENGTHField" value=""></TD>
		<TD><input type"text" name="thisCHARACTER_OCTET_LENGTHField" value=""></TD>
		<TD><input type"text" name="thisNUMERIC_PRECISIONField" value=""></TD>
		<TD><input type"text" name="thisNUMERIC_SCALEField" value=""></TD>
		<TD><input type"text" name="thisCHARACTER_SET_NAMEField" value=""></TD>
		<TD><input type"text" name="thisCOLLATION_NAMEField" value=""></TD>
		<TD><input type"text" name="thisDTD_IDENTIFIERField" value=""></TD>
		<TD><input type"text" name="thisROUTINE_TYPEField" value=""></TD>
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
if ($thisSPECIFIC_CATALOGFromForm == $thisSPECIFIC_CATALOG)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisSPECIFIC_CATALOGField" value="<? echo $thisSPECIFIC_CATALOG; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisSPECIFIC_CATALOGField" value="<? echo $thisSPECIFIC_CATALOG; ?>"></TD>
		<TD><input type"text" name="thisSPECIFIC_SCHEMAField" value="<? echo $thisSPECIFIC_SCHEMA; ?>"></TD>
		<TD><input type"text" name="thisSPECIFIC_NAMEField" value="<? echo $thisSPECIFIC_NAME; ?>"></TD>
		<TD><input type"text" name="thisORDINAL_POSITIONField" value="<? echo $thisORDINAL_POSITION; ?>"></TD>
		<TD><input type"text" name="thisPARAMETER_MODEField" value="<? echo $thisPARAMETER_MODE; ?>"></TD>
		<TD><input type"text" name="thisPARAMETER_NAMEField" value="<? echo $thisPARAMETER_NAME; ?>"></TD>
		<TD><input type"text" name="thisDATA_TYPEField" value="<? echo $thisDATA_TYPE; ?>"></TD>
		<TD><input type"text" name="thisCHARACTER_MAXIMUM_LENGTHField" value="<? echo $thisCHARACTER_MAXIMUM_LENGTH; ?>"></TD>
		<TD><input type"text" name="thisCHARACTER_OCTET_LENGTHField" value="<? echo $thisCHARACTER_OCTET_LENGTH; ?>"></TD>
		<TD><input type"text" name="thisNUMERIC_PRECISIONField" value="<? echo $thisNUMERIC_PRECISION; ?>"></TD>
		<TD><input type"text" name="thisNUMERIC_SCALEField" value="<? echo $thisNUMERIC_SCALE; ?>"></TD>
		<TD><input type"text" name="thisCHARACTER_SET_NAMEField" value="<? echo $thisCHARACTER_SET_NAME; ?>"></TD>
		<TD><input type"text" name="thisCOLLATION_NAMEField" value="<? echo $thisCOLLATION_NAME; ?>"></TD>
		<TD><input type"text" name="thisDTD_IDENTIFIERField" value="<? echo $thisDTD_IDENTIFIER; ?>"></TD>
		<TD><input type"text" name="thisROUTINE_TYPEField" value="<? echo $thisROUTINE_TYPE; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisSPECIFIC_CATALOG; ?></TD>
		<TD><? echo $thisSPECIFIC_SCHEMA; ?></TD>
		<TD><? echo $thisSPECIFIC_NAME; ?></TD>
		<TD><? echo $thisORDINAL_POSITION; ?></TD>
		<TD><? echo $thisPARAMETER_MODE; ?></TD>
		<TD><? echo $thisPARAMETER_NAME; ?></TD>
		<TD><? echo $thisDATA_TYPE; ?></TD>
		<TD><? echo $thisCHARACTER_MAXIMUM_LENGTH; ?></TD>
		<TD><? echo $thisCHARACTER_OCTET_LENGTH; ?></TD>
		<TD><? echo $thisNUMERIC_PRECISION; ?></TD>
		<TD><? echo $thisNUMERIC_SCALE; ?></TD>
		<TD><? echo $thisCHARACTER_SET_NAME; ?></TD>
		<TD><? echo $thisCOLLATION_NAME; ?></TD>
		<TD><? echo $thisDTD_IDENTIFIER; ?></TD>
		<TD><? echo $thisROUTINE_TYPE; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisSPECIFIC_CATALOGField=<? echo $thisSPECIFIC_CATALOG; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisSPECIFIC_CATALOGField=<? echo $thisSPECIFIC_CATALOG; ?>">Delete</a></TD>
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