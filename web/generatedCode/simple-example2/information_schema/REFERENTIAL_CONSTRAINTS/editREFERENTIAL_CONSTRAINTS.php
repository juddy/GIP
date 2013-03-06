<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisCONSTRAINT_CATALOG = $_REQUEST['CONSTRAINT_CATALOGField']
?>
<?php
$sql = "SELECT   * FROM REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_CATALOG = '$thisCONSTRAINT_CATALOG'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisCONSTRAINT_CATALOG = MYSQL_RESULT($result,$i,"CONSTRAINT_CATALOG");
	$thisCONSTRAINT_SCHEMA = MYSQL_RESULT($result,$i,"CONSTRAINT_SCHEMA");
	$thisCONSTRAINT_NAME = MYSQL_RESULT($result,$i,"CONSTRAINT_NAME");
	$thisUNIQUE_CONSTRAINT_CATALOG = MYSQL_RESULT($result,$i,"UNIQUE_CONSTRAINT_CATALOG");
	$thisUNIQUE_CONSTRAINT_SCHEMA = MYSQL_RESULT($result,$i,"UNIQUE_CONSTRAINT_SCHEMA");
	$thisUNIQUE_CONSTRAINT_NAME = MYSQL_RESULT($result,$i,"UNIQUE_CONSTRAINT_NAME");
	$thisMATCH_OPTION = MYSQL_RESULT($result,$i,"MATCH_OPTION");
	$thisUPDATE_RULE = MYSQL_RESULT($result,$i,"UPDATE_RULE");
	$thisDELETE_RULE = MYSQL_RESULT($result,$i,"DELETE_RULE");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisREFERENCED_TABLE_NAME = MYSQL_RESULT($result,$i,"REFERENCED_TABLE_NAME");

}
?>

<h2>Update REFERENTIAL_CONSTRAINTS</h2>
<form name="referential_constraintsUpdateForm" method="POST" action="updateReferential_constraints.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> CONSTRAINT_CATALOG :  </b> </td>
		<td> <input type="text" name="thisCONSTRAINT_CATALOGField" size="20" value="<? echo $thisCONSTRAINT_CATALOG; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CONSTRAINT_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisCONSTRAINT_SCHEMAField" size="20" value="<? echo $thisCONSTRAINT_SCHEMA; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CONSTRAINT_NAME :  </b> </td>
		<td> <input type="text" name="thisCONSTRAINT_NAMEField" size="20" value="<? echo $thisCONSTRAINT_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> UNIQUE_CONSTRAINT_CATALOG :  </b> </td>
		<td> <input type="text" name="thisUNIQUE_CONSTRAINT_CATALOGField" size="20" value="<? echo $thisUNIQUE_CONSTRAINT_CATALOG; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> UNIQUE_CONSTRAINT_SCHEMA :  </b> </td>
		<td> <input type="text" name="thisUNIQUE_CONSTRAINT_SCHEMAField" size="20" value="<? echo $thisUNIQUE_CONSTRAINT_SCHEMA; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> UNIQUE_CONSTRAINT_NAME :  </b> </td>
		<td> <input type="text" name="thisUNIQUE_CONSTRAINT_NAMEField" size="20" value="<? echo $thisUNIQUE_CONSTRAINT_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> MATCH_OPTION :  </b> </td>
		<td> <input type="text" name="thisMATCH_OPTIONField" size="20" value="<? echo $thisMATCH_OPTION; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> UPDATE_RULE :  </b> </td>
		<td> <input type="text" name="thisUPDATE_RULEField" size="20" value="<? echo $thisUPDATE_RULE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DELETE_RULE :  </b> </td>
		<td> <input type="text" name="thisDELETE_RULEField" size="20" value="<? echo $thisDELETE_RULE; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_NAME :  </b> </td>
		<td> <input type="text" name="thisTABLE_NAMEField" size="20" value="<? echo $thisTABLE_NAME; ?>">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> REFERENCED_TABLE_NAME :  </b> </td>
		<td> <input type="text" name="thisREFERENCED_TABLE_NAMEField" size="20" value="<? echo $thisREFERENCED_TABLE_NAME; ?>">  </td> 
	</tr>
</table>

<input type="submit" name="submitUpdateREFERENTIAL_CONSTRAINTSForm" value="Update REFERENTIAL_CONSTRAINTS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>