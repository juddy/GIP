<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Power Search COLLATION_CHARACTER_SET_APPLICABILITY</h2>
The power search will search every field in the  COLLATION_CHARACTER_SET_APPLICABILITY table, for a match to your keyword. The power searches entire strings or parts of your string. <br><br>
<form name="collation_character_set_applicabilityPowerSearchForm" method="POST" action="searchCollation_character_set_applicability.php">
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
<input type="submit" name="submitpowerSearchCOLLATION_CHARACTER_SET_APPLICABILITYForm" value="Power search  COLLATION_CHARACTER_SET_APPLICABILITY">
<input type="reset" name="resetForm" value="Clear Form">
</form>

<?php
include_once("../common/footer.php");
?>