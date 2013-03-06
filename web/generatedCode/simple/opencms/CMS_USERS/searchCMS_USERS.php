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
$sqlQuery = "SELECT *  FROM CMS_USERS WHERE USER_ID like '%$thisKeyword%'  OR USER_NAME like '%$thisKeyword%'  OR USER_PASSWORD like '%$thisKeyword%'  OR USER_FIRSTNAME like '%$thisKeyword%'  OR USER_LASTNAME like '%$thisKeyword%'  OR USER_EMAIL like '%$thisKeyword%'  OR USER_LASTLOGIN like '%$thisKeyword%'  OR USER_FLAGS like '%$thisKeyword%'  OR USER_OU like '%$thisKeyword%'  OR USER_DATECREATED like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_PASSWORD&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_PASSWORD</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_FIRSTNAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_FIRSTNAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_LASTNAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_LASTNAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_EMAIL&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_EMAIL</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_LASTLOGIN&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_LASTLOGIN</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_FLAGS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_FLAGS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_OU&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_OU</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=USER_DATECREATED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>USER_DATECREATED</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisUSER_ID = MYSQL_RESULT($result,$i,"USER_ID");
	$thisUSER_NAME = MYSQL_RESULT($result,$i,"USER_NAME");
	$thisUSER_PASSWORD = MYSQL_RESULT($result,$i,"USER_PASSWORD");
	$thisUSER_FIRSTNAME = MYSQL_RESULT($result,$i,"USER_FIRSTNAME");
	$thisUSER_LASTNAME = MYSQL_RESULT($result,$i,"USER_LASTNAME");
	$thisUSER_EMAIL = MYSQL_RESULT($result,$i,"USER_EMAIL");
	$thisUSER_LASTLOGIN = MYSQL_RESULT($result,$i,"USER_LASTLOGIN");
	$thisUSER_FLAGS = MYSQL_RESULT($result,$i,"USER_FLAGS");
	$thisUSER_OU = MYSQL_RESULT($result,$i,"USER_OU");
	$thisUSER_DATECREATED = MYSQL_RESULT($result,$i,"USER_DATECREATED");
	$thisUSER_ID = highlightSearchTerms($thisUSER_ID, $thisKeyword, $highlightColor); 
	$thisUSER_NAME = highlightSearchTerms($thisUSER_NAME, $thisKeyword, $highlightColor); 
	$thisUSER_PASSWORD = highlightSearchTerms($thisUSER_PASSWORD, $thisKeyword, $highlightColor); 
	$thisUSER_FIRSTNAME = highlightSearchTerms($thisUSER_FIRSTNAME, $thisKeyword, $highlightColor); 
	$thisUSER_LASTNAME = highlightSearchTerms($thisUSER_LASTNAME, $thisKeyword, $highlightColor); 
	$thisUSER_EMAIL = highlightSearchTerms($thisUSER_EMAIL, $thisKeyword, $highlightColor); 
	$thisUSER_LASTLOGIN = highlightSearchTerms($thisUSER_LASTLOGIN, $thisKeyword, $highlightColor); 
	$thisUSER_FLAGS = highlightSearchTerms($thisUSER_FLAGS, $thisKeyword, $highlightColor); 
	$thisUSER_OU = highlightSearchTerms($thisUSER_OU, $thisKeyword, $highlightColor); 
	$thisUSER_DATECREATED = highlightSearchTerms($thisUSER_DATECREATED, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisUSER_ID; ?></TD>
		<TD><? echo $thisUSER_NAME; ?></TD>
		<TD><? echo $thisUSER_PASSWORD; ?></TD>
		<TD><? echo $thisUSER_FIRSTNAME; ?></TD>
		<TD><? echo $thisUSER_LASTNAME; ?></TD>
		<TD><? echo $thisUSER_EMAIL; ?></TD>
		<TD><? echo $thisUSER_LASTLOGIN; ?></TD>
		<TD><? echo $thisUSER_FLAGS; ?></TD>
		<TD><? echo $thisUSER_OU; ?></TD>
		<TD><? echo $thisUSER_DATECREATED; ?></TD>
	<TD><a href="editCMS_USERS.php?USER_IDField=<? echo $thisUSER_ID; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteCMS_USERS.php?USER_IDField=<? echo $thisUSER_ID; ?>">Delete</a></TD>
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