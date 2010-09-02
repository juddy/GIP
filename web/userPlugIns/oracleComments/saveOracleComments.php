<?  
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_DATABASE_QUERY);
include_once(INC_SUPERHEADER);
?> 
<?

        $thisTableName = $_REQUEST['tableName'];
		$query = "select * from  user_col_comments where table_name='".$thisTableName."'";

	
		$thisDatabaseQuery = new databaseQuery();
		$adodbResults = $thisDatabaseQuery->executeDirectQuery($query);
		$rows = $adodbResults->_array;
?>

<h2>Thanks for entering comments for Table <font color=red><? echo $thisTableName; ?></font></h2>
<table cellpadding="7">
<?
		for ($a=0; $a<count($rows); $a++)
		{

			$thisRow = $rows[$a];
		    $columnName = $thisRow['COLUMN_NAME'];
            $thisComments = $_REQUEST[$columnName];
			$thisComments = str_replace("'","''",$thisComments);

/*
Removed koz oracle needs '' to escape characters
             // if magic quotes is not on.. then addslashes
			if (!get_magic_quotes_gpc()) 
			{
                         $thisComments = addslashes($thisComments);
			}
*/
           
            
           $sql = "COMMENT ON COLUMN ".$thisTableName.".".$columnName." IS '".$thisComments."'";


           $commentsQueryResults = $thisDatabaseQuery->executeDirectQuery($sql);
?>
<tr height=30>
<td bgcolor="#CCCCCC" align=right><? echo $columnName; ?></td>
<td><? echo $thisComments; ?></td>
</tr>

<?
           
		}
?>
</table>



<?
		

?>