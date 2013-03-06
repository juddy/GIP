<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisDatacenter = $_REQUEST['DatacenterField']
?>
<?php
$sql = "SELECT   * FROM main WHERE Datacenter = '$thisDatacenter'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
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

}
?>

<h2>Confirm Record Deletion</h2><br><br>

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

<h3>If you are sure you want to delete the above record, please press the delete button below.</h3><br><br>
<form name="mainEnterForm" method="POST" action="deleteMain.php">
<input type="hidden" name="thisDatacenterField" value="<? echo $thisDatacenter; ?>">
<input type="submit" name="submitConfirmDeleteMainForm" value="Delete  from Main">
<input type="button" name="cancel" value="Go Back" onClick="javascript:history.back();">
</form>

<?php
include_once("../common/footer.php");
?>