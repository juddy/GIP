<? 
include_once("/GIP/app/settings/gipConfiguration.inc.php");
include_once(CLASS_TABLE);
include_once(CLASS_COMMON_GENIE_FRAMEWORK);
include_once(CLASS_PHP_CODE_BEAUTIFIER);
?>
<? 
class gipGenManagerGenerator extends commonGenieFramework
{

	function gipGenManagerGenerator($arguments)
	{
		$db = $arguments['db'];
		$table = $arguments['table'];

		$thisTable = new table($table,$db);
		$this->setTableObject($thisTable);


		$this->initializeGenieFramework();

	}


	function generate()
	{
		$this->appendSuperHeader();
		$this->appendAppHeader();
		$this->appendToCode($this->getGenManagerHeader());
		$this->appendToCode($this->generateManagerCode());


		$this->appendAppFooter();
		$this->appendSuperFoooter();

		$beautifulCode = codeBeautifier::beautify($this->getSourceCode());

		return $beautifulCode;
	}

	function generateManagerCode()
	{

		$generatedCode = "";
		$generatedCode .= "<?php \n";
		$generatedCode .= "// Class Representing the ".$this->getInfoName()." table \n";
		$generatedCode .= "// and DML operations on it from the database\n";

		if (GENERATE_FOR_PHP5)
		{
			$generatedCode .= "abstract ";
		}

		$generatedCode .= "class ".$this->getTableName()."GenManager { \n\n";


		$generatedCode .= $this->generateCreateManager().$this->getLineEnder().$this->getLineEnder();
		$generatedCode .= $this->generateUpdateDao().$this->getLineEnder().$this->getLineEnder();
		$generatedCode .= $this->generateDeleteDao().$this->getLineEnder().$this->getLineEnder();
		$generatedCode .= $this->generateGet().$this->getLineEnder().$this->getLineEnder();
		$generatedCode .= $this->generateGetAll().$this->getLineEnder().$this->getLineEnder();
		$generatedCode .= $this->generateSearchCode().$this->getLineEnder().$this->getLineEnder();


		$generatedCode .= "} // end of ".$this->getTableName()."GenManager Class\n\n";
		$generatedCode .= "?>";

		return $generatedCode;

	}

	function generateCreateManager() {


		$thisTable = $this->getTableObject();

		$code = "";
		$returnComment = "returns the insert Id of the inserted Row. DAO will throw exception if error ";
		$paramComment = "a populated instance of object - (".$this->getInfoName().")";
		$descComment = "Inserts a new  row in the table populated from parameters of (".$this->getInfoName().") object ";
		$comments = $this->getComments($returnComment,$paramComment,$descComment);
		$code .= $comments;

		if (GENERATE_FOR_PHP5)
		{
			//$code .= "protected ";
		}

		$code .= "function create".ucfirst(ucfirst($this->getTableName()))."(";
		
		// Generating Object Type passed for php5
		if (GENERATE_FOR_PHP5)
		{
			$code .= $this->getInfoName()." ";
		}
		
		$code .= "\$this".$this->getInfoName().") \n";
		$code .= "{ \n\n";
		$code .= "   // Instantiating new instance of ".ucfirst($this->getTableName())."DAO \n";
		$code .= "   \$this".ucfirst($this->getTableName())."DAO = new ".ucfirst($this->getTableName())."DAO(); \n";
		$code .= "   return \$this".ucfirst($this->getTableName())."DAO->create".ucfirst($this->getTableName())."(\$this".ucfirst($this->getInfoName()).");\n";
		$code .= "   \n\n";


		$code .= "} \n\n";



		return $code;
	}



	function generateUpdateDao() {


		$returnComment = "returns true if update if successful. DAO will throw exception if error ";
		$paramComment = "a populated instance of object - (".$this->getTableName().")";
		$descComment = "Updates database table row from parameters of (".$this->getInfoName().") object ";
		$comments = $this->getComments($returnComment,$paramComment,$descComment);

		$code = "";
		$code .= $comments;

		if (GENERATE_FOR_PHP5)
		{
			//$code .= "protected ";
		}

		$code .= "function update".ucfirst($this->getTableName())."(";
		
		// Generating Object Type passed for php5
		if (GENERATE_FOR_PHP5)
		{
			$code .= $this->getInfoName()." ";
		}
		
		$code .= "\$this".ucfirst($this->getInfoName()).",\$searchItems=\"\") \n";
		$code .= "{ \n\n";
		$code .= "   // Instantiating new instance of ".ucfirst($this->getTableName())."DAO \n";
		$code .= "   \$this".ucfirst($this->getTableName())."DAO = new ".ucfirst($this->getTableName())."DAO(); \n";
		$code .= "   return \$this".ucfirst($this->getTableName())."DAO->update".ucfirst($this->getTableName())."(\$this".ucfirst($this->getInfoName()).",\$searchItems);\n";
		$code .= "   \n\n";
		$code .= "} \n\n";


		return $code;
	}


	function generateDeleteDao() {



		$returnComment = "returns true if delete if successful. DAO will throw exception if error ";
		$paramComment = "a populated instance of object - (".$this->getInfoName().")";
		$descComment = "Delete database table row from parameters of (".$this->getInfoName().") object ";
		$comments = $this->getComments($returnComment,$paramComment,$descComment);


		$code = "";
		$code .= $comments;

		if (GENERATE_FOR_PHP5)
		{
			//$code .= "protected ";
		}

		$code .= "function delete".ucfirst($this->getTableName())."(";
		
		// Generating Object Type passed for php5
		if (GENERATE_FOR_PHP5)
		{
			$code .= $this->getInfoName()." ";
		}
		
		$code .= "\$this".ucfirst($this->getInfoName()).",\$searchItems=\"\") \n";
		$code .= "{ \n\n";
		$code .= "   // Instantiating new instance of ".ucfirst($this->getTableName())."DAO \n";
		$code .= "   \$this".ucfirst($this->getTableName())."DAO = new ".ucfirst($this->getTableName())."DAO(); \n";
		$code .= "   return \$this".ucfirst($this->getTableName())."DAO->delete".ucfirst($this->getTableName())."(\$this".ucfirst($this->getInfoName()).",\$searchItems);\n";
		$code .= "   \n\n";
		$code .= "} \n\n";


		return $code;
	}



	function generateGet() {


		$returnComment = "returns a  (".$this->getInfoName().") object if successul or else returns false";
		$paramComment = "unique id of the object you want to get";
		$descComment = "Searches the database for a (".$this->getInfoName().") object  with the passed Id";
		$comments = $this->getComments($returnComment,$paramComment,$descComment);

		$code = "";
		$code .= $comments;

		if (GENERATE_FOR_PHP5)
		{
			//$code .= "protected ";
		}

		$code .= "function get".ucfirst($this->getTableName())."ByPK(\$pkValue) \n";
		$code .= "{ \n\n";
		$code .= "   // Instantiating new instance of ".ucfirst($this->getTableName())."DAO \n";
		$code .= "   \$this".ucfirst($this->getTableName())."DAO = new ".ucfirst($this->getTableName())."DAO(); \n";
		$code .= "   return \$this".ucfirst($this->getTableName())."DAO->get".ucfirst($this->getTableName())."ByPK(\$pkValue);\n";
		$code .= "   \n\n";
		$code .= "} \n\n";


		return $code;

	}

	function generateGetAll() {


		$returnComment = "returns an array  (".$this->getInfoName().") object if successul or else returns false";
		$paramComment = "no params";
		$descComment = "Searches the database for a (".$this->getInfoName().") object  with the passed Id";
		$comments = $this->getComments($returnComment,$paramComment,$descComment);

		$code = "";
		$code .= $comments;

		if (GENERATE_FOR_PHP5)
		{
			//$code .= "protected ";
		}

		$code .= "function getAll".ucfirst($this->getTableName())."(\$start=\"\",\$limit=\"\",\$sortBy=\"\",\$sortOrder=\"\") \n";
		$code .= "{ \n\n";
		$code .= "   // Instantiating new instance of ".ucfirst($this->getTableName())."DAO \n";
		$code .= "   \$this".ucfirst($this->getTableName())."DAO = new ".ucfirst($this->getTableName())."DAO(); \n";
		$code .= "   // this function returns an array of ".$this->getInfoName()."(s) containing all rows in the database   \n";
		$code .= "   return \$this".ucfirst($this->getTableName())."DAO->search".ucfirst($this->getTableName())."(\"\",\$start,\$limit,\"\",\$sortBy,\$sortOrder);\n";
		$code .= "   \n\n";
		$code .= "} \n\n";


		return $code;

	}


	function generateSearchCode() {


		$returnComment = "returns an array (".$this->getInfoName().") object if successul or else returns false";
		$paramComment = "field to search on, field Value";
		$descComment = "Searches the database for a ".$this->getInfoName()." object  with the passed field and value";
		$comments = $this->getComments($returnComment,$paramComment,$descComment);

		$code = "";
		$code .= $comments;

		if (GENERATE_FOR_PHP5)
		{
			//$code .= "protected ";
		}

		$code .= "function search".ucfirst($this->getTableName())."(\$searchItems,\$start=\"\",\$limit=\"\",\$fieldsToReturn=\"\",\$orderBy=\"\",\$orderDirection=\"\") \n";
		$code .= "{ \n\n";
		$code .= "   // Instantiating new instance of ".ucfirst($this->getInfoName())."DAO \n";
		$code .= "   \$this".ucfirst($this->getTableName())."DAO = new ".ucfirst($this->getTableName())."DAO(); \n";
		$code .= "   // this function returns an array of ".$this->getInfoName()."(s) containing all rows in the database   \n";
		$code .= "   return \$this".ucfirst($this->getTableName())."DAO->search".ucfirst($this->getTableName())."(\$searchItems,\$start,\$limit,\$fieldsToReturn,\$orderBy,\$orderDirection);\n";
		$code .= "   \n\n";
		$code .= "} \n\n";

		return $code;

	}


}

?>