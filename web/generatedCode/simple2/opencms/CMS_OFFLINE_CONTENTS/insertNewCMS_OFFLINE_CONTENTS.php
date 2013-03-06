<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisFILE_CONTENT = addslashes($_REQUEST['thisFILE_CONTENTField']);

?>
<?
$sqlQuery = "INSERT INTO CMS_OFFLINE_CONTENTS (RESOURCE_ID , FILE_CONTENT ) VALUES ('$thisRESOURCE_ID' , '$thisFILE_CONTENT' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>RESOURCE_ID : </b></td>
	<td><? echo $thisRESOURCE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>FILE_CONTENT : </b></td>
	<td><? echo $thisFILE_CONTENT; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>