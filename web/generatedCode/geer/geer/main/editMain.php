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

<h2>Update Main</h2>
<form name="mainUpdateForm" method="POST" action="updateMain.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> Datacenter :  </b> </td>
		<td> <input type="text" name="thisDatacenterField" size="20" value="<? echo $thisDatacenter; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DC_Hostname :  </b> </td>
		<td> <input type="text" name="thisDC_HostnameField" size="20" value="<? echo $thisDC_Hostname; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Medu_Hostname :  </b> </td>
		<td> <input type="text" name="thisMedu_HostnameField" size="20" value="<? echo $thisMedu_Hostname; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Domain_Name :  </b> </td>
		<td> <input type="text" name="thisDomain_NameField" size="20" value="<? echo $thisDomain_Name; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CNAME :  </b> </td>
		<td> <input type="text" name="thisCNAMEField" size="20" value="<? echo $thisCNAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Public_IP :  </b> </td>
		<td> <input type="text" name="thisPublic_IPField" size="20" value="<? echo $thisPublic_IP; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Network :  </b> </td>
		<td> <input type="text" name="thisNetworkField" size="20" value="<? echo $thisNetwork; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DMZ_IP :  </b> </td>
		<td> <input type="text" name="thisDMZ_IPField" size="20" value="<? echo $thisDMZ_IP; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Mgmt_IP :  </b> </td>
		<td> <input type="text" name="thisMgmt_IPField" size="20" value="<? echo $thisMgmt_IP; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Public_MAC :  </b> </td>
		<td> <input type="text" name="thisPublic_MACField" size="20" value="<? echo $thisPublic_MAC; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DMZ_MAC :  </b> </td>
		<td> <input type="text" name="thisDMZ_MACField" size="20" value="<? echo $thisDMZ_MAC; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> MGMT_MAC :  </b> </td>
		<td> <input type="text" name="thisMGMT_MACField" size="20" value="<? echo $thisMGMT_MAC; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Description :  </b> </td>
		<td> <input type="text" name="thisDescriptionField" size="20" value="<? echo $thisDescription; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ServiceTag :  </b> </td>
		<td> <input type="text" name="thisServiceTagField" size="20" value="<? echo $thisServiceTag; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Row :  </b> </td>
		<td> <input type="text" name="thisRowField" size="20" value="<? echo $thisRow; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Rack :  </b> </td>
		<td> <input type="text" name="thisRackField" size="20" value="<? echo $thisRack; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Slot :  </b> </td>
		<td> <input type="text" name="thisSlotField" size="20" value="<? echo $thisSlot; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateMainForm" value="Update Main">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>