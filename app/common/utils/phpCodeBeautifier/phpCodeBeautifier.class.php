<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CLASS_PHP_BEAUTIFY);
?>
<?
class codeBeautifier
{

	// Variables
	var $sourceCode;

	/**
	* @return returns value of variable $sourceCode
	* @desc getSourceCode : Getting value for variable $sourceCode
	*/
	function getSourceCode()
	{
		return $this->sourceCode;
	}

	/**
	* @param param : value to be saved in variable $sourceCode
	* @desc setSourceCode : Setting value for $sourceCode
	*/
	function setSourceCode($value)
	{
		$this->sourceCode = $value;
	}


	function printBeautifulSQL($sourceCode)
	{
		require_once(CODE_BEAUTIFIER_REQ);

		require_once (BEAUTIFIER_PATH.FILE_SEPARATOR."HFile".FILE_SEPARATOR."HFile_mysql.php");
		require_once (BEAUTIFIER_PATH.FILE_SEPARATOR."Output".FILE_SEPARATOR."Output_HTML.php");

	//	$highlighter = new Core(new HFile_mysql(), new Output_HTML());


		echo "<pre>";
	//	echo $highlighter->highlight_text($sourceCode);
	echo $sourceCode; 
		echo "</pre>";
	}
	
	
	function printBeautifulJavaCode($sourceCode)
	{
		require_once(CODE_BEAUTIFIER_REQ);

		require_once (BEAUTIFIER_PATH.FILE_SEPARATOR."HFile".FILE_SEPARATOR."HFile_java122.php");
		require_once (BEAUTIFIER_PATH.FILE_SEPARATOR."Output".FILE_SEPARATOR."Output_HTML.php");

		$highlighter = new Core(new HFile_java122(), new Output_HTML());


		echo "<pre>";
		echo $highlighter->highlight_text($sourceCode);
		echo "</pre>";
	}

	function printBeautifulPHPCode($sourceCode)
	{
		require_once(CODE_BEAUTIFIER_REQ);

		require_once (BEAUTIFIER_PATH.FILE_SEPARATOR."HFile".FILE_SEPARATOR."HFile_php3.php");
		require_once (BEAUTIFIER_PATH.FILE_SEPARATOR."Output".FILE_SEPARATOR."Output_HTML.php");

		$highlighter = new Core(new HFile_php3(), new Output_HTML());


		echo "<pre>";
		echo $highlighter->highlight_text($sourceCode);
		echo "</pre>";
	}

	

		
	function beautify($sourceCode)
	{


		// COMMENTING OUT BECAUSE TAKING TOO LONG TO GENERATE... Exceeds default maximum execution time of php script
		/*

		$indent_width = 5;
		$max_line = 0;
		$indent_mode = 's';
		$find_functions = FALSE;
		$del_line = 0;
		$max_line = 0;
		$highlight = 1;
		$braces = 1;
		$file = $sourceCode;

		$settings = compact("indent_width","max_line","max","del_line","highlight","braces","file","find_functions", "indent_mode");
		$beauty=& new phpBeautify($settings);

		$newCode = rtrim(ltrim($beauty->beautify()));

		return $newCode;
		*/

		return rtrim(ltrim($sourceCode));
	}


}

?>