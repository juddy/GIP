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
$sqlQuery = "SELECT *  FROM TABLES WHERE TABLE_CATALOG like '%$thisKeyword%'  OR TABLE_SCHEMA like '%$thisKeyword%'  OR TABLE_NAME like '%$thisKeyword%'  OR TABLE_TYPE like '%$thisKeyword%'  OR ENGINE like '%$thisKeyword%'  OR VERSION like '%$thisKeyword%'  OR ROW_FORMAT like '%$thisKeyword%'  OR TABLE_ROWS like '%$thisKeyword%'  OR AVG_ROW_LENGTH like '%$thisKeyword%'  OR DATA_LENGTH like '%$thisKeyword%'  OR MAX_DATA_LENGTH like '%$thisKeyword%'  OR INDEX_LENGTH like '%$thisKeyword%'  OR DATA_FREE like '%$thisKeyword%'  OR AUTO_INCREMENT like '%$thisKeyword%'  OR CREATE_TIME like '%$thisKeyword%'  OR UPDATE_TIME like '%$thisKeyword%'  OR CHECK_TIME like '%$thisKeyword%'  OR TABLE_COLLATION like '%$thisKeyword%'  OR CHECKSUM like '%$thisKeyword%'  OR CREATE_OPTIONS like '%$thisKeyword%'  OR TABLE_COMMENT like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ENGINE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ENGINE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=VERSION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>VERSION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ROW_FORMAT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ROW_FORMAT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_ROWS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_ROWS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=AVG_ROW_LENGTH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>AVG_ROW_LENGTH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATA_LENGTH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATA_LENGTH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=MAX_DATA_LENGTH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>MAX_DATA_LENGTH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INDEX_LENGTH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INDEX_LENGTH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATA_FREE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATA_FREE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=AUTO_INCREMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>AUTO_INCREMENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CREATE_TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CREATE_TIME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=UPDATE_TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>UPDATE_TIME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CHECK_TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CHECK_TIME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_COLLATION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_COLLATION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CHECKSUM&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CHECKSUM</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CREATE_OPTIONS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CREATE_OPTIONS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_COMMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_COMMENT</B>
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
	$thisTABLE_TYPE = MYSQL_RESULT($result,$i,"TABLE_TYPE");
	$thisENGINE = MYSQL_RESULT($result,$i,"ENGINE");
	$thisVERSION = MYSQL_RESULT($result,$i,"VERSION");
	$thisROW_FORMAT = MYSQL_RESULT($result,$i,"ROW_FORMAT");
	$thisTABLE_ROWS = MYSQL_RESULT($result,$i,"TABLE_ROWS");
	$thisAVG_ROW_LENGTH = MYSQL_RESULT($result,$i,"AVG_ROW_LENGTH");
	$thisDATA_LENGTH = MYSQL_RESULT($result,$i,"DATA_LENGTH");
	$thisMAX_DATA_LENGTH = MYSQL_RESULT($result,$i,"MAX_DATA_LENGTH");
	$thisINDEX_LENGTH = MYSQL_RESULT($result,$i,"INDEX_LENGTH");
	$thisDATA_FREE = MYSQL_RESULT($result,$i,"DATA_FREE");
	$thisAUTO_INCREMENT = MYSQL_RESULT($result,$i,"AUTO_INCREMENT");
	$thisCREATE_TIME = MYSQL_RESULT($result,$i,"CREATE_TIME");
	$thisUPDATE_TIME = MYSQL_RESULT($result,$i,"UPDATE_TIME");
	$thisCHECK_TIME = MYSQL_RESULT($result,$i,"CHECK_TIME");
	$thisTABLE_COLLATION = MYSQL_RESULT($result,$i,"TABLE_COLLATION");
	$thisCHECKSUM = MYSQL_RESULT($result,$i,"CHECKSUM");
	$thisCREATE_OPTIONS = MYSQL_RESULT($result,$i,"CREATE_OPTIONS");
	$thisTABLE_COMMENT = MYSQL_RESULT($result,$i,"TABLE_COMMENT");
	$thisTABLE_CATALOG = highlightSearchTerms($thisTABLE_CATALOG, $thisKeyword, $highlightColor); 
	$thisTABLE_SCHEMA = highlightSearchTerms($thisTABLE_SCHEMA, $thisKeyword, $highlightColor); 
	$thisTABLE_NAME = highlightSearchTerms($thisTABLE_NAME, $thisKeyword, $highlightColor); 
	$thisTABLE_TYPE = highlightSearchTerms($thisTABLE_TYPE, $thisKeyword, $highlightColor); 
	$thisENGINE = highlightSearchTerms($thisENGINE, $thisKeyword, $highlightColor); 
	$thisVERSION = highlightSearchTerms($thisVERSION, $thisKeyword, $highlightColor); 
	$thisROW_FORMAT = highlightSearchTerms($thisROW_FORMAT, $thisKeyword, $highlightColor); 
	$thisTABLE_ROWS = highlightSearchTerms($thisTABLE_ROWS, $thisKeyword, $highlightColor); 
	$thisAVG_ROW_LENGTH = highlightSearchTerms($thisAVG_ROW_LENGTH, $thisKeyword, $highlightColor); 
	$thisDATA_LENGTH = highlightSearchTerms($thisDATA_LENGTH, $thisKeyword, $highlightColor); 
	$thisMAX_DATA_LENGTH = highlightSearchTerms($thisMAX_DATA_LENGTH, $thisKeyword, $highlightColor); 
	$thisINDEX_LENGTH = highlightSearchTerms($thisINDEX_LENGTH, $thisKeyword, $highlightColor); 
	$thisDATA_FREE = highlightSearchTerms($thisDATA_FREE, $thisKeyword, $highlightColor); 
	$thisAUTO_INCREMENT = highlightSearchTerms($thisAUTO_INCREMENT, $thisKeyword, $highlightColor); 
	$thisCREATE_TIME = highlightSearchTerms($thisCREATE_TIME, $thisKeyword, $highlightColor); 
	$thisUPDATE_TIME = highlightSearchTerms($thisUPDATE_TIME, $thisKeyword, $highlightColor); 
	$thisCHECK_TIME = highlightSearchTerms($thisCHECK_TIME, $thisKeyword, $highlightColor); 
	$thisTABLE_COLLATION = highlightSearchTerms($thisTABLE_COLLATION, $thisKeyword, $highlightColor); 
	$thisCHECKSUM = highlightSearchTerms($thisCHECKSUM, $thisKeyword, $highlightColor); 
	$thisCREATE_OPTIONS = highlightSearchTerms($thisCREATE_OPTIONS, $thisKeyword, $highlightColor); 
	$thisTABLE_COMMENT = highlightSearchTerms($thisTABLE_COMMENT, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisTABLE_CATALOG; ?></TD>
		<TD><? echo $thisTABLE_SCHEMA; ?></TD>
		<TD><? echo $thisTABLE_NAME; ?></TD>
		<TD><? echo $thisTABLE_TYPE; ?></TD>
		<TD><? echo $thisENGINE; ?></TD>
		<TD><? echo $thisVERSION; ?></TD>
		<TD><? echo $thisROW_FORMAT; ?></TD>
		<TD><? echo $thisTABLE_ROWS; ?></TD>
		<TD><? echo $thisAVG_ROW_LENGTH; ?></TD>
		<TD><? echo $thisDATA_LENGTH; ?></TD>
		<TD><? echo $thisMAX_DATA_LENGTH; ?></TD>
		<TD><? echo $thisINDEX_LENGTH; ?></TD>
		<TD><? echo $thisDATA_FREE; ?></TD>
		<TD><? echo $thisAUTO_INCREMENT; ?></TD>
		<TD><? echo $thisCREATE_TIME; ?></TD>
		<TD><? echo $thisUPDATE_TIME; ?></TD>
		<TD><? echo $thisCHECK_TIME; ?></TD>
		<TD><? echo $thisTABLE_COLLATION; ?></TD>
		<TD><? echo $thisCHECKSUM; ?></TD>
		<TD><? echo $thisCREATE_OPTIONS; ?></TD>
		<TD><? echo $thisTABLE_COMMENT; ?></TD>
	<TD><a href="editTABLES.php?TABLE_CATALOGField=<? echo $thisTABLE_CATALOG; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteTABLES.php?TABLE_CATALOGField=<? echo $thisTABLE_CATALOG; ?>">Delete</a></TD>
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