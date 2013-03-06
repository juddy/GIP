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
$sqlQuery = "SELECT *  FROM main WHERE Datacenter like '%$thisKeyword%'  OR DC_Hostname like '%$thisKeyword%'  OR Medu_Hostname like '%$thisKeyword%'  OR Domain_Name like '%$thisKeyword%'  OR CNAME like '%$thisKeyword%'  OR Public_IP like '%$thisKeyword%'  OR Network like '%$thisKeyword%'  OR DMZ_IP like '%$thisKeyword%'  OR Mgmt_IP like '%$thisKeyword%'  OR Public_MAC like '%$thisKeyword%'  OR DMZ_MAC like '%$thisKeyword%'  OR MGMT_MAC like '%$thisKeyword%'  OR Description like '%$thisKeyword%'  OR ServiceTag like '%$thisKeyword%'  OR Row like '%$thisKeyword%'  OR Rack like '%$thisKeyword%'  OR Slot like '%$thisKeyword%' ";
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=Datacenter&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Datacenter</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DC_Hostname&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DC_Hostname</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=Medu_Hostname&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Medu_Hostname</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=Domain_Name&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Domain_Name</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CNAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CNAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=Public_IP&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Public_IP</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=Network&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Network</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DMZ_IP&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DMZ_IP</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=Mgmt_IP&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Mgmt_IP</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=Public_MAC&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Public_MAC</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DMZ_MAC&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DMZ_MAC</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=MGMT_MAC&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>MGMT_MAC</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=Description&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Description</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ServiceTag&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ServiceTag</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=Row&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Row</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=Rack&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Rack</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=Slot&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Slot</B>
			</a>
</TD>
	</TR>
<?
$highlightColor = "#FFFF99"; 

	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisDatacenter = MYSQL_RESULT($result,$i,"Datacenter");
	$thisDC_Hostname = MYSQL_RESULT($result,$i,"DC_Hostname");
	$thisMedu_Hostname = MYSQL_RESULT($result,$i,"Medu_Hostname");
	$thisDomain_Name = MYSQL_RESULT($result,$i,"Domain_Name");
	$thisCNAME = MYSQL_RESULT($result,$i,"CNAME");
	$thisPublic_IP = MYSQL_RESULT($result,$i,"Public_IP");
	$thisNetwork = MYSQL_RESULT($result,$i,"Network");
	$thisDMZ_IP = MYSQL_RESULT($result,$i,"DMZ_IP");
	$thisMgmt_IP = MYSQL_RESULT($result,$i,"Mgmt_IP");
	$thisPublic_MAC = MYSQL_RESULT($result,$i,"Public_MAC");
	$thisDMZ_MAC = MYSQL_RESULT($result,$i,"DMZ_MAC");
	$thisMGMT_MAC = MYSQL_RESULT($result,$i,"MGMT_MAC");
	$thisDescription = MYSQL_RESULT($result,$i,"Description");
	$thisServiceTag = MYSQL_RESULT($result,$i,"ServiceTag");
	$thisRow = MYSQL_RESULT($result,$i,"Row");
	$thisRack = MYSQL_RESULT($result,$i,"Rack");
	$thisSlot = MYSQL_RESULT($result,$i,"Slot");
	$thisDatacenter = highlightSearchTerms($thisDatacenter, $thisKeyword, $highlightColor); 
	$thisDC_Hostname = highlightSearchTerms($thisDC_Hostname, $thisKeyword, $highlightColor); 
	$thisMedu_Hostname = highlightSearchTerms($thisMedu_Hostname, $thisKeyword, $highlightColor); 
	$thisDomain_Name = highlightSearchTerms($thisDomain_Name, $thisKeyword, $highlightColor); 
	$thisCNAME = highlightSearchTerms($thisCNAME, $thisKeyword, $highlightColor); 
	$thisPublic_IP = highlightSearchTerms($thisPublic_IP, $thisKeyword, $highlightColor); 
	$thisNetwork = highlightSearchTerms($thisNetwork, $thisKeyword, $highlightColor); 
	$thisDMZ_IP = highlightSearchTerms($thisDMZ_IP, $thisKeyword, $highlightColor); 
	$thisMgmt_IP = highlightSearchTerms($thisMgmt_IP, $thisKeyword, $highlightColor); 
	$thisPublic_MAC = highlightSearchTerms($thisPublic_MAC, $thisKeyword, $highlightColor); 
	$thisDMZ_MAC = highlightSearchTerms($thisDMZ_MAC, $thisKeyword, $highlightColor); 
	$thisMGMT_MAC = highlightSearchTerms($thisMGMT_MAC, $thisKeyword, $highlightColor); 
	$thisDescription = highlightSearchTerms($thisDescription, $thisKeyword, $highlightColor); 
	$thisServiceTag = highlightSearchTerms($thisServiceTag, $thisKeyword, $highlightColor); 
	$thisRow = highlightSearchTerms($thisRow, $thisKeyword, $highlightColor); 
	$thisRack = highlightSearchTerms($thisRack, $thisKeyword, $highlightColor); 
	$thisSlot = highlightSearchTerms($thisSlot, $thisKeyword, $highlightColor); 

?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisDatacenter; ?></TD>
		<TD><? echo $thisDC_Hostname; ?></TD>
		<TD><? echo $thisMedu_Hostname; ?></TD>
		<TD><? echo $thisDomain_Name; ?></TD>
		<TD><? echo $thisCNAME; ?></TD>
		<TD><? echo $thisPublic_IP; ?></TD>
		<TD><? echo $thisNetwork; ?></TD>
		<TD><? echo $thisDMZ_IP; ?></TD>
		<TD><? echo $thisMgmt_IP; ?></TD>
		<TD><? echo $thisPublic_MAC; ?></TD>
		<TD><? echo $thisDMZ_MAC; ?></TD>
		<TD><? echo $thisMGMT_MAC; ?></TD>
		<TD><? echo $thisDescription; ?></TD>
		<TD><? echo $thisServiceTag; ?></TD>
		<TD><? echo $thisRow; ?></TD>
		<TD><? echo $thisRack; ?></TD>
		<TD><? echo $thisSlot; ?></TD>
	<TD><a href="editMain.php?DatacenterField=<? echo $thisDatacenter; ?>">Edit</a></TD>
	<TD><a href="confirmDeleteMain.php?DatacenterField=<? echo $thisDatacenter; ?>">Delete</a></TD>
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