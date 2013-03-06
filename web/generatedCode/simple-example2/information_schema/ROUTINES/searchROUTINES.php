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
$sqlQuery = "SELECT *  FROM ROUTINES WHERE SPECIFIC_NAME like '%$thisKeyword%'  OR ROUTINE_CATALOG like '%$thisKeyword%'  OR ROUTINE_SCHEMA like '%$thisKeyword%'  OR ROUTINE_NAME like '%$thisKeyword%'  OR ROUTINE_TYPE like '%$thisKeyword%'  OR DATA_TYPE like '%$thisKeyword%'  OR CHARACTER_MAXIMUM_LENGTH like '%$thisKeyword%'  OR CHARACTER_OCTET_LENGTH like '%$thisKeyword%'  OR NUMERIC_PRECISION like '%$thisKeyword%'  OR NUMERIC_SCALE like '%$thisKeyword%'  OR CHARACTER_SET_NAME like '%$thisKeyword%'  OR COLLATION_NAME like '%$thisKeyword%'  OR DTD_IDENTIFIER like '%$thisKeyword%'  OR ROUTINE_BODY like '%$thisKeyword%'  OR ROUTINE_DEFINITION like '%$thisKeyword%'  OR EXTERNAL_NAME like '%$thisKeyword%'  OR EXTERNAL_LANGUAGE like '%$thisKeyword%'  OR PARAMETER_STYLE like '%$thisKeyword%'  OR IS_DETERMINISTIC like '%$thisKeyword%'  OR SQL_DATA_ACCESS like '%$thisKeyword%'  OR SQL_PATH like '%$thisKeyword%'  OR SECURITY_TYPE like '%$thisKeyword%'  OR CREATED like '%$thisKeyword%'  OR LAST_ALTERED like '%$thisKeyword%'  OR SQL_MODE like '%$thisKeyword%'  OR ROUTINE_COMMENT like '%$thisKeyword%'  OR DEFINER like '%$thisKeyword%'  OR CHARACTER_SET_CLIENT like '%$thisKeyword%'  OR COLLATION_CONNECTION like '%$thisKeyword%'  OR DATABASE_COLLATION like '%$thisKeyword%' ";
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
$highlightColor = "#FFFF99"; 

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
	$thisSPECIFIC_NAME = highlightSearchTerms($thisSPECIFIC_NAME, $thisKeyword, $highlightColor); 
	$thisROUTINE_CATALOG = highlightSearchTerms($thisROUTINE_CATALOG, $thisKeyword, $highlightColor); 
	$thisROUTINE_SCHEMA = highlightSearchTerms($thisROUTINE_SCHEMA, $thisKeyword, $highlightColor); 
	$thisROUTINE_NAME = highlightSearchTerms($thisROUTINE_NAME, $thisKeyword, $highlightColor); 
	$thisROUTINE_TYPE = highlightSearchTerms($thisROUTINE_TYPE, $thisKeyword, $highlightColor); 
	$thisDATA_TYPE = highlightSearchTerms($thisDATA_TYPE, $thisKeyword, $highlightColor); 
	$thisCHARACTER_MAXIMUM_LENGTH = highlightSearchTerms($thisCHARACTER_MAXIMUM_LENGTH, $thisKeyword, $highlightColor); 
	$thisCHARACTER_OCTET_LENGTH = highlightSearchTerms($thisCHARACTER_OCTET_LENGTH, $thisKeyword, $highlightColor); 
	$thisNUMERIC_PRECISION = highlightSearchTerms($thisNUMERIC_PRECISION, $thisKeyword, $highlightColor); 
	$thisNUMERIC_SCALE = highlightSearchTerms($thisNUMERIC_SCALE, $thisKeyword, $highlightColor); 
	$thisCHARACTER_SET_NAME = highlightSearchTerms($thisCHARACTER_SET_NAME, $thisKeyword, $highlightColor); 
	$thisCOLLATION_NAME = highlightSearchTerms($thisCOLLATION_NAME, $thisKeyword, $highlightColor); 
	$thisDTD_IDENTIFIER = highlightSearchTerms($thisDTD_IDENTIFIER, $thisKeyword, $highlightColor); 
	$thisROUTINE_BODY = highlightSearchTerms($thisROUTINE_BODY, $thisKeyword, $highlightColor); 
	$thisROUTINE_DEFINITION = highlightSearchTerms($thisROUTINE_DEFINITION, $thisKeyword, $highlightColor); 
	$thisEXTERNAL_NAME = highlightSearchTerms($thisEXTERNAL_NAME, $thisKeyword, $highlightColor); 
	$thisEXTERNAL_LANGUAGE = highlightSearchTerms($thisEXTERNAL_LANGUAGE, $thisKeyword, $highlightColor); 
	$thisPARAMETER_STYLE = highlightSearchTerms($thisPARAMETER_STYLE, $thisKeyword, $highlightColor); 
	$thisIS_DETERMINISTIC = highlightSearchTerms($thisIS_DETERMINISTIC, $thisKeyword, $highlightColor); 
	$thisSQL_DATA_ACCESS = highlightSearchTerms($thisSQL_DATA_ACCESS, $thisKeyword, $highlightColor); 
	$thisSQL_PATH = highlightSearchTerms($thisSQL_PATH, $thisKeyword, $highlightColor); 
	$thisSECURITY_TYPE = highlightSearchTerms($thisSECURITY_TYPE, $thisKeyword, $highlightColor); 
	$thisCREATED = highlightSearchTerms($thisCREATED, $thisKeyword, $highlightColor); 
	$thisLAST_ALTERED = highlightSearchTerms($thisLAST_ALTERED, $thisKeyword, $highlightColor); 
	$thisSQL_MODE = highlightSearchTerms($thisSQL_MODE, $thisKeyword, $highlightColor); 
	$thisROUTINE_COMMENT = highlightSearchTerms($thisROUTINE_COMMENT, $thisKeyword, $highlightColor); 
	$thisDEFINER = highlightSearchTerms($thisDEFINER, $thisKeyword, $highlightColor); 
	$thisCHARACTER_SET_CLIENT = highlightSearchTerms($thisCHARACTER_SET_CLIENT, $thisKeyword, $highlightColor); 
	$thisCOLLATION_CONNECTION = highlightSearchTerms($thisCOLLATION_CONNECTION, $thisKeyword, $highlightColor); 
	$thisDATABASE_COLLATION = highlightSearchTerms($thisDATABASE_COLLATION, $thisKeyword, $highlightColor); 

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
	<TD><a href="editROUTINES.php?SPECIFIC_NAMEField=<? echo $thisSPECIFIC_NAME; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteROUTINES.php?SPECIFIC_NAMEField=<? echo $thisSPECIFIC_NAME; ?>">Delete</a></TD>
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