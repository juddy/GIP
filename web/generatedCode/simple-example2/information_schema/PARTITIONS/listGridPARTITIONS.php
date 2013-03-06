<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisTABLE_CATALOGFromForm = $_REQUEST['thisTABLE_CATALOGField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisPARTITION_NAME = addslashes($_REQUEST['thisPARTITION_NAMEField']);
	$thisSUBPARTITION_NAME = addslashes($_REQUEST['thisSUBPARTITION_NAMEField']);
	$thisPARTITION_ORDINAL_POSITION = addslashes($_REQUEST['thisPARTITION_ORDINAL_POSITIONField']);
	$thisSUBPARTITION_ORDINAL_POSITION = addslashes($_REQUEST['thisSUBPARTITION_ORDINAL_POSITIONField']);
	$thisPARTITION_METHOD = addslashes($_REQUEST['thisPARTITION_METHODField']);
	$thisSUBPARTITION_METHOD = addslashes($_REQUEST['thisSUBPARTITION_METHODField']);
	$thisPARTITION_EXPRESSION = addslashes($_REQUEST['thisPARTITION_EXPRESSIONField']);
	$thisSUBPARTITION_EXPRESSION = addslashes($_REQUEST['thisSUBPARTITION_EXPRESSIONField']);
	$thisPARTITION_DESCRIPTION = addslashes($_REQUEST['thisPARTITION_DESCRIPTIONField']);
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
	$thisPARTITION_COMMENT = addslashes($_REQUEST['thisPARTITION_COMMENTField']);
	$thisNODEGROUP = addslashes($_REQUEST['thisNODEGROUPField']);
	$thisTABLESPACE_NAME = addslashes($_REQUEST['thisTABLESPACE_NAMEField']);

	$sqlUpdate = "UPDATE PARTITIONS SET TABLE_CATALOG = '$thisTABLE_CATALOG' , TABLE_SCHEMA = '$thisTABLE_SCHEMA' , TABLE_NAME = '$thisTABLE_NAME' , PARTITION_NAME = '$thisPARTITION_NAME' , SUBPARTITION_NAME = '$thisSUBPARTITION_NAME' , PARTITION_ORDINAL_POSITION = '$thisPARTITION_ORDINAL_POSITION' , SUBPARTITION_ORDINAL_POSITION = '$thisSUBPARTITION_ORDINAL_POSITION' , PARTITION_METHOD = '$thisPARTITION_METHOD' , SUBPARTITION_METHOD = '$thisSUBPARTITION_METHOD' , PARTITION_EXPRESSION = '$thisPARTITION_EXPRESSION' , SUBPARTITION_EXPRESSION = '$thisSUBPARTITION_EXPRESSION' , PARTITION_DESCRIPTION = '$thisPARTITION_DESCRIPTION' , TABLE_ROWS = '$thisTABLE_ROWS' , AVG_ROW_LENGTH = '$thisAVG_ROW_LENGTH' , DATA_LENGTH = '$thisDATA_LENGTH' , MAX_DATA_LENGTH = '$thisMAX_DATA_LENGTH' , INDEX_LENGTH = '$thisINDEX_LENGTH' , DATA_FREE = '$thisDATA_FREE' , CREATE_TIME = '$thisCREATE_TIME' , UPDATE_TIME = '$thisUPDATE_TIME' , CHECK_TIME = '$thisCHECK_TIME' , CHECKSUM = '$thisCHECKSUM' , PARTITION_COMMENT = '$thisPARTITION_COMMENT' , NODEGROUP = '$thisNODEGROUP' , TABLESPACE_NAME = '$thisTABLESPACE_NAME'  WHERE TABLE_CATALOG = '$thisTABLE_CATALOG'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisTABLE_CATALOGFromForm." has been Updated<br></b>";
	$thisTABLE_CATALOGFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisPARTITION_NAME = addslashes($_REQUEST['thisPARTITION_NAMEField']);
	$thisSUBPARTITION_NAME = addslashes($_REQUEST['thisSUBPARTITION_NAMEField']);
	$thisPARTITION_ORDINAL_POSITION = addslashes($_REQUEST['thisPARTITION_ORDINAL_POSITIONField']);
	$thisSUBPARTITION_ORDINAL_POSITION = addslashes($_REQUEST['thisSUBPARTITION_ORDINAL_POSITIONField']);
	$thisPARTITION_METHOD = addslashes($_REQUEST['thisPARTITION_METHODField']);
	$thisSUBPARTITION_METHOD = addslashes($_REQUEST['thisSUBPARTITION_METHODField']);
	$thisPARTITION_EXPRESSION = addslashes($_REQUEST['thisPARTITION_EXPRESSIONField']);
	$thisSUBPARTITION_EXPRESSION = addslashes($_REQUEST['thisSUBPARTITION_EXPRESSIONField']);
	$thisPARTITION_DESCRIPTION = addslashes($_REQUEST['thisPARTITION_DESCRIPTIONField']);
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
	$thisPARTITION_COMMENT = addslashes($_REQUEST['thisPARTITION_COMMENTField']);
	$thisNODEGROUP = addslashes($_REQUEST['thisNODEGROUPField']);
	$thisTABLESPACE_NAME = addslashes($_REQUEST['thisTABLESPACE_NAMEField']);

	$sqlInsert = "INSERT INTO PARTITIONS (TABLE_CATALOG , TABLE_SCHEMA , TABLE_NAME , PARTITION_NAME , SUBPARTITION_NAME , PARTITION_ORDINAL_POSITION , SUBPARTITION_ORDINAL_POSITION , PARTITION_METHOD , SUBPARTITION_METHOD , PARTITION_EXPRESSION , SUBPARTITION_EXPRESSION , PARTITION_DESCRIPTION , TABLE_ROWS , AVG_ROW_LENGTH , DATA_LENGTH , MAX_DATA_LENGTH , INDEX_LENGTH , DATA_FREE , CREATE_TIME , UPDATE_TIME , CHECK_TIME , CHECKSUM , PARTITION_COMMENT , NODEGROUP , TABLESPACE_NAME ) VALUES ('$thisTABLE_CATALOG' , '$thisTABLE_SCHEMA' , '$thisTABLE_NAME' , '$thisPARTITION_NAME' , '$thisSUBPARTITION_NAME' , '$thisPARTITION_ORDINAL_POSITION' , '$thisSUBPARTITION_ORDINAL_POSITION' , '$thisPARTITION_METHOD' , '$thisSUBPARTITION_METHOD' , '$thisPARTITION_EXPRESSION' , '$thisSUBPARTITION_EXPRESSION' , '$thisPARTITION_DESCRIPTION' , '$thisTABLE_ROWS' , '$thisAVG_ROW_LENGTH' , '$thisDATA_LENGTH' , '$thisMAX_DATA_LENGTH' , '$thisINDEX_LENGTH' , '$thisDATA_FREE' , '$thisCREATE_TIME' , '$thisUPDATE_TIME' , '$thisCHECK_TIME' , '$thisCHECKSUM' , '$thisPARTITION_COMMENT' , '$thisNODEGROUP' , '$thisTABLESPACE_NAME' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisTABLE_CATALOGFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisPARTITION_NAME = addslashes($_REQUEST['thisPARTITION_NAMEField']);
	$thisSUBPARTITION_NAME = addslashes($_REQUEST['thisSUBPARTITION_NAMEField']);
	$thisPARTITION_ORDINAL_POSITION = addslashes($_REQUEST['thisPARTITION_ORDINAL_POSITIONField']);
	$thisSUBPARTITION_ORDINAL_POSITION = addslashes($_REQUEST['thisSUBPARTITION_ORDINAL_POSITIONField']);
	$thisPARTITION_METHOD = addslashes($_REQUEST['thisPARTITION_METHODField']);
	$thisSUBPARTITION_METHOD = addslashes($_REQUEST['thisSUBPARTITION_METHODField']);
	$thisPARTITION_EXPRESSION = addslashes($_REQUEST['thisPARTITION_EXPRESSIONField']);
	$thisSUBPARTITION_EXPRESSION = addslashes($_REQUEST['thisSUBPARTITION_EXPRESSIONField']);
	$thisPARTITION_DESCRIPTION = addslashes($_REQUEST['thisPARTITION_DESCRIPTIONField']);
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
	$thisPARTITION_COMMENT = addslashes($_REQUEST['thisPARTITION_COMMENTField']);
	$thisNODEGROUP = addslashes($_REQUEST['thisNODEGROUPField']);
	$thisTABLESPACE_NAME = addslashes($_REQUEST['thisTABLESPACE_NAMEField']);

	$sqlDelete = "DELETE FROM PARTITIONS WHERE TABLE_CATALOG = '$thisTABLE_CATALOG'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisTABLE_CATALOGFromForm." has been Deleted<br></b>";
	$thisTABLE_CATALOGFromForm = "";
}

$initStartLimit = 0;
$limitPerPage = 10;

$startLimit = $_REQUEST['startLimit'];
$numberOfRows = $_REQUEST['rows'];
$sortBy = $_REQUEST['sortBy'];
$sortOrder = $_REQUEST['sortOrder'];

if ($startLimit=="")
{
		$startLimit = $initStartLimit;
}

if ($numberOfRows=="")
{
		$numberOfRows = $limitPerPage;
}

if ($sortOrder=="")
{
		$sortOrder  = "DESC";
}
if ($sortOrder == "DESC") { $newSortOrder = "ASC"; } else  { $newSortOrder = "DESC"; }
$limitQuery = " LIMIT ".$startLimit.",".$numberOfRows;
$nextStartLimit = $startLimit + $limitPerPage;
$previousStartLimit = $startLimit - $limitPerPage;

if ($sortBy!="")
{
		$orderByQuery = " ORDER BY ".$sortBy." ".$sortOrder;
}


$sql = "SELECT   * FROM PARTITIONS".$orderByQuery.$limitQuery;
$result = MYSQL_QUERY($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);


?>
<?
if ($numberOfRows==0) {  
?>

Sorry. No records found !!

<?
}
else if ($numberOfRows>0) {

	$i=0;
?>


<br>
<?
if ($_REQUEST['startLimit'] != "")
{
?>

<a href="<? echo  $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $previousStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Previous <? echo $limitPerPage; ?> Results</a>....
<? } ?>
<?
if ($numberOfRows == $limitPerPage)
{
?>
<a href="<? echo $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $nextStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Next <? echo $limitPerPage; ?> Results</a>
<? } ?>

<br><br>
<TABLE CELLSPACING="0" CELLPADDING="3" BORDER="0" WIDTH="100%">
	<TR>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_CATALOG&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_CATALOG</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PARTITION_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PARTITION_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SUBPARTITION_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SUBPARTITION_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PARTITION_ORDINAL_POSITION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PARTITION_ORDINAL_POSITION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SUBPARTITION_ORDINAL_POSITION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SUBPARTITION_ORDINAL_POSITION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PARTITION_METHOD&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PARTITION_METHOD</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SUBPARTITION_METHOD&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SUBPARTITION_METHOD</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PARTITION_EXPRESSION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PARTITION_EXPRESSION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SUBPARTITION_EXPRESSION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SUBPARTITION_EXPRESSION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PARTITION_DESCRIPTION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PARTITION_DESCRIPTION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_ROWS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_ROWS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=AVG_ROW_LENGTH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>AVG_ROW_LENGTH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATA_LENGTH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATA_LENGTH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=MAX_DATA_LENGTH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>MAX_DATA_LENGTH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INDEX_LENGTH&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INDEX_LENGTH</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATA_FREE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATA_FREE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CREATE_TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CREATE_TIME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=UPDATE_TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>UPDATE_TIME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CHECK_TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CHECK_TIME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CHECKSUM&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CHECKSUM</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PARTITION_COMMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PARTITION_COMMENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NODEGROUP&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NODEGROUP</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLESPACE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLESPACE_NAME</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisTABLE_CATALOGField" value="<? echo $thisTABLE_CATALOG; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisTABLE_CATALOGField" value=""></TD>
		<TD><input type"text" name="thisTABLE_SCHEMAField" value=""></TD>
		<TD><input type"text" name="thisTABLE_NAMEField" value=""></TD>
		<TD><input type"text" name="thisPARTITION_NAMEField" value=""></TD>
		<TD><input type"text" name="thisSUBPARTITION_NAMEField" value=""></TD>
		<TD><input type"text" name="thisPARTITION_ORDINAL_POSITIONField" value=""></TD>
		<TD><input type"text" name="thisSUBPARTITION_ORDINAL_POSITIONField" value=""></TD>
		<TD><input type"text" name="thisPARTITION_METHODField" value=""></TD>
		<TD><input type"text" name="thisSUBPARTITION_METHODField" value=""></TD>
		<TD><input type"text" name="thisPARTITION_EXPRESSIONField" value=""></TD>
		<TD><input type"text" name="thisSUBPARTITION_EXPRESSIONField" value=""></TD>
		<TD><input type"text" name="thisPARTITION_DESCRIPTIONField" value=""></TD>
		<TD><input type"text" name="thisTABLE_ROWSField" value=""></TD>
		<TD><input type"text" name="thisAVG_ROW_LENGTHField" value=""></TD>
		<TD><input type"text" name="thisDATA_LENGTHField" value=""></TD>
		<TD><input type"text" name="thisMAX_DATA_LENGTHField" value=""></TD>
		<TD><input type"text" name="thisINDEX_LENGTHField" value=""></TD>
		<TD><input type"text" name="thisDATA_FREEField" value=""></TD>
		<TD><input type"text" name="thisCREATE_TIMEField" value=""></TD>
		<TD><input type"text" name="thisUPDATE_TIMEField" value=""></TD>
		<TD><input type"text" name="thisCHECK_TIMEField" value=""></TD>
		<TD><input type"text" name="thisCHECKSUMField" value=""></TD>
		<TD><input type"text" name="thisPARTITION_COMMENTField" value=""></TD>
		<TD><input type"text" name="thisNODEGROUPField" value=""></TD>
		<TD><input type"text" name="thisTABLESPACE_NAMEField" value=""></TD>
	<TD COLSPAN=2><input type="submit" name="Insert" Value="Insert Record"> </TD>
	</TR>
</FORM>

<?
 } 
?>
<?
	while ($i<$numberOfRows)
	{

		if (($i%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#C0C0C0"; }

	$thisTABLE_CATALOG = MYSQL_RESULT($result,$i,"TABLE_CATALOG");
	$thisTABLE_SCHEMA = MYSQL_RESULT($result,$i,"TABLE_SCHEMA");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisPARTITION_NAME = MYSQL_RESULT($result,$i,"PARTITION_NAME");
	$thisSUBPARTITION_NAME = MYSQL_RESULT($result,$i,"SUBPARTITION_NAME");
	$thisPARTITION_ORDINAL_POSITION = MYSQL_RESULT($result,$i,"PARTITION_ORDINAL_POSITION");
	$thisSUBPARTITION_ORDINAL_POSITION = MYSQL_RESULT($result,$i,"SUBPARTITION_ORDINAL_POSITION");
	$thisPARTITION_METHOD = MYSQL_RESULT($result,$i,"PARTITION_METHOD");
	$thisSUBPARTITION_METHOD = MYSQL_RESULT($result,$i,"SUBPARTITION_METHOD");
	$thisPARTITION_EXPRESSION = MYSQL_RESULT($result,$i,"PARTITION_EXPRESSION");
	$thisSUBPARTITION_EXPRESSION = MYSQL_RESULT($result,$i,"SUBPARTITION_EXPRESSION");
	$thisPARTITION_DESCRIPTION = MYSQL_RESULT($result,$i,"PARTITION_DESCRIPTION");
	$thisTABLE_ROWS = MYSQL_RESULT($result,$i,"TABLE_ROWS");
	$thisAVG_ROW_LENGTH = MYSQL_RESULT($result,$i,"AVG_ROW_LENGTH");
	$thisDATA_LENGTH = MYSQL_RESULT($result,$i,"DATA_LENGTH");
	$thisMAX_DATA_LENGTH = MYSQL_RESULT($result,$i,"MAX_DATA_LENGTH");
	$thisINDEX_LENGTH = MYSQL_RESULT($result,$i,"INDEX_LENGTH");
	$thisDATA_FREE = MYSQL_RESULT($result,$i,"DATA_FREE");
	$thisCREATE_TIME = MYSQL_RESULT($result,$i,"CREATE_TIME");
	$thisUPDATE_TIME = MYSQL_RESULT($result,$i,"UPDATE_TIME");
	$thisCHECK_TIME = MYSQL_RESULT($result,$i,"CHECK_TIME");
	$thisCHECKSUM = MYSQL_RESULT($result,$i,"CHECKSUM");
	$thisPARTITION_COMMENT = MYSQL_RESULT($result,$i,"PARTITION_COMMENT");
	$thisNODEGROUP = MYSQL_RESULT($result,$i,"NODEGROUP");
	$thisTABLESPACE_NAME = MYSQL_RESULT($result,$i,"TABLESPACE_NAME");
if ($thisTABLE_CATALOGFromForm == $thisTABLE_CATALOG)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisTABLE_CATALOGField" value="<? echo $thisTABLE_CATALOG; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisTABLE_CATALOGField" value="<? echo $thisTABLE_CATALOG; ?>"></TD>
		<TD><input type"text" name="thisTABLE_SCHEMAField" value="<? echo $thisTABLE_SCHEMA; ?>"></TD>
		<TD><input type"text" name="thisTABLE_NAMEField" value="<? echo $thisTABLE_NAME; ?>"></TD>
		<TD><input type"text" name="thisPARTITION_NAMEField" value="<? echo $thisPARTITION_NAME; ?>"></TD>
		<TD><input type"text" name="thisSUBPARTITION_NAMEField" value="<? echo $thisSUBPARTITION_NAME; ?>"></TD>
		<TD><input type"text" name="thisPARTITION_ORDINAL_POSITIONField" value="<? echo $thisPARTITION_ORDINAL_POSITION; ?>"></TD>
		<TD><input type"text" name="thisSUBPARTITION_ORDINAL_POSITIONField" value="<? echo $thisSUBPARTITION_ORDINAL_POSITION; ?>"></TD>
		<TD><input type"text" name="thisPARTITION_METHODField" value="<? echo $thisPARTITION_METHOD; ?>"></TD>
		<TD><input type"text" name="thisSUBPARTITION_METHODField" value="<? echo $thisSUBPARTITION_METHOD; ?>"></TD>
		<TD><input type"text" name="thisPARTITION_EXPRESSIONField" value="<? echo $thisPARTITION_EXPRESSION; ?>"></TD>
		<TD><input type"text" name="thisSUBPARTITION_EXPRESSIONField" value="<? echo $thisSUBPARTITION_EXPRESSION; ?>"></TD>
		<TD><input type"text" name="thisPARTITION_DESCRIPTIONField" value="<? echo $thisPARTITION_DESCRIPTION; ?>"></TD>
		<TD><input type"text" name="thisTABLE_ROWSField" value="<? echo $thisTABLE_ROWS; ?>"></TD>
		<TD><input type"text" name="thisAVG_ROW_LENGTHField" value="<? echo $thisAVG_ROW_LENGTH; ?>"></TD>
		<TD><input type"text" name="thisDATA_LENGTHField" value="<? echo $thisDATA_LENGTH; ?>"></TD>
		<TD><input type"text" name="thisMAX_DATA_LENGTHField" value="<? echo $thisMAX_DATA_LENGTH; ?>"></TD>
		<TD><input type"text" name="thisINDEX_LENGTHField" value="<? echo $thisINDEX_LENGTH; ?>"></TD>
		<TD><input type"text" name="thisDATA_FREEField" value="<? echo $thisDATA_FREE; ?>"></TD>
		<TD><input type"text" name="thisCREATE_TIMEField" value="<? echo $thisCREATE_TIME; ?>"></TD>
		<TD><input type"text" name="thisUPDATE_TIMEField" value="<? echo $thisUPDATE_TIME; ?>"></TD>
		<TD><input type"text" name="thisCHECK_TIMEField" value="<? echo $thisCHECK_TIME; ?>"></TD>
		<TD><input type"text" name="thisCHECKSUMField" value="<? echo $thisCHECKSUM; ?>"></TD>
		<TD><input type"text" name="thisPARTITION_COMMENTField" value="<? echo $thisPARTITION_COMMENT; ?>"></TD>
		<TD><input type"text" name="thisNODEGROUPField" value="<? echo $thisNODEGROUP; ?>"></TD>
		<TD><input type"text" name="thisTABLESPACE_NAMEField" value="<? echo $thisTABLESPACE_NAME; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisTABLE_CATALOG; ?></TD>
		<TD><? echo $thisTABLE_SCHEMA; ?></TD>
		<TD><? echo $thisTABLE_NAME; ?></TD>
		<TD><? echo $thisPARTITION_NAME; ?></TD>
		<TD><? echo $thisSUBPARTITION_NAME; ?></TD>
		<TD><? echo $thisPARTITION_ORDINAL_POSITION; ?></TD>
		<TD><? echo $thisSUBPARTITION_ORDINAL_POSITION; ?></TD>
		<TD><? echo $thisPARTITION_METHOD; ?></TD>
		<TD><? echo $thisSUBPARTITION_METHOD; ?></TD>
		<TD><? echo $thisPARTITION_EXPRESSION; ?></TD>
		<TD><? echo $thisSUBPARTITION_EXPRESSION; ?></TD>
		<TD><? echo $thisPARTITION_DESCRIPTION; ?></TD>
		<TD><? echo $thisTABLE_ROWS; ?></TD>
		<TD><? echo $thisAVG_ROW_LENGTH; ?></TD>
		<TD><? echo $thisDATA_LENGTH; ?></TD>
		<TD><? echo $thisMAX_DATA_LENGTH; ?></TD>
		<TD><? echo $thisINDEX_LENGTH; ?></TD>
		<TD><? echo $thisDATA_FREE; ?></TD>
		<TD><? echo $thisCREATE_TIME; ?></TD>
		<TD><? echo $thisUPDATE_TIME; ?></TD>
		<TD><? echo $thisCHECK_TIME; ?></TD>
		<TD><? echo $thisCHECKSUM; ?></TD>
		<TD><? echo $thisPARTITION_COMMENT; ?></TD>
		<TD><? echo $thisNODEGROUP; ?></TD>
		<TD><? echo $thisTABLESPACE_NAME; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisTABLE_CATALOGField=<? echo $thisTABLE_CATALOG; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisTABLE_CATALOGField=<? echo $thisTABLE_CATALOG; ?>">Delete</a></TD>
	</TR>

<?
}
?>
<?
		$i++;

	} // end while loop
?>
</TABLE>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="EnterNew">
<input type="Submit" name="submit" value="Insert New Record">
</FORM>


<br>
<?
if ($_REQUEST['startLimit'] != "")
{
?>

<a href="<? echo  $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $previousStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Previous <? echo $limitPerPage; ?> Results</a>....
<? } ?>
<?
if ($numberOfRows == $limitPerPage)
{
?>
<a href="<? echo $_SERVER['PHP_SELF']; ?>?startLimit=<? echo $nextStartLimit; ?>&limitPerPage=<? echo $limitPerPage; ?>&sortBy=<? echo $sortBy; ?>&sortOrder=<? echo $sortOrder; ?>">Next <? echo $limitPerPage; ?> Results</a>
<? } ?>

<br><br>
<?
} // end of if numberOfRows > 0 
 ?>

<?php
include_once("../common/footer.php");
?>