<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter INNODB_CMP</h2>
<form name="innodb_cmpEnterForm" method="POST" action="insertNewInnodb_cmp.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> Page_size :  </b> </td>
		<td> <input type="text" name="thisPage_sizeField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Compress_ops :  </b> </td>
		<td> <input type="text" name="thisCompress_opsField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Compress_ops_ok :  </b> </td>
		<td> <input type="text" name="thisCompress_ops_okField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Compress_time :  </b> </td>
		<td> <input type="text" name="thisCompress_timeField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Uncompress_ops :  </b> </td>
		<td> <input type="text" name="thisUncompress_opsField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> Uncompress_time :  </b> </td>
		<td> <input type="text" name="thisUncompress_timeField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterINNODB_CMPForm" value="Enter INNODB_CMP">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>