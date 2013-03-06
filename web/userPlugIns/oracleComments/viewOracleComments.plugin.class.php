<?  
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_DATABASE_QUERY);
?> 
<? 
/**

USER PLUGIN META-DATA : PLEASE FILL IN
<PLUGINNAME>viewOracleComments</PLUGINNAME>
<DESCRIPTION>This Plugin allows you to view comments for the columns in Selected table.</DESCRIPTION>
<AUTHOR>Nilesh Dosooye</AUTHOR>
**/
class viewOracleComments
{
	var $table;


	function viewOracleComments ($arguments="")
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


		$query = "select * from  user_col_comments where table_name='".$this->table."'";

		$thisDatabaseQuery = new databaseQuery();
		$adodbResults = $thisDatabaseQuery->executeDirectQuery($query);

		$rows = $adodbResults->_array;

		$code .= "<table cellpadding=8 cellspacing=0 border=1>\n";

		for ($a=0; $a<count($rows); $a++)
		{
			$thisRow = $rows[$a];

			$tableName = $thisRow['TABLE_NAME'];
			$columnName = $thisRow['COLUMN_NAME'];
			$comments = $thisRow['COMMENTS'];
			
			if ($comments=="") { $comments = "<i>none</i>"; }

			$code .= "<tr>\n";
			$code .=   "<td align=right bgcolor=\"#CCCCCC\">".$columnName."</td>\n";
			$code .=   "<td width=300>".$comments." &nbsp; </td>\n";
			$code .= "</tr>\n";

		}

		$code .= "</table>\n";


		// Returning Generated Code
		return $code;
	}


} // end of myDbPlugin class

?>