<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisTABLESPACE_NAMEFromForm = $_REQUEST['thisTABLESPACE_NAMEField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisTABLESPACE_NAME = addslashes($_REQUEST['thisTABLESPACE_NAMEField']);
	$thisENGINE = addslashes($_REQUEST['thisENGINEField']);
	$thisTABLESPACE_TYPE = addslashes($_REQUEST['thisTABLESPACE_TYPEField']);
	$thisLOGFILE_GROUP_NAME = addslashes($_REQUEST['thisLOGFILE_GROUP_NAMEField']);
	$thisEXTENT_SIZE = addslashes($_REQUEST['thisEXTENT_SIZEField']);
	$thisAUTOEXTEND_SIZE = addslashes($_REQUEST['thisAUTOEXTEND_SIZEField']);
	$thisMAXIMUM_SIZE = addslashes($_REQUEST['thisMAXIMUM_SIZEField']);
	$thisNODEGROUP_ID = addslashes($_REQUEST['thisNODEGROUP_IDField']);
	$thisTABLESPACE_COMMENT = addslashes($_REQUEST['thisTABLESPACE_COMMENTField']);

	$sqlUpdate = "UPDATE TABLESPACES SET TABLESPACE_NAME = '$thisTABLESPACE_NAME' , ENGINE = '$thisENGINE' , TABLESPACE_TYPE = '$thisTABLESPACE_TYPE' , LOGFILE_GROUP_NAME = '$thisLOGFILE_GROUP_NAME' , EXTENT_SIZE = '$thisEXTENT_SIZE' , AUTOEXTEND_SIZE = '$thisAUTOEXTEND_SIZE' , MAXIMUM_SIZE = '$thisMAXIMUM_SIZE' , NODEGROUP_ID = '$thisNODEGROUP_ID' , TABLESPACE_COMMENT = '$thisTABLESPACE_COMMENT'  WHERE TABLESPACE_NAME = '$thisTABLESPACE_NAME'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisTABLESPACE_NAMEFromForm." has been Updated<br></b>";
	$thisTABLESPACE_NAMEFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisTABLESPACE_NAME = addslashes($_REQUEST['thisTABLESPACE_NAMEField']);
	$thisENGINE = addslashes($_REQUEST['thisENGINEField']);
	$thisTABLESPACE_TYPE = addslashes($_REQUEST['thisTABLESPACE_TYPEField']);
	$thisLOGFILE_GROUP_NAME = addslashes($_REQUEST['thisLOGFILE_GROUP_NAMEField']);
	$thisEXTENT_SIZE = addslashes($_REQUEST['thisEXTENT_SIZEField']);
	$thisAUTOEXTEND_SIZE = addslashes($_REQUEST['thisAUTOEXTEND_SIZEField']);
	$thisMAXIMUM_SIZE = addslashes($_REQUEST['thisMAXIMUM_SIZEField']);
	$thisNODEGROUP_ID = addslashes($_REQUEST['thisNODEGROUP_IDField']);
	$thisTABLESPACE_COMMENT = addslashes($_REQUEST['thisTABLESPACE_COMMENTField']);

	$sqlInsert = "INSERT INTO TABLESPACES (TABLESPACE_NAME , ENGINE , TABLESPACE_TYPE , LOGFILE_GROUP_NAME , EXTENT_SIZE , AUTOEXTEND_SIZE , MAXIMUM_SIZE , NODEGROUP_ID , TABLESPACE_COMMENT ) VALUES ('$thisTABLESPACE_NAME' , '$thisENGINE' , '$thisTABLESPACE_TYPE' , '$thisLOGFILE_GROUP_NAME' , '$thisEXTENT_SIZE' , '$thisAUTOEXTEND_SIZE' , '$thisMAXIMUM_SIZE' , '$thisNODEGROUP_ID' , '$thisTABLESPACE_COMMENT' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisTABLESPACE_NAMEFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisTABLESPACE_NAME = addslashes($_REQUEST['thisTABLESPACE_NAMEField']);
	$thisENGINE = addslashes($_REQUEST['thisENGINEField']);
	$thisTABLESPACE_TYPE = addslashes($_REQUEST['thisTABLESPACE_TYPEField']);
	$thisLOGFILE_GROUP_NAME = addslashes($_REQUEST['thisLOGFILE_GROUP_NAMEField']);
	$thisEXTENT_SIZE = addslashes($_REQUEST['thisEXTENT_SIZEField']);
	$thisAUTOEXTEND_SIZE = addslashes($_REQUEST['thisAUTOEXTEND_SIZEField']);
	$thisMAXIMUM_SIZE = addslashes($_REQUEST['thisMAXIMUM_SIZEField']);
	$thisNODEGROUP_ID = addslashes($_REQUEST['thisNODEGROUP_IDField']);
	$thisTABLESPACE_COMMENT = addslashes($_REQUEST['thisTABLESPACE_COMMENTField']);

	$sqlDelete = "DELETE FROM TABLESPACES WHERE TABLESPACE_NAME = '$thisTABLESPACE_NAME'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisTABLESPACE_NAMEFromForm." has been Deleted<br></b>";
	$thisTABLESPACE_NAMEFromForm = "";
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


$sql = "SELECT   * FROM TABLESPACES".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLESPACE_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLESPACE_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=ENGINE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>ENGINE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLESPACE_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLESPACE_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=LOGFILE_GROUP_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>LOGFILE_GROUP_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=EXTENT_SIZE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>EXTENT_SIZE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=AUTOEXTEND_SIZE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>AUTOEXTEND_SIZE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=MAXIMUM_SIZE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>MAXIMUM_SIZE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=NODEGROUP_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>NODEGROUP_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=TABLESPACE_COMMENT&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>TABLESPACE_COMMENT</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisTABLESPACE_NAMEField" value="<? echo $thisTABLESPACE_NAME; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisTABLESPACE_NAMEField" value=""></TD>
		<TD><input type"text" name="thisENGINEField" value=""></TD>
		<TD><input type"text" name="thisTABLESPACE_TYPEField" value=""></TD>
		<TD><input type"text" name="thisLOGFILE_GROUP_NAMEField" value=""></TD>
		<TD><input type"text" name="thisEXTENT_SIZEField" value=""></TD>
		<TD><input type"text" name="thisAUTOEXTEND_SIZEField" value=""></TD>
		<TD><input type"text" name="thisMAXIMUM_SIZEField" value=""></TD>
		<TD><input type"text" name="thisNODEGROUP_IDField" value=""></TD>
		<TD><input type"text" name="thisTABLESPACE_COMMENTField" value=""></TD>
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

	$thisTABLESPACE_NAME = MYSQL_RESULT($result,$i,"TABLESPACE_NAME");
	$thisENGINE = MYSQL_RESULT($result,$i,"ENGINE");
	$thisTABLESPACE_TYPE = MYSQL_RESULT($result,$i,"TABLESPACE_TYPE");
	$thisLOGFILE_GROUP_NAME = MYSQL_RESULT($result,$i,"LOGFILE_GROUP_NAME");
	$thisEXTENT_SIZE = MYSQL_RESULT($result,$i,"EXTENT_SIZE");
	$thisAUTOEXTEND_SIZE = MYSQL_RESULT($result,$i,"AUTOEXTEND_SIZE");
	$thisMAXIMUM_SIZE = MYSQL_RESULT($result,$i,"MAXIMUM_SIZE");
	$thisNODEGROUP_ID = MYSQL_RESULT($result,$i,"NODEGROUP_ID");
	$thisTABLESPACE_COMMENT = MYSQL_RESULT($result,$i,"TABLESPACE_COMMENT");
if ($thisTABLESPACE_NAMEFromForm == $thisTABLESPACE_NAME)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisTABLESPACE_NAMEField" value="<? echo $thisTABLESPACE_NAME; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisTABLESPACE_NAMEField" value="<? echo $thisTABLESPACE_NAME; ?>"></TD>
		<TD><input type"text" name="thisENGINEField" value="<? echo $thisENGINE; ?>"></TD>
		<TD><input type"text" name="thisTABLESPACE_TYPEField" value="<? echo $thisTABLESPACE_TYPE; ?>"></TD>
		<TD><input type"text" name="thisLOGFILE_GROUP_NAMEField" value="<? echo $thisLOGFILE_GROUP_NAME; ?>"></TD>
		<TD><input type"text" name="thisEXTENT_SIZEField" value="<? echo $thisEXTENT_SIZE; ?>"></TD>
		<TD><input type"text" name="thisAUTOEXTEND_SIZEField" value="<? echo $thisAUTOEXTEND_SIZE; ?>"></TD>
		<TD><input type"text" name="thisMAXIMUM_SIZEField" value="<? echo $thisMAXIMUM_SIZE; ?>"></TD>
		<TD><input type"text" name="thisNODEGROUP_IDField" value="<? echo $thisNODEGROUP_ID; ?>"></TD>
		<TD><input type"text" name="thisTABLESPACE_COMMENTField" value="<? echo $thisTABLESPACE_COMMENT; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisTABLESPACE_NAME; ?></TD>
		<TD><? echo $thisENGINE; ?></TD>
		<TD><? echo $thisTABLESPACE_TYPE; ?></TD>
		<TD><? echo $thisLOGFILE_GROUP_NAME; ?></TD>
		<TD><? echo $thisEXTENT_SIZE; ?></TD>
		<TD><? echo $thisAUTOEXTEND_SIZE; ?></TD>
		<TD><? echo $thisMAXIMUM_SIZE; ?></TD>
		<TD><? echo $thisNODEGROUP_ID; ?></TD>
		<TD><? echo $thisTABLESPACE_COMMENT; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisTABLESPACE_NAMEField=<? echo $thisTABLESPACE_NAME; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisTABLESPACE_NAMEField=<? echo $thisTABLESPACE_NAME; ?>">Delete</a></TD>
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