<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_STRING_UTILS);
?>
<? 
class fileSystemUtils
{


	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc buildNewFile($fileName,$fullPath) :  put function description here ...
	*/
	function createNewFileInPath($fileName,$fileContent,$fullPath)
	{
		$fullFileName = $fullPath.FILE_SEPARATOR.$fileName;
		return $this->createNewFile($fullFileName,$fileContent);

	}

	function createNewFile($fullFileName,$fileContent)
	{
		$fp = fopen($fullFileName,"w+");
		fwrite($fp,$fileContent);
		fclose($fp);


	}

	function getStringFromFile($fullFileName)
	{

		if (file_exists($fullFileName))
		{
			
			$handle = fopen($fullFileName, "r");
			$linesOfCode = "";

			while (!feof ($handle))
			{
				
				$buffer = fgets($handle, 4096);
				
				
				
				$linesOfCode .= $buffer;
			}

			fclose($handle);

			return $linesOfCode;
		}
		else
		{
			echo "ERROR in Function getStringFromFile() : FileName passed in as parameter for system to read does not exist. You must pass an existing fileName to this command. The file was - <b> ".$fullFileName."</b>";
			exit;
		}
	}

	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc copyFiles($originalPath,$destinationpath) :  put function description here ...
	*/
	function copyAllFilesFromPathToPath($originalPath,$destinationpath)
	{


		if (OS_UNIX)
		{
			$commandToRun = "cp  -R ".$originalPath.FILE_SEPARATOR."* ".$destinationpath;
		}
		else if (OS_WINDOWS)
		{
			$commandToRun = "xcopy ".$originalPath." ".$destinationpath." /E /K /I /C ";
		}
		else
		{
			exit("undefined OS");
		}
		echo "Command that was run : $commandToRun <br>";
		//$output = system($commandToRun);
		//echo "<pre>$output</pre>";


		$this->xcopy($originalPath,$destinationpath);

	}

	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc makeDirectory() :  put function description here ...
	*/
	function makeDirectoryRecursive($strPath, $mode="")
	{
		
		if ($mode=="") { $mode = "0755"; }

		if (is_dir($strPath)) return true;

		$pStrPath = dirname($strPath);
		if (!$this->makeDirectoryRecursive($pStrPath, $mode)) return false;
		return mkdir($strPath,$mode);
	}

	function doesDirectoryExists($pathName)
	{

		if (file_exists($pathName))
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	function writeContentsToFile($path,$fileName,$fileContents)
	{

		$fullFileName = $path.FILE_SEPARATOR.$fileName;

		$fp = fopen($fullFileName,"w");
		fwrite($fp,$fileContents);
		fclose($fp);

	}


	/**
	* @return recursively copy directories from one place to the other
	* @param source :  full source directory to copy from
	* @param dest :  full destination directory to copy from
	* @
	**/
	function xcopy($source,$dest)
	{


		if (!is_dir($source))
		return 0;
		if (!is_dir($dest))
		{
			mkdir($dest,"0755");
		}
		$h=@dir($source);
		while (@($entry=$h->read()) !== false)
		{
			if (($entry!=".")&&($entry!="..")&&($entry!="cvs")&&($entry!="CVS"))
			{
				if (is_dir("$source/$entry")&&$dest!== $source.FILE_SEPARATOR.$entry)
				{
					fileSystemUtils::xcopy($source.FILE_SEPARATOR.$entry,$dest.FILE_SEPARATOR.$entry);
				}
				else
				{
					@copy($source.FILE_SEPARATOR.$entry,$dest.FILE_SEPARATOR.$entry);
				}
			}
		}
		$h->close();
		return 1;
	}

	function xReplaceStringInFiles($rootDirectory,$replacementPairs)
	{
		if (!is_dir($rootDirectory))
		{
			return 0;
		}
		else
		{

			$handle=@dir($rootDirectory);
			
			while (@($entry=$handle->read()) !== false)
			{
				if (($entry!=".")&&($entry!="..")&&($entry!="cvs")&&($entry!="CVS"))
				{
					if (is_dir("$source/$entry")&&$dest!== $source.FILE_SEPARATOR.$entry)
					{
						fileSystemUtils::xReplaceStringInFiles($source.FILE_SEPARATOR.$entry,$replacementPairs);
					}
					else
					{
						stringUtils::replaceStringInFileAndSaveFile($rootDirectory.FILE_SEPARATOR.$entry,$replacementPairs);
					}
				}
			}
			
			$handle->close();
			
			return 1;
		}
	}

	function saveStringInFile($fullPathFileName,$string)
	{
		if (is_writable($fullPathFileName))
		{
			$writeHandle = fopen($fullPathFileName, "w+");

			if (fwrite($writeHandle, $string) === FALSE)
			{
				echo "Error in Function saveStringInFile()  - File <b>".$fullPathFileName."</b> is not writable ! Application could not write contents to file. Please make the file writable and try again.</b>";
				return false;
			}


			fclose($writeHandle );
			return true;

		}
		else
		{
			echo "Error in Function saveStringInFile() - File <b>".$fullPathFileName."</b> is not writable ! Application could not write contents to file. Please make the file writable and try again.</b>";
			return false;
		}

	}




}


?>
