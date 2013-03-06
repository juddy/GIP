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
$sqlQuery = "SELECT *  FROM CMS_HISTORY_PROPERTYDEF WHERE PROPERTYDEF_ID like '%$thisKeyword%'  OR PROPERTYDEF_NAME like '%$thisKeyword%'  OR PROPERTYDEF_TYPE like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROPERTYDEF_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROPERTYDEF_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROPERTYDEF_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROPERTYDEF_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROPERTYDEF_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROPERTYDEF_TYPE</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisPROPERTYDEF_ID = MYSQL_RESULT($result,$i,"PROPERTYDEF_ID");
	$thisPROPERTYDEF_NAME = MYSQL_RESULT($result,$i,"PROPERTYDEF_NAME");
	$thisPROPERTYDEF_TYPE = MYSQL_RESULT($result,$i,"PROPERTYDEF_TYPE");
	$thisPROPERTYDEF_ID = highlightSearchTerms($thisPROPERTYDEF_ID, $thisKeyword, $highlightColor); 
	$thisPROPERTYDEF_NAME = highlightSearchTerms($thisPROPERTYDEF_NAME, $thisKeyword, $highlightColor); 
	$thisPROPERTYDEF_TYPE = highlightSearchTerms($thisPROPERTYDEF_TYPE, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisPROPERTYDEF_ID; ?></TD>
		<TD><? echo $thisPROPERTYDEF_NAME; ?></TD>
		<TD><? echo $thisPROPERTYDEF_TYPE; ?></TD>
	<TD><a href="editCMS_HISTORY_PROPERTYDEF.php?PROPERTYDEF_IDField=<? echo $thisPROPERTYDEF_ID; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteCMS_HISTORY_PROPERTYDEF.php?PROPERTYDEF_IDField=<? echo $thisPROPERTYDEF_ID; ?>">Delete</a></TD>
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