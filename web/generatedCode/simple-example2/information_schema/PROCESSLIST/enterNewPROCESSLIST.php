<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter PROCESSLIST</h2>
<form name="processlistEnterForm" method="POST" action="insertNewProcesslist.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> ID :  </b> </td>
		<td> <input type="text" name="thisIDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> USER :  </b> </td>
		<td> <input type="text" name="thisUSERField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> HOST :  </b> </td>
		<td> <input type="text" name="thisHOSTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DB :  </b> </td>
		<td> <input type="text" name="thisDBField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COMMAND :  </b> </td>
		<td> <input type="text" name="thisCOMMANDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TIME :  </b> </td>
		<td> <input type="text" name="thisTIMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STATE :  </b> </td>
		<td> <input type="text" name="thisSTATEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INFO :  </b> </td>
		<td> <input type="text" name="thisINFOField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterPROCESSLISTForm" value="Enter PROCESSLIST">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>