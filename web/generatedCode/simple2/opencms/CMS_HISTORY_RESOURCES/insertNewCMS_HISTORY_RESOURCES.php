<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisRESOURCE_ID = addslashes($_REQUEST['thisRESOURCE_IDField']);
	$thisRESOURCE_TYPE = addslashes($_REQUEST['thisRESOURCE_TYPEField']);
	$thisRESOURCE_FLAGS = addslashes($_REQUEST['thisRESOURCE_FLAGSField']);
	$thisRESOURCE_STATE = addslashes($_REQUEST['thisRESOURCE_STATEField']);
	$thisRESOURCE_SIZE = addslashes($_REQUEST['thisRESOURCE_SIZEField']);
	$thisDATE_CONTENT = addslashes($_REQUEST['thisDATE_CONTENTField']);
	$thisSIBLING_COUNT = addslashes($_REQUEST['thisSIBLING_COUNTField']);
	$thisDATE_CREATED = addslashes($_REQUEST['thisDATE_CREATEDField']);
	$thisDATE_LASTMODIFIED = addslashes($_REQUEST['thisDATE_LASTMODIFIEDField']);
	$thisUSER_CREATED = addslashes($_REQUEST['thisUSER_CREATEDField']);
	$thisUSER_LASTMODIFIED = addslashes($_REQUEST['thisUSER_LASTMODIFIEDField']);
	$thisPROJECT_LASTMODIFIED = addslashes($_REQUEST['thisPROJECT_LASTMODIFIEDField']);
	$thisPUBLISH_TAG = addslashes($_REQUEST['thisPUBLISH_TAGField']);
	$thisRESOURCE_VERSION = addslashes($_REQUEST['thisRESOURCE_VERSIONField']);

?>
<?
$sqlQuery = "INSERT INTO CMS_HISTORY_RESOURCES (RESOURCE_ID , RESOURCE_TYPE , RESOURCE_FLAGS , RESOURCE_STATE , RESOURCE_SIZE , DATE_CONTENT , SIBLING_COUNT , DATE_CREATED , DATE_LASTMODIFIED , USER_CREATED , USER_LASTMODIFIED , PROJECT_LASTMODIFIED , PUBLISH_TAG , RESOURCE_VERSION ) VALUES ('$thisRESOURCE_ID' , '$thisRESOURCE_TYPE' , '$thisRESOURCE_FLAGS' , '$thisRESOURCE_STATE' , '$thisRESOURCE_SIZE' , '$thisDATE_CONTENT' , '$thisSIBLING_COUNT' , '$thisDATE_CREATED' , '$thisDATE_LASTMODIFIED' , '$thisUSER_CREATED' , '$thisUSER_LASTMODIFIED' , '$thisPROJECT_LASTMODIFIED' , '$thisPUBLISH_TAG' , '$thisRESOURCE_VERSION' )";
$result = MYSQL_QUERY($sqlQuery);

?>
A new record has been inserted in the database. Here is the information that has been inserted :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>RESOURCE_ID : </b></td>
	<td><? echo $thisRESOURCE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_TYPE : </b></td>
	<td><? echo $thisRESOURCE_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_FLAGS : </b></td>
	<td><? echo $thisRESOURCE_FLAGS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_STATE : </b></td>
	<td><? echo $thisRESOURCE_STATE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_SIZE : </b></td>
	<td><? echo $thisRESOURCE_SIZE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATE_CONTENT : </b></td>
	<td><? echo $thisDATE_CONTENT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>SIBLING_COUNT : </b></td>
	<td><? echo $thisSIBLING_COUNT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATE_CREATED : </b></td>
	<td><? echo $thisDATE_CREATED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATE_LASTMODIFIED : </b></td>
	<td><? echo $thisDATE_LASTMODIFIED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>USER_CREATED : </b></td>
	<td><? echo $thisUSER_CREATED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>USER_LASTMODIFIED : </b></td>
	<td><? echo $thisUSER_LASTMODIFIED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PROJECT_LASTMODIFIED : </b></td>
	<td><? echo $thisPROJECT_LASTMODIFIED; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>PUBLISH_TAG : </b></td>
	<td><? echo $thisPUBLISH_TAG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RESOURCE_VERSION : </b></td>
	<td><? echo $thisRESOURCE_VERSION; ?></td>
</tr>
</table>

<?php
include_once("../common/footer.php");
?>