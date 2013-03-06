<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter INNODB_CMPMEM</h2>
<form name="innodb_cmpmemEnterForm" method="POST" action="insertNewInnodb_cmpmem.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> Page_size :  </b> </td>
		<td> <input type="text" name="thisPage_sizeField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Buffer_pool_instance :  </b> </td>
		<td> <input type="text" name="thisBuffer_pool_instanceField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Pages_used :  </b> </td>
		<td> <input type="text" name="thisPages_usedField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Pages_free :  </b> </td>
		<td> <input type="text" name="thisPages_freeField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Relocation_ops :  </b> </td>
		<td> <input type="text" name="thisRelocation_opsField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Relocation_time :  </b> </td>
		<td> <input type="text" name="thisRelocation_timeField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterINNODB_CMPMEMForm" value="Enter INNODB_CMPMEM">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>