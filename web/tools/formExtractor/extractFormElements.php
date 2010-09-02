<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CONFIG_FILE);
include_once(CLASS_PHP_CODE_BEAUTIFIER);

$language = $_REQUEST['language'];
$formCode = stripslashes($_REQUEST['code']);
$lines = explode("\n",$formCode);

preg_match_all('/name=["](.*?)\"/', $formCode, $matches);
//preg_match_all('/name=\"[^"]+"/', $formCode, $matches);


$formElements = $matches[1];
$code = "";
$thisString = "this";

for ($a=0;$a<count($formElements);$a++)
{
	if ($language=="php")
	{

		$code .= "\t\t\$".$thisString.ucfirst($formElements[$a])." = \$_REQUEST['".$formElements[$a]."'];\n";
	}
	else if ($language=="pcg")
	{

		$code .= "\t\t\$".$thisString.ucfirst($formElements[$a])." = commonUtils::getRequestObject('".$formElements[$a]."');\n";
	 
	}
	else if ($language=="java")
	{
		$formElements[$a] = rtrim(ltrim($formElements[$a]));
		$formElements[$a] = str_replace("<%=","",$formElements[$a]);
		$formElements[$a] = str_replace("%>","",$formElements[$a]);


		list($constant,$fieldName) = explode(".",$formElements[$a]);

		$code .= "\t\tString ".$fieldName." = request.getParameter(".$formElements[$a].");\n";
	}
}
if ($language=="php")
{

	$returnCode = "<?php\n\n".$code."\n?>";
}
else  if ($language=="pcg")
{
	$returnCode = "<?php\n\n".$code."\n?>";
}
else  if ($language=="java")
{
	$returnCode = "<%\n\n".$code."\n%>";
}

highlight_string($returnCode);




?>