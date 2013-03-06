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
$sqlQuery = "SELECT *  FROM INNODB_BUFFER_POOL_STATS WHERE POOL_ID like '%$thisKeyword%'  OR POOL_SIZE like '%$thisKeyword%'  OR FREE_BUFFERS like '%$thisKeyword%'  OR DATABASE_PAGES like '%$thisKeyword%'  OR OLD_DATABASE_PAGES like '%$thisKeyword%'  OR MODIFIED_DATABASE_PAGES like '%$thisKeyword%'  OR PENDING_DECOMPRESS like '%$thisKeyword%'  OR PENDING_READS like '%$thisKeyword%'  OR PENDING_FLUSH_LRU like '%$thisKeyword%'  OR PENDING_FLUSH_LIST like '%$thisKeyword%'  OR PAGES_MADE_YOUNG like '%$thisKeyword%'  OR PAGES_NOT_MADE_YOUNG like '%$thisKeyword%'  OR PAGES_MADE_YOUNG_RATE like '%$thisKeyword%'  OR PAGES_MADE_NOT_YOUNG_RATE like '%$thisKeyword%'  OR NUMBER_PAGES_READ like '%$thisKeyword%'  OR NUMBER_PAGES_CREATED like '%$thisKeyword%'  OR NUMBER_PAGES_WRITTEN like '%$thisKeyword%'  OR PAGES_READ_RATE like '%$thisKeyword%'  OR PAGES_CREATE_RATE like '%$thisKeyword%'  OR PAGES_WRITTEN_RATE like '%$thisKeyword%'  OR NUMBER_PAGES_GET like '%$thisKeyword%'  OR HIT_RATE like '%$thisKeyword%'  OR YOUNG_MAKE_PER_THOUSAND_GETS like '%$thisKeyword%'  OR NOT_YOUNG_MAKE_PER_THOUSAND_GETS like '%$thisKeyword%'  OR NUMBER_PAGES_READ_AHEAD like '%$thisKeyword%'  OR NUMBER_READ_AHEAD_EVICTED like '%$thisKeyword%'  OR READ_AHEAD_RATE like '%$thisKeyword%'  OR READ_AHEAD_EVICTED_RATE like '%$thisKeyword%'  OR LRU_IO_TOTAL like '%$thisKeyword%'  OR LRU_IO_CURRENT like '%$thisKeyword%'  OR UNCOMPRESS_TOTAL like '%$thisKeyword%'  OR UNCOMPRESS_CURRENT like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=POOL_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>POOL_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=POOL_SIZE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>POOL_SIZE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=FREE_BUFFERS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>FREE_BUFFERS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATABASE_PAGES&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATABASE_PAGES</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=OLD_DATABASE_PAGES&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>OLD_DATABASE_PAGES</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=MODIFIED_DATABASE_PAGES&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>MODIFIED_DATABASE_PAGES</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PENDING_DECOMPRESS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PENDING_DECOMPRESS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PENDING_READS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PENDING_READS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PENDING_FLUSH_LRU&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PENDING_FLUSH_LRU</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PENDING_FLUSH_LIST&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PENDING_FLUSH_LIST</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGES_MADE_YOUNG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGES_MADE_YOUNG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGES_NOT_MADE_YOUNG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGES_NOT_MADE_YOUNG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGES_MADE_YOUNG_RATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGES_MADE_YOUNG_RATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGES_MADE_NOT_YOUNG_RATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGES_MADE_NOT_YOUNG_RATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NUMBER_PAGES_READ&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NUMBER_PAGES_READ</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NUMBER_PAGES_CREATED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NUMBER_PAGES_CREATED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NUMBER_PAGES_WRITTEN&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NUMBER_PAGES_WRITTEN</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGES_READ_RATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGES_READ_RATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGES_CREATE_RATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGES_CREATE_RATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGES_WRITTEN_RATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGES_WRITTEN_RATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NUMBER_PAGES_GET&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NUMBER_PAGES_GET</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=HIT_RATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>HIT_RATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=YOUNG_MAKE_PER_THOUSAND_GETS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>YOUNG_MAKE_PER_THOUSAND_GETS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NOT_YOUNG_MAKE_PER_THOUSAND_GETS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NOT_YOUNG_MAKE_PER_THOUSAND_GETS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NUMBER_PAGES_READ_AHEAD&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NUMBER_PAGES_READ_AHEAD</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NUMBER_READ_AHEAD_EVICTED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NUMBER_READ_AHEAD_EVICTED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=READ_AHEAD_RATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>READ_AHEAD_RATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=READ_AHEAD_EVICTED_RATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>READ_AHEAD_EVICTED_RATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LRU_IO_TOTAL&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LRU_IO_TOTAL</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LRU_IO_CURRENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LRU_IO_CURRENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=UNCOMPRESS_TOTAL&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>UNCOMPRESS_TOTAL</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=UNCOMPRESS_CURRENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>UNCOMPRESS_CURRENT</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisPOOL_ID = MYSQL_RESULT($result,$i,"POOL_ID");
	$thisPOOL_SIZE = MYSQL_RESULT($result,$i,"POOL_SIZE");
	$thisFREE_BUFFERS = MYSQL_RESULT($result,$i,"FREE_BUFFERS");
	$thisDATABASE_PAGES = MYSQL_RESULT($result,$i,"DATABASE_PAGES");
	$thisOLD_DATABASE_PAGES = MYSQL_RESULT($result,$i,"OLD_DATABASE_PAGES");
	$thisMODIFIED_DATABASE_PAGES = MYSQL_RESULT($result,$i,"MODIFIED_DATABASE_PAGES");
	$thisPENDING_DECOMPRESS = MYSQL_RESULT($result,$i,"PENDING_DECOMPRESS");
	$thisPENDING_READS = MYSQL_RESULT($result,$i,"PENDING_READS");
	$thisPENDING_FLUSH_LRU = MYSQL_RESULT($result,$i,"PENDING_FLUSH_LRU");
	$thisPENDING_FLUSH_LIST = MYSQL_RESULT($result,$i,"PENDING_FLUSH_LIST");
	$thisPAGES_MADE_YOUNG = MYSQL_RESULT($result,$i,"PAGES_MADE_YOUNG");
	$thisPAGES_NOT_MADE_YOUNG = MYSQL_RESULT($result,$i,"PAGES_NOT_MADE_YOUNG");
	$thisPAGES_MADE_YOUNG_RATE = MYSQL_RESULT($result,$i,"PAGES_MADE_YOUNG_RATE");
	$thisPAGES_MADE_NOT_YOUNG_RATE = MYSQL_RESULT($result,$i,"PAGES_MADE_NOT_YOUNG_RATE");
	$thisNUMBER_PAGES_READ = MYSQL_RESULT($result,$i,"NUMBER_PAGES_READ");
	$thisNUMBER_PAGES_CREATED = MYSQL_RESULT($result,$i,"NUMBER_PAGES_CREATED");
	$thisNUMBER_PAGES_WRITTEN = MYSQL_RESULT($result,$i,"NUMBER_PAGES_WRITTEN");
	$thisPAGES_READ_RATE = MYSQL_RESULT($result,$i,"PAGES_READ_RATE");
	$thisPAGES_CREATE_RATE = MYSQL_RESULT($result,$i,"PAGES_CREATE_RATE");
	$thisPAGES_WRITTEN_RATE = MYSQL_RESULT($result,$i,"PAGES_WRITTEN_RATE");
	$thisNUMBER_PAGES_GET = MYSQL_RESULT($result,$i,"NUMBER_PAGES_GET");
	$thisHIT_RATE = MYSQL_RESULT($result,$i,"HIT_RATE");
	$thisYOUNG_MAKE_PER_THOUSAND_GETS = MYSQL_RESULT($result,$i,"YOUNG_MAKE_PER_THOUSAND_GETS");
	$thisNOT_YOUNG_MAKE_PER_THOUSAND_GETS = MYSQL_RESULT($result,$i,"NOT_YOUNG_MAKE_PER_THOUSAND_GETS");
	$thisNUMBER_PAGES_READ_AHEAD = MYSQL_RESULT($result,$i,"NUMBER_PAGES_READ_AHEAD");
	$thisNUMBER_READ_AHEAD_EVICTED = MYSQL_RESULT($result,$i,"NUMBER_READ_AHEAD_EVICTED");
	$thisREAD_AHEAD_RATE = MYSQL_RESULT($result,$i,"READ_AHEAD_RATE");
	$thisREAD_AHEAD_EVICTED_RATE = MYSQL_RESULT($result,$i,"READ_AHEAD_EVICTED_RATE");
	$thisLRU_IO_TOTAL = MYSQL_RESULT($result,$i,"LRU_IO_TOTAL");
	$thisLRU_IO_CURRENT = MYSQL_RESULT($result,$i,"LRU_IO_CURRENT");
	$thisUNCOMPRESS_TOTAL = MYSQL_RESULT($result,$i,"UNCOMPRESS_TOTAL");
	$thisUNCOMPRESS_CURRENT = MYSQL_RESULT($result,$i,"UNCOMPRESS_CURRENT");
	$thisPOOL_ID = highlightSearchTerms($thisPOOL_ID, $thisKeyword, $highlightColor); 
	$thisPOOL_SIZE = highlightSearchTerms($thisPOOL_SIZE, $thisKeyword, $highlightColor); 
	$thisFREE_BUFFERS = highlightSearchTerms($thisFREE_BUFFERS, $thisKeyword, $highlightColor); 
	$thisDATABASE_PAGES = highlightSearchTerms($thisDATABASE_PAGES, $thisKeyword, $highlightColor); 
	$thisOLD_DATABASE_PAGES = highlightSearchTerms($thisOLD_DATABASE_PAGES, $thisKeyword, $highlightColor); 
	$thisMODIFIED_DATABASE_PAGES = highlightSearchTerms($thisMODIFIED_DATABASE_PAGES, $thisKeyword, $highlightColor); 
	$thisPENDING_DECOMPRESS = highlightSearchTerms($thisPENDING_DECOMPRESS, $thisKeyword, $highlightColor); 
	$thisPENDING_READS = highlightSearchTerms($thisPENDING_READS, $thisKeyword, $highlightColor); 
	$thisPENDING_FLUSH_LRU = highlightSearchTerms($thisPENDING_FLUSH_LRU, $thisKeyword, $highlightColor); 
	$thisPENDING_FLUSH_LIST = highlightSearchTerms($thisPENDING_FLUSH_LIST, $thisKeyword, $highlightColor); 
	$thisPAGES_MADE_YOUNG = highlightSearchTerms($thisPAGES_MADE_YOUNG, $thisKeyword, $highlightColor); 
	$thisPAGES_NOT_MADE_YOUNG = highlightSearchTerms($thisPAGES_NOT_MADE_YOUNG, $thisKeyword, $highlightColor); 
	$thisPAGES_MADE_YOUNG_RATE = highlightSearchTerms($thisPAGES_MADE_YOUNG_RATE, $thisKeyword, $highlightColor); 
	$thisPAGES_MADE_NOT_YOUNG_RATE = highlightSearchTerms($thisPAGES_MADE_NOT_YOUNG_RATE, $thisKeyword, $highlightColor); 
	$thisNUMBER_PAGES_READ = highlightSearchTerms($thisNUMBER_PAGES_READ, $thisKeyword, $highlightColor); 
	$thisNUMBER_PAGES_CREATED = highlightSearchTerms($thisNUMBER_PAGES_CREATED, $thisKeyword, $highlightColor); 
	$thisNUMBER_PAGES_WRITTEN = highlightSearchTerms($thisNUMBER_PAGES_WRITTEN, $thisKeyword, $highlightColor); 
	$thisPAGES_READ_RATE = highlightSearchTerms($thisPAGES_READ_RATE, $thisKeyword, $highlightColor); 
	$thisPAGES_CREATE_RATE = highlightSearchTerms($thisPAGES_CREATE_RATE, $thisKeyword, $highlightColor); 
	$thisPAGES_WRITTEN_RATE = highlightSearchTerms($thisPAGES_WRITTEN_RATE, $thisKeyword, $highlightColor); 
	$thisNUMBER_PAGES_GET = highlightSearchTerms($thisNUMBER_PAGES_GET, $thisKeyword, $highlightColor); 
	$thisHIT_RATE = highlightSearchTerms($thisHIT_RATE, $thisKeyword, $highlightColor); 
	$thisYOUNG_MAKE_PER_THOUSAND_GETS = highlightSearchTerms($thisYOUNG_MAKE_PER_THOUSAND_GETS, $thisKeyword, $highlightColor); 
	$thisNOT_YOUNG_MAKE_PER_THOUSAND_GETS = highlightSearchTerms($thisNOT_YOUNG_MAKE_PER_THOUSAND_GETS, $thisKeyword, $highlightColor); 
	$thisNUMBER_PAGES_READ_AHEAD = highlightSearchTerms($thisNUMBER_PAGES_READ_AHEAD, $thisKeyword, $highlightColor); 
	$thisNUMBER_READ_AHEAD_EVICTED = highlightSearchTerms($thisNUMBER_READ_AHEAD_EVICTED, $thisKeyword, $highlightColor); 
	$thisREAD_AHEAD_RATE = highlightSearchTerms($thisREAD_AHEAD_RATE, $thisKeyword, $highlightColor); 
	$thisREAD_AHEAD_EVICTED_RATE = highlightSearchTerms($thisREAD_AHEAD_EVICTED_RATE, $thisKeyword, $highlightColor); 
	$thisLRU_IO_TOTAL = highlightSearchTerms($thisLRU_IO_TOTAL, $thisKeyword, $highlightColor); 
	$thisLRU_IO_CURRENT = highlightSearchTerms($thisLRU_IO_CURRENT, $thisKeyword, $highlightColor); 
	$thisUNCOMPRESS_TOTAL = highlightSearchTerms($thisUNCOMPRESS_TOTAL, $thisKeyword, $highlightColor); 
	$thisUNCOMPRESS_CURRENT = highlightSearchTerms($thisUNCOMPRESS_CURRENT, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisPOOL_ID; ?></TD>
		<TD><? echo $thisPOOL_SIZE; ?></TD>
		<TD><? echo $thisFREE_BUFFERS; ?></TD>
		<TD><? echo $thisDATABASE_PAGES; ?></TD>
		<TD><? echo $thisOLD_DATABASE_PAGES; ?></TD>
		<TD><? echo $thisMODIFIED_DATABASE_PAGES; ?></TD>
		<TD><? echo $thisPENDING_DECOMPRESS; ?></TD>
		<TD><? echo $thisPENDING_READS; ?></TD>
		<TD><? echo $thisPENDING_FLUSH_LRU; ?></TD>
		<TD><? echo $thisPENDING_FLUSH_LIST; ?></TD>
		<TD><? echo $thisPAGES_MADE_YOUNG; ?></TD>
		<TD><? echo $thisPAGES_NOT_MADE_YOUNG; ?></TD>
		<TD><? echo $thisPAGES_MADE_YOUNG_RATE; ?></TD>
		<TD><? echo $thisPAGES_MADE_NOT_YOUNG_RATE; ?></TD>
		<TD><? echo $thisNUMBER_PAGES_READ; ?></TD>
		<TD><? echo $thisNUMBER_PAGES_CREATED; ?></TD>
		<TD><? echo $thisNUMBER_PAGES_WRITTEN; ?></TD>
		<TD><? echo $thisPAGES_READ_RATE; ?></TD>
		<TD><? echo $thisPAGES_CREATE_RATE; ?></TD>
		<TD><? echo $thisPAGES_WRITTEN_RATE; ?></TD>
		<TD><? echo $thisNUMBER_PAGES_GET; ?></TD>
		<TD><? echo $thisHIT_RATE; ?></TD>
		<TD><? echo $thisYOUNG_MAKE_PER_THOUSAND_GETS; ?></TD>
		<TD><? echo $thisNOT_YOUNG_MAKE_PER_THOUSAND_GETS; ?></TD>
		<TD><? echo $thisNUMBER_PAGES_READ_AHEAD; ?></TD>
		<TD><? echo $thisNUMBER_READ_AHEAD_EVICTED; ?></TD>
		<TD><? echo $thisREAD_AHEAD_RATE; ?></TD>
		<TD><? echo $thisREAD_AHEAD_EVICTED_RATE; ?></TD>
		<TD><? echo $thisLRU_IO_TOTAL; ?></TD>
		<TD><? echo $thisLRU_IO_CURRENT; ?></TD>
		<TD><? echo $thisUNCOMPRESS_TOTAL; ?></TD>
		<TD><? echo $thisUNCOMPRESS_CURRENT; ?></TD>
	<TD><a href="editINNODB_BUFFER_POOL_STATS.php?POOL_IDField=<? echo $thisPOOL_ID; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteINNODB_BUFFER_POOL_STATS.php?POOL_IDField=<? echo $thisPOOL_ID; ?>">Delete</a></TD>
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