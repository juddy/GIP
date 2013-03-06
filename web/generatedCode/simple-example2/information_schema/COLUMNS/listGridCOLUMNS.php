<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisTABLE_CATALOGFromForm = $_REQUEST['thisTABLE_CATALOGField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisCOLUMN_NAME = addslashes($_REQUEST['thisCOLUMN_NAMEField']);
	$thisORDINAL_POSITION = addslashes($_REQUEST['thisORDINAL_POSITIONField']);
	$thisCOLUMN_DEFAULT = addslashes($_REQUEST['thisCOLUMN_DEFAULTField']);
	$thisIS_NULLABLE = addslashes($_REQUEST['thisIS_NULLABLEField']);
	$thisDATA_TYPE = addslashes($_REQUEST['thisDATA_TYPEField']);
	$thisCHARACTER_MAXIMUM_LENGTH = addslashes($_REQUEST['thisCHARACTER_MAXIMUM_LENGTHField']);
	$thisCHARACTER_OCTET_LENGTH = addslashes($_REQUEST['thisCHARACTER_OCTET_LENGTHField']);
	$thisNUMERIC_PRECISION = addslashes($_REQUEST['thisNUMERIC_PRECISIONField']);
	$thisNUMERIC_SCALE = addslashes($_REQUEST['thisNUMERIC_SCALEField']);
	$thisCHARACTER_SET_NAME = addslashes($_REQUEST['thisCHARACTER_SET_NAMEField']);
	$thisCOLLATION_NAME = addslashes($_REQUEST['thisCOLLATION_NAMEField']);
	$thisCOLUMN_TYPE = addslashes($_REQUEST['thisCOLUMN_TYPEField']);
	$thisCOLUMN_KEY = addslashes($_REQUEST['thisCOLUMN_KEYField']);
	$thisEXTRA = addslashes($_REQUEST['thisEXTRAField']);
	$thisPRIVILEGES = addslashes($_REQUEST['thisPRIVILEGESField']);
	$thisCOLUMN_COMMENT = addslashes($_REQUEST['thisCOLUMN_COMMENTField']);

	$sqlUpdate = "UPDATE COLUMNS SET TABLE_CATALOG = '$thisTABLE_CATALOG' , TABLE_SCHEMA = '$thisTABLE_SCHEMA' , TABLE_NAME = '$thisTABLE_NAME' , COLUMN_NAME = '$thisCOLUMN_NAME' , ORDINAL_POSITION = '$thisORDINAL_POSITION' , COLUMN_DEFAULT = '$thisCOLUMN_DEFAULT' , IS_NULLABLE = '$thisIS_NULLABLE' , DATA_TYPE = '$thisDATA_TYPE' , CHARACTER_MAXIMUM_LENGTH = '$thisCHARACTER_MAXIMUM_LENGTH' , CHARACTER_OCTET_LENGTH = '$thisCHARACTER_OCTET_LENGTH' , NUMERIC_PRECISION = '$thisNUMERIC_PRECISION' , NUMERIC_SCALE = '$thisNUMERIC_SCALE' , CHARACTER_SET_NAME = '$thisCHARACTER_SET_NAME' , COLLATION_NAME = '$thisCOLLATION_NAME' , COLUMN_TYPE = '$thisCOLUMN_TYPE' , COLUMN_KEY = '$thisCOLUMN_KEY' , EXTRA = '$thisEXTRA' , PRIVILEGES = '$thisPRIVILEGES' , COLUMN_COMMENT = '$thisCOLUMN_COMMENT'  WHERE TABLE_CATALOG = '$thisTABLE_CATALOG'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisTABLE_CATALOGFromForm." has been Updated<br></b>";
	$thisTABLE_CATALOGFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisCOLUMN_NAME = addslashes($_REQUEST['thisCOLUMN_NAMEField']);
	$thisORDINAL_POSITION = addslashes($_REQUEST['thisORDINAL_POSITIONField']);
	$thisCOLUMN_DEFAULT = addslashes($_REQUEST['thisCOLUMN_DEFAULTField']);
	$thisIS_NULLABLE = addslashes($_REQUEST['thisIS_NULLABLEField']);
	$thisDATA_TYPE = addslashes($_REQUEST['thisDATA_TYPEField']);
	$thisCHARACTER_MAXIMUM_LENGTH = addslashes($_REQUEST['thisCHARACTER_MAXIMUM_LENGTHField']);
	$thisCHARACTER_OCTET_LENGTH = addslashes($_REQUEST['thisCHARACTER_OCTET_LENGTHField']);
	$thisNUMERIC_PRECISION = addslashes($_REQUEST['thisNUMERIC_PRECISIONField']);
	$thisNUMERIC_SCALE = addslashes($_REQUEST['thisNUMERIC_SCALEField']);
	$thisCHARACTER_SET_NAME = addslashes($_REQUEST['thisCHARACTER_SET_NAMEField']);
	$thisCOLLATION_NAME = addslashes($_REQUEST['thisCOLLATION_NAMEField']);
	$thisCOLUMN_TYPE = addslashes($_REQUEST['thisCOLUMN_TYPEField']);
	$thisCOLUMN_KEY = addslashes($_REQUEST['thisCOLUMN_KEYField']);
	$thisEXTRA = addslashes($_REQUEST['thisEXTRAField']);
	$thisPRIVILEGES = addslashes($_REQUEST['thisPRIVILEGESField']);
	$thisCOLUMN_COMMENT = addslashes($_REQUEST['thisCOLUMN_COMMENTField']);

	$sqlInsert = "INSERT INTO COLUMNS (TABLE_CATALOG , TABLE_SCHEMA , TABLE_NAME , COLUMN_NAME , ORDINAL_POSITION , COLUMN_DEFAULT , IS_NULLABLE , DATA_TYPE , CHARACTER_MAXIMUM_LENGTH , CHARACTER_OCTET_LENGTH , NUMERIC_PRECISION , NUMERIC_SCALE , CHARACTER_SET_NAME , COLLATION_NAME , COLUMN_TYPE , COLUMN_KEY , EXTRA , PRIVILEGES , COLUMN_COMMENT ) VALUES ('$thisTABLE_CATALOG' , '$thisTABLE_SCHEMA' , '$thisTABLE_NAME' , '$thisCOLUMN_NAME' , '$thisORDINAL_POSITION' , '$thisCOLUMN_DEFAULT' , '$thisIS_NULLABLE' , '$thisDATA_TYPE' , '$thisCHARACTER_MAXIMUM_LENGTH' , '$thisCHARACTER_OCTET_LENGTH' , '$thisNUMERIC_PRECISION' , '$thisNUMERIC_SCALE' , '$thisCHARACTER_SET_NAME' , '$thisCOLLATION_NAME' , '$thisCOLUMN_TYPE' , '$thisCOLUMN_KEY' , '$thisEXTRA' , '$thisPRIVILEGES' , '$thisCOLUMN_COMMENT' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisTABLE_CATALOGFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisCOLUMN_NAME = addslashes($_REQUEST['thisCOLUMN_NAMEField']);
	$thisORDINAL_POSITION = addslashes($_REQUEST['thisORDINAL_POSITIONField']);
	$thisCOLUMN_DEFAULT = addslashes($_REQUEST['thisCOLUMN_DEFAULTField']);
	$thisIS_NULLABLE = addslashes($_REQUEST['thisIS_NULLABLEField']);
	$thisDATA_TYPE = addslashes($_REQUEST['thisDATA_TYPEField']);
	$thisCHARACTER_MAXIMUM_LENGTH = addslashes($_REQUEST['thisCHARACTER_MAXIMUM_LENGTHField']);
	$thisCHARACTER_OCTET_LENGTH = addslashes($_REQUEST['thisCHARACTER_OCTET_LENGTHField']);
	$thisNUMERIC_PRECISION = addslashes($_REQUEST['thisNUMERIC_PRECISIONField']);
	$thisNUMERIC_SCALE = addslashes($_REQUEST['thisNUMERIC_SCALEField']);
	$thisCHARACTER_SET_NAME = addslashes($_REQUEST['thisCHARACTER_SET_NAMEField']);
	$thisCOLLATION_NAME = addslashes($_REQUEST['thisCOLLATION_NAMEField']);
	$thisCOLUMN_TYPE = addslashes($_REQUEST['thisCOLUMN_TYPEField']);
	$thisCOLUMN_KEY = addslashes($_REQUEST['thisCOLUMN_KEYField']);
	$thisEXTRA = addslashes($_REQUEST['thisEXTRAField']);
	$thisPRIVILEGES = addslashes($_REQUEST['thisPRIVILEGESField']);
	$thisCOLUMN_COMMENT = addslashes($_REQUEST['thisCOLUMN_COMMENTField']);

	$sqlDelete = "DELETE FROM COLUMNS WHERE TABLE_CATALOG = '$thisTABLE_CATALOG'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisTABLE_CATALOGFromForm." has been Deleted<br></b>";
	$thisTABLE_CATALOGFromForm = "";
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


$sql = "SELECT   * FROM COLUMNS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_CATALOG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_CATALOG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COLUMN_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COLUMN_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ORDINAL_POSITION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ORDINAL_POSITION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COLUMN_DEFAULT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COLUMN_DEFAULT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=IS_NULLABLE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>IS_NULLABLE</B>
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=COLUMN_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COLUMN_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COLUMN_KEY&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COLUMN_KEY</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EXTRA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EXTRA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRIVILEGES&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRIVILEGES</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COLUMN_COMMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COLUMN_COMMENT</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisTABLE_CATALOGField" value="<? echo $thisTABLE_CATALOG; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisTABLE_CATALOGField" value=""></TD>
		<TD><input type"text" name="thisTABLE_SCHEMAField" value=""></TD>
		<TD><input type"text" name="thisTABLE_NAMEField" value=""></TD>
		<TD><input type"text" name="thisCOLUMN_NAMEField" value=""></TD>
		<TD><input type"text" name="thisORDINAL_POSITIONField" value=""></TD>
		<TD><input type"text" name="thisCOLUMN_DEFAULTField" value=""></TD>
		<TD><input type"text" name="thisIS_NULLABLEField" value=""></TD>
		<TD><input type"text" name="thisDATA_TYPEField" value=""></TD>
		<TD><input type"text" name="thisCHARACTER_MAXIMUM_LENGTHField" value=""></TD>
		<TD><input type"text" name="thisCHARACTER_OCTET_LENGTHField" value=""></TD>
		<TD><input type"text" name="thisNUMERIC_PRECISIONField" value=""></TD>
		<TD><input type"text" name="thisNUMERIC_SCALEField" value=""></TD>
		<TD><input type"text" name="thisCHARACTER_SET_NAMEField" value=""></TD>
		<TD><input type"text" name="thisCOLLATION_NAMEField" value=""></TD>
		<TD><input type"text" name="thisCOLUMN_TYPEField" value=""></TD>
		<TD><input type"text" name="thisCOLUMN_KEYField" value=""></TD>
		<TD><input type"text" name="thisEXTRAField" value=""></TD>
		<TD><input type"text" name="thisPRIVILEGESField" value=""></TD>
		<TD><input type"text" name="thisCOLUMN_COMMENTField" value=""></TD>
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

	$thisTABLE_CATALOG = MYSQL_RESULT($result,$i,"TABLE_CATALOG");
	$thisTABLE_SCHEMA = MYSQL_RESULT($result,$i,"TABLE_SCHEMA");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisCOLUMN_NAME = MYSQL_RESULT($result,$i,"COLUMN_NAME");
	$thisORDINAL_POSITION = MYSQL_RESULT($result,$i,"ORDINAL_POSITION");
	$thisCOLUMN_DEFAULT = MYSQL_RESULT($result,$i,"COLUMN_DEFAULT");
	$thisIS_NULLABLE = MYSQL_RESULT($result,$i,"IS_NULLABLE");
	$thisDATA_TYPE = MYSQL_RESULT($result,$i,"DATA_TYPE");
	$thisCHARACTER_MAXIMUM_LENGTH = MYSQL_RESULT($result,$i,"CHARACTER_MAXIMUM_LENGTH");
	$thisCHARACTER_OCTET_LENGTH = MYSQL_RESULT($result,$i,"CHARACTER_OCTET_LENGTH");
	$thisNUMERIC_PRECISION = MYSQL_RESULT($result,$i,"NUMERIC_PRECISION");
	$thisNUMERIC_SCALE = MYSQL_RESULT($result,$i,"NUMERIC_SCALE");
	$thisCHARACTER_SET_NAME = MYSQL_RESULT($result,$i,"CHARACTER_SET_NAME");
	$thisCOLLATION_NAME = MYSQL_RESULT($result,$i,"COLLATION_NAME");
	$thisCOLUMN_TYPE = MYSQL_RESULT($result,$i,"COLUMN_TYPE");
	$thisCOLUMN_KEY = MYSQL_RESULT($result,$i,"COLUMN_KEY");
	$thisEXTRA = MYSQL_RESULT($result,$i,"EXTRA");
	$thisPRIVILEGES = MYSQL_RESULT($result,$i,"PRIVILEGES");
	$thisCOLUMN_COMMENT = MYSQL_RESULT($result,$i,"COLUMN_COMMENT");
if ($thisTABLE_CATALOGFromForm == $thisTABLE_CATALOG)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisTABLE_CATALOGField" value="<? echo $thisTABLE_CATALOG; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisTABLE_CATALOGField" value="<? echo $thisTABLE_CATALOG; ?>"></TD>
		<TD><input type"text" name="thisTABLE_SCHEMAField" value="<? echo $thisTABLE_SCHEMA; ?>"></TD>
		<TD><input type"text" name="thisTABLE_NAMEField" value="<? echo $thisTABLE_NAME; ?>"></TD>
		<TD><input type"text" name="thisCOLUMN_NAMEField" value="<? echo $thisCOLUMN_NAME; ?>"></TD>
		<TD><input type"text" name="thisORDINAL_POSITIONField" value="<? echo $thisORDINAL_POSITION; ?>"></TD>
		<TD><input type"text" name="thisCOLUMN_DEFAULTField" value="<? echo $thisCOLUMN_DEFAULT; ?>"></TD>
		<TD><input type"text" name="thisIS_NULLABLEField" value="<? echo $thisIS_NULLABLE; ?>"></TD>
		<TD><input type"text" name="thisDATA_TYPEField" value="<? echo $thisDATA_TYPE; ?>"></TD>
		<TD><input type"text" name="thisCHARACTER_MAXIMUM_LENGTHField" value="<? echo $thisCHARACTER_MAXIMUM_LENGTH; ?>"></TD>
		<TD><input type"text" name="thisCHARACTER_OCTET_LENGTHField" value="<? echo $thisCHARACTER_OCTET_LENGTH; ?>"></TD>
		<TD><input type"text" name="thisNUMERIC_PRECISIONField" value="<? echo $thisNUMERIC_PRECISION; ?>"></TD>
		<TD><input type"text" name="thisNUMERIC_SCALEField" value="<? echo $thisNUMERIC_SCALE; ?>"></TD>
		<TD><input type"text" name="thisCHARACTER_SET_NAMEField" value="<? echo $thisCHARACTER_SET_NAME; ?>"></TD>
		<TD><input type"text" name="thisCOLLATION_NAMEField" value="<? echo $thisCOLLATION_NAME; ?>"></TD>
		<TD><input type"text" name="thisCOLUMN_TYPEField" value="<? echo $thisCOLUMN_TYPE; ?>"></TD>
		<TD><input type"text" name="thisCOLUMN_KEYField" value="<? echo $thisCOLUMN_KEY; ?>"></TD>
		<TD><input type"text" name="thisEXTRAField" value="<? echo $thisEXTRA; ?>"></TD>
		<TD><input type"text" name="thisPRIVILEGESField" value="<? echo $thisPRIVILEGES; ?>"></TD>
		<TD><input type"text" name="thisCOLUMN_COMMENTField" value="<? echo $thisCOLUMN_COMMENT; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisTABLE_CATALOG; ?></TD>
		<TD><? echo $thisTABLE_SCHEMA; ?></TD>
		<TD><? echo $thisTABLE_NAME; ?></TD>
		<TD><? echo $thisCOLUMN_NAME; ?></TD>
		<TD><? echo $thisORDINAL_POSITION; ?></TD>
		<TD><? echo $thisCOLUMN_DEFAULT; ?></TD>
		<TD><? echo $thisIS_NULLABLE; ?></TD>
		<TD><? echo $thisDATA_TYPE; ?></TD>
		<TD><? echo $thisCHARACTER_MAXIMUM_LENGTH; ?></TD>
		<TD><? echo $thisCHARACTER_OCTET_LENGTH; ?></TD>
		<TD><? echo $thisNUMERIC_PRECISION; ?></TD>
		<TD><? echo $thisNUMERIC_SCALE; ?></TD>
		<TD><? echo $thisCHARACTER_SET_NAME; ?></TD>
		<TD><? echo $thisCOLLATION_NAME; ?></TD>
		<TD><? echo $thisCOLUMN_TYPE; ?></TD>
		<TD><? echo $thisCOLUMN_KEY; ?></TD>
		<TD><? echo $thisEXTRA; ?></TD>
		<TD><? echo $thisPRIVILEGES; ?></TD>
		<TD><? echo $thisCOLUMN_COMMENT; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisTABLE_CATALOGField=<? echo $thisTABLE_CATALOG; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisTABLE_CATALOGField=<? echo $thisTABLE_CATALOG; ?>">Delete</a></TD>
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