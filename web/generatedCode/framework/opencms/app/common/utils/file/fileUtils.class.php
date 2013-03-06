<? 
class fileUtils
{
	
	function doesFileExist($fileWithFullPath)
	{
		
		if (file_exists($fileWithFullPath)) {
			return true;
		} else {
			return false;
		}
		
	}
	
	
	function doesHttpFileExists($fileWithFullUrl)
	{
		
		if (@fclose(@fopen($fileWithFullUrl, "r"))) {
			return true;
		} else {
			return false;
		}
		
	}
	
}

?> 