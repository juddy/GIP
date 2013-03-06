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
	$thisCompress_ops = addslashes($_REQUEST['thisCompress_opsField']);
	$thisCompress_ops_ok = addslashes($_REQUEST['thisCompress_ops_okField']);
	$thisCompress_time = addslashes($_REQUEST['thisCompress_timeField']);
	$thisUncompress_ops = addslashes($_REQUEST['thisUncompress_opsField']);
	$thisUncompress_time = addslashes($_REQUEST['thisUncompress_timeField']);

	$sqlUpdate = "UPDATE INNODB_CMP SET page_size = '$thisPage_size' , compress_ops = '$thisCompress_ops' , compress_ops_ok = '$thisCompress_ops_ok' , compress_time = '$thisCompress_time' , uncompress_ops = '$thisUncompress_ops' , uncompress_time = '$thisUncompress_time'  WHERE page_size = '$thisPage_size'";
	$resultUpdate = MYSQL_QUERY($sqlUpdate);
	echo "<b>Record with Id ".$thisPage_sizeFromForm." has been Updated<br></b>";
	$thisPage_sizeFromForm = "";
}

if ($thisAction=="Insert")
{
	// Retreiving Form Elements from Form
	$thisPage_size = addslashes($_REQUEST['thisPage_sizeField']);
	$thisCompress_ops = addslashes($_REQUEST['thisCompress_opsField']);
	$thisCompress_ops_ok = addslashes($_REQUEST['thisCompress_ops_okField']);
	$thisCompress_time = addslashes($_REQUEST['thisCompress_timeField']);
	$thisUncompress_ops = addslashes($_REQUEST['thisUncompress_opsField']);
	$thisUncompress_time = addslashes($_REQUEST['thisUncompress_timeField']);

	$sqlInsert = "INSERT INTO INNODB_CMP (page_size , compress_ops , compress_ops_ok , compress_time , uncompress_ops , uncompress_time ) VALUES ('$thisPage_size' , '$thisCompress_ops' , '$thisCompress_ops_ok' , '$thisCompress_time' , '$thisUncompress_ops' , '$thisUncompress_time' )";
	$resultInsert = MYSQL_QUERY($sqlInsert);
	echo "<b>Record has been inserted in Database<br></b>";
	$thisPage_sizeFromForm = "";
}

if ($thisAction=="Delete")
{
	// Retreiving Form Elements from Form
	$thisPage_size = addslashes($_REQUEST['thisPage_sizeField']);
	$thisCompress_ops = addslashes($_REQUEST['thisCompress_opsField']);
	$thisCompress_ops_ok = addslashes($_REQUEST['thisCompress_ops_okField']);
	$thisCompress_time = addslashes($_REQUEST['thisCompress_timeField']);
	$thisUncompress_ops = addslashes($_REQUEST['thisUncompress_opsField']);
	$thisUncompress_time = addslashes($_REQUEST['thisUncompress_timeField']);

	$sqlDelete = "DELETE FROM INNODB_CMP WHERE page_size = '$thisPage_size'";
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


$sql = "SELECT   * FROM INNODB_CMP".$orderByQuery.$limitQuery;
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
			<a href="<? echo $PHP_SELF; ?>?sortBy=compress_ops&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Compress_ops</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=compress_ops_ok&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Compress_ops_ok</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=compress_time&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Compress_time</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=uncompress_ops&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Uncompress_ops</B>
			</a>
</TD>
		<TD>
			<a href="<? echo $PHP_SELF; ?>?sortBy=uncompress_time&sortOrder=<? echo $newSortOrder; ?>&startLimit=<? echo $startLimit; ?>&rows=<? echo $limitPerPage; ?>">
				<B>Uncompress_time</B>
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
		<TD><input type"text" name="thisCompress_opsField" value=""></TD>
		<TD><input type"text" name="thisCompress_ops_okField" value=""></TD>
		<TD><input type"text" name="thisCompress_timeField" value=""></TD>
		<TD><input type"text" name="thisUncompress_opsField" value=""></TD>
		<TD><input type"text" name="thisUncompress_timeField" value=""></TD>
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
	$thisCompress_ops = MYSQL_RESULT($result,$i,"compress_ops");
	$thisCompress_ops_ok = MYSQL_RESULT($result,$i,"compress_ops_ok");
	$thisCompress_time = MYSQL_RESULT($result,$i,"compress_time");
	$thisUncompress_ops = MYSQL_RESULT($result,$i,"uncompress_ops");
	$thisUncompress_time = MYSQL_RESULT($result,$i,"uncompress_time");
if ($thisPage_sizeFromForm == $thisPage_size)
{

?>
<FORM NAME="editForm" METHOD="POST" ACTION="<? echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="action" value="Update">
<input type="hidden" name="thisPage_sizeField" value="<? echo $thisPage_size; ?>">
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><input type"text" name="thisPage_sizeField" value="<? echo $thisPage_size; ?>"></TD>
		<TD><input type"text" name="thisCompress_opsField" value="<? echo $thisCompress_ops; ?>"></TD>
		<TD><input type"text" name="thisCompress_ops_okField" value="<? echo $thisCompress_ops_ok; ?>"></TD>
		<TD><input type"text" name="thisCompress_timeField" value="<? echo $thisCompress_time; ?>"></TD>
		<TD><input type"text" name="thisUncompress_opsField" value="<? echo $thisUncompress_ops; ?>"></TD>
		<TD><input type"text" name="thisUncompress_timeField" value="<? echo $thisUncompress_time; ?>"></TD>
	<TD COLSPAN=2><input type="button" name="Save" Value="Save" onClick="this.form.submit();"> </TD>
	</TR>
</FORM>

<?
} else { 
?>
	<TR BGCOLOR="<? echo $bgColor; ?>">
		<TD><? echo $thisPage_size; ?></TD>
		<TD><? echo $thisCompress_ops; ?></TD>
		<TD><? echo $thisCompress_ops_ok; ?></TD>
		<TD><? echo $thisCompress_time; ?></TD>
		<TD><? echo $thisUncompress_ops; ?></TD>
		<TD><? echo $thisUncompress_time; ?></TD>
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