<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisENGINEFromForm = $_REQUEST['thisENGINEField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisENGINE = addslashes($_REQUEST['thisENGINEField']);
	$thisSUPPORT = addslashes($_REQUEST['thisSUPPORTField']);
	$thisCOMMENT = addslashes($_REQUEST['thisCOMMENTField']);
	$thisTRANSACTIONS = addslashes($_REQUEST['thisTRANSACTIONSField']);
	$thisXA = addslashes($_REQUEST['thisXAField']);
	$thisSAVEPOINTS = addslashes($_REQUEST['thisSAVEPOINTSField']);

	$sqlUpdate = "UPDATE ENGINES SET ENGINE = '$thisENGINE' , SUPPORT = '$thisSUPPORT' , COMMENT = '$thisCOMMENT' , TRANSACTIONS = '$thisTRANSACTIONS' , XA = '$thisXA' , SAVEPOINTS = '$thisSAVEPOINTS'  WHERE ENGINE = '$thisENGINE'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisENGINEFromForm." has been Updated<br></b>";
	$thisENGINEFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisENGINE = addslashes($_REQUEST['thisENGINEField']);
	$thisSUPPORT = addslashes($_REQUEST['thisSUPPORTField']);
	$thisCOMMENT = addslashes($_REQUEST['thisCOMMENTField']);
	$thisTRANSACTIONS = addslashes($_REQUEST['thisTRANSACTIONSField']);
	$thisXA = addslashes($_REQUEST['thisXAField']);
	$thisSAVEPOINTS = addslashes($_REQUEST['thisSAVEPOINTSField']);

	$sqlInsert = "INSERT INTO ENGINES (ENGINE , SUPPORT , COMMENT , TRANSACTIONS , XA , SAVEPOINTS ) VALUES ('$thisENGINE' , '$thisSUPPORT' , '$thisCOMMENT' , '$thisTRANSACTIONS' , '$thisXA' , '$thisSAVEPOINTS' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisENGINEFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisENGINE = addslashes($_REQUEST['thisENGINEField']);
	$thisSUPPORT = addslashes($_REQUEST['thisSUPPORTField']);
	$thisCOMMENT = addslashes($_REQUEST['thisCOMMENTField']);
	$thisTRANSACTIONS = addslashes($_REQUEST['thisTRANSACTIONSField']);
	$thisXA = addslashes($_REQUEST['thisXAField']);
	$thisSAVEPOINTS = addslashes($_REQUEST['thisSAVEPOINTSField']);

	$sqlDelete = "DELETE FROM ENGINES WHERE ENGINE = '$thisENGINE'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisENGINEFromForm." has been Deleted<br></b>";
	$thisENGINEFromForm = "";
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


$sql = "SELECT   * FROM ENGINES".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=ENGINE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ENGINE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SUPPORT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SUPPORT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=COMMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>COMMENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TRANSACTIONS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TRANSACTIONS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=XA&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>XA</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SAVEPOINTS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SAVEPOINTS</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisENGINEField" value="<? echo $thisENGINE; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisENGINEField" value=""></TD>
		<TD><input type"text" name="thisSUPPORTField" value=""></TD>
		<TD><input type"text" name="thisCOMMENTField" value=""></TD>
		<TD><input type"text" name="thisTRANSACTIONSField" value=""></TD>
		<TD><input type"text" name="thisXAField" value=""></TD>
		<TD><input type"text" name="thisSAVEPOINTSField" value=""></TD>
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

	$thisENGINE = MYSQL_RESULT($result,$i,"ENGINE");
	$thisSUPPORT = MYSQL_RESULT($result,$i,"SUPPORT");
	$thisCOMMENT = MYSQL_RESULT($result,$i,"COMMENT");
	$thisTRANSACTIONS = MYSQL_RESULT($result,$i,"TRANSACTIONS");
	$thisXA = MYSQL_RESULT($result,$i,"XA");
	$thisSAVEPOINTS = MYSQL_RESULT($result,$i,"SAVEPOINTS");
if ($thisENGINEFromForm == $thisENGINE)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisENGINEField" value="<? echo $thisENGINE; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisENGINEField" value="<? echo $thisENGINE; ?>"></TD>
		<TD><input type"text" name="thisSUPPORTField" value="<? echo $thisSUPPORT; ?>"></TD>
		<TD><input type"text" name="thisCOMMENTField" value="<? echo $thisCOMMENT; ?>"></TD>
		<TD><input type"text" name="thisTRANSACTIONSField" value="<? echo $thisTRANSACTIONS; ?>"></TD>
		<TD><input type"text" name="thisXAField" value="<? echo $thisXA; ?>"></TD>
		<TD><input type"text" name="thisSAVEPOINTSField" value="<? echo $thisSAVEPOINTS; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisENGINE; ?></TD>
		<TD><? echo $thisSUPPORT; ?></TD>
		<TD><? echo $thisCOMMENT; ?></TD>
		<TD><? echo $thisTRANSACTIONS; ?></TD>
		<TD><? echo $thisXA; ?></TD>
		<TD><? echo $thisSAVEPOINTS; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisENGINEField=<? echo $thisENGINE; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisENGINEField=<? echo $thisENGINE; ?>">Delete</a></TD>
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