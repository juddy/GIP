<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
?>
<?
class gipIndexBuilder
{ 

	function buildIndex($mainIndexesArray)
	{

		
		$mainIndexFile = "";

		$mainIndexFile .= "<?php\n";
		$mainIndexFile .= "include_once(\"{APPLICATION_CONF_FILE}\");\n";
		$mainIndexFile .= "\n?>";	
		$mainIndexFile .= "<?php\n";
		$mainIndexFile .= "\tinclude_once(CONFIG_FILE);\n";
		$mainIndexFile .= "\t\$needAuth = true;       // set to true if this page needs authentication\n";
		$mainIndexFile .= "\t\$showHeader = true;     // set to true if you want the header to show on this page\n";
		$mainIndexFile .= "\tinclude_once(PAGE_HEADER);\n";
		$mainIndexFile .= "\n?>";
		
		$mainIndexFile .= "<table cellspacing=10 cellpadding=9>\n";
		$mainIndexFile .= "\t<tr>\n";

		$col = 0;
		
		for ($x=0;$x<count($mainIndexesArray);$x++)
		{
			$col = $col + 1;

			$mainIndexFile .= "\t\t<td>\n";
			$mainIndexFile .= "\t\t\t<? include_once(\"".$mainIndexesArray[$x]."\"); ?>\n";
			$mainIndexFile .= "\t\t</td>\n";
			if ($col>2)
			{
				$col = 0;
				$mainIndexFile .= "\t</tr>\n";
				$mainIndexFile .= "\t<tr>\n";
			}
		}
		$mainIndexFile .= "\t</tr>\n";
		$mainIndexFile .= "</table>\n";  

		$mainIndexFile .= "<?php\n";
		$mainIndexFile .= "\tinclude_once(PAGE_FOOTER);\n";
		$mainIndexFile .= "\n?>";
		
		return $mainIndexFile;
	}

	
	
} 

?>
