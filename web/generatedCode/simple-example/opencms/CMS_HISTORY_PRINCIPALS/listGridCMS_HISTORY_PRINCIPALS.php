<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisPRINCIPAL_IDFromForm = $_REQUEST['thisPRINCIPAL_IDField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisPRINCIPAL_ID = addslashes($_REQUEST['thisPRINCIPAL_IDField']);
	$thisPRINCIPAL_NAME = addslashes($_REQUEST['thisPRINCIPAL_NAMEField']);
	$thisPRINCIPAL_DESCRIPTION = addslashes($_REQUEST['thisPRINCIPAL_DESCRIPTIONField']);
	$thisPRINCIPAL_OU = addslashes($_REQUEST['thisPRINCIPAL_OUField']);
	$thisPRINCIPAL_EMAIL = addslashes($_REQUEST['thisPRINCIPAL_EMAILField']);
	$thisPRINCIPAL_TYPE = addslashes($_REQUEST['thisPRINCIPAL_TYPEField']);
	$thisPRINCIPAL_USERDELETED = addslashes($_REQUEST['thisPRINCIPAL_USERDELETEDField']);
	$thisPRINCIPAL_DATEDELETED = addslashes($_REQUEST['thisPRINCIPAL_DATEDELETEDField']);

	$sqlUpdate = "UPDATE CMS_HISTORY_PRINCIPALS SET PRINCIPAL_ID = '$thisPRINCIPAL_ID' , PRINCIPAL_NAME = '$thisPRINCIPAL_NAME' , PRINCIPAL_DESCRIPTION = '$thisPRINCIPAL_DESCRIPTION' , PRINCIPAL_OU = '$thisPRINCIPAL_OU' , PRINCIPAL_EMAIL = '$thisPRINCIPAL_EMAIL' , PRINCIPAL_TYPE = '$thisPRINCIPAL_TYPE' , PRINCIPAL_USERDELETED = '$thisPRINCIPAL_USERDELETED' , PRINCIPAL_DATEDELETED = '$thisPRINCIPAL_DATEDELETED'  WHERE PRINCIPAL_ID = '$thisPRINCIPAL_ID'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisPRINCIPAL_IDFromForm." has been Updated<br></b>";
	$thisPRINCIPAL_IDFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisPRINCIPAL_ID = addslashes($_REQUEST['thisPRINCIPAL_IDField']);
	$thisPRINCIPAL_NAME = addslashes($_REQUEST['thisPRINCIPAL_NAMEField']);
	$thisPRINCIPAL_DESCRIPTION = addslashes($_REQUEST['thisPRINCIPAL_DESCRIPTIONField']);
	$thisPRINCIPAL_OU = addslashes($_REQUEST['thisPRINCIPAL_OUField']);
	$thisPRINCIPAL_EMAIL = addslashes($_REQUEST['thisPRINCIPAL_EMAILField']);
	$thisPRINCIPAL_TYPE = addslashes($_REQUEST['thisPRINCIPAL_TYPEField']);
	$thisPRINCIPAL_USERDELETED = addslashes($_REQUEST['thisPRINCIPAL_USERDELETEDField']);
	$thisPRINCIPAL_DATEDELETED = addslashes($_REQUEST['thisPRINCIPAL_DATEDELETEDField']);

	$sqlInsert = "INSERT INTO CMS_HISTORY_PRINCIPALS (PRINCIPAL_ID , PRINCIPAL_NAME , PRINCIPAL_DESCRIPTION , PRINCIPAL_OU , PRINCIPAL_EMAIL , PRINCIPAL_TYPE , PRINCIPAL_USERDELETED , PRINCIPAL_DATEDELETED ) VALUES ('$thisPRINCIPAL_ID' , '$thisPRINCIPAL_NAME' , '$thisPRINCIPAL_DESCRIPTION' , '$thisPRINCIPAL_OU' , '$thisPRINCIPAL_EMAIL' , '$thisPRINCIPAL_TYPE' , '$thisPRINCIPAL_USERDELETED' , '$thisPRINCIPAL_DATEDELETED' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisPRINCIPAL_IDFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisPRINCIPAL_ID = addslashes($_REQUEST['thisPRINCIPAL_IDField']);
	$thisPRINCIPAL_NAME = addslashes($_REQUEST['thisPRINCIPAL_NAMEField']);
	$thisPRINCIPAL_DESCRIPTION = addslashes($_REQUEST['thisPRINCIPAL_DESCRIPTIONField']);
	$thisPRINCIPAL_OU = addslashes($_REQUEST['thisPRINCIPAL_OUField']);
	$thisPRINCIPAL_EMAIL = addslashes($_REQUEST['thisPRINCIPAL_EMAILField']);
	$thisPRINCIPAL_TYPE = addslashes($_REQUEST['thisPRINCIPAL_TYPEField']);
	$thisPRINCIPAL_USERDELETED = addslashes($_REQUEST['thisPRINCIPAL_USERDELETEDField']);
	$thisPRINCIPAL_DATEDELETED = addslashes($_REQUEST['thisPRINCIPAL_DATEDELETEDField']);

	$sqlDelete = "DELETE FROM CMS_HISTORY_PRINCIPALS WHERE PRINCIPAL_ID = '$thisPRINCIPAL_ID'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisPRINCIPAL_IDFromForm." has been Deleted<br></b>";
	$thisPRINCIPAL_IDFromForm = "";
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


$sql = "SELECT   * FROM CMS_HISTORY_PRINCIPALS".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRINCIPAL_ID&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRINCIPAL_ID</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRINCIPAL_NAME&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRINCIPAL_NAME</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRINCIPAL_DESCRIPTION&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRINCIPAL_DESCRIPTION</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRINCIPAL_OU&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRINCIPAL_OU</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRINCIPAL_EMAIL&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRINCIPAL_EMAIL</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRINCIPAL_TYPE&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRINCIPAL_TYPE</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRINCIPAL_USERDELETED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRINCIPAL_USERDELETED</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=PRINCIPAL_DATEDELETED&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>PRINCIPAL_DATEDELETED</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisPRINCIPAL_IDField" value="<? echo $thisPRINCIPAL_ID; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisPRINCIPAL_IDField" value=""></TD>
		<TD><input type"text" name="thisPRINCIPAL_NAMEField" value=""></TD>
		<TD><input type"text" name="thisPRINCIPAL_DESCRIPTIONField" value=""></TD>
		<TD><input type"text" name="thisPRINCIPAL_OUField" value=""></TD>
		<TD><input type"text" name="thisPRINCIPAL_EMAILField" value=""></TD>
		<TD><input type"text" name="thisPRINCIPAL_TYPEField" value=""></TD>
		<TD><input type"text" name="thisPRINCIPAL_USERDELETEDField" value=""></TD>
		<TD><input type"text" name="thisPRINCIPAL_DATEDELETEDField" value=""></TD>
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

	$thisPRINCIPAL_ID = MYSQL_RESULT($result,$i,"PRINCIPAL_ID");
	$thisPRINCIPAL_NAME = MYSQL_RESULT($result,$i,"PRINCIPAL_NAME");
	$thisPRINCIPAL_DESCRIPTION = MYSQL_RESULT($result,$i,"PRINCIPAL_DESCRIPTION");
	$thisPRINCIPAL_OU = MYSQL_RESULT($result,$i,"PRINCIPAL_OU");
	$thisPRINCIPAL_EMAIL = MYSQL_RESULT($result,$i,"PRINCIPAL_EMAIL");
	$thisPRINCIPAL_TYPE = MYSQL_RESULT($result,$i,"PRINCIPAL_TYPE");
	$thisPRINCIPAL_USERDELETED = MYSQL_RESULT($result,$i,"PRINCIPAL_USERDELETED");
	$thisPRINCIPAL_DATEDELETED = MYSQL_RESULT($result,$i,"PRINCIPAL_DATEDELETED");
if ($thisPRINCIPAL_IDFromForm == $thisPRINCIPAL_ID)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisPRINCIPAL_IDField" value="<? echo $thisPRINCIPAL_ID; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisPRINCIPAL_IDField" value="<? echo $thisPRINCIPAL_ID; ?>"></TD>
		<TD><input type"text" name="thisPRINCIPAL_NAMEField" value="<? echo $thisPRINCIPAL_NAME; ?>"></TD>
		<TD><input type"text" name="thisPRINCIPAL_DESCRIPTIONField" value="<? echo $thisPRINCIPAL_DESCRIPTION; ?>"></TD>
		<TD><input type"text" name="thisPRINCIPAL_OUField" value="<? echo $thisPRINCIPAL_OU; ?>"></TD>
		<TD><input type"text" name="thisPRINCIPAL_EMAILField" value="<? echo $thisPRINCIPAL_EMAIL; ?>"></TD>
		<TD><input type"text" name="thisPRINCIPAL_TYPEField" value="<? echo $thisPRINCIPAL_TYPE; ?>"></TD>
		<TD><input type"text" name="thisPRINCIPAL_USERDELETEDField" value="<? echo $thisPRINCIPAL_USERDELETED; ?>"></TD>
		<TD><input type"text" name="thisPRINCIPAL_DATEDELETEDField" value="<? echo $thisPRINCIPAL_DATEDELETED; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisPRINCIPAL_ID; ?></TD>
		<TD><? echo $thisPRINCIPAL_NAME; ?></TD>
		<TD><? echo $thisPRINCIPAL_DESCRIPTION; ?></TD>
		<TD><? echo $thisPRINCIPAL_OU; ?></TD>
		<TD><? echo $thisPRINCIPAL_EMAIL; ?></TD>
		<TD><? echo $thisPRINCIPAL_TYPE; ?></TD>
		<TD><? echo $thisPRINCIPAL_USERDELETED; ?></TD>
		<TD><? echo $thisPRINCIPAL_DATEDELETED; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisPRINCIPAL_IDField=<? echo $thisPRINCIPAL_ID; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisPRINCIPAL_IDField=<? echo $thisPRINCIPAL_ID; ?>">Delete</a></TD>
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