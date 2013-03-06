<?  
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_DATABASE_QUERY);
?> 
<? 
/**

USER PLUGIN META-DATA : PLEASE FILL IN
<PLUGINNAME>enterOracleComments</PLUGINNAME>
<DESCRIPTION>This Plugin allows you to Enter comments for columns in the sected table.</DESCRIPTION>
<AUTHOR>Nilesh Dosooye</AUTHOR>
<LOADER>enterCommentsForm</LOADER>
**/
class enterOracleComments
{
	var $table;


	function enterOracleComments ($arguments="")
	{

		$table = $arguments['table'];

		if ($table=="")
		{
			echo "You need to select a table for this plugin";
			exit;
		}


		$this->table = strtoupper($table);
	}


	function generate()
	{

		$code = "";

		$code .= $this->generateEnterForm();



		// Returning Generated Code
		return $code;

	} // end of generate() method

	function generateEnterForm()
	{

		$code = "";


		$query = "select * from  user_col_comments where table_name='".$this->table."'";

		$thisDatabaseQuery = new databaseQuery();
		$adodbResults = $thisDatabaseQuery->executeDirectQuery($query);

		$rows = $adodbResults->_array;


		$code .= "<form name=\"enterOracleComments\" method=\"post\" action=\"./oracleComments/saveOracleComments.php\">\n";

		$code .= "<input type=\"submit\" name=\"SaveOracleComments\" value=\"Save Comments\">\n";
		$code .= "<br><br>\n";
		$code .= "<table cellpadding=8 cellspacing=0 border=1>\n";

		for ($a=0; $a<count($rows); $a++)
		{
			$thisRow = $rows[$a];

			$tableName = $thisRow['TABLE_NAME'];
			$columnName = $thisRow['COLUMN_NAME'];
			$comments = $thisRow['COMMENTS'];


			$code .= "<tr>\n";
			$code .=   "<td align=right bgcolor=\"#CCCCCC\">".$columnName."</td>\n";
			$code .=   "<td width=300> <textarea name=\"".$columnName."\" cols=\"30\" rows=\"2\" wrap=\"VIRTUAL\">".$comments."</textarea></td>\n";
			$code .= "</tr>\n";

		}

		$code .= "</table>\n";
		$code .= "<br>\n";
		$code .= "<input name=\"tableName\" type=\"hidden\" value=\"".$this->table."\">\n";
		$code .= "<input type=\"submit\" name=\"SaveOracleComments\" value=\"Save Comments\">\n";
		$code .= "</form>\n";


		// Returning Generated Code
		return $code;
	}

	function generateSave()
	{

		$code = "";


		$query = "select * from  user_col_comments where table_name='".$this->table."'";

		$thisDatabaseQuery = new databaseQuery();
		$adodbResults = $thisDatabaseQuery->executeDirectQuery($query);
		$rows = $adodbResults->_array;


		$code .= "<?\n";
		$code .= "\$thisTableName = \$_REQUEST['tableName'];\n";

		$code .= "\$thisDatabaseQuery = new databaseQuery();\n";

		for ($a=0; $a<count($rows); $a++)
		{

			$thisRow = $rows[$a];
			$columnName = $thisRow['COLUMN_NAME'];

			$code .= "\n\$thisComments = \$_REQUEST['".$columnName."'];\n";



			$code .= "\$sql = \"COMMENT ON COLUMN ".$this->table.".".$columnName." IS '\".\$thisComments.\"'\";\n";

			$code .= "echo \$sql.\"<br><br>\";\n";
			$code .= "\$commentsQueryResults = \$thisDatabaseQuery->executeDirectQuery(\$sql);\n\n";

		}

		$code .= "?>\n";


		// Returning Generated Code
		return $code;
	}


} // end of myDbPlugin class

?>