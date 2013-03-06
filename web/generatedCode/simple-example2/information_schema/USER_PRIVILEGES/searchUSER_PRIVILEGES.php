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
$sqlQuery = "SELECT *  FROM USER_PRIVILEGES WHERE GRANTEE like '%$thisKeyword%'  OR TABLE_CATALOG like '%$thisKeyword%'  OR PRIVILEGE_TYPE like '%$thisKeyword%'  OR IS_GRANTABLE like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=GRANTEE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>GRANTEE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_CATALOG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_CATALOG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRIVILEGE_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRIVILEGE_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=IS_GRANTABLE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>IS_GRANTABLE</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisGRANTEE = MYSQL_RESULT($result,$i,"GRANTEE");
	$thisTABLE_CATALOG = MYSQL_RESULT($result,$i,"TABLE_CATALOG");
	$thisPRIVILEGE_TYPE = MYSQL_RESULT($result,$i,"PRIVILEGE_TYPE");
	$thisIS_GRANTABLE = MYSQL_RESULT($result,$i,"IS_GRANTABLE");
	$thisGRANTEE = highlightSearchTerms($thisGRANTEE, $thisKeyword, $highlightColor); 
	$thisTABLE_CATALOG = highlightSearchTerms($thisTABLE_CATALOG, $thisKeyword, $highlightColor); 
	$thisPRIVILEGE_TYPE = highlightSearchTerms($thisPRIVILEGE_TYPE, $thisKeyword, $highlightColor); 
	$thisIS_GRANTABLE = highlightSearchTerms($thisIS_GRANTABLE, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisGRANTEE; ?></TD>
		<TD><? echo $thisTABLE_CATALOG; ?></TD>
		<TD><? echo $thisPRIVILEGE_TYPE; ?></TD>
		<TD><? echo $thisIS_GRANTABLE; ?></TD>
	<TD><a href="editUSER_PRIVILEGES.php?GRANTEEField=<? echo $thisGRANTEE; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteUSER_PRIVILEGES.php?GRANTEEField=<? echo $thisGRANTEE; ?>">Delete</a></TD>
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