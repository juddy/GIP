<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Power Search CMS_ONLINE_STRUCTURE</h2>
The power search will search every field in the  CMS_ONLINE_STRUCTURE table, for a match to your keyword. The power searches entire strings or parts of your string. <br><br>
<form name="cms_online_structurePowerSearchForm" method="POST" action="searchCms_online_structure.php">
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
<input type="submit" name="submitpowerSearchCMS_ONLINE_STRUCTUREForm" value="Power search  CMS_ONLINE_STRUCTURE">
<input type="reset" name="resetForm" value="Clear Form">
</form>

<?php
include_once("../common/footer.php");
?>