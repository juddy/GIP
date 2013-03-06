<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Power Search KEY_COLUMN_USAGE</h2>
The power search will search every field in the  KEY_COLUMN_USAGE table, for a match to your keyword. The power searches entire strings or parts of your string. <br><br>
<form name="key_column_usagePowerSearchForm" method="POST" action="searchKey_column_usage.php">
<table cellspacing="2" cellpadding="2" border="0" width="500">
<tr>
<td align=right><font color=red><b>Keyword : </font></b>   </td>
<td><input type="text" name="keyword" value=""></td>
</tr>
<tr>
<td> &nbsp;    </td>
<td>The power search will search every field in the </td>
</tr>
</table>
<input type="submit" name="submitpowerSearchKEY_COLUMN_USAGEForm" value="Power search  KEY_COLUMN_USAGE">
<input type="reset" name="resetForm" value="Clear Form">
</form>

<?php
include_once("../common/footer.php");
?>