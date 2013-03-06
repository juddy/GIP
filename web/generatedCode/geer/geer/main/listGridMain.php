<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisDatacenterFromForm = $_REQUEST['thisDatacenterField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisDatacenter = addslashes($_REQUEST['thisDatacenterField']);
	$thisDC_Hostname = addslashes($_REQUEST['thisDC_HostnameField']);
	$thisMedu_Hostname = addslashes($_REQUEST['thisMedu_HostnameField']);
	$thisDomain_Name = addslashes($_REQUEST['thisDomain_NameField']);
	$thisCNAME = addslashes($_REQUEST['thisCNAMEField']);
	$thisPublic_IP = addslashes($_REQUEST['thisPublic_IPField']);
	$thisNetwork = addslashes($_REQUEST['thisNetworkField']);
	$thisDMZ_IP = addslashes($_REQUEST['thisDMZ_IPField']);
	$thisMgmt_IP = addslashes($_REQUEST['thisMgmt_IPField']);
	$thisPublic_MAC = addslashes($_REQUEST['thisPublic_MACField']);
	$thisDMZ_MAC = addslashes($_REQUEST['thisDMZ_MACField']);
	$thisMGMT_MAC = addslashes($_REQUEST['thisMGMT_MACField']);
	$thisDescription = addslashes($_REQUEST['thisDescriptionField']);
	$thisServiceTag = addslashes($_REQUEST['thisServiceTagField']);
	$thisRow = addslashes($_REQUEST['thisRowField']);
	$thisRack = addslashes($_REQUEST['thisRackField']);
	$thisSlot = addslashes($_REQUEST['thisSlotField']);

	$sqlUpdate = "UPDATE main SET Datacenter = '$thisDatacenter' , DC_Hostname = '$thisDC_Hostname' , Medu_Hostname = '$thisMedu_Hostname' , Domain_Name = '$thisDomain_Name' , CNAME = '$thisCNAME' , Public_IP = '$thisPublic_IP' , Network = '$thisNetwork' , DMZ_IP = '$thisDMZ_IP' , Mgmt_IP = '$thisMgmt_IP' , Public_MAC = '$thisPublic_MAC' , DMZ_MAC = '$thisDMZ_MAC' , MGMT_MAC = '$thisMGMT_MAC' , Description = '$thisDescription' , ServiceTag = '$thisServiceTag' , Row = '$thisRow' , Rack = '$thisRack' , Slot = '$thisSlot'  WHERE Datacenter = '$thisDatacenter'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisDatacenterFromForm." has been Updated<br></b>";
	$thisDatacenterFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisDatacenter = addslashes($_REQUEST['thisDatacenterField']);
	$thisDC_Hostname = addslashes($_REQUEST['thisDC_HostnameField']);
	$thisMedu_Hostname = addslashes($_REQUEST['thisMedu_HostnameField']);
	$thisDomain_Name = addslashes($_REQUEST['thisDomain_NameField']);
	$thisCNAME = addslashes($_REQUEST['thisCNAMEField']);
	$thisPublic_IP = addslashes($_REQUEST['thisPublic_IPField']);
	$thisNetwork = addslashes($_REQUEST['thisNetworkField']);
	$thisDMZ_IP = addslashes($_REQUEST['thisDMZ_IPField']);
	$thisMgmt_IP = addslashes($_REQUEST['thisMgmt_IPField']);
	$thisPublic_MAC = addslashes($_REQUEST['thisPublic_MACField']);
	$thisDMZ_MAC = addslashes($_REQUEST['thisDMZ_MACField']);
	$thisMGMT_MAC = addslashes($_REQUEST['thisMGMT_MACField']);
	$thisDescription = addslashes($_REQUEST['thisDescriptionField']);
	$thisServiceTag = addslashes($_REQUEST['thisServiceTagField']);
	$thisRow = addslashes($_REQUEST['thisRowField']);
	$thisRack = addslashes($_REQUEST['thisRackField']);
	$thisSlot = addslashes($_REQUEST['thisSlotField']);

	$sqlInsert = "INSERT INTO main (Datacenter , DC_Hostname , Medu_Hostname , Domain_Name , CNAME , Public_IP , Network , DMZ_IP , Mgmt_IP , Public_MAC , DMZ_MAC , MGMT_MAC , Description , ServiceTag , Row , Rack , Slot ) VALUES ('$thisDatacenter' , '$thisDC_Hostname' , '$thisMedu_Hostname' , '$thisDomain_Name' , '$thisCNAME' , '$thisPublic_IP' , '$thisNetwork' , '$thisDMZ_IP' , '$thisMgmt_IP' , '$thisPublic_MAC' , '$thisDMZ_MAC' , '$thisMGMT_MAC' , '$thisDescription' , '$thisServiceTag' , '$thisRow' , '$thisRack' , '$thisSlot' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisDatacenterFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisDatacenter = addslashes($_REQUEST['thisDatacenterField']);
	$thisDC_Hostname = addslashes($_REQUEST['thisDC_HostnameField']);
	$thisMedu_Hostname = addslashes($_REQUEST['thisMedu_HostnameField']);
	$thisDomain_Name = addslashes($_REQUEST['thisDomain_NameField']);
	$thisCNAME = addslashes($_REQUEST['thisCNAMEField']);
	$thisPublic_IP = addslashes($_REQUEST['thisPublic_IPField']);
	$thisNetwork = addslashes($_REQUEST['thisNetworkField']);
	$thisDMZ_IP = addslashes($_REQUEST['thisDMZ_IPField']);
	$thisMgmt_IP = addslashes($_REQUEST['thisMgmt_IPField']);
	$thisPublic_MAC = addslashes($_REQUEST['thisPublic_MACField']);
	$thisDMZ_MAC = addslashes($_REQUEST['thisDMZ_MACField']);
	$thisMGMT_MAC = addslashes($_REQUEST['thisMGMT_MACField']);
	$thisDescription = addslashes($_REQUEST['thisDescriptionField']);
	$thisServiceTag = addslashes($_REQUEST['thisServiceTagField']);
	$thisRow = addslashes($_REQUEST['thisRowField']);
	$thisRack = addslashes($_REQUEST['thisRackField']);
	$thisSlot = addslashes($_REQUEST['thisSlotField']);

	$sqlDelete = "DELETE FROM main WHERE Datacenter = '$thisDatacenter'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisDatacenterFromForm." has been Deleted<br></b>";
	$thisDatacenterFromForm = "";
}

$initStartLimit = 0;
$limitPerPage = 10;

$startLimit = $_REQUEST['startLimit'];
$numberOfRows = $_REQUEST['rows'];
$sortBy = $_REQUEST['sortBy'];
$sortOrder = $_REQUEST['sortOrder'];

if ($startLimit=="")
{
		$startLimit = $initStartLimit;
}

if ($numberOfRows=="")
{
		$numberOfRows = $limitPerPage;
}

if ($sortOrder=="")
{
		$sortOrder  = "DESC";
}
if ($sortOrder == "DESC") { $newSortOrder = "ASC"; } else  { $newSortOrder = "DESC"; }
$limitQuery = " LIMIT ".$startLimit.",".$numberOfRows;
$nextStartLimit = $startLimit + $limitPerPage;
$previousStartLimit = $startLimit - $limitPerPage;

if ($sortBy!="")
{
		$orderByQuery = " ORDER BY ".$sortBy." ".$sortOrder;
}


$sql = "SELECT   * FROM main".$orderByQuery.$limitQuery;
$result = MYSQL_QUERY($sql);
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


<br>
<?
if ($_REQUEST['startLimit'] != "")
{
?>

<a href="<? echo  $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $previousStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Previous <? echo $limitPerPage; ?> Results</a>....
<? } ?>
<?
if ($numberOfRows == $limitPerPage)
{
?>
<a href="<? echo $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $nextStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Next <? echo $limitPerPage; ?> Results</a>
<? } ?>

<br><br>
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
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisDatacenterField" value="<? echo $thisDatacenter; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisDatacenterField" value=""></TD>
		<TD><input type"text" name="thisDC_HostnameField" value=""></TD>
		<TD><input type"text" name="thisMedu_HostnameField" value=""></TD>
		<TD><input type"text" name="thisDomain_NameField" value=""></TD>
		<TD><input type"text" name="thisCNAMEField" value=""></TD>
		<TD><input type"text" name="thisPublic_IPField" value=""></TD>
		<TD><input type"text" name="thisNetworkField" value=""></TD>
		<TD><input type"text" name="thisDMZ_IPField" value=""></TD>
		<TD><input type"text" name="thisMgmt_IPField" value=""></TD>
		<TD><input type"text" name="thisPublic_MACField" value=""></TD>
		<TD><input type"text" name="thisDMZ_MACField" value=""></TD>
		<TD><input type"text" name="thisMGMT_MACField" value=""></TD>
		<TD><input type"text" name="thisDescriptionField" value=""></TD>
		<TD><input type"text" name="thisServiceTagField" value=""></TD>
		<TD><input type"text" name="thisRowField" value=""></TD>
		<TD><input type"text" name="thisRackField" value=""></TD>
		<TD><input type"text" name="thisSlotField" value=""></TD>
	<TD COLSPAN=2><input type="submit" name="Insert" Value="Insert Record"> </TD>
	</TR>
</FORM>

<?
 } 
?>
<?
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
if ($thisDatacenterFromForm == $thisDatacenter)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisDatacenterField" value="<? echo $thisDatacenter; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisDatacenterField" value="<? echo $thisDatacenter; ?>"></TD>
		<TD><input type"text" name="thisDC_HostnameField" value="<? echo $thisDC_Hostname; ?>"></TD>
		<TD><input type"text" name="thisMedu_HostnameField" value="<? echo $thisMedu_Hostname; ?>"></TD>
		<TD><input type"text" name="thisDomain_NameField" value="<? echo $thisDomain_Name; ?>"></TD>
		<TD><input type"text" name="thisCNAMEField" value="<? echo $thisCNAME; ?>"></TD>
		<TD><input type"text" name="thisPublic_IPField" value="<? echo $thisPublic_IP; ?>"></TD>
		<TD><input type"text" name="thisNetworkField" value="<? echo $thisNetwork; ?>"></TD>
		<TD><input type"text" name="thisDMZ_IPField" value="<? echo $thisDMZ_IP; ?>"></TD>
		<TD><input type"text" name="thisMgmt_IPField" value="<? echo $thisMgmt_IP; ?>"></TD>
		<TD><input type"text" name="thisPublic_MACField" value="<? echo $thisPublic_MAC; ?>"></TD>
		<TD><input type"text" name="thisDMZ_MACField" value="<? echo $thisDMZ_MAC; ?>"></TD>
		<TD><input type"text" name="thisMGMT_MACField" value="<? echo $thisMGMT_MAC; ?>"></TD>
		<TD><input type"text" name="thisDescriptionField" value="<? echo $thisDescription; ?>"></TD>
		<TD><input type"text" name="thisServiceTagField" value="<? echo $thisServiceTag; ?>"></TD>
		<TD><input type"text" name="thisRowField" value="<? echo $thisRow; ?>"></TD>
		<TD><input type"text" name="thisRackField" value="<? echo $thisRack; ?>"></TD>
		<TD><input type"text" name="thisSlotField" value="<? echo $thisSlot; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
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
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisDatacenterField=<? echo $thisDatacenter; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisDatacenterField=<? echo $thisDatacenter; ?>">Delete</a></TD>
	</TR>

<?
}
?>
<?
		$i++;

	} // end while loop
?>
</TABLE>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="EnterNew">
<input type="Submit" name="submit" value="Insert New Record">
</FORM>


<br>
<?
if ($_REQUEST['startLimit'] != "")
{
?>

<a href="<? echo  $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $previousStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Previous <? echo $limitPerPage; ?> Results</a>....
<? } ?>
<?
if ($numberOfRows == $limitPerPage)
{
?>
<a href="<? echo $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $nextStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Next <? echo $limitPerPage; ?> Results</a>
<? } ?>

<br><br>
<?
} // end of if numberOfRows > 0 
 ?>

<?php
include_once("../common/footer.php");
?>