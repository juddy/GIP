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
$sqlQuery = "SELECT *  FROM PARAMETERS WHERE SPECIFIC_CATALOG like '%$thisKeyword%'  OR SPECIFIC_SCHEMA like '%$thisKeyword%'  OR SPECIFIC_NAME like '%$thisKeyword%'  OR ORDINAL_POSITION like '%$thisKeyword%'  OR PARAMETER_MODE like '%$thisKeyword%'  OR PARAMETER_NAME like '%$thisKeyword%'  OR DATA_TYPE like '%$thisKeyword%'  OR CHARACTER_MAXIMUM_LENGTH like '%$thisKeyword%'  OR CHARACTER_OCTET_LENGTH like '%$thisKeyword%'  OR NUMERIC_PRECISION like '%$thisKeyword%'  OR NUMERIC_SCALE like '%$thisKeyword%'  OR CHARACTER_SET_NAME like '%$thisKeyword%'  OR COLLATION_NAME like '%$thisKeyword%'  OR DTD_IDENTIFIER like '%$thisKeyword%'  OR ROUTINE_TYPE like '%$thisKeyword%' ";
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
$highlightColor = "#FFFF99"; 

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
	$thisSPECIFIC_CATALOG = highlightSearchTerms($thisSPECIFIC_CATALOG, $thisKeyword, $highlightColor); 
	$thisSPECIFIC_SCHEMA = highlightSearchTerms($thisSPECIFIC_SCHEMA, $thisKeyword, $highlightColor); 
	$thisSPECIFIC_NAME = highlightSearchTerms($thisSPECIFIC_NAME, $thisKeyword, $highlightColor); 
	$thisORDINAL_POSITION = highlightSearchTerms($thisORDINAL_POSITION, $thisKeyword, $highlightColor); 
	$thisPARAMETER_MODE = highlightSearchTerms($thisPARAMETER_MODE, $thisKeyword, $highlightColor); 
	$thisPARAMETER_NAME = highlightSearchTerms($thisPARAMETER_NAME, $thisKeyword, $highlightColor); 
	$thisDATA_TYPE = highlightSearchTerms($thisDATA_TYPE, $thisKeyword, $highlightColor); 
	$thisCHARACTER_MAXIMUM_LENGTH = highlightSearchTerms($thisCHARACTER_MAXIMUM_LENGTH, $thisKeyword, $highlightColor); 
	$thisCHARACTER_OCTET_LENGTH = highlightSearchTerms($thisCHARACTER_OCTET_LENGTH, $thisKeyword, $highlightColor); 
	$thisNUMERIC_PRECISION = highlightSearchTerms($thisNUMERIC_PRECISION, $thisKeyword, $highlightColor); 
	$thisNUMERIC_SCALE = highlightSearchTerms($thisNUMERIC_SCALE, $thisKeyword, $highlightColor); 
	$thisCHARACTER_SET_NAME = highlightSearchTerms($thisCHARACTER_SET_NAME, $thisKeyword, $highlightColor); 
	$thisCOLLATION_NAME = highlightSearchTerms($thisCOLLATION_NAME, $thisKeyword, $highlightColor); 
	$thisDTD_IDENTIFIER = highlightSearchTerms($thisDTD_IDENTIFIER, $thisKeyword, $highlightColor); 
	$thisROUTINE_TYPE = highlightSearchTerms($thisROUTINE_TYPE, $thisKeyword, $highlightColor); 

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
	<TD><a href="editPARAMETERS.php?SPECIFIC_CATALOGField=<? echo $thisSPECIFIC_CATALOG; ?>">Edit</a></TD>
	<TD><a href="confirmDeletePARAMETERS.php?SPECIFIC_CATALOGField=<? echo $thisSPECIFIC_CATALOG; ?>">Delete</a></TD>
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