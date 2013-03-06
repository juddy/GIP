<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
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

?>
<?
$sql = "DELETE FROM main WHERE Datacenter = '$thisDatacenter'";
$result = MYSQL_QUERY($sql);

?>
Record  has been deleted from database. Here is the deleted record :-<br><br>

<table>
<tr height="30">
	<td align="right"><b>Datacenter : </b></td>
	<td><? echo $thisDatacenter; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DC_Hostname : </b></td>
	<td><? echo $thisDC_Hostname; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Medu_Hostname : </b></td>
	<td><? echo $thisMedu_Hostname; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Domain_Name : </b></td>
	<td><? echo $thisDomain_Name; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CNAME : </b></td>
	<td><? echo $thisCNAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Public_IP : </b></td>
	<td><? echo $thisPublic_IP; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Network : </b></td>
	<td><? echo $thisNetwork; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DMZ_IP : </b></td>
	<td><? echo $thisDMZ_IP; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Mgmt_IP : </b></td>
	<td><? echo $thisMgmt_IP; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Public_MAC : </b></td>
	<td><? echo $thisPublic_MAC; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DMZ_MAC : </b></td>
	<td><? echo $thisDMZ_MAC; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>MGMT_MAC : </b></td>
	<td><? echo $thisMGMT_MAC; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Description : </b></td>
	<td><? echo $thisDescription; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ServiceTag : </b></td>
	<td><? echo $thisServiceTag; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Row : </b></td>
	<td><? echo $thisRow; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Rack : </b></td>
	<td><? echo $thisRack; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>Slot : </b></td>
	<td><? echo $thisSlot; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>