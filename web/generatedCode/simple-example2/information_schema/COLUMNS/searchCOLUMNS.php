<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
function highlightSearchTerms($fullText, $searchTerm, $bgcolor="#FFFF99")
{
	if (empty($searchTerm))
	{
		return $fullText;
	}
	else
	{
		$start_tag = "<span style=\"background-color: $bgcolor\">";
		$end_tag = "</span>";
		$highlighted_results = $start_tag . $searchTerm . $end_tag;
		return eregi_replace($searchTerm, $highlighted_results, $fullText);
	}
}

?>
<?php
$thisKeyword = $_REQUEST['keyword'];
?>
<?
$sqlQuery = "SELECT *  FROM COLUMNS WHERE TABLE_CATALOG like '%$thisKeyword%'  OR TABLE_SCHEMA like '%$thisKeyword%'  OR TABLE_NAME like '%$thisKeyword%'  OR COLUMN_NAME like '%$thisKeyword%'  OR ORDINAL_POSITION like '%$thisKeyword%'  OR COLUMN_DEFAULT like '%$thisKeyword%'  OR IS_NULLABLE like '%$thisKeyword%'  OR DATA_TYPE like '%$thisKeyword%'  OR CHARACTER_MAXIMUM_LENGTH like '%$thisKeyword%'  OR CHARACTER_OCTET_LENGTH like '%$thisKeyword%'  OR NUMERIC_PRECISION like '%$thisKeyword%'  OR NUMERIC_SCALE like '%$thisKeyword%'  OR CHARACTER_SET_NAME like '%$thisKeyword%'  OR COLLATION_NAME like '%$thisKeyword%'  OR COLUMN_TYPE like '%$thisKeyword%'  OR COLUMN_KEY like '%$thisKeyword%'  OR EXTRA like '%$thisKeyword%'  OR PRIVILEGES like '%$thisKeyword%'  OR COLUMN_COMMENT like '%$thisKeyword%' ";
$result = MYSQL_QUERY($sqlQuery);
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
$highlightColor = "#FFFF99"; 

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
	$thisTABLE_CATALOG = highlightSearchTerms($thisTABLE_CATALOG, $thisKeyword, $highlightColor); 
	$thisTABLE_SCHEMA = highlightSearchTerms($thisTABLE_SCHEMA, $thisKeyword, $highlightColor); 
	$thisTABLE_NAME = highlightSearchTerms($thisTABLE_NAME, $thisKeyword, $highlightColor); 
	$thisCOLUMN_NAME = highlightSearchTerms($thisCOLUMN_NAME, $thisKeyword, $highlightColor); 
	$thisORDINAL_POSITION = highlightSearchTerms($thisORDINAL_POSITION, $thisKeyword, $highlightColor); 
	$thisCOLUMN_DEFAULT = highlightSearchTerms($thisCOLUMN_DEFAULT, $thisKeyword, $highlightColor); 
	$thisIS_NULLABLE = highlightSearchTerms($thisIS_NULLABLE, $thisKeyword, $highlightColor); 
	$thisDATA_TYPE = highlightSearchTerms($thisDATA_TYPE, $thisKeyword, $highlightColor); 
	$thisCHARACTER_MAXIMUM_LENGTH = highlightSearchTerms($thisCHARACTER_MAXIMUM_LENGTH, $thisKeyword, $highlightColor); 
	$thisCHARACTER_OCTET_LENGTH = highlightSearchTerms($thisCHARACTER_OCTET_LENGTH, $thisKeyword, $highlightColor); 
	$thisNUMERIC_PRECISION = highlightSearchTerms($thisNUMERIC_PRECISION, $thisKeyword, $highlightColor); 
	$thisNUMERIC_SCALE = highlightSearchTerms($thisNUMERIC_SCALE, $thisKeyword, $highlightColor); 
	$thisCHARACTER_SET_NAME = highlightSearchTerms($thisCHARACTER_SET_NAME, $thisKeyword, $highlightColor); 
	$thisCOLLATION_NAME = highlightSearchTerms($thisCOLLATION_NAME, $thisKeyword, $highlightColor); 
	$thisCOLUMN_TYPE = highlightSearchTerms($thisCOLUMN_TYPE, $thisKeyword, $highlightColor); 
	$thisCOLUMN_KEY = highlightSearchTerms($thisCOLUMN_KEY, $thisKeyword, $highlightColor); 
	$thisEXTRA = highlightSearchTerms($thisEXTRA, $thisKeyword, $highlightColor); 
	$thisPRIVILEGES = highlightSearchTerms($thisPRIVILEGES, $thisKeyword, $highlightColor); 
	$thisCOLUMN_COMMENT = highlightSearchTerms($thisCOLUMN_COMMENT, $thisKeyword, $highlightColor); 

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
<?
} // end of if numberOfRows > 0 
 ?>

<?php
include_once("../common/footer.php");
?>