<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
$thisPRINCIPAL_ID = $_REQUEST['PRINCIPAL_IDField']
?>
<?php
$sql = "SELECT   * FROM CMS_HISTORY_PRINCIPALS WHERE PRINCIPAL_ID = '$thisPRINCIPAL_ID'";
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUMROWS($result);
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?php
}
else if ($numberOfRows>0) {

	$i=0;
	$thisPRINCIPAL_ID = MYSQL_RESULT($result,$i,"PRINCIPAL_ID");
	$thisPRINCIPAL_NAME = MYSQL_RESULT($result,$i,"PRINCIPAL_NAME");
	$thisPRINCIPAL_DESCRIPTION = MYSQL_RESULT($result,$i,"PRINCIPAL_DESCRIPTION");
	$thisPRINCIPAL_OU = MYSQL_RESULT($result,$i,"PRINCIPAL_OU");
	$thisPRINCIPAL_EMAIL = MYSQL_RESULT($result,$i,"PRINCIPAL_EMAIL");
	$thisPRINCIPAL_TYPE = MYSQL_RESULT($result,$i,"PRINCIPAL_TYPE");
	$thisPRINCIPAL_USERDELETED = MYSQL_RESULT($result,$i,"PRINCIPAL_USERDELETED");
	$thisPRINCIPAL_DATEDELETED = MYSQL_RESULT($result,$i,"PRINCIPAL_DATEDELETED");

}
?>

View Record<br><br>

<table>
<tr height="30">
	<td align="right"><b>PRINCIPAL_ID : </b></td>
	<td><? echo $thisPRINCIPAL_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PRINCIPAL_NAME : </b></td>
	<td><? echo $thisPRINCIPAL_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PRINCIPAL_DESCRIPTION : </b></td>
	<td><? echo $thisPRINCIPAL_DESCRIPTION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PRINCIPAL_OU : </b></td>
	<td><? echo $thisPRINCIPAL_OU; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PRINCIPAL_EMAIL : </b></td>
	<td><? echo $thisPRINCIPAL_EMAIL; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PRINCIPAL_TYPE : </b></td>
	<td><? echo $thisPRINCIPAL_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PRINCIPAL_USERDELETED : </b></td>
	<td><? echo $thisPRINCIPAL_USERDELETED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PRINCIPAL_DATEDELETED : </b></td>
	<td><? echo $thisPRINCIPAL_DATEDELETED; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>