<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisQUERY_IDFromForm = $_REQUEST['thisQUERY_IDField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisQUERY_ID = addslashes($_REQUEST['thisQUERY_IDField']);
	$thisSEQ = addslashes($_REQUEST['thisSEQField']);
	$thisSTATE = addslashes($_REQUEST['thisSTATEField']);
	$thisDURATION = addslashes($_REQUEST['thisDURATIONField']);
	$thisCPU_USER = addslashes($_REQUEST['thisCPU_USERField']);
	$thisCPU_SYSTEM = addslashes($_REQUEST['thisCPU_SYSTEMField']);
	$thisCONTEXT_VOLUNTARY = addslashes($_REQUEST['thisCONTEXT_VOLUNTARYField']);
	$thisCONTEXT_INVOLUNTARY = addslashes($_REQUEST['thisCONTEXT_INVOLUNTARYField']);
	$thisBLOCK_OPS_IN = addslashes($_REQUEST['thisBLOCK_OPS_INField']);
	$thisBLOCK_OPS_OUT = addslashes($_REQUEST['thisBLOCK_OPS_OUTField']);
	$thisMESSAGES_SENT = addslashes($_REQUEST['thisMESSAGES_SENTField']);
	$thisMESSAGES_RECEIVED = addslashes($_REQUEST['thisMESSAGES_RECEIVEDField']);
	$thisPAGE_FAULTS_MAJOR = addslashes($_REQUEST['thisPAGE_FAULTS_MAJORField']);
	$thisPAGE_FAULTS_MINOR = addslashes($_REQUEST['thisPAGE_FAULTS_MINORField']);
	$thisSWAPS = addslashes($_REQUEST['thisSWAPSField']);
	$thisSOURCE_FUNCTION = addslashes($_REQUEST['thisSOURCE_FUNCTIONField']);
	$thisSOURCE_FILE = addslashes($_REQUEST['thisSOURCE_FILEField']);
	$thisSOURCE_LINE = addslashes($_REQUEST['thisSOURCE_LINEField']);

	$sqlUpdate = "UPDATE PROFILING SET QUERY_ID = '$thisQUERY_ID' , SEQ = '$thisSEQ' , STATE = '$thisSTATE' , DURATION = '$thisDURATION' , CPU_USER = '$thisCPU_USER' , CPU_SYSTEM = '$thisCPU_SYSTEM' , CONTEXT_VOLUNTARY = '$thisCONTEXT_VOLUNTARY' , CONTEXT_INVOLUNTARY = '$thisCONTEXT_INVOLUNTARY' , BLOCK_OPS_IN = '$thisBLOCK_OPS_IN' , BLOCK_OPS_OUT = '$thisBLOCK_OPS_OUT' , MESSAGES_SENT = '$thisMESSAGES_SENT' , MESSAGES_RECEIVED = '$thisMESSAGES_RECEIVED' , PAGE_FAULTS_MAJOR = '$thisPAGE_FAULTS_MAJOR' , PAGE_FAULTS_MINOR = '$thisPAGE_FAULTS_MINOR' , SWAPS = '$thisSWAPS' , SOURCE_FUNCTION = '$thisSOURCE_FUNCTION' , SOURCE_FILE = '$thisSOURCE_FILE' , SOURCE_LINE = '$thisSOURCE_LINE'  WHERE QUERY_ID = '$thisQUERY_ID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisQUERY_IDFromForm." has been Updated<br></b>";
	$thisQUERY_IDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisQUERY_ID = addslashes($_REQUEST['thisQUERY_IDField']);
	$thisSEQ = addslashes($_REQUEST['thisSEQField']);
	$thisSTATE = addslashes($_REQUEST['thisSTATEField']);
	$thisDURATION = addslashes($_REQUEST['thisDURATIONField']);
	$thisCPU_USER = addslashes($_REQUEST['thisCPU_USERField']);
	$thisCPU_SYSTEM = addslashes($_REQUEST['thisCPU_SYSTEMField']);
	$thisCONTEXT_VOLUNTARY = addslashes($_REQUEST['thisCONTEXT_VOLUNTARYField']);
	$thisCONTEXT_INVOLUNTARY = addslashes($_REQUEST['thisCONTEXT_INVOLUNTARYField']);
	$thisBLOCK_OPS_IN = addslashes($_REQUEST['thisBLOCK_OPS_INField']);
	$thisBLOCK_OPS_OUT = addslashes($_REQUEST['thisBLOCK_OPS_OUTField']);
	$thisMESSAGES_SENT = addslashes($_REQUEST['thisMESSAGES_SENTField']);
	$thisMESSAGES_RECEIVED = addslashes($_REQUEST['thisMESSAGES_RECEIVEDField']);
	$thisPAGE_FAULTS_MAJOR = addslashes($_REQUEST['thisPAGE_FAULTS_MAJORField']);
	$thisPAGE_FAULTS_MINOR = addslashes($_REQUEST['thisPAGE_FAULTS_MINORField']);
	$thisSWAPS = addslashes($_REQUEST['thisSWAPSField']);
	$thisSOURCE_FUNCTION = addslashes($_REQUEST['thisSOURCE_FUNCTIONField']);
	$thisSOURCE_FILE = addslashes($_REQUEST['thisSOURCE_FILEField']);
	$thisSOURCE_LINE = addslashes($_REQUEST['thisSOURCE_LINEField']);

	$sqlInsert = "INSERT INTO PROFILING (QUERY_ID , SEQ , STATE , DURATION , CPU_USER , CPU_SYSTEM , CONTEXT_VOLUNTARY , CONTEXT_INVOLUNTARY , BLOCK_OPS_IN , BLOCK_OPS_OUT , MESSAGES_SENT , MESSAGES_RECEIVED , PAGE_FAULTS_MAJOR , PAGE_FAULTS_MINOR , SWAPS , SOURCE_FUNCTION , SOURCE_FILE , SOURCE_LINE ) VALUES ('$thisQUERY_ID' , '$thisSEQ' , '$thisSTATE' , '$thisDURATION' , '$thisCPU_USER' , '$thisCPU_SYSTEM' , '$thisCONTEXT_VOLUNTARY' , '$thisCONTEXT_INVOLUNTARY' , '$thisBLOCK_OPS_IN' , '$thisBLOCK_OPS_OUT' , '$thisMESSAGES_SENT' , '$thisMESSAGES_RECEIVED' , '$thisPAGE_FAULTS_MAJOR' , '$thisPAGE_FAULTS_MINOR' , '$thisSWAPS' , '$thisSOURCE_FUNCTION' , '$thisSOURCE_FILE' , '$thisSOURCE_LINE' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisQUERY_IDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisQUERY_ID = addslashes($_REQUEST['thisQUERY_IDField']);
	$thisSEQ = addslashes($_REQUEST['thisSEQField']);
	$thisSTATE = addslashes($_REQUEST['thisSTATEField']);
	$thisDURATION = addslashes($_REQUEST['thisDURATIONField']);
	$thisCPU_USER = addslashes($_REQUEST['thisCPU_USERField']);
	$thisCPU_SYSTEM = addslashes($_REQUEST['thisCPU_SYSTEMField']);
	$thisCONTEXT_VOLUNTARY = addslashes($_REQUEST['thisCONTEXT_VOLUNTARYField']);
	$thisCONTEXT_INVOLUNTARY = addslashes($_REQUEST['thisCONTEXT_INVOLUNTARYField']);
	$thisBLOCK_OPS_IN = addslashes($_REQUEST['thisBLOCK_OPS_INField']);
	$thisBLOCK_OPS_OUT = addslashes($_REQUEST['thisBLOCK_OPS_OUTField']);
	$thisMESSAGES_SENT = addslashes($_REQUEST['thisMESSAGES_SENTField']);
	$thisMESSAGES_RECEIVED = addslashes($_REQUEST['thisMESSAGES_RECEIVEDField']);
	$thisPAGE_FAULTS_MAJOR = addslashes($_REQUEST['thisPAGE_FAULTS_MAJORField']);
	$thisPAGE_FAULTS_MINOR = addslashes($_REQUEST['thisPAGE_FAULTS_MINORField']);
	$thisSWAPS = addslashes($_REQUEST['thisSWAPSField']);
	$thisSOURCE_FUNCTION = addslashes($_REQUEST['thisSOURCE_FUNCTIONField']);
	$thisSOURCE_FILE = addslashes($_REQUEST['thisSOURCE_FILEField']);
	$thisSOURCE_LINE = addslashes($_REQUEST['thisSOURCE_LINEField']);

	$sqlDelete = "DELETE FROM PROFILING WHERE QUERY_ID = '$thisQUERY_ID'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisQUERY_IDFromForm." has been Deleted<br></b>";
	$thisQUERY_IDFromForm = "";
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


$sql = "SELECT   * FROM PROFILING".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=QUERY_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>QUERY_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SEQ&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SEQ</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=STATE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>STATE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=DURATION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>DURATION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CPU_USER&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CPU_USER</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CPU_SYSTEM&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CPU_SYSTEM</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CONTEXT_VOLUNTARY&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CONTEXT_VOLUNTARY</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=CONTEXT_INVOLUNTARY&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>CONTEXT_INVOLUNTARY</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=BLOCK_OPS_IN&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>BLOCK_OPS_IN</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=BLOCK_OPS_OUT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>BLOCK_OPS_OUT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=MESSAGES_SENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>MESSAGES_SENT</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=MESSAGES_RECEIVED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>MESSAGES_RECEIVED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGE_FAULTS_MAJOR&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGE_FAULTS_MAJOR</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PAGE_FAULTS_MINOR&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PAGE_FAULTS_MINOR</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SWAPS&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SWAPS</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SOURCE_FUNCTION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SOURCE_FUNCTION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SOURCE_FILE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SOURCE_FILE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=SOURCE_LINE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>SOURCE_LINE</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisQUERY_IDField" value="<? echo $thisQUERY_ID; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisQUERY_IDField" value=""></TD>
		<TD><input type"text" name="thisSEQField" value=""></TD>
		<TD><input type"text" name="thisSTATEField" value=""></TD>
		<TD><input type"text" name="thisDURATIONField" value=""></TD>
		<TD><input type"text" name="thisCPU_USERField" value=""></TD>
		<TD><input type"text" name="thisCPU_SYSTEMField" value=""></TD>
		<TD><input type"text" name="thisCONTEXT_VOLUNTARYField" value=""></TD>
		<TD><input type"text" name="thisCONTEXT_INVOLUNTARYField" value=""></TD>
		<TD><input type"text" name="thisBLOCK_OPS_INField" value=""></TD>
		<TD><input type"text" name="thisBLOCK_OPS_OUTField" value=""></TD>
		<TD><input type"text" name="thisMESSAGES_SENTField" value=""></TD>
		<TD><input type"text" name="thisMESSAGES_RECEIVEDField" value=""></TD>
		<TD><input type"text" name="thisPAGE_FAULTS_MAJORField" value=""></TD>
		<TD><input type"text" name="thisPAGE_FAULTS_MINORField" value=""></TD>
		<TD><input type"text" name="thisSWAPSField" value=""></TD>
		<TD><input type"text" name="thisSOURCE_FUNCTIONField" value=""></TD>
		<TD><input type"text" name="thisSOURCE_FILEField" value=""></TD>
		<TD><input type"text" name="thisSOURCE_LINEField" value=""></TD>
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

	$thisQUERY_ID = MYSQL_RESULT($result,$i,"QUERY_ID");
	$thisSEQ = MYSQL_RESULT($result,$i,"SEQ");
	$thisSTATE = MYSQL_RESULT($result,$i,"STATE");
	$thisDURATION = MYSQL_RESULT($result,$i,"DURATION");
	$thisCPU_USER = MYSQL_RESULT($result,$i,"CPU_USER");
	$thisCPU_SYSTEM = MYSQL_RESULT($result,$i,"CPU_SYSTEM");
	$thisCONTEXT_VOLUNTARY = MYSQL_RESULT($result,$i,"CONTEXT_VOLUNTARY");
	$thisCONTEXT_INVOLUNTARY = MYSQL_RESULT($result,$i,"CONTEXT_INVOLUNTARY");
	$thisBLOCK_OPS_IN = MYSQL_RESULT($result,$i,"BLOCK_OPS_IN");
	$thisBLOCK_OPS_OUT = MYSQL_RESULT($result,$i,"BLOCK_OPS_OUT");
	$thisMESSAGES_SENT = MYSQL_RESULT($result,$i,"MESSAGES_SENT");
	$thisMESSAGES_RECEIVED = MYSQL_RESULT($result,$i,"MESSAGES_RECEIVED");
	$thisPAGE_FAULTS_MAJOR = MYSQL_RESULT($result,$i,"PAGE_FAULTS_MAJOR");
	$thisPAGE_FAULTS_MINOR = MYSQL_RESULT($result,$i,"PAGE_FAULTS_MINOR");
	$thisSWAPS = MYSQL_RESULT($result,$i,"SWAPS");
	$thisSOURCE_FUNCTION = MYSQL_RESULT($result,$i,"SOURCE_FUNCTION");
	$thisSOURCE_FILE = MYSQL_RESULT($result,$i,"SOURCE_FILE");
	$thisSOURCE_LINE = MYSQL_RESULT($result,$i,"SOURCE_LINE");
if ($thisQUERY_IDFromForm == $thisQUERY_ID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisQUERY_IDField" value="<? echo $thisQUERY_ID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisQUERY_IDField" value="<? echo $thisQUERY_ID; ?>"></TD>
		<TD><input type"text" name="thisSEQField" value="<? echo $thisSEQ; ?>"></TD>
		<TD><input type"text" name="thisSTATEField" value="<? echo $thisSTATE; ?>"></TD>
		<TD><input type"text" name="thisDURATIONField" value="<? echo $thisDURATION; ?>"></TD>
		<TD><input type"text" name="thisCPU_USERField" value="<? echo $thisCPU_USER; ?>"></TD>
		<TD><input type"text" name="thisCPU_SYSTEMField" value="<? echo $thisCPU_SYSTEM; ?>"></TD>
		<TD><input type"text" name="thisCONTEXT_VOLUNTARYField" value="<? echo $thisCONTEXT_VOLUNTARY; ?>"></TD>
		<TD><input type"text" name="thisCONTEXT_INVOLUNTARYField" value="<? echo $thisCONTEXT_INVOLUNTARY; ?>"></TD>
		<TD><input type"text" name="thisBLOCK_OPS_INField" value="<? echo $thisBLOCK_OPS_IN; ?>"></TD>
		<TD><input type"text" name="thisBLOCK_OPS_OUTField" value="<? echo $thisBLOCK_OPS_OUT; ?>"></TD>
		<TD><input type"text" name="thisMESSAGES_SENTField" value="<? echo $thisMESSAGES_SENT; ?>"></TD>
		<TD><input type"text" name="thisMESSAGES_RECEIVEDField" value="<? echo $thisMESSAGES_RECEIVED; ?>"></TD>
		<TD><input type"text" name="thisPAGE_FAULTS_MAJORField" value="<? echo $thisPAGE_FAULTS_MAJOR; ?>"></TD>
		<TD><input type"text" name="thisPAGE_FAULTS_MINORField" value="<? echo $thisPAGE_FAULTS_MINOR; ?>"></TD>
		<TD><input type"text" name="thisSWAPSField" value="<? echo $thisSWAPS; ?>"></TD>
		<TD><input type"text" name="thisSOURCE_FUNCTIONField" value="<? echo $thisSOURCE_FUNCTION; ?>"></TD>
		<TD><input type"text" name="thisSOURCE_FILEField" value="<? echo $thisSOURCE_FILE; ?>"></TD>
		<TD><input type"text" name="thisSOURCE_LINEField" value="<? echo $thisSOURCE_LINE; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisQUERY_ID; ?></TD>
		<TD><? echo $thisSEQ; ?></TD>
		<TD><? echo $thisSTATE; ?></TD>
		<TD><? echo $thisDURATION; ?></TD>
		<TD><? echo $thisCPU_USER; ?></TD>
		<TD><? echo $thisCPU_SYSTEM; ?></TD>
		<TD><? echo $thisCONTEXT_VOLUNTARY; ?></TD>
		<TD><? echo $thisCONTEXT_INVOLUNTARY; ?></TD>
		<TD><? echo $thisBLOCK_OPS_IN; ?></TD>
		<TD><? echo $thisBLOCK_OPS_OUT; ?></TD>
		<TD><? echo $thisMESSAGES_SENT; ?></TD>
		<TD><? echo $thisMESSAGES_RECEIVED; ?></TD>
		<TD><? echo $thisPAGE_FAULTS_MAJOR; ?></TD>
		<TD><? echo $thisPAGE_FAULTS_MINOR; ?></TD>
		<TD><? echo $thisSWAPS; ?></TD>
		<TD><? echo $thisSOURCE_FUNCTION; ?></TD>
		<TD><? echo $thisSOURCE_FILE; ?></TD>
		<TD><? echo $thisSOURCE_LINE; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisQUERY_IDField=<? echo $thisQUERY_ID; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisQUERY_IDField=<? echo $thisQUERY_ID; ?>">Delete</a></TD>
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