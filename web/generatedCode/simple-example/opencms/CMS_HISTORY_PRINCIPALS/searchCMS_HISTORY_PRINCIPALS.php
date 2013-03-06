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
$sqlQuery = "SELECT *  FROM CMS_HISTORY_PRINCIPALS WHERE PRINCIPAL_ID like '%$thisKeyword%'  OR PRINCIPAL_NAME like '%$thisKeyword%'  OR PRINCIPAL_DESCRIPTION like '%$thisKeyword%'  OR PRINCIPAL_OU like '%$thisKeyword%'  OR PRINCIPAL_EMAIL like '%$thisKeyword%'  OR PRINCIPAL_TYPE like '%$thisKeyword%'  OR PRINCIPAL_USERDELETED like '%$thisKeyword%'  OR PRINCIPAL_DATEDELETED like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRINCIPAL_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRINCIPAL_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRINCIPAL_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRINCIPAL_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRINCIPAL_DESCRIPTION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRINCIPAL_DESCRIPTION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRINCIPAL_OU&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRINCIPAL_OU</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRINCIPAL_EMAIL&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRINCIPAL_EMAIL</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRINCIPAL_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRINCIPAL_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRINCIPAL_USERDELETED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRINCIPAL_USERDELETED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRINCIPAL_DATEDELETED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRINCIPAL_DATEDELETED</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisPRINCIPAL_ID = MYSQL_RESULT($result,$i,"PRINCIPAL_ID");
	$thisPRINCIPAL_NAME = MYSQL_RESULT($result,$i,"PRINCIPAL_NAME");
	$thisPRINCIPAL_DESCRIPTION = MYSQL_RESULT($result,$i,"PRINCIPAL_DESCRIPTION");
	$thisPRINCIPAL_OU = MYSQL_RESULT($result,$i,"PRINCIPAL_OU");
	$thisPRINCIPAL_EMAIL = MYSQL_RESULT($result,$i,"PRINCIPAL_EMAIL");
	$thisPRINCIPAL_TYPE = MYSQL_RESULT($result,$i,"PRINCIPAL_TYPE");
	$thisPRINCIPAL_USERDELETED = MYSQL_RESULT($result,$i,"PRINCIPAL_USERDELETED");
	$thisPRINCIPAL_DATEDELETED = MYSQL_RESULT($result,$i,"PRINCIPAL_DATEDELETED");
	$thisPRINCIPAL_ID = highlightSearchTerms($thisPRINCIPAL_ID, $thisKeyword, $highlightColor); 
	$thisPRINCIPAL_NAME = highlightSearchTerms($thisPRINCIPAL_NAME, $thisKeyword, $highlightColor); 
	$thisPRINCIPAL_DESCRIPTION = highlightSearchTerms($thisPRINCIPAL_DESCRIPTION, $thisKeyword, $highlightColor); 
	$thisPRINCIPAL_OU = highlightSearchTerms($thisPRINCIPAL_OU, $thisKeyword, $highlightColor); 
	$thisPRINCIPAL_EMAIL = highlightSearchTerms($thisPRINCIPAL_EMAIL, $thisKeyword, $highlightColor); 
	$thisPRINCIPAL_TYPE = highlightSearchTerms($thisPRINCIPAL_TYPE, $thisKeyword, $highlightColor); 
	$thisPRINCIPAL_USERDELETED = highlightSearchTerms($thisPRINCIPAL_USERDELETED, $thisKeyword, $highlightColor); 
	$thisPRINCIPAL_DATEDELETED = highlightSearchTerms($thisPRINCIPAL_DATEDELETED, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisPRINCIPAL_ID; ?></TD>
		<TD><? echo $thisPRINCIPAL_NAME; ?></TD>
		<TD><? echo $thisPRINCIPAL_DESCRIPTION; ?></TD>
		<TD><? echo $thisPRINCIPAL_OU; ?></TD>
		<TD><? echo $thisPRINCIPAL_EMAIL; ?></TD>
		<TD><? echo $thisPRINCIPAL_TYPE; ?></TD>
		<TD><? echo $thisPRINCIPAL_USERDELETED; ?></TD>
		<TD><? echo $thisPRINCIPAL_DATEDELETED; ?></TD>
	<TD><a href="editCMS_HISTORY_PRINCIPALS.php?PRINCIPAL_IDField=<? echo $thisPRINCIPAL_ID; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteCMS_HISTORY_PRINCIPALS.php?PRINCIPAL_IDField=<? echo $thisPRINCIPAL_ID; ?>">Delete</a></TD>
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