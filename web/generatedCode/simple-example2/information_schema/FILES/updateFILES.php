<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?php
	// Retreiving Form Elements from Form
	$thisFILE_ID = addslashes($_REQUEST['thisFILE_IDField']);
	$thisFILE_NAME = addslashes($_REQUEST['thisFILE_NAMEField']);
	$thisFILE_TYPE = addslashes($_REQUEST['thisFILE_TYPEField']);
	$thisTABLESPACE_NAME = addslashes($_REQUEST['thisTABLESPACE_NAMEField']);
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisLOGFILE_GROUP_NAME = addslashes($_REQUEST['thisLOGFILE_GROUP_NAMEField']);
	$thisLOGFILE_GROUP_NUMBER = addslashes($_REQUEST['thisLOGFILE_GROUP_NUMBERField']);
	$thisENGINE = addslashes($_REQUEST['thisENGINEField']);
	$thisFULLTEXT_KEYS = addslashes($_REQUEST['thisFULLTEXT_KEYSField']);
	$thisDELETED_ROWS = addslashes($_REQUEST['thisDELETED_ROWSField']);
	$thisUPDATE_COUNT = addslashes($_REQUEST['thisUPDATE_COUNTField']);
	$thisFREE_EXTENTS = addslashes($_REQUEST['thisFREE_EXTENTSField']);
	$thisTOTAL_EXTENTS = addslashes($_REQUEST['thisTOTAL_EXTENTSField']);
	$thisEXTENT_SIZE = addslashes($_REQUEST['thisEXTENT_SIZEField']);
	$thisINITIAL_SIZE = addslashes($_REQUEST['thisINITIAL_SIZEField']);
	$thisMAXIMUM_SIZE = addslashes($_REQUEST['thisMAXIMUM_SIZEField']);
	$thisAUTOEXTEND_SIZE = addslashes($_REQUEST['thisAUTOEXTEND_SIZEField']);
	$thisCREATION_TIME = addslashes($_REQUEST['thisCREATION_TIMEField']);
	$thisLAST_UPDATE_TIME = addslashes($_REQUEST['thisLAST_UPDATE_TIMEField']);
	$thisLAST_ACCESS_TIME = addslashes($_REQUEST['thisLAST_ACCESS_TIMEField']);
	$thisRECOVER_TIME = addslashes($_REQUEST['thisRECOVER_TIMEField']);
	$thisTRANSACTION_COUNTER = addslashes($_REQUEST['thisTRANSACTION_COUNTERField']);
	$thisVERSION = addslashes($_REQUEST['thisVERSIONField']);
	$thisROW_FORMAT = addslashes($_REQUEST['thisROW_FORMATField']);
	$thisTABLE_ROWS = addslashes($_REQUEST['thisTABLE_ROWSField']);
	$thisAVG_ROW_LENGTH = addslashes($_REQUEST['thisAVG_ROW_LENGTHField']);
	$thisDATA_LENGTH = addslashes($_REQUEST['thisDATA_LENGTHField']);
	$thisMAX_DATA_LENGTH = addslashes($_REQUEST['thisMAX_DATA_LENGTHField']);
	$thisINDEX_LENGTH = addslashes($_REQUEST['thisINDEX_LENGTHField']);
	$thisDATA_FREE = addslashes($_REQUEST['thisDATA_FREEField']);
	$thisCREATE_TIME = addslashes($_REQUEST['thisCREATE_TIMEField']);
	$thisUPDATE_TIME = addslashes($_REQUEST['thisUPDATE_TIMEField']);
	$thisCHECK_TIME = addslashes($_REQUEST['thisCHECK_TIMEField']);
	$thisCHECKSUM = addslashes($_REQUEST['thisCHECKSUMField']);
	$thisSTATUS = addslashes($_REQUEST['thisSTATUSField']);
	$thisEXTRA = addslashes($_REQUEST['thisEXTRAField']);

?>
<?
$sql = "UPDATE FILES SET FILE_ID = '$thisFILE_ID' , FILE_NAME = '$thisFILE_NAME' , FILE_TYPE = '$thisFILE_TYPE' , TABLESPACE_NAME = '$thisTABLESPACE_NAME' , TABLE_CATALOG = '$thisTABLE_CATALOG' , TABLE_SCHEMA = '$thisTABLE_SCHEMA' , TABLE_NAME = '$thisTABLE_NAME' , LOGFILE_GROUP_NAME = '$thisLOGFILE_GROUP_NAME' , LOGFILE_GROUP_NUMBER = '$thisLOGFILE_GROUP_NUMBER' , ENGINE = '$thisENGINE' , FULLTEXT_KEYS = '$thisFULLTEXT_KEYS' , DELETED_ROWS = '$thisDELETED_ROWS' , UPDATE_COUNT = '$thisUPDATE_COUNT' , FREE_EXTENTS = '$thisFREE_EXTENTS' , TOTAL_EXTENTS = '$thisTOTAL_EXTENTS' , EXTENT_SIZE = '$thisEXTENT_SIZE' , INITIAL_SIZE = '$thisINITIAL_SIZE' , MAXIMUM_SIZE = '$thisMAXIMUM_SIZE' , AUTOEXTEND_SIZE = '$thisAUTOEXTEND_SIZE' , CREATION_TIME = '$thisCREATION_TIME' , LAST_UPDATE_TIME = '$thisLAST_UPDATE_TIME' , LAST_ACCESS_TIME = '$thisLAST_ACCESS_TIME' , RECOVER_TIME = '$thisRECOVER_TIME' , TRANSACTION_COUNTER = '$thisTRANSACTION_COUNTER' , VERSION = '$thisVERSION' , ROW_FORMAT = '$thisROW_FORMAT' , TABLE_ROWS = '$thisTABLE_ROWS' , AVG_ROW_LENGTH = '$thisAVG_ROW_LENGTH' , DATA_LENGTH = '$thisDATA_LENGTH' , MAX_DATA_LENGTH = '$thisMAX_DATA_LENGTH' , INDEX_LENGTH = '$thisINDEX_LENGTH' , DATA_FREE = '$thisDATA_FREE' , CREATE_TIME = '$thisCREATE_TIME' , UPDATE_TIME = '$thisUPDATE_TIME' , CHECK_TIME = '$thisCHECK_TIME' , CHECKSUM = '$thisCHECKSUM' , STATUS = '$thisSTATUS' , EXTRA = '$thisEXTRA'  WHERE FILE_ID = '$thisFILE_ID'";
$result = MYSQL_QUERY($sql);

?>
Record  has been updated in the database. Here is the updated information :- <br><br>

<table>
<tr height="30">
	<td align="right"><b>FILE_ID : </b></td>
	<td><? echo $thisFILE_ID; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>FILE_NAME : </b></td>
	<td><? echo $thisFILE_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>FILE_TYPE : </b></td>
	<td><? echo $thisFILE_TYPE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLESPACE_NAME : </b></td>
	<td><? echo $thisTABLESPACE_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLE_CATALOG : </b></td>
	<td><? echo $thisTABLE_CATALOG; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLE_SCHEMA : </b></td>
	<td><? echo $thisTABLE_SCHEMA; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLE_NAME : </b></td>
	<td><? echo $thisTABLE_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LOGFILE_GROUP_NAME : </b></td>
	<td><? echo $thisLOGFILE_GROUP_NAME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LOGFILE_GROUP_NUMBER : </b></td>
	<td><? echo $thisLOGFILE_GROUP_NUMBER; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ENGINE : </b></td>
	<td><? echo $thisENGINE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>FULLTEXT_KEYS : </b></td>
	<td><? echo $thisFULLTEXT_KEYS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DELETED_ROWS : </b></td>
	<td><? echo $thisDELETED_ROWS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>UPDATE_COUNT : </b></td>
	<td><? echo $thisUPDATE_COUNT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>FREE_EXTENTS : </b></td>
	<td><? echo $thisFREE_EXTENTS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TOTAL_EXTENTS : </b></td>
	<td><? echo $thisTOTAL_EXTENTS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>EXTENT_SIZE : </b></td>
	<td><? echo $thisEXTENT_SIZE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>INITIAL_SIZE : </b></td>
	<td><? echo $thisINITIAL_SIZE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>MAXIMUM_SIZE : </b></td>
	<td><? echo $thisMAXIMUM_SIZE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>AUTOEXTEND_SIZE : </b></td>
	<td><? echo $thisAUTOEXTEND_SIZE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CREATION_TIME : </b></td>
	<td><? echo $thisCREATION_TIME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LAST_UPDATE_TIME : </b></td>
	<td><? echo $thisLAST_UPDATE_TIME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>LAST_ACCESS_TIME : </b></td>
	<td><? echo $thisLAST_ACCESS_TIME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>RECOVER_TIME : </b></td>
	<td><? echo $thisRECOVER_TIME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TRANSACTION_COUNTER : </b></td>
	<td><? echo $thisTRANSACTION_COUNTER; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>VERSION : </b></td>
	<td><? echo $thisVERSION; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>ROW_FORMAT : </b></td>
	<td><? echo $thisROW_FORMAT; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>TABLE_ROWS : </b></td>
	<td><? echo $thisTABLE_ROWS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>AVG_ROW_LENGTH : </b></td>
	<td><? echo $thisAVG_ROW_LENGTH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATA_LENGTH : </b></td>
	<td><? echo $thisDATA_LENGTH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>MAX_DATA_LENGTH : </b></td>
	<td><? echo $thisMAX_DATA_LENGTH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>INDEX_LENGTH : </b></td>
	<td><? echo $thisINDEX_LENGTH; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>DATA_FREE : </b></td>
	<td><? echo $thisDATA_FREE; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CREATE_TIME : </b></td>
	<td><? echo $thisCREATE_TIME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>UPDATE_TIME : </b></td>
	<td><? echo $thisUPDATE_TIME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CHECK_TIME : </b></td>
	<td><? echo $thisCHECK_TIME; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>CHECKSUM : </b></td>
	<td><? echo $thisCHECKSUM; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>STATUS : </b></td>
	<td><? echo $thisSTATUS; ?></td>
</tr>
<tr height="30">
	<td align="right"><b>EXTRA : </b></td>
	<td><? echo $thisEXTRA; ?></td>
</tr>
</table>
<br><br><a href="listFILES.php">Go Back to List All Records</a>

<?php
include_once("../common/footer.php");
?>