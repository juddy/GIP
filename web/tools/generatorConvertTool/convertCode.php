<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CONFIG_FILE);
include_once(CLASS_PHP_CODE_BEAUTIFIER);

$generateKind = $_REQUEST['generateKind'];
$nonConvertedCode = stripslashes($_REQUEST['codeToConvert']);
$generatorName = $_REQUEST['generatorName'];

if ($generatorName=="") { $generatorName = "myPCGPlugin"; }

$lines = explode("\n",$nonConvertedCode);


$newCode = "";

if ($generateKind == "php")
{
	//$newCode .= "\$code .= \"\";\n";
}
else if ($generateKind == "javascript")
{
	$newCode .= "<script language=\"JavaScript\">\n\n";
}



$newCode .= "<?\n";
$newCode .= "\tinclude_once(\"/pcg/app/settings/genieConfiguration.inc.php\");\n";
$newCode .= "?>\n";
$newCode .= "<?\n";
$newCode .= "\tclass ".$generatorName."\n";
$newCode .= "\t{\n";
$newCode .= "\t\tfunction ".$generatorName." (\$arguments=\"\")\n";
$newCode .= "\t\t{\n";
$newCode .= "\t\t\t// Get arguments from front end here and set in local variables\n\n";

$newCode .= "\t\t}\n\n";
$newCode .= "\t\tfunction generate()\n";
$newCode .= "\t\t{\n\n";
$newCode .= "\t\t\t\$code .= \"\";\n";

for ($a=0;$a<count($lines);$a++)
{
	$thisLine = rtrim(ltrim($lines[$a]));
	
	if ($thisLine!="")
	{
		
		if ($generateKind == "php")
		{
			$newCode .= "\t\t\t\$code .= \"";
			$thisLine = str_replace("\"","\\\"",$thisLine);
			$thisLine = str_replace("\$","\\\$",$thisLine);
			$newCode .= rtrim(ltrim($thisLine));
			$newCode .= "\\n\";\n";
		}
		else if ($generateKind == "javascript")
		{
		         $newCode .= "document.write('";
		         $newCode .= rtrim(ltrim($thisLine));
		         $newCode .="');\n";	
		}
		
	}
}


$newCode .= "\n\t\t\t// Returning Generated Code\n";
$newCode .= "\t\t\treturn \$code;\n\n";
$newCode .= "\t\t} // end of generate() method \n\n";
$newCode .= "\t} // end of ".$generatorName." class\n";
$newCode .= "?>";

if ($generateKind == "php")
{
	//$newCode .= "\$code .= \"\";\n";
}
else if ($generateKind == "javascript")
{
	$newCode .= "</script>\n\n";
}


$beautifulCode = codeBeautifier::beautify($newCode);


highlight_string($beautifulCode);


?>