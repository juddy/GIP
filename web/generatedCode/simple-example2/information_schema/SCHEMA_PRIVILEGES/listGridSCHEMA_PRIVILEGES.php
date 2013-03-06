<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisGRANTEEFromForm = $_REQUEST['thisGRANTEEField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisGRANTEE = addslashes($_REQUEST['thisGRANTEEField']);
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisPRIVILEGE_TYPE = addslashes($_REQUEST['thisPRIVILEGE_TYPEField']);
	$thisIS_GRANTABLE = addslashes($_REQUEST['thisIS_GRANTABLEField']);

	$sqlUpdate = "UPDATE SCHEMA_PRIVILEGES SET GRANTEE = '$thisGRANTEE' , TABLE_CATALOG = '$thisTABLE_CATALOG' , TABLE_SCHEMA = '$thisTABLE_SCHEMA' , PRIVILEGE_TYPE = '$thisPRIVILEGE_TYPE' , IS_GRANTABLE = '$thisIS_GRANTABLE'  WHERE GRANTEE = '$thisGRANTEE'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisGRANTEEFromForm." has been Updated<br></b>";
	$thisGRANTEEFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisGRANTEE = addslashes($_REQUEST['thisGRANTEEField']);
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisPRIVILEGE_TYPE = addslashes($_REQUEST['thisPRIVILEGE_TYPEField']);
	$thisIS_GRANTABLE = addslashes($_REQUEST['thisIS_GRANTABLEField']);

	$sqlInsert = "INSERT INTO SCHEMA_PRIVILEGES (GRANTEE , TABLE_CATALOG , TABLE_SCHEMA , PRIVILEGE_TYPE , IS_GRANTABLE ) VALUES ('$thisGRANTEE' , '$thisTABLE_CATALOG' , '$thisTABLE_SCHEMA' , '$thisPRIVILEGE_TYPE' , '$thisIS_GRANTABLE' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisGRANTEEFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisGRANTEE = addslashes($_REQUEST['thisGRANTEEField']);
	$thisTABLE_CATALOG = addslashes($_REQUEST['thisTABLE_CATALOGField']);
	$thisTABLE_SCHEMA = addslashes($_REQUEST['thisTABLE_SCHEMAField']);
	$thisPRIVILEGE_TYPE = addslashes($_REQUEST['thisPRIVILEGE_TYPEField']);
	$thisIS_GRANTABLE = addslashes($_REQUEST['thisIS_GRANTABLEField']);

	$sqlDelete = "DELETE FROM SCHEMA_PRIVILEGES WHERE GRANTEE = '$thisGRANTEE'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisGRANTEEFromForm." has been Deleted<br></b>";
	$thisGRANTEEFromForm = "";
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


$sql = "SELECT   * FROM SCHEMA_PRIVILEGES".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=GRANTEE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>GRANTEE</B>
			</a>
</TD>
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRIVILEGE_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRIVILEGE_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=IS_GRANTABLE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>IS_GRANTABLE</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisGRANTEEField" value="<? echo $thisGRANTEE; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisGRANTEEField" value=""></TD>
		<TD><input type"text" name="thisTABLE_CATALOGField" value=""></TD>
		<TD><input type"text" name="thisTABLE_SCHEMAField" value=""></TD>
		<TD><input type"text" name="thisPRIVILEGE_TYPEField" value=""></TD>
		<TD><input type"text" name="thisIS_GRANTABLEField" value=""></TD>
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

	$thisGRANTEE = MYSQL_RESULT($result,$i,"GRANTEE");
	$thisTABLE_CATALOG = MYSQL_RESULT($result,$i,"TABLE_CATALOG");
	$thisTABLE_SCHEMA = MYSQL_RESULT($result,$i,"TABLE_SCHEMA");
	$thisPRIVILEGE_TYPE = MYSQL_RESULT($result,$i,"PRIVILEGE_TYPE");
	$thisIS_GRANTABLE = MYSQL_RESULT($result,$i,"IS_GRANTABLE");
if ($thisGRANTEEFromForm == $thisGRANTEE)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisGRANTEEField" value="<? echo $thisGRANTEE; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisGRANTEEField" value="<? echo $thisGRANTEE; ?>"></TD>
		<TD><input type"text" name="thisTABLE_CATALOGField" value="<? echo $thisTABLE_CATALOG; ?>"></TD>
		<TD><input type"text" name="thisTABLE_SCHEMAField" value="<? echo $thisTABLE_SCHEMA; ?>"></TD>
		<TD><input type"text" name="thisPRIVILEGE_TYPEField" value="<? echo $thisPRIVILEGE_TYPE; ?>"></TD>
		<TD><input type"text" name="thisIS_GRANTABLEField" value="<? echo $thisIS_GRANTABLE; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisGRANTEE; ?></TD>
		<TD><? echo $thisTABLE_CATALOG; ?></TD>
		<TD><? echo $thisTABLE_SCHEMA; ?></TD>
		<TD><? echo $thisPRIVILEGE_TYPE; ?></TD>
		<TD><? echo $thisIS_GRANTABLE; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisGRANTEEField=<? echo $thisGRANTEE; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisGRANTEEField=<? echo $thisGRANTEE; ?>">Delete</a></TD>
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