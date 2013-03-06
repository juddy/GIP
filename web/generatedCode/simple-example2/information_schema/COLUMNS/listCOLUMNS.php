<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
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
	<TD><a href="editCOLUMNS.php?TABLE_CATALOGField=<? echo $thisTABLE_CATALOG; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteCOLUMNS.php?TABLE_CATALOGField=<? echo $thisTABLE_CATALOG; ?>">Delete</a></TD>
	</TR>
<?
		$i++;

	} // end while loop
?>
</TABLE>


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