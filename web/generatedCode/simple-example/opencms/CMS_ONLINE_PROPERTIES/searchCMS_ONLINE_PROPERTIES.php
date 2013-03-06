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
$sqlQuery = "SELECT *  FROM CMS_ONLINE_PROPERTIES WHERE PROPERTY_ID like '%$thisKeyword%'  OR PROPERTYDEF_ID like '%$thisKeyword%'  OR PROPERTY_MAPPING_ID like '%$thisKeyword%'  OR PROPERTY_MAPPING_TYPE like '%$thisKeyword%'  OR PROPERTY_VALUE like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROPERTY_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROPERTY_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROPERTYDEF_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROPERTYDEF_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROPERTY_MAPPING_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROPERTY_MAPPING_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROPERTY_MAPPING_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROPERTY_MAPPING_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PROPERTY_VALUE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PROPERTY_VALUE</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisPROPERTY_ID = MYSQL_RESULT($result,$i,"PROPERTY_ID");
	$thisPROPERTYDEF_ID = MYSQL_RESULT($result,$i,"PROPERTYDEF_ID");
	$thisPROPERTY_MAPPING_ID = MYSQL_RESULT($result,$i,"PROPERTY_MAPPING_ID");
	$thisPROPERTY_MAPPING_TYPE = MYSQL_RESULT($result,$i,"PROPERTY_MAPPING_TYPE");
	$thisPROPERTY_VALUE = MYSQL_RESULT($result,$i,"PROPERTY_VALUE");
	$thisPROPERTY_ID = highlightSearchTerms($thisPROPERTY_ID, $thisKeyword, $highlightColor); 
	$thisPROPERTYDEF_ID = highlightSearchTerms($thisPROPERTYDEF_ID, $thisKeyword, $highlightColor); 
	$thisPROPERTY_MAPPING_ID = highlightSearchTerms($thisPROPERTY_MAPPING_ID, $thisKeyword, $highlightColor); 
	$thisPROPERTY_MAPPING_TYPE = highlightSearchTerms($thisPROPERTY_MAPPING_TYPE, $thisKeyword, $highlightColor); 
	$thisPROPERTY_VALUE = highlightSearchTerms($thisPROPERTY_VALUE, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisPROPERTY_ID; ?></TD>
		<TD><? echo $thisPROPERTYDEF_ID; ?></TD>
		<TD><? echo $thisPROPERTY_MAPPING_ID; ?></TD>
		<TD><? echo $thisPROPERTY_MAPPING_TYPE; ?></TD>
		<TD><? echo $thisPROPERTY_VALUE; ?></TD>
	<TD><a href="editCMS_ONLINE_PROPERTIES.php?PROPERTY_IDField=<? echo $thisPROPERTY_ID; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteCMS_ONLINE_PROPERTIES.php?PROPERTY_IDField=<? echo $thisPROPERTY_ID; ?>">Delete</a></TD>
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