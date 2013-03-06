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
$sqlQuery = "SELECT *  FROM SESSION_STATUS WHERE VARIABLE_NAME like '%$thisKeyword%'  OR VARIABLE_VALUE like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=VARIABLE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>VARIABLE_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=VARIABLE_VALUE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>VARIABLE_VALUE</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisVARIABLE_NAME = MYSQL_RESULT($result,$i,"VARIABLE_NAME");
	$thisVARIABLE_VALUE = MYSQL_RESULT($result,$i,"VARIABLE_VALUE");
	$thisVARIABLE_NAME = highlightSearchTerms($thisVARIABLE_NAME, $thisKeyword, $highlightColor); 
	$thisVARIABLE_VALUE = highlightSearchTerms($thisVARIABLE_VALUE, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisVARIABLE_NAME; ?></TD>
		<TD><? echo $thisVARIABLE_VALUE; ?></TD>
	<TD><a href="editSESSION_STATUS.php?VARIABLE_NAMEField=<? echo $thisVARIABLE_NAME; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteSESSION_STATUS.php?VARIABLE_NAMEField=<? echo $thisVARIABLE_NAME; ?>">Delete</a></TD>
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