<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisPOOL_IDFromForm = $_REQUEST['thisPOOL_IDField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisPOOL_ID = addslashes($_REQUEST['thisPOOL_IDField']);
	$thisBLOCK_ID = addslashes($_REQUEST['thisBLOCK_IDField']);
	$thisSPACE = addslashes($_REQUEST['thisSPACEField']);
	$thisPAGE_NUMBER = addslashes($_REQUEST['thisPAGE_NUMBERField']);
	$thisPAGE_TYPE = addslashes($_REQUEST['thisPAGE_TYPEField']);
	$thisFLUSH_TYPE = addslashes($_REQUEST['thisFLUSH_TYPEField']);
	$thisFIX_COUNT = addslashes($_REQUEST['thisFIX_COUNTField']);
	$thisIS_HASHED = addslashes($_REQUEST['thisIS_HASHEDField']);
	$thisNEWEST_MODIFICATION = addslashes($_REQUEST['thisNEWEST_MODIFICATIONField']);
	$thisOLDEST_MODIFICATION = addslashes($_REQUEST['thisOLDEST_MODIFICATIONField']);
	$thisACCESS_TIME = addslashes($_REQUEST['thisACCESS_TIMEField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisINDEX_NAME = addslashes($_REQUEST['thisINDEX_NAMEField']);
	$thisNUMBER_RECORDS = addslashes($_REQUEST['thisNUMBER_RECORDSField']);
	$thisDATA_SIZE = addslashes($_REQUEST['thisDATA_SIZEField']);
	$thisCOMPRESSED_SIZE = addslashes($_REQUEST['thisCOMPRESSED_SIZEField']);
	$thisPAGE_STATE = addslashes($_REQUEST['thisPAGE_STATEField']);
	$thisIO_FIX = addslashes($_REQUEST['thisIO_FIXField']);
	$thisIS_OLD = addslashes($_REQUEST['thisIS_OLDField']);
	$thisFREE_PAGE_CLOCK = addslashes($_REQUEST['thisFREE_PAGE_CLOCKField']);

	$sqlUpdate = "UPDATE INNODB_BUFFER_PAGE SET POOL_ID = '$thisPOOL_ID' , BLOCK_ID = '$thisBLOCK_ID' , SPACE = '$thisSPACE' , PAGE_NUMBER = '$thisPAGE_NUMBER' , PAGE_TYPE = '$thisPAGE_TYPE' , FLUSH_TYPE = '$thisFLUSH_TYPE' , FIX_COUNT = '$thisFIX_COUNT' , IS_HASHED = '$thisIS_HASHED' , NEWEST_MODIFICATION = '$thisNEWEST_MODIFICATION' , OLDEST_MODIFICATION = '$thisOLDEST_MODIFICATION' , ACCESS_TIME = '$thisACCESS_TIME' , TABLE_NAME = '$thisTABLE_NAME' , INDEX_NAME = '$thisINDEX_NAME' , NUMBER_RECORDS = '$thisNUMBER_RECORDS' , DATA_SIZE = '$thisDATA_SIZE' , COMPRESSED_SIZE = '$thisCOMPRESSED_SIZE' , PAGE_STATE = '$thisPAGE_STATE' , IO_FIX = '$thisIO_FIX' , IS_OLD = '$thisIS_OLD' , FREE_PAGE_CLOCK = '$thisFREE_PAGE_CLOCK'  WHERE POOL_ID = '$thisPOOL_ID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisPOOL_IDFromForm." has been Updated<br></b>";
	$thisPOOL_IDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisPOOL_ID = addslashes($_REQUEST['thisPOOL_IDField']);
	$thisBLOCK_ID = addslashes($_REQUEST['thisBLOCK_IDField']);
	$thisSPACE = addslashes($_REQUEST['thisSPACEField']);
	$thisPAGE_NUMBER = addslashes($_REQUEST['thisPAGE_NUMBERField']);
	$thisPAGE_TYPE = addslashes($_REQUEST['thisPAGE_TYPEField']);
	$thisFLUSH_TYPE = addslashes($_REQUEST['thisFLUSH_TYPEField']);
	$thisFIX_COUNT = addslashes($_REQUEST['thisFIX_COUNTField']);
	$thisIS_HASHED = addslashes($_REQUEST['thisIS_HASHEDField']);
	$thisNEWEST_MODIFICATION = addslashes($_REQUEST['thisNEWEST_MODIFICATIONField']);
	$thisOLDEST_MODIFICATION = addslashes($_REQUEST['thisOLDEST_MODIFICATIONField']);
	$thisACCESS_TIME = addslashes($_REQUEST['thisACCESS_TIMEField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisINDEX_NAME = addslashes($_REQUEST['thisINDEX_NAMEField']);
	$thisNUMBER_RECORDS = addslashes($_REQUEST['thisNUMBER_RECORDSField']);
	$thisDATA_SIZE = addslashes($_REQUEST['thisDATA_SIZEField']);
	$thisCOMPRESSED_SIZE = addslashes($_REQUEST['thisCOMPRESSED_SIZEField']);
	$thisPAGE_STATE = addslashes($_REQUEST['thisPAGE_STATEField']);
	$thisIO_FIX = addslashes($_REQUEST['thisIO_FIXField']);
	$thisIS_OLD = addslashes($_REQUEST['thisIS_OLDField']);
	$thisFREE_PAGE_CLOCK = addslashes($_REQUEST['thisFREE_PAGE_CLOCKField']);

	$sqlInsert = "INSERT INTO INNODB_BUFFER_PAGE (POOL_ID , BLOCK_ID , SPACE , PAGE_NUMBER , PAGE_TYPE , FLUSH_TYPE , FIX_COUNT , IS_HASHED , NEWEST_MODIFICATION , OLDEST_MODIFICATION , ACCESS_TIME , TABLE_NAME , INDEX_NAME , NUMBER_RECORDS , DATA_SIZE , COMPRESSED_SIZE , PAGE_STATE , IO_FIX , IS_OLD , FREE_PAGE_CLOCK ) VALUES ('$thisPOOL_ID' , '$thisBLOCK_ID' , '$thisSPACE' , '$thisPAGE_NUMBER' , '$thisPAGE_TYPE' , '$thisFLUSH_TYPE' , '$thisFIX_COUNT' , '$thisIS_HASHED' , '$thisNEWEST_MODIFICATION' , '$thisOLDEST_MODIFICATION' , '$thisACCESS_TIME' , '$thisTABLE_NAME' , '$thisINDEX_NAME' , '$thisNUMBER_RECORDS' , '$thisDATA_SIZE' , '$thisCOMPRESSED_SIZE' , '$thisPAGE_STATE' , '$thisIO_FIX' , '$thisIS_OLD' , '$thisFREE_PAGE_CLOCK' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisPOOL_IDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisPOOL_ID = addslashes($_REQUEST['thisPOOL_IDField']);
	$thisBLOCK_ID = addslashes($_REQUEST['thisBLOCK_IDField']);
	$thisSPACE = addslashes($_REQUEST['thisSPACEField']);
	$thisPAGE_NUMBER = addslashes($_REQUEST['thisPAGE_NUMBERField']);
	$thisPAGE_TYPE = addslashes($_REQUEST['thisPAGE_TYPEField']);
	$thisFLUSH_TYPE = addslashes($_REQUEST['thisFLUSH_TYPEField']);
	$thisFIX_COUNT = addslashes($_REQUEST['thisFIX_COUNTField']);
	$thisIS_HASHED = addslashes($_REQUEST['thisIS_HASHEDField']);
	$thisNEWEST_MODIFICATION = addslashes($_REQUEST['thisNEWEST_MODIFICATIONField']);
	$thisOLDEST_MODIFICATION = addslashes($_REQUEST['thisOLDEST_MODIFICATIONField']);
	$thisACCESS_TIME = addslashes($_REQUEST['thisACCESS_TIMEField']);
	$thisTABLE_NAME = addslashes($_REQUEST['thisTABLE_NAMEField']);
	$thisINDEX_NAME = addslashes($_REQUEST['thisINDEX_NAMEField']);
	$thisNUMBER_RECORDS = addslashes($_REQUEST['thisNUMBER_RECORDSField']);
	$thisDATA_SIZE = addslashes($_REQUEST['thisDATA_SIZEField']);
	$thisCOMPRESSED_SIZE = addslashes($_REQUEST['thisCOMPRESSED_SIZEField']);
	$thisPAGE_STATE = addslashes($_REQUEST['thisPAGE_STATEField']);
	$thisIO_FIX = addslashes($_REQUEST['thisIO_FIXField']);
	$thisIS_OLD = addslashes($_REQUEST['thisIS_OLDField']);
	$thisFREE_PAGE_CLOCK = addslashes($_REQUEST['thisFREE_PAGE_CLOCKField']);

	$sqlDelete = "DELETE FROM INNODB_BUFFER_PAGE WHERE POOL_ID = '$thisPOOL_ID'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisPOOL_IDFromForm." has been Deleted<br></b>";
	$thisPOOL_IDFromForm = "";
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


$sql = "SELECT   * FROM INNODB_BUFFER_PAGE".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=POOL_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>POOL_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=BLOCK_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>BLOCK_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SPACE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SPACE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGE_NUMBER&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGE_NUMBER</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGE_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGE_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=FLUSH_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>FLUSH_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=FIX_COUNT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>FIX_COUNT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=IS_HASHED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>IS_HASHED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NEWEST_MODIFICATION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NEWEST_MODIFICATION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=OLDEST_MODIFICATION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>OLDEST_MODIFICATION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ACCESS_TIME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ACCESS_TIME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLE_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INDEX_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INDEX_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NUMBER_RECORDS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NUMBER_RECORDS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DATA_SIZE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DATA_SIZE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COMPRESSED_SIZE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COMPRESSED_SIZE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGE_STATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGE_STATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=IO_FIX&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>IO_FIX</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=IS_OLD&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>IS_OLD</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=FREE_PAGE_CLOCK&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>FREE_PAGE_CLOCK</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisPOOL_IDField" value="<? echo $thisPOOL_ID; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisPOOL_IDField" value=""></TD>
		<TD><input type"text" name="thisBLOCK_IDField" value=""></TD>
		<TD><input type"text" name="thisSPACEField" value=""></TD>
		<TD><input type"text" name="thisPAGE_NUMBERField" value=""></TD>
		<TD><input type"text" name="thisPAGE_TYPEField" value=""></TD>
		<TD><input type"text" name="thisFLUSH_TYPEField" value=""></TD>
		<TD><input type"text" name="thisFIX_COUNTField" value=""></TD>
		<TD><input type"text" name="thisIS_HASHEDField" value=""></TD>
		<TD><input type"text" name="thisNEWEST_MODIFICATIONField" value=""></TD>
		<TD><input type"text" name="thisOLDEST_MODIFICATIONField" value=""></TD>
		<TD><input type"text" name="thisACCESS_TIMEField" value=""></TD>
		<TD><input type"text" name="thisTABLE_NAMEField" value=""></TD>
		<TD><input type"text" name="thisINDEX_NAMEField" value=""></TD>
		<TD><input type"text" name="thisNUMBER_RECORDSField" value=""></TD>
		<TD><input type"text" name="thisDATA_SIZEField" value=""></TD>
		<TD><input type"text" name="thisCOMPRESSED_SIZEField" value=""></TD>
		<TD><input type"text" name="thisPAGE_STATEField" value=""></TD>
		<TD><input type"text" name="thisIO_FIXField" value=""></TD>
		<TD><input type"text" name="thisIS_OLDField" value=""></TD>
		<TD><input type"text" name="thisFREE_PAGE_CLOCKField" value=""></TD>
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

	$thisPOOL_ID = MYSQL_RESULT($result,$i,"POOL_ID");
	$thisBLOCK_ID = MYSQL_RESULT($result,$i,"BLOCK_ID");
	$thisSPACE = MYSQL_RESULT($result,$i,"SPACE");
	$thisPAGE_NUMBER = MYSQL_RESULT($result,$i,"PAGE_NUMBER");
	$thisPAGE_TYPE = MYSQL_RESULT($result,$i,"PAGE_TYPE");
	$thisFLUSH_TYPE = MYSQL_RESULT($result,$i,"FLUSH_TYPE");
	$thisFIX_COUNT = MYSQL_RESULT($result,$i,"FIX_COUNT");
	$thisIS_HASHED = MYSQL_RESULT($result,$i,"IS_HASHED");
	$thisNEWEST_MODIFICATION = MYSQL_RESULT($result,$i,"NEWEST_MODIFICATION");
	$thisOLDEST_MODIFICATION = MYSQL_RESULT($result,$i,"OLDEST_MODIFICATION");
	$thisACCESS_TIME = MYSQL_RESULT($result,$i,"ACCESS_TIME");
	$thisTABLE_NAME = MYSQL_RESULT($result,$i,"TABLE_NAME");
	$thisINDEX_NAME = MYSQL_RESULT($result,$i,"INDEX_NAME");
	$thisNUMBER_RECORDS = MYSQL_RESULT($result,$i,"NUMBER_RECORDS");
	$thisDATA_SIZE = MYSQL_RESULT($result,$i,"DATA_SIZE");
	$thisCOMPRESSED_SIZE = MYSQL_RESULT($result,$i,"COMPRESSED_SIZE");
	$thisPAGE_STATE = MYSQL_RESULT($result,$i,"PAGE_STATE");
	$thisIO_FIX = MYSQL_RESULT($result,$i,"IO_FIX");
	$thisIS_OLD = MYSQL_RESULT($result,$i,"IS_OLD");
	$thisFREE_PAGE_CLOCK = MYSQL_RESULT($result,$i,"FREE_PAGE_CLOCK");
if ($thisPOOL_IDFromForm == $thisPOOL_ID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisPOOL_IDField" value="<? echo $thisPOOL_ID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisPOOL_IDField" value="<? echo $thisPOOL_ID; ?>"></TD>
		<TD><input type"text" name="thisBLOCK_IDField" value="<? echo $thisBLOCK_ID; ?>"></TD>
		<TD><input type"text" name="thisSPACEField" value="<? echo $thisSPACE; ?>"></TD>
		<TD><input type"text" name="thisPAGE_NUMBERField" value="<? echo $thisPAGE_NUMBER; ?>"></TD>
		<TD><input type"text" name="thisPAGE_TYPEField" value="<? echo $thisPAGE_TYPE; ?>"></TD>
		<TD><input type"text" name="thisFLUSH_TYPEField" value="<? echo $thisFLUSH_TYPE; ?>"></TD>
		<TD><input type"text" name="thisFIX_COUNTField" value="<? echo $thisFIX_COUNT; ?>"></TD>
		<TD><input type"text" name="thisIS_HASHEDField" value="<? echo $thisIS_HASHED; ?>"></TD>
		<TD><input type"text" name="thisNEWEST_MODIFICATIONField" value="<? echo $thisNEWEST_MODIFICATION; ?>"></TD>
		<TD><input type"text" name="thisOLDEST_MODIFICATIONField" value="<? echo $thisOLDEST_MODIFICATION; ?>"></TD>
		<TD><input type"text" name="thisACCESS_TIMEField" value="<? echo $thisACCESS_TIME; ?>"></TD>
		<TD><input type"text" name="thisTABLE_NAMEField" value="<? echo $thisTABLE_NAME; ?>"></TD>
		<TD><input type"text" name="thisINDEX_NAMEField" value="<? echo $thisINDEX_NAME; ?>"></TD>
		<TD><input type"text" name="thisNUMBER_RECORDSField" value="<? echo $thisNUMBER_RECORDS; ?>"></TD>
		<TD><input type"text" name="thisDATA_SIZEField" value="<? echo $thisDATA_SIZE; ?>"></TD>
		<TD><input type"text" name="thisCOMPRESSED_SIZEField" value="<? echo $thisCOMPRESSED_SIZE; ?>"></TD>
		<TD><input type"text" name="thisPAGE_STATEField" value="<? echo $thisPAGE_STATE; ?>"></TD>
		<TD><input type"text" name="thisIO_FIXField" value="<? echo $thisIO_FIX; ?>"></TD>
		<TD><input type"text" name="thisIS_OLDField" value="<? echo $thisIS_OLD; ?>"></TD>
		<TD><input type"text" name="thisFREE_PAGE_CLOCKField" value="<? echo $thisFREE_PAGE_CLOCK; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisPOOL_ID; ?></TD>
		<TD><? echo $thisBLOCK_ID; ?></TD>
		<TD><? echo $thisSPACE; ?></TD>
		<TD><? echo $thisPAGE_NUMBER; ?></TD>
		<TD><? echo $thisPAGE_TYPE; ?></TD>
		<TD><? echo $thisFLUSH_TYPE; ?></TD>
		<TD><? echo $thisFIX_COUNT; ?></TD>
		<TD><? echo $thisIS_HASHED; ?></TD>
		<TD><? echo $thisNEWEST_MODIFICATION; ?></TD>
		<TD><? echo $thisOLDEST_MODIFICATION; ?></TD>
		<TD><? echo $thisACCESS_TIME; ?></TD>
		<TD><? echo $thisTABLE_NAME; ?></TD>
		<TD><? echo $thisINDEX_NAME; ?></TD>
		<TD><? echo $thisNUMBER_RECORDS; ?></TD>
		<TD><? echo $thisDATA_SIZE; ?></TD>
		<TD><? echo $thisCOMPRESSED_SIZE; ?></TD>
		<TD><? echo $thisPAGE_STATE; ?></TD>
		<TD><? echo $thisIO_FIX; ?></TD>
		<TD><? echo $thisIS_OLD; ?></TD>
		<TD><? echo $thisFREE_PAGE_CLOCK; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisPOOL_IDField=<? echo $thisPOOL_ID; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisPOOL_IDField=<? echo $thisPOOL_ID; ?>">Delete</a></TD>
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