<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<?
$thisPage_sizeFromForm = $_REQUEST['thisPage_sizeField'];
$thisAction = $_REQUEST['action'];
if ($thisAction=="Update")
{
	// Retreiving Form Elements from Form
	$thisPage_size = addslashes($_REQUEST['thisPage_sizeField']);
	$thisBuffer_pool_instance = addslashes($_REQUEST['thisBuffer_pool_instanceField']);
	$thisPages_used = addslashes($_REQUEST['thisPages_usedField']);
	$thisPages_free = addslashes($_REQUEST['thisPages_freeField']);
	$thisRelocation_ops = addslashes($_REQUEST['thisRelocation_opsField']);
	$thisRelocation_time = addslashes($_REQUEST['thisRelocation_timeField']);

	$sqlUpdate = "UPDATE INNODB_CMPMEM_RESET SET page_size = '$thisPage_size' , buffer_pool_instance = '$thisBuffer_pool_instance' , pages_used = '$thisPages_used' , pages_free = '$thisPages_free' , relocation_ops = '$thisRelocation_ops' , relocation_time = '$thisRelocation_time'  WHERE page_size = '$thisPage_size'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisPage_sizeFromForm." has been Updated<br></b>";
	$thisPage_sizeFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisPage_size = addslashes($_REQUEST['thisPage_sizeField']);
	$thisBuffer_pool_instance = addslashes($_REQUEST['thisBuffer_pool_instanceField']);
	$thisPages_used = addslashes($_REQUEST['thisPages_usedField']);
	$thisPages_free = addslashes($_REQUEST['thisPages_freeField']);
	$thisRelocation_ops = addslashes($_REQUEST['thisRelocation_opsField']);
	$thisRelocation_time = addslashes($_REQUEST['thisRelocation_timeField']);

	$sqlInsert = "INSERT INTO INNODB_CMPMEM_RESET (page_size , buffer_pool_instance , pages_used , pages_free , relocation_ops , relocation_time ) VALUES ('$thisPage_size' , '$thisBuffer_pool_instance' , '$thisPages_used' , '$thisPages_free' , '$thisRelocation_ops' , '$thisRelocation_time' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisPage_sizeFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisPage_size = addslashes($_REQUEST['thisPage_sizeField']);
	$thisBuffer_pool_instance = addslashes($_REQUEST['thisBuffer_pool_instanceField']);
	$thisPages_used = addslashes($_REQUEST['thisPages_usedField']);
	$thisPages_free = addslashes($_REQUEST['thisPages_freeField']);
	$thisRelocation_ops = addslashes($_REQUEST['thisRelocation_opsField']);
	$thisRelocation_time = addslashes($_REQUEST['thisRelocation_timeField']);

	$sqlDelete = "DELETE FROM INNODB_CMPMEM_RESET WHERE page_size = '$thisPage_size'";
	$resultDelete = MYSQL_QUERY($sqlDelete);

	echo "<b>Record with Id ".$thisPage_sizeFromForm." has been Deleted<br></b>";
	$thisPage_sizeFromForm = "";
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


$sql = "SELECT   * FROM INNODB_CMPMEM_RESET".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=page_size&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Page_size</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=buffer_pool_instance&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Buffer_pool_instance</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=pages_used&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Pages_used</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=pages_free&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Pages_free</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=relocation_ops&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Relocation_ops</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=relocation_time&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Relocation_time</B>
			</a>
</TD>
	</TR>
<?
if ($thisAction=="EnterNew")
{
?>
<FORM NAME="insertForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Insert">
<input type="hidden" name="thisPage_sizeField" value="<? echo $thisPage_size; ?>">
	<TR BGCOLOR="#FF6666">
		<TD><input type"text" name="thisPage_sizeField" value=""></TD>
		<TD><input type"text" name="thisBuffer_pool_instanceField" value=""></TD>
		<TD><input type"text" name="thisPages_usedField" value=""></TD>
		<TD><input type"text" name="thisPages_freeField" value=""></TD>
		<TD><input type"text" name="thisRelocation_opsField" value=""></TD>
		<TD><input type"text" name="thisRelocation_timeField" value=""></TD>
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

	$thisPage_size = MYSQL_RESULT($result,$i,"page_size");
	$thisBuffer_pool_instance = MYSQL_RESULT($result,$i,"buffer_pool_instance");
	$thisPages_used = MYSQL_RESULT($result,$i,"pages_used");
	$thisPages_free = MYSQL_RESULT($result,$i,"pages_free");
	$thisRelocation_ops = MYSQL_RESULT($result,$i,"relocation_ops");
	$thisRelocation_time = MYSQL_RESULT($result,$i,"relocation_time");
if ($thisPage_sizeFromForm == $thisPage_size)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisPage_sizeField" value="<? echo $thisPage_size; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisPage_sizeField" value="<? echo $thisPage_size; ?>"></TD>
		<TD><input type"text" name="thisBuffer_pool_instanceField" value="<? echo $thisBuffer_pool_instance; ?>"></TD>
		<TD><input type"text" name="thisPages_usedField" value="<? echo $thisPages_used; ?>"></TD>
		<TD><input type"text" name="thisPages_freeField" value="<? echo $thisPages_free; ?>"></TD>
		<TD><input type"text" name="thisRelocation_opsField" value="<? echo $thisRelocation_ops; ?>"></TD>
		<TD><input type"text" name="thisRelocation_timeField" value="<? echo $thisRelocation_time; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisPage_size; ?></TD>
		<TD><? echo $thisBuffer_pool_instance; ?></TD>
		<TD><? echo $thisPages_used; ?></TD>
		<TD><? echo $thisPages_free; ?></TD>
		<TD><? echo $thisRelocation_ops; ?></TD>
		<TD><? echo $thisRelocation_time; ?></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Edit&thisPage_sizeField=<? echo $thisPage_size; ?>">Edit</a></TD>
	<TD><a href="<? echo $_SERVER['PHP_SELF']; ?>?action=Delete&thisPage_sizeField=<? echo $thisPage_size; ?>">Delete</a></TD>
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