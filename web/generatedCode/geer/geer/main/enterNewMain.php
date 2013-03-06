<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter Main</h2>
<form name="mainEnterForm" method="POST" action="insertNewMain.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> Datacenter :  </b> </td>
		<td> <input type="text" name="thisDatacenterField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DC_Hostname :  </b> </td>
		<td> <input type="text" name="thisDC_HostnameField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Medu_Hostname :  </b> </td>
		<td> <input type="text" name="thisMedu_HostnameField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Domain_Name :  </b> </td>
		<td> <input type="text" name="thisDomain_NameField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CNAME :  </b> </td>
		<td> <input type="text" name="thisCNAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Public_IP :  </b> </td>
		<td> <input type="text" name="thisPublic_IPField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Network :  </b> </td>
		<td> <input type="text" name="thisNetworkField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DMZ_IP :  </b> </td>
		<td> <input type="text" name="thisDMZ_IPField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Mgmt_IP :  </b> </td>
		<td> <input type="text" name="thisMgmt_IPField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Public_MAC :  </b> </td>
		<td> <input type="text" name="thisPublic_MACField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DMZ_MAC :  </b> </td>
		<td> <input type="text" name="thisDMZ_MACField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> MGMT_MAC :  </b> </td>
		<td> <input type="text" name="thisMGMT_MACField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Description :  </b> </td>
		<td> <input type="text" name="thisDescriptionField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ServiceTag :  </b> </td>
		<td> <input type="text" name="thisServiceTagField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Row :  </b> </td>
		<td> <input type="text" name="thisRowField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Rack :  </b> </td>
		<td> <input type="text" name="thisRackField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Slot :  </b> </td>
		<td> <input type="text" name="thisSlotField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterMainForm" value="Enter Main">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>