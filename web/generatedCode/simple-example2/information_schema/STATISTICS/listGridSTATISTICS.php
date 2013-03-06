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
	$thisNON_UNIQUE = addslashes($_REQUEST['thisNON_UNIQUEField']);
	$thisINDEX_SCHEMA = addslashes($_REQUEST['thisINDEX_SCHEMAField']);
	$thisINDEX_NAME = addslashes($_REQUEST['thisINDEX_NAMEField']);
	$thisSEQ_IN_INDEX = addslashes($_REQUEST['thisSEQ_IN_INDEXField']);
	$thisCOLUMN_NAME = addslashes($_REQUEST['thisCOLUMN_NAMEField']);
	$thisCOLLATION = addslashes($_REQUEST['thisCOLLATIONField']);
	$thisCARDINALITY = addslashes($_REQUEST['thisCARDINALITYField']);
	$thisSUB_PART = addslashes($_REQUEST['thisSUB_PARTField']);
	$thisPACKED = addslashes($_REQUEST['thisPACKEDField']);
	$thisNULLABLE = addslashes($_REQUEST['thisNULLABLEField']);
	$thisINDEX_TYPE = addslashes($_REQUEST['thisINDEX_TYPEField']);
	$thisCOMMENT = addslashes($_REQUEST['thisCOMMENTField']);
	$thisINDEX_COMMENT = addslashes($_REQUEST['thisINDEX_COMMENTField']);

	$sqlUpdate = "UPDATE STATISTICS SET TABLE_CATALOG = '$thisTABLE_CATALOG' , TABLE_SCHEMA = '$thisTABLE_SCHEMA' , TABLE_NAME = '$thisTABLE_NAME' , NON_UNIQUE = '$thisNON_UNIQUE' , INDEX_SCHEMA = '$thisINDEX_SCHEMA' , INDEX_NAME = '$thisINDEX_NAME' , SEQ_IN_INDEX = '$thisSEQ_IN_INDEX' , COLUMN_NAME = '$thisCOLUMN_NAME' , COLLATION = '$thisCOLLATION' , CARDINALITY = '$thisCARDINALITY' , SUB_PART = '$thisSUB_PART' , PACKED = '$thisPACKED' , NULLABLE = '$thisNULLABLE' , INDEX_TYPE = '$thisINDEX_TYPE' , COMMENT = '$thisCOMMENT' , INDEX_COMMENT = '$thisINDEX_COMMENT'  WHERE TABLE_CATALOG = '$thisTABLE_CATALOG'";
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
	$thisNON_UNIQUE = addslashes($_REQUEST['thisNON_UNIQUEField']);
	$thisINDEX_SCHEMA = addslashes($_REQUEST['thisINDEX_SCHEMAField']);
	$thisINDEX_NAME = addslashes($_REQUEST['thisINDEX_NAMEField']);
	$thisSEQ_IN_INDEX = addslashes($_REQUEST['thisSEQ_IN_INDEXField']);
	$thisCOLUMN_NAME = addslashes($_REQUEST['thisCOLUMN_NAMEField']);
	$thisCOLLATION = addslashes($_REQUEST['thisCOLLATIONField']);
	$thisCARDINALITY = addslashes($_REQUEST['thisCARDINALITYField']);
	$thisSUB_PART = addslashes($_REQUEST['thisSUB_PARTField']);
	$thisPACKED = addslashes($_REQUEST['thisPACKEDField']);
	$thisNULLABLE = addslashes($_REQUEST['thisNULLABLEField']);
	$thisINDEX_TYPE = addslashes($_REQUEST['thisINDEX_TYPEField']);
	$thisCOMMENT = addslashes($_REQUEST['thisCOMMENTField']);
	$thisINDEX_COMMENT = addslashes($_REQUEST['thisINDEX_COMMENTField']);

	$sqlInsert = "INSERT INTO STATISTICS (TABLE_CATALOG , TABLE_SCHEMA , TABLE_NAME , NON_UNIQUE , INDEX_SCHEMA , INDEX_NAME , SEQ_IN_INDEX , COLUMN_NAME , COLLATION , CARDINALITY , SUB_PART , PACKED , NULLABLE , INDEX_TYPE , COMMENT , INDEX_COMMENT ) VALUES ('$thisTABLE_CATALOG' , '$thisTABLE_SCHEMA' , '$thisTABLE_NAME' , '$thisNON_UNIQUE' , '$thisINDEX_SCHEMA' , '$thisINDEX_NAME' , '$thisSEQ_IN_INDEX' , '$thisCOLUMN_NAME' , '$thisCOLLATION' , '$thisCARDINALITY' , '$thisSUB_PART' , '$thisPACKED' , '$thisNULLABLE' , '$thisINDEX_TYPE' , '$thisCOMMENT' , '$thisINDEX_COMMENT' )";
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
	$thisNON_UNIQUE = addslashes($_REQUEST['thisNON_UNIQUEField']);
	$thisINDEX_SCHEMA = addslashes($_REQUEST['thisINDEX_SCHEMAField']);
	$thisINDEX_NAME = addslashes($_REQUEST['thisINDEX_NAMEField']);
	$thisSEQ_IN_INDEX = addslashes($_REQUEST['thisSEQ_IN_INDEXField']);
	$thisCOLUMN_NAME = addslashes($_REQUEST['thisCOLUMN_NAMEField']);
	$thisCOLLATION = addslashes($_REQUEST['thisCOLLATIONField']);
	$thisCARDINALITY = addslashes($_REQUEST['thisCARDINALITYField']);
	$thisSUB_PART = addslashes($_REQUEST['thisSUB_PARTField']);
	$thisPACKED = addslashes($_REQUEST['thisPACKEDField']);
	$thisNULLABLE = addslashes($_REQUEST['thisNULLABLEField']);
	$thisINDEX_TYPE = addslashes($_REQUEST['thisINDEX_TYPEField']);
	$thisCOMMENT = addslashes($_REQUEST['thisCOMMENTField']);
	$thisINDEX_COMMENT = addslashes($_REQUEST['thisINDEX_COMMENTField']);

	$sqlDelete = "DELETE FROM STATISTICS WHERE TABLE_CATALOG = '$thisTABLE_CATALOG'";
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


$sql = "SELECT   * FROM STATISTICS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=NON_UNIQUE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NON_UNIQUE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INDEX_SCHEMA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INDEX_SCHEMA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INDEX_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INDEX_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SEQ_IN_INDEX&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SEQ_IN_INDEX</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COLUMN_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COLUMN_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COLLATION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COLLATION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CARDINALITY&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CARDINALITY</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SUB_PART&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SUB_PART</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PACKED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PACKED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NULLABLE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NULLABLE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INDEX_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INDEX_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COMMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COMMENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=INDEX_COMMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>INDEX_COMMENT</B>
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
		<TD><input type"text" name="thisNON_UNIQUEField" value=""></TD>
		<TD><input type"text" name="thisINDEX_SCHEMAField" value=""></TD>
		<TD><input type"text" name="thisINDEX_NAMEField" value=""></TD>
		<TD><input type"text" name="thisSEQ_IN_INDEXField" value=""></TD>
		<TD><input type"text" name="thisCOLUMN_NAMEField" value=""></TD>
		<TD><input type"text" name="thisCOLLATIONField" value=""></TD>
		<TD><input type"text" name="thisCARDINALITYField" value=""></TD>
		<TD><input type"text" name="thisSUB_PARTField" value=""></TD>
		<TD><input type"text" name="thisPACKEDField" value=""></TD>
		<TD><input type"text" name="thisNULLABLEField" value=""></TD>
		<TD><input type"text" name="thisINDEX_TYPEField" value=""></TD>
		<TD><input type"text" name="thisCOMMENTField" value=""></TD>
		<TD><input type"text" name="thisINDEX_COMMENTField" value=""></TD>
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
	$thisNON_UNIQUE = MYSQL_RESULT($result,$i,"NON_UNIQUE");
	$thisINDEX_SCHEMA = MYSQL_RESULT($result,$i,"INDEX_SCHEMA");
	$thisINDEX_NAME = MYSQL_RESULT($result,$i,"INDEX_NAME");
	$thisSEQ_IN_INDEX = MYSQL_RESULT($result,$i,"SEQ_IN_INDEX");
	$thisCOLUMN_NAME = MYSQL_RESULT($result,$i,"COLUMN_NAME");
	$thisCOLLATION = MYSQL_RESULT($result,$i,"COLLATION");
	$thisCARDINALITY = MYSQL_RESULT($result,$i,"CARDINALITY");
	$thisSUB_PART = MYSQL_RESULT($result,$i,"SUB_PART");
	$thisPACKED = MYSQL_RESULT($result,$i,"PACKED");
	$thisNULLABLE = MYSQL_RESULT($result,$i,"NULLABLE");
	$thisINDEX_TYPE = MYSQL_RESULT($result,$i,"INDEX_TYPE");
	$thisCOMMENT = MYSQL_RESULT($result,$i,"COMMENT");
	$thisINDEX_COMMENT = MYSQL_RESULT($result,$i,"INDEX_COMMENT");
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
		<TD><input type"text" name="thisNON_UNIQUEField" value="<? echo $thisNON_UNIQUE; ?>"></TD>
		<TD><input type"text" name="thisINDEX_SCHEMAField" value="<? echo $thisINDEX_SCHEMA; ?>"></TD>
		<TD><input type"text" name="thisINDEX_NAMEField" value="<? echo $thisINDEX_NAME; ?>"></TD>
		<TD><input type"text" name="thisSEQ_IN_INDEXField" value="<? echo $thisSEQ_IN_INDEX; ?>"></TD>
		<TD><input type"text" name="thisCOLUMN_NAMEField" value="<? echo $thisCOLUMN_NAME; ?>"></TD>
		<TD><input type"text" name="thisCOLLATIONField" value="<? echo $thisCOLLATION; ?>"></TD>
		<TD><input type"text" name="thisCARDINALITYField" value="<? echo $thisCARDINALITY; ?>"></TD>
		<TD><input type"text" name="thisSUB_PARTField" value="<? echo $thisSUB_PART; ?>"></TD>
		<TD><input type"text" name="thisPACKEDField" value="<? echo $thisPACKED; ?>"></TD>
		<TD><input type"text" name="thisNULLABLEField" value="<? echo $thisNULLABLE; ?>"></TD>
		<TD><input type"text" name="thisINDEX_TYPEField" value="<? echo $thisINDEX_TYPE; ?>"></TD>
		<TD><input type"text" name="thisCOMMENTField" value="<? echo $thisCOMMENT; ?>"></TD>
		<TD><input type"text" name="thisINDEX_COMMENTField" value="<? echo $thisINDEX_COMMENT; ?>"></TD>
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
		<TD><? echo $thisNON_UNIQUE; ?></TD>
		<TD><? echo $thisINDEX_SCHEMA; ?></TD>
		<TD><? echo $thisINDEX_NAME; ?></TD>
		<TD><? echo $thisSEQ_IN_INDEX; ?></TD>
		<TD><? echo $thisCOLUMN_NAME; ?></TD>
		<TD><? echo $thisCOLLATION; ?></TD>
		<TD><? echo $thisCARDINALITY; ?></TD>
		<TD><? echo $thisSUB_PART; ?></TD>
		<TD><? echo $thisPACKED; ?></TD>
		<TD><? echo $thisNULLABLE; ?></TD>
		<TD><? echo $thisINDEX_TYPE; ?></TD>
		<TD><? echo $thisCOMMENT; ?></TD>
		<TD><? echo $thisINDEX_COMMENT; ?></TD>
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