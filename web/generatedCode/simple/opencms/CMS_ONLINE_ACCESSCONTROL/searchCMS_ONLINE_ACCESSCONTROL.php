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
$sqlQuery = "SELECT *  FROM CMS_ONLINE_ACCESSCONTROL WHERE RESOURCE_ID like '%$thisKeyword%'  OR PRINCIPAL_ID like '%$thisKeyword%'  OR ACCESS_ALLOWED like '%$thisKeyword%'  OR ACCESS_DENIED like '%$thisKeyword%'  OR ACCESS_FLAGS like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=RESOURCE_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>RESOURCE_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRINCIPAL_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRINCIPAL_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACCESS_ALLOWED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACCESS_ALLOWED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACCESS_DENIED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACCESS_DENIED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACCESS_FLAGS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACCESS_FLAGS</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisRESOURCE_ID = MYSQL_RESULT($result,$i,"RESOURCE_ID");
	$thisPRINCIPAL_ID = MYSQL_RESULT($result,$i,"PRINCIPAL_ID");
	$thisACCESS_ALLOWED = MYSQL_RESULT($result,$i,"ACCESS_ALLOWED");
	$thisACCESS_DENIED = MYSQL_RESULT($result,$i,"ACCESS_DENIED");
	$thisACCESS_FLAGS = MYSQL_RESULT($result,$i,"ACCESS_FLAGS");
	$thisRESOURCE_ID = highlightSearchTerms($thisRESOURCE_ID, $thisKeyword, $highlightColor); 
	$thisPRINCIPAL_ID = highlightSearchTerms($thisPRINCIPAL_ID, $thisKeyword, $highlightColor); 
	$thisACCESS_ALLOWED = highlightSearchTerms($thisACCESS_ALLOWED, $thisKeyword, $highlightColor); 
	$thisACCESS_DENIED = highlightSearchTerms($thisACCESS_DENIED, $thisKeyword, $highlightColor); 
	$thisACCESS_FLAGS = highlightSearchTerms($thisACCESS_FLAGS, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisRESOURCE_ID; ?></TD>
		<TD><? echo $thisPRINCIPAL_ID; ?></TD>
		<TD><? echo $thisACCESS_ALLOWED; ?></TD>
		<TD><? echo $thisACCESS_DENIED; ?></TD>
		<TD><? echo $thisACCESS_FLAGS; ?></TD>
	<TD><a href="editCMS_ONLINE_ACCESSCONTROL.php?RESOURCE_IDField=<? echo $thisRESOURCE_ID; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteCMS_ONLINE_ACCESSCONTROL.php?RESOURCE_IDField=<? echo $thisRESOURCE_ID; ?>">Delete</a></TD>
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